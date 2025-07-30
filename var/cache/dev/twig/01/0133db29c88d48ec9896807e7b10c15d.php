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

/* apps-nft-create.html.twig */
class __TwigTemplate_1d95cd7efcf66355862930995f70d128 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-nft-create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-nft-create.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Create NFT"]);
        echo "

    <!-- Filepond css -->
    <link rel=\"stylesheet\" href=\"assets/libs/filepond/filepond.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css\">

    ";
        // line 11
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <!-- Begin page -->
    <div id=\"layout-wrapper\">

        ";
        // line 20
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"main-content\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    ";
        // line 30
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "NFT Marketplace", "title" => "Create NFT"]);
        echo "
                    
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5 class=\"card-title mb-0\">Create New File</h5>
                                </div>
                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"row g-3\">
                                            <div class=\"col-lg-12\">
                                                <h5 class=\"fw-semibold mb-3\">Image, Video, Audio, or 3D Model</h5>
                                                <input type=\"file\" class=\"filepond filepond-input-multiple\" multiple name=\"filepond\" data-allow-reorder=\"true\" data-max-file-size=\"3MB\" data-max-files=\"2\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <label for=\"productName\" class=\"form-label\">Product Name</label>
                                                <input type=\"text\" class=\"form-control\" id=\"productName\" placeholder=\"Enter product name\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <label for=\"discription\" class=\"form-label\">Description</label>
                                                <textarea class=\"form-control\" id=\"discription\" rows=\"3\" placeholder=\"Enter description\"></textarea>
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <label for=\"externalLink\" class=\"form-label\">External link</label>
                                                <input type=\"text\" class=\"form-control\" id=\"externalLink\" placeholder=\"Enter external link\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-4\">
                                                <label for=\"itemPrice\" class=\"form-label\">Item Price</label>
                                                <input type=\"text\" class=\"form-control\" id=\"itemPrice\" placeholder=\"Price\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-4\">
                                                <label for=\"size\" class=\"form-label\">Size</label>
                                                <input type=\"text\" class=\"form-control\" id=\"size\" placeholder=\"Size\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-4\">
                                                <label for=\"properties\" class=\"form-label\">Properties</label>
                                                <input type=\"text\" class=\"form-control\" id=\"properties\" placeholder=\"Properties\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\">
                                                        <label class=\"form-check-label\" for=\"inlineCheckbox1\">Put on sale</label>
                                                    </div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\">
                                                        <label class=\"form-check-label\" for=\"inlineCheckbox2\">Instant sale price</label>
                                                    </div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\">
                                                        <label class=\"form-check-label\" for=\"inlineCheckbox3\">Unlock one purchased</label>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <div class=\"text-end\">
                                                    <button class=\"btn btn-primary\">Create Item</button>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                    </form>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 102
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 111
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 113
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- filepond js -->
    <script src=\"assets/libs/filepond/filepond.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js\"></script>

    <!--nft create init js-->
    <script src=\"assets/js/pages/apps-nft-create.init.js\"></script>

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
        return "apps-nft-create.html.twig";
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
        return array (  176 => 113,  171 => 111,  159 => 102,  84 => 30,  71 => 20,  59 => 11,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Create NFT'}) }}

    <!-- Filepond css -->
    <link rel=\"stylesheet\" href=\"assets/libs/filepond/filepond.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css\">

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'NFT Marketplace', title: 'Create NFT'}) }}
                    
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h5 class=\"card-title mb-0\">Create New File</h5>
                                </div>
                                <div class=\"card-body\">
                                    <form>
                                        <div class=\"row g-3\">
                                            <div class=\"col-lg-12\">
                                                <h5 class=\"fw-semibold mb-3\">Image, Video, Audio, or 3D Model</h5>
                                                <input type=\"file\" class=\"filepond filepond-input-multiple\" multiple name=\"filepond\" data-allow-reorder=\"true\" data-max-file-size=\"3MB\" data-max-files=\"2\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <label for=\"productName\" class=\"form-label\">Product Name</label>
                                                <input type=\"text\" class=\"form-control\" id=\"productName\" placeholder=\"Enter product name\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <label for=\"discription\" class=\"form-label\">Description</label>
                                                <textarea class=\"form-control\" id=\"discription\" rows=\"3\" placeholder=\"Enter description\"></textarea>
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <label for=\"externalLink\" class=\"form-label\">External link</label>
                                                <input type=\"text\" class=\"form-control\" id=\"externalLink\" placeholder=\"Enter external link\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-4\">
                                                <label for=\"itemPrice\" class=\"form-label\">Item Price</label>
                                                <input type=\"text\" class=\"form-control\" id=\"itemPrice\" placeholder=\"Price\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-4\">
                                                <label for=\"size\" class=\"form-label\">Size</label>
                                                <input type=\"text\" class=\"form-control\" id=\"size\" placeholder=\"Size\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-4\">
                                                <label for=\"properties\" class=\"form-label\">Properties</label>
                                                <input type=\"text\" class=\"form-control\" id=\"properties\" placeholder=\"Properties\">
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\">
                                                        <label class=\"form-check-label\" for=\"inlineCheckbox1\">Put on sale</label>
                                                    </div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\">
                                                        <label class=\"form-check-label\" for=\"inlineCheckbox2\">Instant sale price</label>
                                                    </div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\">
                                                        <label class=\"form-check-label\" for=\"inlineCheckbox3\">Unlock one purchased</label>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class=\"col-lg-12\">
                                                <div class=\"text-end\">
                                                    <button class=\"btn btn-primary\">Create Item</button>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                    </form>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

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

    <!-- filepond js -->
    <script src=\"assets/libs/filepond/filepond.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js\"></script>

    <!--nft create init js-->
    <script src=\"assets/js/pages/apps-nft-create.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "apps-nft-create.html.twig", "/home/waldi/myapp2/templates/apps-nft-create.html.twig");
    }
}
