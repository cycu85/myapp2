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

/* forms-editors.html.twig */
class __TwigTemplate_117bb46742ffba27d616453170d679a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-editors.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-editors.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Editors"]);
        echo "

    <!-- quill css -->
    <link href=\"assets/libs/quill/quill.core.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/libs/quill/quill.bubble.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/libs/quill/quill.snow.css\" rel=\"stylesheet\" type=\"text/css\" />

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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Forms", "title" => "Editors"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0\">Ckeditor Classic Editor</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>ckeditor-classic</code> class to set ckeditor classic editor.</p>
                                    <div class=\"ckeditor-classic\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row mt-2\">
                        <div class=\"col-lg-12\">

                            <div class=\"justify-content-between d-flex align-items-center mb-3\">
                                <h5 class=\"mb-0 pb-1 text-decoration-underline\">Quilljs Editor</h5>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Snow Editor</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>snow-editor</code> class to set snow editor.</p>
                                    <div class=\"snow-editor\" style=\"height: 300px;\">
                                        <h3><span class=\"ql-size-large\">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>

                                    </div> <!-- end Snow-editor-->
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Bubble Editor</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>bubble-editor</code> class to set bubble editor.</p>
                                    <div class=\"bubble-editor\" style=\"height: 300px;\">
                                        <h3><span class=\"ql-size-large\">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>

                                    </div>
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
        // line 123
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    ";
        // line 130
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 132
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- ckeditor -->
    <script src=\"assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js\"></script>

    <!-- quill js -->
    <script src=\"assets/libs/quill/quill.min.js\"></script>

    <!-- init js -->
    <script src=\"assets/js/pages/form-editor.init.js\"></script>

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
        return "forms-editors.html.twig";
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
        return array (  195 => 132,  190 => 130,  180 => 123,  85 => 31,  72 => 21,  60 => 12,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Editors'}) }}

    <!-- quill css -->
    <link href=\"assets/libs/quill/quill.core.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/libs/quill/quill.bubble.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/libs/quill/quill.snow.css\" rel=\"stylesheet\" type=\"text/css\" />

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Forms', title: 'Editors'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0\">Ckeditor Classic Editor</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>ckeditor-classic</code> class to set ckeditor classic editor.</p>
                                    <div class=\"ckeditor-classic\"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row mt-2\">
                        <div class=\"col-lg-12\">

                            <div class=\"justify-content-between d-flex align-items-center mb-3\">
                                <h5 class=\"mb-0 pb-1 text-decoration-underline\">Quilljs Editor</h5>
                            </div>
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Snow Editor</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>snow-editor</code> class to set snow editor.</p>
                                    <div class=\"snow-editor\" style=\"height: 300px;\">
                                        <h3><span class=\"ql-size-large\">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>

                                    </div> <!-- end Snow-editor-->
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Bubble Editor</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>bubble-editor</code> class to set bubble editor.</p>
                                    <div class=\"bubble-editor\" style=\"height: 300px;\">
                                        <h3><span class=\"ql-size-large\">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>

                                    </div>
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

    <!-- ckeditor -->
    <script src=\"assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js\"></script>

    <!-- quill js -->
    <script src=\"assets/libs/quill/quill.min.js\"></script>

    <!-- init js -->
    <script src=\"assets/js/pages/form-editor.init.js\"></script>

    <script src=\"assets/js/app.js\"></script>

</body>

</html>", "forms-editors.html.twig", "/home/waldi/myapp2/templates/forms-editors.html.twig");
    }
}
