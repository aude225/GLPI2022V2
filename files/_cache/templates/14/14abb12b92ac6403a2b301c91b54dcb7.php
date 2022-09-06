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

/* layout/parts/context_links.html.twig */
class __TwigTemplate_9b8fe9b683e002b1da802f478dae2111 extends Template
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
        $context["links"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 32), "content", [], "array", false, true, false, 32), ($context["item"] ?? null), [], "array", false, true, false, 32), "options", [], "array", false, true, false, 32), ($context["option"] ?? null), [], "array", false, true, false, 32), "links", [], "array", true, true, false, 32) &&  !(null === (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 32), "content", [], "array", false, true, false, 32), ($context["item"] ?? null), [], "array", false, true, false, 32), "options", [], "array", false, true, false, 32), ($context["option"] ?? null), [], "array", false, true, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["links"] ?? null) : null)))) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 32), "content", [], "array", false, true, false, 32), ($context["item"] ?? null), [], "array", false, true, false, 32), "options", [], "array", false, true, false, 32), ($context["option"] ?? null), [], "array", false, true, false, 32)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["links"] ?? null) : null)) : ((($__internal_compile_2 = (($__internal_compile_3 = (($__internal_compile_4 = (($__internal_compile_5 = ($context["menu"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["content"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["item"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["links"] ?? null) : null)));
        // line 33
        echo "
";
        // line 35
        echo "<ul class=\"nav navbar-nav border-start border-left ps-1 ps-sm-2 flex-row\">

";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 37)) {
            // line 38
            echo "<li class=\"nav-item\">
   <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_6 = ($context["links"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["add"] ?? null) : null)), "html", null, true);
            echo "\" class=\"btn btn-icon btn-sm btn-secondary me-1 pe-2\" title=\"";
            echo twig_escape_filter($this->env, __("Add"), "html", null, true);
            echo "\">
      <i class=\"ti ti-plus\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 41
            echo twig_escape_filter($this->env, __("Add"), "html", null, true);
            echo "</span>
   </a>
</li>
";
        }
        // line 45
        echo "
";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "search", [], "array", true, true, false, 46)) {
            // line 47
            echo "<li class=\"nav-item\">
   <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_7 = ($context["links"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)), "html", null, true);
            echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
            echo twig_escape_filter($this->env, __("Search"), "html", null, true);
            echo "\">
      <i class=\"ti ti-search\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 50
            echo twig_escape_filter($this->env, __("Search"), "html", null, true);
            echo "</span>
   </a>
</li>
";
        }
        // line 54
        echo "
";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "lists", [], "array", true, true, false, 55)) {
            // line 56
            echo "<li class=\"nav-item\">
   <a href=\"#\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2 show-saved-searches\"
      data-itemtype=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["item"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __("Lists"), "html", null, true);
            echo "\">
      <i class=\"ti ti-star\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 60
            echo twig_escape_filter($this->env, __("Lists"), "html", null, true);
            echo "</span>
   </a>
</li>
";
        }
        // line 64
        echo "
";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["link"]) {
            // line 66
            echo "   ";
            if (((($context["type"] == "add") || ($context["type"] == "search")) || ($context["type"] == "lists"))) {
                // line 67
                echo "   ";
            } elseif (($context["type"] == "template")) {
                // line 68
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                echo twig_escape_filter($this->env, __("Manage templates..."), "html", null, true);
                echo "\">
            <i class=\"ti ti-template\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 71
                echo twig_escape_filter($this->env, __("Templates"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 74
$context["type"] == "showall")) {
                // line 75
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                echo twig_escape_filter($this->env, __("Show all"), "html", null, true);
                echo "\">
            <i class=\"ti ti-eye-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 78
                echo twig_escape_filter($this->env, __("Show all"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 81
$context["type"] == "summary")) {
                // line 82
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                echo twig_escape_filter($this->env, __("Global GANTT"), "html", null, true);
                echo "\">
            <i class=\"fas fa-stream\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 85
                echo twig_escape_filter($this->env, __("Global GANTT"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 88
$context["type"] == "summary_kanban")) {
                // line 89
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                echo twig_escape_filter($this->env, __("Global Kanban"), "html", null, true);
                echo "\">
            <i class=\"ti ti-layout-columns\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 92
                echo twig_escape_filter($this->env, __("Global Kanban"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 95
$context["type"] == "transfer_list")) {
                // line 96
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                echo twig_escape_filter($this->env, __("Transfer list"), "html", null, true);
                echo "\">
            <i class=\"ti ti-list-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 99
                echo twig_escape_filter($this->env, __("Transfer list"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 102
$context["type"] == "config")) {
                // line 103
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\" title=\"";
                echo twig_escape_filter($this->env, __("Setup"), "html", null, true);
                echo "\">
            <i class=\"ti ti-tool\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 106
                echo twig_escape_filter($this->env, __("Setup"), "html", null, true);
                echo "</span>
         </a>
      </li>
   ";
            } else {
                // line 110
                echo "      <li class=\"nav-item\">
         <a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                echo "\" class=\"btn btn-icon btn-sm btn-outline-secondary me-1 pe-2\">
            ";
                // line 112
                echo $context["type"];
                echo "
         </a>
      </li>
   ";
            }
            // line 116
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "layout/parts/context_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 118,  247 => 116,  240 => 112,  236 => 111,  233 => 110,  226 => 106,  219 => 104,  216 => 103,  214 => 102,  208 => 99,  201 => 97,  198 => 96,  196 => 95,  190 => 92,  183 => 90,  180 => 89,  178 => 88,  172 => 85,  165 => 83,  162 => 82,  160 => 81,  154 => 78,  147 => 76,  144 => 75,  142 => 74,  136 => 71,  129 => 69,  126 => 68,  123 => 67,  120 => 66,  116 => 65,  113 => 64,  106 => 60,  99 => 58,  95 => 56,  93 => 55,  90 => 54,  83 => 50,  76 => 48,  73 => 47,  71 => 46,  68 => 45,  61 => 41,  54 => 39,  51 => 38,  49 => 37,  45 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/context_links.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\context_links.html.twig");
    }
}
