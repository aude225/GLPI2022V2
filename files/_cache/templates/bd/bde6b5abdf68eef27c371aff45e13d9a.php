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

/* dropdown_form.html.twig */
class __TwigTemplate_3c89c08ca23119059a1cc8c37f4c795d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "dropdown_form.html.twig", 32)->unwrap();
        // line 33
        echo "
<div class=\"asset\">
    ";
        // line 35
        echo twig_include($this->env, $context, "components/form/header.html.twig");
        echo "
    ";
        // line 36
        $context["rand"] = twig_random($this->env);
        // line 37
        echo "    ";
        $context["base_fields_params"] = (($context["fields_params"]) ?? ([]));
        // line 38
        echo "    ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 39
        echo "    ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 39)));
        // line 40
        echo "    ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 40) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 41
        echo "
    <div class=\"card-body row\">
        ";
        // line 43
        $context["picture_fields"] = [0 => "picture_front", 1 => "picture_rear", 2 => "pictures"];
        // line 44
        echo "        ";
        $context["has_picture_field"] = false;
        // line 45
        echo "
        ";
        // line 47
        echo "        ";
        echo twig_call_macro($macros["fields"], "macro_autoNameField", [((twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "isField", [0 => "designation"], "method", false, false, false, 48)) ? ("designation") : ("name")),         // line 49
($context["item"] ?? null), __("Name"),         // line 51
($context["withtemplate"] ?? null)], 47, $context, $this->getSourceContext());
        // line 52
        echo "

        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 54)) {
            // line 55
            echo "            ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 57
($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber())], 55, $context, $this->getSourceContext());
            // line 59
            echo "
        ";
        }
        // line 61
        echo "
        ";
        // line 63
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 64
            echo "            ";
            $context["fields_params"] = ($context["base_fields_params"] ?? null);
            // line 65
            echo "            ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 65)) ? (_twig_default_filter((($__internal_compile_5 = $context["field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["type"] ?? null) : null), "")) : (""));
            // line 66
            echo "            ";
            $context["show_field"] = true;
            // line 67
            echo "            ";
            if ((((($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null) == "entities_id") && ((($context["type"] ?? null) != "parent") || ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null) == 0)))) {
                // line 68
                echo "                ";
                // line 69
                echo "                ";
                $context["show_field"] = false;
                // line 70
                echo "            ";
            }
            // line 71
            echo "            ";
            if (twig_in_filter((($__internal_compile_8 = $context["field"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 72
                echo "                ";
                $context["show_field"] = false;
                // line 73
                echo "            ";
            }
            // line 74
            echo "            ";
            if (($context["show_field"] ?? null)) {
                // line 75
                echo "
                ";
                // line 76
                if (((($__internal_compile_9 = $context["field"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null) == "header")) {
                    // line 77
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_largeTitle", [(($__internal_compile_10 = $context["field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["label"] ?? null) : null)], 77, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif (((($__internal_compile_11 =                 // line 78
$context["field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null) == "content")) {
                    // line 79
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,                     // line 81
($context["item"] ?? null), "fields", [], "any", false, false, false, 81)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["content"] ?? null) : null), (($__internal_compile_13 =                     // line 82
$context["field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["label"] ?? null) : null), ["full_width" => true, "full_width_adapt_column" => false, "is_horizontal" => false, "enable_richtext" => true, "enable_images" => false]], 79, $context, $this->getSourceContext());
                    // line 90
                    echo "
                ";
                } elseif ((                // line 91
($context["type"] ?? null) == "UserDropdown")) {
                    // line 92
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", (($__internal_compile_14 =                     // line 94
$context["field"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["name"] ?? null) : null), (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,                     // line 95
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[(($__internal_compile_16 = $context["field"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_17 =                     // line 96
$context["field"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["label"] ?? null) : null), ["entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,                     // line 98
($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null), "right" => ((twig_get_attribute($this->env, $this->source,                     // line 99
$context["field"], "right", [], "array", true, true, false, 99)) ? (_twig_default_filter((($__internal_compile_19 = $context["field"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["right"] ?? null) : null), "interface")) : ("interface")), "rand" =>                     // line 100
($context["rand"] ?? null)]], 92, $context, $this->getSourceContext());
                    // line 102
                    echo "
                ";
                } elseif ((                // line 103
($context["type"] ?? null) == "dropdownValue")) {
                    // line 104
                    echo "                    ";
                    $context["dropdown_params"] = ["entity" => (($__internal_compile_20 = twig_get_attribute($this->env, $this->source,                     // line 105
($context["item"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["entities_id"] ?? null) : null)];
                    // line 107
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "condition", [], "array", true, true, false, 107)) {
                        // line 108
                        echo "                        ";
                        $context["dropdown_params"] = twig_array_merge(($context["dropdown_params"] ?? null), ["condition" => (($__internal_compile_21 = $context["field"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["condition"] ?? null) : null)]);
                        // line 109
                        echo "                    ";
                    }
                    // line 110
                    echo "                    ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [0 => (($__internal_compile_22 = $context["field"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["name"] ?? null) : null)]);
                    // line 111
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", [($context["dropdown_itemtype"] ?? null), (($__internal_compile_23 = $context["field"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["name"] ?? null) : null), (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[(($__internal_compile_25 = $context["field"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_26 = $context["field"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["label"] ?? null) : null), ($context["dropdown_params"] ?? null)], 111, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 112
($context["type"] ?? null) == "text")) {
                    // line 113
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_autoNameField", [(($__internal_compile_27 = $context["field"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["name"] ?? null) : null), ($context["item"] ?? null), (($__internal_compile_28 = $context["field"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["label"] ?? null) : null), ($context["withtemplate"] ?? null), ($context["fields_params"] ?? null)], 113, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 114
($context["type"] ?? null) == "textarea")) {
                    // line 115
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [(($__internal_compile_29 = $context["field"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["name"] ?? null) : null), (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 115)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[(($__internal_compile_31 = $context["field"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_32 = $context["field"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["label"] ?? null) : null), ($context["fields_params"] ?? null)], 115, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 116
($context["type"] ?? null) == "integer")) {
                    // line 117
                    echo "                    ";
                    $context["fields_params"] = ["value" => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,                     // line 118
($context["item"] ?? null), "fields", [], "any", false, false, false, 118)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[(($__internal_compile_34 = $context["field"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["name"] ?? null) : null)] ?? null) : null)];
                    // line 120
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 120)) {
                        // line 121
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["min" => (($__internal_compile_35 = $context["field"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["min"] ?? null) : null)]);
                        // line 122
                        echo "                    ";
                    }
                    // line 123
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 123)) {
                        // line 124
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["step" => (($__internal_compile_36 = $context["field"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["step"] ?? null) : null)]);
                        // line 125
                        echo "                    ";
                    }
                    // line 126
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 126)) {
                        // line 127
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["max" => (($__internal_compile_37 = $context["field"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["max"] ?? null) : null)]);
                        // line 128
                        echo "                    ";
                    }
                    // line 129
                    echo "
                    ";
                    // line 130
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["type" => "number"]);
                    // line 131
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_numberField", [(($__internal_compile_38 = $context["field"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["name"] ?? null) : null), (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[(($__internal_compile_40 = $context["field"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_41 = $context["field"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["label"] ?? null) : null), ($context["fields_params"] ?? null)], 131, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 132
($context["type"] ?? null) == "timestamp")) {
                    // line 133
                    echo "                    ";
                    $context["fields_params"] = ["value" => (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[(($__internal_compile_43 = $context["field"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["name"] ?? null) : null)] ?? null) : null)];
                    // line 134
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 134)) {
                        // line 135
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["min" => (($__internal_compile_44 = $context["field"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["min"] ?? null) : null)]);
                        // line 136
                        echo "                    ";
                    }
                    // line 137
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 137)) {
                        // line 138
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["step" => (($__internal_compile_45 = $context["field"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["step"] ?? null) : null)]);
                        // line 139
                        echo "                    ";
                    }
                    // line 140
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 140)) {
                        // line 141
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["max" => (($__internal_compile_46 = $context["field"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["max"] ?? null) : null)]);
                        // line 142
                        echo "                    ";
                    }
                    // line 143
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", [(($__internal_compile_47 = $context["field"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["name"] ?? null) : null), (($__internal_compile_48 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[(($__internal_compile_49 = $context["field"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_50 = $context["field"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["label"] ?? null) : null), ($context["fields_params"] ?? null)], 143, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 144
($context["type"] ?? null) == "parent")) {
                    // line 145
                    echo "                    ";
                    $context["restrict"] = ((((($__internal_compile_51 = $context["field"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["name"] ?? null) : null) == "entities_id")) ? ( -1) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 145)));
                    // line 146
                    echo "                    ";
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["entity" => ($context["restrict"] ?? null)]);
                    // line 147
                    echo "                    ";
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["used" => ((((($__internal_compile_52 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 147)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["id"] ?? null) : null) > 0)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getSonsOf", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTable", [], "method", false, false, false, 147), 1 => (($__internal_compile_53 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 147)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["id"] ?? null) : null)])) : ([]))]);
                    // line 148
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownField", [($context["item"] ?? null), (($__internal_compile_54 = $context["field"]) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["name"] ?? null) : null), (($__internal_compile_55 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 148)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[(($__internal_compile_56 = $context["field"]) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_57 = $context["field"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["label"] ?? null) : null), ($context["fields_params"] ?? null)], 148, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 149
($context["type"] ?? null) == "icon")) {
                    // line 150
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownIcons", [(($__internal_compile_58 = $context["field"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["name"] ?? null) : null), (($__internal_compile_59 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[(($__internal_compile_60 = $context["field"]) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_61 = $context["field"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["label"] ?? null) : null), ($context["fields_params"] ?? null)], 150, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 151
                    if ( !twig_test_empty((($__internal_compile_62 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 151)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62[(($__internal_compile_63 = $context["field"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["name"] ?? null) : null)] ?? null) : null))) {
                        // line 152
                        echo "                        <img class=\"align-middle\" alt=\"\" src=\"";
                        echo twig_escape_filter($this->env, (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("typedoc_icon_dir") . "/") . (($__internal_compile_64 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 152)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[(($__internal_compile_65 = $context["field"]) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["name"] ?? null) : null)] ?? null) : null)), "html", null, true);
                        echo "\"/>
                    ";
                    }
                    // line 154
                    echo "                ";
                } elseif ((($context["type"] ?? null) == "bool")) {
                    // line 155
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", [(($__internal_compile_66 = $context["field"]) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["name"] ?? null) : null), (($__internal_compile_67 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 155)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67[(($__internal_compile_68 = $context["field"]) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_69 = $context["field"]) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["label"] ?? null) : null), ($context["fields_params"] ?? null)], 155, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 156
($context["type"] ?? null) == "color")) {
                    // line 157
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_colorField", [(($__internal_compile_70 = $context["field"]) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["name"] ?? null) : null), (($__internal_compile_71 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71[(($__internal_compile_72 = $context["field"]) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_73 = $context["field"]) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["label"] ?? null) : null), ($context["fields_params"] ?? null)], 157, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 158
($context["type"] ?? null) == "date")) {
                    // line 159
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dateField", [(($__internal_compile_74 = $context["field"]) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["name"] ?? null) : null), (($__internal_compile_75 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75[(($__internal_compile_76 = $context["field"]) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_77 = $context["field"]) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["label"] ?? null) : null), ($context["fields_params"] ?? null)], 159, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 160
($context["type"] ?? null) == "datetime")) {
                    // line 161
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_datetimeField", [(($__internal_compile_78 = $context["field"]) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["name"] ?? null) : null), (($__internal_compile_79 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 161)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79[(($__internal_compile_80 = $context["field"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_81 = $context["field"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["label"] ?? null) : null), ($context["fields_params"] ?? null)], 161, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 162
($context["type"] ?? null) == "picture")) {
                    // line 163
                    echo "                    ";
                    if ( !twig_test_empty((($__internal_compile_82 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 163)) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82[(($__internal_compile_83 = $context["field"]) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["name"] ?? null) : null)] ?? null) : null))) {
                        // line 164
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_imageField", [(($__internal_compile_84 = $context["field"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($__internal_compile_85 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 164)) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85[(($__internal_compile_86 = $context["field"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["name"] ?? null) : null)] ?? null) : null)), (($__internal_compile_87 = $context["field"]) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87["label"] ?? null) : null), twig_array_merge(($context["fields_params"] ?? null), ["clearable" => ( !twig_get_attribute($this->env, $this->source,                         // line 165
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 165) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 165))])], 164, $context, $this->getSourceContext());
                        // line 166
                        echo "
                    ";
                    } else {
                        // line 168
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_fileField", [(($__internal_compile_88 = $context["field"]) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["name"] ?? null) : null), null, (($__internal_compile_89 = $context["field"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["label"] ?? null) : null), ["onlyimages" => true]], 168, $context, $this->getSourceContext());
                        // line 170
                        echo "
                    ";
                    }
                    // line 172
                    echo "                ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 173
                    echo "                    ";
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [0 => (($__internal_compile_90 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90[(($__internal_compile_91 = $context["field"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["name"] ?? null) : null)] ?? null) : null)]);
                    // line 174
                    echo "                    ";
                    $context["picture_urls"] = [];
                    // line 175
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 176
                        echo "                        ";
                        $context["picture_urls"] = twig_array_merge(($context["picture_urls"] ?? null), [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 177
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 178
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_imageGalleryField", [(($__internal_compile_92 = $context["field"]) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92["name"] ?? null) : null), ($context["picture_urls"] ?? null), (($__internal_compile_93 = $context["field"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["label"] ?? null) : null), twig_array_merge(($context["fields_params"] ?? null), ["clearable" => ( !twig_get_attribute($this->env, $this->source,                     // line 179
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 179) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 179))])], 178, $context, $this->getSourceContext());
                    // line 180
                    echo "
                ";
                } elseif ((                // line 181
($context["type"] ?? null) == "password")) {
                    // line 182
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_passwordField", [(($__internal_compile_94 = $context["field"]) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["name"] ?? null) : null), (($__internal_compile_95 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 182)) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95[(($__internal_compile_96 = $context["field"]) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_97 = $context["field"]) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["label"] ?? null) : null), ($context["fields_params"] ?? null)], 182, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 183
($context["type"] ?? null) == "tinymce")) {
                    // line 184
                    echo "                    ";
                    $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["enable_richtext" => true]);
                    // line 185
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [(($__internal_compile_98 = $context["field"]) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["name"] ?? null) : null), (($__internal_compile_99 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 185)) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99[(($__internal_compile_100 = $context["field"]) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_101 = $context["field"]) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101["label"] ?? null) : null), ($context["fields_params"] ?? null)], 185, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 186
($context["type"] ?? null) == "duration")) {
                    // line 187
                    echo "                    ";
                    $context["toadd"] = [];
                    // line 188
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(9, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 189
                        echo "                        ";
                        $context["toadd"] = twig_array_merge(($context["toadd"] ?? null), [0 => ($context["i"] * twig_constant("HOUR_TIMESTAMP"))]);
                        // line 190
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 191
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", [(($__internal_compile_102 = $context["field"]) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["name"] ?? null) : null), (($__internal_compile_103 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 191)) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103[(($__internal_compile_104 = $context["field"]) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_105 = $context["field"]) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105["label"] ?? null) : null), ($context["fields_params"] ?? null)], 191, $context, $this->getSourceContext());
                    echo "
                ";
                } elseif ((                // line 192
($context["type"] ?? null) == "itemtypename")) {
                    // line 193
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "itemtype_list", [], "array", true, true, false, 193)) {
                        // line 194
                        echo "                        ";
                        $context["fields_params"] = twig_array_merge(($context["fields_params"] ?? null), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config((($__internal_compile_106 = $context["field"]) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["itemtype_list"] ?? null) : null))]);
                        // line 195
                        echo "                    ";
                    }
                    // line 196
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_dropdownItemTypes", [(($__internal_compile_107 = $context["field"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["name"] ?? null) : null), (($__internal_compile_108 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 196)) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108[(($__internal_compile_109 = $context["field"]) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_110 = $context["field"]) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["label"] ?? null) : null), ($context["fields_params"] ?? null)], 196, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 198
                    echo "                    ";
                    ob_start(function () { return ''; });
                    // line 199
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displaySpecificTypeField", [0 => (($__internal_compile_111 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 199)) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["id"] ?? null) : null), 1 => $context["field"], 2 => ($context["fields_params"] ?? null)], "method", false, false, false, 199), "html", null, true);
                    echo "
                    ";
                    $context["field_value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 201
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_field", [(($__internal_compile_112 = $context["field"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["name"] ?? null) : null), ($context["field_value"] ?? null), (($__internal_compile_113 = $context["field"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["label"] ?? null) : null)], 201, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 203
                echo "            ";
            } elseif (twig_in_filter((($__internal_compile_114 = $context["field"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 204
                echo "                ";
                $context["has_picture_field"] = true;
                // line 205
                echo "            ";
            }
            // line 206
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "
        ";
        // line 208
        if (($context["has_picture_field"] ?? null)) {
            // line 209
            echo "            ";
            echo twig_call_macro($macros["fields"], "macro_largeTitle", [_n("Picture", "Pictures", Session::getPluralNumber()), "fas fa-image"], 209, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 211
        echo "        ";
        // line 212
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 213
            echo "            ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 213)) ? (_twig_default_filter((($__internal_compile_115 = $context["field"]) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115["type"] ?? null) : null), "")) : (""));
            // line 214
            echo "            ";
            if (twig_in_filter((($__internal_compile_116 = $context["field"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 215
                echo "                ";
                if ((($context["type"] ?? null) == "picture")) {
                    // line 216
                    echo "                    ";
                    if (((($__internal_compile_117 = $context["field"]) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["name"] ?? null) : null) == "picture_front")) {
                        // line 217
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Rack pictures"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Rack")], 217, $context, $this->getSourceContext());
                        echo "
                    ";
                    }
                    // line 219
                    echo "                    ";
                    if ( !twig_test_empty((($__internal_compile_118 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 219)) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118[(($__internal_compile_119 = $context["field"]) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["name"] ?? null) : null)] ?? null) : null))) {
                        // line 220
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_imageField", [(($__internal_compile_120 = $context["field"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($__internal_compile_121 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 220)) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121[(($__internal_compile_122 = $context["field"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["name"] ?? null) : null)] ?? null) : null)), (($__internal_compile_123 = $context["field"]) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123["label"] ?? null) : null), twig_array_merge(($context["base_fields_params"] ?? null), ["clearable" => twig_get_attribute($this->env, $this->source,                         // line 221
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 221)])], 220, $context, $this->getSourceContext());
                        // line 222
                        echo "
                    ";
                    } else {
                        // line 224
                        echo "                        ";
                        echo twig_call_macro($macros["fields"], "macro_fileField", [(($__internal_compile_124 = $context["field"]) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["name"] ?? null) : null), null, (($__internal_compile_125 = $context["field"]) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["label"] ?? null) : null), ["onlyimages" => true]], 224, $context, $this->getSourceContext());
                        // line 226
                        echo "
                    ";
                    }
                    // line 228
                    echo "                ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 229
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_smallTitle", [__("Other pictures"), "fas fa-images"], 229, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 230
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [0 => (($__internal_compile_126 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 230)) && is_array($__internal_compile_126) || $__internal_compile_126 instanceof ArrayAccess ? ($__internal_compile_126[(($__internal_compile_127 = $context["field"]) && is_array($__internal_compile_127) || $__internal_compile_127 instanceof ArrayAccess ? ($__internal_compile_127["name"] ?? null) : null)] ?? null) : null)]);
                    // line 231
                    echo "                    ";
                    $context["picture_urls"] = [];
                    // line 232
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 233
                        echo "                        ";
                        $context["picture_urls"] = twig_array_merge(($context["picture_urls"] ?? null), [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 234
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 235
                    echo "                    ";
                    echo twig_call_macro($macros["fields"], "macro_imageGalleryField", [(($__internal_compile_128 = $context["field"]) && is_array($__internal_compile_128) || $__internal_compile_128 instanceof ArrayAccess ? ($__internal_compile_128["name"] ?? null) : null), ($context["picture_urls"] ?? null), "", twig_array_merge(($context["base_fields_params"] ?? null), ["clearable" => twig_get_attribute($this->env, $this->source,                     // line 236
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 236), "no_label" => true])], 235, $context, $this->getSourceContext());
                    // line 238
                    echo "
                ";
                }
                // line 240
                echo "            ";
            }
            // line 241
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "    </div>
    ";
        // line 243
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "dropdown_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 243,  583 => 242,  577 => 241,  574 => 240,  570 => 238,  568 => 236,  566 => 235,  560 => 234,  557 => 233,  552 => 232,  549 => 231,  547 => 230,  542 => 229,  539 => 228,  535 => 226,  532 => 224,  528 => 222,  526 => 221,  524 => 220,  521 => 219,  515 => 217,  512 => 216,  509 => 215,  506 => 214,  503 => 213,  498 => 212,  496 => 211,  490 => 209,  488 => 208,  485 => 207,  479 => 206,  476 => 205,  473 => 204,  470 => 203,  464 => 201,  458 => 199,  455 => 198,  449 => 196,  446 => 195,  443 => 194,  440 => 193,  438 => 192,  433 => 191,  427 => 190,  424 => 189,  419 => 188,  416 => 187,  414 => 186,  409 => 185,  406 => 184,  404 => 183,  399 => 182,  397 => 181,  394 => 180,  392 => 179,  390 => 178,  384 => 177,  381 => 176,  376 => 175,  373 => 174,  370 => 173,  367 => 172,  363 => 170,  360 => 168,  356 => 166,  354 => 165,  352 => 164,  349 => 163,  347 => 162,  342 => 161,  340 => 160,  335 => 159,  333 => 158,  328 => 157,  326 => 156,  321 => 155,  318 => 154,  312 => 152,  310 => 151,  305 => 150,  303 => 149,  298 => 148,  295 => 147,  292 => 146,  289 => 145,  287 => 144,  282 => 143,  279 => 142,  276 => 141,  273 => 140,  270 => 139,  267 => 138,  264 => 137,  261 => 136,  258 => 135,  255 => 134,  252 => 133,  250 => 132,  245 => 131,  243 => 130,  240 => 129,  237 => 128,  234 => 127,  231 => 126,  228 => 125,  225 => 124,  222 => 123,  219 => 122,  216 => 121,  213 => 120,  211 => 118,  209 => 117,  207 => 116,  202 => 115,  200 => 114,  195 => 113,  193 => 112,  188 => 111,  185 => 110,  182 => 109,  179 => 108,  176 => 107,  174 => 105,  172 => 104,  170 => 103,  167 => 102,  165 => 100,  164 => 99,  163 => 98,  162 => 96,  161 => 95,  160 => 94,  158 => 92,  156 => 91,  153 => 90,  151 => 82,  150 => 81,  148 => 79,  146 => 78,  141 => 77,  139 => 76,  136 => 75,  133 => 74,  130 => 73,  127 => 72,  124 => 71,  121 => 70,  118 => 69,  116 => 68,  113 => 67,  110 => 66,  107 => 65,  104 => 64,  99 => 63,  96 => 61,  92 => 59,  90 => 57,  88 => 55,  86 => 54,  82 => 52,  80 => 51,  79 => 49,  78 => 48,  76 => 47,  73 => 45,  70 => 44,  68 => 43,  64 => 41,  61 => 40,  58 => 39,  55 => 38,  52 => 37,  50 => 36,  46 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "dropdown_form.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\dropdown_form.html.twig");
    }
}
