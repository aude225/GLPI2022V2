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

/* impact/ongoing_modal.html.twig */
class __TwigTemplate_d512787a2f7ace259cf85e1f07321a5a extends Template
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
<div id=\"ongoing_dialog\"  class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            ";
        // line 37
        echo "            <div class=\"modal-header\">
                <h5 class=\"modal-title\"> ";
        // line 38
        echo twig_escape_filter($this->env, __("Ongoing tickets"), "html", null, true);
        echo " </h5>
                <button type=\"button\" class=\"btn btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            ";
        // line 43
        echo "            <div class=\"modal-body\"></div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "impact/ongoing_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 43,  47 => 38,  44 => 37,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "impact/ongoing_modal.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\impact\\ongoing_modal.html.twig");
    }
}
