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

/* auth-pass-change-basic.html.twig */
class __TwigTemplate_ec92e7b0536a26225c9f00dc658703ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-pass-change-basic.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-pass-change-basic.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Create New Password"]);
        echo "

    ";
        // line 7
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "

</head>

<body>

    <div class=\"auth-page-wrapper pt-5\">
        <!-- auth page bg -->
        <div class=\"auth-one-bg-position auth-one-bg\" id=\"auth-particles\">
            <div class=\"bg-overlay\"></div>

            <div class=\"shape\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 1440 120\">
                    <path d=\"M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z\"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class=\"auth-page-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center mt-sm-5 mb-4 text-white-50\">
                            <div>
                                <a href=\"/\" class=\"d-inline-block auth-logo\">
                                    <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"20\">
                                </a>
                            </div>
                            <p class=\"mt-3 fs-15 fw-medium\">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8 col-lg-6 col-xl-5\">
                        <div class=\"card mt-4\">

                            <div class=\"card-body p-4\">
                                <div class=\"text-center mt-2\">
                                    <h5 class=\"text-primary\">Create new password</h5>
                                    <p class=\"text-muted\">Your new password must be different from previous used password.</p>
                                </div>

                                <div class=\"p-2\">
                                    <form action=\"auth-signin-basic\">
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\" for=\"password-input\">Password</label>
                                            <div class=\"position-relative auth-pass-inputgroup\">
                                                <input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Enter password\" id=\"password-input\" aria-describedby=\"passwordInput\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required>
                                                <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                            </div>
                                            <div id=\"passwordInput\" class=\"form-text\">Must be at least 8 characters.</div>
                                        </div>

                                        <div class=\"mb-3\">
                                            <label class=\"form-label\" for=\"confirm-password-input\">Confirm Password</label>
                                            <div class=\"position-relative auth-pass-inputgroup mb-3\">
                                                <input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Confirm password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" id=\"confirm-password-input\" required>
                                                <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon\" type=\"button\" id=\"confirm-password-input\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                            </div>
                                        </div>

                                        <div id=\"password-contain\" class=\"p-3 bg-light mb-2 rounded\">
                                            <h5 class=\"fs-13\">Password must contain:</h5>
                                            <p id=\"pass-length\" class=\"invalid fs-12 mb-2\">Minimum <b>8 characters</b></p>
                                            <p id=\"pass-lower\" class=\"invalid fs-12 mb-2\">At <b>lowercase</b> letter (a-z)</p>
                                            <p id=\"pass-upper\" class=\"invalid fs-12 mb-2\">At least <b>uppercase</b> letter (A-Z)</p>
                                            <p id=\"pass-number\" class=\"invalid fs-12 mb-0\">A least <b>number</b> (0-9)</p>
                                        </div>

                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"auth-remember-check\">
                                            <label class=\"form-check-label\" for=\"auth-remember-check\">Remember me</label>
                                        </div>

                                        <div class=\"mt-4\">
                                            <button class=\"btn btn-success w-100\" type=\"submit\">Reset Password</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class=\"mt-4 text-center\">
                            <p class=\"mb-0\">Wait, I remember my password... <a href=\"auth-signin-basic\" class=\"fw-semibold text-primary text-decoration-underline\"> Click here </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center\">
                            <p class=\"mb-0 text-muted\">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class=\"mdi mdi-heart text-danger\"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    ";
        // line 125
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- particles js -->
    <script src=\"assets/libs/particles.js/particles.js\"></script>

    <!-- particles app js -->
    <script src=\"assets/js/pages/particles.app.js\"></script>

    <!-- password-addon init -->
    <script src=\"assets/js/pages/passowrd-create.init.js\"></script>
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
        return "auth-pass-change-basic.html.twig";
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
        return array (  176 => 125,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Create New Password'}) }}

    {{ include('partials/head-css.html.twig') }}

</head>

<body>

    <div class=\"auth-page-wrapper pt-5\">
        <!-- auth page bg -->
        <div class=\"auth-one-bg-position auth-one-bg\" id=\"auth-particles\">
            <div class=\"bg-overlay\"></div>

            <div class=\"shape\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 1440 120\">
                    <path d=\"M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z\"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class=\"auth-page-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center mt-sm-5 mb-4 text-white-50\">
                            <div>
                                <a href=\"/\" class=\"d-inline-block auth-logo\">
                                    <img src=\"assets/images/logo-light.png\" alt=\"\" height=\"20\">
                                </a>
                            </div>
                            <p class=\"mt-3 fs-15 fw-medium\">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8 col-lg-6 col-xl-5\">
                        <div class=\"card mt-4\">

                            <div class=\"card-body p-4\">
                                <div class=\"text-center mt-2\">
                                    <h5 class=\"text-primary\">Create new password</h5>
                                    <p class=\"text-muted\">Your new password must be different from previous used password.</p>
                                </div>

                                <div class=\"p-2\">
                                    <form action=\"auth-signin-basic\">
                                        <div class=\"mb-3\">
                                            <label class=\"form-label\" for=\"password-input\">Password</label>
                                            <div class=\"position-relative auth-pass-inputgroup\">
                                                <input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Enter password\" id=\"password-input\" aria-describedby=\"passwordInput\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" required>
                                                <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon\" type=\"button\" id=\"password-addon\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                            </div>
                                            <div id=\"passwordInput\" class=\"form-text\">Must be at least 8 characters.</div>
                                        </div>

                                        <div class=\"mb-3\">
                                            <label class=\"form-label\" for=\"confirm-password-input\">Confirm Password</label>
                                            <div class=\"position-relative auth-pass-inputgroup mb-3\">
                                                <input type=\"password\" class=\"form-control pe-5 password-input\" onpaste=\"return false\" placeholder=\"Confirm password\" pattern=\"(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}\" id=\"confirm-password-input\" required>
                                                <button class=\"btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon\" type=\"button\" id=\"confirm-password-input\"><i class=\"ri-eye-fill align-middle\"></i></button>
                                            </div>
                                        </div>

                                        <div id=\"password-contain\" class=\"p-3 bg-light mb-2 rounded\">
                                            <h5 class=\"fs-13\">Password must contain:</h5>
                                            <p id=\"pass-length\" class=\"invalid fs-12 mb-2\">Minimum <b>8 characters</b></p>
                                            <p id=\"pass-lower\" class=\"invalid fs-12 mb-2\">At <b>lowercase</b> letter (a-z)</p>
                                            <p id=\"pass-upper\" class=\"invalid fs-12 mb-2\">At least <b>uppercase</b> letter (A-Z)</p>
                                            <p id=\"pass-number\" class=\"invalid fs-12 mb-0\">A least <b>number</b> (0-9)</p>
                                        </div>

                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"auth-remember-check\">
                                            <label class=\"form-check-label\" for=\"auth-remember-check\">Remember me</label>
                                        </div>

                                        <div class=\"mt-4\">
                                            <button class=\"btn btn-success w-100\" type=\"submit\">Reset Password</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class=\"mt-4 text-center\">
                            <p class=\"mb-0\">Wait, I remember my password... <a href=\"auth-signin-basic\" class=\"fw-semibold text-primary text-decoration-underline\"> Click here </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"text-center\">
                            <p class=\"mb-0 text-muted\">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class=\"mdi mdi-heart text-danger\"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    {{ include('partials/vendor-scripts.html.twig') }}

    <!-- particles js -->
    <script src=\"assets/libs/particles.js/particles.js\"></script>

    <!-- particles app js -->
    <script src=\"assets/js/pages/particles.app.js\"></script>

    <!-- password-addon init -->
    <script src=\"assets/js/pages/passowrd-create.init.js\"></script>
</body>

</html>", "auth-pass-change-basic.html.twig", "/home/waldi/myapp2/templates/auth-pass-change-basic.html.twig");
    }
}
