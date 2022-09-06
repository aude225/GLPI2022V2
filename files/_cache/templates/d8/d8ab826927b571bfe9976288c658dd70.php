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

/* install/blocks/requirements_table.html.twig */
class __TwigTemplate_197b0a9f95abec2339cbb56673f51b70 extends Template
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
<table class=\"table tab_check\">
   <thead>
      <tr>
         <th>";
        // line 35
        echo twig_escape_filter($this->env, __("Test done"), "html", null, true);
        echo "</th>
         <th>";
        // line 36
        echo twig_escape_filter($this->env, __("Results"), "html", null, true);
        echo "</th>
      </tr>
   </thead>
   <tbody>
      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 41
            echo "         ";
            if ( !twig_get_attribute($this->env, $this->source, $context["requirement"], "isOutOfContext", [], "method", false, false, false, 41)) {
                // line 42
                echo "            <tr class=\"tab_bg_1\">
               <td class=\"text-start\">
                  ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 44)) {
                    // line 45
                    echo "                     <span class=\"badge bg-secondary\">";
                    echo twig_escape_filter($this->env, __("Suggested"), "html", null, true);
                    echo "</span>
                  ";
                } else {
                    // line 47
                    echo "                     <span class=\"badge bg-warning\">";
                    echo twig_escape_filter($this->env, __("Required"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 49
                echo "                  <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["requirement"], "getTitle", [], "method", false, false, false, 49), "html", null, true);
                echo "</strong>
                  ";
                // line 50
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 50);
                // line 51
                echo "                  ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 52
                    echo "                      <br />
                      <em>";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 53), "html", null, true);
                    echo "</em>
                  ";
                }
                // line 55
                echo "                  ";
                if ( !twig_get_attribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 55)) {
                    // line 56
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 56));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 57
                        echo "                          <br />
                          <strong><em class=\"";
                        // line 58
                        echo (( !twig_get_attribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 58)) ? ("red") : ("missing"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "</em></strong>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                  ";
                }
                // line 61
                echo "               </td>
               <td class=\"";
                // line 62
                echo (((twig_get_attribute($this->env, $this->source, $context["requirement"], "isMissing", [], "method", false, false, false, 62) &&  !twig_get_attribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 62))) ? ("red") : (""));
                echo "\">
                  <span data-bs-toggle=\"popover\"
                        data-bs-placement=\"right\"
                        data-bs-html=\"true\"
                        data-bs-custom-class=\"validation-messages\"
                        data-bs-content=\"";
                // line 67
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 67), "<br />"), "html", null, true);
                echo "\">
                     <i class=\"";
                // line 68
                echo ((twig_get_attribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 68)) ? ("fas fa-check") : (((twig_get_attribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 68)) ? ("fas fa-exclamation-triangle") : ("ti ti-x"))));
                echo "\"></i>
                  </span>
               </td>
            </tr>
         ";
            }
            // line 73
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "   </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "install/blocks/requirements_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 74,  144 => 73,  136 => 68,  132 => 67,  124 => 62,  121 => 61,  118 => 60,  108 => 58,  105 => 57,  100 => 56,  97 => 55,  92 => 53,  89 => 52,  86 => 51,  84 => 50,  79 => 49,  73 => 47,  67 => 45,  65 => 44,  61 => 42,  58 => 41,  54 => 40,  47 => 36,  43 => 35,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/blocks/requirements_table.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\blocks\\requirements_table.html.twig");
    }
}
