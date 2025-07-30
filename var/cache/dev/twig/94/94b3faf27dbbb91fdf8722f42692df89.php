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

/* charts-apex-column.html.twig */
class __TwigTemplate_2e47bc092fc1f488ac372e6b21b2b78f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-column.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-column.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Apex Column Charts"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Apexcharts", "title" => "Column Charts"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Column Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_chart\" data-colors='[\"--vz-danger\", \"--vz-primary\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Column with Data Labels</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_chart_datalabel\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Stacked Column Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_stacked\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Column 100</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_stacked_chart\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Grouped Stacked Columns</h4>
                                </div><!-- end card header -->
                    
                                <div class=\"card-body\">
                                    <div id=\"grouped_stacked_columns\" data-colors='[\"--vz-success\", \"--vz-primary\",\"--vz-secondary\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Dumbbell Chart</h4>
                                </div><!-- end card header -->
                        
                                <div class=\"card-body\">
                                    <div id=\"dumbbell_chart\" data-colors='[\"--vz-success\", \"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div><!--end row-->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Column with Markers</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_markers\" data-colors='[\"--vz-success\", \"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Column with Rotated Labels</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_rotated_labels\" data-colors='[\"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Column with Nagetive Values</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_nagetive_values\" data-colors='[\"--vz-success\", \"--vz-danger\", \"--vz-warning\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Range Column Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_range\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Dynamic Loaded Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"dynamicloadedchart-wrap\" dir=\"ltr\">
                                        <div id=\"chart-year\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-body-color\", \"--vz-info\"]' class=\"apex-charts\"></div>
                                        <div id=\"chart-quarter\" class=\"apex-charts\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Distributed Columns Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_distributed\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-dark\", \"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Column with Group Label</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_group_labels\" data-colors='[\"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
        // line 224
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 233
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 235
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- apexcharts -->
    <script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js\"></script>
  \t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js\"></script>

    <!-- apexcharts init -->
    <script src=\"assets/js/pages/apexcharts-column.init.js\"></script>

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
        return "charts-apex-column.html.twig";
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
        return array (  298 => 235,  293 => 233,  281 => 224,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Apex Column Charts'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Apexcharts', title: 'Column Charts'}) }}

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Basic Column Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_chart\" data-colors='[\"--vz-danger\", \"--vz-primary\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Column with Data Labels</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_chart_datalabel\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Stacked Column Charts</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_stacked\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Stacked Column 100</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_stacked_chart\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Grouped Stacked Columns</h4>
                                </div><!-- end card header -->
                    
                                <div class=\"card-body\">
                                    <div id=\"grouped_stacked_columns\" data-colors='[\"--vz-success\", \"--vz-primary\",\"--vz-secondary\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Dumbbell Chart</h4>
                                </div><!-- end card header -->
                        
                                <div class=\"card-body\">
                                    <div id=\"dumbbell_chart\" data-colors='[\"--vz-success\", \"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div><!--end row-->

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Column with Markers</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_markers\" data-colors='[\"--vz-success\", \"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Column with Rotated Labels</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_rotated_labels\" data-colors='[\"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Column with Nagetive Values</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_nagetive_values\" data-colors='[\"--vz-success\", \"--vz-danger\", \"--vz-warning\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Range Column Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_range\" data-colors='[\"--vz-primary\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Dynamic Loaded Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"dynamicloadedchart-wrap\" dir=\"ltr\">
                                        <div id=\"chart-year\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-body-color\", \"--vz-info\"]' class=\"apex-charts\"></div>
                                        <div id=\"chart-quarter\" class=\"apex-charts\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Distributed Columns Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_distributed\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\", \"--vz-dark\", \"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Column with Group Label</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"column_group_labels\" data-colors='[\"--vz-info\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js\"></script>
  \t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js\"></script>

    <!-- apexcharts init -->
    <script src=\"assets/js/pages/apexcharts-column.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "charts-apex-column.html.twig", "/home/waldi/myapp2/templates/charts-apex-column.html.twig");
    }
}
