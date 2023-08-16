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

/* test.twig */
class __TwigTemplate_366266a92423262e15ed8cf7d656274031559a302846d8de4da390c1f188f2dd extends Template
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
        // line 2
        $context["airlineName"] = "Central Mountain Air";
        // line 3
        $context["imageName"] = "cma.png";
        // line 4
        $context["content1"] = "Established in 1987, Central Mountain Air (CMA) is a western Canadian privately owned and operated company. CMA offers scheduled and charter flights across a unique network connecting communities throughout British Columbia and Alberta and operates a fleet of Beechcraft 1900Ds, Dornier 328s and De Havilland Dash 8 aircraft.";
        // line 5
        echo "

<!DOCTYPE html>
<html>
<head>
    <title>Book Cheap Flight Ticket on ";
        // line 10
        echo twig_escape_filter($this->env, ($context["airlineName"] ?? null), "html", null, true);
        echo " | Get Cheap Flight Deal ";
        echo twig_escape_filter($this->env, ($context["airlineName"] ?? null), "html", null, true);
        echo " - Airfaremoss</title>
    <meta name=\"keywords\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["airlineName"] ?? null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, ($context["airlineName"] ?? null), "html", null, true);
        echo " Flights, ";
        echo twig_escape_filter($this->env, ($context["airlineName"] ?? null), "html", null, true);
        echo " Reservations, ...\">
    <meta name=\"description\" content=\"Find cheap flight at Airfaremoss. Get the best fares With US - call us @ TFN\">
</head>
<body>
    <div id=\"header-wrapper\" class=\"wrap-inpg py-4 py-md-5\" style=\"background-image: url('/airfaremoss.com/frontend/images/";
        // line 15
        echo twig_escape_filter($this->env, ($context["imageName"] ?? null), "html", null, true);
        echo "'); background-position: center; background-no-repeat: no-repeat; background-size: cover;\">
        ";
        // line 17
        echo "        ";
        echo twig_include($this->env, $context, "includes/api-banner.twig");
        echo "
    </div>
    
    <div class=\"whysky mb-4 mb-md-5\">
        ";
        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "includes/deals.twig");
        echo "
    </div>
    
    <div class=\"container mb-3 mb-md-4\">
        <div class=\"flight-list\">
            <div class=\"headingtxt mb-3 text-center\">
                <h3 class=\"headh3 txt-ff\"><span>";
        // line 28
        echo twig_escape_filter($this->env, ($context["airlineName"] ?? null), "html", null, true);
        echo "</span> Flight Deals <small>(Round Trip)</small></h3>
                <span class=\"mxw lead text-center center-block txt-ff\" data-aos=\"fade-down\"></span>
            </div>
            <div class=\"row g-3\">
                <div class=\"col-md-8 col-12 fdl\">
                    <div class=\"row g-3\">
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flights"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 35
            echo "                            <div class=\"col-md-6 col-12\">
                                <div class=\"flight-status fs-indx bxd\">
                                    <a title=\"Flight From ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "departure", [], "any", false, false, false, 37), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "arrival", [], "any", false, false, false, 37), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "Result?depart=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "departure", [], "any", false, false, false, 37), "html", null, true);
            echo "&arrival=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "arrival", [], "any", false, false, false, 37), "html", null, true);
            echo "&trip=round&page=1&departOn%5B%5D=";
            echo twig_escape_filter($this->env, ($context["D_DATE"] ?? null), "html", null, true);
            echo "&returnOn=";
            echo twig_escape_filter($this->env, ($context["R_DATE"] ?? null), "html", null, true);
            echo "&adult=1&child=0&infant=0&cabin=ECONOMY&airline=\">
                                        <div class=\"row align-items-center no-gutters\">
                                            <div class=\"col-lg-8 col-8\">
                                                <div class=\"dd-box\">
                                                    ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "departure", [], "any", false, false, false, 41), "html", null, true);
            echo " <i class=\"ti-exchange-vertical\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "arrival", [], "any", false, false, false, 41), "html", null, true);
            echo "<br>
                                                    <span>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                                                    <hr>
                                                    <span>";
            // line 44
            echo twig_escape_filter($this->env, ($context["DR_DATE"] ?? null), "html", null, true);
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-4 col-4\">
                                                <strong>\$";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flight"], "price", [], "any", false, false, false, 48), "html", null, true);
            echo "<i class=\"ti-info-alt price-info\"></i></strong>
                                                <button class=\"bknw\">Book Now</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </div>
                </div>
                <div class=\"col-md-4 col-12\">
                    ";
        // line 60
        echo "                    ";
        echo twig_include($this->env, $context, "sm-inc.twig");
        echo "
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"about-spirit-airlines content-wrap mb-4 mb-md-4\">
        <div class=\"container\">
            <div class=\"headingtxt hdadjt\">
                <div class=\"headh3 txt-ff\">";
        // line 69
        echo twig_escape_filter($this->env, ($context["airlineName"] ?? null), "html", null, true);
        echo "</div>
            </div>
            ";
        // line 72
        echo "            <p>";
        echo twig_escape_filter($this->env, ($context["content1"] ?? null), "html", null, true);
        echo "</p>
            <h3>Destinations</h3>
            <p>Italy, Lithuania, Malta, ... Turkey, and multiple countries.</p>
            <div class=\"all-content\">
                ";
        // line 77
        echo "                <h3>Booking Method</h3>
<p>To book a low-cost flight, passengers must go to the Airfaremoss website. Online flight booking saves money since it may be done without paying a service fee. Nobody needs to travel to the airport to reserve a seat. The most convenient option is to book your <strong>affordable flight tickets online</strong>, but you may also arrange your trip by phoning our reservation number. Call us at <?= TFN ?> to book your flight. To take advantage of the new <strong>low-cost airfare</strong> with all-inclusive facilities, please contact us.&nbsp;</p>
<h3>What distinguishes Airfaremoss as a rare star?</h3>
<p>Airfaremoss may provide you with happiness and smiles at the lowest cost. There are several inexpensive airlines offers available, and you do not need to look hard for them. Booking in advance will help you save money on plane tickets, as last-minute purchases may incur expensive surcharges. If you are planning a family vacation, be sure to let the travel agent know in advance so they can provide you with better bargains that will give you a lovely trip with cost-saving values. Be with us and enjoy a hassle-free <strong>affordable flight journey</strong>.</p>
            </div>
            <a class=\"readmore stmpbtn\" href=\"#\">Read more...</a>
        </div>
    </div>
    
    <div class=\"modal fade best-dealx\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\" data-backdrop=\"static\" data-keyboard=\"false\">
        <div class=\"modal-dialog modal-dialog-centered modal-sm\" role=\"document\">
            <div class=\"modal-content\">
                <button type=\"button\" class=\"close close-btn\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div class=\"modal-body\">
                    <div class=\"pdl text-center\">Book now and save up to \$20!</div>
                    <div class=\"afm-offer-card01 p-3\">
                        <a href=\"tel:";
        // line 95
        echo twig_escape_filter($this->env, ($context["TFN"] ?? null), "html", null, true);
        echo "\" class=\"tfn-url\" title=\"Call Us For Urgent Flights Booking, Changes/Cancellation Or Assistance\">
                            <div class=\"row align-items-top align-items-center mb-0\">
                                <div class=\"col-md-8 col-9 pl-lg-0\">
                                    <div class=\"tc-child-div-s\">
                                        <h3 class=\"afm-call-booking\">Can't find the perfect fare? Let us help you.</h3>
                                        <div class=\"clearfix\"></div>
                                        <span class=\"tcsv\">Don't miss out on unbeatable deals.</span>
                                        <span class=\"tcsv tcsv2\">Call Now</span>
                                        <div class=\"tc-tfn tfnp tfn-no\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> ";
        // line 103
        echo twig_escape_filter($this->env, ($context["TFN"] ?? null), "html", null, true);
        echo "</div>
                                    </div>
                                </div>
                                <div class=\"col-md-4 col-3 offset-sm-1\">
                                    ";
        // line 108
        echo "                                </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .tfn-bottom-section { display: block !important; }
        body { margin-bottom: 45.5px; }
        a { color: #343a40; }
        .modal { top: 0 !important; }
        .rmpc { background: #bd98ff; padding: 15px; }
        .txt01 { display: none; }
    </style>
    
    <script>
        \$('.airline-name').text('";
        // line 126
        echo twig_escape_filter($this->env, ($context["airlineName"] ?? null), "html", null, true);
        echo "');
        \$('.txt02').text('Flight Deals');
    </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "test.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 126,  226 => 108,  219 => 103,  208 => 95,  188 => 77,  180 => 72,  175 => 69,  162 => 60,  157 => 56,  143 => 48,  136 => 44,  131 => 42,  125 => 41,  106 => 37,  102 => 35,  98 => 34,  89 => 28,  79 => 22,  71 => 17,  67 => 15,  56 => 11,  50 => 10,  43 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "test.twig", "C:\\xampp\\htdocs\\airfaremoss.com\\application\\views\\test.twig");
    }
}
