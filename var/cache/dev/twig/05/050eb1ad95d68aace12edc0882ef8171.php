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

/* pages-coming-soon.html.twig */
class __TwigTemplate_740936c4c07142c073fdcae31754abd5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-coming-soon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-coming-soon.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Coming Soon"]);
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
                        <div class=\"text-center mt-sm-5 pt-4 mb-4\">
                            <div class=\"mb-sm-5 pb-sm-4 pb-5\">
                                <img src=\"assets/images/comingsoon.png\" alt=\"\" height=\"120\" class=\"move-animation\">
                            </div>
                            <div class=\"mb-5\">
                                <h1 class=\"display-2 coming-soon-text\">Coming Soon</h1>
                            </div>
                            <div>
                                <div class=\"row justify-content-center mt-5\">
                                    <div class=\"col-lg-8\">
                                        <div id=\"countdown\" class=\"countdownlist\"></div>
                                    </div>
                                </div>

                                <div class=\"mt-5\">
                                    <h4>Get notified when we launch</h4>
                                    <p class=\"text-muted\">Don't worry we will not spam you 😊</p>
                                </div>

                                <div class=\"input-group countdown-input-group mx-auto my-4\">
                                    <input type=\"email\" class=\"form-control border-light shadow\" placeholder=\"Enter your email address\" aria-label=\"search result\" aria-describedby=\"button-email\">
                                    <button class=\"btn btn-success\" type=\"button\" id=\"button-email\">Send<i class=\"ri-send-plane-2-fill align-bottom ms-2\"></i></button>
                                </div>
                            </div>
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
        // line 82
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- particles js -->
    <script src=\"assets/libs/particles.js/particles.js\"></script>
    <!-- particles app js -->
    <script src=\"assets/js/pages/particles.app.js\"></script>

    <!-- Countdown js -->
    <script src=\"assets/js/pages/coming-soon.init.js\"></script>

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
        return "pages-coming-soon.html.twig";
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
        return array (  133 => 82,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Coming Soon'}) }}

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
                        <div class=\"text-center mt-sm-5 pt-4 mb-4\">
                            <div class=\"mb-sm-5 pb-sm-4 pb-5\">
                                <img src=\"assets/images/comingsoon.png\" alt=\"\" height=\"120\" class=\"move-animation\">
                            </div>
                            <div class=\"mb-5\">
                                <h1 class=\"display-2 coming-soon-text\">Coming Soon</h1>
                            </div>
                            <div>
                                <div class=\"row justify-content-center mt-5\">
                                    <div class=\"col-lg-8\">
                                        <div id=\"countdown\" class=\"countdownlist\"></div>
                                    </div>
                                </div>

                                <div class=\"mt-5\">
                                    <h4>Get notified when we launch</h4>
                                    <p class=\"text-muted\">Don't worry we will not spam you 😊</p>
                                </div>

                                <div class=\"input-group countdown-input-group mx-auto my-4\">
                                    <input type=\"email\" class=\"form-control border-light shadow\" placeholder=\"Enter your email address\" aria-label=\"search result\" aria-describedby=\"button-email\">
                                    <button class=\"btn btn-success\" type=\"button\" id=\"button-email\">Send<i class=\"ri-send-plane-2-fill align-bottom ms-2\"></i></button>
                                </div>
                            </div>
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

    <!-- Countdown js -->
    <script src=\"assets/js/pages/coming-soon.init.js\"></script>

</body>

</html>", "pages-coming-soon.html.twig", "/home/waldi/myapp2/templates/pages-coming-soon.html.twig");
    }
}
