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

/* ui-placeholders.html.twig */
class __TwigTemplate_dc81e9318889ad21fbf38a305a7a7c24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-placeholders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-placeholders.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Placeholders"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Base UI", "title" => "Placeholders"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Default Placeholder</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"baseexample-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"baseexample-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">

                                    <p class=\"text-muted\">In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”.</p>

                                    <div class=\"live-preview\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-xl-7\">
                                                <div class=\"row justify-content-between\">
                                                    <div class=\"col-lg-5 col-sm-6\">
                                                        <div class=\"card\">
                                                            <img src=\"assets/images/small/img-1.jpg\" class=\"card-img-top\" alt=\"card img\">

                                                            <div class=\"card-body\">
                                                                <h5 class=\"card-title\">Card title</h5>
                                                                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-5 col-sm-6\">
                                                        <div class=\"card\" aria-hidden=\"true\">
                                                            <img src=\"assets/images/small/img-2.jpg\" class=\"card-img-top\" alt=\"card dummy img\">
                                                            <div class=\"card-body\">
                                                                <h5 class=\"card-title placeholder-glow\">
                                                                    <span class=\"placeholder col-6\"></span>
                                                                </h5>
                                                                <p class=\"card-text placeholder-glow\">
                                                                    <span class=\"placeholder col-7\"></span>
                                                                    <span class=\"placeholder col-4\"></span>
                                                                    <span class=\"placeholder col-4\"></span>
                                                                    <span class=\"placeholder col-6\"></span>
                                                                </p>
                                                                <a href=\"#\" tabindex=\"-1\" class=\"btn btn-primary disabled placeholder col-6\"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\" style=\"height: 275px\">
<code>&lt;!-- Base Examples --&gt;
&lt;div class=&quot;card&quot;&gt;
    &lt;img src=&quot;assets/images/small/img-1.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;card img&quot;&gt;
    
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;card&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;img src=&quot;assets/images/small/img-2.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;card dummy img&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title placeholder-glow&quot;&gt;
        &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
      &lt;/h5&gt;
      &lt;p class=&quot;card-text placeholder-glow&quot;&gt;
        &lt;span class=&quot;placeholder col-7&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
      &lt;/p&gt;
      &lt;a href=&quot;#&quot; tabindex=&quot;-1&quot; class=&quot;btn btn-primary disabled placeholder col-6&quot;&gt;&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xxl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Width</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"width-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"width-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>w-25,w-50,w-75</code> or <code>w-100</code> class to placeholder class to set different widths to the placeholder.</p>
                                    <div class=\"live-preview\">
                                        <span class=\"placeholder w-50\"></span>
                                        <span class=\"placeholder w-75\"></span>
                                        <span class=\"placeholder w-25\"></span>
                                        <span class=\"placeholder w-100\"></span>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Width Sizing--&gt;
&lt;div class=&quot;live-preview&quot;&gt;
    &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder w-75&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder&quot; style=&quot;width: 25%;&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xxl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Sizing</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"sizing-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"sizing-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>placeholder-lg</code>, <code>placeholder-sm</code>, or <code>placeholder-xs</code> class to placeholder class to set different size placeholder.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"row gap-0\">
                                            <div class=\"col-12\">
                                                <span class=\"placeholder placeholder-lg w-100\"></span>
                                            </div>
                                            <div class=\"col-12\">
                                                <span class=\"placeholder w-100\"></span>
                                            </div>
                                            <div class=\"col-12\">
                                                <span class=\"placeholder placeholder-sm w-100\"></span>
                                            </div>
                                            <div class=\"col-12\">
                                                <span class=\"placeholder placeholder-xs w-100\"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Sizing --&gt;
&lt;span class=&quot;placeholder col-12 placeholder-lg&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 placeholder-sm&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 placeholder-xs&quot;&gt;&lt;/span&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div><!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Color</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"color-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"color-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>bg-</code> class with the below-mentioned color variation to set a custom color.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"row g-2\">
                                            <div class=\"col-12\">
                                                <span class=\"placeholder w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-primary w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-secondary w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-success w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-danger w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-warning w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-info w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-light w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-dark w-100\"></span>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\" style=\"height: 275px\">
<code>&lt;!-- Color --&gt;
&lt;span class=&quot;placeholder col-12 mb-3&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-primary&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-secondary&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-success&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-danger&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-warning&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-info&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-light&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-dark&quot;&gt;&lt;/span&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!--end row-->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 284
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 293
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 295
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- prismjs plugin -->
    <script src=\"assets/libs/prismjs/prism.js\"></script>

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
        return "ui-placeholders.html.twig";
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
        return array (  358 => 295,  353 => 293,  341 => 284,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Placeholders'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Base UI', title: 'Placeholders'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Default Placeholder</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"baseexample-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"baseexample-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">

                                    <p class=\"text-muted\">In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”.</p>

                                    <div class=\"live-preview\">
                                        <div class=\"row justify-content-center\">
                                            <div class=\"col-xl-7\">
                                                <div class=\"row justify-content-between\">
                                                    <div class=\"col-lg-5 col-sm-6\">
                                                        <div class=\"card\">
                                                            <img src=\"assets/images/small/img-1.jpg\" class=\"card-img-top\" alt=\"card img\">

                                                            <div class=\"card-body\">
                                                                <h5 class=\"card-title\">Card title</h5>
                                                                <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-lg-5 col-sm-6\">
                                                        <div class=\"card\" aria-hidden=\"true\">
                                                            <img src=\"assets/images/small/img-2.jpg\" class=\"card-img-top\" alt=\"card dummy img\">
                                                            <div class=\"card-body\">
                                                                <h5 class=\"card-title placeholder-glow\">
                                                                    <span class=\"placeholder col-6\"></span>
                                                                </h5>
                                                                <p class=\"card-text placeholder-glow\">
                                                                    <span class=\"placeholder col-7\"></span>
                                                                    <span class=\"placeholder col-4\"></span>
                                                                    <span class=\"placeholder col-4\"></span>
                                                                    <span class=\"placeholder col-6\"></span>
                                                                </p>
                                                                <a href=\"#\" tabindex=\"-1\" class=\"btn btn-primary disabled placeholder col-6\"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\" style=\"height: 275px\">
<code>&lt;!-- Base Examples --&gt;
&lt;div class=&quot;card&quot;&gt;
    &lt;img src=&quot;assets/images/small/img-1.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;card img&quot;&gt;
    
    &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
        &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;card&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;img src=&quot;assets/images/small/img-2.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;card dummy img&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title placeholder-glow&quot;&gt;
        &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
      &lt;/h5&gt;
      &lt;p class=&quot;card-text placeholder-glow&quot;&gt;
        &lt;span class=&quot;placeholder col-7&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
      &lt;/p&gt;
      &lt;a href=&quot;#&quot; tabindex=&quot;-1&quot; class=&quot;btn btn-primary disabled placeholder col-6&quot;&gt;&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-xxl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Width</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"width-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"width-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>w-25,w-50,w-75</code> or <code>w-100</code> class to placeholder class to set different widths to the placeholder.</p>
                                    <div class=\"live-preview\">
                                        <span class=\"placeholder w-50\"></span>
                                        <span class=\"placeholder w-75\"></span>
                                        <span class=\"placeholder w-25\"></span>
                                        <span class=\"placeholder w-100\"></span>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Width Sizing--&gt;
&lt;div class=&quot;live-preview&quot;&gt;
    &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder w-75&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder&quot; style=&quot;width: 25%;&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=\"col-xxl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Sizing</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"sizing-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"sizing-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>placeholder-lg</code>, <code>placeholder-sm</code>, or <code>placeholder-xs</code> class to placeholder class to set different size placeholder.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"row gap-0\">
                                            <div class=\"col-12\">
                                                <span class=\"placeholder placeholder-lg w-100\"></span>
                                            </div>
                                            <div class=\"col-12\">
                                                <span class=\"placeholder w-100\"></span>
                                            </div>
                                            <div class=\"col-12\">
                                                <span class=\"placeholder placeholder-sm w-100\"></span>
                                            </div>
                                            <div class=\"col-12\">
                                                <span class=\"placeholder placeholder-xs w-100\"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Sizing --&gt;
&lt;span class=&quot;placeholder col-12 placeholder-lg&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 placeholder-sm&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 placeholder-xs&quot;&gt;&lt;/span&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div><!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Color</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"color-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"color-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>bg-</code> class with the below-mentioned color variation to set a custom color.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"row g-2\">
                                            <div class=\"col-12\">
                                                <span class=\"placeholder w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-primary w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-secondary w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-success w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-danger w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-warning w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-info w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-light w-100\"></span>
                                            </div>
                                            <!--end col-->
                                            <div class=\"col-12\">
                                                <span class=\"placeholder bg-dark w-100\"></span>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\" style=\"height: 275px\">
<code>&lt;!-- Color --&gt;
&lt;span class=&quot;placeholder col-12 mb-3&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-primary&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-secondary&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-success&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-danger&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-warning&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-info&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-light&quot;&gt;&lt;/span&gt;</code>

<code>&lt;span class=&quot;placeholder col-12 mb-3 bg-dark&quot;&gt;&lt;/span&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
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

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "ui-placeholders.html.twig", "/home/waldi/myapp2/templates/ui-placeholders.html.twig");
    }
}
