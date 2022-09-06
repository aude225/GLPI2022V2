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

/* layout/parts/profile_selector.html.twig */
class __TwigTemplate_ddc0064403faf545a29979f3f218b291 extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 33
        echo "
<div class=\"dropdown dropstart\">
   <button class=\"dropdown-item dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\">
      <i class=\"ti ti-user-check\"></i>
      ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((((twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null)))) ? ((($__internal_compile_1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null)) : (""))), "html", null, true);
        echo "
   </button>
   <div class=\"dropdown-menu\" data-bs-popper=\"none\">
      <span class=\"dropdown-header\">";
        // line 41
        echo twig_escape_filter($this->env, __("Profiles"), "html", null, true);
        echo "</span>
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiprofiles"));
        foreach ($context['_seq'] as $context["profile_id"] => $context["profile"]) {
            // line 43
            echo "      <a class=\"dropdown-item ";
            echo ((($context["profile_id"] == (((twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "id", [], "array", true, true, false, 43) &&  !(null === (($__internal_compile_2 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)))) ? ((($__internal_compile_3 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null)) : (0)))) ? ("active") : (""));
            echo "\"
         href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "?newprofile=";
            echo twig_escape_filter($this->env, $context["profile_id"], "html", null, true);
            echo "\">
         <i class=\"ti ti-user-check\"></i>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_4 = $context["profile"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null)), "html", null, true);
            echo "
      </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['profile_id'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "   </div>
</div>

";
        // line 51
        $context["target"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/central.php");
        // line 52
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk")) {
            // line 53
            echo "   ";
            $context["target"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/helpdesk.public.php");
        }
        // line 55
        echo "
";
        // line 56
        $context["current_entity"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name"));
        // line 57
        $context["current_entity_short"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_shortname"));
        // line 58
        if ((($context["current_entity"] ?? null) != ($context["current_entity_short"] ?? null))) {
            // line 59
            echo "   ";
            $context["current_entity_short"] = ("... > " . ($context["current_entity_short"] ?? null));
        }
        // line 61
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpi_multientitiesmode") == 0)) {
            // line 62
            echo "   <span class=\"dropdown-item dropdown-item-text\" title=\"";
            echo twig_escape_filter($this->env, ($context["current_entity"] ?? null), "html", null, true);
            echo "\">
      <i class=\"fa-fw ti ti-stack\"></i>
      ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["current_entity_short"] ?? null)), "truncate", [0 => 35, 1 => "..."], "method", false, false, false, 64), "html", null, true);
            echo "
   </span>
";
        } else {
            // line 67
            echo "   <div class=\"dropdown dropstart\">
      <a href=\"#\" class=\"dropdown-item dropdown-toggle\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" title=\"";
            // line 68
            echo twig_escape_filter($this->env, ($context["current_entity"] ?? null), "html", null, true);
            echo "\">
         <i class=\"fa-fw ti ti-stack\"></i>
         ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["current_entity_short"] ?? null)), "truncate", [0 => 35, 1 => "..."], "method", false, false, false, 70), "html", null, true);
            echo "
      </a>
      <div class=\"dropdown-menu p-3\">
         <h3>";
            // line 73
            echo twig_escape_filter($this->env, __("Select the desired entity"), "html", null, true);
            echo "</h3>

         <div class=\"alert alert-info\" role=\"alert\">
            <i class=\"fas fa-info-circle\"></i>
            <span class=\"ms-2\">
               ";
            // line 78
            ob_start(function () { return ''; });
            // line 79
            echo "                  <i class=\"fas fa-angle-double-down\" title=\"";
            echo twig_escape_filter($this->env, __("+ sub-entities"), "html", null, true);
            echo "\"></i>
               ";
            $context["recursive_icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 81
            echo "               ";
            echo twig_sprintf(__("Click on the %s icon to see the entity and its sub-entities"), ($context["recursive_icon"] ?? null));
            echo "
            </span>
         </div>

         <form id=\"entsearchform";
            // line 85
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
            <div class=\"input-group\">
               <input type=\"text\" class=\"form-control\" name=\"entsearchtext\" id=\"entsearchtext";
            // line 87
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                     placeholder=\"";
            // line 88
            echo twig_escape_filter($this->env, __("Search entity"), "html", null, true);
            echo "\" autocomplete=\"off\">
               <button type=\"submit\" class=\"btn btn-icon btn-primary\" title=\"";
            // line 89
            echo twig_escape_filter($this->env, __("Search"), "html", null, true);
            echo "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"ti ti-search\"></i>
               </button>
               <a class=\"btn btn-icon btn-outline-secondary\" href=\"#\" id=\"entsearchtext";
            // line 93
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "_clear\"
                  title=\"";
            // line 94
            echo twig_escape_filter($this->env, __("Clear search"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                     <i class=\"ti ti-x\"></i>
               </a>
               <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "?active_entity=all\" class=\"btn btn-secondary\"
                  title=\"";
            // line 98
            echo twig_escape_filter($this->env, __("Select all"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"ti ti-eye\"></i>
               </a>
            </div>
         </form>

         <div class=\"fancytree-grid-container flexbox-item-grow entity_tree\">
            <table id=\"tree_entity";
            // line 105
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
               <colgroup>
                  <col></col>
               </colgroup>
               <thead>
                  <tr>
                     <th class=\"parent-path\"></th>
                  </tr>
               </thead>
               <tbody>
               </tbody>
            </table>
            <div id=\"verticalScrollbar-";
            // line 117
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" style=\"height:100%;\"></div>
         </div>
      </div>
   </div>

   <script type=\"text/javascript\">
   \$(function() {
      \$('#tree_entity";
            // line 124
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').fancytree({
         // load plugins
         extensions: ['filter', 'glyph', 'grid'],

         // Scroll node into visible area, when focused by keyboard
         autoScroll: true,

         // enable font-awesome icons
         glyph: {
            preset: \"awesome5\",
            map: {}
         },

         // enable virtual dom, it requires the grid (table extension) plugin
         table: {
            indentation: 20,       // indent 20px per node level
            nodeColumnIdx: 0,      // render the node title into the 1st column
         },
         viewport: {
            enabled: true,
            count: 15, // number of items to display at once
         },

         // load data by ajax
         source: {
            url:  '";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/entitytreesons.php"), "html", null, true);
            echo "',
            cache: false
         },

         // filter plugin options
         filter: {
            mode: \"hide\", // remove unmatched nodes
            autoExpand: true, // if results found in children, auto-expand parent
            nodata: '";
            // line 157
            echo twig_escape_filter($this->env, __("No entity found"), "html", null, true);
            echo "', // message when no data found
            highlight: false, // do not highlight matches by wrapping inside tags (when true, this strip the a tag)
         },

         // load 3rd party scrollbar extension for viewport mode
         preInit: function(event, data) {
            var tree = data.tree;

            tree.verticalScrollbar = new PlainScrollbar({
               alwaysVisible: true,
               arrows: true,
               orientation: \"vertical\",
               onSet: function(numberOfItems) {
                  tree.setViewport({
                     start: Math.round(numberOfItems.start),
                  });
               },
               scrollbarElement: document.getElementById(\"verticalScrollbar-";
            // line 174
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"),
            });
         },

         // update scrollbar when viewport is updated
         updateViewport: function(event, data) {
            var tree = data.tree;

            tree.verticalScrollbar.set({
               start: tree.viewport.start,
               total: tree.visibleNodeList.length,
               visible: tree.viewport.count,
            }, true);  // do not trigger `onSet`
         },
      });

      var searchTree = function() {
         var search_text = \$(\"#entsearchtext";
            // line 191
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").val();
         \$.ui.fancytree.getTree(\"#tree_entity";
            // line 192
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").filterNodes(search_text);
      }

      \$('#entsearchform";
            // line 195
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').submit(function(event) {
         // cancel submit of entity search form
         event.preventDefault();

         searchTree();
      });

      \$('#entsearchtext";
            // line 202
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').keyup(function () {
         var inputsearch = \$(this);
         typewatch(function () {
            if (inputsearch.val().length >= 3) {
               searchTree();
            }
         }, 500);
      }).focus();

      \$('#entsearchtext";
            // line 211
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "_clear').click(function () {
         \$('#entsearchtext";
            // line 212
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').val('');
         searchTree();
      });
   });
   </script>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/parts/profile_selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 212,  341 => 211,  329 => 202,  319 => 195,  313 => 192,  309 => 191,  289 => 174,  269 => 157,  258 => 149,  230 => 124,  220 => 117,  205 => 105,  195 => 98,  191 => 97,  185 => 94,  181 => 93,  174 => 89,  170 => 88,  166 => 87,  161 => 85,  153 => 81,  147 => 79,  145 => 78,  137 => 73,  131 => 70,  126 => 68,  123 => 67,  117 => 64,  111 => 62,  109 => 61,  105 => 59,  103 => 58,  101 => 57,  99 => 56,  96 => 55,  92 => 53,  90 => 52,  88 => 51,  83 => 48,  74 => 45,  68 => 44,  63 => 43,  59 => 42,  55 => 41,  49 => 38,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/profile_selector.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\profile_selector.html.twig");
    }
}
