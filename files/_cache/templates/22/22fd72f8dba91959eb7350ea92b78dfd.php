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

/* components/messages_after_redirect_toasts.html.twig */
class __TwigTemplate_7afc2cfb72b32220de5c2c8168ac489f extends Template
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
            echo "<div class=\"toast-container bottom-0 end-0 p-3 messages_after_redirect\">

   ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["message"]) {
                // line 37
                echo "      ";
                $context["message"] = twig_join_filter($context["message"], "<br />");
                // line 38
                echo "      ";
                $context["class"] = "";
                // line 39
                echo "      ";
                $context["title"] = "";
                // line 40
                echo "      ";
                if (($context["type"] == twig_constant("ERROR"))) {
                    // line 41
                    echo "         ";
                    $context["class"] = "bg-danger text-white";
                    // line 42
                    echo "         ";
                    $context["title"] = __("Error");
                    // line 43
                    echo "      ";
                } elseif (($context["type"] == twig_constant("WARNING"))) {
                    // line 44
                    echo "         ";
                    $context["class"] = "bg-warning text-white";
                    // line 45
                    echo "         ";
                    $context["title"] = __("Warning");
                    // line 46
                    echo "      ";
                } else {
                    // line 47
                    echo "         ";
                    $context["class"] = "bg-info text-white";
                    // line 48
                    echo "         ";
                    $context["title"] = _n("Information", "Informations", 1);
                    // line 49
                    echo "      ";
                }
                // line 50
                echo "
      <div class=\"toast animate__animated animate__tada animate__delay-2s animate__slow\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
         <div class=\"toast-header ";
                // line 52
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo " \">
            <strong class=\"me-auto\">";
                // line 53
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</strong>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
         </div>
         <div class=\"toast-body\">
            ";
                // line 57
                echo $context["message"];
                echo "
         </div>
      </div>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
</div>

<script type=\"text/javascript\">
\$(function() {
   var toastElList = [].slice.call(document.querySelectorAll('.toast'));
   var toastList = toastElList.map(function (toastEl) {
      var toast = new bootstrap.Toast(toastEl, {
         delay: 10000,
      })
      toast.show()
      return toast;
   });
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "components/messages_after_redirect_toasts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 61,  106 => 57,  99 => 53,  95 => 52,  91 => 50,  88 => 49,  85 => 48,  82 => 47,  79 => 46,  76 => 45,  73 => 44,  70 => 43,  67 => 42,  64 => 41,  61 => 40,  58 => 39,  55 => 38,  52 => 37,  48 => 36,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/messages_after_redirect_toasts.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\messages_after_redirect_toasts.html.twig");
    }
}
