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

/* installation-wizard/index.html.twig */
class __TwigTemplate_dc1e88261cec61a362ccdb2fca3a4c6d3f76cdc4bddd2b77fa6b30aca203fed6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation-wizard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "installation-wizard/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>UVDesk Helpdesk Community Edition - Installation Wizard</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32 48x48\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 12
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/wizard.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

        ";
        // line 16
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.7.1/backbone-validation-min.js\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/wizard.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div id=\"wizard\">
            <header id=\"wizardHeader\" class=\"wizard-header\"></header>
            <section id=\"wizardContent\" class=\"wizard-container\"></section>
        </div>

        <script id=\"wizardIcons-LoaderTemplate\" type=\"text/template\">
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"1em\" height=\"1em\" viewBox=\"0 0 40 40\" enable-background=\"new 0 0 40 40\" xml:space=\"preserve\">
                <path opacity=\"0.8\" fill=\"#9161ff\" d=\"M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z\" />
                <path fill=\"#000\" d=\"M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z\" >
                    <animateTransform attributeType=\"xml\" attributeName=\"transform\" type=\"rotate\" from=\"0 20 20\" to=\"360 20 20\" dur=\"0.5s\" repeatCount=\"indefinite\" />
                </path>
            </svg>
        </script>

        <script id=\"wizardIcons-SuccessTemplate\" type=\"text/template\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 21 21\">
                <path id=\"icon-success\" class=\"cls-1\" fill=\"#9161ff\" fill-rule=\"evenodd\" d=\"M764.5,373A10.5,10.5,0,1,1,775,362.5,10.5,10.5,0,0,1,764.5,373Zm3.808-15-5.923,5.727-1.693-1.636L759,363.727,762.385,367,770,359.636Z\" transform=\"translate(-754 -352)\"/>
            </svg>
        </script>

        <script id=\"wizardIcons-NoticeTemplate\" type=\"text/template\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 21 21\">
                <path id=\"error-icon\" class=\"cls-1\" fill=\"#ff5656\" fill-rule=\"evenodd\" d=\"M764.5,352A10.5,10.5,0,1,1,754,362.5,10.5,10.5,0,0,1,764.5,352Zm-0.006,12.988a1.506,1.506,0,1,1-1.5,1.506A1.5,1.5,0,0,1,764.494,364.988ZM763,356h3v8h-3v-8Z\" transform=\"translate(-754 -352)\"/>
            </svg>
        </script>
        
        <script id=\"installationWizard-DefaultHeaderTemplate\" type=\"text/template\">
            <div class=\"uvdesk-logo\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"164px\" height=\"60px\">
                    <path fill-rule=\"evenodd\" fill=\"rgb(132, 115, 243)\" d=\"M163.987,42.990 L161.097,42.990 L156.536,35.764 L153.614,39.037 L153.614,42.990 L151.012,42.990 L151.012,21.005 L153.614,21.005 L153.614,35.888 L153.710,35.888 L160.358,27.983 L163.281,27.983 L158.046,34.004 L163.987,42.990 ZM146.617,41.662 C146.157,42.081 145.584,42.410 144.898,42.650 C144.213,42.891 143.430,43.011 142.550,43.011 C141.486,43.011 140.473,42.812 139.511,42.415 C138.549,42.018 137.710,41.516 136.994,40.909 L138.253,39.183 C138.907,39.727 139.577,40.167 140.263,40.501 C140.949,40.836 141.741,41.003 142.642,41.003 C143.624,41.003 144.361,40.773 144.852,40.313 C145.344,39.853 145.589,39.288 145.589,38.619 C145.589,38.221 145.486,37.876 145.282,37.583 C145.077,37.290 144.816,37.034 144.499,36.814 C144.182,36.595 143.819,36.402 143.410,36.234 C143.000,36.067 142.591,35.900 142.182,35.732 C141.649,35.544 141.117,35.329 140.586,35.089 C140.053,34.849 139.577,34.555 139.158,34.210 C138.738,33.865 138.395,33.463 138.130,33.002 C137.864,32.542 137.731,31.988 137.731,31.339 C137.731,30.733 137.848,30.163 138.084,29.629 C138.319,29.096 138.656,28.636 139.097,28.249 C139.537,27.862 140.074,27.558 140.708,27.339 C141.342,27.119 142.059,27.009 142.857,27.009 C143.798,27.009 144.663,27.177 145.451,27.511 C146.238,27.846 146.919,28.254 147.492,28.735 L146.295,30.367 C145.783,29.970 145.251,29.645 144.699,29.394 C144.146,29.143 143.542,29.017 142.888,29.017 C141.946,29.017 141.256,29.237 140.816,29.676 C140.375,30.116 140.156,30.628 140.156,31.214 C140.156,31.570 140.248,31.878 140.432,32.139 C140.616,32.401 140.862,32.631 141.169,32.830 C141.476,33.029 141.829,33.206 142.228,33.363 C142.627,33.520 143.041,33.682 143.471,33.849 C144.003,34.059 144.540,34.278 145.083,34.508 C145.625,34.739 146.111,35.026 146.541,35.371 C146.970,35.716 147.323,36.140 147.600,36.642 C147.876,37.144 148.014,37.751 148.014,38.462 C148.014,39.089 147.896,39.675 147.661,40.219 C147.426,40.763 147.078,41.244 146.617,41.662 ZM124.566,35.575 C124.671,37.228 125.181,38.535 126.097,39.497 C127.012,40.459 128.206,40.940 129.679,40.940 C130.416,40.940 131.094,40.831 131.715,40.611 C132.336,40.391 132.931,40.104 133.499,39.748 L134.414,41.442 C133.740,41.861 132.994,42.227 132.173,42.541 C131.352,42.854 130.416,43.011 129.364,43.011 C128.332,43.011 127.370,42.828 126.475,42.462 C125.581,42.096 124.802,41.573 124.140,40.893 C123.477,40.214 122.956,39.382 122.577,38.399 C122.198,37.416 122.009,36.297 122.009,35.042 C122.009,33.787 122.203,32.662 122.593,31.669 C122.982,30.676 123.497,29.833 124.140,29.143 C124.781,28.453 125.513,27.925 126.333,27.558 C127.154,27.193 128.006,27.009 128.890,27.009 C129.858,27.009 130.726,27.177 131.494,27.511 C132.262,27.846 132.904,28.327 133.420,28.955 C133.935,29.582 134.330,30.335 134.603,31.214 C134.877,32.092 135.014,33.076 135.014,34.163 C135.014,34.728 134.982,35.199 134.919,35.575 L124.566,35.575 ZM131.747,30.288 C131.084,29.462 130.153,29.049 128.953,29.049 C128.406,29.049 127.885,29.159 127.391,29.378 C126.896,29.598 126.449,29.912 126.049,30.320 C125.649,30.727 125.318,31.229 125.055,31.826 C124.792,32.422 124.618,33.107 124.534,33.881 L132.741,33.881 C132.741,32.312 132.410,31.115 131.747,30.288 ZM115.726,40.914 L115.634,40.914 C115.044,41.481 114.368,41.973 113.605,42.388 C112.842,42.803 112.023,43.011 111.148,43.011 C109.276,43.011 107.786,42.342 106.677,41.005 C105.568,39.667 105.014,37.763 105.014,35.290 C105.014,34.095 105.192,33.016 105.548,32.053 C105.904,31.091 106.377,30.275 106.967,29.606 C107.557,28.938 108.238,28.421 109.012,28.056 C109.785,27.691 110.599,27.509 111.453,27.509 C112.308,27.509 113.050,27.661 113.681,27.965 C114.312,28.269 114.952,28.685 115.604,29.211 L115.482,26.688 L115.482,21.004 L118.015,21.004 L118.015,42.646 L115.940,42.646 L115.726,40.914 ZM115.482,31.157 C114.851,30.590 114.246,30.189 113.666,29.956 C113.086,29.723 112.491,29.606 111.881,29.606 C111.290,29.606 110.736,29.743 110.217,30.017 C109.699,30.290 109.246,30.675 108.859,31.172 C108.473,31.669 108.167,32.261 107.944,32.950 C107.720,33.639 107.608,34.409 107.608,35.260 C107.608,37.043 107.964,38.432 108.676,39.424 C109.388,40.417 110.395,40.914 111.698,40.914 C112.389,40.914 113.040,40.746 113.651,40.412 C114.261,40.078 114.871,39.566 115.482,38.877 L115.482,31.157 ZM94.513,42.990 L87.986,22.988 L90.752,22.988 L94.016,33.782 C94.389,34.981 94.715,36.089 94.995,37.105 C95.274,38.122 95.611,39.219 96.005,40.398 L96.129,40.398 C96.502,39.219 96.833,38.122 97.124,37.105 C97.414,36.089 97.735,34.981 98.087,33.782 L101.351,22.988 L103.992,22.988 L97.528,42.990 L94.513,42.990 ZM83.857,41.137 C83.187,41.807 82.395,42.287 81.481,42.576 C80.567,42.866 79.578,43.011 78.515,43.011 C77.452,43.011 76.459,42.866 75.534,42.576 C74.609,42.287 73.812,41.807 73.142,41.137 C72.472,40.468 71.946,39.594 71.564,38.515 C71.181,37.436 70.990,36.107 70.990,34.528 L70.990,22.988 L73.636,22.988 L73.636,34.588 C73.636,35.767 73.764,36.756 74.019,37.555 C74.274,38.355 74.619,38.994 75.055,39.474 C75.491,39.953 76.007,40.298 76.602,40.508 C77.197,40.718 77.835,40.823 78.515,40.823 C79.217,40.823 79.865,40.718 80.461,40.508 C81.055,40.298 81.577,39.953 82.023,39.474 C82.470,38.994 82.820,38.355 83.075,37.555 C83.331,36.756 83.458,35.767 83.458,34.588 L83.458,22.988 L86.009,22.988 L86.009,34.528 C86.009,36.107 85.818,37.436 85.435,38.515 C85.052,39.594 84.526,40.468 83.857,41.137 ZM53.004,31.344 C53.004,30.912 53.911,30.000 54.346,30.000 L55.676,30.000 C56.111,30.000 57.006,30.579 57.006,31.011 L57.010,32.011 L53.004,32.011 L53.004,31.344 ZM56.991,33.007 C57.349,50.954 39.728,55.736 32.973,55.992 C32.991,55.830 33.001,55.666 33.001,55.500 C33.001,55.025 32.927,54.567 32.790,54.137 C54.964,50.522 53.000,36.437 53.000,33.000 L56.991,33.007 ZM50.126,39.015 L47.015,39.015 L47.015,23.011 L50.126,23.011 C51.341,23.011 51.993,23.635 51.993,24.790 L51.993,37.237 C51.993,38.390 51.341,39.015 50.126,39.015 ZM12.498,40.988 C10.017,40.988 8.006,38.978 8.006,36.499 C8.006,34.020 10.017,32.010 12.498,32.010 C14.978,32.010 16.990,34.020 16.990,36.499 C16.990,38.978 14.978,40.988 12.498,40.988 ZM41.605,26.904 C35.512,30.841 28.816,31.849 21.427,28.513 C18.451,27.169 16.255,25.304 14.871,23.882 C12.462,26.587 9.109,29.406 4.228,30.000 L4.228,36.603 C4.228,41.833 6.183,46.830 9.712,50.770 C11.755,53.050 14.352,54.769 16.934,55.811 L15.724,60.013 C12.262,58.773 9.308,56.602 6.628,53.610 C2.411,48.903 -0.007,42.609 -0.007,36.341 L-0.007,30.037 L-0.007,27.929 L-0.006,27.928 L-0.008,22.797 C-0.008,10.349 10.319,-0.013 22.909,-0.013 L22.909,-0.013 C35.258,-0.013 45.592,10.076 45.977,22.197 C46.023,23.625 45.977,23.997 45.977,23.997 L41.605,26.904 ZM33.498,32.010 C35.978,32.010 37.990,34.020 37.990,36.499 C37.990,38.978 35.978,40.988 33.498,40.988 C31.017,40.988 29.006,38.978 29.006,36.499 C29.006,34.020 31.017,32.010 33.498,32.010 ZM28.495,53.017 C29.879,53.017 31.001,54.135 31.001,55.515 C31.001,56.895 29.879,58.014 28.495,58.014 C27.111,58.014 25.989,56.895 25.989,55.515 C25.989,54.135 27.111,53.017 28.495,53.017 Z\"></path>
                </svg>
            </div>

            <h1 class=\"community-header brand-theme\">UVDesk Community Edition</h1>
            <div class=\"line-break\"></div>
            <p>Version ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "</p>
        </script>

        <script id=\"installationWizard-DefaultContentTemplate\" type=\"text/template\">
            <div id=\"start-installation\">
                <p>Welcome to the helpdesk installation wizard. <br/>This wizard will help guide you in setting up the UVDesk Community Edition on your system.</p>

                <ul class=\"button-groups\">
                    <li><button id=\"wizardCTA-StartInstallation\" class=\"wizard-button solid button-theme-uvdesk\">Setup UVDesk</button></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-SetupTemplate\" type=\"text/template\">
            <div id=\"wizardSetup\"></div>
            <div class=\"line-break\"></div>
            <ul id=\"wizardSetupNavigation\" class=\"button-groups\" style=\"text-align: right;\">
                <li><button id=\"wizardCTA-CancelInstallation\" class=\"wizard-button solid button-theme-uvdesk\"><span>Cancel<span></button></li>
                <li><button id=\"wizardCTA-IterateBackward\" class=\"wizard-button solid button-theme-uvdesk\"><span>Back<span></button></li>
                <li><button id=\"wizardCTA-IterateInstallation\" class=\"wizard-button solid button-theme-uvdesk\"><span>Proceed<span></button></li>
            </div>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate-PHPVersion\" type=\"text/template\">
            <span class=\"wizard-svg-icon-criteria-checklist\"></span><label></label>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate-PHPExtensions\" type=\"text/template\">
            <div class=\"extension-info-container\">
                <span class=\"wizard-svg-icon-extension-criteria-checklist\"></span><label class=\"extension-criteria-label\"></label>
                <span class=\"PHPExtensions-toggle-details\">Show details</span>
            </div>
            <ul id=\"systemCriteria-PHPExtensions-Details\">
                <li id=\"imap-info\" class=\"fetching-details\">
                    <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                    <label id=\"imap-label\"></label>
                </li>

                <li id=\"mailparse-info\" class=\"fetching-details\">
                    <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                    <label id=\"mailparse-label\"></label>
                </li>

                <li id=\"mysqli-info\" class=\"fetching-details\">
                    <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                    <label id=\"mysqli-label\"></label>
                </li>
            </ul>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate\" type=\"text/template\">
            <div id=\"wizard-systemRequirements\">
                <h2>1: Evaluating System Requirements</h2>
                <p>The wizard will check whether your system meets the minimum requirements to successfully run the application.</p>
                
                <div class=\"line-break\"></div>

                <ul class=\"criteria-checklist\">
                    <li id=\"systemCriteria-PHPVersion\" class=\"fetching-details\"></li>
                    <li id=\"systemCriteria-PHPExtensions\" class=\"fetching-details\"></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-DatabaseConfigurationTemplate\" type=\"text/template\">
           <div id=\"wizard-configureDatabase\">
                <h2>2: Database Configuration</h2>
                <p>The wizard will check your MySQL database connection for any issues and configure it with your application.</p>

                <div class=\"line-break\"></div>

                <form name=\"wizardForm-ConfigureDatabase\" class=\"database-integration\" method=\"post\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Server<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"serverName\" type=\"text\" value=\"<%- credentials.serverName %>\" placeholder=\"127.0.0.1\" />
                            <p class=\"wizard-form-info\">Server name of the database (where it is hosted).</p>
                        </div>
                    </div>

                     <div class=\"form-field\">
                        <label class=\"form-label\">Port</label>
                        <div class=\"form-content\">
                            <input name=\"port\" type=\"text\" value=\"<%- credentials.serverPort %>\" placeholder=\"3306\" />
                            <p class=\"wizard-form-info\">Port number of the database (on which port database is hosted).</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Username<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"username\" type=\"text\" value=\"<%- credentials.username %>\" placeholder=\"root\" />
                            <p class=\"wizard-form-info\">Username to use when connecting to the database.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"password\" type=\"password\" value=\"\" placeholder=\"\" />
                            <p class=\"wizard-form-info\">Password to use when connecting to the database.</p>
                        </div>
                    </div>

                    <div class=\"form-field\">
                        <label class=\"form-label\">Database<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"database\" type=\"text\" value=\"<%- credentials.database %>\" placeholder=\"\" />
                            <p class=\"wizard-form-info\">Name of the database/schema to connect to.</p>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-AccountConfigurationTemplate\" type=\"text/template\">
            <div id=\"wizard-configureAccount\">
                 <h2>3: Create Super Admin Account</h2>
                <p>The wizard will create a default super admin account that can be used to access your application's backend.</p>

                <div class=\"line-break\"></div>

                <form name=\"wizardForm-ConfigureAccount\" method=\"post\" class=\"ConfigureAccount\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Name<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"name\" type=\"text\" value=\"<%- user.name %>\"  id=\"name\" placeholder=\"Name\" />
                            <p class=\"wizard-form-info\">Name of the user to be created.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Email<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"email\" type=\"text\" value=\"<%- user.email %>\" placeholder=\"Email\" />
                            <p class=\"wizard-form-info\">Email of the user to be created.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"password\" type=\"password\" id=\"password\" placeholder=\"Password\" />
                            <p class=\"wizard-form-info\">Password to use when authenticating user.</p>
                        </div>
                    </div>

                    <div class=\"form-field\">
                        <label class=\"form-label\">Confirm Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"confirm_password\" type=\"password\" value=\"<%- user.confirmPassword %>\" id=\"confirm_password\" placeholder=\"Confirm Password\" />
                            <p class=\"wizard-form-info\">Confirm the entered user password.</p>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-WebsiteConfigurationTemplate\" type=\"text/template\">
            <div id=\"wizard-configureWebsite\">
                <h2>4: Website Configuration</h2>
                 <form name=\"wizardForm-ConfigureWebsite\" method=\"post\" action=\"\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Member Panel Prefix<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"memeberUrlPrefix\" type=\"text\" value=\"<%- member_panel_url %>\" placeholder=\"member\" class=\"form-content\"/>
                        </div>
                    </div>
                    <div class=\"form-field\">
                        <label class=\"form-label\">Customer Panel Prefix<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"customerUrlPrefix\" type=\"text\" value=\"<%- customer_panel_url %>\" placeholder=\"customer\" class=\"form-content\"/>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-InstallationCompleteTemplate\" type=\"text/template\">
            <div id=\"wizardSetupComplete\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"4em\" height=\"4em\" viewBox=\"0 0 21 21\">
                    <path id=\"icon-success\" class=\"cls-1\" fill=\"#9161ff\" fill-rule=\"evenodd\" d=\"M764.5,373A10.5,10.5,0,1,1,775,362.5,10.5,10.5,0,0,1,764.5,373Zm3.808-15-5.923,5.727-1.693-1.636L759,363.727,762.385,367,770,359.636Z\" transform=\"translate(-754 -352)\"/>
                </svg>

                <p>Your helpdesk has been installed successfully.</p>

                <ul style=\"margin-top: 10px;\">
                    <li style=\"display: inline-block;\"><a href=\"<%- prefixCollecton.member %>\" target=\"_blank\" id=\"member_panel_url\">Admin Panel</a></li>
                    <li style=\"display: inline-block;\">| <a href=\"<%- prefixCollecton.knowledgebase %>\" target=\"_blank\" id=\"customer_panel_url\">Knowledgebase</a></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-InstallSetupTemplate-ProcessingItem\" type=\"text/template\">
            <% if (currentStep == 'load-configurations') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 1/5] Updating configurations..<span class=\"blink-text\">.</span></p>
            <% } else if (currentStep == 'load-migrations') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 2/5] Migrating database to latest schema version..<span class=\"blink-text\">.</span></p>
            <% } else if (currentStep == 'populate-datasets') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 3/5] Populating database with default datasets..<span class=\"blink-text\">.</span></p>
            <% } else if (currentStep == 'create-super-user') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 4/5] Creating super admin account..<span class=\"blink-text\">.</span></p>
            <% } else if (currentStep == 'load-website-prefixes') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 5/5] Loading website prefixes..<span class=\"blink-text\">.</span></p>
            <% } %>
            
            <p>Please wait while your helpdesk is being installed. This could take up to a few minutes.</p>
            <span id=\"error-message-bar\" style=\"color:#FF0000\"></span>
        </script>

        <script id=\"installationWizard-InstallSetupTemplate\" type=\"text/template\">
            <div id=\"wizard-finalizeInstall\">
                <p>Your UVDesk Community Helpdesk is ready to be installed.</p>

                <ul class=\"button-groups\" style=\"margin-top: 20px;\">
                    <li><button id=\"wizardCTA-StartInstallation\" class=\"wizard-button solid button-theme-uvdesk\">Install Now</button></li>
                </ul>
            </div>
        </script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "installation-wizard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 58,  74 => 20,  68 => 16,  63 => 13,  58 => 12,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>UVDesk Helpdesk Community Edition - Installation Wizard</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32 48x48\" href=\"{{ asset('favicon.ico') }}\" />

        {# Stylesheets #}
        <link href=\"{{ asset('css/reset.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"{{ asset('css/wizard.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />

        {# Scripts #}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.7.1/backbone-validation-min.js\"></script>
        <script src=\"{{ asset('scripts/wizard.js') }}\"></script>
    </head>
    <body>
        <div id=\"wizard\">
            <header id=\"wizardHeader\" class=\"wizard-header\"></header>
            <section id=\"wizardContent\" class=\"wizard-container\"></section>
        </div>

        <script id=\"wizardIcons-LoaderTemplate\" type=\"text/template\">
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"1em\" height=\"1em\" viewBox=\"0 0 40 40\" enable-background=\"new 0 0 40 40\" xml:space=\"preserve\">
                <path opacity=\"0.8\" fill=\"#9161ff\" d=\"M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z\" />
                <path fill=\"#000\" d=\"M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z\" >
                    <animateTransform attributeType=\"xml\" attributeName=\"transform\" type=\"rotate\" from=\"0 20 20\" to=\"360 20 20\" dur=\"0.5s\" repeatCount=\"indefinite\" />
                </path>
            </svg>
        </script>

        <script id=\"wizardIcons-SuccessTemplate\" type=\"text/template\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 21 21\">
                <path id=\"icon-success\" class=\"cls-1\" fill=\"#9161ff\" fill-rule=\"evenodd\" d=\"M764.5,373A10.5,10.5,0,1,1,775,362.5,10.5,10.5,0,0,1,764.5,373Zm3.808-15-5.923,5.727-1.693-1.636L759,363.727,762.385,367,770,359.636Z\" transform=\"translate(-754 -352)\"/>
            </svg>
        </script>

        <script id=\"wizardIcons-NoticeTemplate\" type=\"text/template\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 21 21\">
                <path id=\"error-icon\" class=\"cls-1\" fill=\"#ff5656\" fill-rule=\"evenodd\" d=\"M764.5,352A10.5,10.5,0,1,1,754,362.5,10.5,10.5,0,0,1,764.5,352Zm-0.006,12.988a1.506,1.506,0,1,1-1.5,1.506A1.5,1.5,0,0,1,764.494,364.988ZM763,356h3v8h-3v-8Z\" transform=\"translate(-754 -352)\"/>
            </svg>
        </script>
        
        <script id=\"installationWizard-DefaultHeaderTemplate\" type=\"text/template\">
            <div class=\"uvdesk-logo\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"164px\" height=\"60px\">
                    <path fill-rule=\"evenodd\" fill=\"rgb(132, 115, 243)\" d=\"M163.987,42.990 L161.097,42.990 L156.536,35.764 L153.614,39.037 L153.614,42.990 L151.012,42.990 L151.012,21.005 L153.614,21.005 L153.614,35.888 L153.710,35.888 L160.358,27.983 L163.281,27.983 L158.046,34.004 L163.987,42.990 ZM146.617,41.662 C146.157,42.081 145.584,42.410 144.898,42.650 C144.213,42.891 143.430,43.011 142.550,43.011 C141.486,43.011 140.473,42.812 139.511,42.415 C138.549,42.018 137.710,41.516 136.994,40.909 L138.253,39.183 C138.907,39.727 139.577,40.167 140.263,40.501 C140.949,40.836 141.741,41.003 142.642,41.003 C143.624,41.003 144.361,40.773 144.852,40.313 C145.344,39.853 145.589,39.288 145.589,38.619 C145.589,38.221 145.486,37.876 145.282,37.583 C145.077,37.290 144.816,37.034 144.499,36.814 C144.182,36.595 143.819,36.402 143.410,36.234 C143.000,36.067 142.591,35.900 142.182,35.732 C141.649,35.544 141.117,35.329 140.586,35.089 C140.053,34.849 139.577,34.555 139.158,34.210 C138.738,33.865 138.395,33.463 138.130,33.002 C137.864,32.542 137.731,31.988 137.731,31.339 C137.731,30.733 137.848,30.163 138.084,29.629 C138.319,29.096 138.656,28.636 139.097,28.249 C139.537,27.862 140.074,27.558 140.708,27.339 C141.342,27.119 142.059,27.009 142.857,27.009 C143.798,27.009 144.663,27.177 145.451,27.511 C146.238,27.846 146.919,28.254 147.492,28.735 L146.295,30.367 C145.783,29.970 145.251,29.645 144.699,29.394 C144.146,29.143 143.542,29.017 142.888,29.017 C141.946,29.017 141.256,29.237 140.816,29.676 C140.375,30.116 140.156,30.628 140.156,31.214 C140.156,31.570 140.248,31.878 140.432,32.139 C140.616,32.401 140.862,32.631 141.169,32.830 C141.476,33.029 141.829,33.206 142.228,33.363 C142.627,33.520 143.041,33.682 143.471,33.849 C144.003,34.059 144.540,34.278 145.083,34.508 C145.625,34.739 146.111,35.026 146.541,35.371 C146.970,35.716 147.323,36.140 147.600,36.642 C147.876,37.144 148.014,37.751 148.014,38.462 C148.014,39.089 147.896,39.675 147.661,40.219 C147.426,40.763 147.078,41.244 146.617,41.662 ZM124.566,35.575 C124.671,37.228 125.181,38.535 126.097,39.497 C127.012,40.459 128.206,40.940 129.679,40.940 C130.416,40.940 131.094,40.831 131.715,40.611 C132.336,40.391 132.931,40.104 133.499,39.748 L134.414,41.442 C133.740,41.861 132.994,42.227 132.173,42.541 C131.352,42.854 130.416,43.011 129.364,43.011 C128.332,43.011 127.370,42.828 126.475,42.462 C125.581,42.096 124.802,41.573 124.140,40.893 C123.477,40.214 122.956,39.382 122.577,38.399 C122.198,37.416 122.009,36.297 122.009,35.042 C122.009,33.787 122.203,32.662 122.593,31.669 C122.982,30.676 123.497,29.833 124.140,29.143 C124.781,28.453 125.513,27.925 126.333,27.558 C127.154,27.193 128.006,27.009 128.890,27.009 C129.858,27.009 130.726,27.177 131.494,27.511 C132.262,27.846 132.904,28.327 133.420,28.955 C133.935,29.582 134.330,30.335 134.603,31.214 C134.877,32.092 135.014,33.076 135.014,34.163 C135.014,34.728 134.982,35.199 134.919,35.575 L124.566,35.575 ZM131.747,30.288 C131.084,29.462 130.153,29.049 128.953,29.049 C128.406,29.049 127.885,29.159 127.391,29.378 C126.896,29.598 126.449,29.912 126.049,30.320 C125.649,30.727 125.318,31.229 125.055,31.826 C124.792,32.422 124.618,33.107 124.534,33.881 L132.741,33.881 C132.741,32.312 132.410,31.115 131.747,30.288 ZM115.726,40.914 L115.634,40.914 C115.044,41.481 114.368,41.973 113.605,42.388 C112.842,42.803 112.023,43.011 111.148,43.011 C109.276,43.011 107.786,42.342 106.677,41.005 C105.568,39.667 105.014,37.763 105.014,35.290 C105.014,34.095 105.192,33.016 105.548,32.053 C105.904,31.091 106.377,30.275 106.967,29.606 C107.557,28.938 108.238,28.421 109.012,28.056 C109.785,27.691 110.599,27.509 111.453,27.509 C112.308,27.509 113.050,27.661 113.681,27.965 C114.312,28.269 114.952,28.685 115.604,29.211 L115.482,26.688 L115.482,21.004 L118.015,21.004 L118.015,42.646 L115.940,42.646 L115.726,40.914 ZM115.482,31.157 C114.851,30.590 114.246,30.189 113.666,29.956 C113.086,29.723 112.491,29.606 111.881,29.606 C111.290,29.606 110.736,29.743 110.217,30.017 C109.699,30.290 109.246,30.675 108.859,31.172 C108.473,31.669 108.167,32.261 107.944,32.950 C107.720,33.639 107.608,34.409 107.608,35.260 C107.608,37.043 107.964,38.432 108.676,39.424 C109.388,40.417 110.395,40.914 111.698,40.914 C112.389,40.914 113.040,40.746 113.651,40.412 C114.261,40.078 114.871,39.566 115.482,38.877 L115.482,31.157 ZM94.513,42.990 L87.986,22.988 L90.752,22.988 L94.016,33.782 C94.389,34.981 94.715,36.089 94.995,37.105 C95.274,38.122 95.611,39.219 96.005,40.398 L96.129,40.398 C96.502,39.219 96.833,38.122 97.124,37.105 C97.414,36.089 97.735,34.981 98.087,33.782 L101.351,22.988 L103.992,22.988 L97.528,42.990 L94.513,42.990 ZM83.857,41.137 C83.187,41.807 82.395,42.287 81.481,42.576 C80.567,42.866 79.578,43.011 78.515,43.011 C77.452,43.011 76.459,42.866 75.534,42.576 C74.609,42.287 73.812,41.807 73.142,41.137 C72.472,40.468 71.946,39.594 71.564,38.515 C71.181,37.436 70.990,36.107 70.990,34.528 L70.990,22.988 L73.636,22.988 L73.636,34.588 C73.636,35.767 73.764,36.756 74.019,37.555 C74.274,38.355 74.619,38.994 75.055,39.474 C75.491,39.953 76.007,40.298 76.602,40.508 C77.197,40.718 77.835,40.823 78.515,40.823 C79.217,40.823 79.865,40.718 80.461,40.508 C81.055,40.298 81.577,39.953 82.023,39.474 C82.470,38.994 82.820,38.355 83.075,37.555 C83.331,36.756 83.458,35.767 83.458,34.588 L83.458,22.988 L86.009,22.988 L86.009,34.528 C86.009,36.107 85.818,37.436 85.435,38.515 C85.052,39.594 84.526,40.468 83.857,41.137 ZM53.004,31.344 C53.004,30.912 53.911,30.000 54.346,30.000 L55.676,30.000 C56.111,30.000 57.006,30.579 57.006,31.011 L57.010,32.011 L53.004,32.011 L53.004,31.344 ZM56.991,33.007 C57.349,50.954 39.728,55.736 32.973,55.992 C32.991,55.830 33.001,55.666 33.001,55.500 C33.001,55.025 32.927,54.567 32.790,54.137 C54.964,50.522 53.000,36.437 53.000,33.000 L56.991,33.007 ZM50.126,39.015 L47.015,39.015 L47.015,23.011 L50.126,23.011 C51.341,23.011 51.993,23.635 51.993,24.790 L51.993,37.237 C51.993,38.390 51.341,39.015 50.126,39.015 ZM12.498,40.988 C10.017,40.988 8.006,38.978 8.006,36.499 C8.006,34.020 10.017,32.010 12.498,32.010 C14.978,32.010 16.990,34.020 16.990,36.499 C16.990,38.978 14.978,40.988 12.498,40.988 ZM41.605,26.904 C35.512,30.841 28.816,31.849 21.427,28.513 C18.451,27.169 16.255,25.304 14.871,23.882 C12.462,26.587 9.109,29.406 4.228,30.000 L4.228,36.603 C4.228,41.833 6.183,46.830 9.712,50.770 C11.755,53.050 14.352,54.769 16.934,55.811 L15.724,60.013 C12.262,58.773 9.308,56.602 6.628,53.610 C2.411,48.903 -0.007,42.609 -0.007,36.341 L-0.007,30.037 L-0.007,27.929 L-0.006,27.928 L-0.008,22.797 C-0.008,10.349 10.319,-0.013 22.909,-0.013 L22.909,-0.013 C35.258,-0.013 45.592,10.076 45.977,22.197 C46.023,23.625 45.977,23.997 45.977,23.997 L41.605,26.904 ZM33.498,32.010 C35.978,32.010 37.990,34.020 37.990,36.499 C37.990,38.978 35.978,40.988 33.498,40.988 C31.017,40.988 29.006,38.978 29.006,36.499 C29.006,34.020 31.017,32.010 33.498,32.010 ZM28.495,53.017 C29.879,53.017 31.001,54.135 31.001,55.515 C31.001,56.895 29.879,58.014 28.495,58.014 C27.111,58.014 25.989,56.895 25.989,55.515 C25.989,54.135 27.111,53.017 28.495,53.017 Z\"></path>
                </svg>
            </div>

            <h1 class=\"community-header brand-theme\">UVDesk Community Edition</h1>
            <div class=\"line-break\"></div>
            <p>Version {{ version }}</p>
        </script>

        <script id=\"installationWizard-DefaultContentTemplate\" type=\"text/template\">
            <div id=\"start-installation\">
                <p>Welcome to the helpdesk installation wizard. <br/>This wizard will help guide you in setting up the UVDesk Community Edition on your system.</p>

                <ul class=\"button-groups\">
                    <li><button id=\"wizardCTA-StartInstallation\" class=\"wizard-button solid button-theme-uvdesk\">Setup UVDesk</button></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-SetupTemplate\" type=\"text/template\">
            <div id=\"wizardSetup\"></div>
            <div class=\"line-break\"></div>
            <ul id=\"wizardSetupNavigation\" class=\"button-groups\" style=\"text-align: right;\">
                <li><button id=\"wizardCTA-CancelInstallation\" class=\"wizard-button solid button-theme-uvdesk\"><span>Cancel<span></button></li>
                <li><button id=\"wizardCTA-IterateBackward\" class=\"wizard-button solid button-theme-uvdesk\"><span>Back<span></button></li>
                <li><button id=\"wizardCTA-IterateInstallation\" class=\"wizard-button solid button-theme-uvdesk\"><span>Proceed<span></button></li>
            </div>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate-PHPVersion\" type=\"text/template\">
            <span class=\"wizard-svg-icon-criteria-checklist\"></span><label></label>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate-PHPExtensions\" type=\"text/template\">
            <div class=\"extension-info-container\">
                <span class=\"wizard-svg-icon-extension-criteria-checklist\"></span><label class=\"extension-criteria-label\"></label>
                <span class=\"PHPExtensions-toggle-details\">Show details</span>
            </div>
            <ul id=\"systemCriteria-PHPExtensions-Details\">
                <li id=\"imap-info\" class=\"fetching-details\">
                    <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                    <label id=\"imap-label\"></label>
                </li>

                <li id=\"mailparse-info\" class=\"fetching-details\">
                    <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                    <label id=\"mailparse-label\"></label>
                </li>

                <li id=\"mysqli-info\" class=\"fetching-details\">
                    <span class=\"wizard-svg-icon-criteria-checklist\"></span>
                    <label id=\"mysqli-label\"></label>
                </li>
            </ul>
        </script>

        <script id=\"installationWizard-SystemRequirementsTemplate\" type=\"text/template\">
            <div id=\"wizard-systemRequirements\">
                <h2>1: Evaluating System Requirements</h2>
                <p>The wizard will check whether your system meets the minimum requirements to successfully run the application.</p>
                
                <div class=\"line-break\"></div>

                <ul class=\"criteria-checklist\">
                    <li id=\"systemCriteria-PHPVersion\" class=\"fetching-details\"></li>
                    <li id=\"systemCriteria-PHPExtensions\" class=\"fetching-details\"></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-DatabaseConfigurationTemplate\" type=\"text/template\">
           <div id=\"wizard-configureDatabase\">
                <h2>2: Database Configuration</h2>
                <p>The wizard will check your MySQL database connection for any issues and configure it with your application.</p>

                <div class=\"line-break\"></div>

                <form name=\"wizardForm-ConfigureDatabase\" class=\"database-integration\" method=\"post\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Server<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"serverName\" type=\"text\" value=\"<%- credentials.serverName %>\" placeholder=\"127.0.0.1\" />
                            <p class=\"wizard-form-info\">Server name of the database (where it is hosted).</p>
                        </div>
                    </div>

                     <div class=\"form-field\">
                        <label class=\"form-label\">Port</label>
                        <div class=\"form-content\">
                            <input name=\"port\" type=\"text\" value=\"<%- credentials.serverPort %>\" placeholder=\"3306\" />
                            <p class=\"wizard-form-info\">Port number of the database (on which port database is hosted).</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Username<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"username\" type=\"text\" value=\"<%- credentials.username %>\" placeholder=\"root\" />
                            <p class=\"wizard-form-info\">Username to use when connecting to the database.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"password\" type=\"password\" value=\"\" placeholder=\"\" />
                            <p class=\"wizard-form-info\">Password to use when connecting to the database.</p>
                        </div>
                    </div>

                    <div class=\"form-field\">
                        <label class=\"form-label\">Database<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"database\" type=\"text\" value=\"<%- credentials.database %>\" placeholder=\"\" />
                            <p class=\"wizard-form-info\">Name of the database/schema to connect to.</p>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-AccountConfigurationTemplate\" type=\"text/template\">
            <div id=\"wizard-configureAccount\">
                 <h2>3: Create Super Admin Account</h2>
                <p>The wizard will create a default super admin account that can be used to access your application's backend.</p>

                <div class=\"line-break\"></div>

                <form name=\"wizardForm-ConfigureAccount\" method=\"post\" class=\"ConfigureAccount\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Name<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"name\" type=\"text\" value=\"<%- user.name %>\"  id=\"name\" placeholder=\"Name\" />
                            <p class=\"wizard-form-info\">Name of the user to be created.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Email<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"email\" type=\"text\" value=\"<%- user.email %>\" placeholder=\"Email\" />
                            <p class=\"wizard-form-info\">Email of the user to be created.</p>
                        </div>
                    </div>
                    
                    <div class=\"form-field\">
                        <label class=\"form-label\">Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"password\" type=\"password\" id=\"password\" placeholder=\"Password\" />
                            <p class=\"wizard-form-info\">Password to use when authenticating user.</p>
                        </div>
                    </div>

                    <div class=\"form-field\">
                        <label class=\"form-label\">Confirm Password<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"confirm_password\" type=\"password\" value=\"<%- user.confirmPassword %>\" id=\"confirm_password\" placeholder=\"Confirm Password\" />
                            <p class=\"wizard-form-info\">Confirm the entered user password.</p>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-WebsiteConfigurationTemplate\" type=\"text/template\">
            <div id=\"wizard-configureWebsite\">
                <h2>4: Website Configuration</h2>
                 <form name=\"wizardForm-ConfigureWebsite\" method=\"post\" action=\"\">
                    <div class=\"form-field\">
                        <label class=\"form-label\">Member Panel Prefix<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"memeberUrlPrefix\" type=\"text\" value=\"<%- member_panel_url %>\" placeholder=\"member\" class=\"form-content\"/>
                        </div>
                    </div>
                    <div class=\"form-field\">
                        <label class=\"form-label\">Customer Panel Prefix<span class=\"uv-mandatory\">*</span></label>
                        <div class=\"form-content\">
                            <input name=\"customerUrlPrefix\" type=\"text\" value=\"<%- customer_panel_url %>\" placeholder=\"customer\" class=\"form-content\"/>
                        </div>
                    </div>
                </form>
            </div>
        </script>

        <script id=\"installationWizard-InstallationCompleteTemplate\" type=\"text/template\">
            <div id=\"wizardSetupComplete\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"4em\" height=\"4em\" viewBox=\"0 0 21 21\">
                    <path id=\"icon-success\" class=\"cls-1\" fill=\"#9161ff\" fill-rule=\"evenodd\" d=\"M764.5,373A10.5,10.5,0,1,1,775,362.5,10.5,10.5,0,0,1,764.5,373Zm3.808-15-5.923,5.727-1.693-1.636L759,363.727,762.385,367,770,359.636Z\" transform=\"translate(-754 -352)\"/>
                </svg>

                <p>Your helpdesk has been installed successfully.</p>

                <ul style=\"margin-top: 10px;\">
                    <li style=\"display: inline-block;\"><a href=\"<%- prefixCollecton.member %>\" target=\"_blank\" id=\"member_panel_url\">Admin Panel</a></li>
                    <li style=\"display: inline-block;\">| <a href=\"<%- prefixCollecton.knowledgebase %>\" target=\"_blank\" id=\"customer_panel_url\">Knowledgebase</a></li>
                </ul>
            </div>
        </script>

        <script id=\"installationWizard-InstallSetupTemplate-ProcessingItem\" type=\"text/template\">
            <% if (currentStep == 'load-configurations') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 1/5] Updating configurations..<span class=\"blink-text\">.</span></p>
            <% } else if (currentStep == 'load-migrations') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 2/5] Migrating database to latest schema version..<span class=\"blink-text\">.</span></p>
            <% } else if (currentStep == 'populate-datasets') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 3/5] Populating database with default datasets..<span class=\"blink-text\">.</span></p>
            <% } else if (currentStep == 'create-super-user') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 4/5] Creating super admin account..<span class=\"blink-text\">.</span></p>
            <% } else if (currentStep == 'load-website-prefixes') { %>
                <p><span class=\"installation-progress-loader\"></span>[Step 5/5] Loading website prefixes..<span class=\"blink-text\">.</span></p>
            <% } %>
            
            <p>Please wait while your helpdesk is being installed. This could take up to a few minutes.</p>
            <span id=\"error-message-bar\" style=\"color:#FF0000\"></span>
        </script>

        <script id=\"installationWizard-InstallSetupTemplate\" type=\"text/template\">
            <div id=\"wizard-finalizeInstall\">
                <p>Your UVDesk Community Helpdesk is ready to be installed.</p>

                <ul class=\"button-groups\" style=\"margin-top: 20px;\">
                    <li><button id=\"wizardCTA-StartInstallation\" class=\"wizard-button solid button-theme-uvdesk\">Install Now</button></li>
                </ul>
            </div>
        </script>
    </body>
</html>", "installation-wizard/index.html.twig", "/home/users/anmol.rathi/www/html/opensourceLatest/templates/installation-wizard/index.html.twig");
    }
}
