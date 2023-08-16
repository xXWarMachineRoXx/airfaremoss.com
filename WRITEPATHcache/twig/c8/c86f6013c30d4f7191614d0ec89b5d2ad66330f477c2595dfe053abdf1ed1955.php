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

/* sm-inc.twig */
class __TwigTemplate_7318554e00766c0a5da346d89bd9f9e75e0aacb1f0961ec4b5a5e8ce80f9697d extends Template
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
        // line 1
        echo "<div class=\"right-side-card p-3\"
    style=\"background:#f7f7f7 url(frontend/images/flight-booking01.png) no-repeat left center; background-size:cover;\">
    <div class=\"text-black\">
        <b class='text-black'>Need help with a booking?</b><br>On <span class=\"airline-name\">Airlines</span> Tickets Booking With Our
        Travel Experts
    </div>

    <div class=\"row\">
        <div class=\"col-12 col-md-6\">
        </div>
        <div class=\"col-12 col-md-6\">
            <div class=\"for-changes\">
                <a href=\"tel:+1 844-304-9595\">
                    <span ><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> Booking</span>
                    <span><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> Changes</span>
                    <span><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> Cancellation</span>
                    <span><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> Assistance</span>
                    <strong></strong></a><strong class=\"\"><a href=\"tel:<?= TFN ?>\" class=\"tfnpay\"><i class=\"fa fa-phone\"
                            aria-hidden=\"true\"></i></a>
                    <p>(TOLL-FREE)</p>
                </strong>
            </div>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "sm-inc.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sm-inc.twig", "C:\\xampp\\htdocs\\airfaremoss.com\\application\\views\\sm-inc.twig");
    }
}
