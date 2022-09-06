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

/* central/messages.html.twig */
class __TwigTemplate_44b4bce64081ccb5a7717d54ea05eda2 extends Template
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
<div class=\"message-area\">
   ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "errors", [], "any", true, true, false, 33) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "errors", [], "any", false, false, false, 33)) > 0))) {
            // line 34
            echo "      <div class=\"alert alert-important alert-danger d-flex\" role=\"alert\">
         <i class=\"fas fa-3x fa-exclamation-triangle\"></i>
         <ul>
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "errors", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 38
                echo "               <li>";
                echo $context["error"];
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "         </ul>
      </div>
   ";
        }
        // line 43
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "warnings", [], "any", true, true, false, 43) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "warnings", [], "any", false, false, false, 43)) > 0))) {
            // line 44
            echo "      <div class=\"alert alert-important alert-warning d-flex\" role=\"alert\">
         <i class=\"fas fa-3x fa-exclamation-triangle\"></i>
         <ul>
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "warnings", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 48
                echo "               <li>";
                echo $context["warning"];
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "         </ul>
      </div>
   ";
        }
        // line 53
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "infos", [], "any", true, true, false, 53) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "infos", [], "any", false, false, false, 53)) > 0))) {
            // line 54
            echo "      <div class=\"alert alert-important alert-info d-flex\" role=\"alert\">
         <i class=\"fas fa-3x fa-info-circle\"></i>
         <ul>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["messages"] ?? null), "infos", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 58
                echo "               <li>";
                echo $context["info"];
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "         </ul>
      </div>
   ";
        }
        // line 63
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "central/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 63,  113 => 60,  104 => 58,  100 => 57,  95 => 54,  92 => 53,  87 => 50,  78 => 48,  74 => 47,  69 => 44,  66 => 43,  61 => 40,  52 => 38,  48 => 37,  43 => 34,  41 => 33,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "central/messages.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\central\\messages.html.twig");
    }
}
