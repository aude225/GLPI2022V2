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

/* components/itilobject/fields/global_validation.html.twig */
class __TwigTemplate_7cada1ab7f0fb83a904184931e12ab92 extends Template
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
        // line 31
        echo "
";
        // line 32
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields/global_validation.html.twig", 32)->unwrap();
        // line 33
        echo "
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "global_validation"], "method", false, false, false, 34)) {
            // line 35
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35)) {
                // line 36
                echo "      ";
                $context["validation_right"] = "";
                // line 37
                echo "      ";
                if ((((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE")) && Session::haveRight("ticketvalidation", twig_constant("TicketValidation::CREATEINCIDENT")))) {
                    // line 38
                    echo "         ";
                    $context["validation_right"] = "validate_incident";
                    // line 39
                    echo "      ";
                }
                // line 40
                echo "      ";
                if ((((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE")) && Session::haveRight("ticketvalidation", twig_constant("TicketValidation::CREATEREQUEST")))) {
                    // line 41
                    echo "         ";
                    $context["validation_right"] = "validate_request";
                    // line 42
                    echo "      ";
                }
                // line 43
                echo "
      ";
                // line 44
                $context["required"] = [];
                // line 45
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 45), "isMandatoryField", [0 => "_add_validation"], "method", false, false, false, 45)) {
                    // line 46
                    echo "         ";
                    $context["required"] = ["required" => true];
                    // line 49
                    echo "      ";
                }
                // line 50
                echo "
      ";
                // line 51
                echo twig_call_macro($macros["fields"], "macro_field", ["_add_validation", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("TicketValidation::dropdownValidator", [0 => twig_array_merge(["name" => "users_id_validate", "entity" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,                 // line 55
($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["entities_id"] ?? null) : null), "right" =>                 // line 56
($context["validation_right"] ?? null), "users_id_validate" => (($__internal_compile_3 =                 // line 57
($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["users_id_validate"] ?? null) : null), "display" => false, "disabled" =>  !                // line 59
($context["canupdate"] ?? null)],                 // line 60
($context["required"] ?? null))]), __("Approval request"),                 // line 62
($context["field_options"] ?? null)], 51, $context, $this->getSourceContext());
                // line 63
                echo "

      <input type=\"hidden\" name=\"_add_validation\" value=\"";
                // line 65
                echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["_add_validation"] ?? null) : null), "html", null, true);
                echo "\" />
   ";
            } else {
                // line 67
                echo "        ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "global_validation"], "method", false, false, false, 67)) {
                    // line 68
                    echo "            ";
                    echo twig_call_macro($macros["fields"], "macro_htmlField", ["global_validation", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("TicketValidation::getStatus", [0 => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,                     // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["global_validation"] ?? null) : null), 1 => true]), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILValidation"), ["full_width" => true]], 68, $context, $this->getSourceContext());
                    // line 75
                    echo "
        ";
                }
                // line 77
                echo "   ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/fields/global_validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 77,  112 => 75,  110 => 70,  108 => 68,  105 => 67,  100 => 65,  96 => 63,  94 => 62,  93 => 60,  92 => 59,  91 => 57,  90 => 56,  89 => 55,  88 => 51,  85 => 50,  82 => 49,  79 => 46,  76 => 45,  74 => 44,  71 => 43,  68 => 42,  65 => 41,  62 => 40,  59 => 39,  56 => 38,  53 => 37,  50 => 36,  47 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields/global_validation.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\fields\\global_validation.html.twig");
    }
}
