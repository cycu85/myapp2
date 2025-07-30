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

/* advance-ui-ratings.html.twig */
class __TwigTemplate_abe392cfdb950b4fbea0b235467126e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-ratings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-ratings.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Ratings"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Advance UI", "title" => "Ratings"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Rater Js</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Rater-js is a star rating widget for the browser. here are the various examples of rating shown below with variation.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table align-middle mb-0\">
                                                <thead>
                                                    <tr>
                                                        <th scope=\"col\">Title</th>
                                                        <th scope=\"col\">Example</th>
                                                        <th scope=\"col\">Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope=\"row\">Basic Rater</th>
                                                        <td>
                                                            <div id=\"basic-rater\" dir=\"ltr\"></div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div id=\"basic-rater\" dir=\"ltr\">&lt;/div></code></pre>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">Rater with Step</th>
                                                        <td>
                                                            <div id=\"rater-step\" dir=\"ltr\"></div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div id=\"rater-step\" dir=\"ltr\">&lt;/div></code></pre>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">Custom Messages</th>
                                                        <td>
                                                            <div id=\"rater-message\" dir=\"ltr\"></div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div id=\"rater-message\" dir=\"ltr\">&lt;/div></code></pre>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">Example with unlimited number of stars. readOnly option is set to true.</th>
                                                        <td>
                                                            <div id=\"rater-unlimitedstar\" dir=\"ltr\"></div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div id=\"rater-unlimitedstar\" dir=\"ltr\">&lt;/div></code></pre>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">On Hover Event</th>
                                                        <td>
                                                            <div dir=\"ltr\">
                                                                <div id=\"rater-onhover\" class=\"align-middle\"></div>
                                                                <span class=\"ratingnum badge bg-info align-middle ms-2\"></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div dir=&quot;ltr&quot;&gt;
    &lt;div id=&quot;rater-onhover&quot; class=&quot;align-middle&quot;&gt;&lt;/div&gt;
    &lt;span class=&quot;ratingnum badge bg-info align-middle ms-2&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope=\"row\">Clear/Reset Rater</th>
                                                        <td>
                                                            <div dir=\"ltr\">
                                                                <div id=\"raterreset\" class=\"align-middle\"></div>
                                                                <span class=\"clear-rating\"></span>
                                                                <button id=\"raterreset-button\" class=\"btn btn-light btn-sm ms-2\">Reset</button>
                                                            </div>
                                                        </td>
                                                        <td><pre><code class=\"language-markup\">&lt;div dir=&quot;ltr&quot;&gt;
    &lt;div id=&quot;raterreset&quot; class=&quot;align-middle&quot;&gt;&lt;/div&gt;
    &lt;span class=&quot;clear-rating&quot;&gt;&lt;/span&gt;
    &lt;button id=&quot;raterreset-button&quot; class=&quot;btn btn-light btn-sm ms-2&quot;&gt;Reset&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- end table -->
                                        </div>
                                        <!-- end table responsive -->
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre><code class=\"language-markup\">&lt;div data-simplebar style=&quot;max-height: 220px;&quot;&gt;
    ...
&lt;/div&gt;</code></pre>
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
        // line 140
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 149
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 151
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "
    <!-- prismjs plugin -->
    <script src=\"assets/libs/prismjs/prism.js\"></script>

    <!-- rater-js plugin -->
    <script src=\"assets/libs/rater-js/index.js\"></script>
    <!-- rating init -->
    <script src=\"assets/js/pages/rating.init.js\"></script>

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
        return "advance-ui-ratings.html.twig";
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
        return array (  214 => 151,  209 => 149,  197 => 140,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Ratings'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Advance UI', title: 'Ratings'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Rater Js</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Rater-js is a star rating widget for the browser. here are the various examples of rating shown below with variation.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table align-middle mb-0\">
                                                <thead>
                                                    <tr>
                                                        <th scope=\"col\">Title</th>
                                                        <th scope=\"col\">Example</th>
                                                        <th scope=\"col\">Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope=\"row\">Basic Rater</th>
                                                        <td>
                                                            <div id=\"basic-rater\" dir=\"ltr\"></div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div id=\"basic-rater\" dir=\"ltr\">&lt;/div></code></pre>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">Rater with Step</th>
                                                        <td>
                                                            <div id=\"rater-step\" dir=\"ltr\"></div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div id=\"rater-step\" dir=\"ltr\">&lt;/div></code></pre>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">Custom Messages</th>
                                                        <td>
                                                            <div id=\"rater-message\" dir=\"ltr\"></div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div id=\"rater-message\" dir=\"ltr\">&lt;/div></code></pre>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">Example with unlimited number of stars. readOnly option is set to true.</th>
                                                        <td>
                                                            <div id=\"rater-unlimitedstar\" dir=\"ltr\"></div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div id=\"rater-unlimitedstar\" dir=\"ltr\">&lt;/div></code></pre>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">On Hover Event</th>
                                                        <td>
                                                            <div dir=\"ltr\">
                                                                <div id=\"rater-onhover\" class=\"align-middle\"></div>
                                                                <span class=\"ratingnum badge bg-info align-middle ms-2\"></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <pre><code class=\"language-markup\">&lt;div dir=&quot;ltr&quot;&gt;
    &lt;div id=&quot;rater-onhover&quot; class=&quot;align-middle&quot;&gt;&lt;/div&gt;
    &lt;span class=&quot;ratingnum badge bg-info align-middle ms-2&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope=\"row\">Clear/Reset Rater</th>
                                                        <td>
                                                            <div dir=\"ltr\">
                                                                <div id=\"raterreset\" class=\"align-middle\"></div>
                                                                <span class=\"clear-rating\"></span>
                                                                <button id=\"raterreset-button\" class=\"btn btn-light btn-sm ms-2\">Reset</button>
                                                            </div>
                                                        </td>
                                                        <td><pre><code class=\"language-markup\">&lt;div dir=&quot;ltr&quot;&gt;
    &lt;div id=&quot;raterreset&quot; class=&quot;align-middle&quot;&gt;&lt;/div&gt;
    &lt;span class=&quot;clear-rating&quot;&gt;&lt;/span&gt;
    &lt;button id=&quot;raterreset-button&quot; class=&quot;btn btn-light btn-sm ms-2&quot;&gt;Reset&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- end table -->
                                        </div>
                                        <!-- end table responsive -->
                                    </div>

                                    <div class=\"d-none code-view\">
                                        <pre><code class=\"language-markup\">&lt;div data-simplebar style=&quot;max-height: 220px;&quot;&gt;
    ...
&lt;/div&gt;</code></pre>
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
    <!-- prismjs plugin -->
    <script src=\"assets/libs/prismjs/prism.js\"></script>

    <!-- rater-js plugin -->
    <script src=\"assets/libs/rater-js/index.js\"></script>
    <!-- rating init -->
    <script src=\"assets/js/pages/rating.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "advance-ui-ratings.html.twig", "/home/waldi/myapp2/templates/advance-ui-ratings.html.twig");
    }
}
