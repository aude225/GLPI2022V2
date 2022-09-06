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

/* components/logs.html.twig */
class __TwigTemplate_338293552b339f8d7011238b59d53e39 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/logs.html.twig", 32)->unwrap();
        // line 33
        echo "
";
        // line 34
        if ((($context["total_number"] ?? null) < 1)) {
            // line 35
            echo "   <div class=\"alert alert-info\">
      ";
            // line 36
            echo twig_escape_filter($this->env, __("No historical"), "html", null, true);
            echo "
   </div>
";
        } else {
            // line 39
            echo "
   ";
            // line 40
            echo twig_include($this->env, $context, "components/pager.html.twig", ["count" => ($context["filtered_number"] ?? null)]);
            echo "
   <div class=\"table-responsive\">
   <table class=\"table table-hover\">
      <thead>
         <tr>
            <th>";
            // line 45
            echo twig_escape_filter($this->env, __("ID"), "html", null, true);
            echo "</th>
            <th>";
            // line 46
            echo twig_escape_filter($this->env, _n("Date", "Dates", 1), "html", null, true);
            echo "</th>
            <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "</th>
            <th>";
            // line 48
            echo twig_escape_filter($this->env, _n("Field", "Fields", 1), "html", null, true);
            echo "</th>
            <th>";
            // line 49
            echo twig_escape_filter($this->env, _x("name", "Update"), "html", null, true);
            echo "</th>
            <th>
               <span class=\"float-end log-toolbar mb-0\">
                  <button class=\"btn btn-sm show_log_filters ";
            // line 52
            echo (((twig_length_filter($this->env, ($context["filters"] ?? null)) > 0)) ? ("btn-secondary active") : ("btn-outline-secondary"));
            echo "\">
                     <i class=\"fas fa-filter\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 54
            echo twig_escape_filter($this->env, __("Filter"), "html", null, true);
            echo "</span>
                  </button>
                  <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["csv_url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-sm text-capitalize btn-icon btn-outline-secondary\">
                     <i class=\"fas fa-file-download\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 58
            echo twig_escape_filter($this->env, __("Export"), "html", null, true);
            echo "</span>
                  </a>
               </span>
            </th>
         </tr>

         ";
            // line 64
            if ((twig_length_filter($this->env, ($context["filters"] ?? null)) > 0)) {
                // line 65
                echo "         <tr class=\"log_history_filter_row\">
            <td>
               <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, ($context["items_id"] ?? null), "html", null, true);
                echo "\" />
            </td>
            <td>
               ";
                // line 71
                echo twig_call_macro($macros["fields"], "macro_dateField", ["filters[date]", (($__internal_compile_0 =                 // line 73
($context["filters"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["date"] ?? null) : null), "", ["no_label" => true, "full_width" => true, "mb" => ""]], 71, $context, $this->getSourceContext());
                // line 80
                echo "
            </td>
            <td>
               <select name=\"filters[users_names][]\" class=\"form-select logs-filter-select-mulitple\" multiple>
                  ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["user_names"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["username"]) {
                    // line 85
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["value"]), "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "users_names", [], "array", true, true, false, 85) && twig_in_filter($context["value"], (($__internal_compile_1 = ($context["filters"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["users_names"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["username"]), "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['username'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "               </select>
            </td>
            <td>
               <select name=\"filters[affected_fields][]\" class=\"form-select logs-filter-select-mulitple\" multiple>
                  ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["affected_fields"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["field"]) {
                    // line 94
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "affected_fields", [], "array", true, true, false, 94) && twig_in_filter($context["value"], (($__internal_compile_2 = ($context["filters"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["affected_fields"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 95
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "               </select>
            </td>
            <td colspan=\"2\">
               <select name=\"filters[linked_actions][]\" class=\"form-select logs-filter-select-mulitple\" multiple>
                  ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["linked_actions"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["action"]) {
                    // line 103
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "linked_actions", [], "array", true, true, false, 103) && twig_in_filter($context["value"], (($__internal_compile_3 = ($context["filters"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["linked_actions"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 104
                    echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "               </select>
            </td>
         </tr>
         ";
            }
            // line 111
            echo "
      </thead>
      <tbody>
      ";
            // line 114
            if ((($context["filtered_number"] ?? null) < 1)) {
                // line 115
                echo "         <tr><td colspan=\"6\">";
                echo twig_escape_filter($this->env, __("No historical matching your filters"), "html", null, true);
                echo "</td></tr>
      ";
            } else {
                // line 117
                echo "         ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 118
                    echo "            <tr>
               <td>";
                    // line 119
                    echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["entry"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null), "html", null, true);
                    echo "</td>
               <td>";
                    // line 120
                    echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["entry"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["date_mod"] ?? null) : null), "html", null, true);
                    echo "</td>
               <td>";
                    // line 121
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_6 = $context["entry"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["user_name"] ?? null) : null)), "html", null, true);
                    echo "</td>
               <td>";
                    // line 122
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_7 = $context["entry"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["field"] ?? null) : null)), "html", null, true);
                    echo "</td>
               <td colspan=\"2\" style=\"width: 60%\">";
                    // line 123
                    echo (($__internal_compile_8 = $context["entry"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["change"] ?? null) : null);
                    echo "</td>
            </tr>
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "      ";
            }
            // line 127
            echo "      </tbody>
   </table>
   </div>";
            // line 130
            echo "
   ";
            // line 131
            $context["limitdropdown"] = twig_include($this->env, $context, "components/dropdown/limit.html.twig");
            // line 132
            echo "   <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block mb-2\">
      ";
            // line 133
            echo twig_sprintf(__("Show %s entries"), ($context["limitdropdown"] ?? null));
            echo "
   </div>
";
        }
        // line 136
        echo "


<script type=\"text/javascript\">
\$(function() {
   \$('.logs-filter-select-mulitple').select2();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 136,  274 => 133,  271 => 132,  269 => 131,  266 => 130,  262 => 127,  259 => 126,  250 => 123,  246 => 122,  242 => 121,  238 => 120,  234 => 119,  231 => 118,  226 => 117,  220 => 115,  218 => 114,  213 => 111,  207 => 107,  198 => 104,  191 => 103,  187 => 102,  181 => 98,  172 => 95,  165 => 94,  161 => 93,  155 => 89,  146 => 86,  139 => 85,  135 => 84,  129 => 80,  127 => 73,  126 => 71,  120 => 68,  115 => 65,  113 => 64,  104 => 58,  99 => 56,  94 => 54,  89 => 52,  83 => 49,  79 => 48,  75 => 47,  71 => 46,  67 => 45,  59 => 40,  56 => 39,  50 => 36,  47 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/logs.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\logs.html.twig");
    }
}
