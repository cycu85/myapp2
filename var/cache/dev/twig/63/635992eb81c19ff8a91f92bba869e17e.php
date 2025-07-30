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

/* forms-select2.html.twig */
class __TwigTemplate_3bb526a603196693ed561f83bcdfaff6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-select2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-select2.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Select2"]);
        echo "

    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />

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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Forms", "title" => "Select2"]);
        echo "

                    <div class=\"alert alert-danger\" role=\"alert\">
                        This is <strong>Select2</strong> page in wihch we have used <b>jQuery</b> with cdn link!
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5 class=\"card-title mb-0\">Basic Select2</h5>
                                </div>
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>js-example-basic-single</code>, <code>js-example-basic-multiple</code>, <code>js-example-data-array</code>, <code>js-example-templating</code>, <code>select-flag-templating</code>,  class to show select2 example.</p>
                                    <div class=\"row g-4\">
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Basic Select</h6>
                                            <select class=\"js-example-basic-single\" name=\"state\">
                                                <option value=\"AL\">Alabama</option>
                                                <option value=\"MA\">Madrid</option>
                                                <option value=\"TO\">Toronto</option>
                                                <option value=\"LO\">Londan</option>
                                                <option value=\"WY\">Wyoming</option>
                                            </select>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Multi Select</h6>
                                            <select class=\"js-example-basic-multiple\" name=\"states[]\" multiple=\"multiple\">
                                                <optgroup label=\"UK\">
                                                    <option value=\"London\">London</option>
                                                    <option value=\"Manchester\" selected>Manchester</option>
                                                    <option value=\"Liverpool\">Liverpool</option>
                                                </optgroup>
                                                <optgroup label=\"FR\">
                                                    <option value=\"Paris\">Paris</option>
                                                    <option value=\"Lyon\">Lyon</option>
                                                    <option value=\"Marseille\">Marseille</option>
                                                </optgroup>
                                                <optgroup label=\"SP\">
                                                    <option value=\"Madrid\" selected>Madrid</option>
                                                    <option value=\"Barcelona\">Barcelona</option>
                                                    <option value=\"Malaga\">Malaga</option>
                                                </optgroup>
                                                <optgroup label=\"CA\">
                                                    <option value=\"Montreal\">Montreal</option>
                                                    <option value=\"Toronto\">Toronto</option>
                                                    <option value=\"Vancouver\">Vancouver</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Ajax Select</h6>
                                            <select class=\"js-example-data-array\" name=\"state\"></select>
                                        </div>
                                        <!--end col-->
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Templating</h6>
                                            <select class=\"form-control js-example-templating\">
                                                <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                                                    <option value=\"AK\">Alaska</option>
                                                    <option value=\"HI\">Hawaii</option>
                                                </optgroup>
                                                <optgroup label=\"Pacific Time Zone\">
                                                    <option value=\"CA\">California</option>
                                                    <option value=\"NV\">Nevada</option>
                                                    <option value=\"OR\">Oregon</option>
                                                    <option value=\"WA\">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div><!--end col-->
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Selections Templating</h6>
                                            <select class=\"form-control select-flag-templating\">
                                                <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                                                    <option value=\"AK\">Alaska</option>
                                                    <option value=\"HI\">Hawaii</option>
                                                </optgroup>
                                                <optgroup label=\"Pacific Time Zone\">
                                                    <option value=\"CA\">California</option>
                                                    <option value=\"NV\">Nevada</option>
                                                    <option value=\"OR\">Oregon</option>
                                                    <option value=\"WA\">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div><!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5 class=\"card-title mb-0\">Disabling a Select2 Control</h5>
                                </div>
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Select2 will respond to the disabled attribute on <code>&lt;select&gt;</code> elements. You can also initialize Select2 with disabled: true to get the same effect.</p>
                                    <div class=\"vstack gap-3\">
                                        <select class=\"js-example-disabled\" name=\"state\">
                                            <option value=\"AL\">Alabama</option>
                                            <option value=\"MA\">Madrid</option>
                                            <option value=\"TO\">Toronto</option>
                                            <option value=\"LO\">Londan</option>
                                            <option value=\"WY\">Wyoming</option>
                                        </select>
                                        <select class=\"js-example-disabled-multi\" name=\"states[]\" multiple=\"multiple\">
                                            <optgroup label=\"UK\">
                                                <option value=\"London\">London</option>
                                                <option value=\"Manchester\" selected>Manchester</option>
                                                <option value=\"Liverpool\">Liverpool</option>
                                            </optgroup>
                                            <optgroup label=\"FR\">
                                                <option value=\"Paris\">Paris</option>
                                                <option value=\"Lyon\">Lyon</option>
                                                <option value=\"Marseille\">Marseille</option>
                                            </optgroup>
                                            <optgroup label=\"SP\">
                                                <option value=\"Madrid\" selected>Madrid</option>
                                                <option value=\"Barcelona\">Barcelona</option>
                                                <option value=\"Malaga\">Malaga</option>
                                            </optgroup>
                                            <optgroup label=\"CA\">
                                                <option value=\"Montreal\">Montreal</option>
                                                <option value=\"Toronto\">Toronto</option>
                                                <option value=\"Vancouver\">Vancouver</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class=\"hstack gap-2 mt-3\">
                                        <button type=\"button\" class=\"js-programmatic-enable btn btn-primary\">
                                            Enable
                                        </button>
                                        <button type=\"button\" class=\"js-programmatic-disable btn btn-success\">
                                            Disable
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                    
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 177
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 186
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 188
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!--jquery cdn-->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <!--select2 cdn-->
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>

    <script src=\"assets/js/pages/select2.init.js\"></script>

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
        return "forms-select2.html.twig";
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
        return array (  251 => 188,  246 => 186,  234 => 177,  82 => 28,  69 => 18,  57 => 9,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Select2'}) }}

    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Forms', title: 'Select2'}) }}

                    <div class=\"alert alert-danger\" role=\"alert\">
                        This is <strong>Select2</strong> page in wihch we have used <b>jQuery</b> with cdn link!
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5 class=\"card-title mb-0\">Basic Select2</h5>
                                </div>
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>js-example-basic-single</code>, <code>js-example-basic-multiple</code>, <code>js-example-data-array</code>, <code>js-example-templating</code>, <code>select-flag-templating</code>,  class to show select2 example.</p>
                                    <div class=\"row g-4\">
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Basic Select</h6>
                                            <select class=\"js-example-basic-single\" name=\"state\">
                                                <option value=\"AL\">Alabama</option>
                                                <option value=\"MA\">Madrid</option>
                                                <option value=\"TO\">Toronto</option>
                                                <option value=\"LO\">Londan</option>
                                                <option value=\"WY\">Wyoming</option>
                                            </select>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Multi Select</h6>
                                            <select class=\"js-example-basic-multiple\" name=\"states[]\" multiple=\"multiple\">
                                                <optgroup label=\"UK\">
                                                    <option value=\"London\">London</option>
                                                    <option value=\"Manchester\" selected>Manchester</option>
                                                    <option value=\"Liverpool\">Liverpool</option>
                                                </optgroup>
                                                <optgroup label=\"FR\">
                                                    <option value=\"Paris\">Paris</option>
                                                    <option value=\"Lyon\">Lyon</option>
                                                    <option value=\"Marseille\">Marseille</option>
                                                </optgroup>
                                                <optgroup label=\"SP\">
                                                    <option value=\"Madrid\" selected>Madrid</option>
                                                    <option value=\"Barcelona\">Barcelona</option>
                                                    <option value=\"Malaga\">Malaga</option>
                                                </optgroup>
                                                <optgroup label=\"CA\">
                                                    <option value=\"Montreal\">Montreal</option>
                                                    <option value=\"Toronto\">Toronto</option>
                                                    <option value=\"Vancouver\">Vancouver</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Ajax Select</h6>
                                            <select class=\"js-example-data-array\" name=\"state\"></select>
                                        </div>
                                        <!--end col-->
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Templating</h6>
                                            <select class=\"form-control js-example-templating\">
                                                <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                                                    <option value=\"AK\">Alaska</option>
                                                    <option value=\"HI\">Hawaii</option>
                                                </optgroup>
                                                <optgroup label=\"Pacific Time Zone\">
                                                    <option value=\"CA\">California</option>
                                                    <option value=\"NV\">Nevada</option>
                                                    <option value=\"OR\">Oregon</option>
                                                    <option value=\"WA\">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div><!--end col-->
                                        <div class=\"col-lg-4\">
                                            <h6 class=\"fw-semibold\">Selections Templating</h6>
                                            <select class=\"form-control select-flag-templating\">
                                                <optgroup label=\"Alaskan/Hawaiian Time Zone\">
                                                    <option value=\"AK\">Alaska</option>
                                                    <option value=\"HI\">Hawaii</option>
                                                </optgroup>
                                                <optgroup label=\"Pacific Time Zone\">
                                                    <option value=\"CA\">California</option>
                                                    <option value=\"NV\">Nevada</option>
                                                    <option value=\"OR\">Oregon</option>
                                                    <option value=\"WA\">Washington</option>
                                                </optgroup>
                                            </select>
                                        </div><!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5 class=\"card-title mb-0\">Disabling a Select2 Control</h5>
                                </div>
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Select2 will respond to the disabled attribute on <code>&lt;select&gt;</code> elements. You can also initialize Select2 with disabled: true to get the same effect.</p>
                                    <div class=\"vstack gap-3\">
                                        <select class=\"js-example-disabled\" name=\"state\">
                                            <option value=\"AL\">Alabama</option>
                                            <option value=\"MA\">Madrid</option>
                                            <option value=\"TO\">Toronto</option>
                                            <option value=\"LO\">Londan</option>
                                            <option value=\"WY\">Wyoming</option>
                                        </select>
                                        <select class=\"js-example-disabled-multi\" name=\"states[]\" multiple=\"multiple\">
                                            <optgroup label=\"UK\">
                                                <option value=\"London\">London</option>
                                                <option value=\"Manchester\" selected>Manchester</option>
                                                <option value=\"Liverpool\">Liverpool</option>
                                            </optgroup>
                                            <optgroup label=\"FR\">
                                                <option value=\"Paris\">Paris</option>
                                                <option value=\"Lyon\">Lyon</option>
                                                <option value=\"Marseille\">Marseille</option>
                                            </optgroup>
                                            <optgroup label=\"SP\">
                                                <option value=\"Madrid\" selected>Madrid</option>
                                                <option value=\"Barcelona\">Barcelona</option>
                                                <option value=\"Malaga\">Malaga</option>
                                            </optgroup>
                                            <optgroup label=\"CA\">
                                                <option value=\"Montreal\">Montreal</option>
                                                <option value=\"Toronto\">Toronto</option>
                                                <option value=\"Vancouver\">Vancouver</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class=\"hstack gap-2 mt-3\">
                                        <button type=\"button\" class=\"js-programmatic-enable btn btn-primary\">
                                            Enable
                                        </button>
                                        <button type=\"button\" class=\"js-programmatic-disable btn btn-success\">
                                            Disable
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                    
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

    <!--jquery cdn-->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <!--select2 cdn-->
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>

    <script src=\"assets/js/pages/select2.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "forms-select2.html.twig", "/home/waldi/myapp2/templates/forms-select2.html.twig");
    }
}
