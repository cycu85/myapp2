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

/* charts-apex-slope.html.twig */
class __TwigTemplate_c5898d1c09ed340fb5108cae93fc400e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-slope.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-slope.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Apex Slope Charts"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Apexcharts", "title" => "Slope Charts"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"basic_charts\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Multi Group</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div id=\"multi_charts\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
        // line 64
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 73
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 75
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- apexcharts -->
    <script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

    <!-- scatter charts init -->
    <script src=\"assets/js/pages/apexcharts-scatter.init.js\"></script>

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
        return "charts-apex-slope.html.twig";
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
        return array (  138 => 75,  133 => 73,  121 => 64,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Apex Slope Charts'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Apexcharts', title: 'Slope Charts'}) }}

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"basic_charts\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Multi Group</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div id=\"multi_charts\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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

    <!-- apexcharts -->
    <script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

    <!-- scatter charts init -->
    <script src=\"assets/js/pages/apexcharts-scatter.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "charts-apex-slope.html.twig", "/home/waldi/myapp2/templates/charts-apex-slope.html.twig");
    }
}
