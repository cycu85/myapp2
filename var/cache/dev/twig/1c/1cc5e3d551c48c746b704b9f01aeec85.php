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

/* charts-apex-line.html.twig */
class __TwigTemplate_1ff3c2fccca831c08b55f134a9723d98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-line.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-line.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Apex Line Charts"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Apexcharts", "title" => "Line Charts"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Line Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_basic\" data-colors='[\"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Zoomable Timeseries</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_zoomable\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line with Data Labels</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_datalabel\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Dashed Line</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_dashed\" data-colors='[\"--vz-primary\", \"--vz-danger\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line with Annotations</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_annotations\" data-colors='[\"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Brush Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div id=\"brushchart_line2\" data-colors='[\"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        <div id=\"brushchart_line\" data-colors='[\"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stepline Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_stepline\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Gradient Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_gradient\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Missing Data/ Null Value Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_missing_data\" data-colors='[\"--vz-primary\", \"--vz-danger\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Realtimes Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_realtime\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Syncing Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div id=\"chart-syncing-line\" data-colors='[\"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        <div id=\"chart-syncing-line2\" data-colors='[\"--vz-warning\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        <div id=\"chart-syncing-area\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                      </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 201
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 210
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 212
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- apexcharts -->
    <script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

    <script src=\"https://img.themesbrand.com/velzon/apexchart-js/stock-prices.js\"></script>

    <!-- linecharts init -->
    <script src=\"assets/js/pages/apexcharts-line.init.js\"></script>

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
        return "charts-apex-line.html.twig";
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
        return array (  275 => 212,  270 => 210,  258 => 201,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Apex Line Charts'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Apexcharts', title: 'Line Charts'}) }}

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Line Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_basic\" data-colors='[\"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Zoomable Timeseries</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_zoomable\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line with Data Labels</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_datalabel\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Dashed Line</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_dashed\" data-colors='[\"--vz-primary\", \"--vz-danger\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line with Annotations</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_annotations\" data-colors='[\"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Brush Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div id=\"brushchart_line2\" data-colors='[\"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        <div id=\"brushchart_line\" data-colors='[\"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stepline Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_stepline\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Gradient Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_gradient\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Missing Data/ Null Value Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_missing_data\" data-colors='[\"--vz-primary\", \"--vz-danger\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Realtimes Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"line_chart_realtime\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Syncing Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div id=\"chart-syncing-line\" data-colors='[\"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        <div id=\"chart-syncing-line2\" data-colors='[\"--vz-warning\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        <div id=\"chart-syncing-area\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                      </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

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

    <script src=\"https://img.themesbrand.com/velzon/apexchart-js/stock-prices.js\"></script>

    <!-- linecharts init -->
    <script src=\"assets/js/pages/apexcharts-line.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "charts-apex-line.html.twig", "/home/waldi/myapp2/templates/charts-apex-line.html.twig");
    }
}
