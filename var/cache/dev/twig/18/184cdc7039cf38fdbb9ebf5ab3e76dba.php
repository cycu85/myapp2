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

/* icons-materialdesign.html.twig */
class __TwigTemplate_6798fd47bf4ef33fa7e872128b003e12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons-materialdesign.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons-materialdesign.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Material Design Icons"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Icons", "title" => "Material Design"]);
        echo "

                    <div class=\"row icon-demo-content\">
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">New Icons</h4>
                                    <p class=\"card-title-desc mb-2\">Use <code>&lt;i class=\"mdi mdi-*-*\"&gt;&lt;/i&gt;</code> class.<span class=\"badge bg-success\">v 6.5.95</span>.</p>

                                    <div class=\"row icon-demo-content\" id=\"newIcons\"></div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title mb-4\">All Icons</h4>
                                    <div class=\"row icon-demo-content\" id=\"icons\"></div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">Size</h4>

                                    <div class=\"row icon-demo-content\">
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-18px mdi-account\"></i> mdi-18px
                                        </div>

                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-24px mdi-account\"></i> mdi-24px
                                        </div>

                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-36px mdi-account\"></i> mdi-36px
                                        </div>

                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-48px mdi-account\"></i> mdi-48px
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">Rotate</h4>

                                    <div class=\"row icon-demo-content\">
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-45 mdi-account\"></i> mdi-rotate-45
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-90 mdi-account\"></i> mdi-rotate-90
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-135 mdi-account\"></i> mdi-rotate-135
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-180 mdi-account\"></i> mdi-rotate-180
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-225 mdi-account\"></i> mdi-rotate-225
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-270 mdi-account\"></i> mdi-rotate-270
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-315 mdi-account\"></i> mdi-rotate-315
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">Spin</h4>

                                    <div class=\"row icon-demo-content\">
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-spin mdi-loading\"></i> mdi-spin
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-spin mdi-star\"></i> mdi-spin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 141
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 150
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 152
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- materialdesign icon js-->
    <script src=\"assets/js/pages/materialdesign.list.js\"></script>

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
        return "icons-materialdesign.html.twig";
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
        return array (  215 => 152,  210 => 150,  198 => 141,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Material Design Icons'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Icons', title: 'Material Design'}) }}

                    <div class=\"row icon-demo-content\">
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">New Icons</h4>
                                    <p class=\"card-title-desc mb-2\">Use <code>&lt;i class=\"mdi mdi-*-*\"&gt;&lt;/i&gt;</code> class.<span class=\"badge bg-success\">v 6.5.95</span>.</p>

                                    <div class=\"row icon-demo-content\" id=\"newIcons\"></div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title mb-4\">All Icons</h4>
                                    <div class=\"row icon-demo-content\" id=\"icons\"></div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">Size</h4>

                                    <div class=\"row icon-demo-content\">
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-18px mdi-account\"></i> mdi-18px
                                        </div>

                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-24px mdi-account\"></i> mdi-24px
                                        </div>

                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-36px mdi-account\"></i> mdi-36px
                                        </div>

                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-48px mdi-account\"></i> mdi-48px
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">Rotate</h4>

                                    <div class=\"row icon-demo-content\">
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-45 mdi-account\"></i> mdi-rotate-45
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-90 mdi-account\"></i> mdi-rotate-90
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-135 mdi-account\"></i> mdi-rotate-135
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-180 mdi-account\"></i> mdi-rotate-180
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-225 mdi-account\"></i> mdi-rotate-225
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-270 mdi-account\"></i> mdi-rotate-270
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-rotate-315 mdi-account\"></i> mdi-rotate-315
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">Spin</h4>

                                    <div class=\"row icon-demo-content\">
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-spin mdi-loading\"></i> mdi-spin
                                        </div>
                                        <div class=\"col-xl-3 col-lg-4 col-sm-6\">
                                            <i class=\"mdi mdi-spin mdi-star\"></i> mdi-spin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <!-- materialdesign icon js-->
    <script src=\"assets/js/pages/materialdesign.list.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "icons-materialdesign.html.twig", "/home/waldi/myapp2/templates/icons-materialdesign.html.twig");
    }
}
