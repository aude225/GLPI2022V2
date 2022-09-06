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

/* components/dropdown/limit.html.twig */
class __TwigTemplate_668aa5f6786f0471a61f5b3e1973f26a extends Template
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
        if ( !array_key_exists("additional_params", $context)) {
            // line 33
            echo "   ";
            $context["additional_params"] = "";
        } else {
            // line 35
            echo "   ";
            if (((twig_length_filter($this->env, ($context["additional_params"] ?? null)) > 0) &&  !(is_string($__internal_compile_0 = ($context["additional_params"] ?? null)) && is_string($__internal_compile_1 = "&") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))))) {
                // line 36
                echo "      ";
                $context["additional_params"] = ("&" . ($context["additional_params"] ?? null));
                // line 37
                echo "   ";
            }
        }
        // line 39
        echo "
";
        // line 40
        if ( !($context["no_onchange"] ?? null)) {
            // line 41
            echo "   ";
            $context["href"] = (((("location.href='" . ($context["href"] ?? null)) . "glpilist_limit='+this.value+'") . ($context["additional_params"] ?? null)) . "'");
            // line 42
            echo "   ";
            if ((array_key_exists("is_tab", $context) && (($context["is_tab"] ?? null) == true))) {
                // line 43
                echo "      ";
                $context["href"] = (("javascript:reloadTab('glpilist_limit='+this.value+'" . ($context["additional_params"] ?? null)) . "');");
                // line 44
                echo "   ";
            }
        }
        // line 46
        echo "
";
        // line 47
        $context["options"] = [];
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(5, 19, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 49
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => $context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(20, 49, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => $context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(50, 249, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => $context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(250, 999, 250));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => $context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1000, 4999, 1000));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 61
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => $context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(5000, 10000, 5000));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => $context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => 9999999]);
        // line 67
        $context["max"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->phpConfig("max_input_vars");
        // line 68
        if ((($context["max"] ?? null) > 10)) {
            // line 69
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => (($context["max"] ?? null) - 10)]);
        }
        // line 71
        echo "<select class=\"form-select form-select-sm mx-1 d-inline-block w-auto ";
        echo twig_escape_filter($this->env, ((array_key_exists("select_class", $context)) ? (_twig_default_filter(($context["select_class"] ?? null), "")) : ("")), "html", null, true);
        echo "\"
        ";
        // line 72
        if ( !($context["no_onchange"] ?? null)) {
            echo "onChange=\"";
            echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
   ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["options"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 74
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ";
            echo ((($context["value"] == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit"))) ? ("selected") : (""));
            echo ">
         ";
            // line 75
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
      </option>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "components/dropdown/limit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 78,  179 => 75,  172 => 74,  168 => 73,  160 => 72,  155 => 71,  151 => 69,  149 => 68,  147 => 67,  145 => 66,  138 => 64,  134 => 63,  127 => 61,  123 => 60,  116 => 58,  112 => 57,  105 => 55,  101 => 54,  94 => 52,  90 => 51,  83 => 49,  79 => 48,  77 => 47,  74 => 46,  70 => 44,  67 => 43,  64 => 42,  61 => 41,  59 => 40,  56 => 39,  52 => 37,  49 => 36,  46 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/dropdown/limit.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\dropdown\\limit.html.twig");
    }
}
