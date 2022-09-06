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

/* components/itilobject/add_items.html.twig */
class __TwigTemplate_70719c7bb6287bd6f8faa6455f59e13a extends Template
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
<div id=\"itemAddForm";
        // line 32
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 33
        if (($context["can_edit"] ?? null)) {
            // line 34
            echo "      ";
            echo ($context["my_items_dropdown"] ?? null);
            echo "
      ";
            // line 35
            echo ($context["all_items_dropdown"] ?? null);
            echo "
      <a href=\"javascript:itemAction";
            // line 36
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "('add');\" class=\"btn btn-sm btn-outline-secondary\">
         <i class=\"fas fa-plus\"></i>
         <span>";
            // line 38
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "</span>
      </a>
   ";
        }
        // line 41
        echo "
   ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items_to_add"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item_to_add"]) {
            // line 43
            echo "      ";
            echo $context["item_to_add"];
            echo "
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_to_add'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
   ";
        // line 46
        if ((($context["count"] ?? null) == 0)) {
            // line 47
            echo "      <input type=\"hidden\" value=\"0\" name=\"items_id\">
   ";
        }
        // line 49
        echo "
   ";
        // line 50
        if (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 50) > 0) && (($context["usedcount"] ?? null) != ($context["count"] ?? null)))) {
            // line 51
            echo "      <i>";
            echo twig_escape_filter($this->env, twig_sprintf(_n("%1\$s item not saved", "%1\$s items not saved", (($context["count"] ?? null) - ($context["usedcount"] ?? null))), (($context["count"] ?? null) - ($context["usedcount"] ?? null))), "html", null, true);
            echo "</i>
   ";
        }
        // line 53
        echo "   ";
        if (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 53) > 0) && (($context["usedcount"] ?? null) > 5))) {
            // line 54
            echo "      <i><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 54)), "html", null, true);
            echo "&amp;forcetab=Item_Ticket\$1\">";
            echo twig_escape_filter($this->env, (((__("Display all items") . "(") . ($context["usedcount"] ?? null)) . ")"), "html", null, true);
            echo "</a></i>
   ";
        }
        // line 56
        echo "   <script>
      function refreshItemCounter";
        // line 57
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "() {
         const item_form = \$(\"#itemAddForm";
        // line 58
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\");
         let item_count = item_form.find('input[type=\"hidden\"][name^=\"items_id[\"]').length;
         item_form.closest('.accordion-item').find('.item-counter').text(item_count);
      }

      function itemAction";
        // line 63
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "(action, itemtype, items_id) {
          if (itemtype === undefined && items_id === undefined) {
              const my_items_dropdown = \$('#dropdown_my_items";
        // line 65
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "');
              if (my_items_dropdown.length > 0) {
                 const val = my_items_dropdown.val();
                 if (val && val.includes('_')) {
                    itemtype = val.split('_')[0];
                    items_id = val.split('_')[1];
                 }
              }
              if (itemtype === undefined && items_id === undefined) {
                  const dropdown_itemtype = \$('#dropdown_itemtype";
        // line 74
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "');
                  const dropdown_items_id = \$('#dropdown_add_items_id";
        // line 75
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "');
                  if (dropdown_itemtype.length > 0 && dropdown_items_id.length > 0) {
                      itemtype = dropdown_itemtype.val();
                      items_id = dropdown_items_id.val();
                  }
              }
          }
         if (!itemtype || !items_id) {
            glpi_toast_error(__('Please select an item to add'));
            return;
         }
         \$.ajax({
            url: CFG_GLPI.root_doc + '/ajax/itemTicket.php',
            dataType: 'html',
            data: {
               'action': action,
               'rand': ";
        // line 91
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo ",
               'params': ";
        // line 92
        echo json_encode(($context["opt"] ?? null));
        echo ",
               'my_items': \$('#dropdown_my_items";
        // line 93
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').val(),
               'itemtype': itemtype,
               'items_id': items_id,
            },
            success: function(response) {
               \$(\"#itemAddForm";
        // line 98
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\").replaceWith(response);
            }
         });
      }
      refreshItemCounter";
        // line 102
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "();
   </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/add_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 102,  184 => 98,  176 => 93,  172 => 92,  168 => 91,  149 => 75,  145 => 74,  133 => 65,  128 => 63,  120 => 58,  116 => 57,  113 => 56,  105 => 54,  102 => 53,  96 => 51,  94 => 50,  91 => 49,  87 => 47,  85 => 46,  82 => 45,  73 => 43,  69 => 42,  66 => 41,  60 => 38,  55 => 36,  51 => 35,  46 => 34,  44 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/add_items.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\add_items.html.twig");
    }
}
