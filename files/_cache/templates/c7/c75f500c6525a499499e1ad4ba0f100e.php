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

/* /register.html.twig */
class __TwigTemplate_352306ed1a990ce81c0609c55bfa37dc extends Template
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
        $this->parent = $this->loadTemplate("layout/page_card_notlogged.html.twig", "/register.html.twig", 32);
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
    background: url(\"pics/Presentation-et-missions-de-lARTCI-Autorite-de-protection.jpg\") no-repeat;
        background-size: cover !important;
    
  }
  .mt-4 {
    margin-top: 0rem !important; 
}
  </style>
";
    }

    // line 48
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "   
   <div class=\"container-fluid\" style=\"max-width: 60rem\">
      <div class=\"card card-md\">
         <div class=\"card-body\">
            <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/registre.php"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\"  data-submit-once>
               <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["noAuto"] ?? null), "html", null, true);
        echo "\" />
               <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\" />
               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
                <div class=\"row justify-content-center\">
                   <div class=\"col-md-5\">
                       <h2 class=\"card-header text-center mb-4\" style=\"font-size:25px;background:white\">Créer votre compte</h2>
                        <div class=\"\">
                            <label class=\"form-label\">Nom et prénoms</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["nomfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez votre nom\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">E-mail</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["emailfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez votre e-mail\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Entreprise</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["entreprisefield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez le nom de votre entreprise\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Login</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["loginfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez votre login\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Mot de passe</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["passwordfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Entrez votre mot de passe\" />
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\">Mot de passe</label>
                            <input class=\"form-control\" type=\"text\" name=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["passwordfield"] ?? null), "html", null, true);
        echo "\" placeholder=\"Confirmez votre mot de passe\" />
                        </div>
                        <div class=\"form-footer mt-2\" style=\"margin-top:-0.0rem;\" > 
                            <button style=\"background:#fec95c !important;border:#fec95c;\" type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                                ";
        // line 86
        echo twig_escape_filter($this->env, __("s'enregistrer"), "html", null, true);
        echo "
                            </button>
                        </div>
                   </div>

                        ";
        // line 91
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 92
            echo "                            <hr />
                            <div class=\"alert alert-danger\" role=\"alert\">
                                ";
            // line 94
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 97
        echo "                    </div>

                        ";
        // line 99
        if (($context["right_panel"] ?? null)) {
            // line 100
            echo "                            <div class=\"col-auto offset-md-1 p-2 text-center\">
                            ";
            // line 101
            if ((twig_length_filter($this->env, ($context["text_login"] ?? null)) > 0)) {
                // line 102
                echo "                                <div class=\"rich_text_container\">
                                    ";
                // line 103
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
                echo "
                                </div>
                            ";
            }
            // line 106
            echo "
                            ";
            // line 107
            if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) {
                // line 108
                echo "                                <hr />

                                <a class=\"btn btn-outline-secondary btn-icon\" href=\"front/helpdesk.faq.php\">
                                    <i class=\"fas fa-question\"></i>&nbsp;
                                    ";
                // line 112
                echo twig_escape_filter($this->env, __("FAQ"), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 115
            echo "
                            <hr />

                            ";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 121
        echo "                    </div>
            </form>
         </div>
      </div>
    </div>
";
    }

    // line 128
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "<script type=\"text/javascript\">
   \$(function () {
\$('#login_name').focus();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 129,  217 => 128,  208 => 121,  202 => 118,  197 => 115,  191 => 112,  185 => 108,  183 => 107,  180 => 106,  174 => 103,  171 => 102,  169 => 101,  166 => 100,  164 => 99,  160 => 97,  154 => 94,  150 => 92,  148 => 91,  140 => 86,  133 => 82,  126 => 78,  119 => 74,  112 => 70,  105 => 66,  98 => 62,  89 => 56,  85 => 55,  81 => 54,  77 => 53,  71 => 49,  67 => 48,  52 => 35,  48 => 34,  37 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "/register.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\register.html.twig");
    }
}
