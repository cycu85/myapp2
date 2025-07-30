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

/* apps-calendar-month-grid.html.twig */
class __TwigTemplate_4385caaeb2a2731d89193bf71b981aa1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-calendar-month-grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-calendar-month-grid.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "

<head>

    ";
        // line 5
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Month Grid Calendar"]);
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
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Apps", "title" => "Month Grid"]);
        echo "

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-xl-3\">
                                    <div class=\"card card-h-100\">
                                        <div class=\"card-body\">
                                            <button class=\"btn btn-primary w-100\" id=\"btn-new-event\"><i class=\"mdi mdi-plus\"></i> Create New Event</button>

                                            <div id=\"external-events\">
                                                <br>
                                                <p class=\"text-muted\">Drag and drop your event or click in the calendar</p>
                                                <div class=\"external-event fc-event bg-success-subtle text-success\" data-class=\"bg-success-subtle\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle me-2\"></i>New Event Planning
                                                </div>
                                                <div class=\"external-event fc-event bg-info-subtle text-info\" data-class=\"bg-info-subtle\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle me-2\"></i>Meeting
                                                </div>
                                                <div class=\"external-event fc-event bg-warning-subtle text-warning\" data-class=\"bg-warning-subtle\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle me-2\"></i>Generating Reports
                                                </div>
                                                <div class=\"external-event fc-event bg-danger-subtle text-danger\" data-class=\"bg-danger-subtle\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle me-2\"></i>Create New theme
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <h5 class=\"mb-1\">Upcoming Events</h5>
                                        <p class=\"text-muted\">Don't miss scheduled events</p>
                                        <div class=\"pe-2 me-n1 mb-3\" data-simplebar style=\"height: 400px\">
                                            <div id=\"upcoming-event-list\"></div>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body bg-info-subtle\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0\">
                                                    <i data-feather=\"calendar\" class=\"text-info icon-dual-info\"></i>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"fs-15\">Welcome to your Calendar!</h6>
                                                    <p class=\"text-muted mb-0\">Event that applications book will appear here. Click on an event to see the details and manage applicants event.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-->
                                </div> <!-- end col-->

                                <div class=\"col-xl-9\">
                                    <div class=\"card card-h-100\">
                                        <div class=\"card-body\">
                                            <div id=\"calendar\"></div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!--end row-->

                            <div style='clear:both'></div>

                            <!-- Add New Event MODAL -->
                            <div class=\"modal fade\" id=\"event-modal\" tabindex=\"-1\">
                                <div class=\"modal-dialog modal-dialog-centered\">
                                    <div class=\"modal-content border-0\">
                                        <div class=\"modal-header p-3 bg-info-subtle\">
                                            <h5 class=\"modal-title\" id=\"modal-title\">Event</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-hidden=\"true\"></button>
                                        </div>
                                        <div class=\"modal-body p-4\">
                                            <form class=\"needs-validation\" name=\"event-form\" id=\"form-event\" novalidate>
                                                <div class=\"text-end\">
                                                    <a href=\"#\" class=\"btn btn-sm btn-soft-primary\" id=\"edit-event-btn\" data-id=\"edit-event\" onclick=\"editEvent(this)\" role=\"button\">Edit</a>
                                                </div>
                                                <div class=\"event-details\">
                                                    <div class=\"d-flex mb-2\">
                                                        <div class=\"flex-grow-1 d-flex align-items-center\">
                                                            <div class=\"flex-shrink-0 me-3\">
                                                                <i class=\"ri-calendar-event-line text-muted fs-16\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"d-block fw-semibold mb-0\" id=\"event-start-date-tag\"></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"d-flex align-items-center mb-2\">
                                                        <div class=\"flex-shrink-0 me-3\">
                                                            <i class=\"ri-time-line text-muted fs-16\"></i>
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <h6 class=\"d-block fw-semibold mb-0\"><span id=\"event-timepicker1-tag\"></span> - <span id=\"event-timepicker2-tag\"></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class=\"d-flex align-items-center mb-2\">
                                                        <div class=\"flex-shrink-0 me-3\">
                                                            <i class=\"ri-map-pin-line text-muted fs-16\"></i>
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <h6 class=\"d-block fw-semibold mb-0\"> <span id=\"event-location-tag\"></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class=\"d-flex mb-3\">
                                                        <div class=\"flex-shrink-0 me-3\">
                                                            <i class=\"ri-discuss-line text-muted fs-16\"></i>
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <p class=\"d-block text-muted mb-0\" id=\"event-description-tag\"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row event-form\">
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label class=\"form-label\">Type</label>
                                                            <select class=\"form-select d-none\" name=\"category\" id=\"event-category\" required>
                                                                <option value=\"bg-danger-subtle\">Danger</option>
                                                                <option value=\"bg-success-subtle\">Success</option>
                                                                <option value=\"bg-primary-subtle\">Primary</option>
                                                                <option value=\"bg-info-subtle\">Info</option>
                                                                <option value=\"bg-dark-subtle\">Dark</option>
                                                                <option value=\"bg-warning-subtle\">Warning</option>
                                                            </select>
                                                            <div class=\"invalid-feedback\">Please select a valid event category</div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label class=\"form-label\">Event Name</label>
                                                            <input class=\"form-control d-none\" placeholder=\"Enter event name\" type=\"text\" name=\"title\" id=\"event-title\" required value=\"\" />
                                                            <div class=\"invalid-feedback\">Please provide a valid event name</div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label>Event Date</label>
                                                            <div class=\"input-group d-none\">
                                                                <input type=\"text\" id=\"event-start-date\" class=\"form-control flatpickr flatpickr-input\" placeholder=\"Select date\" readonly required>
                                                                <span class=\"input-group-text\"><i class=\"ri-calendar-event-line\"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class=\"col-12\" id=\"event-time\">
                                                        <div class=\"row\">
                                                            <div class=\"col-6\">
                                                                <div class=\"mb-3\">
                                                                    <label class=\"form-label\">Start Time</label>
                                                                    <div class=\"input-group d-none\">
                                                                        <input id=\"timepicker1\" type=\"text\" class=\"form-control flatpickr flatpickr-input\" placeholder=\"Select start time\" readonly>
                                                                        <span class=\"input-group-text\"><i class=\"ri-time-line\"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-6\">
                                                                <div class=\"mb-3\">
                                                                    <label class=\"form-label\">End Time</label>
                                                                    <div class=\"input-group d-none\">
                                                                        <input id=\"timepicker2\" type=\"text\" class=\"form-control flatpickr flatpickr-input\" placeholder=\"Select end time\" readonly>
                                                                        <span class=\"input-group-text\"><i class=\"ri-time-line\"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label for=\"event-location\">Location</label>
                                                            <div>
                                                                <input type=\"text\" class=\"form-control d-none\" name=\"event-location\" id=\"event-location\" placeholder=\"Event location\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <input type=\"hidden\" id=\"eventid\" name=\"eventid\" value=\"\" />
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label class=\"form-label\">Description</label>
                                                            <textarea class=\"form-control d-none\" id=\"event-description\" placeholder=\"Enter a description\" rows=\"3\" spellcheck=\"false\"></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                                <div class=\"hstack gap-2 justify-content-end\">
                                                    <button type=\"button\" class=\"btn btn-soft-danger\" id=\"btn-delete-event\"><i class=\"ri-close-line align-bottom\"></i> Delete</button>
                                                    <button type=\"submit\" class=\"btn btn-success\" id=\"btn-save-event\">Add Event</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- end modal-content-->
                                </div> <!-- end modal dialog-->
                            </div> <!-- end modal-->
                            <!-- end modal-->
                        </div>
                    </div> <!-- end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            ";
        // line 234
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    ";
        // line 241
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "

    ";
        // line 243
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "

    <!-- calendar min js -->
    <script src=\"assets/libs/fullcalendar/index.global.min.js\"></script>

    <!-- Calendar init -->
    <script src=\"assets/js/pages/calendar-month-grid.init.js\"></script>

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
        return "apps-calendar-month-grid.html.twig";
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
        return array (  306 => 243,  301 => 241,  291 => 234,  80 => 26,  67 => 16,  55 => 7,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}

<head>

    {{ include('partials/title-meta.html.twig', {title: 'Month Grid Calendar'}) }}

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

                        {{ include('partials/page-title.html.twig', {pagetitle: 'Apps', title: 'Month Grid'}) }}

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-xl-3\">
                                    <div class=\"card card-h-100\">
                                        <div class=\"card-body\">
                                            <button class=\"btn btn-primary w-100\" id=\"btn-new-event\"><i class=\"mdi mdi-plus\"></i> Create New Event</button>

                                            <div id=\"external-events\">
                                                <br>
                                                <p class=\"text-muted\">Drag and drop your event or click in the calendar</p>
                                                <div class=\"external-event fc-event bg-success-subtle text-success\" data-class=\"bg-success-subtle\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle me-2\"></i>New Event Planning
                                                </div>
                                                <div class=\"external-event fc-event bg-info-subtle text-info\" data-class=\"bg-info-subtle\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle me-2\"></i>Meeting
                                                </div>
                                                <div class=\"external-event fc-event bg-warning-subtle text-warning\" data-class=\"bg-warning-subtle\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle me-2\"></i>Generating Reports
                                                </div>
                                                <div class=\"external-event fc-event bg-danger-subtle text-danger\" data-class=\"bg-danger-subtle\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle me-2\"></i>Create New theme
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <h5 class=\"mb-1\">Upcoming Events</h5>
                                        <p class=\"text-muted\">Don't miss scheduled events</p>
                                        <div class=\"pe-2 me-n1 mb-3\" data-simplebar style=\"height: 400px\">
                                            <div id=\"upcoming-event-list\"></div>
                                        </div>
                                    </div>

                                    <div class=\"card\">
                                        <div class=\"card-body bg-info-subtle\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0\">
                                                    <i data-feather=\"calendar\" class=\"text-info icon-dual-info\"></i>
                                                </div>
                                                <div class=\"flex-grow-1 ms-3\">
                                                    <h6 class=\"fs-15\">Welcome to your Calendar!</h6>
                                                    <p class=\"text-muted mb-0\">Event that applications book will appear here. Click on an event to see the details and manage applicants event.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-->
                                </div> <!-- end col-->

                                <div class=\"col-xl-9\">
                                    <div class=\"card card-h-100\">
                                        <div class=\"card-body\">
                                            <div id=\"calendar\"></div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!--end row-->

                            <div style='clear:both'></div>

                            <!-- Add New Event MODAL -->
                            <div class=\"modal fade\" id=\"event-modal\" tabindex=\"-1\">
                                <div class=\"modal-dialog modal-dialog-centered\">
                                    <div class=\"modal-content border-0\">
                                        <div class=\"modal-header p-3 bg-info-subtle\">
                                            <h5 class=\"modal-title\" id=\"modal-title\">Event</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-hidden=\"true\"></button>
                                        </div>
                                        <div class=\"modal-body p-4\">
                                            <form class=\"needs-validation\" name=\"event-form\" id=\"form-event\" novalidate>
                                                <div class=\"text-end\">
                                                    <a href=\"#\" class=\"btn btn-sm btn-soft-primary\" id=\"edit-event-btn\" data-id=\"edit-event\" onclick=\"editEvent(this)\" role=\"button\">Edit</a>
                                                </div>
                                                <div class=\"event-details\">
                                                    <div class=\"d-flex mb-2\">
                                                        <div class=\"flex-grow-1 d-flex align-items-center\">
                                                            <div class=\"flex-shrink-0 me-3\">
                                                                <i class=\"ri-calendar-event-line text-muted fs-16\"></i>
                                                            </div>
                                                            <div class=\"flex-grow-1\">
                                                                <h6 class=\"d-block fw-semibold mb-0\" id=\"event-start-date-tag\"></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"d-flex align-items-center mb-2\">
                                                        <div class=\"flex-shrink-0 me-3\">
                                                            <i class=\"ri-time-line text-muted fs-16\"></i>
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <h6 class=\"d-block fw-semibold mb-0\"><span id=\"event-timepicker1-tag\"></span> - <span id=\"event-timepicker2-tag\"></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class=\"d-flex align-items-center mb-2\">
                                                        <div class=\"flex-shrink-0 me-3\">
                                                            <i class=\"ri-map-pin-line text-muted fs-16\"></i>
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <h6 class=\"d-block fw-semibold mb-0\"> <span id=\"event-location-tag\"></span></h6>
                                                        </div>
                                                    </div>
                                                    <div class=\"d-flex mb-3\">
                                                        <div class=\"flex-shrink-0 me-3\">
                                                            <i class=\"ri-discuss-line text-muted fs-16\"></i>
                                                        </div>
                                                        <div class=\"flex-grow-1\">
                                                            <p class=\"d-block text-muted mb-0\" id=\"event-description-tag\"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row event-form\">
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label class=\"form-label\">Type</label>
                                                            <select class=\"form-select d-none\" name=\"category\" id=\"event-category\" required>
                                                                <option value=\"bg-danger-subtle\">Danger</option>
                                                                <option value=\"bg-success-subtle\">Success</option>
                                                                <option value=\"bg-primary-subtle\">Primary</option>
                                                                <option value=\"bg-info-subtle\">Info</option>
                                                                <option value=\"bg-dark-subtle\">Dark</option>
                                                                <option value=\"bg-warning-subtle\">Warning</option>
                                                            </select>
                                                            <div class=\"invalid-feedback\">Please select a valid event category</div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label class=\"form-label\">Event Name</label>
                                                            <input class=\"form-control d-none\" placeholder=\"Enter event name\" type=\"text\" name=\"title\" id=\"event-title\" required value=\"\" />
                                                            <div class=\"invalid-feedback\">Please provide a valid event name</div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label>Event Date</label>
                                                            <div class=\"input-group d-none\">
                                                                <input type=\"text\" id=\"event-start-date\" class=\"form-control flatpickr flatpickr-input\" placeholder=\"Select date\" readonly required>
                                                                <span class=\"input-group-text\"><i class=\"ri-calendar-event-line\"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class=\"col-12\" id=\"event-time\">
                                                        <div class=\"row\">
                                                            <div class=\"col-6\">
                                                                <div class=\"mb-3\">
                                                                    <label class=\"form-label\">Start Time</label>
                                                                    <div class=\"input-group d-none\">
                                                                        <input id=\"timepicker1\" type=\"text\" class=\"form-control flatpickr flatpickr-input\" placeholder=\"Select start time\" readonly>
                                                                        <span class=\"input-group-text\"><i class=\"ri-time-line\"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-6\">
                                                                <div class=\"mb-3\">
                                                                    <label class=\"form-label\">End Time</label>
                                                                    <div class=\"input-group d-none\">
                                                                        <input id=\"timepicker2\" type=\"text\" class=\"form-control flatpickr flatpickr-input\" placeholder=\"Select end time\" readonly>
                                                                        <span class=\"input-group-text\"><i class=\"ri-time-line\"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label for=\"event-location\">Location</label>
                                                            <div>
                                                                <input type=\"text\" class=\"form-control d-none\" name=\"event-location\" id=\"event-location\" placeholder=\"Event location\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <input type=\"hidden\" id=\"eventid\" name=\"eventid\" value=\"\" />
                                                    <div class=\"col-12\">
                                                        <div class=\"mb-3\">
                                                            <label class=\"form-label\">Description</label>
                                                            <textarea class=\"form-control d-none\" id=\"event-description\" placeholder=\"Enter a description\" rows=\"3\" spellcheck=\"false\"></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                                <div class=\"hstack gap-2 justify-content-end\">
                                                    <button type=\"button\" class=\"btn btn-soft-danger\" id=\"btn-delete-event\"><i class=\"ri-close-line align-bottom\"></i> Delete</button>
                                                    <button type=\"submit\" class=\"btn btn-success\" id=\"btn-save-event\">Add Event</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- end modal-content-->
                                </div> <!-- end modal dialog-->
                            </div> <!-- end modal-->
                            <!-- end modal-->
                        </div>
                    </div> <!-- end row-->

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

    <!-- calendar min js -->
    <script src=\"assets/libs/fullcalendar/index.global.min.js\"></script>

    <!-- Calendar init -->
    <script src=\"assets/js/pages/calendar-month-grid.init.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/app.js\"></script>
</body>

</html>", "apps-calendar-month-grid.html.twig", "/home/waldi/myapp2/templates/apps-calendar-month-grid.html.twig");
    }
}
