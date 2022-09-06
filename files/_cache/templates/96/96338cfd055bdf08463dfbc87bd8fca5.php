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

/* components/messages_after_redirect_alerts.html.twig */
class __TwigTemplate_cc75d125d9755282fa6143c1666385ef extends Template
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
        $context["messages"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->pullMessages();
        // line 33
        if (twig_length_filter($this->env, ($context["messages"] ?? null))) {
            // line 34
            echo "
   ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["message"]) {
                // line 36
                echo "      ";
                $context["message"] = twig_join_filter($context["message"], "<br />");
                // line 37
                echo "      ";
                $context["class"] = "";
                // line 38
                echo "      ";
                $context["title"] = "";
                // line 39
                echo "      ";
                if (($context["type"] == twig_constant("ERROR"))) {
                    // line 40
                    echo "         ";
                    $context["class"] = "alert-danger";
                    // line 41
                    echo "         ";
                    $context["title"] = __("Error");
                    // line 42
                    echo "      ";
                } elseif (($context["type"] == twig_constant("WARNING"))) {
                    // line 43
                    echo "         ";
                    $context["class"] = "alert-warning";
                    // line 44
                    echo "         ";
                    $context["title"] = __("Warning");
                    // line 45
                    echo "      ";
                } else {
                    // line 46
                    echo "         ";
                    $context["class"] = "alert-info";
                    // line 47
                    echo "         ";
                    $context["title"] = _n("Information", "Informations", 1);
                    // line 48
                    echo "      ";
                }
                // line 49
                echo "
      <div class=\"alert alert-important ";
                // line 50
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" role=\"alert\">
         <h3>";
                // line 51
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</h3>
         <p>
            ";
                // line 53
                echo $context["message"];
                echo "
         </p>
      </div>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "components/messages_after_redirect_alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 53,  97 => 51,  93 => 50,  90 => 49,  87 => 48,  84 => 47,  81 => 46,  78 => 45,  75 => 44,  72 => 43,  69 => 42,  66 => 41,  63 => 40,  60 => 39,  57 => 38,  54 => 37,  51 => 36,  47 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/messages_after_redirect_alerts.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\messages_after_redirect_alerts.html.twig");
    }
}
