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

/* install/step0.html.twig */
class __TwigTemplate_f4614ea6bed5b7e715d506ce5d025f4b extends Template
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
        $macros["alerts"] = $this->macros["alerts"] = $this->loadTemplate("components/alerts_macros.html.twig", "install/step0.html.twig", 32)->unwrap();
        // line 33
        echo "
<div class=\"container text-center\">
   <div class=\"text-start\">
      ";
        // line 36
        ob_start(function () { return ''; });
        // line 37
        echo "         ";
        echo twig_escape_filter($this->env, __("Choose 'Install' for a completely new installation of GLPI."), "html", null, true);
        echo "<br>
         ";
        // line 38
        echo twig_escape_filter($this->env, __("Select 'Upgrade' to update your version of GLPI from an earlier version"), "html", null, true);
        echo "
      ";
        $context["alert_messages"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
      ";
        // line 41
        echo twig_call_macro($macros["alerts"], "macro_alert_info", [__("Installation or update of GLPI"),         // line 43
($context["alert_messages"] ?? null)], 41, $context, $this->getSourceContext());
        // line 44
        echo "
   </div>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 49
        echo twig_escape_filter($this->env, _x("button", "Install"), "html", null, true);
        echo "
         <i class=\"fas fa-download ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"no\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
   </form>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 60
        echo twig_escape_filter($this->env, _x("button", "Upgrade"), "html", null, true);
        echo "
         <i class=\"fas fa-caret-square-up ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"yes\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
   </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "install/step0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 66,  89 => 60,  81 => 55,  72 => 49,  65 => 44,  63 => 43,  62 => 41,  59 => 40,  54 => 38,  49 => 37,  47 => 36,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step0.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\step0.html.twig");
    }
}
