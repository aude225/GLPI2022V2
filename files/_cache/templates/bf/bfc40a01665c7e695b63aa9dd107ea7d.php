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

/* components/itilobject/service_levels.html.twig */
class __TwigTemplate_3072670ac63b26fdc11cb6f66613a931 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/service_levels.html.twig", 32)->unwrap();
        // line 33
        $macros["modals"] = $this->macros["modals"] = $this->loadTemplate("components/form/modals_macros.html.twig", "components/itilobject/service_levels.html.twig", 33)->unwrap();
        // line 34
        echo "
";
        // line 35
        $context["la_fields"] = [];
        // line 36
        echo "
";
        // line 37
        $context["la_fields"] = twig_array_merge(($context["la_fields"] ?? null), [0 => ["la" =>         // line 39
($context["sla"] ?? null), "type_str" => "sla", "type" => twig_constant("SLM::TTO"), "datefieldname" => "time_to_own", "lafieldname" => "slas_id_tto", "label" => __("TTO"), "helper" => __("Time to own")], 1 => ["la" =>         // line 47
($context["sla"] ?? null), "type_str" => "sla", "type" => twig_constant("SLM::TTR"), "datefieldname" => "time_to_resolve", "lafieldname" => "slas_id_ttr", "label" => __("TTR"), "helper" => __("Time to resolve")]]);
        // line 56
        echo "
";
        // line 57
        $context["la_fields"] = twig_array_merge(($context["la_fields"] ?? null), [0 => ["la" =>         // line 59
($context["ola"] ?? null), "type_str" => "ola", "type" => twig_constant("SLM::TTO"), "datefieldname" => "internal_time_to_own", "lafieldname" => "olas_id_tto", "label" => __("Internal TTO"), "helper" => __("Internal Time to own")], 1 => ["la" =>         // line 67
($context["ola"] ?? null), "type_str" => "ola", "type" => twig_constant("SLM::TTR"), "datefieldname" => "internal_time_to_resolve", "lafieldname" => "olas_id_ttr", "label" => __("Internal TTR"), "helper" => __("Internal Time to resolve")]]);
        // line 76
        echo "

";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["la_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["la_field"]) {
            // line 79
            echo "   ";
            $context["rand"] = twig_random($this->env);
            // line 80
            echo "   ";
            $context["date_displayed"] = ( !twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 80) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 80), "isHiddenField", [0 => twig_get_attribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 80)], "method", false, false, false, 80));
            // line 81
            echo "   ";
            $context["la_displayed"] = ( !twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 81) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 81), "isHiddenField", [0 => twig_get_attribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 81)], "method", false, false, false, 81));
            // line 82
            echo "
   ";
            // line 83
            ob_start(function () { return ''; });
            // line 84
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 84), "getDataForTicket", [0 => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), 1 => twig_get_attribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 84)], "method", false, false, false, 84)) {
                // line 85
                echo "         ";
                if (($context["date_displayed"] ?? null)) {
                    // line 86
                    echo "            <span class=\"text-muted\">
               ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 87)] ?? null) : null)), "html", null, true);
                    echo "
            </span>
         ";
                }
                // line 90
                echo "
         ";
                // line 91
                if (($context["la_displayed"] ?? null)) {
                    // line 92
                    echo "            <span class=\"level_name badge itil-badge bg-secondary ms-1 flex-column flex-sm-row\">
               <span class=\"d-flex align-items-center\">
                  <i class=\"fas fa-stopwatch slt me-1\"></i>
                  <span class=\"text-truncate\"
                        title=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemComment(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 96), "getType", [], "method", false, false, false, 96), (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 96)] ?? null) : null)), "html", null, true);
                    echo "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                     ";
                    // line 98
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 98), "getType", [], "method", false, false, false, 98), (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 98)] ?? null) : null)), "html", null, true);
                    echo "
                  </span>

                  ";
                    // line 101
                    if (($context["canupdate"] ?? null)) {
                        // line 102
                        echo "                     <i class=\"ti ti-x ms-1\" role=\"button\"
                        onclick=\"delete_date_";
                        // line 103
                        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                        echo "(event)\"
                        title=\"";
                        // line 104
                        echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                        echo "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                  ";
                    }
                    // line 107
                    echo "               </span>

               ";
                    // line 109
                    $context["nextaction"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 109), "getNextActionForTicket", [0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 109)], "method", false, false, false, 109);
                    // line 110
                    echo "               ";
                    $context["level"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 110), "getLevelFromAction", [0 => ($context["nextaction"] ?? null)], "method", false, false, false, 110);
                    // line 111
                    echo "               ";
                    if ((($context["level"] ?? null) != false)) {
                        // line 112
                        echo "                  <span class=\"badge bg-info ms-0 ms-sm-1\">
                     <i class=\"fas fa-clock me-1\"
                        title=\"";
                        // line 114
                        echo twig_escape_filter($this->env, twig_sprintf(__("Next escalation: %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["nextaction"] ?? null), "fields", [], "any", false, false, false, 114)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["date"] ?? null) : null))), "html", null, true);
                        echo "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     <span title=\"";
                        // line 116
                        echo twig_escape_filter($this->env, twig_sprintf(__("%1\$s: %2\$s"), _n("Escalation level", "Escalation levels", 1), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["level"] ?? null))), "html", null, true);
                        echo "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        ";
                        // line 118
                        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["level"] ?? null)), "html", null, true);
                        echo "
                     </span>
                  </span>
               ";
                    }
                    // line 122
                    echo "            </span>
            <script type=\"text/javascript\">
               function delete_date_";
                    // line 124
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "(e) {
                  e.preventDefault();

                  var delete_date = 0;
                  if (confirm('";
                    // line 128
                    echo twig_escape_filter($this->env, __("Also delete date?"), "html", null, true);
                    echo "')) {
                     delete_date = 1;
                  }

                  submitGetLink('";
                    // line 132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 132), "html", null, true);
                    echo "', {
                     '";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["la_field"], "type_str", [], "any", false, false, false, 133), "html", null, true);
                    echo "_delete': 1,
                     'id': ";
                    // line 134
                    echo twig_escape_filter($this->env, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
                    echo ",
                     'type': ";
                    // line 135
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 135), "html", null, true);
                    echo ",
                     '_glpi_csrf_token': '";
                    // line 136
                    echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                    echo "',
                     '_glpi_simple_form': 1,
                     'delete_date': delete_date
                  });
               }
            </script>
         ";
                }
                // line 143
                echo "      ";
            } else {
                // line 144
                echo "         <div class=\"d-flex align-items-center flex-wrap\">
            ";
                // line 145
                $context["assign_la_id"] = ("assign_la_" . ($context["rand"] ?? null));
                // line 146
                echo "
            ";
                // line 147
                if (($context["date_displayed"] ?? null)) {
                    // line 148
                    echo "               <div class=\"la_datefield\">
                  ";
                    // line 149
                    echo twig_call_macro($macros["fields"], "macro_datetimeField", [twig_get_attribute($this->env, $this->source,                     // line 150
$context["la_field"], "datefieldname", [], "any", false, false, false, 150), (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,                     // line 151
($context["item"] ?? null), "fields", [], "any", false, false, false, 151)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 151)] ?? null) : null), "", ["include_field" => false, "id" => ("date_" .                     // line 155
($context["assign_la_id"] ?? null)), "disabled" =>  !                    // line 156
($context["canupdate"] ?? null)]], 149, $context, $this->getSourceContext());
                    // line 158
                    echo "
               </div>
            ";
                }
                // line 161
                echo "
            ";
                // line 162
                if (($context["la_displayed"] ?? null)) {
                    // line 163
                    echo "               <div class=\"collapse w-100 mt-1\" id=\"dropdown_";
                    echo twig_escape_filter($this->env, ($context["assign_la_id"] ?? null), "html", null, true);
                    echo "\">
                  ";
                    // line 164
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 165
$context["la_field"], "la", [], "any", false, false, false, 165), "getType", [], "method", false, false, false, 165), twig_get_attribute($this->env, $this->source,                     // line 166
$context["la_field"], "lafieldname", [], "any", false, false, false, 166), (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,                     // line 167
($context["item"] ?? null), "fields", [], "any", false, false, false, 167)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 167)] ?? null) : null), "", ["include_field" => false, "entity" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,                     // line 171
($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" => ["type" => twig_get_attribute($this->env, $this->source,                     // line 172
$context["la_field"], "type", [], "any", false, false, false, 172)], "disabled" =>  !                    // line 173
($context["canupdate"] ?? null), "add_field_class" => ((                    // line 174
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))]], 164, $context, $this->getSourceContext());
                    // line 176
                    echo "
               </div>

               ";
                    // line 179
                    if (($context["canupdate"] ?? null)) {
                        // line 180
                        echo "                  <button class=\"btn btn-sm btn-ghost-secondary ms-1\" type=\"button\"
                        id=\"button_";
                        // line 181
                        echo twig_escape_filter($this->env, ($context["assign_la_id"] ?? null), "html", null, true);
                        echo "\"
                        data-bs-toggle=\"modal\" data-bs-target=\"#";
                        // line 182
                        echo twig_escape_filter($this->env, ($context["assign_la_id"] ?? null), "html", null, true);
                        echo "\"
                        aria-expanded=\"false\" aria-controls=\"";
                        // line 183
                        echo twig_escape_filter($this->env, ($context["assign_la_id"] ?? null), "html", null, true);
                        echo "\">
                     <i class=\"fas fa-stopwatch slt pointer\"
                        title=\"";
                        // line 185
                        echo twig_escape_filter($this->env, __("Assign a SLA"), "html", null, true);
                        echo "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                  </button>

                  ";
                        // line 189
                        echo twig_call_macro($macros["modals"], "macro_confirm", [__("Warning"), twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 191
$context["la_field"], "la", [], "any", false, false, false, 191), "getAddConfirmation", [], "method", false, false, false, 191), "<br />"), ["id" =>                         // line 193
($context["assign_la_id"] ?? null), "confirm_label" => ("<i class=\"fas fa-stopwatch me-1\"></i>" . __("Assign")), "confirm_event" => (("toggleAssignLA_" .                         // line 195
($context["rand"] ?? null)) . "()")]], 189, $context, $this->getSourceContext());
                        // line 197
                        echo "

                  <script type=\"text/javascript\">
                     function toggleAssignLA_";
                        // line 200
                        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                        echo "() {
                        // hide button clicked
                        \$(\"#button_";
                        // line 202
                        echo twig_escape_filter($this->env, ($context["assign_la_id"] ?? null), "html", null, true);
                        echo "\").hide();

                        // hide date field
                        \$(\"#date_";
                        // line 205
                        echo twig_escape_filter($this->env, ($context["assign_la_id"] ?? null), "html", null, true);
                        echo "\").closest('.la_datefield').hide();

                        // show level agreement dropdown
                        var myCollapse = new bootstrap.Collapse(document.getElementById('dropdown_";
                        // line 208
                        echo twig_escape_filter($this->env, ($context["assign_la_id"] ?? null), "html", null, true);
                        echo "'));
                        myCollapse.show();
                     }
                  </script>
               ";
                    }
                    // line 213
                    echo "            ";
                }
                // line 214
                echo "         </div>
      ";
            }
            // line 216
            echo "   ";
            $context["la_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 217
            echo "   ";
            echo twig_call_macro($macros["fields"], "macro_field", [twig_get_attribute($this->env, $this->source,             // line 218
$context["la_field"], "lafieldname", [], "any", false, false, false, 218),             // line 219
($context["la_html"] ?? null), twig_get_attribute($this->env, $this->source,             // line 220
$context["la_field"], "label", [], "any", false, false, false, 220), ["helper" => twig_get_attribute($this->env, $this->source,             // line 222
$context["la_field"], "helper", [], "any", false, false, false, 222), "mb" => "mb-2", "label_class" => "col-auto", "full_width" => true, "is_horizontal" => false, "add_field_class" => ((            // line 227
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))]], 217, $context, $this->getSourceContext());
            // line 229
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['la_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "components/itilobject/service_levels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 229,  341 => 227,  340 => 222,  339 => 220,  338 => 219,  337 => 218,  335 => 217,  332 => 216,  328 => 214,  325 => 213,  317 => 208,  311 => 205,  305 => 202,  300 => 200,  295 => 197,  293 => 195,  292 => 193,  291 => 191,  290 => 189,  283 => 185,  278 => 183,  274 => 182,  270 => 181,  267 => 180,  265 => 179,  260 => 176,  258 => 174,  257 => 173,  256 => 172,  255 => 171,  254 => 167,  253 => 166,  252 => 165,  251 => 164,  246 => 163,  244 => 162,  241 => 161,  236 => 158,  234 => 156,  233 => 155,  232 => 151,  231 => 150,  230 => 149,  227 => 148,  225 => 147,  222 => 146,  220 => 145,  217 => 144,  214 => 143,  204 => 136,  200 => 135,  196 => 134,  192 => 133,  188 => 132,  181 => 128,  174 => 124,  170 => 122,  163 => 118,  158 => 116,  153 => 114,  149 => 112,  146 => 111,  143 => 110,  141 => 109,  137 => 107,  131 => 104,  127 => 103,  124 => 102,  122 => 101,  116 => 98,  111 => 96,  105 => 92,  103 => 91,  100 => 90,  94 => 87,  91 => 86,  88 => 85,  85 => 84,  83 => 83,  80 => 82,  77 => 81,  74 => 80,  71 => 79,  67 => 78,  63 => 76,  61 => 67,  60 => 59,  59 => 57,  56 => 56,  54 => 47,  53 => 39,  52 => 37,  49 => 36,  47 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/service_levels.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\service_levels.html.twig");
    }
}
