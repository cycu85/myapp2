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

/* ui-grid.html.twig */
class __TwigTemplate_84cc153a0fcfc7e2ea6063a6bc633c88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-grid.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Grid"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Base UI", "title" => "Grid"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Grid Options</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-nowrap mb-0\">
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\"></th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        xs<br>
                                                        <span class=\"fw-normal\">&lt;576px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        sm<br>
                                                        <span class=\"fw-normal\">≥576px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        md<br>
                                                        <span class=\"fw-normal\">≥768px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        lg<br>
                                                        <span class=\"fw-normal\">≥992px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        xl<br>
                                                        <span class=\"fw-normal\">≥1200px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        xxl<br>
                                                        <span class=\"fw-normal\">≥1400px</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Grid behavior</th>
                                                    <td>Horizontal at all times</td>
                                                    <td colspan=\"5\">Collapsed to start, horizontal above breakpoints</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Max container width</th>
                                                    <td>None (auto)</td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Class prefix</th>
                                                    <td><code>col-</code></td>
                                                    <td><code>col-sm-</code></td>
                                                    <td><code>col-md-</code></td>
                                                    <td><code>col-lg-</code></td>
                                                    <td><code>col-xl-</code></td>
                                                    <td><code>col-xxl-</code></td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\"># of columns</th>
                                                    <td colspan=\"6\">12</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Gutter width</th>
                                                    <td colspan=\"6\">1.5rem (0.75rem on each side of a column)</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Custom gutters</th>
                                                    <td colspan=\"6\">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Nestable</th>
                                                    <td colspan=\"6\">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Offsets</th>
                                                    <td colspan=\"6\">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Column ordering</th>
                                                    <td colspan=\"6\">Yes</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Vertical alignment (align-items-start)</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"verticl-align-start\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"verticl-align-start\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>align-items-start</code> class to vertically align-items at the start.</p>
                                    <div class=\"live-preview\">

                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row align-items-start\" style=\"min-height: 6rem;\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Vertical alignment (align-items-start) --&gt;
&lt;div class=&quot;row align-items-start&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Vertical alignment (align-items-center)</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"verticl-align-center\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"verticl-align-center\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>align-items-center</code> class to vertically align-items at the center.</p>

                                    <div class=\"live-preview\">

                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row align-items-center\" style=\"min-height: 6rem;\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Vertical alignment (align-items-center) --&gt;
&lt;div class=&quot;row align-items-center&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Vertical alignment (align-items-end)</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"default\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"default\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>align-items-end</code> class to vertically align-items at the end.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row align-items-end\" style=\"min-height: 6rem;\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Vertical alignment (align-items-end) --&gt;
&lt;div class=&quot;row align-items-end&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Align Self</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"align-self\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"align-self\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use the <code>align-self-start</code>,<code>align-self-center</code>, or <code>align-self-end</code> class respectively to vertically align items with a different position.</p>

                                    <div class=\"live-preview\">
                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row g-2\" style=\"min-height: 9rem;\">
                                                <div class=\"col-sm-4 align-self-start\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        align-self-start
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4 align-self-center\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        align-self-center
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4 align-self-end\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        align-self-end
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Align Self --&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-sm-4 align-self-start&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4 align-self-center&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4 align-self-end&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Horizontal Alignment</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"horizontal-align\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"horizontal-align\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use the <code>justify-content-start</code>,<code>justify-content-center</code>, or <code>justify-content-end</code> class respectively to horizontally align items with a different position.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        justify-content-start
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row justify-content-center\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        justify-content-center
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row justify-content-end\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        justify-content-end
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Horizontal Alignment --&gt;
&lt;div class=&quot;row justify-content-start&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code>
<code>&lt;div class=&quot;row justify-content-center&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code>
<code>&lt;div class=&quot;row justify-content-end&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>



                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 428
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    ";
        // line 435
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 437
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
        return "ui-grid.html.twig";
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
        return array (  500 => 437,  495 => 435,  485 => 428,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Grid'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Base UI', title: 'Grid'}) }}

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Grid Options</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-nowrap mb-0\">
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\"></th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        xs<br>
                                                        <span class=\"fw-normal\">&lt;576px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        sm<br>
                                                        <span class=\"fw-normal\">≥576px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        md<br>
                                                        <span class=\"fw-normal\">≥768px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        lg<br>
                                                        <span class=\"fw-normal\">≥992px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        xl<br>
                                                        <span class=\"fw-normal\">≥1200px</span>
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        xxl<br>
                                                        <span class=\"fw-normal\">≥1400px</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Grid behavior</th>
                                                    <td>Horizontal at all times</td>
                                                    <td colspan=\"5\">Collapsed to start, horizontal above breakpoints</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Max container width</th>
                                                    <td>None (auto)</td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                    <td>1320px</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Class prefix</th>
                                                    <td><code>col-</code></td>
                                                    <td><code>col-sm-</code></td>
                                                    <td><code>col-md-</code></td>
                                                    <td><code>col-lg-</code></td>
                                                    <td><code>col-xl-</code></td>
                                                    <td><code>col-xxl-</code></td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\"># of columns</th>
                                                    <td colspan=\"6\">12</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Gutter width</th>
                                                    <td colspan=\"6\">1.5rem (0.75rem on each side of a column)</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Custom gutters</th>
                                                    <td colspan=\"6\">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Nestable</th>
                                                    <td colspan=\"6\">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Offsets</th>
                                                    <td colspan=\"6\">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class=\"text-nowrap\" scope=\"row\">Column ordering</th>
                                                    <td colspan=\"6\">Yes</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Vertical alignment (align-items-start)</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"verticl-align-start\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"verticl-align-start\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>align-items-start</code> class to vertically align-items at the start.</p>
                                    <div class=\"live-preview\">

                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row align-items-start\" style=\"min-height: 6rem;\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Vertical alignment (align-items-start) --&gt;
&lt;div class=&quot;row align-items-start&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Vertical alignment (align-items-center)</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"verticl-align-center\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"verticl-align-center\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>align-items-center</code> class to vertically align-items at the center.</p>

                                    <div class=\"live-preview\">

                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row align-items-center\" style=\"min-height: 6rem;\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Vertical alignment (align-items-center) --&gt;
&lt;div class=&quot;row align-items-center&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Vertical alignment (align-items-end)</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"default\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"default\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use <code>align-items-end</code> class to vertically align-items at the end.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row align-items-end\" style=\"min-height: 6rem;\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        col-sm-4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Vertical alignment (align-items-end) --&gt;
&lt;div class=&quot;row align-items-end&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Align Self</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"align-self\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"align-self\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use the <code>align-self-start</code>,<code>align-self-center</code>, or <code>align-self-end</code> class respectively to vertically align items with a different position.</p>

                                    <div class=\"live-preview\">
                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row g-2\" style=\"min-height: 9rem;\">
                                                <div class=\"col-sm-4 align-self-start\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        align-self-start
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4 align-self-center\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        align-self-center
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-4 align-self-end\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        align-self-end
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Align Self --&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-sm-4 align-self-start&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4 align-self-center&quot;&gt;
        ...
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-4 align-self-end&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Horizontal Alignment</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"horizontal-align\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"horizontal-align\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Use the <code>justify-content-start</code>,<code>justify-content-center</code>, or <code>justify-content-end</code> class respectively to horizontally align items with a different position.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"bg-light p-3 text-center\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2\">
                                                        justify-content-start
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row justify-content-center\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        justify-content-center
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row justify-content-end\">
                                                <div class=\"col-sm-4\">
                                                    <div class=\"bg-primary-subtle text-primary rounded p-2 mt-2 mt-sm-0\">
                                                        justify-content-end
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre class=\"language-markup\">
<code>&lt;!-- Horizontal Alignment --&gt;
&lt;div class=&quot;row justify-content-start&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code>
<code>&lt;div class=&quot;row justify-content-center&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code>
<code>&lt;div class=&quot;row justify-content-end&quot;&gt;
    &lt;div class=&quot;col-sm-4&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
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

    <!-- prismjs plugin -->
    <script src=\"assets/libs/prismjs/prism.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>


</body>

</html>", "ui-grid.html.twig", "/home/waldi/myapp2/templates/ui-grid.html.twig");
    }
}
