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

/* advance-ui-swiper.html.twig */
class __TwigTemplate_697c34726d52c7379f86543c5f7888d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-swiper.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-swiper.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Swiper Slider"]);
        echo "

    <!--Swiper slider css-->
    <link href=\"assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- glightbox css -->
    <link rel=\"stylesheet\" href=\"assets/libs/glightbox/css/glightbox.min.css\">

    ";
        // line 13
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <!-- Begin page -->
    <div id=\"layout-wrapper\">

        ";
        // line 22
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"main-content\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    ";
        // line 32
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Advance UI", "title" => "Swiper Slider"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Default Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>default-swiper</code> class to set a default swiper.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper default-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Navigation & Pagination Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>navigation-swiper</code> class to set a swiper with navigation and pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper navigation-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pagination Dynamic Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-dynamic-swiper</code> class to set a dynamic swiper with pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-dynamic-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination dynamic-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pagination Fraction Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-fraction-swiper</code> class to set a fraction swiper with pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-fraction-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-11.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-12.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pagination Custom Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-custom-swiper</code> class to set a swiper with custom pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-custom-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination pagination-custom\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pagination Progress Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-progress-swiper</code> class to set a swiper with progress pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-progress-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Scrollbar Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-scrollbar-swiper</code> class to set a swiper with scrollbar pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-scrollbar-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                        <div class=\"swiper-scrollbar\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Vertical Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>vertical-swiper</code> class to set a vertical swiper.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper vertical-swiper rounded\" style=\"height: 324px;\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-11.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-12.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Mousewheel Control Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>mousewheel-control-swiper</code> class to set a swiper with mousewheel scroll.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper mousewheel-control-swiper rounded\" style=\"height: 324px;\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Effect Fade Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>effect-fade-swiper</code> class to set a swiper with fade effect.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper effect-fade-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Effect Creative Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>effect-creative-swiper</code> class to set a swiper with creative custom effect.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper effect-creative-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-11.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Effect Flip Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>effect-flip-swiper</code> class to set a swiper with flip effect.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper effect-flip-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-12.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Effect Coverflow Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>effect-coverflow-swiper</code> class to set a swiper with coverflow effect.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper effect-coverflow-swiper rounded pb-5\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination swiper-pagination-dark\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Responsive Breakpoints Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>responsive-swiper</code> class to set a responsive swiper.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper responsive-swiper rounded gallery-light pb-4\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
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
                                            <div class=\"swiper-slide\">
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
                                            <div class=\"swiper-slide\">
                                                <div class=\"gallery-box card mb-0\">
                                                    <div class=\"gallery-container\">
                                                        <a class=\"image-popup\" href=\"assets/images/small/img-10.jpg\" title=\"\">
                                                            <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-10.jpg\" alt=\"\">
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
                                            <div class=\"swiper-slide\">
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
                                            <div class=\"swiper-slide\">
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
                                        </div>
                                        <div class=\"swiper-pagination swiper-pagination-dark\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 569
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 578
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 580
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- prismjs plugin -->
    <script src=\"assets/libs/prismjs/prism.js\"></script>

    <!-- glightbox js -->
    <script src=\"assets/libs/glightbox/js/glightbox.min.js\"></script>

    <!--Swiper slider js-->
    <script src=\"assets/libs/swiper/swiper-bundle.min.js\"></script>

    <!-- swiper.init js -->
    <script src=\"assets/js/pages/swiper.init.js\"></script>

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
        return "advance-ui-swiper.html.twig";
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
        return array (  643 => 580,  638 => 578,  626 => 569,  86 => 32,  73 => 22,  61 => 13,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Swiper Slider'}) }}

    <!--Swiper slider css-->
    <link href=\"assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\" />

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Advance UI', title: 'Swiper Slider'}) }}

                    <div class=\"row\">
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Default Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>default-swiper</code> class to set a default swiper.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper default-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Navigation & Pagination Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>navigation-swiper</code> class to set a swiper with navigation and pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper navigation-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pagination Dynamic Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-dynamic-swiper</code> class to set a dynamic swiper with pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-dynamic-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination dynamic-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pagination Fraction Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-fraction-swiper</code> class to set a fraction swiper with pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-fraction-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-11.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-12.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pagination Custom Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-custom-swiper</code> class to set a swiper with custom pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-custom-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination pagination-custom\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Pagination Progress Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-progress-swiper</code> class to set a swiper with progress pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-progress-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Scrollbar Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>pagination-scrollbar-swiper</code> class to set a swiper with scrollbar pagination.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper pagination-scrollbar-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-button-next\"></div>
                                        <div class=\"swiper-button-prev\"></div>
                                        <div class=\"swiper-scrollbar\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Vertical Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>vertical-swiper</code> class to set a vertical swiper.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper vertical-swiper rounded\" style=\"height: 324px;\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-11.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-12.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Mousewheel Control Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>mousewheel-control-swiper</code> class to set a swiper with mousewheel scroll.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper mousewheel-control-swiper rounded\" style=\"height: 324px;\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-3.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Effect Fade Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>effect-fade-swiper</code> class to set a swiper with fade effect.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper effect-fade-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Effect Creative Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>effect-creative-swiper</code> class to set a swiper with creative custom effect.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper effect-creative-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-10.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-11.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-xl-4 col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Effect Flip Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>effect-flip-swiper</code> class to set a swiper with flip effect.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper effect-flip-swiper rounded\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-12.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-1.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-2.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Effect Coverflow Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>effect-coverflow-swiper</code> class to set a swiper with coverflow effect.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper effect-coverflow-swiper rounded pb-5\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-5.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-8.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <img src=\"assets/images/small/img-9.jpg\" alt=\"\" class=\"img-fluid\" />
                                            </div>
                                        </div>
                                        <div class=\"swiper-pagination swiper-pagination-dark\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Responsive Breakpoints Swiper</h4>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>responsive-swiper</code> class to set a responsive swiper.</p>

                                    <!-- Swiper -->
                                    <div class=\"swiper responsive-swiper rounded gallery-light pb-4\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
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
                                            <div class=\"swiper-slide\">
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
                                            <div class=\"swiper-slide\">
                                                <div class=\"gallery-box card mb-0\">
                                                    <div class=\"gallery-container\">
                                                        <a class=\"image-popup\" href=\"assets/images/small/img-10.jpg\" title=\"\">
                                                            <img class=\"gallery-img img-fluid mx-auto\" src=\"assets/images/small/img-10.jpg\" alt=\"\">
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
                                            <div class=\"swiper-slide\">
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
                                            <div class=\"swiper-slide\">
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
                                        </div>
                                        <div class=\"swiper-pagination swiper-pagination-dark\"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

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

    <!-- glightbox js -->
    <script src=\"assets/libs/glightbox/js/glightbox.min.js\"></script>

    <!--Swiper slider js-->
    <script src=\"assets/libs/swiper/swiper-bundle.min.js\"></script>

    <!-- swiper.init js -->
    <script src=\"assets/js/pages/swiper.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "advance-ui-swiper.html.twig", "/home/waldi/myapp2/templates/advance-ui-swiper.html.twig");
    }
}
