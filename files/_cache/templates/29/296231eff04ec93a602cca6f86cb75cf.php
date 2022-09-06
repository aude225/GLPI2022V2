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

/* pages/setup/dropdowns_list.html.twig */
class __TwigTemplate_db32a9149de2692a166de5912568f017 extends Template
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
        $context["grid_items"] = [];
        // line 33
        echo "
";
        // line 34
        $context["nb_opt"] = twig_length_filter($this->env, ($context["optgroup"] ?? null));
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["optgroup"] ?? null));
        foreach ($context['_seq'] as $context["label"] => $context["dropdown"]) {
            // line 36
            echo "   ";
            $context["card_id"] = ("dropdowns_list_" . twig_random($this->env));
            // line 37
            echo "   ";
            ob_start(function () { return ''; });
            // line 38
            echo "      <div class=\"card\">
         <div class=\"accordion accordion-flush\">
            <div class=\"accordion-item\">
               <h2 class=\"accordion-header\">
                  <button class=\"accordion-button ";
            // line 42
            echo (((($context["nb_opt"] ?? null) > 1)) ? ("collapsed") : (""));
            echo "\" type=\"button\"
                     data-bs-toggle=\"collapse\" data-bs-target=\"#";
            // line 43
            echo twig_escape_filter($this->env, ($context["card_id"] ?? null), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                     ";
            // line 44
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "
                  </button>
               </h2>
               <div id=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["card_id"] ?? null), "html", null, true);
            echo "\" class=\"accordion-collapse ";
            echo (((($context["nb_opt"] ?? null) > 1)) ? ("collapse") : (""));
            echo "\" style=\"transition: none\">
                  <div class=\"list-group list-group-flush list-group-hoverable\">
                     ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["dropdown"]);
            foreach ($context['_seq'] as $context["itemtype"] => $context["dropdown_label"]) {
                // line 50
                echo "                        ";
                $context["is_entity_assign"] = twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeClass($context["itemtype"]), "isEntityAssign", [], "method", false, false, false, 50);
                // line 51
                echo "                        <a class=\"list-group-item list-group-item-action ";
                echo ((($context["is_entity_assign"] ?? null)) ? ("") : ("dropdown-no-entity"));
                echo "\"
                           href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath($context["itemtype"]), "html", null, true);
                echo "\">
                           <div class=\"row\">
                              <div class=\"col-auto\">
                                 <i class=\"fa-fw ";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon($context["itemtype"]), "html", null, true);
                echo "\"></i>
                              </div>
                              <div class=\"col text-truncate\">
                                 ";
                // line 58
                echo twig_escape_filter($this->env, $context["dropdown_label"], "html", null, true);
                echo "
                              </div>
                              <div class=\"col-1 text-muted\">
                                 ";
                // line 61
                if (($context["is_entity_assign"] ?? null)) {
                    // line 62
                    echo "                                    <i class=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Entity"), "html", null, true);
                    echo " fa-sm\"
                                       data-bs-toggle=\"tooltip\"
                                       title=\"";
                    // line 64
                    echo twig_escape_filter($this->env, __("Dropdown with entity management"), "html", null, true);
                    echo "\"></i>
                                 ";
                }
                // line 66
                echo "                              </div>
                           </div>
                        </a>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['itemtype'], $context['dropdown_label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                  </div>
               </div>
            </div>
         </div>
      </div>
   ";
            $context["card_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "
   ";
            // line 77
            $context["grid_items"] = twig_array_merge(($context["grid_items"] ?? null), [0 =>             // line 78
($context["card_html"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['dropdown'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "

<div class=\"container-fluid text-start mb-4 dropdowns-list\">
   <div class=\"input-icon mb-3\">
      <input class=\"form-control\" placeholder=\"filter dropdowns\" id=\"filter-dropdown\" />
      <span class=\"input-icon-addon\">
         <i class=\"fas fa-search\"></i>
      </span>
   </div>

   ";
        // line 91
        echo twig_include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 92
($context["grid_items"] ?? null), "grid_item_class" => "col-lg-6 col-xl-4 col-xxl-3"], false);
        // line 94
        echo "
</div>

<script>
\$(function () {
   var timerid;
   \$('#filter-dropdown').on('input',function() {
      var input_value = \$(this).val();

      clearTimeout(timerid);

      // reset state
      \$('.dropdowns-list .collapse').removeClass('show');
      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
      \$('.dropdowns-list .list-group-item').show();
      \$('.dropdowns-list .accordion-collapse').removeClass('show')
      \$('.dropdowns-list .accordion-button').addClass('collapsed')

      if (input_value.length > 0) {
         timerid = setTimeout(function() {
            console.log(input_value);

            \$('.dropdowns-list .list-group-item:not(:icontains('+input_value+'))').hide();
            \$('.dropdowns-list .list-group-item:icontains('+input_value+')')
               .closest('.accordion-collapse').addClass('show')
               .siblings('.accordion-header')
                  .children('.accordion-button').removeClass('collapsed');

            \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");

         }, 500);
      }
   })

   \$('.dropdowns-list .collapse').on('shown.bs.collapse hidden.bs.collapse', function() {
      console.log('shown.bs.collapse', \$(this));

      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
   })
});
</script>
";
    }

    public function getTemplateName()
    {
        return "pages/setup/dropdowns_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 94,  167 => 92,  166 => 91,  154 => 81,  148 => 78,  147 => 77,  144 => 76,  136 => 70,  127 => 66,  122 => 64,  116 => 62,  114 => 61,  108 => 58,  102 => 55,  96 => 52,  91 => 51,  88 => 50,  84 => 49,  77 => 47,  71 => 44,  67 => 43,  63 => 42,  57 => 38,  54 => 37,  51 => 36,  47 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/dropdowns_list.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\setup\\dropdowns_list.html.twig");
    }
}
