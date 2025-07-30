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

/* partials/page-title.html.twig */
class __TwigTemplate_9adcef4c3a1f2dd9b4673acc47696de3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/page-title.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/page-title.html.twig"));

        // line 1
        echo "<!-- start page title -->
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"page-title-box d-sm-flex align-items-center justify-content-between\">
            <h4 class=\"mb-sm-0\">";
        // line 5
        (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true))) : (print ("")));
        echo "</h4>

            <div class=\"page-title-right\">
                <ol class=\"breadcrumb m-0\">
                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">";
        // line 9
        (((isset($context["pagetitle"]) || array_key_exists("pagetitle", $context) ? $context["pagetitle"] : (function () { throw new RuntimeError('Variable "pagetitle" does not exist.', 9, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["pagetitle"]) || array_key_exists("pagetitle", $context) ? $context["pagetitle"] : (function () { throw new RuntimeError('Variable "pagetitle" does not exist.', 9, $this->source); })()), "html", null, true))) : (print ("")));
        echo "</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 10
        (((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true))) : (print ("")));
        echo "</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/page-title.html.twig";
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
        return array (  60 => 10,  56 => 9,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- start page title -->
<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"page-title-box d-sm-flex align-items-center justify-content-between\">
            <h4 class=\"mb-sm-0\">{{ (title) ? title : '' }}</h4>

            <div class=\"page-title-right\">
                <ol class=\"breadcrumb m-0\">
                    <li class=\"breadcrumb-item\"><a href=\"javascript: void(0);\">{{ (pagetitle) ? pagetitle : '' }}</a></li>
                    <li class=\"breadcrumb-item active\">{{ (title) ? title : '' }}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->", "partials/page-title.html.twig", "/home/waldi/myapp2/templates/partials/page-title.html.twig");
    }
}
