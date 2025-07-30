<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages-pricing.html.twig */
class __TwigTemplate_653f4681d6d07eee69629d6a027ca1dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-pricing.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Pricing"]);
        echo "

    ";
        // line 7
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <!-- Begin page -->
    <div id=\"layout-wrapper\">

        ";
        // line 16
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"main-content\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    ";
        // line 26
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Pages", "title" => "Pricing"]);
        echo "

                    <div class=\"row justify-content-center mt-4\">
                        <div class=\"col-lg-5\">
                            <div class=\"text-center mb-4\">
                                <h4 class=\"fw-semibold fs-22\">Plans & Pricing</h4>
                                <p class=\"text-muted mb-4 fs-15\">Simple pricing. No hidden fees. Advanced features for you business.</p>

                                <div class=\"d-inline-flex\">
                                    <ul class=\"nav nav-pills arrow-navtabs plan-nav rounded mb-3 p-1\" id=\"pills-tab\" role=\"tablist\">
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link fw-semibold active\" id=\"month-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#month\" type=\"button\" role=\"tab\" aria-selected=\"true\">Monthly</button>
                                        </li>
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link fw-semibold\" id=\"annual-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#annual\" type=\"button\" role=\"tab\" aria-selected=\"false\">Annually <span class=\"badge bg-success\">25% Off</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row\">
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card pricing-box\">
                                <div class=\"card-body bg-light m-2 p-4\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"flex-grow-1\">
                                            <h5 class=\"mb-0 fw-semibold\">Starter</h5>
                                        </div>
                                        <div class=\"ms-auto\">
                                            <h2 class=\"month mb-0\">\$19 <small class=\"fs-13 text-muted\">/Month</small></h2>
                                            <h2 class=\"annual mb-0\"><small class=\"fs-16\"><del>\$228</del></small> \$171 <small class=\"fs-13 text-muted\">/Year</small></h2>
                                        </div>
                                    </div>

                                    <p class=\"text-muted\">The perfect way to get started and get used to our tools.</p>
                                    <ul class=\"list-unstyled vstack gap-3\">
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>3</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>299</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>5</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"mt-3 pt-2\">
                                        <a href=\"javascript:void(0);\" class=\"btn btn-danger disabled w-100\">Your Current Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card pricing-box\">
                                <div class=\"card-body bg-light m-2 p-4\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"flex-grow-1\">
                                            <h5 class=\"mb-0 fw-semibold\">Professional</h5>
                                        </div>
                                        <div class=\"ms-auto\">
                                            <h2 class=\"month mb-0\">\$29 <small class=\"fs-13 text-muted\">/Month</small></h2>
                                            <h2 class=\"annual mb-0\"><small class=\"fs-16\"><del>\$348</del></small> \$261 <small class=\"fs-13 text-muted\">/Year</small></h2>
                                        </div>
                                    </div>
                                    <p class=\"text-muted\">Excellent for scalling teams to build culture. Special plan for professional business.</p>
                                    <ul class=\"list-unstyled vstack gap-3\">
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>8</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>449</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>7</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"mt-3 pt-2\">
                                        <a href=\"javascript:void(0);\" class=\"btn btn-info w-100\">Change Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card pricing-box ribbon-box right\">
                                <div class=\"card-body bg-light m-2 p-4\">
                                    <div class=\"ribbon-two ribbon-two-danger\"><span>Popular</span></div>
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"flex-grow-1\">
                                            <h5 class=\"mb-0 fw-semibold\">Enterprise</h5>
                                        </div>
                                        <div class=\"ms-auto\">
                                            <h2 class=\"month mb-0\">\$39 <small class=\"fs-13 text-muted\">/Month</small></h2>
                                            <h2 class=\"annual mb-0\"><small class=\"fs-16\"><del>\$468</del></small> \$351 <small class=\"fs-13 text-muted\">/Year</small></h2>
                                        </div>
                                    </div>
                                    <p class=\"text-muted\">This plan is for those who have a team alredy and running a large business.</p>
                                    <ul class=\"list-unstyled vstack gap-3\">
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>15</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>12</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>35GB</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"mt-3 pt-2\">
                                        <a href=\"javascript:void(0);\" class=\"btn btn-info w-100\">Change Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card pricing-box\">
                                <div class=\"card-body bg-light m-2 p-4\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"flex-grow-1\">
                                            <h5 class=\"mb-0 fw-semibold\">Unlimited</h5>
                                        </div>
                                        <div class=\"ms-auto\">
                                            <h2 class=\"month mb-0\">\$49 <small class=\"fs-13 text-muted\">/Month</small></h2>
                                            <h2 class=\"annual mb-0\"><small class=\"fs-16\"><del>\$588</del></small> \$441 <small class=\"fs-13 text-muted\">/Year</small></h2>
                                        </div>
                                    </div>
                                    <p class=\"text-muted\">For most businesses that want to optimize web queries.</p>
                                    <ul class=\"list-unstyled vstack gap-3\">
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"mt-3 pt-2\">
                                        <a href=\"javascript:void(0);\" class=\"btn btn-info w-100\">Change Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row justify-content-center mt-5\">
                        <div class=\"col-lg-5\">
                            <div class=\"text-center mb-4 pb-2\">
                                <h4 class=\"fw-semibold fs-22\">Choose the plan that's right for you</h4>
                                <p class=\"text-muted mb-4 fs-15\">Simple pricing. No hidden fees. Advanced features for you business.</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-9\">
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    <div class=\"card pricing-box\">
                                        <div class=\"card-body p-4 m-2\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-grow-1\">
                                                    <h5 class=\"mb-1 fw-semibold\">Basic Plan</h5>
                                                    <p class=\"text-muted mb-0\">For Startup</p>
                                                </div>
                                                <div class=\"avatar-sm\">
                                                    <div class=\"avatar-title bg-light rounded-circle text-primary\">
                                                        <i class=\"ri-book-mark-line fs-20\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"pt-4\">
                                                <h2><sup><small>\$</small></sup>19 <span class=\"fs-13 text-muted\">/Month</span></h2>
                                            </div>
                                            <hr class=\"my-4 text-muted\">
                                            <div>
                                                <ul class=\"list-unstyled text-muted vstack gap-3\">
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Upto <b>3</b> Projects
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Upto <b>299</b> Customers
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Scalable Bandwidth
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>5</b> FTP Login
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>24/7</b> Support
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Storage
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Domain
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class=\"mt-4\">
                                                    <a href=\"javascript:void(0);\" class=\"btn btn-soft-success w-100 waves-effect waves-light\">Sign up free</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class=\"col-lg-4\">
                                    <div class=\"card pricing-box ribbon-box right\">
                                        <div class=\"card-body p-4 m-2\">
                                            <div class=\"ribbon-two ribbon-two-danger\"><span>Popular</span></div>
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-grow-1\">
                                                        <h5 class=\"mb-1 fw-semibold\">Pro Business</h5>
                                                        <p class=\"text-muted mb-0\">Professional plans</p>
                                                    </div>
                                                    <div class=\"avatar-sm\">
                                                        <div class=\"avatar-title bg-light rounded-circle text-primary\">
                                                            <i class=\"ri-medal-line fs-20\"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"pt-4\">
                                                    <h2><sup><small>\$</small></sup> 29<span class=\"fs-13 text-muted\">/Month</span></h2>
                                                </div>
                                            </div>
                                            <hr class=\"my-4 text-muted\">
                                            <div>
                                                <ul class=\"list-unstyled vstack gap-3 text-muted\">
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Upto <b>15</b> Projects
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Customers
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Scalable Bandwidth
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>12</b> FTP Login
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>24/7</b> Support
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Storage
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Domain
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class=\"mt-4\">
                                                    <a href=\"javascript:void(0);\" class=\"btn btn-success w-100 waves-effect waves-light\">Get started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class=\"col-lg-4\">
                                    <div class=\"card pricing-box\">
                                        <div class=\"card-body p-4 m-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-grow-1\">
                                                        <h5 class=\"mb-1 fw-semibold\">Platinum Plan</h5>
                                                        <p class=\"text-muted mb-0\">Enterprise Businesses</p>
                                                    </div>
                                                    <div class=\"avatar-sm\">
                                                        <div class=\"avatar-title bg-light rounded-circle text-primary\">
                                                            <i class=\"ri-stack-line fs-20\"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"pt-4\">
                                                    <h2><sup><small>\$</small></sup> 39<span class=\"fs-13 text-muted\">/Month</span></h2>
                                                </div>
                                            </div>
                                            <hr class=\"my-4 text-muted\">
                                            <div>
                                                <ul class=\"list-unstyled vstack gap-3 text-muted\">
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Projects
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Customers
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Scalable Bandwidth
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> FTP Login
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>24/7</b> Support
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Storage
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Domain
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class=\"mt-4\">
                                                    <a href=\"javascript:void(0);\" class=\"btn btn-soft-success w-100 waves-effect waves-light\">Get started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row justify-content-center mt-5\">
                        <div class=\"col-lg-4\">
                            <div class=\"text-center mb-4 pb-2\">
                                <h4 class=\"fw-semibold fs-22\">Simple Pricing Plan</h4>
                                <p class=\"text-muted mb-4 fs-15\">Simple pricing. No hidden fees. Advanced features for you business.</p>

                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card pricing-box text-center\">
                                <div class=\"row g-0\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body h-100\">
                                            <div>
                                                <h5 class=\"mb-1\">Starter</h5>
                                                <p class=\"text-muted\">Starter plans</p>
                                            </div>

                                            <div class=\"py-4\">
                                                <h2><sup><small>\$</small></sup>22 <span class=\"fs-13 text-muted\"> /Per month</span></h2>
                                            </div>

                                            <div class=\"text-center plan-btn mt-2\">
                                                <a href=\"javascript:void(0);\" class=\"btn btn-success w-sm waves-effect waves-light\">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body border-start mt-4 mt-lg-0\">
                                            <div class=\"card-header bg-light\">
                                                <h5 class=\"fs-15 mb-0\">Plan Features:</h5>
                                            </div>
                                            <div class=\"card-body pb-0\">
                                                <ul class=\"list-unstyled vstack gap-3 mb-0\">
                                                    <li>Users: <span class=\"text-success fw-semibold\">1</span></li>
                                                    <li>Storage: <span class=\"text-success fw-semibold\">01 GB</span></li>
                                                    <li>Domain: <span class=\"text-success fw-semibold\">No</span></li>
                                                    <li>Support: <span class=\"text-success fw-semibold\">No</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end row-->

                        <div class=\"col-lg-6\">
                            <div class=\"card pricing-box ribbon-box ribbon-fill text-center\">
                                <div class=\"ribbon ribbon-primary\">New</div>
                                <div class=\"row g-0\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body h-100\">
                                            <div>
                                                <h5 class=\"mb-1\">Professional</h5>
                                                <p class=\"text-muted\">Professional plans</p>
                                            </div>

                                            <div class=\"py-4\">
                                                <h2><sup><small>\$</small></sup>29 <span class=\"fs-13 text-muted\">/Per month</span></h2>
                                            </div>

                                            <div class=\"text-center plan-btn mt-2\">
                                                <a href=\"javascript:void(0);\" class=\"btn btn-success w-sm waves-effect waves-light\">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body border-start mt-4 mt-lg-0\">
                                            <div class=\"card-header bg-light\">
                                                <h5 class=\"fs-15 mb-0\">Plan Features:</h5>
                                            </div>
                                            <div class=\"card-body pb-0\">
                                                <ul class=\"list-unstyled vstack gap-3 mb-0\">
                                                    <li>Users: <span class=\"text-success fw-semibold\">3</span></li>
                                                    <li>Storage: <span class=\"text-success fw-semibold\">10 GB</span></li>
                                                    <li>Domain: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                    <li>Support: <span class=\"text-success fw-semibold\">No</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end row-->

                        <div class=\"col-lg-6\">
                            <div class=\"card pricing-box ribbon-box ribbon-fill text-center\">
                                <div class=\"ribbon ribbon-primary\">New</div>
                                <div class=\"row g-0\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body h-100\">
                                            <div>
                                                <h5 class=\"mb-1\">Enterprise</h5>
                                                <p class=\"text-muted\">Enterprise plans</p>
                                            </div>

                                            <div class=\"py-4\">
                                                <h2><sup><small>\$</small></sup>39 <span class=\"fs-13 text-muted\">/Per month</span></h2>
                                            </div>

                                            <div class=\"text-center plan-btn mt-2\">
                                                <a href=\"javascript:void(0);\" class=\"btn btn-success w-sm waves-effect waves-light\">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body border-start mt-4 mt-lg-0\">
                                            <div class=\"card-header bg-light\">
                                                <h5 class=\"fs-15 mb-0\">Plan Features:</h5>
                                            </div>
                                            <div class=\"card-body pb-0\">
                                                <ul class=\"list-unstyled vstack gap-3 mb-0\">
                                                    <li>Users: <span class=\"text-success fw-semibold\">3</span></li>
                                                    <li>Storage: <span class=\"text-success fw-semibold\">20 GB</span></li>
                                                    <li>Domain: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                    <li>Support: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end col-->

                        <div class=\"col-lg-6\">
                            <div class=\"card pricing-box text-center\">
                                <div class=\"row g-0\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body h-100\">
                                            <div>
                                                <h5 class=\"mb-1\">Unlimited</h5>
                                                <p class=\"text-muted\">Unlimited plans</p>
                                            </div>
                                            <div class=\"py-4\">
                                                <h2><sup><small>\$</small></sup>49 <span class=\"fs-13 text-muted\">/Per month</span></h2>
                                            </div>

                                            <div class=\"text-center plan-btn mt-2\">
                                                <a href=\"javascript:void(0);\" class=\"btn btn-success w-sm waves-effect waves-light\">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body border-start mt-4 mt-lg-0\">
                                            <div class=\"card-header bg-light\">
                                                <h5 class=\"fs-15 mb-0\">Plan Features:</h5>
                                            </div>
                                            <div class=\"card-body pb-0\">
                                                <ul class=\"list-unstyled vstack gap-3 mb-0\">
                                                    <li>Users: <span class=\"text-success fw-semibold\">5</span></li>
                                                    <li>Storage: <span class=\"text-success fw-semibold\">40 GB</span></li>
                                                    <li>Domain: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                    <li>Support: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 941
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 950
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 952
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <script src=\"assets/js/pages/pricing.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages-pricing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1015 => 952,  1010 => 950,  998 => 941,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Pricing'}) }}

    {{ include('partials/head-css.html.twig') }}

</head>

<body>

    <!-- Begin page -->
    <div id=\"layout-wrapper\">

        {{ include('partials/menu.html.twig') }}

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"main-content\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Pages', title: 'Pricing'}) }}

                    <div class=\"row justify-content-center mt-4\">
                        <div class=\"col-lg-5\">
                            <div class=\"text-center mb-4\">
                                <h4 class=\"fw-semibold fs-22\">Plans & Pricing</h4>
                                <p class=\"text-muted mb-4 fs-15\">Simple pricing. No hidden fees. Advanced features for you business.</p>

                                <div class=\"d-inline-flex\">
                                    <ul class=\"nav nav-pills arrow-navtabs plan-nav rounded mb-3 p-1\" id=\"pills-tab\" role=\"tablist\">
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link fw-semibold active\" id=\"month-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#month\" type=\"button\" role=\"tab\" aria-selected=\"true\">Monthly</button>
                                        </li>
                                        <li class=\"nav-item\" role=\"presentation\">
                                            <button class=\"nav-link fw-semibold\" id=\"annual-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#annual\" type=\"button\" role=\"tab\" aria-selected=\"false\">Annually <span class=\"badge bg-success\">25% Off</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row\">
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card pricing-box\">
                                <div class=\"card-body bg-light m-2 p-4\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"flex-grow-1\">
                                            <h5 class=\"mb-0 fw-semibold\">Starter</h5>
                                        </div>
                                        <div class=\"ms-auto\">
                                            <h2 class=\"month mb-0\">\$19 <small class=\"fs-13 text-muted\">/Month</small></h2>
                                            <h2 class=\"annual mb-0\"><small class=\"fs-16\"><del>\$228</del></small> \$171 <small class=\"fs-13 text-muted\">/Year</small></h2>
                                        </div>
                                    </div>

                                    <p class=\"text-muted\">The perfect way to get started and get used to our tools.</p>
                                    <ul class=\"list-unstyled vstack gap-3\">
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>3</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>299</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>5</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"mt-3 pt-2\">
                                        <a href=\"javascript:void(0);\" class=\"btn btn-danger disabled w-100\">Your Current Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card pricing-box\">
                                <div class=\"card-body bg-light m-2 p-4\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"flex-grow-1\">
                                            <h5 class=\"mb-0 fw-semibold\">Professional</h5>
                                        </div>
                                        <div class=\"ms-auto\">
                                            <h2 class=\"month mb-0\">\$29 <small class=\"fs-13 text-muted\">/Month</small></h2>
                                            <h2 class=\"annual mb-0\"><small class=\"fs-16\"><del>\$348</del></small> \$261 <small class=\"fs-13 text-muted\">/Year</small></h2>
                                        </div>
                                    </div>
                                    <p class=\"text-muted\">Excellent for scalling teams to build culture. Special plan for professional business.</p>
                                    <ul class=\"list-unstyled vstack gap-3\">
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>8</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>449</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>7</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"mt-3 pt-2\">
                                        <a href=\"javascript:void(0);\" class=\"btn btn-info w-100\">Change Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card pricing-box ribbon-box right\">
                                <div class=\"card-body bg-light m-2 p-4\">
                                    <div class=\"ribbon-two ribbon-two-danger\"><span>Popular</span></div>
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"flex-grow-1\">
                                            <h5 class=\"mb-0 fw-semibold\">Enterprise</h5>
                                        </div>
                                        <div class=\"ms-auto\">
                                            <h2 class=\"month mb-0\">\$39 <small class=\"fs-13 text-muted\">/Month</small></h2>
                                            <h2 class=\"annual mb-0\"><small class=\"fs-16\"><del>\$468</del></small> \$351 <small class=\"fs-13 text-muted\">/Year</small></h2>
                                        </div>
                                    </div>
                                    <p class=\"text-muted\">This plan is for those who have a team alredy and running a large business.</p>
                                    <ul class=\"list-unstyled vstack gap-3\">
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>15</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>12</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>35GB</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-danger me-1\">
                                                    <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"mt-3 pt-2\">
                                        <a href=\"javascript:void(0);\" class=\"btn btn-info w-100\">Change Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card pricing-box\">
                                <div class=\"card-body bg-light m-2 p-4\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <div class=\"flex-grow-1\">
                                            <h5 class=\"mb-0 fw-semibold\">Unlimited</h5>
                                        </div>
                                        <div class=\"ms-auto\">
                                            <h2 class=\"month mb-0\">\$49 <small class=\"fs-13 text-muted\">/Month</small></h2>
                                            <h2 class=\"annual mb-0\"><small class=\"fs-16\"><del>\$588</del></small> \$441 <small class=\"fs-13 text-muted\">/Year</small></h2>
                                        </div>
                                    </div>
                                    <p class=\"text-muted\">For most businesses that want to optimize web queries.</p>
                                    <ul class=\"list-unstyled vstack gap-3\">
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Projects
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Customers
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Scalable Bandwidth
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> FTP Login
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>24/7</b> Support
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <b>Unlimited</b> Storage
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 text-success me-1\">
                                                    <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    Domain
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class=\"mt-3 pt-2\">
                                        <a href=\"javascript:void(0);\" class=\"btn btn-info w-100\">Change Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row justify-content-center mt-5\">
                        <div class=\"col-lg-5\">
                            <div class=\"text-center mb-4 pb-2\">
                                <h4 class=\"fw-semibold fs-22\">Choose the plan that's right for you</h4>
                                <p class=\"text-muted mb-4 fs-15\">Simple pricing. No hidden fees. Advanced features for you business.</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-9\">
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    <div class=\"card pricing-box\">
                                        <div class=\"card-body p-4 m-2\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"flex-grow-1\">
                                                    <h5 class=\"mb-1 fw-semibold\">Basic Plan</h5>
                                                    <p class=\"text-muted mb-0\">For Startup</p>
                                                </div>
                                                <div class=\"avatar-sm\">
                                                    <div class=\"avatar-title bg-light rounded-circle text-primary\">
                                                        <i class=\"ri-book-mark-line fs-20\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"pt-4\">
                                                <h2><sup><small>\$</small></sup>19 <span class=\"fs-13 text-muted\">/Month</span></h2>
                                            </div>
                                            <hr class=\"my-4 text-muted\">
                                            <div>
                                                <ul class=\"list-unstyled text-muted vstack gap-3\">
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Upto <b>3</b> Projects
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Upto <b>299</b> Customers
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Scalable Bandwidth
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>5</b> FTP Login
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>24/7</b> Support
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Storage
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Domain
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class=\"mt-4\">
                                                    <a href=\"javascript:void(0);\" class=\"btn btn-soft-success w-100 waves-effect waves-light\">Sign up free</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class=\"col-lg-4\">
                                    <div class=\"card pricing-box ribbon-box right\">
                                        <div class=\"card-body p-4 m-2\">
                                            <div class=\"ribbon-two ribbon-two-danger\"><span>Popular</span></div>
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-grow-1\">
                                                        <h5 class=\"mb-1 fw-semibold\">Pro Business</h5>
                                                        <p class=\"text-muted mb-0\">Professional plans</p>
                                                    </div>
                                                    <div class=\"avatar-sm\">
                                                        <div class=\"avatar-title bg-light rounded-circle text-primary\">
                                                            <i class=\"ri-medal-line fs-20\"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"pt-4\">
                                                    <h2><sup><small>\$</small></sup> 29<span class=\"fs-13 text-muted\">/Month</span></h2>
                                                </div>
                                            </div>
                                            <hr class=\"my-4 text-muted\">
                                            <div>
                                                <ul class=\"list-unstyled vstack gap-3 text-muted\">
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Upto <b>15</b> Projects
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Customers
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Scalable Bandwidth
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>12</b> FTP Login
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>24/7</b> Support
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Storage
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-danger me-1\">
                                                                <i class=\"ri-close-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Domain
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class=\"mt-4\">
                                                    <a href=\"javascript:void(0);\" class=\"btn btn-success w-100 waves-effect waves-light\">Get started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class=\"col-lg-4\">
                                    <div class=\"card pricing-box\">
                                        <div class=\"card-body p-4 m-2\">
                                            <div>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-grow-1\">
                                                        <h5 class=\"mb-1 fw-semibold\">Platinum Plan</h5>
                                                        <p class=\"text-muted mb-0\">Enterprise Businesses</p>
                                                    </div>
                                                    <div class=\"avatar-sm\">
                                                        <div class=\"avatar-title bg-light rounded-circle text-primary\">
                                                            <i class=\"ri-stack-line fs-20\"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"pt-4\">
                                                    <h2><sup><small>\$</small></sup> 39<span class=\"fs-13 text-muted\">/Month</span></h2>
                                                </div>
                                            </div>
                                            <hr class=\"my-4 text-muted\">
                                            <div>
                                                <ul class=\"list-unstyled vstack gap-3 text-muted\">
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Projects
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Customers
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Scalable Bandwidth
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> FTP Login
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>24/7</b> Support
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <b>Unlimited</b> Storage
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class=\"d-flex\">
                                                            <div class=\"flex-shrink-0 text-success me-1\">
                                                                <i class=\"ri-checkbox-circle-fill fs-15 align-middle\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                Domain
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class=\"mt-4\">
                                                    <a href=\"javascript:void(0);\" class=\"btn btn-soft-success w-100 waves-effect waves-light\">Get started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row justify-content-center mt-5\">
                        <div class=\"col-lg-4\">
                            <div class=\"text-center mb-4 pb-2\">
                                <h4 class=\"fw-semibold fs-22\">Simple Pricing Plan</h4>
                                <p class=\"text-muted mb-4 fs-15\">Simple pricing. No hidden fees. Advanced features for you business.</p>

                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card pricing-box text-center\">
                                <div class=\"row g-0\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body h-100\">
                                            <div>
                                                <h5 class=\"mb-1\">Starter</h5>
                                                <p class=\"text-muted\">Starter plans</p>
                                            </div>

                                            <div class=\"py-4\">
                                                <h2><sup><small>\$</small></sup>22 <span class=\"fs-13 text-muted\"> /Per month</span></h2>
                                            </div>

                                            <div class=\"text-center plan-btn mt-2\">
                                                <a href=\"javascript:void(0);\" class=\"btn btn-success w-sm waves-effect waves-light\">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body border-start mt-4 mt-lg-0\">
                                            <div class=\"card-header bg-light\">
                                                <h5 class=\"fs-15 mb-0\">Plan Features:</h5>
                                            </div>
                                            <div class=\"card-body pb-0\">
                                                <ul class=\"list-unstyled vstack gap-3 mb-0\">
                                                    <li>Users: <span class=\"text-success fw-semibold\">1</span></li>
                                                    <li>Storage: <span class=\"text-success fw-semibold\">01 GB</span></li>
                                                    <li>Domain: <span class=\"text-success fw-semibold\">No</span></li>
                                                    <li>Support: <span class=\"text-success fw-semibold\">No</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end row-->

                        <div class=\"col-lg-6\">
                            <div class=\"card pricing-box ribbon-box ribbon-fill text-center\">
                                <div class=\"ribbon ribbon-primary\">New</div>
                                <div class=\"row g-0\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body h-100\">
                                            <div>
                                                <h5 class=\"mb-1\">Professional</h5>
                                                <p class=\"text-muted\">Professional plans</p>
                                            </div>

                                            <div class=\"py-4\">
                                                <h2><sup><small>\$</small></sup>29 <span class=\"fs-13 text-muted\">/Per month</span></h2>
                                            </div>

                                            <div class=\"text-center plan-btn mt-2\">
                                                <a href=\"javascript:void(0);\" class=\"btn btn-success w-sm waves-effect waves-light\">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body border-start mt-4 mt-lg-0\">
                                            <div class=\"card-header bg-light\">
                                                <h5 class=\"fs-15 mb-0\">Plan Features:</h5>
                                            </div>
                                            <div class=\"card-body pb-0\">
                                                <ul class=\"list-unstyled vstack gap-3 mb-0\">
                                                    <li>Users: <span class=\"text-success fw-semibold\">3</span></li>
                                                    <li>Storage: <span class=\"text-success fw-semibold\">10 GB</span></li>
                                                    <li>Domain: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                    <li>Support: <span class=\"text-success fw-semibold\">No</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end row-->

                        <div class=\"col-lg-6\">
                            <div class=\"card pricing-box ribbon-box ribbon-fill text-center\">
                                <div class=\"ribbon ribbon-primary\">New</div>
                                <div class=\"row g-0\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body h-100\">
                                            <div>
                                                <h5 class=\"mb-1\">Enterprise</h5>
                                                <p class=\"text-muted\">Enterprise plans</p>
                                            </div>

                                            <div class=\"py-4\">
                                                <h2><sup><small>\$</small></sup>39 <span class=\"fs-13 text-muted\">/Per month</span></h2>
                                            </div>

                                            <div class=\"text-center plan-btn mt-2\">
                                                <a href=\"javascript:void(0);\" class=\"btn btn-success w-sm waves-effect waves-light\">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body border-start mt-4 mt-lg-0\">
                                            <div class=\"card-header bg-light\">
                                                <h5 class=\"fs-15 mb-0\">Plan Features:</h5>
                                            </div>
                                            <div class=\"card-body pb-0\">
                                                <ul class=\"list-unstyled vstack gap-3 mb-0\">
                                                    <li>Users: <span class=\"text-success fw-semibold\">3</span></li>
                                                    <li>Storage: <span class=\"text-success fw-semibold\">20 GB</span></li>
                                                    <li>Domain: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                    <li>Support: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end col-->

                        <div class=\"col-lg-6\">
                            <div class=\"card pricing-box text-center\">
                                <div class=\"row g-0\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body h-100\">
                                            <div>
                                                <h5 class=\"mb-1\">Unlimited</h5>
                                                <p class=\"text-muted\">Unlimited plans</p>
                                            </div>
                                            <div class=\"py-4\">
                                                <h2><sup><small>\$</small></sup>49 <span class=\"fs-13 text-muted\">/Per month</span></h2>
                                            </div>

                                            <div class=\"text-center plan-btn mt-2\">
                                                <a href=\"javascript:void(0);\" class=\"btn btn-success w-sm waves-effect waves-light\">Sign up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class=\"col-lg-6\">
                                        <div class=\"card-body border-start mt-4 mt-lg-0\">
                                            <div class=\"card-header bg-light\">
                                                <h5 class=\"fs-15 mb-0\">Plan Features:</h5>
                                            </div>
                                            <div class=\"card-body pb-0\">
                                                <ul class=\"list-unstyled vstack gap-3 mb-0\">
                                                    <li>Users: <span class=\"text-success fw-semibold\">5</span></li>
                                                    <li>Storage: <span class=\"text-success fw-semibold\">40 GB</span></li>
                                                    <li>Domain: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                    <li>Support: <span class=\"text-success fw-semibold\">Yes</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            {{ include('partials/footer.html.twig') }}
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    {{ include('partials/customizer.html.twig') }}

    {{ include('partials/vendor-scripts.html.twig') }}

    <script src=\"assets/js/pages/pricing.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "pages-pricing.html.twig", "/home/waldi/myapp2/templates/pages-pricing.html.twig");
    }
}
