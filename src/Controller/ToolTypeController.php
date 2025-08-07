<?php

namespace App\Controller;

use App\Entity\ToolType as ToolTypeEntity;
use App\Form\ToolTypeType;
use App\Repository\ToolTypeRepository;
use App\Service\PermissionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/tools/types')]
#[IsGranted('ROLE_USER')]
class ToolTypeController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager
    ) {
    }

    #[Route('/', name: 'app_tool_type_index', methods: ['GET'])]
    public function index(ToolTypeRepository $typeRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania typów narzędzi.');
        }

        $types = $typeRepository->findWithToolsCount();

        return $this->render('tool_type/index.html.twig', [
            'types' => $types,
            'can_create' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE'),
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
        ]);
    }

    #[Route('/new', name: 'app_tool_type_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia typów narzędzi.');
        }

        $type = new ToolTypeEntity();
        $form = $this->createForm(ToolTypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($type);
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Typ narzędzia "%s" został dodany pomyślnie.', $type->getName()));

            return $this->redirectToRoute('app_tool_type_index');
        }

        return $this->render('tool_type/new.html.twig', [
            'type' => $type,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tool_type_show', methods: ['GET'])]
    public function show(ToolTypeEntity $type): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania typów narzędzi.');
        }

        if (!$type->isActive()) {
            throw $this->createNotFoundException('Typ narzędzia nie został znaleziony.');
        }

        return $this->render('tool_type/show.html.twig', [
            'type' => $type,
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tool_type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ToolTypeEntity $type): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji typów narzędzi.');
        }

        if (!$type->isActive()) {
            throw $this->createNotFoundException('Typ narzędzia nie został znaleziony.');
        }

        $form = $this->createForm(ToolTypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Typ narzędzia "%s" został zaktualizowany pomyślnie.', $type->getName()));

            return $this->redirectToRoute('app_tool_type_show', ['id' => $type->getId()]);
        }

        return $this->render('tool_type/edit.html.twig', [
            'type' => $type,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tool_type_delete', methods: ['POST'])]
    public function delete(Request $request, ToolTypeEntity $type): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania typów narzędzi.');
        }

        if (!$type->isActive()) {
            throw $this->createNotFoundException('Typ narzędzia nie został znaleziony.');
        }

        if ($this->isCsrfTokenValid('delete'.$type->getId(), $request->request->get('_token'))) {
            // Check if type has any tools
            $toolsCount = $type->getTools()->filter(fn($tool) => $tool->isActive())->count();
            
            if ($toolsCount > 0) {
                $this->addFlash('error', sprintf('Nie można usunąć typu "%s" - jest używany przez %d narzędzi. Najpierw zmień typ tych narzędzi.', 
                    $type->getName(), $toolsCount));
            } else {
                // Soft delete
                $type->setIsActive(false);
                $this->entityManager->flush();

                $this->addFlash('success', sprintf('Typ narzędzia "%s" został usunięty pomyślnie.', $type->getName()));
            }
        } else {
            $this->addFlash('error', 'Nieprawidłowy token CSRF.');
        }

        return $this->redirectToRoute('app_tool_type_index');
    }
}