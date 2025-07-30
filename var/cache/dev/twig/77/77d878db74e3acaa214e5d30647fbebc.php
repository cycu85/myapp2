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

/* apps-job-companies-lists.html.twig */
class __TwigTemplate_9fa2c3a622db9c987c599d22bb83481d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-job-companies-lists.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-job-companies-lists.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

    <head>

        ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Companies List"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Companies", "title" => "Companies List"]);
        echo "

                        <div class=\"row\">
                            <div class=\"col-xxl-9\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <form>
                                            <div class=\"row g-3\">
                                                <div class=\"col-xxl-5 col-sm-6\">
                                                    <div class=\"search-box\">
                                                        <input type=\"text\" class=\"form-control search bg-light border-light\" id=\"searchCompany\" placeholder=\"Search for company, industry type...\">
                                                        <i class=\"ri-search-line search-icon\"></i>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class=\"col-xxl-3 col-sm-6\">
                                                    <input type=\"text\" class=\"form-control bg-light border-light\" id=\"datepicker\" data-date-format=\"d M, Y\" placeholder=\"Select date\">
                                                </div>
                                                <!--end col-->
                                                <div class=\"col-xxl-2 col-sm-4\">
                                                    <div class=\"input-light\">
                                                        <select class=\"form-control\" data-choices data-choices-search-false name=\"choices-single-default\" id=\"idType\">
                                                            <option value=\"all\" selected>All</option>
                                                            <option value=\"Full Time\">Full Time</option>
                                                            <option value=\"Part Time\">Part Time</option>
                                                            <option value=\"Internship\">Internship</option>
                                                            <option value=\"Freelance\">Freelance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class=\"col-xxl-2 col-sm-4\">
                                                    <button type=\"button\" class=\"btn btn-success w-100\" onclick=\"filterData();\">
                                                        <i class=\"ri-equalizer-fill me-1 align-bottom\"></i> Filters
                                                    </button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                </div>

                                <div class=\"row job-list-row\" id=\"companies-list\"></div>

                                <div class=\"row g-0 justify-content-end mb-4\" id=\"pagination-element\">
                                    <!-- end col -->
                                    <div class=\"col-sm-6\">
                                        <div class=\"pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0\">
                                            <div class=\"page-item\">
                                                <a href=\"javascript:void(0);\" class=\"page-link\" id=\"page-prev\">Previous</a>
                                            </div>
                                            <span id=\"page-num\" class=\"pagination\"></span>
                                            <div class=\"page-item\">
                                                <a href=\"javascript:void(0);\" class=\"page-link\" id=\"page-next\">Next</a>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!--end row-->
                            </div>
                            <div class=\"col-xxl-3\">
                                <div class=\"card\" id=\"company-overview\">
                                    <div class=\"card-body\">
                                        <div class=\"avatar-lg mx-auto mb-3\">
                                            <div class=\"avatar-title bg-light rounded\">
                                                <img src=\"assets/images/companies/img-6.png\" alt=\"\" class=\"avatar-sm company-logo\">
                                            </div>
                                        </div>

                                        <div class=\"text-center\">
                                            <a href=\"#!\">
                                                <h5 class=\"overview-companyname\">Syntyce Solutions</h5>
                                            </a>
                                            <p class=\"text-muted overview-industryType\">IT Department</p>

                                            <ul class=\"list-inline mb-0\">
                                                <li class=\"list-inline-item avatar-xs\">
                                                    <a href=\"javascript:void(0);\" class=\"avatar-title bg-success-subtle text-success fs-15 rounded\">
                                                        <i class=\"ri-global-line\"></i>
                                                    </a>
                                                </li>
                                                <li class=\"list-inline-item avatar-xs\">
                                                    <a href=\"javascript:void(0);\" class=\"avatar-title bg-danger-subtle text-danger fs-15 rounded\">
                                                        <i class=\"ri-mail-line\"></i>
                                                    </a>
                                                </li>
                                                <li class=\"list-inline-item avatar-xs\">
                                                    <a href=\"javascript:void(0);\" class=\"avatar-title bg-warning-subtle text-warning fs-15 rounded\">
                                                        <i class=\"ri-question-answer-line\"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"card-body\">
                                        <h6 class=\"text-muted text-uppercase fw-semibold mb-3\">Information</h6>
                                        <p class=\"text-muted mb-4 overview-companydesc\">The IT department of a company ensures that the network of computers within the organization are well-connected and functioning properly. All the other departments within the company rely on them to ensure that their respective functions can go on seamlessly.</p>
                                        
                                        <div class=\"table-responsive table-card\">
                                            <table class=\"table table-borderless mb-4\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Industry Type</td>
                                                        <td class=\"overview-industryType\">Chemical Industries</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Location</td>
                                                        <td class=\"overview-company_location\">Damascus, Syria</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Employee</td>
                                                        <td class=\"overview-employee\">10-50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Vacancy</td>
                                                        <td class=\"overview-vacancy\">23</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Rating</td>
                                                        <td><span class=\"overview-rating\">4.8</span> <i class=\"ri-star-fill text-warning align-bottom\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Website</td>
                                                        <td>
                                                            <a href=\"javascript:void(0);\" class=\"link-primary text-decoration-underline overview-website\">www.syntycesolution.com</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Contact Email</td>
                                                        <td class=\"overview-email\">info@syntycesolution.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Since</td>
                                                        <td class=\"overview-since\">1995</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class=\"hstack gap-3\">
                                            <button type=\"button\" class=\"btn btn-soft-success custom-toggle w-100\" data-bs-toggle=\"button\">
                                                <span class=\"icon-on\"><i class=\"ri-add-line align-bottom me-1\"></i> Follow</span>
                                                <span class=\"icon-off\"><i class=\"ri-user-unfollow-line align-bottom me-1\"></i> Unfollow</span>
                                            </button>
                                            <a href=\"#!\" class=\"btn btn-primary w-100\">More View <i class=\"ri-arrow-right-line align-bottom\"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card overflow-hidden shadow-none\">
                                    <div class=\"card-body bg-danger-subtle\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"flex-shrink-0\">
                                                <div class=\"avatar-sm\">
                                                    <div class=\"avatar-title bg-danger-subtle text-danger rounded-circle fs-17\">
                                                        <i class=\"ri-gift-line\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2\">
                                                <h6 class=\"fs-16\">Free trial</h6>
                                                <p class=\"text-muted mb-0\">28 days left</p>
                                            </div>
                                            <div>
                                                <a href=\"pages-pricing\" class=\"btn btn-danger\">Upgrade</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card-body bg-danger-subtle border-top border-danger border-opacity-25 border-top-dashed\">
                                        <a href=\"#!\" class=\"d-flex justify-content-between align-items-center text-body\">
                                            <span>See benefits</span>
                                            <i class=\"ri-arrow-right-s-line fs-18\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                ";
        // line 212
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        ";
        // line 221
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

        ";
        // line 223
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

        <!-- job-companies-lists js -->
        <script src=\"assets/js/pages/job-companies-lists.init.js\"></script>        

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
        return "apps-job-companies-lists.html.twig";
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
        return array (  286 => 223,  281 => 221,  269 => 212,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

    <head>

        {{ include('partials/title-meta.html.twig', {title: 'Companies List'}) }}

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

                        {{ include('partials/page-title.html.twig', {pagetitle: 'Companies', title: 'Companies List'}) }}

                        <div class=\"row\">
                            <div class=\"col-xxl-9\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <form>
                                            <div class=\"row g-3\">
                                                <div class=\"col-xxl-5 col-sm-6\">
                                                    <div class=\"search-box\">
                                                        <input type=\"text\" class=\"form-control search bg-light border-light\" id=\"searchCompany\" placeholder=\"Search for company, industry type...\">
                                                        <i class=\"ri-search-line search-icon\"></i>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class=\"col-xxl-3 col-sm-6\">
                                                    <input type=\"text\" class=\"form-control bg-light border-light\" id=\"datepicker\" data-date-format=\"d M, Y\" placeholder=\"Select date\">
                                                </div>
                                                <!--end col-->
                                                <div class=\"col-xxl-2 col-sm-4\">
                                                    <div class=\"input-light\">
                                                        <select class=\"form-control\" data-choices data-choices-search-false name=\"choices-single-default\" id=\"idType\">
                                                            <option value=\"all\" selected>All</option>
                                                            <option value=\"Full Time\">Full Time</option>
                                                            <option value=\"Part Time\">Part Time</option>
                                                            <option value=\"Internship\">Internship</option>
                                                            <option value=\"Freelance\">Freelance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class=\"col-xxl-2 col-sm-4\">
                                                    <button type=\"button\" class=\"btn btn-success w-100\" onclick=\"filterData();\">
                                                        <i class=\"ri-equalizer-fill me-1 align-bottom\"></i> Filters
                                                    </button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                </div>

                                <div class=\"row job-list-row\" id=\"companies-list\"></div>

                                <div class=\"row g-0 justify-content-end mb-4\" id=\"pagination-element\">
                                    <!-- end col -->
                                    <div class=\"col-sm-6\">
                                        <div class=\"pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0\">
                                            <div class=\"page-item\">
                                                <a href=\"javascript:void(0);\" class=\"page-link\" id=\"page-prev\">Previous</a>
                                            </div>
                                            <span id=\"page-num\" class=\"pagination\"></span>
                                            <div class=\"page-item\">
                                                <a href=\"javascript:void(0);\" class=\"page-link\" id=\"page-next\">Next</a>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!--end row-->
                            </div>
                            <div class=\"col-xxl-3\">
                                <div class=\"card\" id=\"company-overview\">
                                    <div class=\"card-body\">
                                        <div class=\"avatar-lg mx-auto mb-3\">
                                            <div class=\"avatar-title bg-light rounded\">
                                                <img src=\"assets/images/companies/img-6.png\" alt=\"\" class=\"avatar-sm company-logo\">
                                            </div>
                                        </div>

                                        <div class=\"text-center\">
                                            <a href=\"#!\">
                                                <h5 class=\"overview-companyname\">Syntyce Solutions</h5>
                                            </a>
                                            <p class=\"text-muted overview-industryType\">IT Department</p>

                                            <ul class=\"list-inline mb-0\">
                                                <li class=\"list-inline-item avatar-xs\">
                                                    <a href=\"javascript:void(0);\" class=\"avatar-title bg-success-subtle text-success fs-15 rounded\">
                                                        <i class=\"ri-global-line\"></i>
                                                    </a>
                                                </li>
                                                <li class=\"list-inline-item avatar-xs\">
                                                    <a href=\"javascript:void(0);\" class=\"avatar-title bg-danger-subtle text-danger fs-15 rounded\">
                                                        <i class=\"ri-mail-line\"></i>
                                                    </a>
                                                </li>
                                                <li class=\"list-inline-item avatar-xs\">
                                                    <a href=\"javascript:void(0);\" class=\"avatar-title bg-warning-subtle text-warning fs-15 rounded\">
                                                        <i class=\"ri-question-answer-line\"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"card-body\">
                                        <h6 class=\"text-muted text-uppercase fw-semibold mb-3\">Information</h6>
                                        <p class=\"text-muted mb-4 overview-companydesc\">The IT department of a company ensures that the network of computers within the organization are well-connected and functioning properly. All the other departments within the company rely on them to ensure that their respective functions can go on seamlessly.</p>
                                        
                                        <div class=\"table-responsive table-card\">
                                            <table class=\"table table-borderless mb-4\">
                                                <tbody>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Industry Type</td>
                                                        <td class=\"overview-industryType\">Chemical Industries</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Location</td>
                                                        <td class=\"overview-company_location\">Damascus, Syria</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Employee</td>
                                                        <td class=\"overview-employee\">10-50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Vacancy</td>
                                                        <td class=\"overview-vacancy\">23</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Rating</td>
                                                        <td><span class=\"overview-rating\">4.8</span> <i class=\"ri-star-fill text-warning align-bottom\"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Website</td>
                                                        <td>
                                                            <a href=\"javascript:void(0);\" class=\"link-primary text-decoration-underline overview-website\">www.syntycesolution.com</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Contact Email</td>
                                                        <td class=\"overview-email\">info@syntycesolution.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"fw-medium\" scope=\"row\">Since</td>
                                                        <td class=\"overview-since\">1995</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class=\"hstack gap-3\">
                                            <button type=\"button\" class=\"btn btn-soft-success custom-toggle w-100\" data-bs-toggle=\"button\">
                                                <span class=\"icon-on\"><i class=\"ri-add-line align-bottom me-1\"></i> Follow</span>
                                                <span class=\"icon-off\"><i class=\"ri-user-unfollow-line align-bottom me-1\"></i> Unfollow</span>
                                            </button>
                                            <a href=\"#!\" class=\"btn btn-primary w-100\">More View <i class=\"ri-arrow-right-line align-bottom\"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"card overflow-hidden shadow-none\">
                                    <div class=\"card-body bg-danger-subtle\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"flex-shrink-0\">
                                                <div class=\"avatar-sm\">
                                                    <div class=\"avatar-title bg-danger-subtle text-danger rounded-circle fs-17\">
                                                        <i class=\"ri-gift-line\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"flex-grow-1 ms-2\">
                                                <h6 class=\"fs-16\">Free trial</h6>
                                                <p class=\"text-muted mb-0\">28 days left</p>
                                            </div>
                                            <div>
                                                <a href=\"pages-pricing\" class=\"btn btn-danger\">Upgrade</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card-body bg-danger-subtle border-top border-danger border-opacity-25 border-top-dashed\">
                                        <a href=\"#!\" class=\"d-flex justify-content-between align-items-center text-body\">
                                            <span>See benefits</span>
                                            <i class=\"ri-arrow-right-s-line fs-18\"></i>
                                        </a>
                                    </div>
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

        <!-- job-companies-lists js -->
        <script src=\"assets/js/pages/job-companies-lists.init.js\"></script>        

        <!-- App js -->
        <script src=\"assets/js/app.js\"></script>
    </body>

</html>", "apps-job-companies-lists.html.twig", "/home/waldi/myapp2/templates/apps-job-companies-lists.html.twig");
    }
}
