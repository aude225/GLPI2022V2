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

/* components/itilobject/timeline/new_form.html.twig */
class __TwigTemplate_80b0cad3c127d3b3671732f8544c18b9 extends Template
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
        $context["users_id"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID");
        // line 33
        echo "
<div class=\"itil-timeline\">
   <div class=\"timeline-item ITILContent\">
      <div class=\"row\">
         <div class=\"col-auto d-flex flex-column picture-block\">
            ";
        // line 38
        echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => ($context["users_id"] ?? null)], false);
        echo "
         </div>
         <div class=\"col-12 col-sm content-block\">
            <div class=\"d-flex\">
               <div class=\"d-none d-md-block\">
                  <strong>";
        // line 43
        echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", ($context["users_id"] ?? null));
        echo "</strong>
               </div>
            </div>
            <span class=\"row mt-2 timeline-content left card\">
               <div class=\"card-body\">
                  ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 48)) {
            // line 49
            echo "                     <div class=\"alert alert-info\" role=\"alert\">
                        ";
            // line 50
            ob_start(function () { return ''; });
            // line 51
            echo "                           <span class=\"ms-1\">
                              ";
            // line 52
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletename", [0 => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 53
($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["entities_id"] ?? null) : null))]);
            // line 54
            echo "
                           </span>
                        ";
            $context["entitybadge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            echo "
                        ";
            // line 58
            echo twig_sprintf(__("%1\$s will be added in entity %2\$s"), twig_get_attribute($this->env, $this->source,             // line 59
($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 59),             // line 60
($context["entitybadge"] ?? null));
            // line 61
            echo "
                     </div>
                  ";
        }
        // line 64
        echo "
                  ";
        // line 65
        echo twig_include($this->env, $context, "components/itilobject/timeline/simple_form.html.twig", ["no_form" => true]);
        // line 67
        echo "
               </div>
            </span>
         </div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/new_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 67,  98 => 65,  95 => 64,  90 => 61,  88 => 60,  87 => 59,  86 => 58,  83 => 57,  78 => 54,  76 => 53,  75 => 52,  72 => 51,  70 => 50,  67 => 49,  65 => 48,  57 => 43,  49 => 38,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/new_form.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\new_form.html.twig");
    }
}
