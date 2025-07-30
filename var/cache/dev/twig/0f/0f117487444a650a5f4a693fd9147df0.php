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

/* apps-nft-wallet.html.twig */
class __TwigTemplate_0ed8a9f933c0b1007fc5860df019c169 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-nft-wallet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-nft-wallet.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Wallet Connect"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "NFT Marketplace", "title" => "Wallet Connect"]);
        echo "

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-5\">
                            <div class=\"text-center mb-4\">
                                <h4>Your current wallet</h4>
                                <p class=\"text-muted fs-13\">WalletConnect is a convenient open source tool that enables a mobile wallet to easily connect to decentralized web applications, and interact with them from your phone.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"row justify-content-center mb-4\">
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/metamask.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Metamask</h5>
                                    <p class=\"text-muted pb-1\">MetaMask is a software cryptocurrency wallet used to interact with the Ethereum blockchain.</p>
                                    <a href=\"#!\" class=\"btn btn-danger\">Change Wallet</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-5\">
                            <div class=\"text-center mb-4\">
                                <h4>Connect with one of our other available wallet providers.</h4>
                            </div>
                        </div>
                    </div>

                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/metamask.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Metamask</h5>
                                    <p class=\"text-muted pb-1\">MetaMask is a software cryptocurrency wallet used to interact with the Ethereum blockchain.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/coinbase.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Coinbase Wallet</h5>
                                    <p class=\"text-muted pb-1\">Coinbase Wallet is a software product that gives you access to a wide spectrum.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/kukai.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Kukai Wallet</h5>
                                    <p class=\"text-muted pb-1\">Kukai is a seamless browser-based wallet that allows users to store, transfer, and delegate.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/binance.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Binance</h5>
                                    <p class=\"text-muted pb-1\">Binance offers a relatively secure, versatile way to invest in and trade cryptocurrencies.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/enjin.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Enjin Wallet</h5>
                                    <p class=\"text-muted pb-1\">Enjin is a store of value that can be used in the non-fungible token (NFT) marketplace.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/alpha.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Alpha Wallet</h5>
                                    <p class=\"text-muted pb-1\">AlphaWallet uses the TokenScript framework, which makes tokens become “smart”.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/math.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Math Wallet</h5>
                                    <p class=\"text-muted pb-1\">Math DApp Factory gives users tools that can simplify the development of exchanges, games</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 136
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    ";
        // line 145
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 147
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
        return "apps-nft-wallet.html.twig";
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
        return array (  210 => 147,  205 => 145,  193 => 136,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Wallet Connect'}) }}

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

                    {{ include('partials/page-title.html.twig', {pagetitle: 'NFT Marketplace', title: 'Wallet Connect'}) }}

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-5\">
                            <div class=\"text-center mb-4\">
                                <h4>Your current wallet</h4>
                                <p class=\"text-muted fs-13\">WalletConnect is a convenient open source tool that enables a mobile wallet to easily connect to decentralized web applications, and interact with them from your phone.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"row justify-content-center mb-4\">
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/metamask.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Metamask</h5>
                                    <p class=\"text-muted pb-1\">MetaMask is a software cryptocurrency wallet used to interact with the Ethereum blockchain.</p>
                                    <a href=\"#!\" class=\"btn btn-danger\">Change Wallet</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row justify-content-center\">
                        <div class=\"col-xl-5\">
                            <div class=\"text-center mb-4\">
                                <h4>Connect with one of our other available wallet providers.</h4>
                            </div>
                        </div>
                    </div>

                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/metamask.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Metamask</h5>
                                    <p class=\"text-muted pb-1\">MetaMask is a software cryptocurrency wallet used to interact with the Ethereum blockchain.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/coinbase.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Coinbase Wallet</h5>
                                    <p class=\"text-muted pb-1\">Coinbase Wallet is a software product that gives you access to a wide spectrum.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/kukai.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Kukai Wallet</h5>
                                    <p class=\"text-muted pb-1\">Kukai is a seamless browser-based wallet that allows users to store, transfer, and delegate.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/binance.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Binance</h5>
                                    <p class=\"text-muted pb-1\">Binance offers a relatively secure, versatile way to invest in and trade cryptocurrencies.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/enjin.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Enjin Wallet</h5>
                                    <p class=\"text-muted pb-1\">Enjin is a store of value that can be used in the non-fungible token (NFT) marketplace.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/alpha.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Alpha Wallet</h5>
                                    <p class=\"text-muted pb-1\">AlphaWallet uses the TokenScript framework, which makes tokens become “smart”.</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"card text-center\">
                                <div class=\"card-body py-5 px-4\">
                                    <img src=\"assets/images/nft/wallet/math.png\" alt=\"\" height=\"55\" class=\"mb-3 pb-2\">
                                    <h5>Math Wallet</h5>
                                    <p class=\"text-muted pb-1\">Math DApp Factory gives users tools that can simplify the development of exchanges, games</p>
                                    <a href=\"#!\" class=\"btn btn-soft-info\">Connect Wallet</a>
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

</html>", "apps-nft-wallet.html.twig", "/home/waldi/myapp2/templates/apps-nft-wallet.html.twig");
    }
}
