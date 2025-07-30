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

/* apps-job-new.html.twig */
class __TwigTemplate_90825db57c7b600f2129f6c9b14e1502 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-job-new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-job-new.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "New Job"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Jobs", "title" => "New Job"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <form action=\"#\">
                                    <div class=\"card-header\">
                                        <h5 class=\"card-title mb-0\">Create Job</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"job-title-Input\" class=\"form-label\">Job Title <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"job-title-Input\" placeholder=\"Enter job title\" required />
                                                </div>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"job-position-Input\" class=\"form-label\">Job Position <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"job-position-Input\" placeholder=\"Enter job position\" required/>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"job-category-Input\" class=\"form-label\">Job Category <span class=\"text-danger\">*</span></label>
                                                    <select class=\"form-control\" data-choices name=\"job-category-Input\" required>
                                                        <option value=\"\">Select Category</option>
                                                        <option value=\"Accounting & Finance\">Accounting & Finance</option>
                                                        <option value=\"Purchasing Manager\">Purchasing Manager</option>
                                                        <option value=\"Education & training\">Education & training</option>
                                                        <option value=\"Marketing & Advertising\">Marketing & Advertising</option>
                                                        <option value=\"It / Software Jobs\">It / Software Jobs</option>
                                                        <option value=\"Digital Marketing\">Digital Marketing</option>
                                                        <option value=\"Administrative Officer\">Administrative Officer</option>
                                                        <option value=\"Government Jobs\">Government Jobs</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"job-type-Input\" class=\"form-label\">Job Type <span class=\"text-danger\">*</span></label>
                                                    <select class=\"form-control\" data-choices name=\"job-type-Input\" required>
                                                        <option value=\"\">Select job type</option>
                                                        <option value=\"Full Time\">Full Time</option>
                                                        <option value=\"Part Time\">Part Time</option>
                                                        <option value=\"Freelance\">Freelance</option>
                                                        <option value=\"Internship\">Internship</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"col-lg-12\">
                                                <div>
                                                    <label for=\"description-field\" class=\"form-label\">Description <span class=\"text-danger\">*</span></label>
                                                    <textarea class=\"form-control\" id=\"description-field\" rows=\"3\" placeholder=\"Enter description\" required></textarea>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"vancancy-Input\" class=\"form-label\">No. of Vacancy <span class=\"text-danger\">*</span></label>
                                                    <input type=\"number\" class=\"form-control\" id=\"vancancy-Input\" placeholder=\"No. of vacancy\" required />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"experience-Input\" class=\"form-label\">Experience <span class=\"text-danger\">*</span></label>
                                                    <select class=\"form-control\" data-choices name=\"experience-Input\">
                                                        <option value=\"\">Select Experience</option>
                                                        <option value=\"0 Year\">0 Year</option>
                                                        <option value=\"2 Years\">2 Years</option>
                                                        <option value=\"3 Years\">3 Years</option>
                                                        <option value=\"4 Years\">4 Years</option>
                                                        <option value=\"5 Years\">5 Years</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"last-apply-date-Input\" class=\"form-label\">Last Date of Apply <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"last-apply-date-Input\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" placeholder=\"Select date\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"close-date-Input\" class=\"form-label\">Close Date <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"close-date-Input\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" placeholder=\"Select date\" required />
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"start-salary-Input\" class=\"form-label\">Start Salary</label>
                                                    <input type=\"number\" class=\"form-control\" id=\"start-salary-Input\" placeholder=\"Enter start salary\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"last-salary-Input\" class=\"form-label\">Last Salary</label>
                                                    <input type=\"number\" class=\"form-control\" id=\"last-salary-Input\" placeholder=\"Enter end salary\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"country-Input\" class=\"form-label\">Country <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"country-Input\" placeholder=\"Enter country\" required />
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"city-Input\" class=\"form-label\">State <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"city-Input\" placeholder=\"Enter city\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-lg-12\">
                                                <div>
                                                    <label for=\"website-field\" class=\"form-label\">Tags</label>
                                                    <input class=\"form-control\" id=\"choices-text-unique-values\" data-choices data-choices-text-unique-true type=\"text\" value=\"Design, Remote\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-lg-12\">
                                                <div class=\"hstack justify-content-end gap-2\">
                                                    <button type=\"button\" class=\"btn btn-ghost-danger\"><i class=\"ri-close-line align-bottom\"></i> Cancel</button>
                                                    <button type=\"submit\" class=\"btn btn-primary\">Add Job</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 172
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 181
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 183
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
        return "apps-job-new.html.twig";
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
        return array (  246 => 183,  241 => 181,  229 => 172,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'New Job'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Jobs', title: 'New Job'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <form action=\"#\">
                                    <div class=\"card-header\">
                                        <h5 class=\"card-title mb-0\">Create Job</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"job-title-Input\" class=\"form-label\">Job Title <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"job-title-Input\" placeholder=\"Enter job title\" required />
                                                </div>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"job-position-Input\" class=\"form-label\">Job Position <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"job-position-Input\" placeholder=\"Enter job position\" required/>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"job-category-Input\" class=\"form-label\">Job Category <span class=\"text-danger\">*</span></label>
                                                    <select class=\"form-control\" data-choices name=\"job-category-Input\" required>
                                                        <option value=\"\">Select Category</option>
                                                        <option value=\"Accounting & Finance\">Accounting & Finance</option>
                                                        <option value=\"Purchasing Manager\">Purchasing Manager</option>
                                                        <option value=\"Education & training\">Education & training</option>
                                                        <option value=\"Marketing & Advertising\">Marketing & Advertising</option>
                                                        <option value=\"It / Software Jobs\">It / Software Jobs</option>
                                                        <option value=\"Digital Marketing\">Digital Marketing</option>
                                                        <option value=\"Administrative Officer\">Administrative Officer</option>
                                                        <option value=\"Government Jobs\">Government Jobs</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"job-type-Input\" class=\"form-label\">Job Type <span class=\"text-danger\">*</span></label>
                                                    <select class=\"form-control\" data-choices name=\"job-type-Input\" required>
                                                        <option value=\"\">Select job type</option>
                                                        <option value=\"Full Time\">Full Time</option>
                                                        <option value=\"Part Time\">Part Time</option>
                                                        <option value=\"Freelance\">Freelance</option>
                                                        <option value=\"Internship\">Internship</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"col-lg-12\">
                                                <div>
                                                    <label for=\"description-field\" class=\"form-label\">Description <span class=\"text-danger\">*</span></label>
                                                    <textarea class=\"form-control\" id=\"description-field\" rows=\"3\" placeholder=\"Enter description\" required></textarea>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"vancancy-Input\" class=\"form-label\">No. of Vacancy <span class=\"text-danger\">*</span></label>
                                                    <input type=\"number\" class=\"form-control\" id=\"vancancy-Input\" placeholder=\"No. of vacancy\" required />
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"experience-Input\" class=\"form-label\">Experience <span class=\"text-danger\">*</span></label>
                                                    <select class=\"form-control\" data-choices name=\"experience-Input\">
                                                        <option value=\"\">Select Experience</option>
                                                        <option value=\"0 Year\">0 Year</option>
                                                        <option value=\"2 Years\">2 Years</option>
                                                        <option value=\"3 Years\">3 Years</option>
                                                        <option value=\"4 Years\">4 Years</option>
                                                        <option value=\"5 Years\">5 Years</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"last-apply-date-Input\" class=\"form-label\">Last Date of Apply <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"last-apply-date-Input\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" placeholder=\"Select date\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-lg-6\">
                                                <div>
                                                    <label for=\"close-date-Input\" class=\"form-label\">Close Date <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"close-date-Input\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" placeholder=\"Select date\" required />
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"start-salary-Input\" class=\"form-label\">Start Salary</label>
                                                    <input type=\"number\" class=\"form-control\" id=\"start-salary-Input\" placeholder=\"Enter start salary\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"last-salary-Input\" class=\"form-label\">Last Salary</label>
                                                    <input type=\"number\" class=\"form-control\" id=\"last-salary-Input\" placeholder=\"Enter end salary\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"country-Input\" class=\"form-label\">Country <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"country-Input\" placeholder=\"Enter country\" required />
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-md-6\">
                                                <div>
                                                    <label for=\"city-Input\" class=\"form-label\">State <span class=\"text-danger\">*</span></label>
                                                    <input type=\"text\" class=\"form-control\" id=\"city-Input\" placeholder=\"Enter city\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-lg-12\">
                                                <div>
                                                    <label for=\"website-field\" class=\"form-label\">Tags</label>
                                                    <input class=\"form-control\" id=\"choices-text-unique-values\" data-choices data-choices-text-unique-true type=\"text\" value=\"Design, Remote\" required />
                                                </div>
                                            </div>

                                            <div class=\"col-lg-12\">
                                                <div class=\"hstack justify-content-end gap-2\">
                                                    <button type=\"button\" class=\"btn btn-ghost-danger\"><i class=\"ri-close-line align-bottom\"></i> Cancel</button>
                                                    <button type=\"submit\" class=\"btn btn-primary\">Add Job</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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

</html>", "apps-job-new.html.twig", "/home/waldi/myapp2/templates/apps-job-new.html.twig");
    }
}
