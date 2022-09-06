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

/* components/user/info_card.html.twig */
class __TwigTemplate_83c3aae51467fadc82b2a8f4668d83e4 extends Template
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
        $context["enable_anonymization"] = (($context["enable_anonymization"]) ?? (false));
        // line 33
        echo "
<div class=\"p-0 user-info-card\">
   <div class=\"row\">
      <div class=\"col pt-1\">
         ";
        // line 37
        if ((($__internal_compile_0 = ($context["user"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null)) {
            // line 38
            echo "            ";
            echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($__internal_compile_1 =             // line 39
($context["user"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "enable_anonymization" =>             // line 40
($context["enable_anonymization"] ?? null)]);
            // line 41
            echo "
         ";
        }
        // line 43
        echo "      </div>
      <div class=\"col-auto ms-2\">
         <h4 class=\"card-title mb-1\">
            ";
        // line 46
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["user"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["user_name"] ?? null) : null), "html", null, true);
        echo "
         </h4>

         <div class=\"text-muted\">
            ";
        // line 50
        if ((twig_length_filter($this->env, (($__internal_compile_3 = ($context["user"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["email"] ?? null) : null)) > 0)) {
            // line 51
            echo "               <div>
                  <i class=\"fas fa-fw fa-envelope\"></i>
                  <a href=\"mailto:";
            // line 53
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["user"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["email"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["user"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["email"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 56
        echo "            ";
        if ((twig_length_filter($this->env, (($__internal_compile_6 = ($context["user"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["phone"] ?? null) : null)) > 0)) {
            // line 57
            echo "               <div>
                  <i class=\"fas fa-fw fa-phone\"></i>
                  <a href=\"tel:";
            // line 59
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["user"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["phone"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["user"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["phone"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 62
        echo "            ";
        if ((twig_length_filter($this->env, (($__internal_compile_9 = ($context["user"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["mobile"] ?? null) : null)) > 0)) {
            // line 63
            echo "               <div>
                  <i class=\"fas fa-fw fa-mobile\"></i>
                  <a href=\"tel:";
            // line 65
            echo twig_escape_filter($this->env, (($__internal_compile_10 = ($context["user"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["mobile"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["user"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["mobile"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 68
        echo "            ";
        if (((($__internal_compile_12 = ($context["user"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["locations_id"] ?? null) : null) > 0)) {
            // line 69
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-map-marker-alt\"></i>
                  ";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Location", (($__internal_compile_13 = ($context["user"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["locations_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 74
        echo "            ";
        if (((($__internal_compile_14 = ($context["user"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["usertitles_id"] ?? null) : null) > 0)) {
            // line 75
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, _x("person", "Title"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tie\"></i>
                  ";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserTitle", (($__internal_compile_15 = ($context["user"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["usertitles_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 80
        echo "            ";
        if (((($__internal_compile_16 = ($context["user"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["usercategories_id"] ?? null) : null) > 0)) {
            // line 81
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, _n("Category", "Categories", 1), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tag\"></i>
                  ";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserCategory", (($__internal_compile_17 = ($context["user"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usercategories_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 86
        echo "            ";
        if (((($__internal_compile_18 = ($context["user"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["groups_id"] ?? null) : null) > 0)) {
            // line 87
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, __("Default group"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-users\"></i>
                  ";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Group", (($__internal_compile_19 = ($context["user"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["groups_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 92
        echo "         </div>
      </div>

      ";
        // line 95
        if (($context["can_edit"] ?? null)) {
            // line 96
            echo "         <div class=\"col\">
            <a class=\"btn btn-icon btn-sm btn-outline-secondary\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/preference.php"), "html", null, true);
            echo "\"
               title=\"";
            // line 98
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
               <i class=\"fas fa-user-edit\"></i>
            </a>
         </div>
      ";
        }
        // line 103
        echo "   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/user/info_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 103,  189 => 98,  185 => 97,  182 => 96,  180 => 95,  175 => 92,  169 => 89,  163 => 87,  160 => 86,  154 => 83,  148 => 81,  145 => 80,  139 => 77,  133 => 75,  130 => 74,  124 => 71,  118 => 69,  115 => 68,  107 => 65,  103 => 63,  100 => 62,  92 => 59,  88 => 57,  85 => 56,  77 => 53,  73 => 51,  71 => 50,  64 => 46,  59 => 43,  55 => 41,  53 => 40,  52 => 39,  50 => 38,  48 => 37,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/info_card.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\user\\info_card.html.twig");
    }
}
