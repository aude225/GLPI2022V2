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

/* pages/management/certificate.html.twig */
class __TwigTemplate_74aaf8c871666f946856a49c67354250 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/management/certificate.html.twig", 33)->unwrap();
        // line 34
        $context["params"] = (($context["params"]) ?? ([]));
        // line 32
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/management/certificate.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_autosign", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["is_autosign"] ?? null) : null), __("Self-signed")], 37, $context, $this->getSourceContext());
        echo "

   ";
        // line 39
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["dns_name",         // line 41
($context["item"] ?? null), __("DNS name"),         // line 43
($context["withtemplate"] ?? null)], 39, $context, $this->getSourceContext());
        // line 44
        echo "

   ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_autoNameField", ["dns_suffix",         // line 48
($context["item"] ?? null), __("DNS suffix"),         // line 50
($context["withtemplate"] ?? null)], 46, $context, $this->getSourceContext());
        // line 51
        echo "

   ";
        // line 53
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["expire", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["expire"] ?? null) : null), __("Expiration"), ["helper" => __("On search engine, use \"Expiration contains NULL\" to search licenses with no expiration date")]], 53, $context, $this->getSourceContext());
        // line 55
        echo "

   ";
        // line 57
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["command", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["command"] ?? null) : null), __("Command used")], 57, $context, $this->getSourceContext());
        echo "

   ";
        // line 59
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["certificate_request", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["certificate_request"] ?? null) : null), __("Certificate request (CSR)")], 59, $context, $this->getSourceContext());
        echo "

   ";
        // line 61
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["certificate_item", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["certificate_item"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Certificate")], 61, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/management/certificate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 61,  88 => 59,  83 => 57,  79 => 55,  77 => 53,  73 => 51,  71 => 50,  70 => 48,  69 => 46,  65 => 44,  63 => 43,  62 => 41,  61 => 39,  55 => 37,  51 => 36,  46 => 32,  44 => 34,  42 => 33,  35 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/management/certificate.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\management\\certificate.html.twig");
    }
}
