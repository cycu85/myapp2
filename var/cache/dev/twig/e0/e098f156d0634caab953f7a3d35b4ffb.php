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

/* auth-404-cover.html.twig */
class __TwigTemplate_a31d04f5b66068b5d231a31791eee193 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-404-cover.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-404-cover.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "404 Error Cover"]);
        echo "

    ";
        // line 7
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <!-- auth-page wrapper -->
    <div class=\"auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100\">

        <!-- auth-page content -->
        <div class=\"auth-page-content overflow-hidden p-0\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"text-center\">
                            <img src=\"assets/images/error400-cover.png\" alt=\"error img\" class=\"img-fluid\">
                            <div class=\"mt-3\">
                                <h3 class=\"text-uppercase\">Sorry, Page not Found 😭</h3>
                                <p class=\"text-muted mb-4\">The page you are looking for not available!</p>
                                <a href=\"/\" class=\"btn btn-success\"><i class=\"mdi mdi-home me-1\"></i>Back to home</a>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth-page content -->
    </div>
    <!-- end auth-page-wrapper -->

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
        return "auth-404-cover.html.twig";
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
        return array (  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: '404 Error Cover'}) }}

    {{ include('partials/head-css.html.twig') }}

</head>

<body>

    <!-- auth-page wrapper -->
    <div class=\"auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100\">

        <!-- auth-page content -->
        <div class=\"auth-page-content overflow-hidden p-0\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"text-center\">
                            <img src=\"assets/images/error400-cover.png\" alt=\"error img\" class=\"img-fluid\">
                            <div class=\"mt-3\">
                                <h3 class=\"text-uppercase\">Sorry, Page not Found 😭</h3>
                                <p class=\"text-muted mb-4\">The page you are looking for not available!</p>
                                <a href=\"/\" class=\"btn btn-success\"><i class=\"mdi mdi-home me-1\"></i>Back to home</a>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth-page content -->
    </div>
    <!-- end auth-page-wrapper -->

</body>

</html>", "auth-404-cover.html.twig", "/home/waldi/myapp2/templates/auth-404-cover.html.twig");
    }
}
