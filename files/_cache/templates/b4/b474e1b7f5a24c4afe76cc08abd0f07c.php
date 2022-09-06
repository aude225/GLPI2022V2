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

/* components/itilobject/timeline/pending_reasons_messages.html.twig */
class __TwigTemplate_a088774a55f801f290e9bca15f749b1c extends Template
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
        $context["pending_reason_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [0 => ($context["item"] ?? null)]);
        // line 33
        $context["pending_item"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(((($__internal_compile_0 = ($context["entry"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) . "::getById"), [0 => (($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null)]);
        // line 34
        $context["pending_reason_item"] = ((($context["pending_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [0 => ($context["pending_item"] ?? null)])) : (false));
        // line 35
        $context["pending_reason"] = ((($context["pending_reason_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["pendingreasons_id"] ?? null) : null)])) : (false));
        // line 36
        echo "
";
        // line 37
        if (($context["pending_reason"] ?? null)) {
            // line 38
            echo "   <span class=\"badge bg-blue-lt\">
      <i class=\"fas fa-pause me-1\"></i>
      ";
            // line 40
            echo twig_sprintf(__("Pending: %s"), twig_get_attribute($this->env, $this->source, ($context["pending_reason"] ?? null), "getLink", [], "method", false, false, false, 40));
            echo "

      ";
            // line 42
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [0 =>             // line 43
($context["item"] ?? null), 1 =>             // line 44
($context["pending_item"] ?? null)])) {
                // line 46
                echo "         ";
                $context["next_bump"] = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getNextFollowupDate", [], "method", false, false, false, 46);
                // line 47
                echo "         ";
                if (($context["next_bump"] ?? null)) {
                    // line 48
                    echo "
            <i class=\"fas fa-clock ms-2\" title=\"";
                    // line 49
                    echo twig_escape_filter($this->env, twig_sprintf(__("Next automatic follow-up scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [0 => ($context["next_bump"] ?? null)])), "html", null, true);
                    echo "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 52
                echo "
         ";
                // line 53
                $context["resolve"] = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getAutoResolvedate", [], "method", false, false, false, 53);
                // line 54
                echo "         ";
                if (($context["resolve"] ?? null)) {
                    // line 55
                    echo "            <i class=\"fas fa-stop ms-2\" title=\"";
                    echo twig_escape_filter($this->env, twig_sprintf(__("Automatic resolution scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [0 => ($context["next_bump"] ?? null)])), "html", null, true);
                    echo "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 58
                echo "      ";
            }
            // line 59
            echo "   </span>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 59,  96 => 58,  89 => 55,  86 => 54,  84 => 53,  81 => 52,  75 => 49,  72 => 48,  69 => 47,  66 => 46,  64 => 44,  63 => 43,  62 => 42,  57 => 40,  53 => 38,  51 => 37,  48 => 36,  46 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/pending_reasons_messages.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\pending_reasons_messages.html.twig");
    }
}
