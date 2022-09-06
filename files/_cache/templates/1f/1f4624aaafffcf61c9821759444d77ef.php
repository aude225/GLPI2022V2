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

/* central/lists/itemtype_count.html.twig */
class __TwigTemplate_e04fd54936fc712f2943da657f07c9b1 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
";
        // line 49
        echo "
<div class=\"card\">
   <div class=\"card-body\">
      <div class=\"card-title d-flex justify-content-between\">
         ";
        // line 53
        echo twig_call_macro($macros["_self"], "macro_link_or_text", [($context["title"] ?? null)], 53, $context, $this->getSourceContext());
        echo "

         ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["title"] ?? null), "button", [], "any", true, true, false, 55)) {
            // line 56
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_link_or_text", [twig_get_attribute($this->env, $this->source, ($context["title"] ?? null), "button", [], "any", false, false, false, 56), "btn btn-sm btn-outline-secondary"], 56, $context, $this->getSourceContext());
            echo "
         ";
        }
        // line 58
        echo "      </div>

      ";
        // line 60
        if (array_key_exists("subtitle", $context)) {
            // line 61
            echo "         <div class=\"card-subtitle\">
            ";
            // line 62
            echo twig_call_macro($macros["_self"], "macro_link_or_text", [($context["subtitle"] ?? null)], 62, $context, $this->getSourceContext());
            echo "
         </div>
      ";
        }
        // line 65
        echo "   </div>


   <ul class=\"list-group list-group-flush\">
      ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 70
            echo "         ";
            echo twig_call_macro($macros["_self"], "macro_link_or_text", [$context["item"], "list-group-item list-group-item-action d-flex justify-content-between align-items-center"], 70, $context, $this->getSourceContext());
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "   </ul>
</div>
";
    }

    // line 32
    public function macro_link_or_text($__value__ = null, $__anchor_class__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "anchor_class" => $__anchor_class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "link", [], "any", true, true, false, 33)) {
                // line 34
                echo "      <a class=\"";
                echo twig_escape_filter($this->env, ($context["anchor_class"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "link", [], "any", false, false, false, 34), "html", null, true);
                echo "\">
   ";
            }
            // line 36
            echo "         <span>
            ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "icon", [], "any", true, true, false, 37)) {
                // line 38
                echo "               <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "icon", [], "any", false, false, false, 38), "html", null, true);
                echo "\"></i>
            ";
            }
            // line 40
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "text", [], "any", false, false, false, 40), "html", null, true);
            echo "
         </span>
         ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "count", [], "any", true, true, false, 42)) {
                // line 43
                echo "            <span class=\"badge bg-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "count", [], "any", false, false, false, 43), "html", null, true);
                echo "</span>
         ";
            }
            // line 45
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "link", [], "any", true, true, false, 45)) {
                // line 46
                echo "      </a>
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "central/lists/itemtype_count.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 46,  150 => 45,  144 => 43,  142 => 42,  136 => 40,  130 => 38,  128 => 37,  125 => 36,  117 => 34,  114 => 33,  100 => 32,  94 => 72,  85 => 70,  81 => 69,  75 => 65,  69 => 62,  66 => 61,  64 => 60,  60 => 58,  54 => 56,  52 => 55,  47 => 53,  41 => 49,  38 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "central/lists/itemtype_count.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\central\\lists\\itemtype_count.html.twig");
    }
}
