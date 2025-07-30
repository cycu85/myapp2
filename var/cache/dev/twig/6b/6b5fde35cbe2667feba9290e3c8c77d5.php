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

/* advance-ui-nestable.html.twig */
class __TwigTemplate_407e23b9452589cfd7ffec974cd0f523 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-nestable.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-nestable.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Nestable List"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Advance UI", "title" => "Nestable List"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Nested Sortables List</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable</code> class to list-group class to set a nested list with sortable items.</p>

                                    <div class=\"list-group col nested-list nested-sortable\">
                                        <div class=\"list-group-item nested-1\">Item 1.1</div>
                                        <div class=\"list-group-item nested-1\">Item 1.2
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Item 2.1</div>
                                                <div class=\"list-group-item nested-2\">Item 2.2
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\">Item 3.1</div>
                                                        <div class=\"list-group-item nested-3\">Item 3.2</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"list-group-item nested-1\">Item 1.3
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Item 2.1</div>
                                                <div class=\"list-group-item nested-2\">Item 2.2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Nested Sortables List with Handle</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable-handle</code> class to list-group class to set a nested list with sortable items.</p>

                                    <div class=\"list-group col nested-list nested-sortable-handle\">
                                        <div class=\"list-group-item nested-1\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 1.1
                                            <div class=\"list-group nested-list nested-sortable-handle\">
                                                <div class=\"list-group-item nested-2\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 2.1</div>
                                                <div class=\"list-group-item nested-2\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 2.2
                                                    <div class=\"list-group nested-list nested-sortable-handle\">
                                                        <div class=\"list-group-item nested-3\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 3.1</div>
                                                        <div class=\"list-group-item nested-3\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 3.2</div>
                                                        <div class=\"list-group-item nested-3\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 3.3</div>
                                                        <div class=\"list-group-item nested-3\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 3.4</div>
                                                    </div>
                                                </div>
                                                <div class=\"list-group-item nested-2\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 2.3</div>
                                                <div class=\"list-group-item nested-2\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 2.4</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Folder Structure Nested List</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable</code> class to list-group class to set a nested list with sortable items where icons are given within list-group-item.</p>

                                    <div class=\"list-group col nested-list nested-sortable\">
                                        <div class=\"list-group-item nested-1\"> <i class=\"mdi mdi-folder fs-16 align-middle text-warning me-2\"></i> assets
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\"> <i class=\"mdi mdi-folder fs-16 align-middle text-warning me-2\"></i> css
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\"><i class=\"mdi mdi-language-css3 fs-16 align-middle text-secondary me-2\"></i> style.css</div>
                                                        <div class=\"list-group-item nested-3\"><i class=\"mdi mdi-language-css3 fs-16 align-middle text-secondary me-2\"></i> style.min.css</div>
                                                    </div>
                                                </div>
                                                <div class=\"list-group-item nested-2\"> <i class=\"mdi mdi-folder fs-16 align-middle text-warning me-2\"></i> Images
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\"><i class=\"mdi mdi-image fs-16 align-middle text-info me-2\"></i> logo.png</div>
                                                    </div>
                                                </div>
                                                <div class=\"list-group-item nested-2\"> <i class=\"mdi mdi-folder fs-16 align-middle text-warning me-2\"></i> js
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\"><i class=\"mdi mdi-language-javascript fs-16 align-middle text-warning me-2\"></i> app.js</div>
                                                    </div>
                                                </div>
                                                <div class=\"list-group-item nested-2\"> <i class=\"mdi mdi-language-html5 fs-16 align-middle text-danger me-2\"></i> index.html</div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Navigation Nested List</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable</code> class to list-group class to set a nested list with sortable items where the list is shown with navigation.</p>

                                    <div class=\"list-group nested-list nested-sortable\">
                                        <div class=\"list-group-item nested-1\"> <i class=\"ri-dashboard-2-line fs-16 align-middle text-primary me-2\"></i> Dashboards
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Analytics</div>
                                                <div class=\"list-group-item nested-2\">CRM</div>
                                            </div>
                                        </div>
                                        <div class=\"list-group-item nested-1\"> <i class=\"ri-apps-2-line fs-16 align-middle text-primary me-2\"></i> Apps
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Calendar</div>
                                                <div class=\"list-group-item nested-2\">Chat</div>
                                                <div class=\"list-group-item nested-2\">Email</div>
                                            </div>
                                        </div>
                                        <div class=\"list-group-item nested-1\"> <i class=\"ri-account-circle-line fs-16 align-middle text-primary me-2\"></i> Authentication
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Sign In</div>
                                                <div class=\"list-group-item nested-2\">Sign Up</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Team Nested List</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable</code> class to list-group class to set a nested list with sortable items where images are attached within a list-group-item div element.</p>
                                    <div class=\"list-group nested-list nested-sortable\">
                                        <div class=\"list-group-item nested-1\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h5 class=\"fs-14 mb-0\">Daryl Wolcott</h5>
                                                    <p class=\"text-muted mb-0\">CEO</p>
                                                </div>
                                            </div>
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                            <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <h5 class=\"fs-14 mb-0\">Jacob Stanfield</h5>
                                                            <p class=\"text-muted mb-0\">Project Manager</p>
                                                        </div>
                                                    </div>

                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                </div>
                                                                <div class=\"flex-grow-1\">
                                                                    <h5 class=\"fs-14 mb-0\">David Houser</h5>
                                                                    <p class=\"text-muted mb-0\">Lead Designer</p>
                                                                </div>
                                                            </div>
                                                            <div class=\"list-group nested-list nested-sortable\">
                                                                <div class=\"list-group-item nested-4\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                            <div class=\"avatar-title rounded-circle\">
                                                                                <i class=\"ri-user-2-fill\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"flex-grow-1\">
                                                                            <h5 class=\"fs-14 mb-0\">Jame Baker</h5>
                                                                            <p class=\"text-muted mb-0\">UI/UX Designer</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                </div>
                                                                <div class=\"flex-grow-1\">
                                                                    <h5 class=\"fs-14 mb-0\">Mickie Reyes</h5>
                                                                    <p class=\"text-muted mb-0\">Frontend Developer</p>
                                                                </div>
                                                            </div>
                                                            <div class=\"list-group nested-list nested-sortable\">
                                                                <div class=\"list-group-item nested-4\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                            <div class=\"avatar-title rounded-circle\">
                                                                                <i class=\"ri-user-2-fill\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"flex-grow-1\">
                                                                            <h5 class=\"fs-14 mb-0\">Thomas Perez</h5>
                                                                            <p class=\"text-muted mb-0\">Developer</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-group-item nested-4\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                            <div class=\"avatar-title rounded-circle\">
                                                                                <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"flex-grow-1\">
                                                                            <h5 class=\"fs-14 mb-0\">Kim Wilson</h5>
                                                                            <p class=\"text-muted mb-0\">Developer</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                </div>
                                                                <div class=\"flex-grow-1\">
                                                                    <h5 class=\"fs-14 mb-0\">Galen Coble</h5>
                                                                    <p class=\"text-muted mb-0\">Backend Developer</p>
                                                                </div>
                                                            </div>
                                                            <div class=\"list-group nested-list nested-sortable\">
                                                                <div class=\"list-group-item nested-4\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                            <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                        </div>
                                                                        <div class=\"flex-grow-1\">
                                                                            <h5 class=\"fs-14 mb-0\">Jean Wood</h5>
                                                                            <p class=\"text-muted mb-0\">Developer</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end nested list -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 315
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    ";
        // line 322
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 324
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <!-- sortablejs -->
    <script src=\"assets/libs/sortablejs/Sortable.min.js\"></script>

    <!-- nestable init js -->
    <script src=\"assets/js/pages/nestable.init.js\"></script>

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
        return "advance-ui-nestable.html.twig";
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
        return array (  387 => 324,  382 => 322,  372 => 315,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Nestable List'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Advance UI', title: 'Nestable List'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Nested Sortables List</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable</code> class to list-group class to set a nested list with sortable items.</p>

                                    <div class=\"list-group col nested-list nested-sortable\">
                                        <div class=\"list-group-item nested-1\">Item 1.1</div>
                                        <div class=\"list-group-item nested-1\">Item 1.2
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Item 2.1</div>
                                                <div class=\"list-group-item nested-2\">Item 2.2
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\">Item 3.1</div>
                                                        <div class=\"list-group-item nested-3\">Item 3.2</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"list-group-item nested-1\">Item 1.3
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Item 2.1</div>
                                                <div class=\"list-group-item nested-2\">Item 2.2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Nested Sortables List with Handle</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable-handle</code> class to list-group class to set a nested list with sortable items.</p>

                                    <div class=\"list-group col nested-list nested-sortable-handle\">
                                        <div class=\"list-group-item nested-1\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 1.1
                                            <div class=\"list-group nested-list nested-sortable-handle\">
                                                <div class=\"list-group-item nested-2\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 2.1</div>
                                                <div class=\"list-group-item nested-2\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 2.2
                                                    <div class=\"list-group nested-list nested-sortable-handle\">
                                                        <div class=\"list-group-item nested-3\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 3.1</div>
                                                        <div class=\"list-group-item nested-3\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 3.2</div>
                                                        <div class=\"list-group-item nested-3\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 3.3</div>
                                                        <div class=\"list-group-item nested-3\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 3.4</div>
                                                    </div>
                                                </div>
                                                <div class=\"list-group-item nested-2\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 2.3</div>
                                                <div class=\"list-group-item nested-2\"><i class=\"ri-drag-move-fill align-bottom handle\"></i>Item 2.4</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Folder Structure Nested List</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable</code> class to list-group class to set a nested list with sortable items where icons are given within list-group-item.</p>

                                    <div class=\"list-group col nested-list nested-sortable\">
                                        <div class=\"list-group-item nested-1\"> <i class=\"mdi mdi-folder fs-16 align-middle text-warning me-2\"></i> assets
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\"> <i class=\"mdi mdi-folder fs-16 align-middle text-warning me-2\"></i> css
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\"><i class=\"mdi mdi-language-css3 fs-16 align-middle text-secondary me-2\"></i> style.css</div>
                                                        <div class=\"list-group-item nested-3\"><i class=\"mdi mdi-language-css3 fs-16 align-middle text-secondary me-2\"></i> style.min.css</div>
                                                    </div>
                                                </div>
                                                <div class=\"list-group-item nested-2\"> <i class=\"mdi mdi-folder fs-16 align-middle text-warning me-2\"></i> Images
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\"><i class=\"mdi mdi-image fs-16 align-middle text-info me-2\"></i> logo.png</div>
                                                    </div>
                                                </div>
                                                <div class=\"list-group-item nested-2\"> <i class=\"mdi mdi-folder fs-16 align-middle text-warning me-2\"></i> js
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\"><i class=\"mdi mdi-language-javascript fs-16 align-middle text-warning me-2\"></i> app.js</div>
                                                    </div>
                                                </div>
                                                <div class=\"list-group-item nested-2\"> <i class=\"mdi mdi-language-html5 fs-16 align-middle text-danger me-2\"></i> index.html</div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Navigation Nested List</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable</code> class to list-group class to set a nested list with sortable items where the list is shown with navigation.</p>

                                    <div class=\"list-group nested-list nested-sortable\">
                                        <div class=\"list-group-item nested-1\"> <i class=\"ri-dashboard-2-line fs-16 align-middle text-primary me-2\"></i> Dashboards
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Analytics</div>
                                                <div class=\"list-group-item nested-2\">CRM</div>
                                            </div>
                                        </div>
                                        <div class=\"list-group-item nested-1\"> <i class=\"ri-apps-2-line fs-16 align-middle text-primary me-2\"></i> Apps
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Calendar</div>
                                                <div class=\"list-group-item nested-2\">Chat</div>
                                                <div class=\"list-group-item nested-2\">Email</div>
                                            </div>
                                        </div>
                                        <div class=\"list-group-item nested-1\"> <i class=\"ri-account-circle-line fs-16 align-middle text-primary me-2\"></i> Authentication
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">Sign In</div>
                                                <div class=\"list-group-item nested-2\">Sign Up</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Team Nested List</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>nested-list nested-sortable</code> class to list-group class to set a nested list with sortable items where images are attached within a list-group-item div element.</p>
                                    <div class=\"list-group nested-list nested-sortable\">
                                        <div class=\"list-group-item nested-1\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h5 class=\"fs-14 mb-0\">Daryl Wolcott</h5>
                                                    <p class=\"text-muted mb-0\">CEO</p>
                                                </div>
                                            </div>
                                            <div class=\"list-group nested-list nested-sortable\">
                                                <div class=\"list-group-item nested-2\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                            <img src=\"assets/images/users/avatar-2.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <h5 class=\"fs-14 mb-0\">Jacob Stanfield</h5>
                                                            <p class=\"text-muted mb-0\">Project Manager</p>
                                                        </div>
                                                    </div>

                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                    <img src=\"assets/images/users/avatar-3.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                </div>
                                                                <div class=\"flex-grow-1\">
                                                                    <h5 class=\"fs-14 mb-0\">David Houser</h5>
                                                                    <p class=\"text-muted mb-0\">Lead Designer</p>
                                                                </div>
                                                            </div>
                                                            <div class=\"list-group nested-list nested-sortable\">
                                                                <div class=\"list-group-item nested-4\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                            <div class=\"avatar-title rounded-circle\">
                                                                                <i class=\"ri-user-2-fill\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"flex-grow-1\">
                                                                            <h5 class=\"fs-14 mb-0\">Jame Baker</h5>
                                                                            <p class=\"text-muted mb-0\">UI/UX Designer</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                    <img src=\"assets/images/users/avatar-4.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                </div>
                                                                <div class=\"flex-grow-1\">
                                                                    <h5 class=\"fs-14 mb-0\">Mickie Reyes</h5>
                                                                    <p class=\"text-muted mb-0\">Frontend Developer</p>
                                                                </div>
                                                            </div>
                                                            <div class=\"list-group nested-list nested-sortable\">
                                                                <div class=\"list-group-item nested-4\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                            <div class=\"avatar-title rounded-circle\">
                                                                                <i class=\"ri-user-2-fill\"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"flex-grow-1\">
                                                                            <h5 class=\"fs-14 mb-0\">Thomas Perez</h5>
                                                                            <p class=\"text-muted mb-0\">Developer</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-group-item nested-4\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                            <div class=\"avatar-title rounded-circle\">
                                                                                <img src=\"assets/images/users/avatar-5.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"flex-grow-1\">
                                                                            <h5 class=\"fs-14 mb-0\">Kim Wilson</h5>
                                                                            <p class=\"text-muted mb-0\">Developer</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"list-group nested-list nested-sortable\">
                                                        <div class=\"list-group-item nested-3\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                    <img src=\"assets/images/users/avatar-6.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                </div>
                                                                <div class=\"flex-grow-1\">
                                                                    <h5 class=\"fs-14 mb-0\">Galen Coble</h5>
                                                                    <p class=\"text-muted mb-0\">Backend Developer</p>
                                                                </div>
                                                            </div>
                                                            <div class=\"list-group nested-list nested-sortable\">
                                                                <div class=\"list-group-item nested-4\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <div class=\"avatar-xs flex-shrink-0 me-3\">
                                                                            <img src=\"assets/images/users/avatar-7.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                                                                        </div>
                                                                        <div class=\"flex-grow-1\">
                                                                            <h5 class=\"fs-14 mb-0\">Jean Wood</h5>
                                                                            <p class=\"text-muted mb-0\">Developer</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end nested list -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
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
    <!-- sortablejs -->
    <script src=\"assets/libs/sortablejs/Sortable.min.js\"></script>

    <!-- nestable init js -->
    <script src=\"assets/js/pages/nestable.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "advance-ui-nestable.html.twig", "/home/waldi/myapp2/templates/advance-ui-nestable.html.twig");
    }
}
