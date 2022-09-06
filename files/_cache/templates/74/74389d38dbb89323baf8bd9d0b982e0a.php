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

/* install/step1.html.twig */
class __TwigTemplate_809bdafd65090d245255595bf4295abb extends Template
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
<h3>";
        // line 32
        echo twig_escape_filter($this->env, __("Checking of the compatibility of your environment with the execution of GLPI"), "html", null, true);
        echo "</h3>

";
        // line 34
        echo twig_include($this->env, $context, "install/blocks/requirements_table.html.twig", ["requirements" => ($context["requirements"] ?? null)], false);
        echo "

";
        // line 36
        ob_start(function () { return ''; });
        // line 37
        echo "   <input type=\"hidden\" name=\"language\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpilanguage"), "html", null, true);
        echo "\">
   <input type=\"hidden\" name=\"update\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["update"] ?? null), "html", null, true);
        echo "\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
";
        $context["common_hiddens"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
";
        // line 42
        ob_start(function () { return ''; });
        // line 43
        echo "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 45
        echo twig_escape_filter($this->env, __("Continue"), "html", null, true);
        echo "
         <i class=\"fas fa-chevron-right ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      ";
        // line 50
        echo twig_escape_filter($this->env, ($context["common_hiddens"] ?? null), "html", null, true);
        echo "
   </form>
";
        $context["continue_form"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
";
        // line 54
        ob_start(function () { return ''; });
        // line 55
        echo "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         ";
        // line 57
        echo twig_escape_filter($this->env, __("Try again"), "html", null, true);
        echo "
         <i class=\"fas fa-redo ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      ";
        // line 62
        echo twig_escape_filter($this->env, ($context["common_hiddens"] ?? null), "html", null, true);
        echo "
   </form>
";
        $context["retry_form"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "
";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "hasMissingMandatoryRequirements", [], "method", false, false, false, 66)) {
            // line 67
            echo "   <h3>";
            echo twig_escape_filter($this->env, __("Do you want to continue?"), "html", null, true);
            echo "</h3>
   <div class=\"text-center\">
      ";
            // line 69
            echo twig_escape_filter($this->env, ($context["retry_form"] ?? null), "html", null, true);
            echo "
   </div>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 71
($context["requirements"] ?? null), "hasMissingOptionalRequirements", [], "method", false, false, false, 71)) {
            // line 72
            echo "   <h3>";
            echo twig_escape_filter($this->env, __("Do you want to continue?"), "html", null, true);
            echo "</h3>
   <div class=\"text-center\">
      ";
            // line 74
            echo twig_escape_filter($this->env, ($context["continue_form"] ?? null), "html", null, true);
            echo "
      ";
            // line 75
            echo twig_escape_filter($this->env, ($context["retry_form"] ?? null), "html", null, true);
            echo "
   </div>
";
        } else {
            // line 78
            echo "   <div class=\"text-center\">
      ";
            // line 79
            echo twig_escape_filter($this->env, ($context["continue_form"] ?? null), "html", null, true);
            echo "
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "install/step1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 79,  146 => 78,  140 => 75,  136 => 74,  130 => 72,  128 => 71,  123 => 69,  117 => 67,  115 => 66,  112 => 65,  106 => 62,  98 => 57,  94 => 55,  92 => 54,  89 => 53,  83 => 50,  75 => 45,  71 => 43,  69 => 42,  66 => 41,  61 => 39,  57 => 38,  52 => 37,  50 => 36,  45 => 34,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step1.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\step1.html.twig");
    }
}
