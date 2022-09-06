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

/* install/step8.html.twig */
class __TwigTemplate_72486b96c60f542d483cbe2c886f42fc extends Template
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
<h2>";
        // line 32
        echo twig_escape_filter($this->env, __("The installation is finished"), "html", null, true);
        echo "</h2>

<p>
   ";
        // line 35
        echo twig_escape_filter($this->env, __("Default logins / passwords are:"), "html", null, true);
        echo "
</p>

<p>
   <ul>
      <li>";
        // line 40
        echo twig_escape_filter($this->env, __("glpi/glpi for the administrator account"), "html", null, true);
        echo "</li>
      <li>";
        // line 41
        echo twig_escape_filter($this->env, __("tech/tech for the technician account"), "html", null, true);
        echo "</li>
      <li>";
        // line 42
        echo twig_escape_filter($this->env, __("normal/normal for the normal account"), "html", null, true);
        echo "</li>
      <li>";
        // line 43
        echo twig_escape_filter($this->env, __("post-only/postonly for the postonly account"), "html", null, true);
        echo "</li>
   </ul>
</p>

<p>
   ";
        // line 48
        echo twig_escape_filter($this->env, __("You can delete or modify these accounts as well as the initial data."), "html", null, true);
        echo "
</p>

<p class=\"center\">
   <a class=\"btn btn-primary\" href=\"../index.php\">
      <i class=\"fas fa-thumbs-up me-1\"></i>
      ";
        // line 54
        echo twig_escape_filter($this->env, __("Use GLPI"), "html", null, true);
        echo "
   </a>
</p>
";
    }

    public function getTemplateName()
    {
        return "install/step8.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 54,  74 => 48,  66 => 43,  62 => 42,  58 => 41,  54 => 40,  46 => 35,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step8.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\step8.html.twig");
    }
}
