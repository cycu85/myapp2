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

/* pages-blog-grid.html.twig */
class __TwigTemplate_76aef6be69dd01619a3b39ac65dc9a39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-blog-grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-blog-grid.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Grid View"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Pages", "title" => "Grid View"]);
        echo "

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
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-1.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">The Mindful Journal</a></h5>
                                    <p class=\"text-muted mb-2\">Exploring the beauty of slow living and intentional growth. Discover tips on mindfulness, wellness, and living a balanced life.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-2.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">Next Gen Creators</a></h5>
                                    <p class=\"text-muted mb-2\">Empowering the creators A platform for sharing creative projects, tech solutions, and future-thinking ideas to shape the next generation.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-3.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">The Thought Canvas</a></h5>
                                    <p class=\"text-muted mb-2\">Where ideas come to life through words and design. Exploring the intersection of creativity, technology, and thoughtful living to fuel your next big idea.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">The Insight Collective</a></h5>
                                    <p class=\"text-muted mb-2\">Curated perspectives on creativity, innovation, and lifestyle. A blend of expert insights, stories, and tips to inspire personal growth and creative thinking.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-5.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">Life by Design</a></h5>
                                    <p class=\"text-muted mb-2\">Crafting a life full of intention Explore ideas on mindful living, personal development, and how to design a life that truly inspires you.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-6.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">Crafted Perspectives</a></h5>
                                    <p class=\"text-muted mb-2\">Where thoughtful design meets meaningful storytelling. Sharing unique viewpoints on creativity, innovation, and the art of crafting a fulfilling life.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">Beyond the Blueprint</a></h5>
                                    <p class=\"text-muted mb-2\">Designing a life of creativity A space for creators, dreamers, and innovators to explore ideas and strategies for building a meaningful life.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">The Imagination Engine</a></h5>
                                    <p class=\"text-muted mb-2\">A hub for artists, tech enthusiasts, and creatives looking to stay ahead of the curve and bring ideas to life ideas, trends, and inspiration.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class=\"row g-0 text-center text-sm-start align-items-center mb-4\">
                        <div class=\"col-sm-6\">
                            <div>
                                <p class=\"mb-sm-0 text-muted\">Showing <span class=\"fw-semibold\">1</span> to <span class=\"fw-semibold\">8</span> of <span class=\"fw-semibold text-decoration-underline\">33</span> entries</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class=\"col-sm-6\">
                            <ul class=\"pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0\">
                                <li class=\"page-item disabled\">
                                    <a href=\"#\" class=\"page-link\">Previous</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a href=\"#\" class=\"page-link\">1</a>
                                </li>
                                <li class=\"page-item \">
                                    <a href=\"#\" class=\"page-link\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">3</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">4</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">5</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">Next</a>
                                </li>
                            </ul>
                        </div><!-- end col -->
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 191
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 200
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 202
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
        return "pages-blog-grid.html.twig";
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
        return array (  265 => 202,  260 => 200,  248 => 191,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Grid View'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Pages', title: 'Grid View'}) }}

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
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-1.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">The Mindful Journal</a></h5>
                                    <p class=\"text-muted mb-2\">Exploring the beauty of slow living and intentional growth. Discover tips on mindfulness, wellness, and living a balanced life.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-2.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">Next Gen Creators</a></h5>
                                    <p class=\"text-muted mb-2\">Empowering the creators A platform for sharing creative projects, tech solutions, and future-thinking ideas to shape the next generation.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-3.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">The Thought Canvas</a></h5>
                                    <p class=\"text-muted mb-2\">Where ideas come to life through words and design. Exploring the intersection of creativity, technology, and thoughtful living to fuel your next big idea.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">The Insight Collective</a></h5>
                                    <p class=\"text-muted mb-2\">Curated perspectives on creativity, innovation, and lifestyle. A blend of expert insights, stories, and tips to inspire personal growth and creative thinking.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-5.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">Life by Design</a></h5>
                                    <p class=\"text-muted mb-2\">Crafting a life full of intention Explore ideas on mindful living, personal development, and how to design a life that truly inspires you.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-6.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">Crafted Perspectives</a></h5>
                                    <p class=\"text-muted mb-2\">Where thoughtful design meets meaningful storytelling. Sharing unique viewpoints on creativity, innovation, and the art of crafting a fulfilling life.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">Beyond the Blueprint</a></h5>
                                    <p class=\"text-muted mb-2\">Designing a life of creativity A space for creators, dreamers, and innovators to explore ideas and strategies for building a meaningful life.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-xxl-3 col-lg-6\">
                            <div class=\"card overflow-hidden blog-grid-card\">
                                <div class=\"position-relative overflow-hidden\">
                                    <img src=\"assets/images/blog/img-4.jpg\" alt=\"\" class=\"blog-img object-fit-cover\">
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\"><a href=\"pages-blog-overview.html\" class=\"text-reset\">The Imagination Engine</a></h5>
                                    <p class=\"text-muted mb-2\">A hub for artists, tech enthusiasts, and creatives looking to stay ahead of the curve and bring ideas to life ideas, trends, and inspiration.</p>
                                    <a href=\"pages-blog-overview.html\" class=\"link link-primary text-decoration-underline link-offset-1\">Read Post <i class=\"ri-arrow-right-up-line\"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class=\"row g-0 text-center text-sm-start align-items-center mb-4\">
                        <div class=\"col-sm-6\">
                            <div>
                                <p class=\"mb-sm-0 text-muted\">Showing <span class=\"fw-semibold\">1</span> to <span class=\"fw-semibold\">8</span> of <span class=\"fw-semibold text-decoration-underline\">33</span> entries</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class=\"col-sm-6\">
                            <ul class=\"pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0\">
                                <li class=\"page-item disabled\">
                                    <a href=\"#\" class=\"page-link\">Previous</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a href=\"#\" class=\"page-link\">1</a>
                                </li>
                                <li class=\"page-item \">
                                    <a href=\"#\" class=\"page-link\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">3</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">4</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">5</a>
                                </li>
                                <li class=\"page-item\">
                                    <a href=\"#\" class=\"page-link\">Next</a>
                                </li>
                            </ul>
                        </div><!-- end col -->
                    </div>
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

</html>", "pages-blog-grid.html.twig", "/home/waldi/myapp2/templates/pages-blog-grid.html.twig");
    }
}
