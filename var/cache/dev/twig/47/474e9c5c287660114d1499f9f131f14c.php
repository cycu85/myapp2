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

/* advance-ui-tour.html.twig */
class __TwigTemplate_c98c25a5893b6e35293631fddb96ee75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-tour.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-tour.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Tour"]);
        echo "
    <!-- shepherd.js css -->
    <link rel=\"stylesheet\" href=\"assets/libs/shepherd.js/css/shepherd.css\">

    ";
        // line 9
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <!-- Begin page -->
    <div id=\"layout-wrapper\">

        ";
        // line 18
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"main-content\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    ";
        // line 28
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Advance UI", "title" => "Tour"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Shepherdjs</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">

                                    <p class=\"text-muted mb-4\">Use when you want to help users along getting accustomed to your user interface or Use when you want to notify your users of new or unfamiliar features.</p>

                                    <div>
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-lg-5\">
                                                <div class=\"text-center mt-4 mb-5\">
                                                    <div class=\"py-3 px-2 d-inline-block\" id=\"logo-tour\">
                                                        <img src=\"assets/images/logo-dark.png\" class=\"card-logo card-logo-dark\" alt=\"logo\" height=\"17\">
                                                        <img src=\"assets/images/logo-light.png\" class=\"card-logo card-logo-light\" alt=\"logo\" height=\"17\">
                                                    </div>
                                                    <h5 class=\"fs-16\">Responsive Admin Dashboard Template</h5>
                                                    <p class=\"text-muted\">Vestibulum auctor tincidunt semper. Phasellus ut vulputate lacus. Suspendisse ultricies mi eros, sit amet tempor nulla varius sed dapibus in tellus.</p>
                                                    <div class=\"hstack gap-2 justify-content-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\">View more</button>
                                                        <button type=\"button\" class=\"btn btn-success btn-sm\">Email us</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-xxl-9 col-lg-10 col-sm-8\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4\">
                                                        <div class=\"card border shadow-none\">
                                                            <div class=\"card-body text-center\">
                                                                <div class=\"avatar-md mx-auto mb-4\" id=\"register-tour\">
                                                                    <div class=\"avatar-title bg-light rounded-circle text-primary fs-24\">
                                                                        <i class=\"ri-edit-box-line\"></i>
                                                                    </div>
                                                                </div>
                                                                <h5>Free register</h5>
                                                                <p class=\"text-muted mb-0\">Get your Free Velzon account now.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class=\"col-lg-4\">
                                                        <div class=\"card border shadow-none\">
                                                            <div class=\"card-body text-center\">
                                                                <div class=\"avatar-md mx-auto mb-4\" id=\"login-tour\">
                                                                    <div class=\"avatar-title bg-light rounded-circle text-primary fs-24\">
                                                                        <i class=\"ri-user-shared-line\"></i>
                                                                    </div>
                                                                </div>
                                                                <h5>Log in account</h5>
                                                                <p class=\"text-muted mb-0\">Sign in to continue to Velzon.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class=\"col-lg-4\">
                                                        <div class=\"card border shadow-none\">
                                                            <div class=\"card-body text-center\">
                                                                <div class=\"avatar-md mx-auto mb-4\" id=\"getproduct-tour\">
                                                                    <div class=\"avatar-title bg-light rounded-circle text-primary fs-24\">
                                                                        <i class=\"ri-file-download-line\"></i>
                                                                    </div>
                                                                </div>
                                                                <h5>Get Product</h5>
                                                                <p class=\"text-muted mb-0\">Sign in to continue to Velzon.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class=\"text-center my-4\">
                                            <button class=\"btn btn-success\" id=\"thankyou-tour\">Thank you !</button>
                                        </div>
                                    </div>
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
        // line 129
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 138
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 140
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- shepherd js -->
    <script src=\"assets/libs/shepherd.js/js/shepherd.min.js\"></script>

    <!-- tour init -->
    <script src=\"assets/js/pages/tour.init.js\"></script>

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
        return "advance-ui-tour.html.twig";
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
        return array (  203 => 140,  198 => 138,  186 => 129,  82 => 28,  69 => 18,  57 => 9,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Tour'}) }}
    <!-- shepherd.js css -->
    <link rel=\"stylesheet\" href=\"assets/libs/shepherd.js/css/shepherd.css\">

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Advance UI', title: 'Tour'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Shepherdjs</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">

                                    <p class=\"text-muted mb-4\">Use when you want to help users along getting accustomed to your user interface or Use when you want to notify your users of new or unfamiliar features.</p>

                                    <div>
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-lg-5\">
                                                <div class=\"text-center mt-4 mb-5\">
                                                    <div class=\"py-3 px-2 d-inline-block\" id=\"logo-tour\">
                                                        <img src=\"assets/images/logo-dark.png\" class=\"card-logo card-logo-dark\" alt=\"logo\" height=\"17\">
                                                        <img src=\"assets/images/logo-light.png\" class=\"card-logo card-logo-light\" alt=\"logo\" height=\"17\">
                                                    </div>
                                                    <h5 class=\"fs-16\">Responsive Admin Dashboard Template</h5>
                                                    <p class=\"text-muted\">Vestibulum auctor tincidunt semper. Phasellus ut vulputate lacus. Suspendisse ultricies mi eros, sit amet tempor nulla varius sed dapibus in tellus.</p>
                                                    <div class=\"hstack gap-2 justify-content-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\">View more</button>
                                                        <button type=\"button\" class=\"btn btn-success btn-sm\">Email us</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-xxl-9 col-lg-10 col-sm-8\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4\">
                                                        <div class=\"card border shadow-none\">
                                                            <div class=\"card-body text-center\">
                                                                <div class=\"avatar-md mx-auto mb-4\" id=\"register-tour\">
                                                                    <div class=\"avatar-title bg-light rounded-circle text-primary fs-24\">
                                                                        <i class=\"ri-edit-box-line\"></i>
                                                                    </div>
                                                                </div>
                                                                <h5>Free register</h5>
                                                                <p class=\"text-muted mb-0\">Get your Free Velzon account now.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class=\"col-lg-4\">
                                                        <div class=\"card border shadow-none\">
                                                            <div class=\"card-body text-center\">
                                                                <div class=\"avatar-md mx-auto mb-4\" id=\"login-tour\">
                                                                    <div class=\"avatar-title bg-light rounded-circle text-primary fs-24\">
                                                                        <i class=\"ri-user-shared-line\"></i>
                                                                    </div>
                                                                </div>
                                                                <h5>Log in account</h5>
                                                                <p class=\"text-muted mb-0\">Sign in to continue to Velzon.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class=\"col-lg-4\">
                                                        <div class=\"card border shadow-none\">
                                                            <div class=\"card-body text-center\">
                                                                <div class=\"avatar-md mx-auto mb-4\" id=\"getproduct-tour\">
                                                                    <div class=\"avatar-title bg-light rounded-circle text-primary fs-24\">
                                                                        <i class=\"ri-file-download-line\"></i>
                                                                    </div>
                                                                </div>
                                                                <h5>Get Product</h5>
                                                                <p class=\"text-muted mb-0\">Sign in to continue to Velzon.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class=\"text-center my-4\">
                                            <button class=\"btn btn-success\" id=\"thankyou-tour\">Thank you !</button>
                                        </div>
                                    </div>
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

    <!-- shepherd js -->
    <script src=\"assets/libs/shepherd.js/js/shepherd.min.js\"></script>

    <!-- tour init -->
    <script src=\"assets/js/pages/tour.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>

</body>

</html>", "advance-ui-tour.html.twig", "/home/waldi/myapp2/templates/advance-ui-tour.html.twig");
    }
}
