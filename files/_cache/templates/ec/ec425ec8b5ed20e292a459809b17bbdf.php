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

/* components/itilobject/timeline/form_validation.html.twig */
class __TwigTemplate_5a9ab6cb05ab549f256f47f02a699626 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_validation.html.twig", 33)->unwrap();
        // line 35
        $context["params"] = ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]));
        // line 32
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_validation.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 39
            echo "      <div class=\"read-only-content w-100\">
         ";
            // line 40
            echo (($__internal_compile_0 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["content"] ?? null) : null);
            echo "

         ";
            // line 42
            if (twig_length_filter($this->env, (($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["comment_submission"] ?? null) : null))) {
                // line 43
                echo "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div>
                        ";
                // line 47
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["comment_submission"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 50
                echo "
                    </div>
                </div>
            </div>
         ";
            }
            // line 55
            echo "         ";
            if (twig_length_filter($this->env, (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["comment_validation"] ?? null) : null))) {
                // line 56
                echo "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div>
                        ";
                // line 60
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["comment_validation"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 63
                echo "
                    </div>
                </div>
            </div>
         ";
            }
            // line 68
            echo "
         ";
            // line 69
            if ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["can_answer"] ?? null) : null)) {
                // line 70
                echo "            <hr class=\"my-2\" />
            <form id=\"validationanswers_id_";
                // line 71
                echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
                echo "\"
                  action=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath((($__internal_compile_7 = ($context["entry"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["type"] ?? null) : null)), "html", null, true);
                echo "\" method=\"post\" data-submit-once>

               <input type=\"hidden\" name=\"id\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
                echo "\" />
               <input type=\"hidden\" name=\"users_id_validate\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["users_id_validate"] ?? null) : null), "html", null, true);
                echo "\" />
               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 76
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
               ";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                echo "

               <div class=\"mb-3 comment-part\">
                  ";
                // line 80
                echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment_validation", "", _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>                 // line 90
($context["rand"] ?? null)]], 80, $context, $this->getSourceContext());
                // line 92
                echo "
               </div>

               <div class=\"validation-footer\">
                  <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
                     <i class=\"fas fa-thumbs-up\"></i>
                     <span class=\"validation-label\">";
                // line 98
                echo twig_escape_filter($this->env, __("Approve"), "html", null, true);
                echo "</span>
                  </button>
                  <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
                     <i class=\"fas fa-thumbs-down\"></i>
                     <span class=\"validation-label\">";
                // line 102
                echo twig_escape_filter($this->env, __("Refuse"), "html", null, true);
                echo "</span>
                  </button>
               </div>
            </form>
         ";
            }
            // line 107
            echo "      </div>
   ";
        } elseif ((        // line 108
($context["form_mode"] ?? null) == "answer")) {
            // line 109
            echo "      <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
            action=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 110), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>

         <input type=\"hidden\" name=\"id\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 112)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), "html", null, true);
            echo "\" />
         <input type=\"hidden\" name=\"users_id_validate\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["users_id_validate"] ?? null) : null), "html", null, true);
            echo "\" />
         <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />

         ";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

         <div class=\"mb-3 comment-part\">
            ";
            // line 119
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment_validation", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 121
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 121)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["comment_validation"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 129
($context["rand"] ?? null)]], 119, $context, $this->getSourceContext());
            // line 131
            echo "
         </div>

         <div class=\"validation-footer\">
            <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
               <i class=\"fas fa-thumbs-up\"></i>
               <span class=\"validation-label\">";
            // line 137
            echo twig_escape_filter($this->env, __("Approve"), "html", null, true);
            echo "</span>
            </button>
            <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
               <i class=\"fas fa-thumbs-down\"></i>
               <span class=\"validation-label\">";
            // line 141
            echo twig_escape_filter($this->env, __("Refuse"), "html", null, true);
            echo "</span>
            </button>
         </div>
      </form>
   ";
        } else {
            // line 146
            echo "      <div class=\"itilvalidation\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 148), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 149), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 150), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null), "html", null, true);
            echo "\" />

            <div class=\"row\">
               <div class=\"col-12\">
                  ";
            // line 154
            echo twig_call_macro($macros["fields"], "macro_readOnlyField", ["approval_requester", twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser(), "getFriendlyName", [], "method", false, false, false, 156), _n("Requester", "Requester", 1), ["full_width" => true, "rand" =>             // line 160
($context["rand"] ?? null)]], 154, $context, $this->getSourceContext());
            // line 162
            echo "

                  ";
            // line 164
            if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "isNewItem", [], "method", false, false, false, 164)) {
                // line 165
                echo "                     ";
                echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["validatortype", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 165)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["validatortype"] ?? null) : null), ["User" => "User", "Group" => "Group"], __("Approver"), ["display_emptychoice" => true, "rand" =>                 // line 170
($context["rand"] ?? null), "field_class" => "col-12", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8 flex-wrap", "add_field_html" => (("<span id=\"show_validator_field" .                 // line 174
($context["rand"] ?? null)) . "\" class=\"flex-grow-1\">&nbsp;</span>")]], 165, $context, $this->getSourceContext());
                // line 175
                echo "
                     ";
                // line 176
                if ( !(null === (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 176)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["validatortype"] ?? null) : null))) {
                    // line 177
                    echo "                        <script type=\"application/javascript\">
                           \$('#show_validator_field";
                    // line 178
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "').load(CFG_GLPI.root_doc + '/ajax/dropdownValidator.php', {
                              id: ";
                    // line 179
                    echo twig_escape_filter($this->env, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 179)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null), "html", null, true);
                    echo ",
                              entity: ";
                    // line 180
                    echo twig_escape_filter($this->env, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["entities_id"] ?? null) : null), "html", null, true);
                    echo ",
                              right: \"";
                    // line 181
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 181) === "Ticket") && ((($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["type"] ?? null) : null) == 2))) ? ("validate_request") : ("validate_incident"));
                    echo "\",
                              validatortype: \"";
                    // line 182
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 182), "users_id_validate", [], "array", false, true, false, 182), "groups_id", [], "array", true, true, false, 182)) ? ("Group") : ((( !twig_test_empty((($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 182)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["users_id_validate"] ?? null) : null))) ? ("User") : (""))));
                    echo "\"
                           });
                        </script>
                     ";
                } else {
                    // line 186
                    echo "                        <script type=\"application/javascript\">
                           updateItemOnSelectEvent(\"dropdown_validatortype";
                    // line 187
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\", '#show_validator_field";
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "',
                              CFG_GLPI.root_doc + '/ajax/dropdownValidator.php', {
                                 id: 0,
                                 entity: ";
                    // line 190
                    echo twig_escape_filter($this->env, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 190)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["entities_id"] ?? null) : null), "html", null, true);
                    echo ",
                                 right: \"";
                    // line 191
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 191) === "Ticket") && ((($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 191)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["type"] ?? null) : null) == 2))) ? ("validate_request") : ("validate_incident"));
                    echo "\",
                                 validatortype: '__VALUE__',
                                 groups_id: 0
                              });
                        </script>
                     ";
                }
                // line 197
                echo "                  ";
            } else {
                // line 198
                echo "                     ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_validate", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,                 // line 201
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 201)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["users_id_validate"] ?? null) : null), __("Approver"), ["full_width" => true]], 198, $context, $this->getSourceContext());
                // line 206
                echo "
                  ";
            }
            // line 208
            echo "
                  ";
            // line 209
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment_submission", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 211
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 211)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["comment_submission"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 218
($context["rand"] ?? null)]], 209, $context, $this->getSourceContext());
            // line 220
            echo "
               </div>
            </div>

            ";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            <div class=\"d-flex card-footer mx-n3 mb-n3\">
               ";
            // line 226
            if (((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 226)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["id"] ?? null) : null) <= 0)) {
                // line 227
                echo "                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                     <i class=\"fas fa-plus\"></i>
                     <span>";
                // line 229
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                  </button>
               ";
            } else {
                // line 232
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 232)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 235
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 238
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 238)) {
                    // line 239
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 240
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 242
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 245
                echo "               ";
            }
            // line 246
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 248
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 248,  384 => 246,  381 => 245,  375 => 242,  370 => 240,  367 => 239,  365 => 238,  359 => 235,  352 => 232,  346 => 229,  342 => 227,  340 => 226,  335 => 224,  329 => 220,  327 => 218,  326 => 211,  325 => 209,  322 => 208,  318 => 206,  316 => 201,  314 => 198,  311 => 197,  302 => 191,  298 => 190,  290 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 180,  268 => 179,  264 => 178,  261 => 177,  259 => 176,  256 => 175,  254 => 174,  253 => 170,  251 => 165,  249 => 164,  245 => 162,  243 => 160,  242 => 154,  233 => 150,  229 => 149,  225 => 148,  221 => 146,  213 => 141,  206 => 137,  198 => 131,  196 => 129,  195 => 121,  194 => 119,  188 => 116,  183 => 114,  179 => 113,  175 => 112,  170 => 110,  167 => 109,  165 => 108,  162 => 107,  154 => 102,  147 => 98,  139 => 92,  137 => 90,  136 => 80,  130 => 77,  126 => 76,  122 => 75,  118 => 74,  113 => 72,  109 => 71,  106 => 70,  104 => 69,  101 => 68,  94 => 63,  92 => 60,  86 => 56,  83 => 55,  76 => 50,  74 => 47,  68 => 43,  66 => 42,  61 => 40,  58 => 39,  55 => 38,  51 => 37,  46 => 32,  44 => 35,  42 => 33,  35 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_validation.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\form_validation.html.twig");
    }
}
