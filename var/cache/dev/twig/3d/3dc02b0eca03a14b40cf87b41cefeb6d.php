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

/* apps-job-categories.html.twig */
class __TwigTemplate_444a0f6f1ddff5ab7fb54bcf1d52b16c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-job-categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-job-categories.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

    <head>

        ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Job Categories"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Jobs", "title" => "Job Categories"]);
        echo "

                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <div class=\"row justify-content-between gy-3\">
                                            <div class=\"col-lg-3\">
                                                <div class=\"search-box\">
                                                    <input type=\"text\" class=\"form-control search\" placeholder=\"Search for job categories...\">
                                                    <i class=\"ri-search-line search-icon\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-auto\">
                                                <div class=\"d-md-flex text-nowrap gap-2\">
                                                    <button class=\"btn btn-info add-btn\"><i class=\"ri-add-fill me-1 align-bottom\"></i> Add Categories</button>
                                                    <button class=\"btn btn-danger\"><i class=\"ri-filter-2-line me-1 align-bottom\"></i> Filters</button>
                                                    <button type=\"button\" id=\"dropdownMenuLink1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" class=\"btn btn-soft-info\"><i class=\"ri-more-2-fill\"></i></button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink1\">
                                                        <li><a class=\"dropdown-item\" href=\"#\">All</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Last Week</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Last Month</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Last Year</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class=\"row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1\">
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/xulniijg.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Business Development</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">102 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/oclwxpmm.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Automotive Jobs</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">64 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/dklbhvrt.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Construction / Facilities</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/adwosptt.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Design, Art & Multimedia</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">49 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/kkcllwsu.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Healthcare</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">97 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/rahcoaeu.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Sales & Marketing</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">312 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/smauprql.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Accounting / Finance</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">62 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/itykargr.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Project Management</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/cnyeuzxc.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Costomer Services</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/sygggnra.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Content Writer</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">746 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/hfmdczge.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Government Jobs</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">642 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/xhebrhsj.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Digital Marketing</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">364 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/ucvsemjq.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Education & training</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/pvbjsfif.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">IT & Software</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/auvicynv.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Catering & Tourism</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"text-center mb-3\">
                                    <button class=\"btn btn-link text-success mt-2\" id=\"loadmore\"><i class=\"mdi mdi-loading mdi-spin fs-20 align-middle me-2\"></i> Load More </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                ";
        // line 241
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        ";
        // line 250
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

        ";
        // line 252
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

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
        return "apps-job-categories.html.twig";
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
        return array (  315 => 252,  310 => 250,  298 => 241,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

    <head>

        {{ include('partials/title-meta.html.twig', {title: 'Job Categories'}) }}

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

                        {{ include('partials/page-title.html.twig', {pagetitle: 'Jobs', title: 'Job Categories'}) }}

                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <div class=\"row justify-content-between gy-3\">
                                            <div class=\"col-lg-3\">
                                                <div class=\"search-box\">
                                                    <input type=\"text\" class=\"form-control search\" placeholder=\"Search for job categories...\">
                                                    <i class=\"ri-search-line search-icon\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-auto\">
                                                <div class=\"d-md-flex text-nowrap gap-2\">
                                                    <button class=\"btn btn-info add-btn\"><i class=\"ri-add-fill me-1 align-bottom\"></i> Add Categories</button>
                                                    <button class=\"btn btn-danger\"><i class=\"ri-filter-2-line me-1 align-bottom\"></i> Filters</button>
                                                    <button type=\"button\" id=\"dropdownMenuLink1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" class=\"btn btn-soft-info\"><i class=\"ri-more-2-fill\"></i></button>
                                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink1\">
                                                        <li><a class=\"dropdown-item\" href=\"#\">All</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Last Week</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Last Month</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"#\">Last Year</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class=\"row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1\">
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/xulniijg.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Business Development</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">102 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/oclwxpmm.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Automotive Jobs</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">64 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/dklbhvrt.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Construction / Facilities</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/adwosptt.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Design, Art & Multimedia</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">49 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/kkcllwsu.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Healthcare</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">97 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/rahcoaeu.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Sales & Marketing</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">312 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/smauprql.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Accounting / Finance</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">62 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/itykargr.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Project Management</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/cnyeuzxc.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Costomer Services</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/sygggnra.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Content Writer</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">746 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/hfmdczge.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Government Jobs</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">642 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/xhebrhsj.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Digital Marketing</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">364 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/ucvsemjq.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Education & training</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/pvbjsfif.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">IT & Software</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-body text-center py-4\">
                                        <lord-icon src=\"https://cdn.lordicon.com/auvicynv.json\" trigger=\"hover\" colors=\"primary:#405189\" target=\"div\" style=\"width:50px;height:50px\"></lord-icon>
                                        <a href=\"#!\" class=\"stretched-link\">
                                            <h5 class=\"mt-4\">Catering & Tourism</h5>
                                        </a>
                                        <p class=\"text-muted mb-0\">35 Position</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"text-center mb-3\">
                                    <button class=\"btn btn-link text-success mt-2\" id=\"loadmore\"><i class=\"mdi mdi-loading mdi-spin fs-20 align-middle me-2\"></i> Load More </button>
                                </div>
                            </div>
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

        <!-- App js -->
        <script src=\"assets/js/app.js\"></script>
    </body>

</html>", "apps-job-categories.html.twig", "/home/waldi/myapp2/templates/apps-job-categories.html.twig");
    }
}
