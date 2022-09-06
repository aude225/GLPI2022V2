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

/* components/itilobject/timeline/approbation_form.html.twig */
class __TwigTemplate_7b2d134f6c9ae1fc5c003c8c2c91e9de extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/approbation_form.html.twig", 32)->unwrap();
        // line 33
        echo "
";
        // line 34
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [], "method", false, false, false, 34) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canApprove", [], "method", false, false, false, 34)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isAllowedStatus", [0 => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 34)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), 1 => twig_constant("CommonITILObject::CLOSED")], "method", false, false, false, 34))) {
            // line 35
            echo "<div class=\"timeline-item mb-3\">
   <div class=\"row\">
      <div class=\"col-auto d-none d-md-block\">
         ";
            // line 38
            echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")], false);
            echo "
      </div>
      <div class=\"col\">
         <div class=\"row timeline-content t-left card mt-4\">
            <form name=\"form\" method=\"post\" action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("ItilFollowup"), "html", null, true);
            echo "\" data-submit-once>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
               <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 45), "html", null, true);
            echo "\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
            echo "\" />
               <input type=\"hidden\" name=\"requesttypes_id\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            echo "\" />

               <div class=\"card-header\">
                  ";
            // line 50
            echo twig_escape_filter($this->env, __("Approval of the solution"), "html", null, true);
            echo "
               </div>
               <div class=\"card-body\">
                  ";
            // line 53
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", "", __("Comments"), ["full_width" => true, "helper" => __("Optional when approved"), "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "is_horizontal" => false]], 53, $context, $this->getSourceContext());
            // line 65
            echo "
               </div>

               <div class=\"card-footer\">
                  <button class=\"btn btn-icon btn-outline-danger me-2\" name=\"add_reopen\">
                     <i class=\"ti ti-x\"></i>
                     <span>";
            // line 71
            echo twig_escape_filter($this->env, __("Refuse"), "html", null, true);
            echo "</span>
                  </button>

                  <button class=\"btn btn-icon btn-outline-success\" name=\"add_close\">
                     <i class=\"ti ti-check\"></i>
                     <span>";
            // line 76
            echo twig_escape_filter($this->env, __("Approve"), "html", null, true);
            echo "</span>
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/approbation_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 76,  98 => 71,  90 => 65,  88 => 53,  82 => 50,  76 => 47,  72 => 46,  68 => 45,  64 => 44,  59 => 42,  52 => 38,  47 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/approbation_form.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\approbation_form.html.twig");
    }
}
