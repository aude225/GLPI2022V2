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

/* pages/login.html.twig */
class __TwigTemplate_a2ffe02a3d0a23625846a47ea3bff7e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 32
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/login.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "   <div class=\"card\">
     <div class=\"card-body\">
       <form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\"  data-submit-once>
      <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["noAuto"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />

      <div class=\"row justify-content-center\">
         <div class=\"col-md-5\">

            <h2 class=\"card-header text-center mb-4\">";
        // line 46
        echo twig_escape_filter($this->env, __("Login to your account"), "html", null, true);
        echo "</h2>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
        // line 48
        echo twig_escape_filter($this->env, __("Login"), "html", null, true);
        echo "</label>
               <input type=\"text\" class=\"form-control\" id=\"login_name\" name=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["namfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" tabindex=\"1\" />
            </div>
            <div class=\"mb-4\">
               <label class=\"form-label\">
                  ";
        // line 53
        echo twig_escape_filter($this->env, __("Password"), "html", null, true);
        echo "

                  ";
        // line 55
        if (($context["show_lost_password"] ?? null)) {
            // line 56
            echo "                     <span class=\"form-label-description\">
                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
            echo "\">
                           ";
            // line 58
            echo twig_escape_filter($this->env, __("Forgotten password?"), "html", null, true);
            echo "
                        </a>
                     </span>
                  ";
        }
        // line 62
        echo "               </label>
               <input type=\"password\" class=\"form-control\" name=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["pwdfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"\" autocomplete=\"off\" tabindex=\"2\" />
            </div>

            ";
        // line 66
        if (twig_constant("GLPI_DEMO_MODE")) {
            // line 67
            echo "               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 68
            echo twig_escape_filter($this->env, __("Language"), "html", null, true);
            echo "</label>
                  ";
            // line 69
            echo ($context["languages_dropdown"] ?? null);
            echo "
               </div>
            ";
        }
        // line 72
        echo "
            ";
        // line 73
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) {
            // line 74
            echo "               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 75
            echo twig_escape_filter($this->env, __("Login source"), "html", null, true);
            echo "</label>
                  ";
            // line 76
            echo ($context["auth_dropdown_login"] ?? null);
            echo "
               </div>
            ";
        }
        // line 79
        echo "
            ";
        // line 80
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_time")) {
            // line 81
            echo "               <div class=\"mb-2\">
                     <label class=\"form-check\">
                        <input type=\"checkbox\" class=\"form-check-input\" name=\"";
            // line 83
            echo twig_escape_filter($this->env, ($context["rmbfield"] ?? null), "html", null, true);
            echo "\" ";
            echo (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_default")) ? ("checked") : (""));
            echo " />
                        <span class=\"form-check-label\">";
            // line 84
            echo twig_escape_filter($this->env, __("Remember me"), "html", null, true);
            echo "</span>
                     </label>
               </div>
            ";
        }
        // line 88
        echo "
            <div class=\"form-footer\" style=\"margin-top:-0.0rem;\">
               <button type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                  ";
        // line 91
        echo twig_escape_filter($this->env, __("Sign in"), "html", null, true);
        echo "
               </button>
            </div>

            <div class=\"mt-3\">
                  <p style=\"
                     display: flex;
                     justify-content:center;
                     align-items: center;
                     margin: auto 0;
                  \">Vous n'avez pas de compte? <a href=\"enregistrement.php\" class=\"\" style=\"color:#9eb4e2;font-size:13px;margin-left:5px;\">S'inscrire maintenant!</a></p>
            </div>

            ";
        // line 104
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 105
            echo "               <hr />
               <div class=\"alert alert-danger\" role=\"alert\">
                  ";
            // line 107
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 110
        echo "         </div>

         ";
        // line 112
        if (($context["right_panel"] ?? null)) {
            // line 113
            echo "            <div class=\"col-auto offset-md-1 p-2 text-center\">
               ";
            // line 114
            if ((twig_length_filter($this->env, ($context["text_login"] ?? null)) > 0)) {
                // line 115
                echo "                  <div class=\"rich_text_container\">
                     ";
                // line 116
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
                echo "
                  </div>
               ";
            }
            // line 119
            echo "
               ";
            // line 120
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) {
                // line 121
                echo "                  <hr />

                  <a class=\"btn btn-outline-secondary btn-icon\" href=\"front/helpdesk.faq.php\">
                     <i class=\"fas fa-question\"></i>&nbsp;
                     ";
                // line 125
                echo twig_escape_filter($this->env, __("FAQ"), "html", null, true);
                echo "
                  </a>
               ";
            }
            // line 128
            echo "
               <hr />

               ";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 134
        echo "      </div>
   </form>
     </div>
   </div>
";
    }

    // line 140
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "   ";
        echo ($context["copyright_message"] ?? null);
        echo "
";
    }

    // line 144
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "pages/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 145,  277 => 144,  270 => 141,  266 => 140,  258 => 134,  252 => 131,  247 => 128,  241 => 125,  235 => 121,  233 => 120,  230 => 119,  224 => 116,  221 => 115,  219 => 114,  216 => 113,  214 => 112,  210 => 110,  204 => 107,  200 => 105,  198 => 104,  182 => 91,  177 => 88,  170 => 84,  164 => 83,  160 => 81,  158 => 80,  155 => 79,  149 => 76,  145 => 75,  142 => 74,  140 => 73,  137 => 72,  131 => 69,  127 => 68,  124 => 67,  122 => 66,  116 => 63,  113 => 62,  106 => 58,  102 => 57,  99 => 56,  97 => 55,  92 => 53,  85 => 49,  81 => 48,  76 => 46,  68 => 41,  64 => 40,  60 => 39,  56 => 38,  52 => 36,  48 => 35,  37 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\login.html.twig");
    }
}
