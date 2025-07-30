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

/* auth-404-alt.html.twig */
class __TwigTemplate_564205ce711d3733cdda7a111512f132 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-404-alt.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-404-alt.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "404 Error alt"]);
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
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-5\">
                        <div class=\"card overflow-hidden\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <lord-icon class=\"avatar-xl\" src=\"https://cdn.lordicon.com/etwtznjn.json\" trigger=\"loop\" colors=\"primary:#405189,secondary:#0ab39c\"></lord-icon>
                                    <h1 class=\"text-primary mb-4\">Oops !</h1>
                                    <h4 class=\"text-uppercase\">Sorry, Page not Found 😭</h4>
                                    <p class=\"text-muted mb-4\">The page you are looking for not available!</p>
                                    <a href=\"/\" class=\"btn btn-success\"><i class=\"mdi mdi-home me-1\"></i>Back to home</a>
                                </div>
                            </div>
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
    </div>
    <!-- end auth-page-wrapper -->

    ";
        // line 45
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
        return "auth-404-alt.html.twig";
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
        return array (  96 => 45,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: '404 Error alt'}) }}

    {{ include('partials/head-css.html.twig') }}

</head>

<body>

    <!-- auth-page wrapper -->
    <div class=\"auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"bg-overlay\"></div>
        <!-- auth-page content -->
        <div class=\"auth-page-content overflow-hidden pt-lg-5\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-5\">
                        <div class=\"card overflow-hidden\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center\">
                                    <lord-icon class=\"avatar-xl\" src=\"https://cdn.lordicon.com/etwtznjn.json\" trigger=\"loop\" colors=\"primary:#405189,secondary:#0ab39c\"></lord-icon>
                                    <h1 class=\"text-primary mb-4\">Oops !</h1>
                                    <h4 class=\"text-uppercase\">Sorry, Page not Found 😭</h4>
                                    <p class=\"text-muted mb-4\">The page you are looking for not available!</p>
                                    <a href=\"/\" class=\"btn btn-success\"><i class=\"mdi mdi-home me-1\"></i>Back to home</a>
                                </div>
                            </div>
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
    </div>
    <!-- end auth-page-wrapper -->

    {{ include('partials/vendor-scripts.html.twig') }}

</body>

</html>", "auth-404-alt.html.twig", "/home/waldi/myapp2/templates/auth-404-alt.html.twig");
    }
}
