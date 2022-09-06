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

/* components/form/modals_macros.html.twig */
class __TwigTemplate_46634df8cc75d4ace1f8678d8e574e7c extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
";
        // line 49
        echo "
";
    }

    // line 32
    public function macro_confirm($__modal_title__ = "", $__modal_body__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "modal_title" => $__modal_title__,
            "modal_body" => $__modal_body__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "   ";
            $context["options"] = twig_array_merge(["buttons" => ["cancel" => ["label" => ((twig_get_attribute($this->env, $this->source,             // line 36
($context["options"] ?? null), "cancel_label", [], "array", true, true, false, 36)) ? (_twig_default_filter((($__internal_compile_0 = ($context["options"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["cancel_label"] ?? null) : null), _x("button", "Cancel"))) : (_x("button", "Cancel"))), "event" => ((twig_get_attribute($this->env, $this->source,             // line 37
($context["options"] ?? null), "cancel_event", [], "array", true, true, false, 37)) ? (_twig_default_filter((($__internal_compile_1 = ($context["options"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["cancel_event"] ?? null) : null), "")) : (""))], "confirm" => ["label" => ((twig_get_attribute($this->env, $this->source,             // line 40
($context["options"] ?? null), "confirm_label", [], "array", true, true, false, 40)) ? (_twig_default_filter((($__internal_compile_2 = ($context["options"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["confirm_label"] ?? null) : null), _x("button", "Ok"))) : (_x("button", "Ok"))), "event" => ((twig_get_attribute($this->env, $this->source,             // line 41
($context["options"] ?? null), "confirm_event", [], "array", true, true, false, 41)) ? (_twig_default_filter((($__internal_compile_3 = ($context["options"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["confirm_event"] ?? null) : null), "")) : ("")), "class" => "ms-auto"]]],             // line 45
($context["options"] ?? null));
            // line 46
            echo "
   ";
            // line 47
            echo twig_call_macro($macros["_self"], "macro_modal", [($context["modal_title"] ?? null), ($context["modal_body"] ?? null), ($context["options"] ?? null)], 47, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 50
    public function macro_modal($__modal_title__ = null, $__modal_body__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "modal_title" => $__modal_title__,
            "modal_body" => $__modal_body__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 51
            echo "   ";
            $context["rand"] = twig_random($this->env);
            // line 52
            echo "   ";
            $context["options"] = twig_array_merge(["id" => ("modal" .             // line 53
($context["rand"] ?? null)), "rand" =>             // line 54
($context["rand"] ?? null), "buttons" => [], "modal_classes" => ""],             // line 57
($context["options"] ?? null));
            // line 58
            echo "
   <div class=\"modal fade ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "modal_classes", [], "any", false, false, false, 59), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
         <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h5 class=\"modal-title\">";
            // line 63
            echo twig_escape_filter($this->env, ($context["modal_title"] ?? null), "html", null, true);
            echo "</h5>
               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 64
            echo twig_escape_filter($this->env, _x("button", "Close"), "html", null, true);
            echo "\"></button>
            </div>
            <div class=\"modal-body overflow-auto\">
               ";
            // line 67
            echo ($context["modal_body"] ?? null);
            echo "
            </div>
            <div class=\"modal-footer\">
               ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_4 = ($context["options"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["buttons"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 71
                echo "                  <button type=\"button\" class=\"btn ";
                echo (((($__internal_compile_5 = ($context["options"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["primary"] ?? null) : null)) ? ("btn-primary") : ("btn-outline-secondary"));
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["button"], "class", [], "array", true, true, false, 71)) ? (_twig_default_filter((($__internal_compile_6 = $context["button"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\"
                          id=\"";
                // line 72
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 72)) ? (_twig_default_filter((($__internal_compile_7 = $context["button"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null), ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 72) . "_btn_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 72)))) : (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 72) . "_btn_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 72)))), "html", null, true);
                echo "\" data-bs-dismiss=\"modal\">
                     ";
                // line 73
                echo ((twig_get_attribute($this->env, $this->source, $context["button"], "label", [], "array", true, true, false, 73)) ? (_twig_default_filter((($__internal_compile_8 = $context["button"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["label"] ?? null) : null), "")) : (""));
                echo "
                  </button>
               ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "            </div>
         </div>
      </div>
   </div>
   <script>
      \$(function () {
         ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["buttons"] ?? null) : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 83
                echo "         \$('#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 83), "html", null, true);
                echo "').on('click', '#";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 83)) ? (_twig_default_filter((($__internal_compile_10 = $context["button"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 83) . "_btn_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 83)))) : (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 83) . "_btn_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 83)))), "html", null, true);
                echo "', function (event) {
            ";
                // line 84
                echo ((twig_get_attribute($this->env, $this->source, $context["button"], "event", [], "array", true, true, false, 84)) ? (_twig_default_filter((($__internal_compile_11 = $context["button"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["event"] ?? null) : null), "return true;")) : ("return true;"));
                echo "
         });
         ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "      });
   </script>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/form/modals_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 87,  212 => 84,  205 => 83,  188 => 82,  180 => 76,  163 => 73,  159 => 72,  152 => 71,  135 => 70,  129 => 67,  123 => 64,  119 => 63,  110 => 59,  107 => 58,  105 => 57,  104 => 54,  103 => 53,  101 => 52,  98 => 51,  83 => 50,  72 => 47,  69 => 46,  67 => 45,  66 => 41,  65 => 40,  64 => 37,  63 => 36,  61 => 33,  46 => 32,  41 => 49,  38 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/modals_macros.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\modals_macros.html.twig");
    }
}
