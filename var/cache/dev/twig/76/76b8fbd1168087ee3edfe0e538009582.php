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

/* forms-pickers.html.twig */
class __TwigTemplate_a4d029c4a71f71de1a23e06a9e8e446d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-pickers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-pickers.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Pickers"]);
        echo "

    <!-- One of the following themes -->
    <link rel=\"stylesheet\" href=\"assets/libs/@simonwep/pickr/themes/classic.min.css\" /> <!-- 'classic' theme -->
    <link rel=\"stylesheet\" href=\"assets/libs/@simonwep/pickr/themes/monolith.min.css\" /> <!-- 'monolith' theme -->
    <link rel=\"stylesheet\" href=\"assets/libs/@simonwep/pickr/themes/nano.min.css\" /> <!-- 'nano' theme -->

    ";
        // line 12
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <!-- Begin page -->
    <div id=\"layout-wrapper\">

        ";
        // line 21
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"main-content\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    ";
        // line 31
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Forms", "title" => "Pickers"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Flatpickr - Datepicker</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <form action=\"#\">
                                        <div class=\"row gy-3\">
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label class=\"form-label mb-0\">Basic</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" >
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label class=\"form-label mb-0\">DateTime</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d.m.y\" data-enable-time</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d.m.y\" data-enable-time >
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Human-Friendly Dates</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-altFormat=\"F j, Y\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control flatpickr-input\" data-provider=\"flatpickr\" data-altFormat=\"F j, Y\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">MinDate and MaxDate</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-minDate=\"Your Min. Date\" data-maxDate=\"Your Max. date\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-minDate=\"25 12, 2021\" data-maxDate=\"29 12,2021\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Default Date</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-deafult-date=\"Your Default Date\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-deafult-date=\"25 12,2021\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Disabling Dates</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-disable=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-disable-date=\"15 12,2021\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Selecting Multiple Dates</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-multiple-date=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-multiple-date=\"true\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Range</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-range-date=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-range-date=\"true\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Inline</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-deafult-date=\"today\" data-inline-date=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-deafult-date=\"25 01,2021\" data-inline-date=\"true\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Week Numbers</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-week-number</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-week-number>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </form><!-- end form -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Flatpickr - Timepicker</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <form action=\"#\">
                                        <div class=\"row gy-3\">
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label class=\"form-label mb-0\">Timepicker</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-time-basic=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-time-basic=\"true\" id=\"timepicker-example\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label class=\"form-label mb-0\">24-hour Time Picker</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-time-hrs=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-time-hrs=\"true\" id=\"timepicker-24hrs\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Time Picker w/ Limits</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-min-time=\"Min.Time\" data-max-time=\"Max.Time\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-min-time=\"13:00\" data-max-time=\"16:00\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Preloading Time</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-default-time=\"Your Default Time\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-default-time=\"16:45\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Inline</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-time-inline=\"Your Default Time\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-time-inline=\"11:42\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </form><!-- end form -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Colorpicker</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>

                                        <div>
                                            <h5 class=\"fs-14 mb-3\">Themes</h5>
                                            <div class=\"row g-4\">
                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div>
                                                        <h5 class=\"fs-13 text-muted mb-2\">Classic Demo</h5>
                                                        <p class=\"text-muted\">Use <code>classic-colorpicker</code> class to set classic colorpicker.</p>
                                                        <div class=\"classic-colorpicker\"></div>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div>
                                                        <h5 class=\"fs-13 text-muted mb-2\">Monolith Demo</h5>
                                                        <p class=\"text-muted\">Use <code>monolith-colorpicker</code> class to set monolith colorpicker.</p>
                                                        <div class=\"monolith-colorpicker\"></div>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div>
                                                        <h5 class=\"fs-13 text-muted mb-2\">Nano Demo</h5>
                                                        <p class=\"text-muted\">Use <code>nano-colorpicker</code> class to set nano colorpicker.</p>
                                                        <div class=\"nano-colorpicker\"></div>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>

                                        <div class=\"mt-5\">
                                            <h5 class=\"fs-14 mb-2\">Options</h5>

                                            <div class=\"row g-4\">
                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Demo</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-demo</code> class to set demo option colorpicker.</p>
                                                        <div class=\"colorpicker-demo\"></div>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Picker with Opacity & Hue</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-opacity-hue</code> class to set colorpicker with opacity & hue.</p>
                                                        <div class=\"colorpicker-opacity-hue\"></div>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Switches</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-switch</code> class to set switch colorpicker.</p>
                                                        <div class=\"colorpicker-switch\"></div>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Picker with Input</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-input</code> class to set colorpicker with input.</p>
                                                        <div class=\"colorpicker-input\"></div>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Color Format</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-format</code> class to set colorpicker with format option.</p>
                                                        <div class=\"colorpicker-format\"></div>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                    <!-- end preview -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            ";
        // line 311
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    ";
        // line 318
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 320
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- Modern colorpicker bundle -->
    <script src=\"assets/libs/@simonwep/pickr/pickr.min.js\"></script>

    <!-- init js -->
    <script src=\"assets/js/pages/form-pickers.init.js\"></script>

    <!--app js-->
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
        return "forms-pickers.html.twig";
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
        return array (  383 => 320,  378 => 318,  368 => 311,  85 => 31,  72 => 21,  60 => 12,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Pickers'}) }}

    <!-- One of the following themes -->
    <link rel=\"stylesheet\" href=\"assets/libs/@simonwep/pickr/themes/classic.min.css\" /> <!-- 'classic' theme -->
    <link rel=\"stylesheet\" href=\"assets/libs/@simonwep/pickr/themes/monolith.min.css\" /> <!-- 'monolith' theme -->
    <link rel=\"stylesheet\" href=\"assets/libs/@simonwep/pickr/themes/nano.min.css\" /> <!-- 'nano' theme -->

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Forms', title: 'Pickers'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Flatpickr - Datepicker</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <form action=\"#\">
                                        <div class=\"row gy-3\">
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label class=\"form-label mb-0\">Basic</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" >
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label class=\"form-label mb-0\">DateTime</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d.m.y\" data-enable-time</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d.m.y\" data-enable-time >
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Human-Friendly Dates</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-altFormat=\"F j, Y\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control flatpickr-input\" data-provider=\"flatpickr\" data-altFormat=\"F j, Y\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">MinDate and MaxDate</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-minDate=\"Your Min. Date\" data-maxDate=\"Your Max. date\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-minDate=\"25 12, 2021\" data-maxDate=\"29 12,2021\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Default Date</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-deafult-date=\"Your Default Date\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-deafult-date=\"25 12,2021\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Disabling Dates</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-disable=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-disable-date=\"15 12,2021\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Selecting Multiple Dates</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-multiple-date=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-multiple-date=\"true\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Range</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-range-date=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-range-date=\"true\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Inline</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-deafult-date=\"today\" data-inline-date=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-deafult-date=\"25 01,2021\" data-inline-date=\"true\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Week Numbers</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-week-number</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-week-number>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </form><!-- end form -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Flatpickr - Timepicker</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <form action=\"#\">
                                        <div class=\"row gy-3\">
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label class=\"form-label mb-0\">Timepicker</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-time-basic=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-time-basic=\"true\" id=\"timepicker-example\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label class=\"form-label mb-0\">24-hour Time Picker</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-time-hrs=\"true\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-time-hrs=\"true\" id=\"timepicker-24hrs\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Time Picker w/ Limits</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-min-time=\"Min.Time\" data-max-time=\"Max.Time\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-min-time=\"13:00\" data-max-time=\"16:00\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Preloading Time</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-default-time=\"Your Default Time\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-default-time=\"16:45\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <div class=\"mt-3\">
                                                    <label class=\"form-label mb-0\">Inline</label>
                                                    <p class=\"text-muted\">Set <code>data-provider=\"timepickr\" data-time-inline=\"Your Default Time\"</code> attribute.</p>
                                                    <input type=\"text\" class=\"form-control\" data-provider=\"timepickr\" data-time-inline=\"11:42\">
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </form><!-- end form -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Colorpicker</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div>

                                        <div>
                                            <h5 class=\"fs-14 mb-3\">Themes</h5>
                                            <div class=\"row g-4\">
                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div>
                                                        <h5 class=\"fs-13 text-muted mb-2\">Classic Demo</h5>
                                                        <p class=\"text-muted\">Use <code>classic-colorpicker</code> class to set classic colorpicker.</p>
                                                        <div class=\"classic-colorpicker\"></div>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div>
                                                        <h5 class=\"fs-13 text-muted mb-2\">Monolith Demo</h5>
                                                        <p class=\"text-muted\">Use <code>monolith-colorpicker</code> class to set monolith colorpicker.</p>
                                                        <div class=\"monolith-colorpicker\"></div>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div>
                                                        <h5 class=\"fs-13 text-muted mb-2\">Nano Demo</h5>
                                                        <p class=\"text-muted\">Use <code>nano-colorpicker</code> class to set nano colorpicker.</p>
                                                        <div class=\"nano-colorpicker\"></div>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>

                                        <div class=\"mt-5\">
                                            <h5 class=\"fs-14 mb-2\">Options</h5>

                                            <div class=\"row g-4\">
                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Demo</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-demo</code> class to set demo option colorpicker.</p>
                                                        <div class=\"colorpicker-demo\"></div>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Picker with Opacity & Hue</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-opacity-hue</code> class to set colorpicker with opacity & hue.</p>
                                                        <div class=\"colorpicker-opacity-hue\"></div>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Switches</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-switch</code> class to set switch colorpicker.</p>
                                                        <div class=\"colorpicker-switch\"></div>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Picker with Input</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-input</code> class to set colorpicker with input.</p>
                                                        <div class=\"colorpicker-input\"></div>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-lg-4 col-md-6\">
                                                    <div class=\"mt-2\">
                                                        <h5 class=\"fs-13 text-muted mb-2\">Color Format</h5>
                                                        <p class=\"text-muted\">Use <code>colorpicker-format</code> class to set colorpicker with format option.</p>
                                                        <div class=\"colorpicker-format\"></div>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                    <!-- end preview -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            {{ include('partials/footer.html.twig') }}
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    {{ include('partials/customizer.html.twig') }}

    {{ include('partials/vendor-scripts.html.twig') }}

    <!-- Modern colorpicker bundle -->
    <script src=\"assets/libs/@simonwep/pickr/pickr.min.js\"></script>

    <!-- init js -->
    <script src=\"assets/js/pages/form-pickers.init.js\"></script>

    <!--app js-->
    <script src=\"assets/js/app.js\"></script>

</body>

</html>", "forms-pickers.html.twig", "/home/waldi/myapp2/templates/forms-pickers.html.twig");
    }
}
