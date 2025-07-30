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

/* advance-ui-highlight.html.twig */
class __TwigTemplate_69b3acf627f3f05409f51d735f77fcca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-highlight.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-highlight.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Highlight"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Advanced UI", "title" => "Highlight"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <div class=\"flex-grow-1\">
                                        <h4 class=\"card-title mb-0\">HTML Highlight</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">HTML highlight is used to mark or highlight text that is of property, relevance, or special interest to an HTML document. here is the example shown below.</p>

                                    <div class=\"live-preview\">
                                        <pre>
<code class=\"language-markup\">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Velzon - Responsive Admin Dashboard Template&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;h1&gt;This is a Heading 1&lt;/h1&gt;
            &lt;h2&gt;This is a Heading 2&lt;/h2&gt;
            &lt;h3&gt;This is a Heading 3&lt;/h3&gt;
            &lt;h4&gt;This is a Heading 4&lt;/h4&gt;
        &lt;/div&gt;
        &lt;!-- end div content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
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
                                <div class=\"card-header align-items-center d-flex\">
                                    <div class=\"flex-grow-1\">
                                        <h4 class=\"card-title mb-0\">CSS Highlight</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">CSS highlight is used to mark or highlight text that is of property, relevance, or special interest to a CSS document. Here is the example shown below.</p>
                                    <div class=\"live-preview\">
                                        <pre>
<code class=\"language-css\">body {
    color: #212529; 
    background-color: #f3f3f9;
    font-family: \"Poppins\",sans-serif;
}

.example {
    margin: 0;
    color: #74788d; 
}</code></pre>
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
                                <div class=\"card-header align-items-center d-flex\">
                                    <div class=\"flex-grow-1\">
                                        <h4 class=\"card-title mb-0\">Javascript Highlight</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Javascript highlight is used to mark or highlight text that is of property, relevance, or special interest to a Javascript document. Here is the example shown below.</p>
                                    <div class=\"live-preview\">
                                        <pre>
<code class=\"language-js\">function myFunction() {
    var divElement = document.getElementById(\"myDIV\");
    if (divElement.style.display === \"none\") {
      divElement.style.display = \"block\";
    } else {
      divElement.style.display = \"none\";
    }
}</code></pre>
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
        // line 130
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    ";
        // line 137
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 139
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
        return "advance-ui-highlight.html.twig";
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
        return array (  202 => 139,  197 => 137,  187 => 130,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Highlight'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Advanced UI', title: 'Highlight'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <div class=\"flex-grow-1\">
                                        <h4 class=\"card-title mb-0\">HTML Highlight</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">HTML highlight is used to mark or highlight text that is of property, relevance, or special interest to an HTML document. here is the example shown below.</p>

                                    <div class=\"live-preview\">
                                        <pre>
<code class=\"language-markup\">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Velzon - Responsive Admin Dashboard Template&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;h1&gt;This is a Heading 1&lt;/h1&gt;
            &lt;h2&gt;This is a Heading 2&lt;/h2&gt;
            &lt;h3&gt;This is a Heading 3&lt;/h3&gt;
            &lt;h4&gt;This is a Heading 4&lt;/h4&gt;
        &lt;/div&gt;
        &lt;!-- end div content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
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
                                <div class=\"card-header align-items-center d-flex\">
                                    <div class=\"flex-grow-1\">
                                        <h4 class=\"card-title mb-0\">CSS Highlight</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">CSS highlight is used to mark or highlight text that is of property, relevance, or special interest to a CSS document. Here is the example shown below.</p>
                                    <div class=\"live-preview\">
                                        <pre>
<code class=\"language-css\">body {
    color: #212529; 
    background-color: #f3f3f9;
    font-family: \"Poppins\",sans-serif;
}

.example {
    margin: 0;
    color: #74788d; 
}</code></pre>
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
                                <div class=\"card-header align-items-center d-flex\">
                                    <div class=\"flex-grow-1\">
                                        <h4 class=\"card-title mb-0\">Javascript Highlight</h4>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Javascript highlight is used to mark or highlight text that is of property, relevance, or special interest to a Javascript document. Here is the example shown below.</p>
                                    <div class=\"live-preview\">
                                        <pre>
<code class=\"language-js\">function myFunction() {
    var divElement = document.getElementById(\"myDIV\");
    if (divElement.style.display === \"none\") {
      divElement.style.display = \"block\";
    } else {
      divElement.style.display = \"none\";
    }
}</code></pre>
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

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "advance-ui-highlight.html.twig", "/home/waldi/myapp2/templates/advance-ui-highlight.html.twig");
    }
}
