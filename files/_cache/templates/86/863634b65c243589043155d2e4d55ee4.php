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

/* components/form/buttons.html.twig */
class __TwigTemplate_87191dc915868d0903a8b5bf83aefbd9 extends Template
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
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 32) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["withtemplate"] ?? null) : null)) : (""));
        // line 33
        $context["candel"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "candel", [], "array", true, true, false, 33) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["candel"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["candel"] ?? null) : null)) : (true));
        // line 34
        $context["canedit"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["canedit"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["canedit"] ?? null) : null)) : (true));
        // line 35
        $context["id"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 35), "id", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 35)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null)))) ? ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 35)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null)) : ( -1));
        // line 36
        echo "
         <div class=\"row\">
         ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "
         </div>

";
        // line 41
        if ((($context["canedit"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [0 => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null)], "method", false, false, false, 41))) {
            // line 42
            echo "      <div class=\"card-body mx-n2 mb-4 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
         ";
            // line 43
            if (((twig_length_filter($this->env, ($context["withtemplate"] ?? null)) > 0) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [0 => ($context["id"] ?? null)], "method", false, false, false, 43))) {
                // line 44
                echo "            ";
                if (((($context["id"] ?? null) <= 0) || (($context["withtemplate"] ?? null) == 2))) {
                    // line 45
                    echo "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\" value=\"1\">
                  <i class=\"fas fa-plus\"></i>
                  <span>";
                    // line 47
                    echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                    echo "</span>
               </button>
            ";
                } else {
                    // line 50
                    echo "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"far fa-save\"></i>
                  <span>";
                    // line 52
                    echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                    echo "</span>
               </button>
            ";
                }
                // line 55
                echo "         ";
            } else {
                // line 56
                echo "            ";
                if (((($context["candel"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("DELETE")], "method", false, false, false, 56)) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 56))) {
                    // line 57
                    echo "               ";
                    $context["candel"] = false;
                    // line 58
                    echo "            ";
                }
                // line 59
                echo "
            ";
                // line 60
                if ((($context["canedit"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("UPDATE")], "method", false, false, false, 60))) {
                    // line 61
                    echo "               <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                  <i class=\"far fa-save\"></i>
                  <span>";
                    // line 63
                    echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                    echo "</span>
               </button>
            ";
                }
                // line 66
                echo "
            ";
                // line 67
                if (($context["candel"] ?? null)) {
                    // line 68
                    echo "               ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 68)) {
                        // line 69
                        echo "                  ";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("DELETE")], "method", false, false, false, 69)) {
                            // line 70
                            echo "                     <button class=\"btn btn-outline-secondary me-2\" type=\"submit\"
                             name=\"restore\" value=\"1\">
                        <i class=\"ti ti-trash-off\"></i>
                        <span>";
                            // line 73
                            echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                            echo "</span>
                     </button>
                  ";
                        }
                        // line 76
                        echo "
                  ";
                        // line 77
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 77)) {
                            // line 78
                            echo "                    ";
                            $context["item_devices"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Devices::getConcernedItems");
                            // line 79
                            echo "                    ";
                            $context["show_keep_devices"] = twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 79), ($context["item_devices"] ?? null));
                            // line 80
                            echo "
                    ";
                            // line 81
                            $context["span_cls"] = "";
                            // line 82
                            echo "                    ";
                            if (($context["show_keep_devices"] ?? null)) {
                                // line 83
                                echo "                        ";
                                $context["span_cls"] = "border border-danger d-flex align-items-start flex-wrap p-1 px-2 me-2";
                                // line 84
                                echo "                    ";
                            }
                            // line 85
                            echo "
                     <span class=\"";
                            // line 86
                            echo twig_escape_filter($this->env, ($context["span_cls"] ?? null), "html", null, true);
                            echo "\">
                        <button class=\"btn btn-danger me-2\" type=\"submit\" name=\"purge\"
                              value=\"1\"
                              onclick=\"return confirm('";
                            // line 89
                            echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                            echo "');\">
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                            // line 91
                            echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                            echo "</span>
                        </button>
                        ";
                            // line 93
                            if (($context["show_keep_devices"] ?? null)) {
                                // line 94
                                echo "                            <span class=\"mt-2\">
                                <label class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"keep_devices\" value=\"1\" />
                                    <span class=\"form-check-label text-danger\">
                                        ";
                                // line 98
                                echo twig_escape_filter($this->env, __("Keep the devices while deleting this item"), "html", null, true);
                                echo "
                                    </span>
                                </label>
                            </span>
                        ";
                            }
                            // line 103
                            echo "                     <span>
                  ";
                        }
                        // line 105
                        echo "               ";
                    } else {
                        // line 106
                        echo "                  ";
                        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maybeDeleted", [], "method", false, false, false, 106) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "useDeletedToLockIfDynamic", [], "method", false, false, false, 106))) {
                            // line 107
                            echo "                     ";
                            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 107)) {
                                // line 108
                                echo "                        <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                                onclick=\"return confirm('";
                                // line 109
                                echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                                echo "');\"
                                value=\"1\">
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                                // line 112
                                echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                                echo "</span>
                        </button>
                     ";
                            }
                            // line 115
                            echo "                  ";
                        } elseif (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 115) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("DELETE")], "method", false, false, false, 115))) {
                            // line 116
                            echo "                     <button class=\"btn btn-outline-warning me-2\" type=\"submit\"
                             name=\"delete\" value=\"1\">
                        <i class=\"ti ti-trash\"></i>
                        <span>";
                            // line 119
                            echo twig_escape_filter($this->env, _x("button", "Put in trashbin"), "html", null, true);
                            echo "</span>
                     </button>
                  ";
                        }
                        // line 122
                        echo "               ";
                    }
                    // line 123
                    echo "            ";
                }
                // line 124
                echo "
            ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_mod"], "method", false, false, false, 125)) {
                    // line 126
                    echo "               <input type=\"hidden\" name=\"_read_date_mod\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 126)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date_mod"] ?? null) : null), "html", null, true);
                    echo "\" />
            ";
                }
                // line 128
                echo "         ";
            }
            // line 129
            echo "
         ";
            // line 130
            if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [0 => ($context["id"] ?? null)], "method", false, false, false, 130)) {
                // line 131
                echo "            <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" />
         ";
            }
            // line 133
            echo "
         ";
            // line 134
            if ((($context["canedit"] ?? null) && (twig_length_filter($this->env, (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["addbuttons"] ?? null) : null)) > 0))) {
                // line 135
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["addbuttons"] ?? null) : null));
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 136
                    echo "               <button class=\"btn btn-outline-secondary me-2\" type=\"submit\" name=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" value=\"1\">
                  ";
                    // line 137
                    if (twig_test_iterable($context["val"])) {
                        // line 138
                        echo "                     ";
                        if (twig_get_attribute($this->env, $this->source, $context["val"], "icon", [], "any", true, true, false, 138)) {
                            // line 139
                            echo "                        <i class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "icon", [], "any", false, false, false, 139), "html", null, true);
                            echo "\"></i>
                     ";
                        }
                        // line 141
                        echo "                     <span>";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["val"], "text", [], "any", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["val"], "text", [], "any", false, false, false, 141), "")) : ("")), "html", null, true);
                        echo "</span>
                  ";
                    } else {
                        // line 143
                        echo "                     ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "
                  ";
                    }
                    // line 145
                    echo "               </button>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "         ";
            }
            // line 148
            echo "
      </div>

      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
   </div> ";
            // line 153
            echo "</form> ";
        } else {
            // line 155
            echo "   </div> ";
        }
    }

    public function getTemplateName()
    {
        return "components/form/buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 155,  327 => 153,  323 => 151,  318 => 148,  315 => 147,  308 => 145,  302 => 143,  296 => 141,  290 => 139,  287 => 138,  285 => 137,  280 => 136,  275 => 135,  273 => 134,  270 => 133,  264 => 131,  262 => 130,  259 => 129,  256 => 128,  250 => 126,  248 => 125,  245 => 124,  242 => 123,  239 => 122,  233 => 119,  228 => 116,  225 => 115,  219 => 112,  213 => 109,  210 => 108,  207 => 107,  204 => 106,  201 => 105,  197 => 103,  189 => 98,  183 => 94,  181 => 93,  176 => 91,  171 => 89,  165 => 86,  162 => 85,  159 => 84,  156 => 83,  153 => 82,  151 => 81,  148 => 80,  145 => 79,  142 => 78,  140 => 77,  137 => 76,  131 => 73,  126 => 70,  123 => 69,  120 => 68,  118 => 67,  115 => 66,  109 => 63,  105 => 61,  103 => 60,  100 => 59,  97 => 58,  94 => 57,  91 => 56,  88 => 55,  82 => 52,  78 => 50,  72 => 47,  68 => 45,  65 => 44,  63 => 43,  60 => 42,  58 => 41,  52 => 38,  48 => 36,  46 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/buttons.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\buttons.html.twig");
    }
}
