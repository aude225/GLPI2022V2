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

/* components/kanban/kanban.html.twig */
class __TwigTemplate_8aabaee51a3ad6ed85b8868e27b82c2a extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/kanban/kanban.html.twig", 32)->unwrap();
        // line 33
        $macros["modals"] = $this->macros["modals"] = $this->loadTemplate("components/form/modals_macros.html.twig", "components/kanban/kanban.html.twig", 33)->unwrap();
        // line 34
        echo "
";
        // line 35
        if ( !array_key_exists("rights", $context)) {
            // line 36
            echo "   ";
            $context["rights"] = ["create_item" => false, "delete_item" => false, "create_column" => false, "modify_view" => false, "order_card" => false, "create_card_limited_columns" => [0 => 0]];
        }
        // line 45
        echo "
<div id=\"kanban\" class=\"kanban\"></div>
";
        // line 47
        echo twig_call_macro($macros["modals"], "macro_modal", ["", "", ["id" => "kanban-modal"]], 47, $context, $this->getSourceContext());
        // line 49
        echo "

";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["supported_itemtypes"] ?? null));
        foreach ($context['_seq'] as $context["supported_itemtype"] => $context["info"]) {
            // line 52
            echo "   <template id=\"kanban-teammember-item-dropdown-";
            echo twig_escape_filter($this->env, $context["supported_itemtype"], "html", null, true);
            echo "\">
      ";
            // line 53
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["role", null, twig_get_attribute($this->env, $this->source, $context["info"], "team_roles", [], "any", false, false, false, 53), __("Role")], 53, $context, $this->getSourceContext());
            echo "
      ";
            // line 54
            echo twig_call_macro($macros["fields"], "macro_dropdownItemsFromItemtypes", ["add-teammember", "", ["itemtypes" => twig_get_attribute($this->env, $this->source,             // line 55
$context["info"], "team_itemtypes", [], "any", false, false, false, 55)]], 54, $context, $this->getSourceContext());
            // line 56
            echo "
   </template>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['supported_itemtype'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
<script>
   \$(function(){
      // Create Kanban
      var kanban = new GLPIKanban({
         element: \"#";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("kanban_id", $context)) ? (_twig_default_filter(($context["kanban_id"] ?? null), "kanban")) : ("kanban")), "html", null, true);
        echo "\",
         rights: ";
        // line 65
        echo json_encode(($context["rights"] ?? null));
        echo ",
         supported_itemtypes: ";
        // line 66
        echo json_encode(($context["supported_itemtypes"] ?? null));
        echo ",
         max_team_images: 3,
         column_field: ";
        // line 68
        echo json_encode(($context["column_field"] ?? null));
        echo ",
         background_refresh_interval: ";
        // line 69
        echo twig_escape_filter($this->env, ((array_key_exists("background_refresh_interval", $context)) ? (_twig_default_filter(($context["background_refresh_interval"] ?? null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpirefresh_views"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpirefresh_views"))), "html", null, true);
        echo ",
         item: ";
        // line 70
        echo json_encode(($context["item"] ?? null));
        echo ",
         supported_filters: ";
        // line 71
        echo json_encode(($context["supported_filters"] ?? null));
        echo ",
         display_initials: ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("display_users_initials", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")), "html", null, true);
        echo ",
      });
      // Create kanban elements and add data
      kanban.init();
   });
</script>
";
    }

    public function getTemplateName()
    {
        return "components/kanban/kanban.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 72,  119 => 71,  115 => 70,  111 => 69,  107 => 68,  102 => 66,  98 => 65,  94 => 64,  87 => 59,  79 => 56,  77 => 55,  76 => 54,  72 => 53,  67 => 52,  63 => 51,  59 => 49,  57 => 47,  53 => 45,  49 => 36,  47 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/kanban/kanban.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\kanban\\kanban.html.twig");
    }
}
