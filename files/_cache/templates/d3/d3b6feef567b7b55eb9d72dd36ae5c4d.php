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

/* pages/assets/rack.html.twig */
class __TwigTemplate_bbb4649030c0eb0df5bc7439ce984be5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 32
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/rack.html.twig", 33)->unwrap();
        // line 34
        $context["params"] = (($context["params"]) ?? ([]));
        // line 35
        $context["rand"] = twig_random($this->env);
        // line 32
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/rack.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["DCRoom", "dcrooms_id", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dcrooms_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("DCRoom"), ["rand" =>         // line 39
($context["rand"] ?? null)]], 38, $context, $this->getSourceContext());
        // line 40
        echo "
   ";
        // line 41
        $context["current_position"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["position"] ?? null) : null);
        // line 42
        echo "   ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [0 => ("dropdown_dcrooms_id" .         // line 44
($context["rand"] ?? null)), 1 => "room_positions", 2 => ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dcroom_size.php"), 3 => ["id" => "__VALUE__", "current" =>         // line 49
($context["current_position"] ?? null), "rand" =>         // line 50
($context["rand"] ?? null)]]);
        // line 53
        echo "   ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [0 => ("dropdown_dcrooms_id" .         // line 55
($context["rand"] ?? null)), 1 => ("dropdown_locations_id" .         // line 56
($context["rand"] ?? null)), 2 => ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dropdownLocation.php"), 3 => ["items_id" => "__VALUE__", "itemtype" => "DCRoom"]]);
        // line 63
        echo "
   ";
        // line 64
        ob_start(function () { return ''; });
        // line 65
        echo "      ";
        if (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["dcrooms_id"] ?? null) : null) > 0)) {
            // line 66
            echo "         ";
            $context["dcroom"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("DCRoom", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["dcrooms_id"] ?? null) : null));
            // line 67
            echo "         ";
            if ( !(null === ($context["dcroom"] ?? null))) {
                // line 68
                echo "            ";
                $context["used"] = twig_get_attribute($this->env, $this->source, ($context["dcroom"] ?? null), "getFilled", [0 => ($context["current_position"] ?? null)], "method", false, false, false, 68);
                // line 69
                echo "            ";
                $context["positions"] = twig_get_attribute($this->env, $this->source, ($context["dcroom"] ?? null), "getAllPositions", [], "method", false, false, false, 69);
                // line 70
                echo "            ";
                echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["position", ($context["current_position"] ?? null), ($context["positions"] ?? null), null, ["rand" =>                 // line 71
($context["rand"] ?? null), "used" =>                 // line 72
($context["used"] ?? null), "no_label" => true]], 70, $context, $this->getSourceContext());
                // line 74
                echo "
         ";
            } else {
                // line 76
                echo "            <div class=\"col-form-label\">";
                echo twig_escape_filter($this->env, __("No room found or selected"), "html", null, true);
                echo "</div>
         ";
            }
            // line 78
            echo "      ";
        } else {
            // line 79
            echo "         <div class=\"col-form-label\">";
            echo twig_escape_filter($this->env, __("No room found or selected"), "html", null, true);
            echo "</div>
      ";
        }
        // line 81
        echo "   ";
        $context["initial_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_ajaxField", ["room_positions", ($context["initial_field"] ?? null), __("Position in room"), ["rand" =>         // line 83
($context["rand"] ?? null)]], 82, $context, $this->getSourceContext());
        // line 84
        echo "

   ";
        // line 86
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["room_orientation", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 88
($context["item"] ?? null), "fields", [], "any", false, false, false, 88)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["room_orientation"] ?? null) : null), [twig_constant("Rack::ROOM_O_NORTH") => __("North"), twig_constant("Rack::ROOM_O_EAST") => __("East"), twig_constant("Rack::ROOM_O_SOUTH") => __("South"), twig_constant("Rack::ROOM_O_WEST") => __("West")], __("Door orientation in room"), ["rand" =>         // line 97
($context["rand"] ?? null)]], 86, $context, $this->getSourceContext());
        // line 99
        echo "

   ";
        // line 101
        echo twig_call_macro($macros["fields"], "macro_numberField", ["number_units", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["number_units"] ?? null) : null), __("Number of units"), ["rand" =>         // line 102
($context["rand"] ?? null), "min" => 1, "max" => 100, "step" => 1]], 101, $context, $this->getSourceContext());
        // line 106
        echo "

   ";
        // line 108
        echo twig_call_macro($macros["fields"], "macro_numberField", ["width", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["width"] ?? null) : null), __("Width"), ["rand" =>         // line 109
($context["rand"] ?? null), "min" => 0, "step" => 1]], 108, $context, $this->getSourceContext());
        // line 112
        echo "

   ";
        // line 114
        echo twig_call_macro($macros["fields"], "macro_numberField", ["height", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 114)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["height"] ?? null) : null), __("Height"), ["rand" =>         // line 115
($context["rand"] ?? null), "min" => 0, "step" => 1]], 114, $context, $this->getSourceContext());
        // line 118
        echo "

   ";
        // line 120
        echo twig_call_macro($macros["fields"], "macro_numberField", ["depth", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["depth"] ?? null) : null), __("Depth"), ["rand" =>         // line 121
($context["rand"] ?? null), "min" => 0, "step" => 1]], 120, $context, $this->getSourceContext());
        // line 124
        echo "

   ";
        // line 126
        echo twig_call_macro($macros["fields"], "macro_numberField", ["max_power", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 126)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["max_power"] ?? null) : null), __("Max. power (in watts)"), ["rand" =>         // line 127
($context["rand"] ?? null), "min" => 0, "step" => 1]], 126, $context, $this->getSourceContext());
        // line 130
        echo "

   ";
        // line 132
        echo twig_call_macro($macros["fields"], "macro_numberField", ["mesured_power", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["mesured_power"] ?? null) : null), __("Measured power (in watts)"), ["rand" =>         // line 133
($context["rand"] ?? null), "min" => 0, "step" => 1]], 132, $context, $this->getSourceContext());
        // line 136
        echo "

   ";
        // line 138
        echo twig_call_macro($macros["fields"], "macro_numberField", ["max_weight", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 138)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["max_weight"] ?? null) : null), __("Max. weight"), ["rand" =>         // line 139
($context["rand"] ?? null), "min" => 0, "step" => 1]], 138, $context, $this->getSourceContext());
        // line 142
        echo "

   ";
        // line 144
        echo twig_call_macro($macros["fields"], "macro_colorField", ["bgcolor", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 144)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["bgcolor"] ?? null) : null), __("Background color")], 144, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/assets/rack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 144,  185 => 142,  183 => 139,  182 => 138,  178 => 136,  176 => 133,  175 => 132,  171 => 130,  169 => 127,  168 => 126,  164 => 124,  162 => 121,  161 => 120,  157 => 118,  155 => 115,  154 => 114,  150 => 112,  148 => 109,  147 => 108,  143 => 106,  141 => 102,  140 => 101,  136 => 99,  134 => 97,  133 => 88,  132 => 86,  128 => 84,  126 => 83,  124 => 82,  121 => 81,  115 => 79,  112 => 78,  106 => 76,  102 => 74,  100 => 72,  99 => 71,  97 => 70,  94 => 69,  91 => 68,  88 => 67,  85 => 66,  82 => 65,  80 => 64,  77 => 63,  75 => 56,  74 => 55,  72 => 53,  70 => 50,  69 => 49,  68 => 44,  66 => 42,  64 => 41,  61 => 40,  59 => 39,  57 => 38,  53 => 37,  48 => 32,  46 => 35,  44 => 34,  42 => 33,  35 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/rack.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\assets\\rack.html.twig");
    }
}
