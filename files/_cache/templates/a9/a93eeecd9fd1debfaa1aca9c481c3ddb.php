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

/* components/itilobject/timeline/filter_timeline.html.twig */
class __TwigTemplate_87a8079ff78d198ed097c5c0d669338b extends Template
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
        $context["filters_buttons"] = ["description" => ["title" => __("Description"), "icon" => twig_get_attribute($this->env, $this->source,         // line 35
($context["item"] ?? null), "getIcon", [], "method", false, false, false, 35), "itemtype" => "ITILContent", "checked" => true], "followups" => ["title" => _n("Followup", "Followups", Session::getPluralNumber()), "icon" => "ti ti-message-circle", "itemtype" => "ITILFollowup", "checked" => true], "tasks" => ["title" => _n("Task", "Tasks", Session::getPluralNumber()), "icon" => "ti ti-checkbox", "itemtype" => "ITILTask", "checked" => true], "documents" => ["title" => _n("Document", "Documents", Session::getPluralNumber()), "icon" => "ti ti-paperclip", "itemtype" => "Document_Item", "checked" => true], "validations" => ["title" => _n("Validation", "Validations", Session::getPluralNumber()), "icon" => "ti ti-thumb-up", "itemtype" => "ITILValidation", "checked" => true], "solutions" => ["title" => _n("Solution", "Solutions", Session::getPluralNumber()), "icon" => "ti ti-check", "itemtype" => "ITILSolution", "checked" => true]];
        // line 70
        echo "
";
        // line 71
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 72
            echo "   ";
            $context["filters_buttons"] = twig_array_merge(($context["filters_buttons"] ?? null), ["logs" => ["title" => __("Historical"), "icon" => "fas fa-history", "itemtype" => "Log", "checked" => false]]);
        }
        // line 81
        echo "
<div class=\"filter-timeline d-none d-md-block float-end mt-n2 position-relative\">
   <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 83
        echo twig_escape_filter($this->env, __("Timeline filter"), "html", null, true);
        echo "\">
      <button type=\"button\"
            class=\"btn btn-sm btn-icon btn-ghost-secondary open-timeline-filter-popover\"
            data-bs-toggle=\"collapse\"
            data-bs-target=\"#filter-timeline-popover\"
            data-bs-trigger=\"click\">
         <i class=\"ti ti-filter\"></i>
      </button>
   </span>

   <div class=\"filter-timeline-popover collapse position-absolute bottom-100 end-0 text-nowrap\"
        id=\"filter-timeline-popover\">
      <div class=\"card pt-2\">
         <div class=\"list-group list-group-flush\">
            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filters_buttons"] ?? null));
        foreach ($context['_seq'] as $context["filter_key"] => $context["filter_button"]) {
            // line 98
            echo "               <li class=\"list-group-item list-group-item-action py-1\">
                  <div class=\"form-check form-switch trigger-filter ";
            // line 99
            echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["filter_button"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
            echo "\" role=\"button\">
                     <input class=\"form-check-input\" type=\"checkbox\" id=\"timeline-filter-";
            // line 100
            echo twig_escape_filter($this->env, $context["filter_key"], "html", null, true);
            echo "\"
                           autocomplete=\"off\"
                           ";
            // line 102
            echo (((($__internal_compile_1 = $context["filter_button"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["checked"] ?? null) : null)) ? ("checked") : (""));
            echo "
                           data-itemtype=\"";
            // line 103
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["filter_button"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["itemtype"] ?? null) : null), "html", null, true);
            echo "\" />
                     <label class=\"form-check-label\" for=\"timeline-filter-";
            // line 104
            echo twig_escape_filter($this->env, $context["filter_key"], "html", null, true);
            echo "\" role=\"button\">
                        <i class=\"";
            // line 105
            echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["filter_button"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["icon"] ?? null) : null), "html", null, true);
            echo " ms-2\"></i>
                        ";
            // line 106
            echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["filter_button"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["title"] ?? null) : null), "html", null, true);
            echo "
                     </label>
                  </div>
               </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filter_key'], $context['filter_button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "         </div>
      </div>
   </div>

   ";
        // line 115
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 116
            echo "      <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, __("View TODO list"), "html", null, true);
            echo "\">
         <button type=\"button\"
               class=\"btn btn-sm btn-icon btn-ghost-secondary view-timeline-todo-list me-1\">
            <i class=\"fas fa-tasks\"></i>
         </button>
      </span>
   ";
        }
        // line 123
        echo "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".filter-timeline-popover .trigger-filter\", function() {
      var timeline       = \$('#itil-object-container .itil-timeline');
      var timeline_items = timeline.find(\".timeline-item\");

      timeline_items.addClass('d-none');
      \$('.filter-timeline-popover .trigger-filter input[type=checkbox]').each(function() {
         if(!\$(this).is(':checked')) {
            return;
         }
         var itemtype = \$(this).data('itemtype');
         timeline_items.filter(\".\"+itemtype).removeClass('d-none');
      });
   });

   \$(document).on(\"click\", \".view-timeline-todo-list\", function() {
      \$('body').toggleClass('timeline-todo-list');
   });

   \$(document).mouseup(function(e) {
      var container = \$(\"#filter-timeline-popover\");

      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) {
         var mycollapse = bootstrap.Collapse.getInstance(container[0]);
         if (mycollapse !== null) {
            mycollapse.hide();
         }
      }
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/filter_timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 123,  124 => 116,  122 => 115,  116 => 111,  105 => 106,  101 => 105,  97 => 104,  93 => 103,  89 => 102,  84 => 100,  80 => 99,  77 => 98,  73 => 97,  56 => 83,  52 => 81,  48 => 72,  46 => 71,  43 => 70,  41 => 35,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/filter_timeline.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\filter_timeline.html.twig");
    }
}
