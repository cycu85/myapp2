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

/* pages-privacy-policy.html.twig */
class __TwigTemplate_e37951237f70f591ca7e198857da754d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-privacy-policy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-privacy-policy.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Privacy Policy"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Pages", "title" => "Privacy Policy"]);
        echo "

                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-10\">
                            <div class=\"card\">
                                <div class=\"bg-warning-subtle position-relative\">
                                    <div class=\"card-body p-5\">
                                        <div class=\"text-center\">
                                            <h3>Privacy Policy</h3>
                                            <p class=\"mb-0 text-muted\">Last update: 16 Sept, 2022</p>
                                        </div>
                                    </div>
                                    <div class=\"shape\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.com/svgjs\" width=\"1440\" height=\"60\" preserveAspectRatio=\"none\" viewBox=\"0 0 1440 60\">
                                            <g mask=\"url(&quot;#SvgjsMask1001&quot;)\" fill=\"none\">
                                                <path d=\"M 0,4 C 144,13 432,48 720,49 C 1008,50 1296,17 1440,9L1440 60L0 60z\" style=\"fill: var(--vz-secondary-bg);\"></path>
                                            </g>
                                            <defs>
                                                <mask id=\"SvgjsMask1001\">
                                                    <rect width=\"1440\" height=\"60\" fill=\"#ffffff\"></rect>
                                                </mask>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class=\"card-body p-4\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex-shrink-0 me-3\">
                                            <i data-feather=\"check-circle\" class=\"text-success icon-dual-success icon-xs\"></i>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <h5>Privacy Policy for velzon</h5>
                                            <p class=\"text-muted\">At Website Name, accessible at Website.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Website Name and how we use it.</p>
                                            <p class=\"text-muted\">If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at Email@Website.com</p>
                                            <p class=\"text-muted\">This privacy policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Website Name. This policy is not applicable to any information collected offline or via channels other than this website.</p>
                                            <p class=\"text-muted\">How we use your information:</p>
                                            <ul class=\"text-muted\">
                                                <li>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                </li>
                                                <li>
                                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                </li>
                                                <li>
                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                                </li>
                                                <li>
                                                    <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex\">
                                        <div class=\"flex-shrink-0 me-3\">
                                            <i data-feather=\"check-circle\" class=\"text-success icon-dual-success icon-xs\"></i>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <h5>How we use your information</h5>
                                            <p class=\"text-muted\">If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
                                            <p class=\"text-muted\">Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes.</p>
                                            <p class=\"text-muted\">When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
                                            <p class=\"text-muted\">We use the information we collect in various ways, including to:</p>
                                            <ul class=\"text-muted vstack gap-2\">
                                                <li>
                                                    Provide, operate, and maintain our website
                                                </li>
                                                <li>
                                                    Improve, personalize, and expand our website
                                                </li>
                                                <li>
                                                    Understand and analyze how you use our website
                                                </li>
                                                <li>
                                                    Develop new products, services, features, and functionality
                                                </li>
                                                <li>
                                                    Send you emails
                                                </li>
                                                <li>
                                                Find and prevent fraud
                                                </li>
                                            </ul>
                                            <p class=\"text-muted\">Like any other website, Website Name uses ‘cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
                                        </div>
                                    </div>

                                    <div class=\"d-flex\">
                                        <div class=\"flex-shrink-0 me-3\">
                                            <i data-feather=\"check-circle\" class=\"text-success icon-dual-success icon-xs\"></i>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <p class=\"text-muted\">Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>
                                            <p class=\"text-muted\"><b>Website Name's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</b></p>
                                        </div>
                                    </div>


                                    <div class=\"text-end\">
                                        <a href=\"#!\" class=\"btn btn-danger\">I'm Understand</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 137
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 146
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 148
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

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
        return "pages-privacy-policy.html.twig";
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
        return array (  211 => 148,  206 => 146,  194 => 137,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Privacy Policy'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'Pages', title: 'Privacy Policy'}) }}

                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-10\">
                            <div class=\"card\">
                                <div class=\"bg-warning-subtle position-relative\">
                                    <div class=\"card-body p-5\">
                                        <div class=\"text-center\">
                                            <h3>Privacy Policy</h3>
                                            <p class=\"mb-0 text-muted\">Last update: 16 Sept, 2022</p>
                                        </div>
                                    </div>
                                    <div class=\"shape\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.com/svgjs\" width=\"1440\" height=\"60\" preserveAspectRatio=\"none\" viewBox=\"0 0 1440 60\">
                                            <g mask=\"url(&quot;#SvgjsMask1001&quot;)\" fill=\"none\">
                                                <path d=\"M 0,4 C 144,13 432,48 720,49 C 1008,50 1296,17 1440,9L1440 60L0 60z\" style=\"fill: var(--vz-secondary-bg);\"></path>
                                            </g>
                                            <defs>
                                                <mask id=\"SvgjsMask1001\">
                                                    <rect width=\"1440\" height=\"60\" fill=\"#ffffff\"></rect>
                                                </mask>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class=\"card-body p-4\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex-shrink-0 me-3\">
                                            <i data-feather=\"check-circle\" class=\"text-success icon-dual-success icon-xs\"></i>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <h5>Privacy Policy for velzon</h5>
                                            <p class=\"text-muted\">At Website Name, accessible at Website.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Website Name and how we use it.</p>
                                            <p class=\"text-muted\">If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at Email@Website.com</p>
                                            <p class=\"text-muted\">This privacy policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Website Name. This policy is not applicable to any information collected offline or via channels other than this website.</p>
                                            <p class=\"text-muted\">How we use your information:</p>
                                            <ul class=\"text-muted\">
                                                <li>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                </li>
                                                <li>
                                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                </li>
                                                <li>
                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                                </li>
                                                <li>
                                                    <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex\">
                                        <div class=\"flex-shrink-0 me-3\">
                                            <i data-feather=\"check-circle\" class=\"text-success icon-dual-success icon-xs\"></i>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <h5>How we use your information</h5>
                                            <p class=\"text-muted\">If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
                                            <p class=\"text-muted\">Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes.</p>
                                            <p class=\"text-muted\">When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
                                            <p class=\"text-muted\">We use the information we collect in various ways, including to:</p>
                                            <ul class=\"text-muted vstack gap-2\">
                                                <li>
                                                    Provide, operate, and maintain our website
                                                </li>
                                                <li>
                                                    Improve, personalize, and expand our website
                                                </li>
                                                <li>
                                                    Understand and analyze how you use our website
                                                </li>
                                                <li>
                                                    Develop new products, services, features, and functionality
                                                </li>
                                                <li>
                                                    Send you emails
                                                </li>
                                                <li>
                                                Find and prevent fraud
                                                </li>
                                            </ul>
                                            <p class=\"text-muted\">Like any other website, Website Name uses ‘cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
                                        </div>
                                    </div>

                                    <div class=\"d-flex\">
                                        <div class=\"flex-shrink-0 me-3\">
                                            <i data-feather=\"check-circle\" class=\"text-success icon-dual-success icon-xs\"></i>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <p class=\"text-muted\">Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>
                                            <p class=\"text-muted\"><b>Website Name's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</b></p>
                                        </div>
                                    </div>


                                    <div class=\"text-end\">
                                        <a href=\"#!\" class=\"btn btn-danger\">I'm Understand</a>
                                    </div>
                                </div>
                            </div>
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

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "pages-privacy-policy.html.twig", "/home/waldi/myapp2/templates/pages-privacy-policy.html.twig");
    }
}
