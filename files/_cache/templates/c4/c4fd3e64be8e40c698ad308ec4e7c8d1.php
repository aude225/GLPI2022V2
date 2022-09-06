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

/* components/itilobject/timeline/form_timeline_item.html.twig */
class __TwigTemplate_9d7f081764e43b35430c90322faef084 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
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
        $context["form_mode"] = (($context["form_mode"]) ?? ("edit"));
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('timeline_card', $context, $blocks);
    }

    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 35,  45 => 34,  43 => 33,  41 => 32,  38 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_timeline_item.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\form_timeline_item.html.twig");
    }
}
