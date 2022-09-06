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

/* components/form/inventory_info.html.twig */
class __TwigTemplate_981c8ab7cecc711fdcf14508d34d99e2 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDynamic", [], "method", false, false, false, 32) != false)) {
            // line 33
            echo "<div class=\"card m-n2 border-0 shadow-none\">
   <div class=\"card-header\">
      <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
         <i class=\"fas fa-cloud-download-alt\"></i>
      </div>
      <h4 class=\"card-title ps-4\">
         ";
            // line 39
            echo twig_escape_filter($this->env, __("Inventory information"), "html", null, true);
            echo "
      </h4>
      ";
            // line 41
            $context["inventory_filename"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryFileName", [0 => false], "method", false, false, false, 41)) : (null));
            // line 42
            echo "      ";
            if ( !(null === ($context["inventory_filename"] ?? null))) {
                // line 43
                echo "         <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/document.send.php?file=_inventory/" . ($context["inventory_filename"] ?? null))), "html", null, true);
                echo "\"
            class=\"btn btn-sm btn-secondary ms-auto\" target=\"_blank\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            title=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_sprintf(__("Download \"%1\$s\" inventory file"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["item"] ?? null))), "html", null, true);
                echo "\">
            <i class=\"fas fa-download\"></i>
         </a>
      ";
            } else {
                // line 50
                echo "         <span class=\"ms-auto\" title=\"";
                echo twig_escape_filter($this->env, __("Inventory file missing"), "html", null, true);
                echo "\">
            <i class=\"fas fa-ban\"></i>
            <span class=\"visually-hidden\">";
                // line 52
                echo twig_escape_filter($this->env, __("Inventory file missing"), "html", null, true);
                echo "</span>
         </span>
      ";
            }
            // line 55
            echo "   </div>
   ";
            // line 56
            $context["agent"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 56)) : (null));
            // line 57
            echo "   ";
            if ( !(null === ($context["agent"] ?? null))) {
                // line 58
                echo "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "getTypeName", [], "method", false, false, false, 60), "html", null, true);
                echo "</label>
            <span>
               <i class=\"";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "getIcon", [], "method", false, false, false, 62), "html", null, true);
                echo "\"></i>
               ";
                // line 63
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink(($context["agent"] ?? null));
                echo "
            </span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 68
                echo twig_escape_filter($this->env, __("Useragent"), "html", null, true);
                echo "</label>
            <span>";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["useragent"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 73
                echo twig_escape_filter($this->env, __("Inventory tag"), "html", null, true);
                echo "</label>
            <span>";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 74)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tag"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 78
                echo twig_escape_filter($this->env, __("Last inventory"), "html", null, true);
                echo "</label>
            <span>";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["last_contact"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >
               ";
                // line 84
                echo twig_escape_filter($this->env, __("Agent status"), "html", null, true);
                echo "
               <i id=\"update-status\" class=\"fas fa-sync\" role=\"button\" title=\"";
                // line 85
                echo twig_escape_filter($this->env, __("Ask agent about its current status"), "html", null, true);
                echo "\"></i>
            </label>
            <span id='agent_status'>";
                // line 87
                echo twig_escape_filter($this->env, __("Unknown"), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >
               ";
                // line 92
                echo twig_escape_filter($this->env, __("Request inventory"), "html", null, true);
                echo "
               <i id=\"update-inventory\" class=\"fas fa-sync\" role=\"button\" title=\"";
                // line 93
                echo twig_escape_filter($this->env, __("Request agent to proceed an new inventory"), "html", null, true);
                echo "\"></i>
            </label>
            <span id='inventory_status'>";
                // line 95
                echo twig_escape_filter($this->env, __("Unknown"), "html", null, true);
                echo "</span>
         </div>
      </div>

      <script>
      \$(function () {
         \$('#update-status').on('click', function() {
            var icon = \$(this);
            icon.addClass('fa-spin');
            \$.ajax({
               type: 'POST',
               url: '";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/agent.php"), "html", null, true);
                echo "',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 110
                echo twig_escape_filter($this->env, twig_constant("Agent::ACTION_STATUS"), "html", null, true);
                echo "',
                  id: '";
                // line 111
                echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null), "html", null, true);
                echo "'
               },
               success: function(json) {
                  \$('#agent_status').html(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });

         \$('#update-inventory').on('click', function() {
            var icon = \$(this);
            icon.addClass(\"fa-spin\");
            \$.ajax({
               type: 'POST',
               url: '";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/agent.php"), "html", null, true);
                echo "',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 131
                echo twig_escape_filter($this->env, twig_constant("Agent::ACTION_INVENTORY"), "html", null, true);
                echo "',
                  id: '";
                // line 132
                echo twig_escape_filter($this->env, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null), "html", null, true);
                echo "'
               },
               success: function(json) {
                  \$('#inventory_status').html(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });
      });
      </script>
   ";
            }
            // line 145
            echo "   ";
            if ((((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 145)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null) > 0) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_dynamic"], "method", false, false, false, 145))) {
                // line 146
                echo "      ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::AUTOINVENTORY_INFORMATION"), ($context["item"] ?? null)), "html", null, true);
                echo "
   ";
            }
            // line 148
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/form/inventory_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 148,  249 => 146,  246 => 145,  230 => 132,  226 => 131,  219 => 127,  200 => 111,  196 => 110,  189 => 106,  175 => 95,  170 => 93,  166 => 92,  158 => 87,  153 => 85,  149 => 84,  141 => 79,  137 => 78,  130 => 74,  126 => 73,  119 => 69,  115 => 68,  107 => 63,  103 => 62,  98 => 60,  94 => 58,  91 => 57,  89 => 56,  86 => 55,  80 => 52,  74 => 50,  67 => 46,  60 => 43,  57 => 42,  55 => 41,  50 => 39,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/inventory_info.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\inventory_info.html.twig");
    }
}
