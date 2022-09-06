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

/* components/itilobject/timeline/simple_form.html.twig */
class __TwigTemplate_d2baff2a5f2781ac04d6127d03d4f08e extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/simple_form.html.twig", 32)->unwrap();
        // line 33
        echo "
";
        // line 34
        $context["target"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 34);
        // line 35
        $context["is_new_item"] = ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null) == 0);
        // line 36
        $context["show_form"] = ( !array_key_exists("no_form", $context) || true);
        // line 37
        echo "
";
        // line 38
        $context["field_options"] = ["is_horizontal" => false, "full_width" => true, "fields_template" =>         // line 41
($context["itiltemplate"] ?? null), "disabled" =>  !(        // line 42
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))];
        // line 44
        echo "
";
        // line 45
        if (($context["show_form"] ?? null)) {
            // line 46
            echo "<form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["formoptions"] ?? null), "html", null, true);
            echo " enctype=\"multipart/form-data\" data-submit-once>
";
        }
        // line 48
        echo "   <div class=\"row flex-column\">
      ";
        // line 49
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null), __("Title"), twig_array_merge(        // line 53
($context["field_options"] ?? null), ["maxlenght" => 255])], 49, $context, $this->getSourceContext());
        // line 56
        echo "

      ";
        // line 58
        $context["uploads"] = [];
        // line 59
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, true, false, 59), "_content", [], "any", true, true, false, 59)) {
            // line 60
            echo "         ";
            $context["uploads"] = twig_array_merge(($context["uploads"] ?? null), ["_content" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 60), "_content", [], "any", false, false, false, 60), "_tag_content" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 60), "_tag_content", [], "any", false, false, false, 60)]);
            // line 61
            echo "      ";
        }
        // line 62
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, true, false, 62), "_filename", [], "any", true, true, false, 62)) {
            // line 63
            echo "         ";
            $context["uploads"] = twig_array_merge(($context["uploads"] ?? null), ["_filename" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 63), "_filename", [], "any", false, false, false, 63), "_tag_filename" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 63), "_tag_filename", [], "any", false, false, false, 63)]);
            // line 64
            echo "      ";
        }
        // line 65
        echo "
      ";
        // line 66
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 68
($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null), __("Description"), twig_array_merge(        // line 70
($context["field_options"] ?? null), ["enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "uploads" =>         // line 74
($context["uploads"] ?? null), "add_field_class" => "col-12 itil-textarea-content"])], 66, $context, $this->getSourceContext());
        // line 77
        echo "
   </div>

   ";
        // line 80
        if ((( !($context["is_new_item"] ?? null) && ($context["show_form"] ?? null)) &&  !(($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["template_preview"] ?? null) : null))) {
            // line 81
            echo "      <div class=\"d-flex card-footer mx-n3 mb-n3\">
         <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
            <i class=\"far fa-save\"></i>
            <span>";
            // line 84
            echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
            echo "</span>
         </button>
      </div>

      <input type=\"hidden\" name=\"id\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 88)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
   </form>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/simple_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 89,  129 => 88,  122 => 84,  117 => 81,  115 => 80,  110 => 77,  108 => 74,  107 => 70,  106 => 68,  105 => 66,  102 => 65,  99 => 64,  96 => 63,  93 => 62,  90 => 61,  87 => 60,  84 => 59,  82 => 58,  78 => 56,  76 => 53,  75 => 51,  74 => 49,  71 => 48,  63 => 46,  61 => 45,  58 => 44,  56 => 42,  55 => 41,  54 => 38,  51 => 37,  49 => 36,  47 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/simple_form.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\simple_form.html.twig");
    }
}
