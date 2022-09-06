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

/* pages/admin/events_list.html.twig */
class __TwigTemplate_63a86f7389f3faa3c59688d3ce7c6464 extends Template
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
<div class=\"container-fluid\">
   <div class=\"search_page\">
      <div class=\"search-container\">
         <div class=\"card card-sm search-card\">
            ";
        // line 36
        if ((($context["count"] ?? null) == 0)) {
            // line 37
            echo "               <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
                  ";
            // line 38
            echo twig_escape_filter($this->env, __("No item found"), "html", null, true);
            echo "
               </div>
            ";
        } else {
            // line 41
            echo "               <div class=\"card-header search-header pe-0\">
                  ";
            // line 42
            if ((($context["count"] ?? null) > 0)) {
                // line 43
                echo "                     ";
                $context["limitdropdown"] = twig_include($this->env, $context, "components/dropdown/limit.html.twig", ["href" => (                // line 44
($context["target"] ?? null) . "?"), "additional_params" => ((("sort=" .                 // line 45
($context["sort"] ?? null)) . "&order=") . ($context["order"] ?? null))]);
                // line 47
                echo "                     <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block search-limit\">
                        ";
                // line 48
                echo twig_sprintf(__("Show %s entries"), ($context["limitdropdown"] ?? null));
                echo "
                     </div>
               ";
            }
            // line 51
            echo "               </div>
               <div class=\"table-responsive-md\">
                  <table class=\"search-results table table-hover table-card\">
                     <thead>
                        ";
            // line 55
            $context["headings"] = ["type" => __("Source"), "items_id" => __("ID"), "date" => _n("Date", "Dates", 1), "service" => __("Service"), "level" => __("Level"), "message" => __("Message")];
            // line 63
            echo "
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headings"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 65
                echo "                           <th>
                              <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "?sort=";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "&amp;order=";
                echo (((($context["order"] ?? null) == "ASC")) ? ("DESC") : ("ASC"));
                echo "\">
                                 ";
                // line 67
                if ((($context["sort"] ?? null) == $context["field"])) {
                    // line 68
                    echo "                                    ";
                    $context["sort_icon"] = (((($context["order"] ?? null) == "ASC")) ? ("fa-sort-up") : ("fa-sort-down"));
                    // line 69
                    echo "                                    <i class=\"fas fa-lg ";
                    echo twig_escape_filter($this->env, ($context["sort_icon"] ?? null), "html", null, true);
                    echo "\"></i>
                                 ";
                }
                // line 71
                echo "                                 ";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "
                              </a>
                           </th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                     </thead>
                     <tbody>
                        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 78
                echo "                           <tr>
                              <td>
                                 ";
                // line 80
                $context["itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getSingular", [0 => (($__internal_compile_0 = $context["event"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null)]);
                // line 81
                echo "                                 <i class=\"fa-fw text-muted ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon(($context["itemtype"] ?? null)), "html", null, true);
                echo "\"></i>
                                 <span>";
                // line 82
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["itemtypes"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 82) &&  !(null === (($__internal_compile_1 = ($context["itemtypes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["itemtype"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["itemtypes"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["itemtype"] ?? null)] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)))), "html", null, true);
                echo "</span>
                              </td>
                              <td>";
                // line 84
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Event::displayItemLogID", [0 => (($__internal_compile_3 = $context["event"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["type"] ?? null) : null), 1 => (($__internal_compile_4 = $context["event"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["items_id"] ?? null) : null)]);
                echo "</td>
                              <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_5 = $context["event"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["date"] ?? null) : null)), "html", null, true);
                echo "</td>
                              <td>";
                // line 86
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), (($__internal_compile_6 = $context["event"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["service"] ?? null) : null), [], "array", true, true, false, 86) &&  !(null === (($__internal_compile_7 = ($context["services"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[(($__internal_compile_8 = $context["event"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["service"] ?? null) : null)] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["services"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[(($__internal_compile_10 = $context["event"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["service"] ?? null) : null)] ?? null) : null)) : ((($__internal_compile_11 = $context["event"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["service"] ?? null) : null))), "html", null, true);
                echo "</td>
                              <td>";
                // line 87
                echo twig_escape_filter($this->env, (($__internal_compile_12 = $context["event"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["level"] ?? null) : null), "html", null, true);
                echo "</td>
                              <td>";
                // line 88
                echo twig_escape_filter($this->env, (($__internal_compile_13 = $context["event"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["message"] ?? null) : null), "html", null, true);
                echo "</td>
                           </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                     </tbody>
                  </table>
               </div>

               <div class=\"search-footer card-footer\">
                  ";
            // line 96
            echo twig_include($this->env, $context, "components/pager.html.twig", ["href" => (            // line 97
($context["target"] ?? null) . "?"), "additional_params" => ((("sort=" .             // line 98
($context["sort"] ?? null)) . "&order=") . ($context["order"] ?? null)), "count" =>             // line 99
($context["count"] ?? null)]);
            // line 100
            echo "
               </div>
            ";
        }
        // line 103
        echo "         </div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/events_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 103,  183 => 100,  181 => 99,  180 => 98,  179 => 97,  178 => 96,  171 => 91,  162 => 88,  158 => 87,  154 => 86,  150 => 85,  146 => 84,  141 => 82,  136 => 81,  134 => 80,  130 => 78,  126 => 77,  122 => 75,  111 => 71,  105 => 69,  102 => 68,  100 => 67,  92 => 66,  89 => 65,  85 => 64,  82 => 63,  80 => 55,  74 => 51,  68 => 48,  65 => 47,  63 => 45,  62 => 44,  60 => 43,  58 => 42,  55 => 41,  49 => 38,  46 => 37,  44 => 36,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/admin/events_list.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\admin\\events_list.html.twig");
    }
}
