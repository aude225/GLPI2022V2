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

/* components/itilobject/timeline/form_followup.html.twig */
class __TwigTemplate_9f6f7d76e6927b16b46f828375d22eb5 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_followup.html.twig", 33)->unwrap();
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
        $context["rand"] = twig_random($this->env);
        // line 32
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_followup.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 45
            echo "      <div class=\"read-only-content\">
         ";
            // line 46
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 49
            echo "

         <div class=\"timeline-badges\">
            ";
            // line 52
            if ((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["sourceitems_id"] ?? null) : null)) {
                // line 53
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 55
                ob_start(function () { return ''; });
                // line 56
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 57
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sourceitems_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["merged_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 60
                echo "                  ";
                echo twig_sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 63
            echo "
            ";
            // line 64
            if ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["sourceof_items_id"] ?? null) : null)) {
                // line 65
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 67
                ob_start(function () { return ''; });
                // line 68
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 69
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sourceof_items_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["promoted_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 72
                echo "                  ";
                echo twig_sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 75
            echo "
            ";
            // line 76
            echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            echo "
         </div>
      </div>
   ";
        } else {
            // line 80
            echo "      <div class=\"itilfollowup\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 82), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 83), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
            echo "\" />
            ";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            ";
            // line 87
            $context["openfollowup"] = (((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 87) &&  !(null === (($__internal_compile_7 = ($context["_get"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["_get"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["_openfollowup"] ?? null) : null)) : (false));
            // line 88
            echo "            ";
            if (($context["openfollowup"] ?? null)) {
                // line 89
                echo "               <input type=\"hidden\" name=\"add_reopen\" value=\"1\" />
            ";
            }
            // line 91
            echo "
            <div class=\"row\">
               ";
            // line 93
            $context["col_md"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) ? ("col-md-9") : ("col-md-12"));
            // line 94
            echo "               <div class=\"col-12 ";
            echo twig_escape_filter($this->env, ($context["col_md"] ?? null), "html", null, true);
            echo "\">
                  ";
            // line 95
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 97
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 105
($context["rand"] ?? null)]], 95, $context, $this->getSourceContext());
            // line 107
            echo "
               </div>
               ";
            // line 109
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 110
                echo "                  <div class=\"col-12 col-md-3 order-first order-md-last\">
                     <div class=\"row\">

                        ";
                // line 113
                ob_start(function () { return ''; });
                // line 114
                echo "                           <i class=\"fas fa-reply fa-fw me-1\"
                              title=\"";
                // line 115
                echo twig_escape_filter($this->env, _n("Followup template", "Followup templates", Session::getPluralNumber()), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 117
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILFollowupTemplate", "itilfollowuptemplates_id", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,                 // line 120
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["itilfollowuptemplates_id"] ?? null) : null),                 // line 121
($context["fup_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itilfollowuptemplate_update" .                 // line 125
($context["rand"] ?? null)) . "(this.value)"), "rand" =>                 // line 126
($context["rand"] ?? null)]], 117, $context, $this->getSourceContext());
                // line 128
                echo "

                        ";
                // line 130
                ob_start(function () { return ''; });
                // line 131
                echo "                           <i class=\"fas fa-inbox fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Source of followup"), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_source_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 133
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,                 // line 136
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 136)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["requesttypes_id"] ?? null) : null),                 // line 137
($context["fup_source_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "is_active" => 1, "is_itilfollowup" => 1, "rand" =>                 // line 143
($context["rand"] ?? null)]], 133, $context, $this->getSourceContext());
                // line 145
                echo "

                        ";
                // line 147
                ob_start(function () { return ''; });
                // line 148
                echo "                           <i class=\"ti ti-lock fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Private"), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_private_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 150
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,                 // line 152
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 152)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["is_private"] ?? null) : null),                 // line 153
($context["fup_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 157
($context["rand"] ?? null)]], 150, $context, $this->getSourceContext());
                // line 159
                echo "

                        ";
                // line 161
                if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                    // line 162
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 163
                    echo "                              <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                 title=\"";
                    // line 164
                    echo twig_escape_filter($this->env, twig_sprintf(__("Link to knowledge base entry #%id"), "TODO kb id"), "html", null, true);
                    echo "\"></i>
                           ";
                    $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 166
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id",                     // line 168
($context["kb_id_toload"] ?? null),                     // line 169
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 173
($context["rand"] ?? null)]], 166, $context, $this->getSourceContext());
                    // line 175
                    echo "
                        ";
                }
                // line 177
                echo "
                        ";
                // line 178
                if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                    // line 179
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 180
                    echo "                              <i class=\"far fa-save fa-fw me-1\" title=\"";
                    echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                           ";
                    $context["fup_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 183
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_sliderField", ["_fup_to_kb", 0,                     // line 186
($context["fup_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 190
($context["rand"] ?? null)]], 183, $context, $this->getSourceContext());
                    // line 192
                    echo "
                        ";
                }
                // line 194
                echo "                     </div>
                  </div>
               ";
            }
            // line 197
            echo "            </div>

            ";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            <div class=\"d-flex card-footer mx-n3 mb-n3\">
               ";
            // line 201
            if (((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 201)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null) <= 0)) {
                // line 202
                echo "                  <div class=\"input-group\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 205
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                     </button>
                     ";
                // line 207
                if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                    // line 208
                    echo "                        <span class=\"input-group-text bg-yellow-lt py-0 pe-0\" id=\"pending-reasons-control-";
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\">
                           <span class=\"d-inline-flex align-items-center\" title=\"";
                    // line 209
                    echo twig_escape_filter($this->env, __("Set the status to pending"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                              <i class=\"fas fa-pause me-2\"></i>
                              <label class=\"form-check form-switch pt-2\">
                                 <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                                 <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                       id=\"enable-pending-reasons-";
                    // line 215
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\"
                                       role=\"button\"
                                       data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                    // line 217
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\" />
                              </label>
                           </span>

                           <div class=\"collapse ps-2 py-1 flex-fill\" id=\"pending-reasons-setup-";
                    // line 221
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\">
                              ";
                    // line 222
                    echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                    echo "
                           </div>
                        </span>
                     ";
                }
                // line 226
                echo "                  </div>
               ";
            } else {
                // line 228
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 231
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 234
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 234)) {
                    // line 235
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 236
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 238
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 241
                echo "               ";
            }
            // line 242
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 244
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update";
            // line 249
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/itilfollowup.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: '";
            // line 255
            echo twig_escape_filter($this->env, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 255)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 256), "html", null, true);
            echo "'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content
               if (tasktinymce = tinymce.get(\"content_";
            // line 264
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                  tasktinymce.setContent(data.content);
               }
               // set category
               \$(\"#dropdown_requesttypes_id";
            // line 268
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", requesttypes_id);
               // set is_private
               \$(\"#is_private_";
            // line 270
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")
                  .prop(\"checked\", data.is_private == \"0\"
                     ? false
                     : true);
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_followup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 270,  446 => 268,  439 => 264,  428 => 256,  424 => 255,  417 => 251,  412 => 249,  404 => 244,  400 => 242,  397 => 241,  391 => 238,  386 => 236,  383 => 235,  381 => 234,  375 => 231,  368 => 228,  364 => 226,  357 => 222,  353 => 221,  346 => 217,  341 => 215,  332 => 209,  327 => 208,  325 => 207,  320 => 205,  315 => 202,  313 => 201,  308 => 199,  304 => 197,  299 => 194,  295 => 192,  293 => 190,  292 => 186,  290 => 183,  283 => 180,  280 => 179,  278 => 178,  275 => 177,  271 => 175,  269 => 173,  268 => 169,  267 => 168,  265 => 166,  260 => 164,  257 => 163,  254 => 162,  252 => 161,  248 => 159,  246 => 157,  245 => 153,  244 => 152,  242 => 150,  236 => 148,  234 => 147,  230 => 145,  228 => 143,  227 => 137,  226 => 136,  224 => 133,  218 => 131,  216 => 130,  212 => 128,  210 => 126,  209 => 125,  208 => 121,  207 => 120,  205 => 117,  200 => 115,  197 => 114,  195 => 113,  190 => 110,  188 => 109,  184 => 107,  182 => 105,  181 => 97,  180 => 95,  175 => 94,  173 => 93,  169 => 91,  165 => 89,  162 => 88,  160 => 87,  155 => 85,  151 => 84,  147 => 83,  143 => 82,  139 => 80,  132 => 76,  129 => 75,  122 => 72,  116 => 69,  113 => 68,  111 => 67,  107 => 65,  105 => 64,  102 => 63,  95 => 60,  89 => 57,  86 => 56,  84 => 55,  80 => 53,  78 => 52,  73 => 49,  71 => 46,  68 => 45,  65 => 44,  61 => 43,  56 => 32,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 35,  42 => 33,  35 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_followup.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\form_followup.html.twig");
    }
}
