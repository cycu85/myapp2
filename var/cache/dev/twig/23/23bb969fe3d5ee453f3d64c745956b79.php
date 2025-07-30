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

/* auth-success-msg-cover.html.twig */
class __TwigTemplate_d321ea7d1a6d263d745c9aec5e682398 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-success-msg-cover.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-success-msg-cover.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Success Message"]);
        echo "

    ";
        // line 7
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <!-- auth-page wrapper -->
    <div class=\"auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"bg-overlay\"></div>
        <!-- auth-page content -->
        <div class=\"auth-page-content overflow-hidden pt-lg-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card overflow-hidden\">
                            <div class=\"row justify-content-center g-0\">
                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4 auth-one-bg h-100\">
                                        <div class=\"bg-overlay\"></div>
                                        <div class=\"position-relative h-100 d-flex flex-column\">
                                            <div class=\"mb-4\">
                                                <a href=\"/\" class=\"d-block\">
                                                    <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"18\">
                                                </a>
                                            </div>
                                            <div class=\"mt-auto\">
                                                <div class=\"mb-3\">
                                                    <i class=\"ri-double-quotes-l display-4 text-success\"></i>
                                                </div>

                                                <div id=\"qoutescarouselIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                                    <div class=\"carousel-indicators\">
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                                    </div>
                                                    <div class=\"carousel-inner text-center text-white-50 pb-5\">
                                                        <div class=\"carousel-item active\">
                                                            <p class=\"fs-15 fst-italic\">\" Great! Clean code, clean design, easy for customization. Thanks very much! \"</p>
                                                        </div>
                                                        <div class=\"carousel-item\">
                                                            <p class=\"fs-15 fst-italic\">\" The theme is really great with an amazing customer support.\"</p>
                                                        </div>
                                                        <div class=\"carousel-item\">
                                                            <p class=\"fs-15 fst-italic\">\" Great! Clean code, clean design, easy for customization. Thanks very much! \"</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4 text-center\">
                                        <div class=\"avatar-lg mx-auto mt-2\">
                                            <div class=\"avatar-title bg-light text-success display-3 rounded-circle\">
                                                <i class=\"ri-checkbox-circle-fill\"></i>
                                            </div>
                                        </div>
                                        <div class=\"mt-4 pt-2\">
                                            <h4>Well done !</h4>
                                            <p class=\"text-muted mx-4\">Aww yeah, you successfully read this important message.</p>
                                            <div class=\"mt-4\">
                                                <a href=\"auth-signin-basic\" class=\"btn btn-success w-100\">Back to Dashboard</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center\">
                            <p class=\"mb-0\">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class=\"mdi mdi-heart text-danger\"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    ";
        // line 111
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
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
        return "auth-success-msg-cover.html.twig";
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
        return array (  162 => 111,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Success Message'}) }}

    {{ include('partials/head-css.html.twig') }}

</head>

<body>

    <!-- auth-page wrapper -->
    <div class=\"auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"bg-overlay\"></div>
        <!-- auth-page content -->
        <div class=\"auth-page-content overflow-hidden pt-lg-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card overflow-hidden\">
                            <div class=\"row justify-content-center g-0\">
                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4 auth-one-bg h-100\">
                                        <div class=\"bg-overlay\"></div>
                                        <div class=\"position-relative h-100 d-flex flex-column\">
                                            <div class=\"mb-4\">
                                                <a href=\"/\" class=\"d-block\">
                                                    <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"18\">
                                                </a>
                                            </div>
                                            <div class=\"mt-auto\">
                                                <div class=\"mb-3\">
                                                    <i class=\"ri-double-quotes-l display-4 text-success\"></i>
                                                </div>

                                                <div id=\"qoutescarouselIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                                                    <div class=\"carousel-indicators\">
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                                        <button type=\"button\" data-bs-target=\"#qoutescarouselIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                                                    </div>
                                                    <div class=\"carousel-inner text-center text-white-50 pb-5\">
                                                        <div class=\"carousel-item active\">
                                                            <p class=\"fs-15 fst-italic\">\" Great! Clean code, clean design, easy for customization. Thanks very much! \"</p>
                                                        </div>
                                                        <div class=\"carousel-item\">
                                                            <p class=\"fs-15 fst-italic\">\" The theme is really great with an amazing customer support.\"</p>
                                                        </div>
                                                        <div class=\"carousel-item\">
                                                            <p class=\"fs-15 fst-italic\">\" Great! Clean code, clean design, easy for customization. Thanks very much! \"</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class=\"col-lg-6\">
                                    <div class=\"p-lg-5 p-4 text-center\">
                                        <div class=\"avatar-lg mx-auto mt-2\">
                                            <div class=\"avatar-title bg-light text-success display-3 rounded-circle\">
                                                <i class=\"ri-checkbox-circle-fill\"></i>
                                            </div>
                                        </div>
                                        <div class=\"mt-4 pt-2\">
                                            <h4>Well done !</h4>
                                            <p class=\"text-muted mx-4\">Aww yeah, you successfully read this important message.</p>
                                            <div class=\"mt-4\">
                                                <a href=\"auth-signin-basic\" class=\"btn btn-success w-100\">Back to Dashboard</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center\">
                            <p class=\"mb-0\">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class=\"mdi mdi-heart text-danger\"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    {{ include('partials/vendor-scripts.html.twig') }}
</body>

</html>", "auth-success-msg-cover.html.twig", "/home/waldi/myapp2/templates/auth-success-msg-cover.html.twig");
    }
}
