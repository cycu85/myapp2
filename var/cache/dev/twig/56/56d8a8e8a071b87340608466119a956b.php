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

/* ui-embed-video.html.twig */
class __TwigTemplate_85057f2938819df92174c14a426affb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-embed-video.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-embed-video.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Embed Video"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Base UI", "title" => "Embed Video"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Ratio Video 16:9</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideo1-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideo1-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Wrap any embed in<code>&lt;iframe&gt;</code> tag, in a parent element, use <code>ratio-16x9</code> class to set aspect ratio 16:9. </p>
                                    <div class=\"live-preview\">
                                        <!-- 16:9 aspect ratio -->
                                        <div class=\"ratio ratio-16x9\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/1y_kfWUCFDQ\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Ratio Video 16:9 --&gt;
&lt;div class=&quot;ratio ratio-16x9&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/1y_kfWUCFDQ&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Ratio Video 4:3</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideo3-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideo3-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>ratio-4x3</code> class to set aspect ratio 4:3.</p>
                                    <div class=\"live-preview\">
                                        <!-- 4:3 aspect ratio -->
                                        <div class=\"ratio ratio-4x3\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/PHcgN1GTjdU\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Ratio Video 4:3 --&gt;
&lt;div class=&quot;ratio ratio-4x3&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/1y_kfWUCFDQ&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Custom Ratios</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideocustom-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideocustom-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>--vz-aspect-ratio: 50%</code> to style element to set aspect ratio 2:1.</p>
                                    <div class=\"live-preview\">
                                        <!-- 16:9 aspect ratio -->
                                        <div class=\"ratio\" style=\"--vz-aspect-ratio: 50%;\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/2RZQN_ko0iU\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Custom Ratio Video --&gt;
&lt;div class=&quot;ratio&quot; style=&quot;--vz-aspect-ratio: 50%;&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/2RZQN_ko0iU&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Ratio Video 21:9</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideo2-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideo2-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>ratio-21x9</code> class to set aspect ratio 21:9.</p>
                                    <div class=\"live-preview\">
                                        <!-- 21:9 aspect ratio -->
                                        <div class=\"ratio ratio-21x9\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/Z-fV2lGKnnU\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Ratio Video 21:9 --&gt;
&lt;div class=&quot;ratio ratio-21x9&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/Z-fV2lGKnnU&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Ratio Video 1:1</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideo4-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideo4-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>ratio-1x1</code> class to set aspect ratio 1:1.</p>
                                    <div class=\"live-preview\">
                                        <!-- 1:1 aspect ratio -->
                                        <div class=\"ratio ratio-1x1\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/GfSZtaoc5bw\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Ratio Video 1:1 --&gt;
&lt;div class=&quot;ratio ratio-1x1&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/GfSZtaoc5bw&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div><!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 182
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 191
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 193
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
        return "ui-embed-video.html.twig";
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
        return array (  256 => 193,  251 => 191,  239 => 182,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Embed Video'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Base UI', title: 'Embed Video'}) }}

                    <div class=\"row\">
                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Ratio Video 16:9</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideo1-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideo1-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Wrap any embed in<code>&lt;iframe&gt;</code> tag, in a parent element, use <code>ratio-16x9</code> class to set aspect ratio 16:9. </p>
                                    <div class=\"live-preview\">
                                        <!-- 16:9 aspect ratio -->
                                        <div class=\"ratio ratio-16x9\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/1y_kfWUCFDQ\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Ratio Video 16:9 --&gt;
&lt;div class=&quot;ratio ratio-16x9&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/1y_kfWUCFDQ&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Ratio Video 4:3</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideo3-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideo3-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>ratio-4x3</code> class to set aspect ratio 4:3.</p>
                                    <div class=\"live-preview\">
                                        <!-- 4:3 aspect ratio -->
                                        <div class=\"ratio ratio-4x3\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/PHcgN1GTjdU\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Ratio Video 4:3 --&gt;
&lt;div class=&quot;ratio ratio-4x3&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/1y_kfWUCFDQ&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Custom Ratios</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideocustom-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideocustom-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>--vz-aspect-ratio: 50%</code> to style element to set aspect ratio 2:1.</p>
                                    <div class=\"live-preview\">
                                        <!-- 16:9 aspect ratio -->
                                        <div class=\"ratio\" style=\"--vz-aspect-ratio: 50%;\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/2RZQN_ko0iU\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Custom Ratio Video --&gt;
&lt;div class=&quot;ratio&quot; style=&quot;--vz-aspect-ratio: 50%;&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/2RZQN_ko0iU&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                        </div>
                        <!-- end col -->

                        <div class=\"col-xl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Ratio Video 21:9</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideo2-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideo2-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>ratio-21x9</code> class to set aspect ratio 21:9.</p>
                                    <div class=\"live-preview\">
                                        <!-- 21:9 aspect ratio -->
                                        <div class=\"ratio ratio-21x9\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/Z-fV2lGKnnU\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Ratio Video 21:9 --&gt;
&lt;div class=&quot;ratio ratio-21x9&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/Z-fV2lGKnnU&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Ratio Video 1:1</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"ratiovideo4-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"ratiovideo4-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>ratio-1x1</code> class to set aspect ratio 1:1.</p>
                                    <div class=\"live-preview\">
                                        <!-- 1:1 aspect ratio -->
                                        <div class=\"ratio ratio-1x1\">
                                            <iframe class=\"rounded\" src=\"https://www.youtube.com/embed/GfSZtaoc5bw\" title=\"YouTube video\" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Ratio Video 1:1 --&gt;
&lt;div class=&quot;ratio ratio-1x1&quot;&gt;
    &lt;iframe src=&quot;https://www.youtube.com/embed/GfSZtaoc5bw&quot; title=&quot;YouTube video&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div><!-- end row -->

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

</html>", "ui-embed-video.html.twig", "/home/waldi/myapp2/templates/ui-embed-video.html.twig");
    }
}
