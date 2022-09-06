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

/* layout/parts/breadcrumbs.html.twig */
class __TwigTemplate_e397c4b14513bf5ebee1340e0c67bd1f extends Template
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
<ol class=\"breadcrumb breadcrumb-alternate pe-1 pe-sm-3\" aria-label=\"breadcrumbs\">
   <li class=\"breadcrumb-item text-truncate\">
      <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, __("Home"), "html", null, true);
        echo "\">
         <i class=\"ti ti-home-2\"></i>
         ";
        // line 36
        echo twig_escape_filter($this->env, __("Home"), "html", null, true);
        echo "
      </a>
   </li>

   ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", true, true, false, 40)) {
            // line 41
            echo "   <li class=\"breadcrumb-item text-truncate\">
      <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 42), "default", [], "array", true, true, false, 42) &&  !(null === (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["default"] ?? null) : null)))) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["default"] ?? null) : null)) : ("/front/central.php"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = ($context["menu"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["title"] ?? null) : null), "html", null, true);
            echo "\">
         <i class=\"";
            // line 43
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 43), "icon", [], "array", true, true, false, 43) &&  !(null === (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 43)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["icon"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 43)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["icon"] ?? null) : null), "html", null, true))) : (print ("")));
            echo "\"></i>
         ";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_compile_6 = (($__internal_compile_7 = ($context["menu"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["title"] ?? null) : null), "html", null, true);
            echo "
      </a>
   </li>
   ";
        }
        // line 48
        echo "
   ";
        // line 49
        $context["with_option"] = false;
        // line 50
        echo "   ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 50), "content", [], "array", false, true, false, 50), ($context["item"] ?? null), [], "array", true, true, false, 50)) {
            // line 51
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 51), "content", [], "array", false, true, false, 51), ($context["item"] ?? null), [], "array", false, true, false, 51), "page", [], "array", true, true, false, 51)) {
                // line 52
                echo "      ";
                $context["with_option"] = (( !twig_test_empty(($context["option"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 52), "content", [], "array", false, true, false, 52), ($context["item"] ?? null), [], "array", false, true, false, 52), "options", [], "array", false, true, false, 52), ($context["option"] ?? null), [], "array", false, true, false, 52), "title", [], "array", true, true, false, 52)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 52), "content", [], "array", false, true, false, 52), ($context["item"] ?? null), [], "array", false, true, false, 52), "options", [], "array", false, true, false, 52), ($context["option"] ?? null), [], "array", false, true, false, 52), "page", [], "array", true, true, false, 52));
                // line 53
                echo "      <li class=\"breadcrumb-item text-truncate\">
         <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_8 = (($__internal_compile_9 = (($__internal_compile_10 = (($__internal_compile_11 = ($context["menu"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["content"] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["page"] ?? null) : null)), "html", null, true);
                echo "\"
            class=\"";
                // line 55
                echo ((($context["with_option"] ?? null)) ? ("") : ("here"));
                echo "\"
            title=\"";
                // line 56
                echo twig_escape_filter($this->env, (($__internal_compile_12 = (($__internal_compile_13 = (($__internal_compile_14 = (($__internal_compile_15 = ($context["menu"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["content"] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["title"] ?? null) : null), "html", null, true);
                echo "\" >
            <i class=\"";
                // line 57
                (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 57), "content", [], "array", false, true, false, 57), ($context["item"] ?? null), [], "array", false, true, false, 57), "icon", [], "array", true, true, false, 57) &&  !(null === (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 57), "content", [], "array", false, true, false, 57), ($context["item"] ?? null), [], "array", false, true, false, 57)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["icon"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 57), "content", [], "array", false, true, false, 57), ($context["item"] ?? null), [], "array", false, true, false, 57)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["icon"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "\"></i>
            ";
                // line 58
                echo twig_escape_filter($this->env, (($__internal_compile_18 = (($__internal_compile_19 = (($__internal_compile_20 = (($__internal_compile_21 = ($context["menu"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["content"] ?? null) : null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["title"] ?? null) : null), "html", null, true);
                echo "
         </a>
      </li>
      ";
            }
            // line 62
            echo "
      ";
            // line 63
            if (($context["with_option"] ?? null)) {
                // line 64
                echo "      <li class=\"breadcrumb-item text-truncate\">
         <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_22 = (($__internal_compile_23 = (($__internal_compile_24 = (($__internal_compile_25 = (($__internal_compile_26 = (($__internal_compile_27 = ($context["menu"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["content"] ?? null) : null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["options"] ?? null) : null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[($context["option"] ?? null)] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["page"] ?? null) : null)), "html", null, true);
                echo "\"
            class=\"here\"
            title=\"";
                // line 67
                echo twig_escape_filter($this->env, (($__internal_compile_28 = (($__internal_compile_29 = (($__internal_compile_30 = (($__internal_compile_31 = (($__internal_compile_32 = (($__internal_compile_33 = ($context["menu"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["content"] ?? null) : null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["options"] ?? null) : null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[($context["option"] ?? null)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["title"] ?? null) : null), "html", null, true);
                echo "\" >
            <i class=\"";
                // line 68
                (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 68), "content", [], "array", false, true, false, 68), ($context["item"] ?? null), [], "array", false, true, false, 68), "options", [], "array", false, true, false, 68), ($context["option"] ?? null), [], "array", false, true, false, 68), "icon", [], "array", true, true, false, 68) &&  !(null === (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 68), "content", [], "array", false, true, false, 68), ($context["item"] ?? null), [], "array", false, true, false, 68), "options", [], "array", false, true, false, 68), ($context["option"] ?? null), [], "array", false, true, false, 68)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["icon"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 68), "content", [], "array", false, true, false, 68), ($context["item"] ?? null), [], "array", false, true, false, 68), "options", [], "array", false, true, false, 68), ($context["option"] ?? null), [], "array", false, true, false, 68)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["icon"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "\"></i>
            ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((($__internal_compile_36 = (($__internal_compile_37 = (($__internal_compile_38 = (($__internal_compile_39 = (($__internal_compile_40 = (($__internal_compile_41 = ($context["menu"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["content"] ?? null) : null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["options"] ?? null) : null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[($context["option"] ?? null)] ?? null) : null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["title"] ?? null) : null)), "truncate", [0 => 17, 1 => "..."], "method", false, false, false, 69), "html", null, true);
                echo "
         </a>
      </li>
      ";
            }
            // line 73
            echo "
   ";
        }
        // line 75
        echo "</ol>

";
        // line 77
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 77), "content", [], "array", false, true, false, 77), ($context["item"] ?? null), [], "array", true, true, false, 77)) {
            // line 78
            echo "    ";
            echo twig_include($this->env, $context, "layout/parts/context_links.html.twig");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "layout/parts/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 78,  154 => 77,  150 => 75,  146 => 73,  139 => 69,  135 => 68,  131 => 67,  126 => 65,  123 => 64,  121 => 63,  118 => 62,  111 => 58,  107 => 57,  103 => 56,  99 => 55,  95 => 54,  92 => 53,  89 => 52,  86 => 51,  83 => 50,  81 => 49,  78 => 48,  71 => 44,  67 => 43,  61 => 42,  58 => 41,  56 => 40,  49 => 36,  42 => 34,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/breadcrumbs.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\breadcrumbs.html.twig");
    }
}
