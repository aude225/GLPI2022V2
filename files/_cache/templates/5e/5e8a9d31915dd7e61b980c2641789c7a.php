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

/* components/itilobject/selfservice.html.twig */
class __TwigTemplate_132545db33f2ec467ad3c4345c2e873f extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/selfservice.html.twig", 32)->unwrap();
        // line 33
        echo "
";
        // line 34
        $context["rand"] = twig_random($this->env);
        // line 35
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "full_width_adapt_column" => false, "fields_template" =>         // line 39
($context["itiltemplate"] ?? null), "rand" =>         // line 40
($context["rand"] ?? null)];
        // line 42
        $context["right_field_options"] = twig_array_merge(($context["base_field_options"] ?? null), ["is_horizontal" => true, "label_class" => "col-lg-3", "input_class" => "col-lg-9"]);
        // line 47
        echo "
<div class=\"container-lg\">

    ";
        // line 50
        if ((($context["has_tickets_to_validate"] ?? null) &&  !twig_test_empty(($context["url_validate"] ?? null)))) {
            // line 51
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
            ";
            // line 52
            echo twig_escape_filter($this->env, __("There are some tickets awaiting approval"), "html", null, true);
            echo " — <a href=\"";
            echo twig_escape_filter($this->env, ($context["url_validate"] ?? null), "html", null, true);
            echo "\" class=\"alert-link\">";
            echo twig_escape_filter($this->env, __("check it out!"), "html", null, true);
            echo "</a>
        </div>
    ";
        }
        // line 55
        echo "
   ";
        // line 56
        echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
        echo "

   <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">
                ";
        // line 61
        echo twig_escape_filter($this->env, __("Describe the incident or request"), "html", null, true);
        echo "
            </h3>
        </div>

        <div class=\"card-body bg-secondary-lt pt-0\">
            ";
        // line 66
        if (twig_length_filter($this->env, ($context["delegating"] ?? null))) {
            // line 67
            echo "                <div class=\"row align-items-end w-100\">
                    <div class=\"col-sm-6\">

                        ";
            // line 70
            ob_start(function () { return ''; });
            // line 71
            echo "                            <div id=\"delegate_other";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" class=\"card mt-2\">
                                <div class=\"card-body\">
                                    ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "showActorAddFormOnCreate", [0 => twig_constant("CommonITILActor::REQUESTER"), 1 =>             // line 75
($context["params"] ?? null)], "method", false, false, false, 73)), "truncate", [0 => 0], "method", false, false, false, 76), "html", null, true);
            // line 76
            echo "
                                </div>
                            </div>
                        ";
            $context["actor_add_form"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 80
            echo "
                        ";
            // line 81
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["nodelegate", (($__internal_compile_0 =             // line 83
($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nodelegate"] ?? null) : null), __("This ticket concerns me"), twig_array_merge(            // line 85
($context["base_field_options"] ?? null), ["add_field_html" =>             // line 86
($context["actor_add_form"] ?? null)])], 81, $context, $this->getSourceContext());
            // line 88
            echo "
                    </div>
                    <div class=\"col-sm-6 ";
            // line 90
            echo ((($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_check_pref") && (($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["nodelegate"] ?? null) : null))) ? ("") : ("d-none"));
            echo "\" id=\"user-info";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "-block\">
                        ";
            // line 91
            ob_start(function () { return ''; });
            // line 92
            echo "                        <div class=\"d-inline-flex\">
                            <div class=\"card mb-0\" id=\"user-info";
            // line 93
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                                <div class=\"card-body\">
                                    ";
            // line 95
            $context["user"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser();
            // line 96
            echo "                                    ";
            $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 96);
            // line 97
            echo "                                    ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 97))]);
            // line 98
            echo "                                    ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 98)]);
            // line 99
            echo "                                    ";
            echo twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>             // line 100
($context["user_fields"] ?? null), "can_edit" => true], false);
            // line 102
            echo "
                                </div>
                            </div>
                        </div>
                        ";
            $context["personal_information"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_field", ["",             // line 109
($context["personal_information"] ?? null), __("Check your personnal information"),             // line 111
($context["base_field_options"] ?? null)], 107, $context, $this->getSourceContext());
            // line 112
            echo "
                    </div>
                </div>

            ";
        }
        // line 117
        echo "        </div>
        <div class=\"card-body row mx-0\">
            <div class=\"offset-md-1 col-md-8 col-xxl-6\">
               ";
        // line 120
        echo twig_call_macro($macros["fields"], "macro_field", ["type", twig_get_attribute($this->env, $this->source,         // line 122
($context["item"] ?? null), "dropdownType", [0 => "type", 1 => twig_array_merge(["value" => (($__internal_compile_2 =         // line 123
($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null), "width" => "100%", "display" => false, "on_change" => "this.form.submit()"],         // line 127
($context["right_field_options"] ?? null))], "method", false, false, false, 122), _n("Type", "Types", 1),         // line 129
($context["right_field_options"] ?? null)], 120, $context, $this->getSourceContext());
        // line 130
        echo "

               ";
        // line 132
        $context["cat_params"] = twig_array_merge(($context["right_field_options"] ?? null), ["on_change" => "this.form.submit()"]);
        // line 135
        echo "               ";
        $context["condition"] = ["is_helpdeskvisible" => 1];
        // line 138
        echo "               ";
        if (((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE"))) {
            // line 139
            echo "                  ";
            $context["condition"] = twig_array_merge(($context["condition"] ?? null), ["is_incident" => 1]);
            // line 140
            echo "               ";
        } elseif (((($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE"))) {
            // line 141
            echo "                  ";
            $context["condition"] = twig_array_merge(($context["condition"] ?? null), ["is_request" => 1]);
            // line 142
            echo "               ";
        }
        // line 143
        echo "               ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_5 =         // line 146
($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1), twig_array_merge(        // line 148
($context["cat_params"] ?? null), ["condition" => ($context["condition"] ?? null)])], 143, $context, $this->getSourceContext());
        // line 149
        echo "

               ";
        // line 151
        echo twig_call_macro($macros["fields"], "macro_field", ["urgency", twig_get_attribute($this->env, $this->source,         // line 153
($context["item"] ?? null), "dropdownUrgency", [0 => ["value" => (($__internal_compile_6 =         // line 154
($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["urgency"] ?? null) : null), "width" => "100%", "display" => false, "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 157
($context["right_field_options"] ?? null), "fields_template", [], "any", false, false, false, 157), "isMandatoryField", [0 => "urgency"], "method", false, false, false, 157)]], "method", false, false, false, 153), __("Urgency"),         // line 160
($context["right_field_options"] ?? null)], 151, $context, $this->getSourceContext());
        // line 161
        echo "

               ";
        // line 163
        if (((($__internal_compile_7 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["helpdesk_hardware"] ?? null) : null) && twig_length_filter($this->env, (($__internal_compile_8 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["helpdesk_item_type"] ?? null) : null)))) {
            // line 164
            echo "                  ";
            ob_start(function () { return ''; });
            // line 165
            echo "                     <a class=\"btn btn-sm btn-ghost-secondary mt-2\" role=\"button\"
                        id=\"btn-collapse-items";
            // line 166
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        aria-expanded=\"false\" aria-controls=\"collapse-items";
            // line 167
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        data-bs-toggle=\"collapse\" href=\"#collapse-items";
            // line 168
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" >
                        <i class=\"fas fa-plus\"></i>
                     </a>
                     <div class=\"collapse\" id=\"collapse-items";
            // line 171
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 172
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Ticket::itemAddForm", [0 => ($context["item"] ?? null), 1 => twig_array_merge(($context["params"] ?? null), ["_canupdate" => Session::haveRight("ticket", twig_constant("CREATE")), "_tickettemplate" =>             // line 174
($context["itiltemplate"] ?? null)])]);
            // line 176
            echo "                     </div>
                  ";
            $context["associated_items"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 178
            echo "
                  ";
            // line 179
            echo twig_call_macro($macros["fields"], "macro_field", ["items_id",             // line 181
($context["associated_items"] ?? null), _n("Associated element", "Associated elements", Session::getPluralNumber()),             // line 183
($context["right_field_options"] ?? null)], 179, $context, $this->getSourceContext());
            // line 184
            echo "
               ";
        }
        // line 186
        echo "
               ";
        // line 187
        if (( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_users_id_observer"], "method", false, false, false, 187) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_groups_id_observer"], "method", false, false, false, 187))) {
            // line 188
            echo "                  ";
            ob_start(function () { return ''; });
            // line 189
            echo "
                     ";
            // line 190
            echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig", ["item" =>             // line 191
($context["item"] ?? null), "entities_id" => (($__internal_compile_9 =             // line 192
($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["entities_id"] ?? null) : null), "itiltemplate" =>             // line 193
($context["itiltemplate"] ?? null), "field_options" =>             // line 194
($context["right_field_options"] ?? null), "canupdate" => true, "returned_itemtypes" => [0 => "User"], "display_actortypes" => [0 => "observer"], "display_labels" => false, "disable_assign_to_me" => true]);
            // line 200
            echo "
                  ";
            $context["observer_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 202
            echo "                  ";
            echo twig_call_macro($macros["fields"], "macro_field", ["observer",             // line 204
($context["observer_field"] ?? null), _n("Watcher", "Watchers", Session::getPluralNumber()), twig_array_merge(            // line 206
($context["right_field_options"] ?? null), ["required" => (twig_get_attribute($this->env, $this->source,             // line 207
($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_users_id_observer"], "method", false, false, false, 207) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_groups_id_observer"], "method", false, false, false, 207))])], 202, $context, $this->getSourceContext());
            // line 209
            echo "
               ";
        }
        // line 211
        echo "
               ";
        // line 212
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_10 =         // line 215
($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"),         // line 217
($context["right_field_options"] ?? null)], 212, $context, $this->getSourceContext());
        // line 218
        echo "

               ";
        // line 220
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", (($__internal_compile_11 =         // line 222
($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null), __("Title"),         // line 224
($context["right_field_options"] ?? null)], 220, $context, $this->getSourceContext());
        // line 225
        echo "

               ";
        // line 227
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_12 =         // line 229
($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["content"] ?? null) : null), __("Description"), twig_array_merge(        // line 231
($context["right_field_options"] ?? null), ["enable_richtext" => true, "enable_fileupload" => true])], 227, $context, $this->getSourceContext());
        // line 235
        echo "
            </div>
        </div>

        <div class=\"card-footer text-center\">
            <input type=\"hidden\" name=\"entities_id\" value=\"";
        // line 240
        echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["params"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["entities_id"] ?? null) : null), "html", null, true);
        echo "\" />
            <button type=\"submit\" class=\"btn btn-primary\" name=\"add\">
                <i class=\"fas fa-plus\"></i>
                <span>";
        // line 243
        echo twig_escape_filter($this->env, __("Submit message"), "html", null, true);
        echo "</span>
            </button>
        </div>
    </div>

   ";
        // line 248
        echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
        echo "
</div>

<script type=\"text/javascript\">
\$(function () {
    \$('#btn-collapse-items";
        // line 253
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', function() {
        \$(this).hide();
    });

    \$('#dropdown_nodelegate";
        // line 257
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('change', function() {
        var is_for_me = (\$(this).val() == '1');
        \$('#user-info";
        // line 259
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "-block').toggleClass('d-none', !is_for_me);
        \$('#delegate_other";
        // line 260
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .card-body')
            .html(\"\")
            .load('";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownDelegationUsers.php"), "html", null, true);
        echo "', {
                'right': \"delegate\",
                'nodelegate': (is_for_me ? 1 : 0),
                '_users_id_requester': ";
        // line 265
        echo twig_escape_filter($this->env, (($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_users_id_requester"] ?? null) : null), "html", null, true);
        echo ",
                '_users_id_requester_notif': ";
        // line 266
        echo json_encode((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_users_id_requester_notif"] ?? null) : null));
        echo ",
                'use_notification': ";
        // line 267
        echo twig_escape_filter($this->env, (($__internal_compile_16 = (($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["_users_id_requester_notif"] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["use_notification"] ?? null) : null), "html", null, true);
        echo ",
                'entity_restrict':  ";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "html", null, true);
        echo "
            });
    })

    saveActorsToDom();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/selfservice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 268,  394 => 267,  390 => 266,  386 => 265,  380 => 262,  375 => 260,  371 => 259,  366 => 257,  359 => 253,  351 => 248,  343 => 243,  337 => 240,  330 => 235,  328 => 231,  327 => 229,  326 => 227,  322 => 225,  320 => 224,  319 => 222,  318 => 220,  314 => 218,  312 => 217,  311 => 215,  310 => 212,  307 => 211,  303 => 209,  301 => 207,  300 => 206,  299 => 204,  297 => 202,  293 => 200,  291 => 194,  290 => 193,  289 => 192,  288 => 191,  287 => 190,  284 => 189,  281 => 188,  279 => 187,  276 => 186,  272 => 184,  270 => 183,  269 => 181,  268 => 179,  265 => 178,  261 => 176,  259 => 174,  258 => 172,  254 => 171,  248 => 168,  244 => 167,  240 => 166,  237 => 165,  234 => 164,  232 => 163,  228 => 161,  226 => 160,  225 => 157,  224 => 154,  223 => 153,  222 => 151,  218 => 149,  216 => 148,  215 => 146,  213 => 143,  210 => 142,  207 => 141,  204 => 140,  201 => 139,  198 => 138,  195 => 135,  193 => 132,  189 => 130,  187 => 129,  186 => 127,  185 => 123,  184 => 122,  183 => 120,  178 => 117,  171 => 112,  169 => 111,  168 => 109,  166 => 107,  159 => 102,  157 => 100,  155 => 99,  152 => 98,  149 => 97,  146 => 96,  144 => 95,  139 => 93,  136 => 92,  134 => 91,  128 => 90,  124 => 88,  122 => 86,  121 => 85,  120 => 83,  119 => 81,  116 => 80,  110 => 76,  108 => 75,  107 => 73,  101 => 71,  99 => 70,  94 => 67,  92 => 66,  84 => 61,  76 => 56,  73 => 55,  63 => 52,  60 => 51,  58 => 50,  53 => 47,  51 => 42,  49 => 40,  48 => 39,  47 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/selfservice.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\selfservice.html.twig");
    }
}
