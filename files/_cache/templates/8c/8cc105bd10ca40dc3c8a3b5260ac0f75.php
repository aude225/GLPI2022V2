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

/* components/itilobject/timeline/pending_reasons.html.twig */
class __TwigTemplate_f456b64e23cff90a6f7f92822251c9c3 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/pending_reasons.html.twig", 32)->unwrap();
        // line 33
        echo "
";
        // line 34
        $context["pending_item"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [0 => ($context["subitem"] ?? null), 1 => true]);
        // line 35
        if (((twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "isNewItem", [], "method", false, false, false, 35) || ($context["pending_item"] ?? null)) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastTimelineItem", [0 => ($context["subitem"] ?? null)]))) {
            // line 36
            echo "   <div class=\"row\">
      <div class=\"col-12 col-sm-4\" title=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("PendingReason"), "html", null, true);
            echo "\"
           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
         ";
            // line 39
            $context["pendingreasons_lbl"] = ('' === $tmp = "            <i class=\"fas fa-tags fa-fw\"></i>
         ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            echo "         ";
            ob_start(function () { return ''; });
            // line 43
            echo "            <script>
               var myCollapsible = \$('#pending-reasons-setup-";
            // line 44
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')[0];
               myCollapsible.addEventListener('show.bs.collapse', function () {
                  \$('#pending-reasons-control-";
            // line 46
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').addClass('flex-fill');
               });
               myCollapsible.addEventListener('hide.bs.collapse', function () {
                  \$('#pending-reasons-control-";
            // line 49
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').removeClass('flex-fill');
               });
            </script>
         ";
            $context["pending_reasons_id_script"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            echo "         ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["PendingReason", "pendingreasons_id", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 56
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pendingreasons_id"] ?? null) : null),             // line 57
($context["pendingreasons_lbl"] ?? null), ["label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 61
($context["rand"] ?? null), "mb" => "", "hide_if_no_elements" => true, "addicon" => false, "comments" => false, "width" => "95%", "field_class" => "", "add_field_html" =>             // line 68
($context["pending_reasons_id_script"] ?? null)]], 53, $context, $this->getSourceContext());
            // line 70
            echo "
         <script>
            \$('#dropdown_pendingreasons_id";
            // line 72
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').change(function() {
               var pending_val = \$(this).val();
               if (pending_val > 0) {
                  \$('#pending-reasons-more_options_";
            // line 75
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').addClass('show');
                  \$.ajax({
                     url: '";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/pendingreason.php"), "html", null, true);
            echo "',
                     type: 'POST',
                     data: {
                        pendingreasons_id: pending_val
                     }
                  }).done(function(data) {
                     \$('#dropdown_followup_frequency";
            // line 83
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')
                        .val(data.followup_frequency)
                        .trigger('change');
                     \$('#dropdown_followups_before_resolution";
            // line 86
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')
                        .val(data.followups_before_resolution)
                        .trigger('change');
                  });
               } else {
                  \$('#pending-reasons-more_options_";
            // line 91
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').removeClass('show');
               }
            });
         </script>
      </div>

      <div class=\"collapse col-12 col-sm-8\" id=\"pending-reasons-more_options_";
            // line 97
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
         <div class=\"row\">
            <div class=\"col-12 col-sm-6\" title=\"";
            // line 99
            echo twig_escape_filter($this->env, __("Automatic follow-up"), "html", null, true);
            echo "\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
               ";
            // line 101
            $context["pendingreasons_frequency_field"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::displayFollowupFrequencyfield", [0 => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 102
($context["pending_item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["followup_frequency"] ?? null) : null), 1 => "", 2 => ["rand" =>             // line 105
($context["rand"] ?? null)], 3 => false]);
            // line 109
            echo "               ";
            $context["pendingreasons_frequency_lbl"] = ('' === $tmp = "                  <i class=\"fas fa-redo fa-fw\"></i>
               ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 112
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["followup_frequency",             // line 114
($context["pendingreasons_frequency_field"] ?? null),             // line 115
($context["pendingreasons_frequency_lbl"] ?? null), ["field_class" => "", "label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 120
($context["rand"] ?? null), "mb" => ""]], 112, $context, $this->getSourceContext());
            // line 123
            echo "
            </div>
            <div class=\"col-12 col-sm-6\" title=\"";
            // line 125
            echo twig_escape_filter($this->env, __("Automatic resolution"), "html", null, true);
            echo "\"
                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
               ";
            // line 127
            $context["pendingreasons_resolution_field"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::displayFollowupsNumberBeforeResolutionField", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,             // line 128
($context["pending_item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["followups_before_resolution"] ?? null) : null), 1 => "", 2 => ["rand" =>             // line 131
($context["rand"] ?? null)], 3 => false]);
            // line 135
            echo "               ";
            $context["pendingreasons_resolution_lbl"] = ('' === $tmp = "                  <i class=\"fas fa-check fa-fw\"></i>
               ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 138
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["followups_before_resolution",             // line 140
($context["pendingreasons_resolution_field"] ?? null),             // line 141
($context["pendingreasons_resolution_lbl"] ?? null), ["field_class" => "", "label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 146
($context["rand"] ?? null), "mb" => ""]], 138, $context, $this->getSourceContext());
            // line 149
            echo "
            </div>
         </div>
      </div>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 149,  183 => 146,  182 => 141,  181 => 140,  179 => 138,  175 => 135,  173 => 131,  172 => 128,  171 => 127,  166 => 125,  162 => 123,  160 => 120,  159 => 115,  158 => 114,  156 => 112,  152 => 109,  150 => 105,  149 => 102,  148 => 101,  143 => 99,  138 => 97,  129 => 91,  121 => 86,  115 => 83,  106 => 77,  101 => 75,  95 => 72,  91 => 70,  89 => 68,  88 => 61,  87 => 57,  86 => 56,  84 => 53,  77 => 49,  71 => 46,  66 => 44,  63 => 43,  60 => 42,  57 => 39,  52 => 37,  49 => 36,  47 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/pending_reasons.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\pending_reasons.html.twig");
    }
}
