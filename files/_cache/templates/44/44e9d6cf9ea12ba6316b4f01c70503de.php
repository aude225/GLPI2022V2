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

/* pages/self-service/home.html.twig */
class __TwigTemplate_efd82244d0693cad7d300a71476e4362 extends Template
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
        if (twig_length_filter($this->env, ($context["password_alert"] ?? null))) {
            // line 33
            echo "   <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
      <div class=\"d-flex mb-2\">
         <div>
            <i class=\"fas fa-exclamation-triangle me-1\"></i>
         </div>
         <div>
            ";
            // line 39
            echo twig_escape_filter($this->env, ($context["password_alert"] ?? null), "html", null, true);
            echo "
         </div>
      </div>

      <div class=\"btn-list\">
         <a class=\"btn btn-outline-warning\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/updatepassword.php"), "html", null, true);
            echo " \">
            ";
            // line 45
            echo twig_escape_filter($this->env, __("Update my password"), "html", null, true);
            echo "
         </a>
      </div>
   </div>
";
        }
        // line 50
        echo "
<table class=\"central\">
   ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        echo "
</table>

";
        // line 55
        $context["grid_items"] = [0 =>         // line 56
($context["ticket_summary"] ?? null), 1 => (("<div class=\"card\">" .         // line 57
($context["survey_list"] ?? null)) . "</div>"), 2 => (("<div class=\"card\">" .         // line 58
($context["reminder_list"] ?? null)) . "</div>"), 3 => (("<div class=\"card\">" .         // line 59
($context["rss_feed"] ?? null)) . "</div>")];
        // line 61
        echo "
";
        // line 62
        if (twig_length_filter($this->env, ($context["kb_popular"] ?? null))) {
            // line 63
            echo "   ";
            $context["grid_items"] = twig_array_merge(($context["grid_items"] ?? null), [0 => (("<div class=\"card\">" .             // line 64
($context["kb_popular"] ?? null)) . "</div>")]);
        }
        // line 67
        echo "
";
        // line 68
        if (twig_length_filter($this->env, ($context["kb_recent"] ?? null))) {
            // line 69
            echo "   ";
            $context["grid_items"] = twig_array_merge(($context["grid_items"] ?? null), [0 => (("<div class=\"card\">" .             // line 70
($context["kb_recent"] ?? null)) . "</div>")]);
        }
        // line 73
        echo "
";
        // line 74
        if (twig_length_filter($this->env, ($context["kb_lastupdate"] ?? null))) {
            // line 75
            echo "   ";
            $context["grid_items"] = twig_array_merge(($context["grid_items"] ?? null), [0 => (("<div class=\"card\">" .             // line 76
($context["kb_lastupdate"] ?? null)) . "</div>")]);
        }
        // line 79
        echo "
";
        // line 80
        echo twig_include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 81
($context["grid_items"] ?? null)], false);
        // line 82
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/self-service/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 82,  120 => 81,  119 => 80,  116 => 79,  113 => 76,  111 => 75,  109 => 74,  106 => 73,  103 => 70,  101 => 69,  99 => 68,  96 => 67,  93 => 64,  91 => 63,  89 => 62,  86 => 61,  84 => 59,  83 => 58,  82 => 57,  81 => 56,  80 => 55,  74 => 52,  70 => 50,  62 => 45,  58 => 44,  50 => 39,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/self-service/home.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\self-service\\home.html.twig");
    }
}
