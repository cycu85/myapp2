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

/* ui-media.html.twig */
class __TwigTemplate_95fdf0721889681903d9c5f04978c1be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-media.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-media.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Media Object"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Pages", "title" => "Media Object"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-xxl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Examples</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"default\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"default\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">

                                    <p class=\"text-muted mb-4\">Use few flex utilities that allow even more flexibility and customization than before.</p>

                                    <div class=\"live-preview\">
                                        <div class=\"d-flex align-items-start text-muted mb-4\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>

                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-start text-muted mb-4\">
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                            </div>
                                            <div class=\"flex-shrink-0 ms-3\">
                                                <img src=\"assets/images/users/avatar-3.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-start text-muted\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
<pre class=\"language-markup\" style=\"height: 275px;\">
<code>&lt;div class=&quot;d-flex align-items-start text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-start text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
    &lt;/div&gt;
    &lt;div class=&quot;flex-shrink-0 ms-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-3.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-start text-muted&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xxl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Nesting Example</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"nestingmedia-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"nestingmedia-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted mb-4\">Media objects can be infinitely nested, though we suggest you stop at some point. Place nested <code>d-flex align-items-start</code> within the <code>flex-grow-1</code> of a parent media object.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"d-flex align-items-start text-muted mb-4\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                                <div class=\"d-flex align-items-start text-muted mt-3\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <img src=\"assets/images/users/avatar-3.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                                    </div>
                                                    <div class=\"flex-grow-1\">
                                                        <h5 class=\"fs-14\">Media heading</h5>
                                                        This is some content from a media component. You can replace this with any content and adjust it as needed.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-start text-muted\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-4.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
<pre class=\"language-markup\" style=\"height: 275px;\">
<code>&lt;!-- Nesting Example --&gt;
&lt;div class=&quot;d-flex align-items-start text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
        &lt;div class=&quot;d-flex align-items-start text-muted mt-3&quot;&gt;
            &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
                &lt;img src=&quot;assets/images/users/avatar-3.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;flex-grow-1&quot;&gt;
                &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
                This is some content from a media component. You can replace this with any content and adjust it as needed.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-start text-muted&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-4.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
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
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Media Alignment</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"media-alignment-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"media-alignment-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">

                                    <p class=\"text-muted mb-4\">The images or other media can be aligned top, middle, or bottom. The default is top aligned.</p>

                                    <div class=\"live-preview\">
                                        <div class=\"d-flex align-items-start text-muted mb-4\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>

                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Top Aligned media</h5>
                                                <p class=\"mb-1\">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class=\"mb-0\">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-center text-muted mb-4\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-6.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>

                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Center Aligned media</h5>
                                                <p class=\"mb-1\">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class=\"mb-0\">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-end text-muted\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-8.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>

                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Bottom Aligned media</h5>
                                                <p class=\"mb-1\">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class=\"mb-0\">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
<pre class=\"language-markup\" style=\"height: 275px;\">
<code>&lt;!-- Media Alignment --&gt;
&lt;div class=&quot;d-flex align-items-start text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Top Aligned media&lt;/h5&gt;
        &lt;p class=&quot;mb-1&quot;&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
        &lt;p class=&quot;mb-0&quot;&gt;Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-center text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-6.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Center Aligned media&lt;/h5&gt;
        &lt;p class=&quot;mb-1&quot;&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
        &lt;p class=&quot;mb-0&quot;&gt;Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-end text-muted&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-8.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Bottom Aligned media&lt;/h5&gt;
        &lt;p class=&quot;mb-1&quot;&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
        &lt;p class=&quot;mb-0&quot;&gt;Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt;
    &lt;/div&gt;
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
        // line 303
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 312
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 314
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
        return "ui-media.html.twig";
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
        return array (  377 => 314,  372 => 312,  360 => 303,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Media Object'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Pages', title: 'Media Object'}) }}

                    <div class=\"row\">
                        <div class=\"col-xxl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Examples</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"default\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"default\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">

                                    <p class=\"text-muted mb-4\">Use few flex utilities that allow even more flexibility and customization than before.</p>

                                    <div class=\"live-preview\">
                                        <div class=\"d-flex align-items-start text-muted mb-4\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>

                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-start text-muted mb-4\">
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                            </div>
                                            <div class=\"flex-shrink-0 ms-3\">
                                                <img src=\"assets/images/users/avatar-3.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-start text-muted\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
<pre class=\"language-markup\" style=\"height: 275px;\">
<code>&lt;div class=&quot;d-flex align-items-start text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-start text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
    &lt;/div&gt;
    &lt;div class=&quot;flex-shrink-0 ms-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-3.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-start text-muted&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-xxl-6\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Nesting Example</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"nestingmedia-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"nestingmedia-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted mb-4\">Media objects can be infinitely nested, though we suggest you stop at some point. Place nested <code>d-flex align-items-start</code> within the <code>flex-grow-1</code> of a parent media object.</p>
                                    <div class=\"live-preview\">
                                        <div class=\"d-flex align-items-start text-muted mb-4\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                                <div class=\"d-flex align-items-start text-muted mt-3\">
                                                    <div class=\"flex-shrink-0 me-3\">
                                                        <img src=\"assets/images/users/avatar-3.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                                    </div>
                                                    <div class=\"flex-grow-1\">
                                                        <h5 class=\"fs-14\">Media heading</h5>
                                                        This is some content from a media component. You can replace this with any content and adjust it as needed.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-start text-muted\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-4.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Media heading</h5>
                                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
<pre class=\"language-markup\" style=\"height: 275px;\">
<code>&lt;!-- Nesting Example --&gt;
&lt;div class=&quot;d-flex align-items-start text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
        &lt;div class=&quot;d-flex align-items-start text-muted mt-3&quot;&gt;
            &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
                &lt;img src=&quot;assets/images/users/avatar-3.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;flex-grow-1&quot;&gt;
                &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
                This is some content from a media component. You can replace this with any content and adjust it as needed.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-start text-muted&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-4.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Media heading&lt;/h5&gt;
        This is some content from a media component. You can replace this with any content and adjust it as needed.
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
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header align-items-center d-flex\">
                                    <h4 class=\"card-title mb-0 flex-grow-1\">Media Alignment</h4>
                                    <div class=\"flex-shrink-0\">
                                        <div class=\"form-check form-switch form-switch-right form-switch-md\">
                                            <label for=\"media-alignment-showcode\" class=\"form-label text-muted\">Show Code</label>
                                            <input class=\"form-check-input code-switcher\" type=\"checkbox\" id=\"media-alignment-showcode\">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class=\"card-body\">

                                    <p class=\"text-muted mb-4\">The images or other media can be aligned top, middle, or bottom. The default is top aligned.</p>

                                    <div class=\"live-preview\">
                                        <div class=\"d-flex align-items-start text-muted mb-4\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-2.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>

                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Top Aligned media</h5>
                                                <p class=\"mb-1\">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class=\"mb-0\">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-center text-muted mb-4\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-6.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>

                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Center Aligned media</h5>
                                                <p class=\"mb-1\">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class=\"mb-0\">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>

                                        <div class=\"d-flex align-items-end text-muted\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <img src=\"assets/images/users/avatar-8.jpg\" class=\"avatar-sm rounded\" alt=\"...\">
                                            </div>

                                            <div class=\"flex-grow-1\">
                                                <h5 class=\"fs-14\">Bottom Aligned media</h5>
                                                <p class=\"mb-1\">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class=\"mb-0\">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-none code-view\">
<pre class=\"language-markup\" style=\"height: 275px;\">
<code>&lt;!-- Media Alignment --&gt;
&lt;div class=&quot;d-flex align-items-start text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Top Aligned media&lt;/h5&gt;
        &lt;p class=&quot;mb-1&quot;&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
        &lt;p class=&quot;mb-0&quot;&gt;Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-center text-muted mb-4&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-6.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Center Aligned media&lt;/h5&gt;
        &lt;p class=&quot;mb-1&quot;&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
        &lt;p class=&quot;mb-0&quot;&gt;Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;d-flex align-items-end text-muted&quot;&gt;
    &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
        &lt;img src=&quot;assets/images/users/avatar-8.jpg&quot; class=&quot;avatar-sm rounded&quot; alt=&quot;...&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex-grow-1&quot;&gt;
        &lt;h5 class=&quot;fs-14&quot;&gt;Bottom Aligned media&lt;/h5&gt;
        &lt;p class=&quot;mb-1&quot;&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.&lt;/p&gt;
        &lt;p class=&quot;mb-0&quot;&gt;Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt;
    &lt;/div&gt;
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

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "ui-media.html.twig", "/home/waldi/myapp2/templates/ui-media.html.twig");
    }
}
