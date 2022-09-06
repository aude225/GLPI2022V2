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

/* generic_show_form.html.twig */
class __TwigTemplate_58a7a4a8a27fb43f5d13d271ca31b403 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
";
        // line 32
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "generic_show_form.html.twig", 32)->unwrap();
        // line 33
        echo "
";
        // line 34
        $context["bg"] = "";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 35)) {
            // line 36
            echo "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 38
        echo "
<div class=\"asset ";
        // line 39
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 40
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "

   ";
        // line 42
        $context["rand"] = twig_random($this->env);
        // line 43
        echo "   ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 44
        echo "   ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 44) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 44)));
        // line 45
        echo "   ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 45) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 46
        echo "   ";
        $context["item_type"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 46);
        // line 47
        echo "   ";
        $context["item_has_pictures"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasItemtypeOrModelPictures", [], "method", false, false, false, 47);
        // line 48
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 50
        echo ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        echo " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 54
        $this->displayBlock('form_fields', $context, $blocks);
        // line 552
        echo "               </div> ";
        // line 553
        echo "            </div> ";
        // line 554
        echo "         </div> ";
        // line 555
        echo "      </div>
      ";
        // line 556
        if (($context["item_has_pictures"] ?? null)) {
            // line 557
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 559
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 563
        echo "   </div> ";
        // line 564
        echo "
   ";
        // line 565
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 566
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 568
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 569
        echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
        echo "

   ";
        // line 571
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null) == true))) {
            // line 572
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 573
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 576
        echo "</div>
";
    }

    // line 54
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "name"], "method", false, false, false, 55)) {
            // line 56
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",             // line 58
($context["item"] ?? null), (((            // line 59
($context["item_type"] ?? null) == "Contact")) ? (__("Surname")) : (__("Name"))),             // line 60
($context["withtemplate"] ?? null)], 56, $context, $this->getSourceContext());
            // line 61
            echo "
                     ";
        }
        // line 63
        echo "
                     ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "firstname"], "method", false, false, false, 64)) {
            // line 65
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["firstname",             // line 67
($context["item"] ?? null), __("First name"),             // line 69
($context["withtemplate"] ?? null)], 65, $context, $this->getSourceContext());
            // line 70
            echo "
                     ";
        }
        // line 72
        echo "
                     ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 73)) {
            // line 74
            echo "                        ";
            if (( !twig_test_empty(($context["withtemplate"] ?? null)) || (($context["withtemplate"] ?? null) == 1))) {
                // line 75
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_hiddenField", ["is_active", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_active"] ?? null) : null), __("Is active"), ["add_field_html" => __("No")]], 75, $context, $this->getSourceContext());
                // line 77
                echo "
                        ";
            } else {
                // line 79
                echo "                        ";
            }
            // line 80
            echo "                     ";
        }
        // line 81
        echo "
                     ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "states_id"], "method", false, false, false, 82)) {
            // line 83
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 86
($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["states_id"] ?? null) : null), __("Status"), ["entity" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" => ["is_visible_computer" => 1]]], 83, $context, $this->getSourceContext());
            // line 92
            echo "
                     ";
        }
        // line 94
        echo "
                     ";
        // line 95
        $context["fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 95);
        // line 96
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["fk"] ?? null)], "method", false, false, false, 96)) {
            // line 97
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 98
($context["item_type"] ?? null),             // line 99
($context["fk"] ?? null), (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 100
($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["fk"] ?? null)] ?? null) : null), __("As child of"), ["entity" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 103
($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null)]], 97, $context, $this->getSourceContext());
            // line 105
            echo "
                     ";
        }
        // line 107
        echo "
                     ";
        // line 108
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_helpdesk_visible"], "method", false, false, false, 108))) {
            // line 109
            echo "                        ";
            // line 110
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_checkboxField", ["is_helpdesk_visible", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 112
($context["item"] ?? null), "fields", [], "any", false, false, false, 112)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket")], 110, $context, $this->getSourceContext());
            // line 114
            echo "
                     ";
        }
        // line 116
        echo "
                     ";
        // line 117
        $context["dc_breadcrumbs"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDcBreadcrumb", [], "method", false, false, false, 117)) : ([]));
        // line 118
        echo "                     ";
        if ((twig_length_filter($this->env, ($context["dc_breadcrumbs"] ?? null)) > 0)) {
            // line 119
            echo "                        ";
            ob_start(function () { return ''; });
            // line 120
            echo "                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dc_breadcrumbs"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["dc_item"]) {
                // line 122
                echo "                                 <li class=\"breadcrumb-item text-nowrap\">";
                echo $context["dc_item"];
                echo "</li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dc_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                           </ol>
                        ";
            $context["dc_breadcrumbs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            echo "
                        ";
            // line 127
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 129
($context["dc_breadcrumbs"] ?? null), __("Data center position")], 127, $context, $this->getSourceContext());
            // line 131
            echo "

                        ";
            // line 133
            echo twig_call_macro($macros["fields"], "macro_nullField", [], 133, $context, $this->getSourceContext());
            echo " ";
            // line 134
            echo "                     ";
        }
        // line 135
        echo "
                     ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 136)) {
            // line 137
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 140
($context["item"] ?? null), "fields", [], "any", false, false, false, 140)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), ["entity" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 143
($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["entities_id"] ?? null) : null)]], 137, $context, $this->getSourceContext());
            // line 145
            echo "
                     ";
        }
        // line 147
        echo "
                     ";
        // line 148
        if (((($context["item_type"] ?? null) == "Unmanaged") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "item_type"], "method", false, false, false, 148))) {
            // line 149
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["item_type", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itemtype"] ?? null) : null), _n("Type", "Types", 1), [0 => "Computer", 1 => "NetworkEquipment", 2 => "Printer", 3 => "Peripheral", 4 => "Phone"]], 149, $context, $this->getSourceContext());
            // line 151
            echo "
                     ";
        }
        // line 153
        echo "
                     ";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_domaincreation"], "method", false, false, false, 154)) {
            // line 155
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_domaincreation", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 155)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["date_domaincreation"] ?? null) : null), __("Creation date")], 155, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 157
        echo "
                     ";
        // line 158
        $context["type_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 158);
        // line 159
        echo "                     ";
        $context["type_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 159);
        // line 160
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["type_fk"] ?? null)], "method", false, false, false, 160)) {
            // line 161
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 162
($context["type_itemtype"] ?? null),             // line 163
($context["type_fk"] ?? null), (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 164
($context["item"] ?? null), "fields", [], "any", false, false, false, 164)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["type_fk"] ?? null)] ?? null) : null), _n("Type", "Types", 1)], 161, $context, $this->getSourceContext());
            // line 166
            echo "
                     ";
        }
        // line 168
        echo "
                     ";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "usertitles_id"], "method", false, false, false, 169)) {
            // line 170
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["UserTitle", "usertitles_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 173
($context["item"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), ["entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,             // line 176
($context["item"] ?? null), "fields", [], "any", false, false, false, 176)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)]], 170, $context, $this->getSourceContext());
            // line 178
            echo "
                     ";
        }
        // line 180
        echo "
                     ";
        // line 181
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "registration_number"], "method", false, false, false, 181)) {
            // line 182
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["registration_number",             // line 184
($context["item"] ?? null), __("Administrative number"),             // line 186
($context["withtemplate"] ?? null)], 182, $context, $this->getSourceContext());
            // line 187
            echo "
                     ";
        }
        // line 189
        echo "
                     ";
        // line 190
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone"], "method", false, false, false, 190)) {
            // line 191
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone",             // line 193
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 195
($context["withtemplate"] ?? null)], 191, $context, $this->getSourceContext());
            // line 196
            echo "
                     ";
        }
        // line 198
        echo "
                     ";
        // line 199
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone2"], "method", false, false, false, 199)) {
            // line 200
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone2",             // line 202
($context["item"] ?? null), __("Phone 2"),             // line 204
($context["withtemplate"] ?? null)], 200, $context, $this->getSourceContext());
            // line 205
            echo "
                     ";
        }
        // line 207
        echo "
                     ";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phonenumber"], "method", false, false, false, 208)) {
            // line 209
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phonenumber",             // line 211
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 213
($context["withtemplate"] ?? null)], 209, $context, $this->getSourceContext());
            // line 214
            echo "
                     ";
        }
        // line 216
        echo "
                     ";
        // line 217
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "mobile"], "method", false, false, false, 217)) {
            // line 218
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["mobile",             // line 220
($context["item"] ?? null), __("Mobile phone"),             // line 222
($context["withtemplate"] ?? null)], 218, $context, $this->getSourceContext());
            // line 223
            echo "
                     ";
        }
        // line 225
        echo "
                     ";
        // line 226
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "fax"], "method", false, false, false, 226)) {
            // line 227
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["fax",             // line 229
($context["item"] ?? null), __("Fax"),             // line 231
($context["withtemplate"] ?? null)], 227, $context, $this->getSourceContext());
            // line 232
            echo "
                     ";
        }
        // line 234
        echo "
                     ";
        // line 235
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "website"], "method", false, false, false, 235)) {
            // line 236
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["website",             // line 238
($context["item"] ?? null), __("Website"),             // line 240
($context["withtemplate"] ?? null)], 236, $context, $this->getSourceContext());
            // line 241
            echo "
                     ";
        }
        // line 243
        echo "
                     ";
        // line 244
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "email"], "method", false, false, false, 244)) {
            // line 245
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["email",             // line 247
($context["item"] ?? null), _n("Email", "Emails", 1),             // line 249
($context["withtemplate"] ?? null)], 245, $context, $this->getSourceContext());
            // line 250
            echo "
                     ";
        }
        // line 252
        echo "
                     ";
        // line 253
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "address"], "method", false, false, false, 253)) {
            // line 254
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 254)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["address"] ?? null) : null), __("Address")], 254, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 256
        echo "
                     ";
        // line 257
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postalcode"], "method", false, false, false, 257)) {
            // line 258
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 260
($context["item"] ?? null), __("Postal code"),             // line 262
($context["withtemplate"] ?? null)], 258, $context, $this->getSourceContext());
            // line 263
            echo "
                     ";
        }
        // line 265
        echo "
                     ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "town"], "method", false, false, false, 266)) {
            // line 267
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["town",             // line 269
($context["item"] ?? null), __("City"),             // line 271
($context["withtemplate"] ?? null)], 267, $context, $this->getSourceContext());
            // line 272
            echo "
                     ";
        }
        // line 274
        echo "
                     ";
        // line 275
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "country"], "method", false, false, false, 275)) {
            // line 276
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["country",             // line 278
($context["item"] ?? null), __("Country"),             // line 280
($context["withtemplate"] ?? null)], 276, $context, $this->getSourceContext());
            // line 281
            echo "
                     ";
        }
        // line 283
        echo "
                     ";
        // line 284
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_expiration"], "method", false, false, false, 284)) {
            // line 285
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 285)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["date_expiration"] ?? null) : null), __("Expiration date"), ["helper" => __("Empty for infinite")]], 285, $context, $this->getSourceContext());
            // line 287
            echo "
                     ";
        }
        // line 289
        echo "
                     ";
        // line 290
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ref"], "method", false, false, false, 290)) {
            // line 291
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source,             // line 293
($context["item"] ?? null), "fields", [], "any", false, false, false, 293)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["ref"] ?? null) : null), __("Reference")], 291, $context, $this->getSourceContext());
            // line 295
            echo "
                     ";
        }
        // line 297
        echo "
                     ";
        // line 298
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id_tech"], "method", false, false, false, 298)) {
            // line 299
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 302
($context["item"] ?? null), "fields", [], "any", false, false, false, 302)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["users_id_tech"] ?? null) : null), __("Technician in charge of the hardware"), ["entity" => (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 305
($context["item"] ?? null), "fields", [], "any", false, false, false, 305)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["entities_id"] ?? null) : null), "right" => "own_ticket"]], 299, $context, $this->getSourceContext());
            // line 308
            echo "
                     ";
        }
        // line 310
        echo "
                     ";
        // line 311
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "manufacturers_id"], "method", false, false, false, 311)) {
            // line 312
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 315
($context["item"] ?? null), "fields", [], "any", false, false, false, 315)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_25 =             // line 316
($context["item_type"] ?? null)) && is_string($__internal_compile_26 = "Software") && ('' === $__internal_compile_26 || 0 === strpos($__internal_compile_25, $__internal_compile_26)))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer")))], 312, $context, $this->getSourceContext());
            // line 317
            echo "
                     ";
        }
        // line 319
        echo "
                     ";
        // line 320
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "groups_id_tech"], "method", false, false, false, 320)) {
            // line 321
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 324
($context["item"] ?? null), "fields", [], "any", false, false, false, 324)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["groups_id_tech"] ?? null) : null), __("Group in charge of the hardware"), ["entity" => (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 327
($context["item"] ?? null), "fields", [], "any", false, false, false, 327)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["entities_id"] ?? null) : null), "condition" => ["is_assign" => 1]]], 321, $context, $this->getSourceContext());
            // line 330
            echo "
                     ";
        }
        // line 332
        echo "
                     ";
        // line 333
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 333);
        // line 334
        echo "                     ";
        $context["model_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 334);
        // line 335
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["model_fk"] ?? null)], "method", false, false, false, 335)) {
            // line 336
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 337
($context["model_itemtype"] ?? null),             // line 338
($context["model_fk"] ?? null), (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 339
($context["item"] ?? null), "fields", [], "any", false, false, false, 339)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1)], 336, $context, $this->getSourceContext());
            // line 341
            echo "
                     ";
        }
        // line 343
        echo "
                     ";
        // line 344
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "contact_num"], "method", false, false, false, 344))) {
            // line 345
            echo "                        ";
            // line 346
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["contact_num", (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 348
($context["item"] ?? null), "fields", [], "any", false, false, false, 348)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["contact_num"] ?? null) : null), __("Alternate username number")], 346, $context, $this->getSourceContext());
            // line 350
            echo "
                     ";
        }
        // line 352
        echo "
                     ";
        // line 353
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 353)) {
            // line 354
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 356
($context["item"] ?? null), "fields", [], "any", false, false, false, 356)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["serial"] ?? null) : null), __("Serial number")], 354, $context, $this->getSourceContext());
            // line 358
            echo "
                     ";
        }
        // line 360
        echo "
                     ";
        // line 361
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "contact"], "method", false, false, false, 361))) {
            // line 362
            echo "                        ";
            // line 363
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["contact", (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 365
($context["item"] ?? null), "fields", [], "any", false, false, false, 365)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["contact"] ?? null) : null), __("Alternate username")], 363, $context, $this->getSourceContext());
            // line 367
            echo "
                     ";
        }
        // line 369
        echo "
                     ";
        // line 370
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "otherserial"], "method", false, false, false, 370)) {
            // line 371
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["otherserial",             // line 373
($context["item"] ?? null), __("Inventory number"),             // line 375
($context["withtemplate"] ?? null)], 371, $context, $this->getSourceContext());
            // line 376
            echo "
                     ";
        }
        // line 378
        echo "
                     ";
        // line 379
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "sysdescr"], "method", false, false, false, 379)) {
            // line 380
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["sysdescr", (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 380)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["sysdescr"] ?? null) : null), __("Sysdescr")], 380, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 382
        echo "
                     ";
        // line 383
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 383)) {
            // line 384
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 387
($context["item"] ?? null), "fields", [], "any", false, false, false, 387)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), ["entity" => (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 390
($context["item"] ?? null), "fields", [], "any", false, false, false, 390)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["entities_id"] ?? null) : null), "right" => "all"]], 384, $context, $this->getSourceContext());
            // line 393
            echo "
                     ";
        }
        // line 395
        echo "
                     ";
        // line 396
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_global"], "method", false, false, false, 396)) {
            // line 397
            echo "                        ";
            $context["management_restrict"] = 0;
            // line 398
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Monitor")) {
                // line 399
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("monitors_management_restrict");
                // line 400
                echo "                        ";
            } elseif ((($context["item_type"] ?? null) == "Peripheral")) {
                // line 401
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("peripherals_management_restrict");
                // line 402
                echo "                        ";
            } elseif ((($context["item_type"] ?? null) == "Phone")) {
                // line 403
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("phones_management_restrict");
                // line 404
                echo "                        ";
            } elseif ((($context["item_type"] ?? null) == "Printer")) {
                // line 405
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("printers_management_restrict");
                // line 406
                echo "                        ";
            } else {
                // line 407
                echo "                           ";
                $context["management_restrict"] = 0;
                // line 408
                echo "                        ";
            }
            // line 409
            echo "                        ";
            ob_start(function () { return ''; });
            // line 410
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showGlobalSwitch", [0 => (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 410)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["id"] ?? null) : null), 1 => ["withtemplate" =>             // line 411
($context["withtemplate"] ?? null), "value" => (($__internal_compile_37 = twig_get_attribute($this->env, $this->source,             // line 412
($context["item"] ?? null), "fields", [], "any", false, false, false, 412)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["is_global"] ?? null) : null), "management_restrict" =>             // line 413
($context["management_restrict"] ?? null), "target" =>             // line 414
($context["target"] ?? null), "width" => "100%"]]);
            // line 417
            echo "                        ";
            $context["dd_globalswitch"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 418
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["is_global",             // line 420
($context["dd_globalswitch"] ?? null), __("Management type")], 418, $context, $this->getSourceContext());
            // line 422
            echo "
                     ";
        }
        // line 424
        echo "
                     ";
        // line 425
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "size"], "method", false, false, false, 425)) {
            // line 426
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_38 = twig_get_attribute($this->env, $this->source,             // line 428
($context["item"] ?? null), "fields", [], "any", false, false, false, 428)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["size"] ?? null) : null), __("Size"), ["min" => 0, "step" => 0.01]], 426, $context, $this->getSourceContext());
            // line 434
            echo "
                     ";
        }
        // line 436
        echo "
                     ";
        // line 437
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "networks_id"], "method", false, false, false, 437)) {
            // line 438
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Network", "networks_id", (($__internal_compile_39 = twig_get_attribute($this->env, $this->source,             // line 441
($context["item"] ?? null), "fields", [], "any", false, false, false, 441)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["networks_id"] ?? null) : null), _n("Network", "Networks", 1)], 438, $context, $this->getSourceContext());
            // line 443
            echo "
                     ";
        }
        // line 445
        echo "
                     ";
        // line 446
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "groups_id"], "method", false, false, false, 446)) {
            // line 447
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id", (($__internal_compile_40 = twig_get_attribute($this->env, $this->source,             // line 450
($context["item"] ?? null), "fields", [], "any", false, false, false, 450)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["groups_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), ["entity" => (($__internal_compile_41 = twig_get_attribute($this->env, $this->source,             // line 453
($context["item"] ?? null), "fields", [], "any", false, false, false, 453)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["entities_id"] ?? null) : null), "condition" => ["is_itemgroup" => 1]]], 447, $context, $this->getSourceContext());
            // line 456
            echo "
                     ";
        }
        // line 458
        echo "
                     ";
        // line 459
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "uuid"], "method", false, false, false, 459)) {
            // line 460
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["uuid", (($__internal_compile_42 = twig_get_attribute($this->env, $this->source,             // line 462
($context["item"] ?? null), "fields", [], "any", false, false, false, 462)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["uuid"] ?? null) : null), __("UUID")], 460, $context, $this->getSourceContext());
            // line 464
            echo "
                     ";
        }
        // line 466
        echo "
                     ";
        // line 467
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "version"], "method", false, false, false, 467)) {
            // line 468
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["version",             // line 470
($context["item"] ?? null), _n("Version", "Versions", 1),             // line 472
($context["withtemplate"] ?? null)], 468, $context, $this->getSourceContext());
            // line 473
            echo "
                     ";
        }
        // line 475
        echo "
                     ";
        // line 476
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 476)) {
            // line 477
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_43 = twig_get_attribute($this->env, $this->source,             // line 479
($context["item"] ?? null), "fields", [], "any", false, false, false, 479)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber())], 477, $context, $this->getSourceContext());
            // line 481
            echo "
                     ";
        }
        // line 483
        echo "
                     ";
        // line 484
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ram"], "method", false, false, false, 484)) {
            // line 485
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["ram", (($__internal_compile_44 = twig_get_attribute($this->env, $this->source,             // line 487
($context["item"] ?? null), "fields", [], "any", false, false, false, 487)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["ram"] ?? null) : null), twig_sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio"))], 485, $context, $this->getSourceContext());
            // line 489
            echo "
                     ";
        }
        // line 491
        echo "
                     ";
        // line 492
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "alarm_threshold"], "method", false, false, false, 492)) {
            // line 493
            echo "                        ";
            ob_start(function () { return ''; });
            // line 494
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => "alarm_threshold", 1 => twig_array_merge(["value" => (($__internal_compile_45 = twig_get_attribute($this->env, $this->source,             // line 495
($context["item"] ?? null), "fields", [], "any", false, false, false, 495)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["alarm_threshold"] ?? null) : null), "rand" =>             // line 496
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 502
($context["params"] ?? null))]);
            // line 503
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 504
            echo "                        ";
            ob_start(function () { return ''; });
            // line 505
            echo "                           <span class=\"text-muted\">
                              ";
            // line 506
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => ($context["item_type"] ?? null), 1 => (($__internal_compile_46 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 506)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["id"] ?? null) : null)]);
            // line 507
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 509
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 511
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), ["add_field_html" =>             // line 513
($context["last_alert_html"] ?? null)]], 509, $context, $this->getSourceContext());
            // line 514
            echo "
                     ";
        }
        // line 516
        echo "
                     ";
        // line 517
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "brand"], "method", false, false, false, 517)) {
            // line 518
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["brand", (($__internal_compile_47 = twig_get_attribute($this->env, $this->source,             // line 520
($context["item"] ?? null), "fields", [], "any", false, false, false, 520)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["brand"] ?? null) : null), __("Brand")], 518, $context, $this->getSourceContext());
            // line 522
            echo "
                     ";
        }
        // line 524
        echo "
                     ";
        // line 525
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "begin_date"], "method", false, false, false, 525)) {
            // line 526
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_48 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 526)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["begin_date"] ?? null) : null), __("Start date")], 526, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 528
        echo "
                     ";
        // line 529
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "autoupdatesystems_id"], "method", false, false, false, 529)) {
            // line 530
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["AutoUpdateSystem", "autoupdatesystems_id", (($__internal_compile_49 = twig_get_attribute($this->env, $this->source,             // line 533
($context["item"] ?? null), "fields", [], "any", false, false, false, 533)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["autoupdatesystems_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AutoUpdateSystem")], 530, $context, $this->getSourceContext());
            // line 535
            echo "
                     ";
        }
        // line 537
        echo "
                     ";
        // line 538
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "pictures"], "method", false, false, false, 538)) {
            // line 539
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 539, $context, $this->getSourceContext());
            // line 542
            echo "
                     ";
        }
        // line 544
        echo "
                     ";
        // line 545
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 545)) {
            // line 546
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_50 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 546)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["is_active"] ?? null) : null), __("Active")], 546, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 548
        echo "
                     ";
        // line 549
        $this->displayBlock('more_fields', $context, $blocks);
        // line 551
        echo "                  ";
    }

    // line 549
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 550
        echo "                     ";
    }

    public function getTemplateName()
    {
        return "generic_show_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  978 => 550,  974 => 549,  970 => 551,  968 => 549,  965 => 548,  959 => 546,  957 => 545,  954 => 544,  950 => 542,  947 => 539,  945 => 538,  942 => 537,  938 => 535,  936 => 533,  934 => 530,  932 => 529,  929 => 528,  923 => 526,  921 => 525,  918 => 524,  914 => 522,  912 => 520,  910 => 518,  908 => 517,  905 => 516,  901 => 514,  899 => 513,  898 => 511,  896 => 509,  892 => 507,  890 => 506,  887 => 505,  884 => 504,  881 => 503,  879 => 502,  878 => 496,  877 => 495,  875 => 494,  872 => 493,  870 => 492,  867 => 491,  863 => 489,  861 => 487,  859 => 485,  857 => 484,  854 => 483,  850 => 481,  848 => 479,  846 => 477,  844 => 476,  841 => 475,  837 => 473,  835 => 472,  834 => 470,  832 => 468,  830 => 467,  827 => 466,  823 => 464,  821 => 462,  819 => 460,  817 => 459,  814 => 458,  810 => 456,  808 => 453,  807 => 450,  805 => 447,  803 => 446,  800 => 445,  796 => 443,  794 => 441,  792 => 438,  790 => 437,  787 => 436,  783 => 434,  781 => 428,  779 => 426,  777 => 425,  774 => 424,  770 => 422,  768 => 420,  766 => 418,  763 => 417,  761 => 414,  760 => 413,  759 => 412,  758 => 411,  756 => 410,  753 => 409,  750 => 408,  747 => 407,  744 => 406,  741 => 405,  738 => 404,  735 => 403,  732 => 402,  729 => 401,  726 => 400,  723 => 399,  720 => 398,  717 => 397,  715 => 396,  712 => 395,  708 => 393,  706 => 390,  705 => 387,  703 => 384,  701 => 383,  698 => 382,  692 => 380,  690 => 379,  687 => 378,  683 => 376,  681 => 375,  680 => 373,  678 => 371,  676 => 370,  673 => 369,  669 => 367,  667 => 365,  665 => 363,  663 => 362,  661 => 361,  658 => 360,  654 => 358,  652 => 356,  650 => 354,  648 => 353,  645 => 352,  641 => 350,  639 => 348,  637 => 346,  635 => 345,  633 => 344,  630 => 343,  626 => 341,  624 => 339,  623 => 338,  622 => 337,  620 => 336,  617 => 335,  614 => 334,  612 => 333,  609 => 332,  605 => 330,  603 => 327,  602 => 324,  600 => 321,  598 => 320,  595 => 319,  591 => 317,  589 => 316,  588 => 315,  586 => 312,  584 => 311,  581 => 310,  577 => 308,  575 => 305,  574 => 302,  572 => 299,  570 => 298,  567 => 297,  563 => 295,  561 => 293,  559 => 291,  557 => 290,  554 => 289,  550 => 287,  547 => 285,  545 => 284,  542 => 283,  538 => 281,  536 => 280,  535 => 278,  533 => 276,  531 => 275,  528 => 274,  524 => 272,  522 => 271,  521 => 269,  519 => 267,  517 => 266,  514 => 265,  510 => 263,  508 => 262,  507 => 260,  505 => 258,  503 => 257,  500 => 256,  494 => 254,  492 => 253,  489 => 252,  485 => 250,  483 => 249,  482 => 247,  480 => 245,  478 => 244,  475 => 243,  471 => 241,  469 => 240,  468 => 238,  466 => 236,  464 => 235,  461 => 234,  457 => 232,  455 => 231,  454 => 229,  452 => 227,  450 => 226,  447 => 225,  443 => 223,  441 => 222,  440 => 220,  438 => 218,  436 => 217,  433 => 216,  429 => 214,  427 => 213,  426 => 211,  424 => 209,  422 => 208,  419 => 207,  415 => 205,  413 => 204,  412 => 202,  410 => 200,  408 => 199,  405 => 198,  401 => 196,  399 => 195,  398 => 193,  396 => 191,  394 => 190,  391 => 189,  387 => 187,  385 => 186,  384 => 184,  382 => 182,  380 => 181,  377 => 180,  373 => 178,  371 => 176,  370 => 173,  368 => 170,  366 => 169,  363 => 168,  359 => 166,  357 => 164,  356 => 163,  355 => 162,  353 => 161,  350 => 160,  347 => 159,  345 => 158,  342 => 157,  336 => 155,  334 => 154,  331 => 153,  327 => 151,  324 => 149,  322 => 148,  319 => 147,  315 => 145,  313 => 143,  312 => 140,  310 => 137,  308 => 136,  305 => 135,  302 => 134,  299 => 133,  295 => 131,  293 => 129,  292 => 127,  289 => 126,  285 => 124,  276 => 122,  272 => 121,  269 => 120,  266 => 119,  263 => 118,  261 => 117,  258 => 116,  254 => 114,  252 => 112,  250 => 110,  248 => 109,  246 => 108,  243 => 107,  239 => 105,  237 => 103,  236 => 100,  235 => 99,  234 => 98,  232 => 97,  229 => 96,  227 => 95,  224 => 94,  220 => 92,  218 => 89,  217 => 86,  215 => 83,  213 => 82,  210 => 81,  207 => 80,  204 => 79,  200 => 77,  197 => 75,  194 => 74,  192 => 73,  189 => 72,  185 => 70,  183 => 69,  182 => 67,  180 => 65,  178 => 64,  175 => 63,  171 => 61,  169 => 60,  168 => 59,  167 => 58,  165 => 56,  162 => 55,  158 => 54,  153 => 576,  147 => 573,  144 => 572,  142 => 571,  137 => 569,  132 => 568,  126 => 566,  124 => 565,  121 => 564,  119 => 563,  112 => 559,  108 => 557,  106 => 556,  103 => 555,  101 => 554,  99 => 553,  97 => 552,  95 => 54,  88 => 50,  84 => 48,  81 => 47,  78 => 46,  75 => 45,  72 => 44,  69 => 43,  67 => 42,  62 => 40,  58 => 39,  55 => 38,  51 => 36,  49 => 35,  47 => 34,  44 => 33,  42 => 32,  39 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "generic_show_form.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\generic_show_form.html.twig");
    }
}
