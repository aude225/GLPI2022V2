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

/* components/itilobject/fields/priority_matrix.html.twig */
class __TwigTemplate_2bf9cce2e91b10e52bbbcc3fc900e7cb extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields/priority_matrix.html.twig", 32)->unwrap();
        // line 33
        $context["rand"] = twig_random($this->env);
        // line 34
        echo "
";
        // line 35
        $context["urgency_options"] = twig_array_merge(($context["field_options"] ?? null), ["disabled" =>  !(        // line 36
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 38), "isMandatoryField", [0 => "urgency"], "method", false, false, false, 38)) {
            // line 39
            echo "   ";
            $context["urgency_options"] = twig_array_merge(($context["urgency_options"] ?? null), ["required" => true]);
        }
        // line 43
        echo "
";
        // line 44
        echo twig_call_macro($macros["fields"], "macro_field", ["urgency", twig_get_attribute($this->env, $this->source,         // line 46
($context["item"] ?? null), "dropdownUrgency", [0 => twig_array_merge(["value" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 47
($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["urgency"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 50
($context["rand"] ?? null)],         // line 51
($context["urgency_options"] ?? null))], "method", false, false, false, 46), __("Urgency"),         // line 53
($context["field_options"] ?? null)], 44, $context, $this->getSourceContext());
        // line 54
        echo "

";
        // line 56
        $context["impact_options"] = ($context["field_options"] ?? null);
        // line 57
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 57), "isMandatoryField", [0 => "impact"], "method", false, false, false, 57)) {
            // line 58
            echo "   ";
            $context["impact_options"] = twig_array_merge(($context["impact_option"] ?? null), ["required" => true]);
        }
        // line 62
        echo "
";
        // line 63
        echo twig_call_macro($macros["fields"], "macro_field", ["impact", twig_get_attribute($this->env, $this->source,         // line 65
($context["item"] ?? null), "dropdownImpact", [0 => twig_array_merge(["value" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["impact"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 69
($context["rand"] ?? null)],         // line 70
($context["impact_options"] ?? null))], "method", false, false, false, 65), __("Impact"),         // line 72
($context["field_options"] ?? null)], 63, $context, $this->getSourceContext());
        // line 73
        echo "

";
        // line 75
        $context["priority_options"] = twig_array_merge(($context["field_options"] ?? null), ["disabled" =>  !        // line 76
($context["canpriority"] ?? null)]);
        // line 78
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 78), "isMandatoryField", [0 => "priority"], "method", false, false, false, 78)) {
            // line 79
            echo "   ";
            $context["priority_options"] = twig_array_merge(($context["priority_options"] ?? null), ["required" => true]);
        }
        // line 83
        echo "
";
        // line 84
        echo twig_call_macro($macros["fields"], "macro_field", ["priority", twig_get_attribute($this->env, $this->source,         // line 86
($context["item"] ?? null), "dropdownPriority", [0 => twig_array_merge(["value" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 87
($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["priority"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>         // line 90
($context["rand"] ?? null)], twig_array_merge(        // line 91
($context["field_options"] ?? null), ($context["priority_options"] ?? null)))], "method", false, false, false, 86), __("Priority"),         // line 93
($context["field_options"] ?? null)], 84, $context, $this->getSourceContext());
        // line 94
        echo "

<script type=\"text/javascript\">
\$(function() {
   \$('#dropdown_urgency";
        // line 98
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo ", #dropdown_impact";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('change.select2', function (e) {
      \$.ajax({
         url: \"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/priority.php"), "html", null, true);
        echo "\",
         datatype: 'json',
         data: {
            'urgency': \$('#dropdown_urgency";
        // line 103
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').select2('data')[0].id ?? 0,
            'impact':  \$('#dropdown_impact";
        // line 104
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').select2('data')[0].id ?? 0,
            'getJson': true,
         }
      }).done(function(data) {
         \$('#dropdown_priority";
        // line 108
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').val(data.priority);
         \$('#dropdown_priority";
        // line 109
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').trigger('change');
      });
   })
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/fields/priority_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 109,  141 => 108,  134 => 104,  130 => 103,  124 => 100,  117 => 98,  111 => 94,  109 => 93,  108 => 91,  107 => 90,  106 => 87,  105 => 86,  104 => 84,  101 => 83,  97 => 79,  95 => 78,  93 => 76,  92 => 75,  88 => 73,  86 => 72,  85 => 70,  84 => 69,  83 => 66,  82 => 65,  81 => 63,  78 => 62,  74 => 58,  72 => 57,  70 => 56,  66 => 54,  64 => 53,  63 => 51,  62 => 50,  61 => 47,  60 => 46,  59 => 44,  56 => 43,  52 => 39,  50 => 38,  48 => 36,  47 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields/priority_matrix.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\fields\\priority_matrix.html.twig");
    }
}
