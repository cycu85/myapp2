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

/* forms-masks.html.twig */
class __TwigTemplate_43fa2b64a62b71664f73362544f28b76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-masks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-masks.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Input Masks"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Forms", "title" => "Input Masks"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Examples</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <form action=\"#\">
                                        <div>
                                            <h5 class=\"fs-14 mb-3 text-muted\">Date Formatting</h5>
                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-date\" class=\"form-label\">Date</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"DD-MM-YYYY\" id=\"cleave-date\">
                                                    </div>

                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-date-format\" class=\"form-label\">Date Formatting</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"MM/YY\" id=\"cleave-date-format\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>

                                        <div class=\"border mt-3 border-dashed\"></div>

                                        <div class=\"mt-4\">
                                            <h6 class=\"mb-3 fs-14 text-muted\">Time Formatting</h6>
                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-time\" class=\"form-label\">Time</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"hh:mm:ss\" id=\"cleave-time\">
                                                    </div>

                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-time-format\" class=\"form-label\">Time Formatting</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"hh:mm\" id=\"cleave-time-format\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>

                                        <div class=\"border mt-3 border-dashed\"></div>

                                        <div class=\"mt-4\">
                                            <h5 class=\"fs-14 mb-3 text-muted\">Custom Options</h5>
                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-ccard\" class=\"form-label\">Credit Card</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-ccard\" placeholder=\"xxxx xxxx xxxx xxxx\">
                                                    </div>

                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-delimiter\" class=\"form-label\">Delimiter</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-delimiter\" placeholder=\"xxx·xxx·xxx\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-delimiters\" class=\"form-label\">Delimiters</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-delimiters\" placeholder=\"xxx.xxx.xxx-xx\">
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-prefix\" class=\"form-label\">Prefix</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-prefix\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3 mb-xl-0\">
                                                        <label for=\"cleave-phone\" class=\"form-label\">Phone</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-phone\" placeholder=\"(xxx)xxx-xxxx\">
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-0\">
                                                        <label for=\"cleave-numeral\" class=\"form-label\">Numeral Formatting</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter numeral\" id=\"cleave-numeral\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->

                                        </div>
                                    </form><!-- end form -->
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
        // line 145
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    ";
        // line 152
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 154
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- cleave.js -->
    <script src=\"assets/libs/cleave.js/cleave.min.js\"></script>
    <!-- form masks init -->
    <script src=\"assets/js/pages/form-masks.init.js\"></script>

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
        return "forms-masks.html.twig";
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
        return array (  217 => 154,  212 => 152,  202 => 145,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Input Masks'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Forms', title: 'Input Masks'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Examples</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <form action=\"#\">
                                        <div>
                                            <h5 class=\"fs-14 mb-3 text-muted\">Date Formatting</h5>
                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-date\" class=\"form-label\">Date</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"DD-MM-YYYY\" id=\"cleave-date\">
                                                    </div>

                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-date-format\" class=\"form-label\">Date Formatting</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"MM/YY\" id=\"cleave-date-format\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>

                                        <div class=\"border mt-3 border-dashed\"></div>

                                        <div class=\"mt-4\">
                                            <h6 class=\"mb-3 fs-14 text-muted\">Time Formatting</h6>
                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-time\" class=\"form-label\">Time</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"hh:mm:ss\" id=\"cleave-time\">
                                                    </div>

                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-time-format\" class=\"form-label\">Time Formatting</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"hh:mm\" id=\"cleave-time-format\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>

                                        <div class=\"border mt-3 border-dashed\"></div>

                                        <div class=\"mt-4\">
                                            <h5 class=\"fs-14 mb-3 text-muted\">Custom Options</h5>
                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-ccard\" class=\"form-label\">Credit Card</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-ccard\" placeholder=\"xxxx xxxx xxxx xxxx\">
                                                    </div>

                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-delimiter\" class=\"form-label\">Delimiter</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-delimiter\" placeholder=\"xxx·xxx·xxx\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-delimiters\" class=\"form-label\">Delimiters</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-delimiters\" placeholder=\"xxx.xxx.xxx-xx\">
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3\">
                                                        <label for=\"cleave-prefix\" class=\"form-label\">Prefix</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-prefix\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-3 mb-xl-0\">
                                                        <label for=\"cleave-phone\" class=\"form-label\">Phone</label>
                                                        <input type=\"text\" class=\"form-control\" id=\"cleave-phone\" placeholder=\"(xxx)xxx-xxxx\">
                                                    </div>
                                                </div><!-- end col -->

                                                <div class=\"col-xl-6\">
                                                    <div class=\"mb-0\">
                                                        <label for=\"cleave-numeral\" class=\"form-label\">Numeral Formatting</label>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter numeral\" id=\"cleave-numeral\">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->

                                        </div>
                                    </form><!-- end form -->
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

    <!-- cleave.js -->
    <script src=\"assets/libs/cleave.js/cleave.min.js\"></script>
    <!-- form masks init -->
    <script src=\"assets/js/pages/form-masks.init.js\"></script>

    <script src=\"assets/js/app.js\"></script>

</body>

</html>", "forms-masks.html.twig", "/home/waldi/myapp2/templates/forms-masks.html.twig");
    }
}
