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

/* components/itilobject/timeline/timeline_item_header.html.twig */
class __TwigTemplate_fb45c88566a9e07c1eb3a9c26acf6a37 extends Template
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
<div class=\"d-flex timeline-header\">
   <div class=\"d-flex creator\">
      ";
        // line 34
        echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 35
($context["users_id"] ?? null), "date_creation" =>         // line 36
($context["date_creation"] ?? null), "date_mod" =>         // line 37
($context["date_mod"] ?? null), "users_id_editor" => (($__internal_compile_0 =         // line 38
($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["users_id_editor"] ?? null) : null), "anonym_user" =>         // line 39
($context["anonym_user"] ?? null)], false);
        // line 40
        echo "
   </div>

   <div class=\"d-flex ms-auto timeline-item-buttons\">
      ";
        // line 44
        $context["actions"] = [];
        // line 45
        echo "      ";
        if ((((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["can_edit"] ?? null) : null) &&  !($context["status_closed"] ?? null)) &&  !twig_in_filter((($__internal_compile_2 = ($context["entry"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null), [0 => "Document_Item", 1 => "Assign"]))) {
            // line 46
            echo "         ";
            ob_start(function () { return ''; });
            // line 47
            echo "            <li>
               <a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                  <i class=\"fa-fw ti ti-edit\"></i>
                  <span>";
            // line 50
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["edit_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit_btn" => ($context["edit_btn"] ?? null)]);
            // line 55
            echo "      ";
        }
        // line 56
        echo "
      ";
        // line 57
        if (($context["is_private"] ?? null)) {
            // line 58
            echo "         <span class=\"is-private ms-2\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"ti ti-lock\" aria-label=\"";
            // line 60
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
         </span>
      ";
        }
        // line 63
        echo "
      ";
        // line 64
        if (($context["is_promoted"] ?? null)) {
            // line 65
            echo "         ";
            ob_start(function () { return ''; });
            // line 66
            echo "            <li>
               <a class=\"dropdown-item text-warning\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sourceof_items_id"] ?? null) : null)), "html", null, true);
            echo "\">
                  <i class=\"fa-fw ti ti-git-branch\"></i>
                  <span>";
            // line 69
            echo twig_escape_filter($this->env, twig_sprintf(__("%s was already promoted"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_4 = ($context["entry"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null))), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["promoted_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promoted_btn" => ($context["promoted_btn"] ?? null)]);
            // line 74
            echo "      ";
        } elseif (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 74) === "Ticket") && (((($__internal_compile_5 = ($context["entry"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["type"] ?? null) : null) === "ITILFollowup") || ((($__internal_compile_6 = ($context["entry"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["type"] ?? null) : null) === "TicketTask")))) {
            // line 75
            echo "         ";
            $context["promote_url"] = ("?_promoted_fup_id=" . (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null));
            // line 76
            echo "         ";
            if (((($__internal_compile_8 = ($context["entry"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["type"] ?? null) : null) === "TicketTask")) {
                // line 77
                echo "            ";
                $context["promote_url"] = ("?_promoted_task_id=" . (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null));
                // line 78
                echo "         ";
            }
            // line 79
            echo "
         ";
            // line 80
            ob_start(function () { return ''; });
            // line 81
            echo "            <li>
               <a class=\"dropdown-item\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket") . ($context["promote_url"] ?? null)), "html", null, true);
            echo "\">
                  <i class=\"fa-fw ti ti-git-branch\"></i>
                  <span>";
            // line 84
            echo twig_escape_filter($this->env, __("Promote to Ticket"), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["promote_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 88
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promote_btn" => ($context["promote_btn"] ?? null)]);
            // line 89
            echo "      ";
        }
        // line 90
        echo "
      ";
        // line 91
        if (twig_length_filter($this->env, ($context["actions"] ?? null))) {
            // line 92
            echo "         <div class=\"dropdown ms-2\">
            <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 93
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
               <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 96
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\">
               ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 98
                echo "                  ";
                echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                echo "
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "            </ul>
         </div>
      ";
        }
        // line 103
        echo "   </div>

   <button class=\"btn btn-sm btn-ghost-secondary float-end close-edit-content d-none ms-auto\">
      <i class=\"ti ti-x\"></i>
   </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 103,  196 => 100,  187 => 98,  183 => 97,  179 => 96,  173 => 93,  170 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  152 => 84,  147 => 82,  144 => 81,  142 => 80,  139 => 79,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  124 => 74,  121 => 73,  114 => 69,  109 => 67,  106 => 66,  103 => 65,  101 => 64,  98 => 63,  92 => 60,  86 => 58,  84 => 57,  81 => 56,  78 => 55,  75 => 54,  68 => 50,  63 => 47,  60 => 46,  57 => 45,  55 => 44,  49 => 40,  47 => 39,  46 => 38,  45 => 37,  44 => 36,  43 => 35,  42 => 34,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\timeline_item_header.html.twig");
    }
}
