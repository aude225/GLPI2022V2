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

/* layout/parts/impersonate_banner.html.twig */
class __TwigTemplate_b61f536d57a9970a4598099603d74841 extends Template
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
        if (($context["is_impersonate_active"] ?? null)) {
            // line 33
            echo "<div class=\"banner-impersonate\">
   <form name=\"form\" method=\"post\" action=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("User"), "html", null, true);
            echo "\" data-submit-once>
      ";
            // line 35
            echo twig_escape_filter($this->env, twig_sprintf(__("You are impersonating %s."), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["user"] ?? null))), "html", null, true);
            echo "
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
      <button type=\"submit\" name=\"impersonate\" class=\"btn btn-outline-danger\" value=\"0\">
         ";
            // line 38
            echo twig_escape_filter($this->env, __("Stop impersonating"), "html", null, true);
            echo "
      </button>
   </form>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/parts/impersonate_banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 38,  53 => 36,  49 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/impersonate_banner.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\impersonate_banner.html.twig");
    }
}
