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

/* password_form.html.twig */
class __TwigTemplate_1e2b3a1795a379c4d609bb3b5c04b0f5 extends Template
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
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "password_form.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "   ";
        if ((array_key_exists("token_ok", $context) && (($context["token_ok"] ?? null) == false))) {
            // line 36
            echo "      ";
            echo twig_escape_filter($this->env, __("Your password reset request has expired or is invalid. Please renew it."), "html", null, true);
            echo "
   ";
        } elseif (        // line 37
array_key_exists("messages_only", $context)) {
            // line 38
            echo "      ";
            echo twig_include($this->env, $context, "components/messages_after_redirect_alerts.html.twig");
            echo "
   ";
        } else {
            // line 40
            echo "      <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php"), "html", null, true);
            echo "\" method=\"post\" autocomplete=\"off\" data-submit-once>
         <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         <h2 class=\"card-title text-center mb-4\">";
            // line 42
            echo twig_escape_filter($this->env, __("Forgotten password?"), "html", null, true);
            echo "</h2>

         ";
            // line 44
            if (array_key_exists("token", $context)) {
                // line 45
                echo "            <input type=\"hidden\" name=\"password_forget_token\" value=\"";
                echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
                echo "\" />
            <p class=\"text-muted mb-4\">
               ";
                // line 47
                echo twig_escape_filter($this->env, __("Please enter your new password."), "html", null, true);
                echo "
            </p>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
                // line 50
                echo twig_escape_filter($this->env, __("Password"), "html", null, true);
                echo "</label>
               <input type=\"password\" name=\"password\" autocomplete=\"new-password\"
                      class=\"form-control\" placeholder=\"";
                // line 52
                echo twig_escape_filter($this->env, __("Password"), "html", null, true);
                echo "\"
                      id=\"password\" onkeyup=\"return passwordCheck();\" />
            </div>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
                // line 56
                echo twig_escape_filter($this->env, __("Password confirmation"), "html", null, true);
                echo "</label>
               <input type=\"password\" name=\"password2\" autocomplete=\"new-password2\"
                        class=\"form-control\" placeholder=\"";
                // line 58
                echo twig_escape_filter($this->env, __("Password"), "html", null, true);
                echo "\" />
            </div>

            ";
                // line 61
                if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_password_security")) {
                    // line 62
                    echo "               <div class=\"alert alert-warning\">
                  <h3>";
                    // line 63
                    echo twig_escape_filter($this->env, __("Password security policy"), "html", null, true);
                    echo "</h3>
                  ";
                    // line 64
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Config::displayPasswordSecurityChecks");
                    // line 65
                    echo "               </div>
            ";
                }
                // line 67
                echo "
            ";
                // line 68
                $context["save_button"] = (("<i class=\"far fa-save\"></i><span>" . __("Save new password")) . "<span>");
                // line 69
                echo "
         ";
            } else {
                // line 71
                echo "            <p class=\"text-muted mb-4\">
               ";
                // line 72
                echo twig_escape_filter($this->env, __("Please enter your email address. An email will be sent to you and you will be able to choose a new password."), "html", null, true);
                echo "
            </p>
            <div class=\"mb-3\">
               <label class=\"form-label\">";
                // line 75
                echo twig_escape_filter($this->env, _n("Email", "Emails", 1), "html", null, true);
                echo "</label>
               <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"";
                // line 76
                echo twig_escape_filter($this->env, _n("Email", "Emails", 1), "html", null, true);
                echo "\" />
            </div>
            ";
                // line 78
                $context["save_button"] = (("<i class=\"fas fa-envelope\"></i><span>" . __("Send")) . "<span>");
                // line 79
                echo "         ";
            }
            // line 80
            echo "
         <div class=\"form-footer\">
            <button class=\"btn btn-icon btn-primary w-100\" name=\"update\">
               ";
            // line 83
            echo ($context["save_button"] ?? null);
            echo "
            </button>
         </div>
      </form>
   ";
        }
    }

    // line 90
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "   ";
        echo twig_escape_filter($this->env, __("Forget it,"), "html", null, true);
        echo "
   <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, __("send me back"), "html", null, true);
        echo "</a>
   ";
        // line 93
        echo twig_escape_filter($this->env, __("to the login screen."), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "password_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 93,  189 => 92,  184 => 91,  180 => 90,  170 => 83,  165 => 80,  162 => 79,  160 => 78,  155 => 76,  151 => 75,  145 => 72,  142 => 71,  138 => 69,  136 => 68,  133 => 67,  129 => 65,  127 => 64,  123 => 63,  120 => 62,  118 => 61,  112 => 58,  107 => 56,  100 => 52,  95 => 50,  89 => 47,  83 => 45,  81 => 44,  76 => 42,  72 => 41,  67 => 40,  61 => 38,  59 => 37,  54 => 36,  51 => 35,  47 => 34,  36 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "password_form.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\password_form.html.twig");
    }
}
