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

/* charts-echarts.html.twig */
class __TwigTemplate_7bf037005d0d3c51b8200b22a8efe3b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-echarts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-echarts.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "E Charts"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Charts", "title" => "E Charts"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-line\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Line Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-line-stacked\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Area Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-area\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Area Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-area-stacked\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Step Line</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-step-line\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line Y Category</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-line-y-category\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Bar</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-bar\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Bar Label</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-bar-label-rotation\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Horizontal Bar</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-horizontal-bar\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Horizontal Bar</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-horizontal-bar-stacked\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pie Charts</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-pie\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Doughnut Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-doughnut\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Scatter Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-scatter\" data-colors='[\"--vz-primary\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Candlestick Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-candlestick\" data-colors='[\"--vz-danger\", \"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Graph Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-graph\" data-colors='[\"--vz-primary\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Treemap Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-treemap\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Sunburst Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-sunburst\" data-colors='[\"--vz-warning\", \"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Parallel Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-parallel\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Sankey Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-sankey\" data-colors='[\"--vz-info\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-primary\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Funnel Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-funnel\" data-colors='[\"--vz-primary\", \"--vz-danger, \"--vz-info\", \"--vz-success\", \"--vz-wrning\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Gauge Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-gauge\" data-colors='[\"--vz-primary\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Heatmap Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-heatmap\" data-colors='[\"--vz-primary\", \"--vz-warning\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 346
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 355
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 357
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- echarts js -->
    <script src=\"assets/libs/echarts/echarts.min.js\"></script>

    <!-- echarts init -->
    <script src=\"assets/js/pages/echarts.init.js\"></script>

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
        return "charts-echarts.html.twig";
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
        return array (  420 => 357,  415 => 355,  403 => 346,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'E Charts'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Charts', title: 'E Charts'}) }}

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-line\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Line Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-line-stacked\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Area Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-area\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Area Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-area-stacked\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Step Line</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-step-line\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line Y Category</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-line-y-category\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Bar</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-bar\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Bar Label</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-bar-label-rotation\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Horizontal Bar</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-horizontal-bar\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Horizontal Bar</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-horizontal-bar-stacked\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pie Charts</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-pie\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Doughnut Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-doughnut\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-info\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Scatter Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-scatter\" data-colors='[\"--vz-primary\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Candlestick Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-candlestick\" data-colors='[\"--vz-danger\", \"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Graph Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-graph\" data-colors='[\"--vz-primary\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Treemap Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-treemap\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Sunburst Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-sunburst\" data-colors='[\"--vz-warning\", \"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Parallel Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-parallel\" data-colors='[\"--vz-success\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Sankey Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-sankey\" data-colors='[\"--vz-info\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-primary\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Funnel Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-funnel\" data-colors='[\"--vz-primary\", \"--vz-danger, \"--vz-info\", \"--vz-success\", \"--vz-wrning\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Gauge Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-gauge\" data-colors='[\"--vz-primary\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Heatmap Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div id=\"chart-heatmap\" data-colors='[\"--vz-primary\", \"--vz-warning\"]' class=\"e-charts\"></div>
                                </div>
                            </div>
                            <!-- end card -->
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

    <!-- echarts js -->
    <script src=\"assets/libs/echarts/echarts.min.js\"></script>

    <!-- echarts init -->
    <script src=\"assets/js/pages/echarts.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "charts-echarts.html.twig", "/home/waldi/myapp2/templates/charts-echarts.html.twig");
    }
}
