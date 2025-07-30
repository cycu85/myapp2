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

/* charts-apex-area.html.twig */
class __TwigTemplate_81f0150c2f7cd6829a1473649b81b751 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-area.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-area.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Apex Area Charts"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Apexcharts", "title" => "Area Charts"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Area Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_basic\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Spline Area Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_spline\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Area Chart - Datetime X - Axis Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div class=\"toolbar d-flex align-items-start justify-content-center flex-wrap gap-2\">
                                            <button type=\"button\" class=\"btn btn-soft-primary timeline-btn btn-sm\" id=\"one_month\">
                                                1M
                                            </button>
                                            <button type=\"button\" class=\"btn btn-soft-primary timeline-btn btn-sm\" id=\"six_months\">
                                                6M
                                            </button>
                                            <button type=\"button\" class=\"btn btn-soft-primary timeline-btn btn-sm active\" id=\"one_year\">
                                                1Y
                                            </button>
                                            <button type=\"button\" class=\"btn btn-soft-primary timeline-btn btn-sm\" id=\"all\">
                                                ALL
                                            </button>
                                        </div>
                                        <div id=\"area_chart_datetime\" data-colors='[\"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Area with Negative Values Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_negative\" data-colors='[\"--vz-success\", \"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Area Chart - Github Style</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div class=\"bg-light\">
                                            <div id=\"area_chart-months\" data-colors='[\"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        </div>

                                        <div class=\"github-style d-flex align-items-center my-2\">
                                            <div class=\"flex-shrink-0 me-2\">
                                                <img class=\"avatar-sm rounded\" src=\"assets/images/users/avatar-2.jpg\" data-hovercard-user-id=\"634573\" alt=\"\" />
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <a class=\"font-size-14 text-dark fw-medium\">coder</a>
                                                <div class=\"cmeta text-muted font-size-11\">
                                                    <span class=\"commits text-dark fw-medium\"></span> commits
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"bg-light\">
                                            <div id=\"area_chart-years\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Area Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_stacked\" data-colors='[\"--vz-success\", \"--vz-info\", \"--vz-light\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Irregular Timeseries Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_irregular\" data-colors='[\"--vz-primary\", \"--vz-warning\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Area Chart With Null Values Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area-missing-null-value\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
        // line 185
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 194
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 196
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- apexcharts -->
    <script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>
    <!-- for basic area chart -->
    <script src=\"https://img.themesbrand.com/velzon/apexchart-js/stock-prices.js\"></script>
    <!-- for github style chart -->
    <script src=\"https://img.themesbrand.com/velzon/apexchart-js/github-data.js\"></script>
    <!-- for irregular timeseries chart -->
    <script src=\"https://img.themesbrand.com/velzon/apexchart-js/irregular-data-series.js\"></script>
    <script src=\"assets/libs/moment/moment.js\"></script>

    <!-- areacharts init -->
    <script src=\"assets/js/pages/apexcharts-area.init.js\"></script>

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
        return "charts-apex-area.html.twig";
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
        return array (  259 => 196,  254 => 194,  242 => 185,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Apex Area Charts'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Apexcharts', title: 'Area Charts'}) }}

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Area Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_basic\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Spline Area Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_spline\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Area Chart - Datetime X - Axis Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div class=\"toolbar d-flex align-items-start justify-content-center flex-wrap gap-2\">
                                            <button type=\"button\" class=\"btn btn-soft-primary timeline-btn btn-sm\" id=\"one_month\">
                                                1M
                                            </button>
                                            <button type=\"button\" class=\"btn btn-soft-primary timeline-btn btn-sm\" id=\"six_months\">
                                                6M
                                            </button>
                                            <button type=\"button\" class=\"btn btn-soft-primary timeline-btn btn-sm active\" id=\"one_year\">
                                                1Y
                                            </button>
                                            <button type=\"button\" class=\"btn btn-soft-primary timeline-btn btn-sm\" id=\"all\">
                                                ALL
                                            </button>
                                        </div>
                                        <div id=\"area_chart_datetime\" data-colors='[\"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Area with Negative Values Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_negative\" data-colors='[\"--vz-success\", \"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Area Chart - Github Style</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>
                                        <div class=\"bg-light\">
                                            <div id=\"area_chart-months\" data-colors='[\"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        </div>

                                        <div class=\"github-style d-flex align-items-center my-2\">
                                            <div class=\"flex-shrink-0 me-2\">
                                                <img class=\"avatar-sm rounded\" src=\"assets/images/users/avatar-2.jpg\" data-hovercard-user-id=\"634573\" alt=\"\" />
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <a class=\"font-size-14 text-dark fw-medium\">coder</a>
                                                <div class=\"cmeta text-muted font-size-11\">
                                                    <span class=\"commits text-dark fw-medium\"></span> commits
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"bg-light\">
                                            <div id=\"area_chart-years\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Area Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_stacked\" data-colors='[\"--vz-success\", \"--vz-info\", \"--vz-light\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Irregular Timeseries Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area_chart_irregular\" data-colors='[\"--vz-primary\", \"--vz-warning\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Area Chart With Null Values Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"area-missing-null-value\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
    <!-- for basic area chart -->
    <script src=\"https://img.themesbrand.com/velzon/apexchart-js/stock-prices.js\"></script>
    <!-- for github style chart -->
    <script src=\"https://img.themesbrand.com/velzon/apexchart-js/github-data.js\"></script>
    <!-- for irregular timeseries chart -->
    <script src=\"https://img.themesbrand.com/velzon/apexchart-js/irregular-data-series.js\"></script>
    <script src=\"assets/libs/moment/moment.js\"></script>

    <!-- areacharts init -->
    <script src=\"assets/js/pages/apexcharts-area.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "charts-apex-area.html.twig", "/home/waldi/myapp2/templates/charts-apex-area.html.twig");
    }
}
