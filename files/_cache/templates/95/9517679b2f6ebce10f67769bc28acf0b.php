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

/* components/itilobject/timeline/form_solution.html.twig */
class __TwigTemplate_44a51502b7f09289b95a324ae81908b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 32
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_solution.html.twig", 33)->unwrap();
        // line 35
        $context["params"] = twig_array_merge(["item" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
        // line 37
        $context["candedit"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 37);
        // line 38
        $context["can_read_kb"] = (Session::haveRight("knowbase", twig_constant("READ")) || Session::haveRight("knowbase", twig_constant("KnowbaseItem::READFAQ")));
        // line 39
        $context["can_update_kb"] = Session::haveRight("knowbase", twig_constant("UPDATE"));
        // line 40
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 40) || ((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null) == true));
        // line 41
        $context["noform"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "noform", [], "array", true, true, false, 41) || ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["noform"] ?? null) : null) == true));
        // line 42
        $context["disabled"] = (($context["candedit"] ?? null) == false);
        // line 32
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_solution.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 44
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 46
            echo "      <div class=\"read-only-content\">
         ";
            // line 47
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 50
            echo "

         <div class=\"timeline-badges\">
            ";
            // line 53
            if ((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["solutiontypes_id"] ?? null) : null)) {
                // line 54
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-tag me-1\"></i>
                  ";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("SolutionType", (($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["solutiontypes_id"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            if ((((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null) != twig_constant("CommonITILValidation::WAITING")) && ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["status"] ?? null) : null) != twig_constant("CommonITILValidation::NONE")))) {
                // line 61
                echo "               <span class=\"badge bg-blue-lt\">
                  ";
                // line 62
                $context["action"] = ((((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["status"] ?? null) : null) == twig_constant("CommonITILValidation::ACCEPTED"))) ? (__("Accepted")) : (_x("validation", "Refused")));
                // line 63
                echo "                  ";
                echo twig_sprintf(__("%1\$s on %2\$s by %3\$s"),                 // line 64
($context["action"] ?? null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_8 =                 // line 65
($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_approval"] ?? null) : null)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", (($__internal_compile_9 =                 // line 66
($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["users_id_approval"] ?? null) : null), ["enable_anonymization" => true]));
                // line 67
                echo "
               </span>
            ";
            }
            // line 70
            echo "         </div>
      </div>
   ";
        } else {
            // line 73
            echo "      <div class=\"itilsolution\">
         ";
            // line 74
            $context["validation_class"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 74);
            // line 75
            echo "         ";
            if ( !(null === ($context["validation_class"] ?? null))) {
                // line 76
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [0 => ($context["item"] ?? null), 1 => "solution"], "method", false, false, false, 76), "html", null, true);
                echo "
         ";
            }
            // line 78
            echo "
         ";
            // line 79
            if ( !($context["noform"] ?? null)) {
                // line 80
                echo "         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 81), "html", null, true);
                echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
         ";
            }
            // line 83
            echo "
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 84), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 85)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
            ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            ";
            // line 89
            if (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket_Ticket::countOpenChildren", [0 => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null)]) > 0)) {
                // line 90
                echo "               <div class=\"alert alert-important alert-warning\">
                  <i class=\"fas fa-2x fa-info me-2\"></i>
                  <span>";
                // line 92
                echo twig_escape_filter($this->env, __("Warning: non closed children tickets depends on current ticket. Are you sure you want to close it?"), "html", null, true);
                echo "</span>
               </div>
            ";
            }
            // line 95
            echo "
            <div class=\"row\">
               <div class=\"col-12 col-md-9\">
                  ";
            // line 98
            $context["content"] = (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["content"] ?? null) : null);
            // line 99
            echo "                  ";
            if ((($context["kb_id_toload"] ?? null) > 0)) {
                // line 100
                echo "                     ";
                $context["content"] = "TODO content";
                // line 101
                echo "                  ";
            }
            // line 102
            echo "
                  ";
            // line 103
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content",             // line 105
($context["content"] ?? null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 113
($context["rand"] ?? null), "disabled" =>             // line 114
($context["disabled"] ?? null)]], 103, $context, $this->getSourceContext());
            // line 116
            echo "
               </div>
               <div class=\"col-12 col-md-3 order-first order-md-last\">
                  <div class=\"row\">
                     ";
            // line 120
            if (($context["candedit"] ?? null)) {
                // line 121
                echo "                        ";
                if (($context["can_read_kb"] ?? null)) {
                    // line 122
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 123
                    echo "                              <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((("/front/knowbaseitem.php?item_itemtype=" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 123)) . "&item_items_id=") . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 123)) . "&forcetab=Knowbase\$1")), "html", null, true);
                    echo "\"
                                 class=\"btn btn-secondary overflow-hidden text-nowrap\" type=\"submit\"
                                 title=\"";
                    // line 125
                    echo twig_escape_filter($this->env, __("Search a solution"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                 <i class=\"fas fa-search\"></i>
                              </a>
                           ";
                    $context["search_solution_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 130
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_field", ["",                     // line 132
($context["search_solution_button"] ?? null), "", ["full_width" => true, "icon_label" => true]], 130, $context, $this->getSourceContext());
                    // line 138
                    echo "
                        ";
                }
                // line 140
                echo "
                        ";
                // line 141
                ob_start(function () { return ''; });
                // line 142
                echo "                           <i class=\"fas fa-reply fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 143
                echo twig_escape_filter($this->env, _n("Solution template", "Solution templates", Session::getPluralNumber()), "html", null, true);
                echo "\"></i>
                        ";
                $context["sol_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 145
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["SolutionTemplate", "solutiontemplates_id", 0,                 // line 149
($context["sol_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("solutiontemplate_update" .                 // line 153
($context["rand"] ?? null)) . "(this.value)"), "rand" =>                 // line 154
($context["rand"] ?? null), "disabled" =>                 // line 155
($context["disabled"] ?? null)]], 145, $context, $this->getSourceContext());
                // line 157
                echo "

                     ";
            }
            // line 160
            echo "
                     ";
            // line 161
            ob_start(function () { return ''; });
            // line 162
            echo "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SolutionType"), "html", null, true);
            echo "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
            $context["sol_type_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 165
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["SolutionType", "solutiontypes_id", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 168
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 168)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["solutiontypes_id"] ?? null) : null),             // line 169
($context["sol_type_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 173
($context["rand"] ?? null), "disabled" =>             // line 174
($context["disabled"] ?? null)]], 165, $context, $this->getSourceContext());
            // line 176
            echo "

                     ";
            // line 178
            if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                // line 179
                echo "                        ";
                ob_start(function () { return ''; });
                // line 180
                echo "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 181
                echo twig_escape_filter($this->env, twig_sprintf(__("Link to knowledge base entry #%id"), "TODO kb id"), "html", null, true);
                echo "\"></i>
                        ";
                $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 183
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id",                 // line 185
($context["kb_id_toload"] ?? null),                 // line 186
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 190
($context["rand"] ?? null)]], 183, $context, $this->getSourceContext());
                // line 192
                echo "
                     ";
            }
            // line 194
            echo "
                     ";
            // line 195
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 196
                echo "                        ";
                ob_start(function () { return ''; });
                // line 197
                echo "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                $context["sol_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 200
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["_sol_to_kb", 0,                 // line 203
($context["sol_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 207
($context["rand"] ?? null)]], 200, $context, $this->getSourceContext());
                // line 209
                echo "
                     ";
            }
            // line 211
            echo "                  </div>
               </div>
            </div>

         ";
            // line 215
            if ( !($context["noform"] ?? null)) {
                // line 216
                echo "               ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                echo "
               <div class=\"d-flex card-footer mx-n3 mb-n3\">
                  ";
                // line 218
                if (((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 218)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null) <= 0)) {
                    // line 219
                    echo "                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                    // line 221
                    echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                } else {
                    // line 224
                    echo "                     <input type=\"hidden\" name=\"id\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 224)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null), "html", null, true);
                    echo "\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                        <i class=\"far fa-save\"></i>
                        <span>";
                    // line 227
                    echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 230
                echo "               </div>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 232
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
            </form>
         ";
            }
            // line 235
            echo "      </div>

      <script type=\"text/javascript\">
         function solutiontemplate_update";
            // line 238
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 240
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/solution.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  solutiontemplates_id: value,
                  items_id: '";
            // line 244
            echo twig_escape_filter($this->env, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 244)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 245), "html", null, true);
            echo "'
               }
            }).done(function (data) {
               // set textarea content
               if (tasktinymce = tinymce.get(\"content_";
            // line 249
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                  tasktinymce.setContent(data.content);
               }

               // set type
               var solutiontypes_id = isNaN(parseInt(data.solutiontypes_id))
                  ? 0
                  : parseInt(data.solutiontypes_id);
               \$(\"#dropdown_solutiontypes_id";
            // line 257
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", solutiontypes_id);
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_solution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 257,  406 => 249,  399 => 245,  395 => 244,  388 => 240,  383 => 238,  378 => 235,  372 => 232,  368 => 230,  362 => 227,  355 => 224,  349 => 221,  345 => 219,  343 => 218,  337 => 216,  335 => 215,  329 => 211,  325 => 209,  323 => 207,  322 => 203,  320 => 200,  313 => 197,  310 => 196,  308 => 195,  305 => 194,  301 => 192,  299 => 190,  298 => 186,  297 => 185,  295 => 183,  290 => 181,  287 => 180,  284 => 179,  282 => 178,  278 => 176,  276 => 174,  275 => 173,  274 => 169,  273 => 168,  271 => 165,  264 => 162,  262 => 161,  259 => 160,  254 => 157,  252 => 155,  251 => 154,  250 => 153,  249 => 149,  247 => 145,  242 => 143,  239 => 142,  237 => 141,  234 => 140,  230 => 138,  228 => 132,  226 => 130,  218 => 125,  212 => 123,  209 => 122,  206 => 121,  204 => 120,  198 => 116,  196 => 114,  195 => 113,  194 => 105,  193 => 103,  190 => 102,  187 => 101,  184 => 100,  181 => 99,  179 => 98,  174 => 95,  168 => 92,  164 => 90,  162 => 89,  157 => 87,  152 => 85,  148 => 84,  145 => 83,  140 => 81,  137 => 80,  135 => 79,  132 => 78,  126 => 76,  123 => 75,  121 => 74,  118 => 73,  113 => 70,  108 => 67,  106 => 66,  105 => 65,  104 => 64,  102 => 63,  100 => 62,  97 => 61,  95 => 60,  92 => 59,  86 => 56,  82 => 54,  80 => 53,  75 => 50,  73 => 47,  70 => 46,  67 => 45,  63 => 44,  58 => 32,  56 => 42,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 35,  42 => 33,  35 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_solution.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\form_solution.html.twig");
    }
}
