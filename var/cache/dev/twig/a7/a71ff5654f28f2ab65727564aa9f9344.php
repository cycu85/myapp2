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

/* pages-gallery.html.twig */
class __TwigTemplate_bb6fbd5bfcd253c68ff986ba46367be5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-gallery.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-gallery.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Gallery"]);
        echo "

    <!-- glightbox css -->
    <link rel=\"stylesheet\" href=\"assets/libs/glightbox/css/glightbox.min.css\">

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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Pages", "title" => "Gallery"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"text-center\">
                                                <ul class=\"list-inline categories-filter animation-nav\" id=\"filter\">
                                                    <li class=\"list-inline-item\"><a class=\"categories active\" data-filter=\"*\">All</a></li>
                                                    <li class=\"list-inline-item\"><a class=\"categories\" data-filter=\".project\">Project</a></li>
                                                    <li class=\"list-inline-item\"><a class=\"categories\" data-filter=\".designing\">Designing</a></li>
                                                    <li class=\"list-inline-item\"><a class=\"categories\" data-filter=\".photography\">Photography</a></li>
                                                    <li class=\"list-inline-item\"><a class=\"categories\" data-filter=\".development\">Development</a></li>
                                                </ul>
                                            </div>

                                            <div class=\"row gallery-wrapper\">
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing development\" data-category=\"designing development\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-1.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-1.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Glasses and laptop from above</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Ron Mackie</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 2.2K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.3K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-2.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-2.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Working at a coffee shop</h5>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Nancy Martino</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 3.2K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.1K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project development\" data-category=\"development\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-3.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-3.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Photo was taken in Beach</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Elwood Arter</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 2.1K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing\" data-category=\"project designing\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-4.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-4.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Drawing a sketch</h5>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Jason McQuaid</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 825
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 101
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing\" data-category=\"project designing\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-5.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-5.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Working from home little spot</h5>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Henry Baird</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 632
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 95
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-6.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-6.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Project discussion with team</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Erica Kernan</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 3.4K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.3k
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing development\" data-category=\"designing development\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-7.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-7.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Sunrise above a beach</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">James Ballard</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 735
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 150
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-8.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-8.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Glasses and laptop from above</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Ruby Griffin</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 1.5k
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 250
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing development\" data-category=\"designing development\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-9.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-9.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Dramatic clouds at the Golden Gate Bridge</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Ron Mackie</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 2.2K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.3K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing\" data-category=\"project designing\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-10.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-10.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Fun day at the Hill Station</h5>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Henry Baird</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 632
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 95
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-11.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-11.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Cycling in the countryside</h5>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Nancy Martino</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 3.2K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.1K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-12.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-12.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">A mix of friends and strangers heading off to find an adventure.</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Erica Kernan</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 3.4K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.3k
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"text-center my-2\">
                                                <a href=\"javascript:void(0);\" class=\"text-success\"><i class=\"mdi mdi-loading mdi-spin fs-20 align-middle me-2\"></i> Load More </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- ene card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 424
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 433
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 435
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- glightbox js -->
    <script src=\"assets/libs/glightbox/js/glightbox.min.js\"></script>

    <!-- isotope-layout -->
    <script src=\"assets/libs/isotope-layout/isotope.pkgd.min.js\"></script>

    <script src=\"assets/js/pages/gallery.init.js\"></script>

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
        return "pages-gallery.html.twig";
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
        return array (  498 => 435,  493 => 433,  481 => 424,  83 => 29,  70 => 19,  58 => 10,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Gallery'}) }}

    <!-- glightbox css -->
    <link rel=\"stylesheet\" href=\"assets/libs/glightbox/css/glightbox.min.css\">

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Pages', title: 'Gallery'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"text-center\">
                                                <ul class=\"list-inline categories-filter animation-nav\" id=\"filter\">
                                                    <li class=\"list-inline-item\"><a class=\"categories active\" data-filter=\"*\">All</a></li>
                                                    <li class=\"list-inline-item\"><a class=\"categories\" data-filter=\".project\">Project</a></li>
                                                    <li class=\"list-inline-item\"><a class=\"categories\" data-filter=\".designing\">Designing</a></li>
                                                    <li class=\"list-inline-item\"><a class=\"categories\" data-filter=\".photography\">Photography</a></li>
                                                    <li class=\"list-inline-item\"><a class=\"categories\" data-filter=\".development\">Development</a></li>
                                                </ul>
                                            </div>

                                            <div class=\"row gallery-wrapper\">
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing development\" data-category=\"designing development\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-1.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-1.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Glasses and laptop from above</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Ron Mackie</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 2.2K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.3K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-2.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-2.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Working at a coffee shop</h5>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Nancy Martino</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 3.2K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.1K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project development\" data-category=\"development\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-3.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-3.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Photo was taken in Beach</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Elwood Arter</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 2.1K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing\" data-category=\"project designing\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-4.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-4.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Drawing a sketch</h5>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Jason McQuaid</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 825
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 101
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing\" data-category=\"project designing\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-5.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-5.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Working from home little spot</h5>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Henry Baird</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 632
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 95
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-6.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-6.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Project discussion with team</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Erica Kernan</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 3.4K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.3k
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing development\" data-category=\"designing development\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-7.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-7.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Sunrise above a beach</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">James Ballard</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 735
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 150
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-8.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-8.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Glasses and laptop from above</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Ruby Griffin</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 1.5k
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 250
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing development\" data-category=\"designing development\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-9.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-9.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Dramatic clouds at the Golden Gate Bridge</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Ron Mackie</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 2.2K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.3K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 project designing\" data-category=\"project designing\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-10.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-10.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Fun day at the Hill Station</h5>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Henry Baird</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 632
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 95
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-11.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-11.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">Cycling in the countryside</h5>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Nancy Martino</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 3.2K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.1K
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class=\"element-item col-xxl-3 col-xl-4 col-sm-6 photography\" data-category=\"photography\">
                                                    <div class=\"gallery-box card\">
                                                        <div class=\"gallery-container\">
                                                            <a class=\"image-popup\" href=\"assets/images/small/img-12.jpg\" title=\"\">
                                                                <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-12.jpg\" alt=\"\" />
                                                                <div class=\"gallery-overlay\">
                                                                    <h5 class=\"overlay-caption\">A mix of friends and strangers heading off to find an adventure.</h5>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class=\"box-content\">
                                                            <div class=\"d-flex align-items-center mt-1\">
                                                                <div class=\"flex-grow-1 text-muted\">by <a href=\"\" class=\"text-body text-truncate\">Erica Kernan</a></div>
                                                                <div class=\"flex-shrink-0\">
                                                                    <div class=\"d-flex gap-3\">
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-thumb-up-fill text-muted align-bottom me-1\"></i> 3.4K
                                                                        </button>
                                                                        <button type=\"button\" class=\"btn btn-sm fs-12 btn-link text-body text-decoration-none px-0\">
                                                                            <i class=\"ri-question-answer-fill text-muted align-bottom me-1\"></i> 1.3k
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"text-center my-2\">
                                                <a href=\"javascript:void(0);\" class=\"text-success\"><i class=\"mdi mdi-loading mdi-spin fs-20 align-middle me-2\"></i> Load More </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- ene card body -->
                            </div>
                            <!-- end card -->
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

    <!-- glightbox js -->
    <script src=\"assets/libs/glightbox/js/glightbox.min.js\"></script>

    <!-- isotope-layout -->
    <script src=\"assets/libs/isotope-layout/isotope.pkgd.min.js\"></script>

    <script src=\"assets/js/pages/gallery.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "pages-gallery.html.twig", "/home/waldi/myapp2/templates/pages-gallery.html.twig");
    }
}
