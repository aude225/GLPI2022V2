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

/* components/itilobject/mainform_close.html.twig */
class __TwigTemplate_a06180dfcb2b400d1bbfecb0337bee95 extends Template
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
</form>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/mainform_close.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/mainform_close.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\mainform_close.html.twig");
    }
}
