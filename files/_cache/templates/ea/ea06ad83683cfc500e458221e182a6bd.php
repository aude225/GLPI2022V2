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

/* pages/register.html.twig */
class __TwigTemplate_de7d6d744083cf041dfb59bdc4afdd41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css_block' => [$this, 'block_css_block'],
            'content_block' => [$this, 'block_content_block'],
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
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "pages/register.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_css_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  <style>
    body {
        overflow: hidden;
    background: url(\"/../pics/Presentation-et-missions-de-lARTCI-Autorite-de-protection.jpg\") no-repeat;
    
  }
  .py-4 {
         padding-top: 0rem !important; 
         padding-bottom: 0rem !important; 
    }

    .mt-4 {
        margin-top: 0rem !important;
    }

    form {
        margin-top: -2rem ;
    }
  </style>
";
    }

    // line 56
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "   
   <div class=\"container-fluid\" style=\"max-width: 60rem\">
      <div class=\"card card-md\">
         <div class=\"card-body\">
            <form action=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/registre.php"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\"  data-submit-once>
               <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["noAuto"] ?? null), "html", null, true);
        echo "\" />
               <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
                <div class=\"row justify-content-center\">
                   <div class=\"col-md-5\">
                       <h2 class=\"card-header text-center mb-4\" style=\"font-size:25px;background:white\">Créer votre compte</h2>
                        <div class=\"\">
                            <label class=\"form-label\">Nom et prénoms</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["nomfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez votre nom\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">E-mail</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["emailfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez votre e-mail\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Entreprise</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["entreprisefield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez le nom de votre entreprise\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Login</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["loginfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez votre login\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Mot de passe</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["passwordfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez votre mot de passe\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Mot de passe</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["passwordfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Confirmez votre mot de passe\" />
                        </div>
                        <div class=\"form-footer mt-2\" style=\"margin-top:-0.0rem;\" > 
                            <button style=\"background:#fec95c !important;border:#fec95c;\" type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                                ";
        // line 94
        echo twig_escape_filter($this->env, __("s'enregistrer"), "html", null, true);
        echo "
                            </button>
                        </div>
                   </div>

                        ";
        // line 99
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 100
            echo "                            <hr />
                            <div class=\"alert alert-danger\" role=\"alert\">
                                ";
            // line 102
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 105
        echo "                    </div>

                        ";
        // line 107
        if (($context["right_panel"] ?? null)) {
            // line 108
            echo "                            <div class=\"col-auto offset-md-1 p-2 text-center\">
                            ";
            // line 109
            if ((twig_length_filter($this->env, ($context["text_login"] ?? null)) > 0)) {
                // line 110
                echo "                                <div class=\"rich_text_container\">
                                    ";
                // line 111
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
                echo "
                                </div>
                            ";
            }
            // line 114
            echo "
                            ";
            // line 115
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) {
                // line 116
                echo "                                <hr />

                                <a class=\"btn btn-outline-secondary btn-icon\" href=\"front/helpdesk.faq.php\">
                                    <i class=\"fas fa-question\"></i>&nbsp;
                                    ";
                // line 120
                echo twig_escape_filter($this->env, __("FAQ"), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 123
            echo "
                            <hr />

                            ";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 129
        echo "                    </div>
            </form>
         </div>
      </div>
    </div>
";
    }

    // line 136
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "pages/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 137,  225 => 136,  216 => 129,  210 => 126,  205 => 123,  199 => 120,  193 => 116,  191 => 115,  188 => 114,  182 => 111,  179 => 110,  177 => 109,  174 => 108,  172 => 107,  168 => 105,  162 => 102,  158 => 100,  156 => 99,  148 => 94,  141 => 90,  134 => 86,  127 => 82,  120 => 78,  113 => 74,  106 => 70,  97 => 64,  93 => 63,  89 => 62,  85 => 61,  79 => 57,  75 => 56,  52 => 35,  48 => 34,  37 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/register.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\register.html.twig");
    }
}
