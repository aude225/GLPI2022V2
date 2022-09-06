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

/* impact/edit_compound_modal.html.twig */
class __TwigTemplate_5e58b87722602476219e260dc8a502b3 extends Template
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
<div id=\"edit_compound_dialog\"  class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            ";
        // line 37
        echo "            <div class=\"modal-header\">
                <h5 class=\"modal-title\"> ";
        // line 38
        echo twig_escape_filter($this->env, __("Edit group"), "html", null, true);
        echo " </h5>
                <button type=\"button\" class=\"btn btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            ";
        // line 43
        echo "            <div class=\"modal-body\">
                <form>
                    <div class=\"form-group mb-3\">
                        <label class=\"form-label\" for=\"compound_name\">
                            ";
        // line 47
        echo twig_escape_filter($this->env, __("Name"), "html", null, true);
        echo "
                        </label>
                        <input type=\"text\" class=\"form-control\" name=\"compound_name\" />
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"compound_color\">
                            ";
        // line 53
        echo twig_escape_filter($this->env, __("Color"), "html", null, true);
        echo "
                        </label>
                        <input type=\"color\" class=\"form-control\" name=\"compound_color\" />
                    </div>
                </form>
            </div>

            ";
        // line 61
        echo "            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" id=\"edit_compound_save\"> ";
        // line 62
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo " </button>
            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "impact/edit_compound_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 62,  79 => 61,  69 => 53,  60 => 47,  54 => 43,  47 => 38,  44 => 37,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "impact/edit_compound_modal.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\impact\\edit_compound_modal.html.twig");
    }
}
