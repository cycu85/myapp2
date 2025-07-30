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

/* charts-apex-radialbar.html.twig */
class __TwigTemplate_18dd451af34b1ccf3164f2e250e302bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-radialbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts-apex-radialbar.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Apex Radialbar Charts"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Apexcharts", "title" => "Radialbar Charts"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Simple Radialbar Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"basic_radialbar\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Multiple Radialbar</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"multiple_radialbar\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Circle Chart - Custom Angle</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"circle_radialbar\" data-colors='[\"--vz-primary\", \"--vz-info\", \"--vz-danger\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Gradient Circle Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"gradient_radialbar\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Stroked Circle Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"stroked_radialbar\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Radialbars with Image</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"radialbar_with_img\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Semi Circular Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"semi_radialbar\" data-colors='[\"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
        // line 136
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 145
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 147
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- apexcharts -->
    <script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

    <!-- radialbar charts init -->
    <script src=\"assets/js/pages/apexcharts-radialbar.init.js\"></script>

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
        return "charts-apex-radialbar.html.twig";
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
        return array (  210 => 147,  205 => 145,  193 => 136,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Apex Radialbar Charts'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Apexcharts', title: 'Radialbar Charts'}) }}

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Simple Radialbar Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"basic_radialbar\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Multiple Radialbar</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"multiple_radialbar\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-warning\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Circle Chart - Custom Angle</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"circle_radialbar\" data-colors='[\"--vz-primary\", \"--vz-info\", \"--vz-danger\", \"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Gradient Circle Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"gradient_radialbar\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Stroked Circle Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"stroked_radialbar\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Radialbars with Image</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"radialbar_with_img\" data-colors='[\"--vz-success\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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
                                    <h4 class=\"card-title mb-0\">Semi Circular Chart</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"semi_radialbar\" data-colors='[\"--vz-primary\"]' class=\"apex-charts\" dir=\"ltr\"></div>
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

    <!-- radialbar charts init -->
    <script src=\"assets/js/pages/apexcharts-radialbar.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "charts-apex-radialbar.html.twig", "/home/waldi/myapp2/templates/charts-apex-radialbar.html.twig");
    }
}
