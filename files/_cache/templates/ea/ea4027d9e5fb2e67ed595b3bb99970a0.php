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

/* components/itilobject/footer.html.twig */
class __TwigTemplate_9e0591ba3209c993df6075568be61779 extends Template
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
        $context["timeline_btns_cls"] = "col-md-8";
        // line 33
        $context["form_btns_cls"] = "col-md";
        // line 34
        $context["switch_btn_cls"] = "fa-caret-left";
        // line 35
        if (($context["is_expanded"] ?? null)) {
            // line 36
            echo "    ";
            $context["timeline_btns_cls"] = "col-md-4";
            // line 37
            echo "    ";
            $context["form_btns_cls"] = "col-md-8";
            // line 38
            echo "    ";
            $context["switch_btn_cls"] = "fa-caret-right";
        }
        // line 40
        echo "
<div class=\"mx-n2 mb-n2 itil-footer itil-footer p-0 border-top\" id=\"itil-footer\">
   <div class=\"buttons-bar d-flex py-2\">
      <div class=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["timeline_btns_cls"] ?? null), "html", null, true);
        echo " ps-3 timeline-buttons\">
         ";
        // line 44
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 44)) {
            // line 45
            echo "            ";
            $context["default_action_data"] = twig_first($this->env, ($context["timeline_itemtypes"] ?? null));
            // line 46
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNotSolved", [], "method", false, false, false, 46) && (($context["default_action_data"] ?? null) != false))) {
                // line 47
                echo "               ";
                if ((twig_length_filter($this->env, ($context["timeline_itemtypes"] ?? null)) > 1)) {
                    // line 48
                    echo "                  <div class=\"btn-group me-2 main-actions\" style=\"";
                    echo (((($context["load_kb_sol"] ?? null) > 0)) ? ("display:none;") : (""));
                    echo "\">
               ";
                } else {
                    // line 50
                    echo "                  ";
                    // line 51
                    echo "                  <div class=\"main-actions\" style=\"display:inline-flex\">
               ";
                }
                // line 53
                echo "                  <button class=\"btn btn-primary answer-action\" data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "class", [], "any", false, false, false, 53), "html", null, true);
                echo "-block\">
                     <i class=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "icon", [], "any", false, false, false, 54), "html", null, true);
                echo "\"></i>
                     <span>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 55), "html", null, true);
                echo "</span>
                  </button>
                  ";
                // line 57
                if ((twig_length_filter($this->env, ($context["timeline_itemtypes"] ?? null)) > 1)) {
                    // line 58
                    echo "                     <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"visually-hidden\">";
                    // line 59
                    echo twig_escape_filter($this->env, __("View other actions"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 62
                echo "                  <ul class=\"dropdown-menu\">
                     ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["timeline_itemtypes"] ?? null));
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
                foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                    // line 64
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 64) > 0)) {
                        // line 65
                        echo "                           <li><a class=\"dropdown-item action-";
                        echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                        echo " answer-action\" href=\"#\"
                              data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                        // line 66
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 66), "html", null, true);
                        echo "-block\">
                              <i class=\"";
                        // line 67
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 67), "html", null, true);
                        echo "\"></i>
                              <span>";
                        // line 68
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 68), "html", null, true);
                        echo "</span>
                           </a></li>
                        ";
                    }
                    // line 71
                    echo "                     ";
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
                unset($context['_seq'], $context['_iterated'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                  </ul>
               </div>
            ";
            }
            // line 75
            echo "
            <ul class=\"legacy-timeline-actions\">
               ";
            // line 77
            echo ((array_key_exists("legacy_timeline_actions", $context)) ? (_twig_default_filter(($context["legacy_timeline_actions"] ?? null), "")) : (""));
            echo "
            </ul>
            ";
            // line 79
            echo twig_include($this->env, $context, "components/itilobject/timeline/filter_timeline.html.twig");
            echo "
         ";
        }
        // line 81
        echo "     </div>

      <div class=\"form-buttons ";
        // line 83
        echo twig_escape_filter($this->env, ($context["form_btns_cls"] ?? null), "html", null, true);
        echo " d-flex justify-content-end ms-auto ms-md-0 my-n2 py-2 pe-3 card-footer border-top-0 position-relative\">
         <span class=\"d-none d-md-block position-absolute top-0 start-0\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 85
        echo twig_escape_filter($this->env, __("Toggle panels width"), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"switch-panel-width btn btn-sm btn-square btn-icon btn-ghost-secondary\">
               <i class=\"fas ";
        // line 87
        echo twig_escape_filter($this->env, ($context["switch_btn_cls"] ?? null), "html", null, true);
        echo "\"></i>
            </button>
            <button type=\"button\" class=\"collapse-panel btn btn-sm btn-square btn-icon btn-ghost-secondary\">
               <i class=\"fas fa-caret-right\"></i>
            </button>
         </span>

         ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 94)) {
            // line 95
            echo "            <button class=\"btn btn-primary\" type=\"submit\" name=\"add\" form=\"itil-form\"
                  title=\"";
            // line 96
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "\">
               <i class=\"fas fa-plus\"></i>
               <span class=\"d-none d-md-block\">";
            // line 98
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "</span>
            </button>
         ";
        } else {
            // line 101
            echo "
            <div class=\"btn-group\" role=\"group\">
               ";
            // line 103
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canDelete", [], "method", false, false, false, 103)) {
                // line 104
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 104)) {
                    // line 105
                    echo "                     <button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"restore\" form=\"itil-form\"
                           title=\"";
                    // line 106
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "\">
                        <i class=\"fas fa-trash-restore-alt\"></i>
                        <span class=\"d-none d-md-block\">";
                    // line 108
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "</span>
                     </button>

                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"purge\" form=\"itil-form\"
                           title=\"";
                    // line 112
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "\"
                           onclick=\"return confirm('";
                    // line 113
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"ti ti-trash\"></i>
                        <span class=\"d-none d-md-block\">";
                    // line 115
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                } else {
                    // line 118
                    echo "                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"delete\" form=\"itil-form\"
                           title=\"";
                    // line 119
                    echo twig_escape_filter($this->env, _x("button", "Put in trashbin"), "html", null, true);
                    echo "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-trash\"></i>
                     </button>
                  ";
                }
                // line 124
                echo "               ";
            }
            // line 125
            echo "
               ";
            // line 126
            if (($context["canupdate"] ?? null)) {
                // line 127
                echo "                  ";
                echo twig_include($this->env, $context, "components/form/single-action.html.twig", ["onlyicon" => true]);
                // line 129
                echo "
               ";
            }
            // line 131
            echo "
               ";
            // line 132
            $context["is_locked"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "locked", [], "array", true, true, false, 132) && (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["locked"] ?? null) : null));
            // line 133
            echo "               ";
            $context["display_save_btn"] = ( !($context["is_locked"] ?? null) && ((((($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)) || ($context["canpriority"] ?? null)) || ($context["canassign"] ?? null)) || ($context["canassigntome"] ?? null)));
            // line 134
            echo "               ";
            if (($context["display_save_btn"] ?? null)) {
                // line 135
                echo "                  <button class=\"btn btn-primary\" type=\"submit\" name=\"update\" form=\"itil-form\"
                        title=\"";
                // line 136
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "\">
                     <i class=\"far fa-save\"></i>
                     <span class=\"d-none d-md-block\">";
                // line 138
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>
               ";
            }
            // line 141
            echo "            </div>

         ";
        }
        // line 144
        echo "      </div>
   </div>
</div>

";
        // line 148
        $context["openfollowup"] = ((((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 148) &&  !(null === (($__internal_compile_1 = ($context["_get"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["_get"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_openfollowup"] ?? null) : null)) : (false)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [0 => true], "method", false, false, false, 148));
        // line 149
        $context["timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 150
        echo "
<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \"#itil-footer .answer-action\", function() {
      scrollToTimelineStart();

      // hide answer button after clicking on it
      \$(this).closest(\".main-actions\").hide();
   });

   // when close button of new answer block is clicked, show again the new answer button
   \$(document).on(\"click\", \"#new-itilobject-form .close-itil-answer\", function() {
      \$(\"#itil-footer .main-actions\").show();
   });

   var scrollToTimelineStart = function() {
      // small delay to be sure all content is loaded
      // otherwise, height of answer html may not be taken in account by document height
      setTimeout(() => {
         // scroll body to ensure we are at bottom (useful for responsive display)
         \$('html, body').animate({
            scrollTop: ";
        // line 171
        echo ((($context["timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "\$(document).height()
         }, 0, function(){
            // scroll timeline with animation
            var timeline = \$(\"#itil-object-container .itil-left-side\");
            timeline.animate({
               scrollTop: ";
        // line 176
        echo ((($context["timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "timeline.prop('scrollHeight')
            }, 'slow');
         });
      }, 200);
   };

   ";
        // line 182
        if (($context["openfollowup"] ?? null)) {
            // line 183
            echo "      // trigger for reopen, show followup form in timeline
      var myCollapse = document.getElementById('new-ITILFollowup-block')
      var bsCollapse = new bootstrap.Collapse(myCollapse);
      bsCollapse.show();

      scrollToTimelineStart();
   ";
        }
        // line 190
        echo "});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 190,  377 => 183,  375 => 182,  366 => 176,  358 => 171,  335 => 150,  333 => 149,  331 => 148,  325 => 144,  320 => 141,  314 => 138,  309 => 136,  306 => 135,  303 => 134,  300 => 133,  298 => 132,  295 => 131,  291 => 129,  288 => 127,  286 => 126,  283 => 125,  280 => 124,  272 => 119,  269 => 118,  263 => 115,  258 => 113,  254 => 112,  247 => 108,  242 => 106,  239 => 105,  236 => 104,  234 => 103,  230 => 101,  224 => 98,  219 => 96,  216 => 95,  214 => 94,  204 => 87,  199 => 85,  194 => 83,  190 => 81,  185 => 79,  180 => 77,  176 => 75,  171 => 72,  157 => 71,  151 => 68,  147 => 67,  143 => 66,  138 => 65,  135 => 64,  118 => 63,  115 => 62,  109 => 59,  106 => 58,  104 => 57,  99 => 55,  95 => 54,  90 => 53,  86 => 51,  84 => 50,  78 => 48,  75 => 47,  72 => 46,  69 => 45,  67 => 44,  63 => 43,  58 => 40,  54 => 38,  51 => 37,  48 => 36,  46 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/footer.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\footer.html.twig");
    }
}
