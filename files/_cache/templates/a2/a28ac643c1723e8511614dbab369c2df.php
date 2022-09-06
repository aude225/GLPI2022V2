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

/* components/search/display_data.html.twig */
class __TwigTemplate_818be06aea9bedb1e37833799e0ef48e extends Template
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
        $context["is_ajax"] = (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 32) &&  !(null === (($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["searchform_id"] ?? null) : null)));
        // line 33
        if ( !($context["is_ajax"] ?? null)) {
            // line 34
            echo "   <div class=\"ajax-container search-display-data\">
";
        }
        // line 36
        echo "
";
        // line 38
        $context["normalized_itemtype"] = twig_replace_filter(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 39
        echo "
<form id=\"massform";
        // line 40
        echo twig_escape_filter($this->env, ($context["normalized_itemtype"] ?? null), "html", null, true);
        echo "\" method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/massiveaction.php"), "html", null, true);
        echo "\"
      data-search-itemtype=\"";
        // line 41
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["itemtype"] ?? null) : null), "html", null, true);
        echo "\" data-start=\"";
        echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
        echo "\" data-count=\"";
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "\" data-limit=\"";
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo "\" data-submit-once>
   <div class=\"card card-sm mt-0 search-card\">
      <div class=\"card-header d-flex justify-content-between search-header pe-0\">
         ";
        // line 44
        if (((($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["display_type"] ?? null) : null) == twig_constant("Search::GLOBAL_SEARCH"))) {
            // line 45
            echo "            <h2>";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
            echo "</h2>

            ";
            // line 47
            if ((($context["count"] ?? null) > (($context["start"] ?? null) + twig_constant("Search::GLOBAL_DISPLAY_COUNT")))) {
                // line 48
                echo "               <a href=\"";
                echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
                echo "\">
                  <i class=\"far fa-eye\"></i>
                  ";
                // line 50
                echo twig_escape_filter($this->env, __("View all"), "html", null, true);
                echo "
               </a>
            ";
            }
            // line 53
            echo "         ";
        } else {
            // line 54
            echo "            ";
            echo twig_include($this->env, $context, "components/search/controls.html.twig");
            echo "
         ";
        }
        // line 56
        echo "      </div>

      ";
        // line 58
        if (((($__internal_compile_3 = (($__internal_compile_4 = ($context["data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["search"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["as_map"] ?? null) : null) == 0)) {
            // line 59
            echo "         ";
            echo twig_include($this->env, $context, "components/search/table.html.twig");
            echo "
      ";
        }
        // line 61
        echo "      ";
        if ((($context["count"] ?? null) > 0)) {
            // line 62
            echo "         ";
            if ((((($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["display_type"] ?? null) : null) != twig_constant("Search::GLOBAL_SEARCH")) && ((($__internal_compile_6 = (($__internal_compile_7 = ($context["data"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["as_map"] ?? null) : null) == 0))) {
                // line 63
                echo "            <div class=\"card-footer search-footer\">
               ";
                // line 64
                echo twig_include($this->env, $context, "components/pager.html.twig");
                echo "
            </div>
         ";
            }
            // line 67
            echo "      ";
        } elseif (((($__internal_compile_8 = (($__internal_compile_9 = ($context["data"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["search"] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["as_map"] ?? null) : null) == 1)) {
            // line 68
            echo "         <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
            ";
            // line 69
            echo twig_escape_filter($this->env, __("No item found"), "html", null, true);
            echo "
         </div>
      ";
        }
        // line 72
        echo "   </div>
</form>

";
        // line 75
        if ( !($context["is_ajax"] ?? null)) {
            // line 76
            echo "   </div>

   ";
            // line 78
            if (((($__internal_compile_10 = (($__internal_compile_11 = ($context["data"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["search"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["as_map"] ?? null) : null) == 0)) {
                // line 79
                echo "      <script>
          if (typeof initFluidSearch !== \"function\") {
             window.initFluidSearch = () => {
                 new GLPI.Search.ResultsView(\"massform";
                // line 82
                echo twig_escape_filter($this->env, ($context["normalized_itemtype"] ?? null), "html", null, true);
                echo "\", GLPI.Search.Table);
             };
          }
          if (document.readyState === 'complete') {
              initFluidSearch();
          } else {
              \$(document).on('ready', initFluidSearch);
          }
      </script>
   ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/search/display_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 82,  157 => 79,  155 => 78,  151 => 76,  149 => 75,  144 => 72,  138 => 69,  135 => 68,  132 => 67,  126 => 64,  123 => 63,  120 => 62,  117 => 61,  111 => 59,  109 => 58,  105 => 56,  99 => 54,  96 => 53,  90 => 50,  84 => 48,  82 => 47,  76 => 45,  74 => 44,  62 => 41,  56 => 40,  53 => 39,  51 => 38,  48 => 36,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/display_data.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\search\\display_data.html.twig");
    }
}
