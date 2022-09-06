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

/* components/itilobject/timeline/main_description.html.twig */
class __TwigTemplate_2b55e2e9563c60630ca51b1e8eddfd13 extends Template
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
        $context["users_id"] = ((((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["users_id_recipient"] ?? null) : null) > 0)) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 32)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["users_id_recipient"] ?? null) : null)) : (0));
        // line 33
        $context["entry_rand"] = twig_random($this->env);
        // line 34
        echo "
<div class=\"timeline-item mb-3 ITILContent\"
     data-itemtype=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 36), "html", null, true);
        echo "\" data-items-id=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
        echo "\">
   <div class=\"row\">
      <div class=\"col-auto d-flex flex-column \">
         ";
        // line 39
        echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => ($context["users_id"] ?? null)], false);
        echo "
      </div>
      <div class=\"col-12 col-sm\">
         <span class=\"row mt-2 timeline-content left card\">
            <div class=\"card-body\">
               <div class=\"d-flex timeline-header\">
                  <div class=\"d-flex creator\">
                     ";
        // line 46
        echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 47
($context["users_id"] ?? null), "date_creation" => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["date_creation"] ?? null) : null), "date_mod" => (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["date_mod"] ?? null) : null), "users_id_editor" => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 50
($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["users_id_lastupdater"] ?? null) : null), "anonym_user" =>         // line 51
($context["anonym_user"] ?? null)], false);
        // line 52
        echo "
                  </div>

                  ";
        // line 56
        echo "                  <div class=\"dropdown ms-auto timeline-item-buttons\">
                     <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
        // line 57
        echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
        echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas ti ti-dots-vertical\"></i>
                     </button>
                     <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
        // line 60
        echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
        echo "\">
                        <li><a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                           <i class=\"fa-fw ti ti-edit\"></i>
                           <span>";
        // line 63
        echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
        echo "</span>
                        </a></li>
                     </ul>
                  </div>

                  <button class=\"btn btn-sm btn-ghost-secondary float-end close-edit-content d-none mx-auto\">
                     <i class=\"ti ti-x\"></i>
                  </button>
               </div>

               <div class=\"read-only-content\">
                  ";
        // line 74
        if ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "name"], "method", false, false, false, 74)) {
            // line 75
            echo "                     <div class=\"card-title card-header mx-n3 mt-n3\">
                        ";
            // line 76
            echo twig_escape_filter($this->env, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null), "html", null, true);
            echo "
                     </div>
                  ";
        }
        // line 79
        echo "                  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "content"], "method", false, false, false, 79)) {
            // line 80
            echo "                     ";
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 83
            echo "
                  ";
        }
        // line 85
        echo "               </div>
               <div class=\"edit-content collapse\">
                  <div class=\"ajax-content\"></div>
               </div>
            </div>
         </span>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/main_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 85,  124 => 83,  121 => 80,  118 => 79,  112 => 76,  109 => 75,  107 => 74,  93 => 63,  87 => 60,  81 => 57,  78 => 56,  73 => 52,  71 => 51,  70 => 50,  69 => 49,  68 => 48,  67 => 47,  66 => 46,  56 => 39,  48 => 36,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/main_description.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\main_description.html.twig");
    }
}
