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

/* layout/parts/goto_button.html.twig */
class __TwigTemplate_eccf124c1e207e5bf90fb0b92d938d50 extends Template
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
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 33
            echo "    ";
            $context["shortcut"] = __("Ctrl+Alt+G");
            // line 34
            echo "    ";
            if ((($context["platform"] ?? null) == twig_constant("donatj\\UserAgent\\Platforms::MACINTOSH"))) {
                // line 35
                echo "        ";
                $context["shortcut"] = __("Option+Command+G");
                // line 36
                echo "    ";
            }
            // line 37
            echo "
   <button class=\"btn btn-icon btn-sm btn-ghost-secondary trigger-fuzzy justify-content-start mb-md-2 ps-1\"
           title=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["shortcut"] ?? null), "html", null, true);
            echo "\"
           data-bs-toggle=\"tooltip\"
           data-bs-placement=\"right\">
      <i class=\"ti ti-arrow-big-right me-1\"></i>
      <span class=\"menu-label\">
         ";
            // line 44
            echo twig_escape_filter($this->env, __("Find menu"), "html", null, true);
            echo "
      </span>
   </button>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/parts/goto_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 44,  58 => 39,  54 => 37,  51 => 36,  48 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/goto_button.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\goto_button.html.twig");
    }
}
