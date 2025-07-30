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

/* advance-ui-sweetalerts.html.twig */
class __TwigTemplate_f945c34627f7c653ae259d3ae5471ba5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-sweetalerts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "advance-ui-sweetalerts.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Sweet Alerts"]);
        echo "

    <!-- Sweet Alert css-->
    <link href=\"assets/libs/sweetalert2/sweetalert2.min.css\" rel=\"stylesheet\" type=\"text/css\" />

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
        <div class=\"main-content\">

            <div class=\"page-content\">
                <div class=\"container-fluid\">

                    ";
        // line 29
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Advance UI", "title" => "Sweet Alerts"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Examples</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Here are the various types of beautiful, responsive, customizable, and accessible sweet alerts.</p>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-nowrap align-middle justify-content-center mb-0\">
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\" style=\"width: 50%;\">
                                                        Sweet Alert Type
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        Sweet Alert Examples
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        A Basic Message
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-basic\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A Title with a Text Under
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-title\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A success message!
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-success\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A modal with a title, an error icon, a text, and a footer
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-error\">Click me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        A modal window with a long content inside
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-longcontent\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A warning message, with a function attached to the \"Confirm\"-button...
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-warning\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        By passing a parameter, you can execute something else for \"Cancel\".
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-params\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A message with custom Image Header
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-image\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A message with auto close timer
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-close\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Custom HTML description and buttons
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"custom-html-alert\">Click me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        A dialog with three buttons
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-dialog-three-btn\">Click me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        A custom positioned dialog
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-position\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A message with custom width, padding and background
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"custom-padding-width-alert\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Ajax request example
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"ajax-alert\">Click me</button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row mt-2\">
                        <div class=\"col-lg-12\">

                            <div class=\"justify-content-between d-flex align-items-center mb-3\">
                                <h5 class=\"mb-0 pb-1 text-decoration-underline\">Custom Sweetalert Example</h5>
                            </div>
                            <div class=\"row\">

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">

                                            <h5 class=\"mb-4\">Success Message</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a success message.</p>
                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-success\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/success-message.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Error Message</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a error message.</p>
                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-error\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/error-message.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Warning Message</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a warning message.</p>
                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-warning\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/warning-message.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Join Our Community</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a community registration field.</p>

                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-community\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/join-community.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Email Verification</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a email verification field.</p>
                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-email-verify\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/email-verify.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Notification Message</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a custom notification message.</p>

                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-notification\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/notification-message.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 348
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 357
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 359
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- Sweet Alerts js -->
    <script src=\"assets/libs/sweetalert2/sweetalert2.min.js\"></script>

    <!-- Sweet alert init js-->
    <script src=\"assets/js/pages/sweetalerts.init.js\"></script>

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
        return "advance-ui-sweetalerts.html.twig";
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
        return array (  422 => 359,  417 => 357,  405 => 348,  83 => 29,  70 => 19,  58 => 10,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Sweet Alerts'}) }}

    <!-- Sweet Alert css-->
    <link href=\"assets/libs/sweetalert2/sweetalert2.min.css\" rel=\"stylesheet\" type=\"text/css\" />

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Advance UI', title: 'Sweet Alerts'}) }}

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4 class=\"card-title mb-0\">Examples</h4>
                                </div><!-- end card header -->

                                <div class=\"card-body\">
                                    <p class=\"text-muted\">Here are the various types of beautiful, responsive, customizable, and accessible sweet alerts.</p>

                                    <div class=\"table-responsive\">
                                        <table class=\"table table-nowrap align-middle justify-content-center mb-0\">
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\" style=\"width: 50%;\">
                                                        Sweet Alert Type
                                                    </th>
                                                    <th scope=\"col\" class=\"text-center\">
                                                        Sweet Alert Examples
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        A Basic Message
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-basic\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A Title with a Text Under
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-title\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A success message!
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-success\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A modal with a title, an error icon, a text, and a footer
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-error\">Click me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        A modal window with a long content inside
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-longcontent\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A warning message, with a function attached to the \"Confirm\"-button...
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-warning\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        By passing a parameter, you can execute something else for \"Cancel\".
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-params\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A message with custom Image Header
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-image\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A message with auto close timer
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-close\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Custom HTML description and buttons
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"custom-html-alert\">Click me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        A dialog with three buttons
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-dialog-three-btn\">Click me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        A custom positioned dialog
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"sa-position\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        A message with custom width, padding and background
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"custom-padding-width-alert\">Click me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Ajax request example
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"ajax-alert\">Click me</button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class=\"row mt-2\">
                        <div class=\"col-lg-12\">

                            <div class=\"justify-content-between d-flex align-items-center mb-3\">
                                <h5 class=\"mb-0 pb-1 text-decoration-underline\">Custom Sweetalert Example</h5>
                            </div>
                            <div class=\"row\">

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">

                                            <h5 class=\"mb-4\">Success Message</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a success message.</p>
                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-success\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/success-message.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Error Message</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a error message.</p>
                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-error\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/error-message.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Warning Message</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a warning message.</p>
                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-warning\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/warning-message.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Join Our Community</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a community registration field.</p>

                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-community\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/join-community.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Email Verification</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a email verification field.</p>
                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-email-verify\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/email-verify.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                                <div class=\"col-xl-4 col-md-6\">
                                    <div class=\"card text-center border\">
                                        <div class=\"card-body p-4 pb-0\">
                                            <h5 class=\"mb-4\">Notification Message</h5>
                                            <p class=\"text-muted\">Here is an example of a sweet alert with a custom notification message.</p>

                                            <div>
                                                <button type=\"button\" class=\"btn btn-primary\" id=\"custom-sa-notification\">Click me</button>
                                            </div>

                                            <div class=\"row justify-content-center mt-2\">
                                                <div class=\"col-lg-10\">
                                                    <div>
                                                        <img src=\"assets/images/sweetalert2/notification-message.png\" alt=\"Mac Image\" class=\"img-fluid\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
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

    <!-- Sweet Alerts js -->
    <script src=\"assets/libs/sweetalert2/sweetalert2.min.js\"></script>

    <!-- Sweet alert init js-->
    <script src=\"assets/js/pages/sweetalerts.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "advance-ui-sweetalerts.html.twig", "/home/waldi/myapp2/templates/advance-ui-sweetalerts.html.twig");
    }
}
