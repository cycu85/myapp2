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

/* pages-blog-list.html.twig */
class __TwigTemplate_9eada74b245b1cef5250e41ef9a60320 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-blog-list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-blog-list.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "List View"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Pages", "title" => "List View"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xxl-3\">
                            <div class=\"card\">
                                <div class=\"card-body p-4\">
                                    <div class=\"search-box\">
                                        <p class=\"text-muted\">Search</p>
                                        <div class=\"position-relative\">
                                            <input type=\"text\" class=\"form-control rounded bg-light border-light\" placeholder=\"Search...\">
                                            <i class=\"mdi mdi-magnify search-icon\"></i>
                                        </div>
                                    </div>

                                    <div class=\"mt-4 pt-4 border-top border-dashed border-bottom-0 border-start-0 border-end-0\">
                                        <p class=\"text-muted\">Categories</p>

                                        <ul class=\"list-unstyled fw-medium\">
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Art & Design</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Inspiration & Innovation <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">04</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Business</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Project</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Lifestyle</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Design Resources & Tools</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Travel<span class=\"badge badge-soft-success rounded-pill ms-1 float-end font-size-12\">12</span></a></li>
                                        </ul>
                                    </div>

                                    <div class=\"mt-4 pt-4 border-top border-dashed border-bottom-0 border-start-0 border-end-0\">
                                        <p class=\"text-muted\">Archive</p>

                                        <ul class=\"list-unstyled fw-medium\">
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2024 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">03</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2023 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">06</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2022 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">05</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2021 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">05</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2020 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">05</span></a></li>
                                        </ul>
                                    </div>

                                    <div class=\"mt-4 pt-4 border-top border-dashed border-bottom-0 border-start-0 border-end-0\">
                                        <p class=\"text-muted mb-2\">Popular Posts</p>

                                        <div class=\"list-group list-group-flush\">

                                            <a href=\"javascript: void(0);\" class=\"list-group-item text-muted py-3 px-2\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"avatar-md h-auto d-block rounded\">
                                                    </div>
                                                    <div class=\"flex-grow-1 overflow-hidden\">
                                                        <h5 class=\"fs-15 text-truncate\">Beautiful Day with Friends</h5>
                                                        <p class=\"mb-0 text-truncate\">10 Apr, 2024</p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href=\"javascript: void(0);\" class=\"list-group-item text-muted py-3 px-2\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"avatar-md h-auto d-block rounded\">
                                                    </div>
                                                    <div class=\"flex-grow-1 overflow-hidden\">
                                                        <h5 class=\"fs-15 text-truncate\">Drawing a sketch</h5>
                                                        <p class=\"mb-0 text-truncate\">24 Mar, 2024</p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href=\"javascript: void(0);\" class=\"list-group-item text-muted py-3 px-2\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"avatar-md h-auto d-block rounded\">
                                                    </div>
                                                    <div class=\"flex-grow-1 overflow-hidden\">
                                                        <h5 class=\"fs-15 text-truncate\">Project discussion with team</h5>
                                                        <p class=\"mb-0 text-truncate\">11 Mar, 2024</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"mt-4 pt-4 border-top border-dashed border-bottom-0 border-start-0 border-end-0\">
                                        <p class=\"text-muted\">Tags</p>

                                        <div class=\"d-flex flex-wrap gap-2 widget-tag\">
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Design</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Development</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Business</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Project</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Travel</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Lifestyle</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Photography</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xxl-9\">
                            <div class=\"row g-4 mb-3\">
                                <div class=\"col-sm-auto\">
                                    <div>
                                        <a href=\"apps-projects-create.html\" class=\"btn btn-success\"><i class=\"ri-add-line align-bottom me-1\"></i> Add New</a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"d-flex justify-content-sm-end gap-2\">
                                        <div class=\"search-box ms-2\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                            <i class=\"ri-search-line search-icon\"></i>
                                        </div>

                                        <select class=\"form-control w-md\" data-choices data-choices-search-false>
                                            <option value=\"All\">All</option>
                                            <option value=\"Today\">Today</option>
                                            <option value=\"Yesterday\" selected>Yesterday</option>
                                            <option value=\"Last 7 Days\">Last 7 Days</option>
                                            <option value=\"Last 30 Days\">Last 30 Days</option>
                                            <option value=\"This Month\">This Month</option>
                                            <option value=\"Last Year\">Last Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class=\"row gx-4\">
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-1.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Modern aesthetics</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">The Evolution of Minimalism in Design</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 05 Apr, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 451</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">Minimalism is more than just a trend; it's a movement that continues to influence design worldwide. Learn how simplicity in design evolved and why it remains impactful today.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#MinimalDesign</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#Simplicity</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#DesignTrends</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-2.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Creating seamless journeys</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">Mastering User Experience Through Storytelling</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 11 Feb, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 713</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">Storytelling transforms user experiences by providing intuitive and engaging journeys. Discover how to integrate compelling narratives into UX design for maximum impact.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#UXDesign</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#Storytelling</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-3.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Infusing intention</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">Designing for Purpose: A Mindful Approach</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 09 July, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 479</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">In a world driven by trends, designing with purpose is key to creating meaningful work. Explore techniques to craft with intention and make every design count.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#MindfulDesign</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#IntentionalLiving</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#PurposefulWork</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Boosting productivity</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">Creative Workflow Hacks for Designers</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 15 Sep, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 174</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">Juggling creativity with deadlines can be a challenge. This post covers essential workflow tips and tools to keep your design process efficient and inspired.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#CreativeProcess</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#ProductivityTips</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#DesignerLife</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-6.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Practical strategies</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">How to Overcome Creative Block</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 24 Oct, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 1926</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">Every designer faces creative block at some point. Learn actionable strategies to break through these moments and find inspiration to fuel your next project.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#CreativeBlock</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#DesignMotivation</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#CreativityUnleashed</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Crafting a visual story</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">Building Brand Identity through Design</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 20 Sept, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 1337</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">A strong brand identity is built on thoughtful design. Learn how to create cohesive visual stories that reflect your brand's values and connect with your audience.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#BrandDesign</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#IdentityCreation</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class=\"row g-0 text-center text-sm-start align-items-center mb-4\">
                                <div class=\"col-sm-6\">
                                    <div>
                                        <p class=\"mb-sm-0 text-muted\">Showing <span class=\"fw-semibold\">1</span> to <span class=\"fw-semibold\">6</span> of <span class=\"fw-semibold text-decoration-underline\">21</span> entries</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class=\"col-sm-6\">
                                    <ul class=\"pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0\">
                                        <li class=\"page-item disabled\">
                                            <a href=\"#\" class=\"page-link\">Previous</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"#\" class=\"page-link\">1</a>
                                        </li>
                                        <li class=\"page-item active\">
                                            <a href=\"#\" class=\"page-link\">2</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"#\" class=\"page-link\">3</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"#\" class=\"page-link\">4</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"#\" class=\"page-link\">Next</a>
                                        </li>
                                    </ul>
                                </div><!-- end col -->
                            </div><!--end row-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 351
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 360
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 362
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- isotope-layout -->
    <script src=\"assets/libs/isotope-layout/isotope.pkgd.min.js\"></script>

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
        return "pages-blog-list.html.twig";
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
        return array (  425 => 362,  420 => 360,  408 => 351,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'List View'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Pages', title: 'List View'}) }}

                    <div class=\"row\">
                        <div class=\"col-xxl-3\">
                            <div class=\"card\">
                                <div class=\"card-body p-4\">
                                    <div class=\"search-box\">
                                        <p class=\"text-muted\">Search</p>
                                        <div class=\"position-relative\">
                                            <input type=\"text\" class=\"form-control rounded bg-light border-light\" placeholder=\"Search...\">
                                            <i class=\"mdi mdi-magnify search-icon\"></i>
                                        </div>
                                    </div>

                                    <div class=\"mt-4 pt-4 border-top border-dashed border-bottom-0 border-start-0 border-end-0\">
                                        <p class=\"text-muted\">Categories</p>

                                        <ul class=\"list-unstyled fw-medium\">
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Art & Design</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Inspiration & Innovation <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">04</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Business</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Project</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Lifestyle</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Design Resources & Tools</a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> Travel<span class=\"badge badge-soft-success rounded-pill ms-1 float-end font-size-12\">12</span></a></li>
                                        </ul>
                                    </div>

                                    <div class=\"mt-4 pt-4 border-top border-dashed border-bottom-0 border-start-0 border-end-0\">
                                        <p class=\"text-muted\">Archive</p>

                                        <ul class=\"list-unstyled fw-medium\">
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2024 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">03</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2023 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">06</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2022 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">05</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2021 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">05</span></a></li>
                                            <li><a href=\"javascript: void(0);\" class=\"text-muted py-2 d-block\"><i class=\"mdi mdi-chevron-right me-1\"></i> 2020 <span class=\"badge badge-soft-success rounded-pill float-end ms-1 font-size-12\">05</span></a></li>
                                        </ul>
                                    </div>

                                    <div class=\"mt-4 pt-4 border-top border-dashed border-bottom-0 border-start-0 border-end-0\">
                                        <p class=\"text-muted mb-2\">Popular Posts</p>

                                        <div class=\"list-group list-group-flush\">

                                            <a href=\"javascript: void(0);\" class=\"list-group-item text-muted py-3 px-2\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <img src=\"assets/images/small/img-7.jpg\" alt=\"\" class=\"avatar-md h-auto d-block rounded\">
                                                    </div>
                                                    <div class=\"flex-grow-1 overflow-hidden\">
                                                        <h5 class=\"fs-15 text-truncate\">Beautiful Day with Friends</h5>
                                                        <p class=\"mb-0 text-truncate\">10 Apr, 2024</p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href=\"javascript: void(0);\" class=\"list-group-item text-muted py-3 px-2\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <img src=\"assets/images/small/img-4.jpg\" alt=\"\" class=\"avatar-md h-auto d-block rounded\">
                                                    </div>
                                                    <div class=\"flex-grow-1 overflow-hidden\">
                                                        <h5 class=\"fs-15 text-truncate\">Drawing a sketch</h5>
                                                        <p class=\"mb-0 text-truncate\">24 Mar, 2024</p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href=\"javascript: void(0);\" class=\"list-group-item text-muted py-3 px-2\">
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <img src=\"assets/images/small/img-6.jpg\" alt=\"\" class=\"avatar-md h-auto d-block rounded\">
                                                    </div>
                                                    <div class=\"flex-grow-1 overflow-hidden\">
                                                        <h5 class=\"fs-15 text-truncate\">Project discussion with team</h5>
                                                        <p class=\"mb-0 text-truncate\">11 Mar, 2024</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class=\"mt-4 pt-4 border-top border-dashed border-bottom-0 border-start-0 border-end-0\">
                                        <p class=\"text-muted\">Tags</p>

                                        <div class=\"d-flex flex-wrap gap-2 widget-tag\">
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Design</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Development</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Business</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Project</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Travel</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Lifestyle</a></div>
                                            <div><a href=\"javascript: void(0);\" class=\"badge bg-light text-muted font-size-12\">Photography</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xxl-9\">
                            <div class=\"row g-4 mb-3\">
                                <div class=\"col-sm-auto\">
                                    <div>
                                        <a href=\"apps-projects-create.html\" class=\"btn btn-success\"><i class=\"ri-add-line align-bottom me-1\"></i> Add New</a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"d-flex justify-content-sm-end gap-2\">
                                        <div class=\"search-box ms-2\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                            <i class=\"ri-search-line search-icon\"></i>
                                        </div>

                                        <select class=\"form-control w-md\" data-choices data-choices-search-false>
                                            <option value=\"All\">All</option>
                                            <option value=\"Today\">Today</option>
                                            <option value=\"Yesterday\" selected>Yesterday</option>
                                            <option value=\"Last 7 Days\">Last 7 Days</option>
                                            <option value=\"Last 30 Days\">Last 30 Days</option>
                                            <option value=\"This Month\">This Month</option>
                                            <option value=\"Last Year\">Last Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class=\"row gx-4\">
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-1.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Modern aesthetics</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">The Evolution of Minimalism in Design</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 05 Apr, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 451</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">Minimalism is more than just a trend; it's a movement that continues to influence design worldwide. Learn how simplicity in design evolved and why it remains impactful today.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#MinimalDesign</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#Simplicity</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#DesignTrends</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-2.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Creating seamless journeys</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">Mastering User Experience Through Storytelling</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 11 Feb, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 713</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">Storytelling transforms user experiences by providing intuitive and engaging journeys. Discover how to integrate compelling narratives into UX design for maximum impact.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#UXDesign</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#Storytelling</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-3.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Infusing intention</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">Designing for Purpose: A Mindful Approach</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 09 July, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 479</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">In a world driven by trends, designing with purpose is key to creating meaningful work. Explore techniques to craft with intention and make every design count.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#MindfulDesign</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#IntentionalLiving</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#PurposefulWork</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Boosting productivity</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">Creative Workflow Hacks for Designers</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 15 Sep, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 174</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">Juggling creativity with deadlines can be a challenge. This post covers essential workflow tips and tools to keep your design process efficient and inspired.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#CreativeProcess</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#ProductivityTips</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#DesignerLife</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-6.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Practical strategies</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">How to Overcome Creative Block</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 24 Oct, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 1926</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">Every designer faces creative block at some point. Learn actionable strategies to break through these moments and find inspiration to fuel your next project.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#CreativeBlock</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#DesignMotivation</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#CreativityUnleashed</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"col-xxl-12\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row g-4\">
                                                <div class=\"col-xxl-3 col-lg-5\">
                                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"img-fluid rounded w-100 object-fit-cover\">
                                                </div><!--end col-->
                                                <div class=\"col-xxl-9 col-lg-7\">
                                                    <p class=\"mb-2 text-primary text-uppercase\">Crafting a visual story</p>
                                                    <a href=\"pages-blog-overview.html\">
                                                        <h5 class=\"fs-15 fw-semibold\">Building Brand Identity through Design</h5>
                                                    </a>
                                                    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
                                                        <span class=\"text-muted\"><i class=\"ri-calendar-event-line me-1\"></i> 20 Sept, 2024</span> | <span class=\"text-muted\"><i class=\"ri-eye-line me-1\"></i> 1337</span> | <a href=\"pages-profile.html\"><i class=\"ri-user-3-line me-1\"></i> Admin</a>
                                                    </div>
                                                    <p class=\"text-muted mb-2\">A strong brand identity is built on thoughtful design. Learn how to create cohesive visual stories that reflect your brand's values and connect with your audience.</p>
                                                    <a href=\"pages-blog-overview.html\" class=\"text-decoration-underline\">Read more <i class=\"ri-arrow-right-line\"></i></a>
                                                    <div class=\"d-flex align-items-center gap-2 mt-3 flex-wrap\">
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#BrandDesign</a>
                                                        <a href=\"#!\" class=\"badge text-success bg-success-subtle\">#IdentityCreation</a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class=\"row g-0 text-center text-sm-start align-items-center mb-4\">
                                <div class=\"col-sm-6\">
                                    <div>
                                        <p class=\"mb-sm-0 text-muted\">Showing <span class=\"fw-semibold\">1</span> to <span class=\"fw-semibold\">6</span> of <span class=\"fw-semibold text-decoration-underline\">21</span> entries</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class=\"col-sm-6\">
                                    <ul class=\"pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0\">
                                        <li class=\"page-item disabled\">
                                            <a href=\"#\" class=\"page-link\">Previous</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"#\" class=\"page-link\">1</a>
                                        </li>
                                        <li class=\"page-item active\">
                                            <a href=\"#\" class=\"page-link\">2</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"#\" class=\"page-link\">3</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"#\" class=\"page-link\">4</a>
                                        </li>
                                        <li class=\"page-item\">
                                            <a href=\"#\" class=\"page-link\">Next</a>
                                        </li>
                                    </ul>
                                </div><!-- end col -->
                            </div><!--end row-->
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

    <!-- isotope-layout -->
    <script src=\"assets/libs/isotope-layout/isotope.pkgd.min.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "pages-blog-list.html.twig", "/home/waldi/myapp2/templates/pages-blog-list.html.twig");
    }
}
