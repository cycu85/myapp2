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

/* advance-ui-animation.html.twig */
class __TwigTemplate_c58eaba2efc7ef5a0569140f9a3f6595 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-animation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-animation.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Animation"]);
        echo "

    <!-- aos css -->
    <link rel=\"stylesheet\" href=\"assets/libs/aos/aos.css\" />

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
        <div class=\"main-content overflow-hidden\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    ";
        // line 29
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Advance UI", "title" => "Animation"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"text-center\">
                                        <h4 class=\"card-title mb-0\">Fade Animation</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                        <div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Up</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-up\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-lg-8\">
                                                                <div data-aos=\"fade-up\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Down</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-down\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-lg-8\">
                                                                <div data-aos=\"fade-down\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Up Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-up-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-up-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Up Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-up-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-up-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Down Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-down-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-down-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Down Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-down-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-down-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"text-center\">
                                        <h4 class=\"card-title mb-0\">Flip Animation</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                        <div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Flip Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Flip Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Flip Up</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-up\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-up\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Flip Down</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-down\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-down\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"text-center\">
                                        <h4 class=\"card-title mb-0\">Zoom Animation</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                        <div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In Up</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in-up\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in-up\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In Down</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in-down\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in-down\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out Up</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-out-up\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out-up\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out Down</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-out-down\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out-down\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-out-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-out-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div><!-- end row -->
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"text-center\">
                                        <h4 class=\"card-title mb-0\">Animation Examples</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                        <div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Duration</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-up\" data-aos-duration=\"3000\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-up\" data-aos-duration=\"3000\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Easing=\"linear\"</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"1500\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"1500\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Offset</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-right\" data-aos-offset=\"300\" data-aos-easing=\"ease-in-sine\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-right\" data-aos-offset=\"300\" data-aos-easing=\"ease-in-sine\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Offset</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-left\" data-aos-offset=\"500\" data-aos-duration=\"500\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-left\" data-aos-offset=\"500\" data-aos-duration=\"500\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Easing=\"ease-in-back\"</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-zoom-in\" data-aos-easing=\"ease-in-back\" data-aos-delay=\"300\" data-aos-offset=\"0\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-zoom-in\" data-aos-easing=\"ease-in-back\" data-aos-delay=\"300\" data-aos-offset=\"0\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Easing=\"ease-out-cubic\"</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 556
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    ";
        // line 563
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 565
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- aos js -->
    <script src=\"assets/libs/aos/aos.js\"></script>
    <!-- prismjs plugin -->
    <script src=\"assets/libs/prismjs/prism.js\"></script>
    <!-- animation init -->
    <script src=\"assets/js/pages/animation-aos.init.js\"></script>

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
        return "advance-ui-animation.html.twig";
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
        return array (  628 => 565,  623 => 563,  613 => 556,  83 => 29,  70 => 19,  58 => 10,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Animation'}) }}

    <!-- aos css -->
    <link rel=\"stylesheet\" href=\"assets/libs/aos/aos.css\" />

    {{ include('partials/head-css.html.twig') }}

</head>

<body>

    <!-- Begin page -->
    <div id=\"layout-wrapper\">

        {{ include('partials/menu.html.twig') }}

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"main-content overflow-hidden\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Advance UI', title: 'Animation'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"text-center\">
                                        <h4 class=\"card-title mb-0\">Fade Animation</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                        <div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Up</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-up\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-lg-8\">
                                                                <div data-aos=\"fade-up\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Down</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-down\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-lg-8\">
                                                                <div data-aos=\"fade-down\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Up Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-up-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-up-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Up Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-up-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-up-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Down Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-down-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-down-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Fade Down Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-down-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-down-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"text-center\">
                                        <h4 class=\"card-title mb-0\">Flip Animation</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                        <div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Flip Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Flip Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Flip Up</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-up\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-up\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Flip Down</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-down\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-down\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"text-center\">
                                        <h4 class=\"card-title mb-0\">Zoom Animation</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                        <div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In Up</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in-up\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in-up\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In Down</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in-down\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in-down\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom In Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-in-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-in\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out Up</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-out-up\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out-up\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out Down</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-out-down\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out-down\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out Right</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-out-right\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out-right\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Zoom Out Left</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"zoom-out-left\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"zoom-out-left\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div><!-- end row -->
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"text-center\">
                                        <h4 class=\"card-title mb-0\">Animation Examples</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <div class=\"live-preview\">
                                        <div>
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Duration</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-up\" data-aos-duration=\"3000\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-up\" data-aos-duration=\"3000\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Easing=\"linear\"</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"1500\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"1500\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Offset</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-right\" data-aos-offset=\"300\" data-aos-easing=\"ease-in-sine\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-right\" data-aos-offset=\"300\" data-aos-easing=\"ease-in-sine\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Offset</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-left\" data-aos-offset=\"500\" data-aos-duration=\"500\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-left\" data-aos-offset=\"500\" data-aos-duration=\"500\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Easing=\"ease-in-back\"</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"fade-zoom-in\" data-aos-easing=\"ease-in-back\" data-aos-delay=\"300\" data-aos-offset=\"0\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"fade-zoom-in\" data-aos-easing=\"ease-in-back\" data-aos-delay=\"300\" data-aos-offset=\"0\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class=\"col-lg-6\">
                                                    <div class=\"p-4 pb-0 border mt-4\">
                                                        <h4 class=\"mb-4 text-center\">Easing=\"ease-out-cubic\"</h4>
                                                        <pre><code class=\"language-markup\">&lt;div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">&lt;/div></code></pre>

                                                        <div class=\"row justify-content-center\">
                                                            <div class=\"col-sm-10 col-md-8\">
                                                                <div data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">
                                                                    <img src=\"assets/images/mac-img.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
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

    <!-- aos js -->
    <script src=\"assets/libs/aos/aos.js\"></script>
    <!-- prismjs plugin -->
    <script src=\"assets/libs/prismjs/prism.js\"></script>
    <!-- animation init -->
    <script src=\"assets/js/pages/animation-aos.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "advance-ui-animation.html.twig", "/home/waldi/myapp2/templates/advance-ui-animation.html.twig");
    }
}
