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

/* charts-chartjs.html.twig */
class __TwigTemplate_2135e9d8999eaafe0512f57cd40ae915 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-chartjs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-chartjs.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Chartjs"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Charts", "title" => "Chartjs"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"lineChart\" class=\"chartjs-chart\" data-colors='[\"--vz-primary-rgb, 0.2\", \"--vz-primary\", \"--vz-success-rgb, 0.2\", \"--vz-success\"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Bar Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"bar\" class=\"chartjs-chart\" data-colors='[\"--vz-primary-rgb, 0.8\", \"--vz-primary-rgb, 0.9\"]'></canvas>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pie Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"pieChart\" class=\"chartjs-chart\" data-colors='[\"--vz-success\", \"--vz-light\"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Donut Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"doughnut\" class=\"chartjs-chart\" data-colors='[\"--vz-primary\", \"--vz-light\"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Polar Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"polarArea\" class=\"chartjs-chart\" data-colors='[\"--vz-danger\", \"--vz-success\", \"--vz-warning\", \"--vz-primary\"]'> </canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Radar Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"radar\" class=\"chartjs-chart\" data-colors='[\"--vz-success-rgb, 0.2\", \"--vz-success\", \"--vz-primary-rgb, 0.2\", \"--vz-primary\"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 106
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 115
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 117
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- Chart JS -->
    <script src=\"assets/libs/chart.js/chart.umd.js\"></script>

    <!-- chartjs init -->
    <script src=\"assets/js/pages/chartjs.init.js\"></script>

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
        return "charts-chartjs.html.twig";
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
        return array (  180 => 117,  175 => 115,  163 => 106,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Chartjs'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Charts', title: 'Chartjs'}) }}

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Line Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"lineChart\" class=\"chartjs-chart\" data-colors='[\"--vz-primary-rgb, 0.2\", \"--vz-primary\", \"--vz-success-rgb, 0.2\", \"--vz-success\"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Bar Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"bar\" class=\"chartjs-chart\" data-colors='[\"--vz-primary-rgb, 0.8\", \"--vz-primary-rgb, 0.9\"]'></canvas>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pie Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"pieChart\" class=\"chartjs-chart\" data-colors='[\"--vz-success\", \"--vz-light\"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Donut Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"doughnut\" class=\"chartjs-chart\" data-colors='[\"--vz-primary\", \"--vz-light\"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Polar Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"polarArea\" class=\"chartjs-chart\" data-colors='[\"--vz-danger\", \"--vz-success\", \"--vz-warning\", \"--vz-primary\"]'> </canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Radar Chart</h4>
                                </div>
                                <div class=\"card-body\">
                                    <canvas id=\"radar\" class=\"chartjs-chart\" data-colors='[\"--vz-success-rgb, 0.2\", \"--vz-success\", \"--vz-primary-rgb, 0.2\", \"--vz-primary\"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

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

    <!-- Chart JS -->
    <script src=\"assets/libs/chart.js/chart.umd.js\"></script>

    <!-- chartjs init -->
    <script src=\"assets/js/pages/chartjs.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "charts-chartjs.html.twig", "/home/waldi/myapp2/templates/charts-chartjs.html.twig");
    }
}
