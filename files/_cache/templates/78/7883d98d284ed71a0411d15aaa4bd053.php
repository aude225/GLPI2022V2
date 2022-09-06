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

/* components/itilobject/mainform_open.html.twig */
class __TwigTemplate_116488548fe5f910308eaa36b2c6c706 extends Template
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
        $context["enctype"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 32)) ? ("multipart/form-data") : ("application/x-www-form-urlencoded"));
        // line 33
        $context["new_cls"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 33)) ? ("new-itil-object") : (""));
        // line 34
        echo "
";
        // line 35
        $context["form_path"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 35);
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 36)) {
            // line 37
            echo "   ";
            $context["form_path"] = ((($context["form_path"] ?? null) . "?id=") . (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null));
        }
        // line 39
        echo "
";
        // line 40
        if (($context["selfservice"] ?? null)) {
            // line 41
            echo "   ";
            $context["form_path"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/tracking.injector.php");
        }
        // line 43
        echo "
";
        // line 44
        $context["track_changes"] = "true";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 45)) {
            // line 46
            echo "   ";
            $context["track_changes"] = "false";
        }
        // line 48
        echo "
<form method=\"POST\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["form_path"] ?? null), "html", null, true);
        echo "\" enctype=\"";
        echo twig_escape_filter($this->env, ($context["enctype"] ?? null), "html", null, true);
        echo "\"
      data-track-changes=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["track_changes"] ?? null), "html", null, true);
        echo "\" id=\"itil-form\" class=\"";
        echo twig_escape_filter($this->env, ($context["new_cls"] ?? null), "html", null, true);
        echo "\" data-submit-once>
   <input type=\"hidden\" name=\"id\" value=\"";
        // line 51
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 51), "id", [], "array", true, true, false, 51) &&  !(null === (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 51)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 51)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true))) : (print (0)));
        echo "\" />
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />

   ";
        // line 54
        if (array_key_exists("itiltemplate_key", $context)) {
            // line 55
            echo "      <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["itiltemplate_key"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 57
        echo "   ";
        if (array_key_exists("predefined_fields", $context)) {
            // line 58
            echo "      <input type=\"hidden\" name=\"_predefined_fields\" value=\"";
            echo twig_escape_filter($this->env, ($context["predefined_fields"] ?? null), "html", null, true);
            echo "\" />
   ";
        }
        // line 60
        echo "
   ";
        // line 61
        if (($context["selfservice"] ?? null)) {
            // line 62
            echo "      <input type=\"hidden\" name=\"_from_helpdesk\" value=\"1\" />
      ";
            // line 64
            echo "   ";
        }
        // line 65
        echo "
   ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 66) || twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_tickets_id", [], "array", true, true, false, 66))) {
            // line 67
            echo "      <input type=\"hidden\" name=\"_tickets_id\" value=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 67) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["tickets_id"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["tickets_id"] ?? null) : null)) : ((($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["_tickets_id"] ?? null) : null))), "html", null, true);
            echo "\" />
   ";
        }
        // line 69
        echo "
   ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 70) || twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_problems_id", [], "array", true, true, false, 70))) {
            // line 71
            echo "      <input type=\"hidden\" name=\"_problems_id\" value=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 71) &&  !(null === (($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["problems_id"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["problems_id"] ?? null) : null)) : ((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_problems_id"] ?? null) : null))), "html", null, true);
            echo "\" />
   ";
        }
        // line 73
        echo "
   ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_add_fromitem", [], "array", true, true, false, 74)) {
            // line 75
            echo "      <input type=\"hidden\" name=\"_from_items_id\" value=\"";
            (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_from_items_id", [], "array", true, true, false, 75) &&  !(null === (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_from_items_id"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_from_items_id"] ?? null) : null), "html", null, true))) : (print (0)));
            echo "\" />
      <input type=\"hidden\" name=\"_from_itemtype\" value=\"";
            // line 76
            (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_from_itemtype", [], "array", true, true, false, 76) &&  !(null === (($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_from_itemtype"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_13 = ($context["params"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_from_itemtype"] ?? null) : null), "html", null, true))) : (print ("")));
            echo "\" />
   ";
        }
        // line 78
        echo "
   ";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_fup_id", [], "array", true, true, false, 79) && ((($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_promoted_fup_id"] ?? null) : null) > 0))) {
            // line 80
            echo "      <input type=\"hidden\" name=\"_promoted_fup_id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_promoted_fup_id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 82
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_task_id", [], "array", true, true, false, 82) && ((($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["_promoted_task_id"] ?? null) : null) > 0))) {
            // line 83
            echo "      <input type=\"hidden\" name=\"_promoted_task_id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["_promoted_task_id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 85
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_skip_promoted_fields", [], "array", true, true, false, 85) && ((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_skip_promoted_fields"] ?? null) : null) > 0))) {
            // line 86
            echo "      <input type=\"hidden\" name=\"_skip_promoted_fields\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_19 = ($context["params"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["_skip_promoted_fields"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/mainform_open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 86,  186 => 85,  180 => 83,  177 => 82,  171 => 80,  169 => 79,  166 => 78,  161 => 76,  156 => 75,  154 => 74,  151 => 73,  145 => 71,  143 => 70,  140 => 69,  134 => 67,  132 => 66,  129 => 65,  126 => 64,  123 => 62,  121 => 61,  118 => 60,  112 => 58,  109 => 57,  101 => 55,  99 => 54,  94 => 52,  90 => 51,  84 => 50,  78 => 49,  75 => 48,  71 => 46,  69 => 45,  67 => 44,  64 => 43,  60 => 41,  58 => 40,  55 => 39,  51 => 37,  49 => 36,  47 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/mainform_open.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\mainform_open.html.twig");
    }
}
