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

/* auth-offline.html.twig */
class __TwigTemplate_1698fb4c113ecfbfa7b33b2ee529525d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-offline.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-offline.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Offline Page"]);
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
                                    <img src=\"https://img.themesbrand.com/velzon/images/auth-offline.gif\" alt=\"\" height=\"210\">
                                    <h3 class=\"mt-4 fw-semibold\">We're currently offline</h3>
                                    <p class=\"text-muted mb-4 fs-14\">We can't show you this images because you aren't connected to the internet. When you’re back online refresh the page or hit the button below</p>
                                    <button class=\"btn btn-success btn-border\" onClick=\"window.location.href=window.location.href\"><i class=\"ri-refresh-line align-bottom\"></i> Refresh</button>
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
        // line 44
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
        return "auth-offline.html.twig";
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
        return array (  95 => 44,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Offline Page'}) }}

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
                                    <img src=\"https://img.themesbrand.com/velzon/images/auth-offline.gif\" alt=\"\" height=\"210\">
                                    <h3 class=\"mt-4 fw-semibold\">We're currently offline</h3>
                                    <p class=\"text-muted mb-4 fs-14\">We can't show you this images because you aren't connected to the internet. When you’re back online refresh the page or hit the button below</p>
                                    <button class=\"btn btn-success btn-border\" onClick=\"window.location.href=window.location.href\"><i class=\"ri-refresh-line align-bottom\"></i> Refresh</button>
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

</html>", "auth-offline.html.twig", "/home/waldi/myapp2/templates/auth-offline.html.twig");
    }
}
