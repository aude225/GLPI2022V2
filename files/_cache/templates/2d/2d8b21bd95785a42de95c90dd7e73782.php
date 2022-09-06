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

/* components/form/single-action.html.twig */
class __TwigTemplate_37eab39edb94bc8cdbf0de9cebddb21e extends Template
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
        if ( !array_key_exists("onlyicon", $context)) {
            // line 33
            echo "   ";
            $context["onlyicon"] = false;
        }
        // line 35
        echo "
";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36)) {
            // line 37
            echo "   ";
            $context["input"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getMassiveActionsForItem", [], "method", false, false, false, 37), "getInput", [], "method", false, false, false, 37);
            // line 38
            echo "   ";
            if ((twig_length_filter($this->env, (($__internal_compile_0 = ($context["input"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["actions"] ?? null) : null)) > 0)) {
                // line 39
                echo "   ";
                $context["ms_auto"] = ((($context["single_actions_ms_auto"] ?? null)) ? ("ms-auto") : (""));
                // line 40
                echo "<div class=\"d-none d-sm-block btn-group ";
                echo twig_escape_filter($this->env, ($context["ms_auto"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, __("Actions"), "html", null, true);
                echo "\"
     ";
                // line 41
                if (($context["onlyicon"] ?? null)) {
                    echo "data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"";
                }
                echo ">
   <button class=\"btn ";
                // line 42
                echo ((($context["onlyicon"] ?? null)) ? ("btn-icon") : ("dropdown-toggle"));
                echo " btn-outline-secondary\" type=\"button\"
           id=\"single-action\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
           aria-expanded=\"false\">
      <i class=\"ti ti-dots-vertical\"></i>
      ";
                // line 46
                if ( !($context["onlyicon"] ?? null)) {
                    // line 47
                    echo "         <span>";
                    echo twig_escape_filter($this->env, __("Actions"), "html", null, true);
                    echo "</span>
      ";
                }
                // line 49
                echo "   </button>

   <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow mt-2\" aria-labelledby=\"single-action\">
      ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["input"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["actions"] ?? null) : null));
                foreach ($context['_seq'] as $context["key"] => $context["action"]) {
                    // line 53
                    echo "         <a class=\"dropdown-item\" data-action=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" href=\"#\">";
                    echo $context["action"];
                    echo "</a>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "   </div>
</div>
<script>
\$(function () {
   var ma = ";
                // line 59
                echo json_encode(($context["input"] ?? null));
                echo ";

   \$(document).on('click', '.moreactions', function () {
      \$('.moreactions + .dropdown-menu').toggle();
   });

   \$(document).on('click', function (event) {
      var target = \$(event.target);
      var parent = target.parent();

      if (!target.hasClass('moreactions')
         && !parent.hasClass('moreactions')) {
         \$('.moreactions + .dropdown-menu').hide();
      }
   });

   \$(document).on('click', '[data-action]', function () {
      \$('.moreactions + .dropdown-menu').hide();

      var current_action = \$(this).data('action');

      glpi_ajax_dialog({
         url: '";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/dropdownMassiveAction.php"), "html", null, true);
                echo "',
         title: ma.actions[current_action],
         params: Object.assign(
            { action: current_action },
            ma
         ),
         appendTo: '#massive_container_";
                // line 87
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "',
      });
   });
});
</script>
   ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/form/single-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 87,  139 => 81,  114 => 59,  108 => 55,  97 => 53,  93 => 52,  88 => 49,  82 => 47,  80 => 46,  73 => 42,  67 => 41,  60 => 40,  57 => 39,  54 => 38,  51 => 37,  49 => 36,  46 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/single-action.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\single-action.html.twig");
    }
}
