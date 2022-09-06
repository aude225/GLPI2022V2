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

/* layout/parts/saved_searches_list.html.twig */
class __TwigTemplate_8ae3ec620338f55621ef843513e0e656 extends Template
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
        if ((twig_length_filter($this->env, ($context["saved_searches"] ?? null)) == 0)) {
            // line 33
            echo "   <div class=\"alert alert-info\" role=\"alert\">
      ";
            // line 34
            echo twig_escape_filter($this->env, __("You have not recorded any saved searches yet"), "html", null, true);
            echo "
   </div>
";
        }
        // line 37
        echo "
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["saved_searches"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
            // line 39
            echo "   <div class=\"savedsearches-item list-group-item search-line d-flex align-items-center pe-1 ";
            echo (((($context["active"] ?? null) == (($__internal_compile_0 = $context["search"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null))) ? ("active") : (""));
            echo "\"
         data-id=\"";
            // line 40
            echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["search"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
            echo "\">
      <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath("SavedSearch"), "html", null, true);
            echo "?action=load&amp;id=";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["search"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            echo "\"
         class=\"d-block saved-searches-link text-truncate\">
         ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_3 = $context["search"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["name"] ?? null) : null)), "html", null, true);
            echo "
      </a>
      <div class=\"";
            // line 45
            echo ((((($__internal_compile_4 = $context["search"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["is_default"] ?? null) : null) > 0)) ? ("") : ("list-group-item-actions"));
            echo " ms-auto default-ctrl\">
         <i class=\"";
            // line 46
            echo ((((($__internal_compile_5 = $context["search"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_default"] ?? null) : null) > 0)) ? ("fas") : ("far"));
            echo " fa-star fa-xs mark-default me-1\"
            title=\"";
            // line 47
            echo twig_escape_filter($this->env, ((((($__internal_compile_6 = $context["search"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_default"] ?? null) : null) > 0)) ? (__("Default search")) : (__("mark as default"))), "html", null, true);
            echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            role=\"button\"></i>
      </div>
      <div class=\"d-flex flex-nowrap align-items-center\">
         ";
            // line 52
            if (((($__internal_compile_7 = $context["search"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["is_private"] ?? null) : null) == 1)) {
                // line 53
                echo "         <i class=\"ti ti-lock fa-xs text-muted me-1\" title=\"";
                echo twig_escape_filter($this->env, __("private"), "html", null, true);
                echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"></i>
         ";
            }
            // line 56
            echo "         <span class=\"badge\">
            ";
            // line 57
            echo (($__internal_compile_8 = $context["search"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["count"] ?? null) : null);
            echo "
         </span>
      </div>
   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "layout/parts/saved_searches_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 57,  104 => 56,  97 => 53,  95 => 52,  87 => 47,  83 => 46,  79 => 45,  74 => 43,  67 => 41,  63 => 40,  58 => 39,  54 => 38,  51 => 37,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/saved_searches_list.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\saved_searches_list.html.twig");
    }
}
