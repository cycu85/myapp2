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

/* partials/head-css.html.twig */
class __TwigTemplate_146569e466bd11ba158d41b59d2e7bd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head-css.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head-css.html.twig"));

        // line 1
        echo "<!-- Layout config Js -->
<script src=\"assets/js/layout.js\"></script>
<!-- Bootstrap Css -->
<link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<!-- Icons Css -->
<link href=\"assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<!-- App Css-->
<link href=\"assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<!-- custom Css-->
<link href=\"assets/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\" />";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/head-css.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Layout config Js -->
<script src=\"assets/js/layout.js\"></script>
<!-- Bootstrap Css -->
<link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<!-- Icons Css -->
<link href=\"assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<!-- App Css-->
<link href=\"assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<!-- custom Css-->
<link href=\"assets/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\" />", "partials/head-css.html.twig", "/home/waldi/myapp2/templates/partials/head-css.html.twig");
    }
}
