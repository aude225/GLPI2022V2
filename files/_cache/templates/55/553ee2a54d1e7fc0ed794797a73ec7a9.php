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

/* install/accept_license.html.twig */
class __TwigTemplate_098875613ecac1ab2b74f030c9ff5a80 extends Template
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
<div class=\"container text-center\">
   <textarea id=\"license\" style=\"height:250px\" readonly=\"readonly\" class=\"form-control\">";
        // line 33
        echo twig_escape_filter($this->env, ($context["copying"] ?? null), "html", null, true);
        echo "</textarea>

   <a target=\"_blank\" href=\"http://www.gnu.org/licenses/old-licenses/gpl-2.0-translations.html\">
      <i class=\"fas fa-external-link-alt me-1\"></i>
      ";
        // line 37
        echo twig_escape_filter($this->env, __("Unofficial translations are also available"), "html", null, true);
        echo "
   </a>

   <form action=\"install.php\" method=\"post\" data-submit-once>

      <div class=\"my-4 ms-4 ps-5 text-start\">
         <div class=\"form-check\">
            <input type=\"radio\" class=\"form-check-input\" name=\"install\" id=\"agree\" value=\"License\">
            <label class=\"form-check-label\" for=\"agree\">
               ";
        // line 46
        echo twig_escape_filter($this->env, __("I have read and ACCEPT the terms of the license written above."), "html", null, true);
        echo "
            </label>
         </div>

         <div class='form-check'>
            <input type=\"radio\" class=\"form-check-input\" name=\"install\" id=\"disagree\" value=\"lang_select\" checked=\"checked\">
            <label class=\"form-check-label\" for=\"disagree\">
               ";
        // line 53
        echo twig_escape_filter($this->env, __("I have read and DO NOT ACCEPT the terms of the license written above"), "html", null, true);
        echo "
            </label>
         </div>
      </div>

      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 59
        echo twig_escape_filter($this->env, __("Continue"), "html", null, true);
        echo "
         <i class=\"fas fa-chevron-right ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
   </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "install/accept_license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 63,  79 => 59,  70 => 53,  60 => 46,  48 => 37,  41 => 33,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/accept_license.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\accept_license.html.twig");
    }
}
