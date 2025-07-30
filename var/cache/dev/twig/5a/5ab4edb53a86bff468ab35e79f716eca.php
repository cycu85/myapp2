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

/* forms-file-uploads.html.twig */
class __TwigTemplate_e2844ec57fe93e552aca5030ee57223f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-file-uploads.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-file-uploads.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "File Upload"]);
        echo "

    <!-- dropzone css -->
    <link rel=\"stylesheet\" href=\"assets/libs/dropzone/dropzone.css\" type=\"text/css\" />

    <!-- Filepond css -->
    <link rel=\"stylesheet\" href=\"assets/libs/filepond/filepond.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css\">

    ";
        // line 14
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <!-- Begin page -->
    <div id=\"layout-wrapper\">

        ";
        // line 23
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"main-content\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    ";
        // line 33
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Forms", "title" => "File Upload"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Dropzone</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.</p>

                                    <div class=\"dropzone\">
                                        <div class=\"fallback\">
                                            <input name=\"file\" type=\"file\" multiple=\"multiple\">
                                        </div>
                                        <div class=\"dz-message needsclick\">
                                            <div class=\"mb-3\">
                                                <i class=\"display-4 text-muted ri-upload-cloud-2-fill\"></i>
                                            </div>

                                            <h4>Drop files here or click to upload.</h4>
                                        </div>
                                    </div>

                                    <ul class=\"list-unstyled mb-0\" id=\"dropzone-preview\">
                                        <li class=\"mt-2\" id=\"dropzone-preview-list\">
                                            <!-- This is used as the file preview template -->
                                            <div class=\"border rounded\">
                                                <div class=\"d-flex p-2\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <div class=\"avatar-sm bg-light rounded\">
                                                            <img data-dz-thumbnail class=\"img-fluid rounded d-block\" src=\"assets/images/new-document.png\" alt=\"Dropzone-Image\" />
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-grow-1\">
                                                        <div class=\"pt-1\">
                                                            <h5 class=\"fs-14 mb-1\" data-dz-name>&nbsp;</h5>
                                                            <p class=\"fs-13 text-muted mb-0\" data-dz-size></p>
                                                            <strong class=\"error text-danger\" data-dz-errormessage></strong>
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-shrink-0 ms-3\">
                                                        <button data-dz-remove class=\"btn btn-sm btn-danger\">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end dropzon-preview -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row mt-2\">
                        <div class=\"col-lg-12\">
                            <div class=\"justify-content-between d-flex align-items-center mb-3\">
                                <h5 class=\"mb-0 pb-1 text-decoration-underline\">Filepond</h5>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h4 class=\"card-title mb-0\">Multiple File Upload</h4>
                                        </div><!-- end card header -->

                                        <div class=\"card-body\">
                                            <p class=\"text-muted\">FilePond is a JavaScript library that optimizes multiple images for faster uploads and offers a great, accessible, silky smooth user experience.</p>
                                            <input type=\"file\" class=\"filepond filepond-input-multiple\" multiple name=\"filepond\" data-allow-reorder=\"true\" data-max-file-size=\"3MB\" data-max-files=\"3\">
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div> <!-- end col -->

                                <div class=\"col-lg-6\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h4 class=\"card-title mb-0\">Profile Picture Selection</h4>
                                        </div><!-- end card header -->

                                        <div class=\"card-body\">
                                            <p class=\"text-muted\">FilePond is a JavaScript library with profile picture-shaped file upload variation.</p>
                                            <div class=\"avatar-xl mx-auto\">
                                                <input type=\"file\" class=\"filepond filepond-input-circle\" name=\"filepond\" accept=\"image/png, image/jpeg, image/gif\" />
                                            </div>

                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            ";
        // line 144
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    ";
        // line 151
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 153
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- dropzone min -->
    <script src=\"assets/libs/dropzone/dropzone-min.js\"></script>
    <!-- filepond js -->
    <script src=\"assets/libs/filepond/filepond.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js\"></script>

    <script src=\"assets/js/pages/form-file-upload.init.js\"></script>

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
        return "forms-file-uploads.html.twig";
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
        return array (  216 => 153,  211 => 151,  201 => 144,  87 => 33,  74 => 23,  62 => 14,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'File Upload'}) }}

    <!-- dropzone css -->
    <link rel=\"stylesheet\" href=\"assets/libs/dropzone/dropzone.css\" type=\"text/css\" />

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Forms', title: 'File Upload'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Dropzone</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.</p>

                                    <div class=\"dropzone\">
                                        <div class=\"fallback\">
                                            <input name=\"file\" type=\"file\" multiple=\"multiple\">
                                        </div>
                                        <div class=\"dz-message needsclick\">
                                            <div class=\"mb-3\">
                                                <i class=\"display-4 text-muted ri-upload-cloud-2-fill\"></i>
                                            </div>

                                            <h4>Drop files here or click to upload.</h4>
                                        </div>
                                    </div>

                                    <ul class=\"list-unstyled mb-0\" id=\"dropzone-preview\">
                                        <li class=\"mt-2\" id=\"dropzone-preview-list\">
                                            <!-- This is used as the file preview template -->
                                            <div class=\"border rounded\">
                                                <div class=\"d-flex p-2\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <div class=\"avatar-sm bg-light rounded\">
                                                            <img data-dz-thumbnail class=\"img-fluid rounded d-block\" src=\"assets/images/new-document.png\" alt=\"Dropzone-Image\" />
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-grow-1\">
                                                        <div class=\"pt-1\">
                                                            <h5 class=\"fs-14 mb-1\" data-dz-name>&nbsp;</h5>
                                                            <p class=\"fs-13 text-muted mb-0\" data-dz-size></p>
                                                            <strong class=\"error text-danger\" data-dz-errormessage></strong>
                                                        </div>
                                                    </div>
                                                    <div class=\"flex-shrink-0 ms-3\">
                                                        <button data-dz-remove class=\"btn btn-sm btn-danger\">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end dropzon-preview -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row mt-2\">
                        <div class=\"col-lg-12\">
                            <div class=\"justify-content-between d-flex align-items-center mb-3\">
                                <h5 class=\"mb-0 pb-1 text-decoration-underline\">Filepond</h5>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h4 class=\"card-title mb-0\">Multiple File Upload</h4>
                                        </div><!-- end card header -->

                                        <div class=\"card-body\">
                                            <p class=\"text-muted\">FilePond is a JavaScript library that optimizes multiple images for faster uploads and offers a great, accessible, silky smooth user experience.</p>
                                            <input type=\"file\" class=\"filepond filepond-input-multiple\" multiple name=\"filepond\" data-allow-reorder=\"true\" data-max-file-size=\"3MB\" data-max-files=\"3\">
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div> <!-- end col -->

                                <div class=\"col-lg-6\">
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <h4 class=\"card-title mb-0\">Profile Picture Selection</h4>
                                        </div><!-- end card header -->

                                        <div class=\"card-body\">
                                            <p class=\"text-muted\">FilePond is a JavaScript library with profile picture-shaped file upload variation.</p>
                                            <div class=\"avatar-xl mx-auto\">
                                                <input type=\"file\" class=\"filepond filepond-input-circle\" name=\"filepond\" accept=\"image/png, image/jpeg, image/gif\" />
                                            </div>

                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
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

    <!-- dropzone min -->
    <script src=\"assets/libs/dropzone/dropzone-min.js\"></script>
    <!-- filepond js -->
    <script src=\"assets/libs/filepond/filepond.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js\"></script>
    <script src=\"assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js\"></script>

    <script src=\"assets/js/pages/form-file-upload.init.js\"></script>

    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "forms-file-uploads.html.twig", "/home/waldi/myapp2/templates/forms-file-uploads.html.twig");
    }
}
