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

/* components/table.html.twig */
class __TwigTemplate_239eaff324baa19984e2435582ddef81 extends Template
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
<div class=\"table-responsive card-table\">
   <table class=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
      <thead>
      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["header_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["header_row"]) {
            // line 36
            echo "         <tr>
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["header_row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 38
                echo "               ";
                if ( !twig_test_iterable($context["header"])) {
                    // line 39
                    echo "                  ";
                    $context["header"] = ["content" => $context["header"]];
                    // line 40
                    echo "               ";
                }
                // line 41
                echo "               <th colspan=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["header"], "colspan", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["header"], "colspan", [], "any", false, false, false, 41), 1)) : (1)), "html", null, true);
                echo "\" style=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["header"], "style", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["header"], "style", [], "any", false, false, false, 41), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 41);
                echo "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "      </thead>
      <tbody>
      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 48
            echo "         <tr class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "class", [], "any", false, false, false, 48), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "values", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 50
                echo "               ";
                if ( !twig_test_iterable($context["value"])) {
                    // line 51
                    echo "                  ";
                    $context["value"] = ["content" => $context["value"]];
                    // line 52
                    echo "               ";
                }
                // line 53
                echo "               <td colspan=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "colspan", [], "any", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "colspan", [], "any", false, false, false, 53), 1)) : (1)), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "class", [], "any", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "class", [], "any", false, false, false, 53), "")) : ("")), "html", null, true);
                echo "\" style=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "style", [], "any", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "style", [], "any", false, false, false, 53), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["value"], "content", [], "any", false, false, false, 53);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      </tbody>
   </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  127 => 55,  112 => 53,  109 => 52,  106 => 51,  103 => 50,  99 => 49,  94 => 48,  90 => 47,  86 => 45,  79 => 43,  66 => 41,  63 => 40,  60 => 39,  57 => 38,  53 => 37,  50 => 36,  46 => 35,  41 => 33,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/table.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\table.html.twig");
    }
}
