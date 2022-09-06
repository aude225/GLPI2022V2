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

/* pages/management/softwarelicense.html.twig */
class __TwigTemplate_767cc1bb9ab9a94ab47ce3d408a89d62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/management/softwarelicense.html.twig", 33)->unwrap();
        // line 34
        $context["params"] = (($context["params"]) ?? ([]));
        // line 32
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/management/softwarelicense.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Software", "softwares_id", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 40
($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["softwares_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Software"), ["entity" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 43
($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["entities_id"] ?? null) : null), "condition" => ["is_template" => 0, "is_deleted" => 0]]], 37, $context, $this->getSourceContext());
        // line 49
        echo "

   ";
        // line 51
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 51, $context, $this->getSourceContext());
        echo "

   ";
        // line 53
        $this->displayParentBlock("form_fields", $context, $blocks);
        echo "
";
    }

    // line 56
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "   ";
        ob_start(function () { return ''; });
        // line 58
        echo "      ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [0 => ["name" => "softwareversions_id_use", "softwares_id" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["softwares_id"] ?? null) : null), "value" => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 61
($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["softwareversions_id_use"] ?? null) : null), "width" => "100%"]]);
        // line 64
        echo "   ";
        $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_field", ["softwareversions_id_use", ($context["field"] ?? null), __("Version in use")], 65, $context, $this->getSourceContext());
        echo "

   ";
        // line 67
        ob_start(function () { return ''; });
        // line 68
        echo "      ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [0 => ["name" => "softwareversions_id_buy", "softwares_id" => (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["softwares_id"] ?? null) : null), "value" => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 71
($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["softwareversions_id_buy"] ?? null) : null), "width" => "100%"]]);
        // line 74
        echo "   ";
        $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_field", ["softwareversions_id_buy", ($context["field"] ?? null), __("Purchase version")], 75, $context, $this->getSourceContext());
        echo "

   ";
        // line 77
        $context["validity_msg"] = null;
        // line 78
        echo "   ";
        if ((($context["item_type"] ?? null) == "SoftwareLicense")) {
            // line 79
            echo "      ";
            ob_start(function () { return ''; });
            // line 80
            echo "         ";
            if ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_valid"] ?? null) : null)) {
                // line 81
                echo "            <span class=\"green\">";
                echo twig_escape_filter($this->env, _x("adjective", "Valid"), "html", null, true);
                echo "</span>
         ";
            } elseif (( !(($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 82
($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["is_valid"] ?? null) : null) && (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["allow_overquota"] ?? null) : null))) {
                // line 83
                echo "            <span class=\"green\">";
                echo twig_escape_filter($this->env, _x("adjective", "Valid (Over Quota)"), "html", null, true);
                echo "</span>
         ";
            } else {
                // line 85
                echo "            <span class=\"red\">";
                echo twig_escape_filter($this->env, _x("adjective", "Invalid"), "html", null, true);
                echo "</span>
         ";
            }
            // line 87
            echo "      ";
            $context["validity_msg"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 88
            echo "   ";
        }
        // line 89
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_numberField", ["number", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["number"] ?? null) : null), _x("quantity", "Number"), ["min" => 1, "max" => 10000, "step" => 1, "toadd" => ["-1" => __("Unlimited")], "add_field_html" =>         // line 94
($context["validity_msg"] ?? null)]], 89, $context, $this->getSourceContext());
        // line 95
        echo "

   ";
        // line 97
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["allow_overquota", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["allow_overquota"] ?? null) : null), __("Allow Over-Quota")], 97, $context, $this->getSourceContext());
        echo "

   ";
        // line 99
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["expire", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["expire"] ?? null) : null), __("Expiration"), ["helper" => __("On search engine, use \"Expiration contains NULL\" to search licenses with no expiration date")]], 99, $context, $this->getSourceContext());
        // line 101
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/management/softwarelicense.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 101,  162 => 99,  157 => 97,  153 => 95,  151 => 94,  149 => 89,  146 => 88,  143 => 87,  137 => 85,  131 => 83,  129 => 82,  124 => 81,  121 => 80,  118 => 79,  115 => 78,  113 => 77,  107 => 75,  104 => 74,  102 => 71,  101 => 70,  99 => 68,  97 => 67,  91 => 65,  88 => 64,  86 => 61,  85 => 60,  83 => 58,  80 => 57,  76 => 56,  70 => 53,  65 => 51,  61 => 49,  59 => 43,  58 => 40,  56 => 37,  52 => 36,  47 => 32,  45 => 34,  43 => 33,  36 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/management/softwarelicense.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\management\\softwarelicense.html.twig");
    }
}
