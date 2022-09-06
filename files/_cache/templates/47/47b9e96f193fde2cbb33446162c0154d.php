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

/* pages/assets/monitor.html.twig */
class __TwigTemplate_ee9e3b0e3ba77c82a4bc1152922dcceb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 32
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/monitor.html.twig", 33)->unwrap();
        // line 34
        $context["params"] = (($context["params"]) ?? ([]));
        // line 32
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/monitor.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "   ";
        ob_start(function () { return ''; });
        // line 38
        echo "      ";
        echo twig_include($this->env, $context, "components/form/flags.html.twig");
        echo "
   ";
        $context["flags_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
   ";
        // line 41
        if (twig_length_filter($this->env, twig_trim_filter(($context["flags_html"] ?? null)))) {
            // line 42
            echo "      ";
            $context["flags_html"] = (("<div class=\"d-flex flex-wrap\">" . ($context["flags_html"] ?? null)) . "</div>");
            // line 43
            echo "      ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 45
($context["flags_html"] ?? null), _n("Port", "Ports", Session::getPluralNumber())], 43, $context, $this->getSourceContext());
            // line 47
            echo "
   ";
        }
    }

    public function getTemplateName()
    {
        return "pages/assets/monitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 47,  74 => 45,  72 => 43,  69 => 42,  67 => 41,  64 => 40,  58 => 38,  55 => 37,  51 => 36,  46 => 32,  44 => 34,  42 => 33,  35 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/monitor.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\assets\\monitor.html.twig");
    }
}
