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

/* pages/assets/software.html.twig */
class __TwigTemplate_0606312513c8c369c669541031184b1e extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/software.html.twig", 33)->unwrap();
        // line 34
        $context["params"] = (($context["params"]) ?? ([]));
        // line 32
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/software.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "   ";
        ob_start(function () { return ''; });
        // line 38
        echo "      ";
        echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("Software", ["value" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 39
($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["softwares_id"] ?? null) : null), "rand" =>         // line 40
($context["rand"] ?? null)]);
        // line 41
        echo "
   ";
        $context["dd_software"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "
   ";
        // line 44
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["is_update", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 46
($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["is_update"] ?? null) : null), __("Upgrade"), ["add_field_html" =>         // line 48
($context["dd_software"] ?? null)]], 44, $context, $this->getSourceContext());
        // line 49
        echo "

   ";
        // line 51
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["SoftwareCategory", "softwarecategories_id", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["softwarecategories_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SoftwareCategory")], 51, $context, $this->getSourceContext());
        // line 56
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/assets/software.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 56,  79 => 54,  78 => 51,  74 => 49,  72 => 48,  71 => 46,  70 => 44,  67 => 43,  63 => 41,  61 => 40,  60 => 39,  58 => 38,  55 => 37,  51 => 36,  46 => 32,  44 => 34,  42 => 33,  35 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/software.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\assets\\software.html.twig");
    }
}
