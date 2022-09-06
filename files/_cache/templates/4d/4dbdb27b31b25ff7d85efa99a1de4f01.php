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

/* components/dates_timeline.html.twig */
class __TwigTemplate_1ed402701166de3a4a33882ae27f9615 extends Template
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
<div class=\"dates_timelines\">
   ";
        // line 33
        if ((twig_length_filter($this->env, ($context["title"] ?? null)) > 0)) {
            // line 34
            echo "      <h2 class=\"header\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h2>
   ";
        }
        // line 36
        echo "
   <ul>
      ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 39
            echo "         ";
            if (((($__internal_compile_0 = $context["data"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["timestamp"] ?? null) : null) != 0)) {
                // line 40
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["data"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["class"] ?? null) : null), "html", null, true);
                echo "\">
               &nbsp;
               <time title=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_2 = $context["data"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["date"] ?? null) : null)), "html", null, true);
                echo "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
                  ";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime((($__internal_compile_3 = $context["data"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["date"] ?? null) : null)), "html", null, true);
                echo "
               </time>
               <span class=\"dot\"></span>
               <label>";
                // line 47
                echo (($__internal_compile_4 = $context["data"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["label"] ?? null) : null);
                echo "</label>
            </li>
         ";
            }
            // line 50
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "   </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/dates_timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 51,  83 => 50,  77 => 47,  71 => 44,  66 => 42,  60 => 40,  57 => 39,  53 => 38,  49 => 36,  43 => 34,  41 => 33,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/dates_timeline.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\dates_timeline.html.twig");
    }
}
