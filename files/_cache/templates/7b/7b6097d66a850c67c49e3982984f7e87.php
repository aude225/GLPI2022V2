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

/* components/masonry_grid.html.twig */
class __TwigTemplate_7efebaef46547dc8c6075e7f94d605d9 extends Template
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
        if ( !array_key_exists("grid_item_class", $context)) {
            // line 33
            echo "   ";
            $context["grid_item_class"] = "col-xl-6 col-xxl-4";
        }
        // line 35
        echo "
";
        // line 36
        $context["rand"] = twig_random($this->env);
        // line 37
        echo "<div id=\"grid_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"masonry_grid row row-cards\">
   ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grid_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "      <div class=\"grid-item ";
            echo twig_escape_filter($this->env, ($context["grid_item_class"] ?? null), "html", null, true);
            echo "\">
         ";
            // line 40
            echo $context["item"];
            echo "
      </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>

<script type=\"text/javascript\">
\$(function () {
   var msnry = new Masonry('#grid_";
        // line 47
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "', {
      \"percentPosition\": true,
      \"horizontalOrder\": true,
   });

   \$('#grid_";
        // line 52
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on(\"layout:refresh\", function() {
      msnry.layout();
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/masonry_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 52,  80 => 47,  74 => 43,  65 => 40,  60 => 39,  56 => 38,  51 => 37,  49 => 36,  46 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/masonry_grid.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\masonry_grid.html.twig");
    }
}
