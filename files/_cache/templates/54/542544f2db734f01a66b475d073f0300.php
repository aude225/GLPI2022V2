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

/* components/user/link_with_tooltip.html.twig */
class __TwigTemplate_a3ef31d68134f58718ab2ffa661ecaa4 extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 33
        echo "
<span id=\"user_";
        // line 34
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
   <i class=\"ti ti-user ms-1\"></i>
   ";
        // line 36
        echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", ($context["users_id"] ?? null), ["enable_anonymization" =>         // line 37
($context["enable_anonymization"] ?? null)]);
        // line 38
        echo "
</span>

";
        // line 41
        if ( !($context["enable_anonymization"] ?? null)) {
            // line 42
            echo "   ";
            $context["user"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null));
            // line 43
            echo "   ";
            $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 43);
            // line 44
            echo "   ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 44))]);
            // line 45
            echo "   ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 45)]);
            // line 46
            echo "   ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" => ((            // line 48
$context["user_fields"]) ?? ([]))], false), 1 => ["applyto" => ("user_" .             // line 50
($context["rand"] ?? null))]]);
        }
    }

    public function getTemplateName()
    {
        return "components/user/link_with_tooltip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 50,  74 => 48,  72 => 46,  69 => 45,  66 => 44,  63 => 43,  60 => 42,  58 => 41,  53 => 38,  51 => 37,  50 => 36,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/link_with_tooltip.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\user\\link_with_tooltip.html.twig");
    }
}
