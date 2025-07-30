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

/* maps-leaflet.html.twig */
class __TwigTemplate_ff5abcd5046dd9ef641561f4548293d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maps-leaflet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maps-leaflet.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Leaflet Maps"]);
        echo "

    <!-- leaflet Css -->
    <link href=\"assets/libs/leaflet/leaflet.css\" rel=\"stylesheet\" type=\"text/css\" />

    ";
        // line 10
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <!-- Begin page -->
    <div id=\"layout-wrapper\">

        ";
        // line 19
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"main-content\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    ";
        // line 29
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Maps", "title" => "Leaflet"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Example</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Markers, Circles and Polygons</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-marker\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Working with Popups</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-popup\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Markers with Custom Icons</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-custom-icons\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Interactive Choropleth Map</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-interactive-map\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Layer Groups and Layers Control</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-group-control\" class=\"leaflet-map\"></div>
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
        // line 123
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 132
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 134
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- prismjs plugin -->
    <script src=\"assets/libs/prismjs/prism.js\"></script>

    <!-- leaflet plugin -->
    <script src=\"assets/libs/leaflet/leaflet.js\"></script>

    <!-- leaflet map.init -->
    <script src=\"assets/js/pages/leaflet-us-states.js\"></script>
    <script src=\"assets/js/pages/leaflet-map.init.js\"></script>

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
        return "maps-leaflet.html.twig";
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
        return array (  197 => 134,  192 => 132,  180 => 123,  83 => 29,  70 => 19,  58 => 10,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Leaflet Maps'}) }}

    <!-- leaflet Css -->
    <link href=\"assets/libs/leaflet/leaflet.css\" rel=\"stylesheet\" type=\"text/css\" />

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Maps', title: 'Leaflet'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Example</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Markers, Circles and Polygons</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-marker\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Working with Popups</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-popup\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Markers with Custom Icons</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-custom-icons\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Interactive Choropleth Map</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-interactive-map\" class=\"leaflet-map\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Layer Groups and Layers Control</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div id=\"leaflet-map-group-control\" class=\"leaflet-map\"></div>
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

    <!-- prismjs plugin -->
    <script src=\"assets/libs/prismjs/prism.js\"></script>

    <!-- leaflet plugin -->
    <script src=\"assets/libs/leaflet/leaflet.js\"></script>

    <!-- leaflet map.init -->
    <script src=\"assets/js/pages/leaflet-us-states.js\"></script>
    <script src=\"assets/js/pages/leaflet-map.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "maps-leaflet.html.twig", "/home/waldi/myapp2/templates/maps-leaflet.html.twig");
    }
}
