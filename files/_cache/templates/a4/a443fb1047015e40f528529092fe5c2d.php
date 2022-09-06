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

/* components/itilobject/timeline/timeline.html.twig */
class __TwigTemplate_fd56dc69ef33c97095d43e6f986e1c04 extends Template
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
        $context["timeline_order"] = "flex-column";
        // line 33
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE"))) {
            // line 34
            echo "    ";
            $context["timeline_order"] = "flex-column-reverse";
        }
        // line 36
        echo "
<div class=\"itil-timeline d-flex ";
        // line 37
        echo twig_escape_filter($this->env, ($context["timeline_order"] ?? null), "html", null, true);
        echo " align-items-start mb-auto\">
   ";
        // line 38
        echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
        echo "

   ";
        // line 40
        $context["status_closed"] = twig_in_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getClosedStatusArray", [], "method", false, false, false, 40));
        // line 41
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timeline"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 42
            echo "      ";
            $context["entry_i"] = (($__internal_compile_1 = $context["entry"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item"] ?? null) : null);
            // line 43
            echo "      ";
            $context["users_id"] = (($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["users_id"] ?? null) : null);
            // line 44
            echo "      ";
            $context["is_private"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "is_private", [], "array", true, true, false, 44) &&  !(null === (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["is_private"] ?? null) : null)))) ? ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["is_private"] ?? null) : null)) : (false));
            // line 45
            echo "      ";
            $context["date_creation"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_creation", [], "array", true, true, false, 45) &&  !(null === (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["date_creation"] ?? null) : null)))) ? ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date_creation"] ?? null) : null)) : ((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["date"] ?? null) : null)));
            // line 46
            echo "      ";
            $context["date_mod"] = (($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_mod"] ?? null) : null);
            // line 47
            echo "      ";
            $context["entry_rand"] = twig_random($this->env);
            // line 48
            echo "      ";
            $context["is_current_user"] = (($context["users_id"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 49
            echo "      ";
            $context["anonym_user"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_user"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
            // line 50
            echo "
      ";
            // line 52
            echo "      ";
            if (((($__internal_compile_9 = $context["entry"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["type"] ?? null) : null) === "Solution")) {
                // line 53
                echo "         ";
                $context["entry"] = twig_array_merge($context["entry"], ["type" => "ITILSolution"]);
                // line 54
                echo "      ";
            }
            // line 55
            echo "
      ";
            // line 56
            $context["can_edit_i"] = (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["can_edit"] ?? null) : null);
            // line 57
            echo "      ";
            $context["can_promote"] = (((((($__internal_compile_11 = $context["entry"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["type"] ?? null) : null) == "ITILFollowup") || ((($__internal_compile_12 = $context["entry"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["type"] ?? null) : null) == "TicketTask")) && ($context["can_edit_i"] ?? null)) &&  !($context["status_closed"] ?? null));
            // line 58
            echo "      ";
            $context["is_promoted"] = (($context["can_promote"] ?? null) && ((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["sourceof_items_id"] ?? null) : null) > 0));
            // line 59
            echo "
      ";
            // line 60
            $context["timeline_position"] = (($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["timeline_position"] ?? null) : null);
            // line 61
            echo "      ";
            $context["item_position"] = "t-left";
            // line 62
            echo "      ";
            if ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_LEFT"))) {
                // line 63
                echo "         ";
                $context["item_position"] = "t-left";
                // line 64
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDLEFT"))) {
                // line 65
                echo "         ";
                $context["item_position"] = "t-left t-middle";
                // line 66
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDRIGHT"))) {
                // line 67
                echo "         ";
                $context["item_position"] = "t-right t-middle";
                // line 68
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_RIGHT"))) {
                // line 69
                echo "         ";
                $context["item_position"] = "t-right";
                // line 70
                echo "      ";
            }
            // line 71
            echo "
      ";
            // line 72
            $context["itiltype"] = ((twig_get_attribute($this->env, $this->source, $context["entry"], "itiltype", [], "array", true, true, false, 72)) ? (("ITIL" . (($__internal_compile_15 = $context["entry"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itiltype"] ?? null) : null))) : ((($__internal_compile_16 = $context["entry"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["type"] ?? null) : null)));
            // line 73
            echo "
      ";
            // line 74
            $context["state_class"] = "";
            // line 75
            echo "      ";
            if (((($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["state"] ?? null) : null) === constant("Planning::INFO"))) {
                // line 76
                echo "         ";
                $context["state_class"] = "info";
                // line 77
                echo "      ";
            }
            // line 78
            echo "      ";
            if (((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 79
                echo "         ";
                $context["state_class"] = "todo";
                // line 80
                echo "      ";
            }
            // line 81
            echo "      ";
            if (((($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 82
                echo "         ";
                $context["state_class"] = "done";
                // line 83
                echo "      ";
            }
            // line 84
            echo "
      ";
            // line 85
            $context["solution_class"] = "";
            // line 86
            echo "      ";
            if ((($context["itiltype"] ?? null) == "ITILSolution")) {
                // line 87
                echo "         ";
                if (((($__internal_compile_20 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["status"] ?? null) : null) === constant("CommonITILValidation::WAITING"))) {
                    // line 88
                    echo "            ";
                    $context["solution_class"] = "waiting";
                    // line 89
                    echo "         ";
                }
                // line 90
                echo "         ";
                if (((($__internal_compile_21 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["status"] ?? null) : null) === constant("CommonITILValidation::ACCEPTED"))) {
                    // line 91
                    echo "            ";
                    $context["solution_class"] = "accepted";
                    // line 92
                    echo "         ";
                }
                // line 93
                echo "         ";
                if (((($__internal_compile_22 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["status"] ?? null) : null) === constant("CommonITILValidation::REFUSED"))) {
                    // line 94
                    echo "            ";
                    $context["solution_class"] = "refused";
                    // line 95
                    echo "         ";
                }
                // line 96
                echo "      ";
            }
            // line 97
            echo "
      <div class=\"timeline-item mb-3 ";
            // line 98
            echo twig_escape_filter($this->env, ($context["itiltype"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["state_class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_compile_23 = $context["entry"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["class"] ?? null) : null), "html", null, true);
            echo " ";
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto") : (""));
            echo "\"
            data-itemtype=\"";
            // line 99
            echo twig_escape_filter($this->env, (($__internal_compile_24 = $context["entry"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["type"] ?? null) : null), "html", null, true);
            echo "\" data-items-id=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_25 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null), "html", null, true);
            echo "\"
            ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "item_action", [], "array", true, true, false, 100)) {
                echo "data-item-action=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_26 = $context["entry"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["item_action"] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo ">
         <div class=\"row\">
            <div class=\"col-auto todo-list-state ";
            // line 102
            echo ((twig_in_filter("left", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : (""));
            echo "\">
               ";
            // line 103
            if (((($__internal_compile_27 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 104
                echo "                  <span class=\"state state_1\" onclick=\"change_task_state(";
                echo twig_escape_filter($this->env, (($__internal_compile_28 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["id"] ?? null) : null), "html", null, true);
                echo ", this)\" title=\"";
                echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                echo "\"></span>
               ";
            } elseif (((($__internal_compile_29 =             // line 105
($context["entry_i"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 106
                echo "                  <span class=\"state state_2\" onclick=\"change_task_state(";
                echo twig_escape_filter($this->env, (($__internal_compile_30 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["id"] ?? null) : null), "html", null, true);
                echo ", this)\" title=\"";
                echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                echo "\"></span>
               ";
            }
            // line 108
            echo "            </div>

            <div class=\"col-auto d-flex flex-column user-part ";
            // line 110
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : (""));
            echo "\">
               ";
            // line 111
            $context["avatar_rand"] = twig_random($this->env);
            // line 112
            echo "               ";
            // line 113
            echo "               ";
            $context["entry_user"] = (((array_key_exists("users_id", $context) &&  !(null === ($context["users_id"] ?? null)))) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))) : (null));
            // line 114
            echo "               ";
            if ( !(null === ($context["entry_user"] ?? null))) {
                // line 115
                echo "                  ";
                $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 115);
                // line 116
                echo "                  ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "getFriendlyName", [], "method", false, false, false, 116))]);
                // line 117
                echo "                  ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 117)]);
                // line 118
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\">
                     ";
                // line 119
                echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" =>                 // line 120
($context["users_id"] ?? null), "enable_anonymization" =>                 // line 121
($context["anonym_user"] ?? null)], false);
                // line 122
                echo "
                  </span>
                  ";
                // line 124
                if ( !($context["anonym_user"] ?? null)) {
                    // line 125
                    echo "                     ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                     // line 127
($context["user_fields"] ?? null), "enable_anonymization" => false], false), 1 => ["applyto" => ("timeline-avatar" .                     // line 130
($context["avatar_rand"] ?? null))]]);
                    // line 132
                    echo "                  ";
                }
                // line 133
                echo "               ";
            } else {
                // line 134
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\"><span class=\"avatar avatar-md rounded\"></span></span>
               ";
            }
            // line 136
            echo "            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <span class=\"mt-2 timeline-content ";
            // line 138
            echo twig_escape_filter($this->env, ($context["solution_class"] ?? null), "html", null, true);
            echo " flex-grow-1 ";
            echo twig_escape_filter($this->env, ($context["item_position"] ?? null), "html", null, true);
            echo " card\">
                  <div class=\"card-body\">
                     ";
            // line 140
            echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header.html.twig");
            echo "

                     ";
            // line 142
            if (twig_in_filter(($context["itiltype"] ?? null), twig_array_column(($context["timeline_itemtypes"] ?? null), "type"))) {
                // line 143
                echo "                        ";
                $context["matching_types"] = twig_array_filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 143) == ($context["itiltype"] ?? null)); });
                // line 144
                echo "                        ";
                if ((twig_length_filter($this->env, ($context["matching_types"] ?? null)) > 0)) {
                    // line 145
                    echo "                           ";
                    $context["timeline_itemtype"] = twig_first($this->env, ($context["matching_types"] ?? null));
                    // line 146
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", true, true, false, 146)) {
                        // line 147
                        echo "                              ";
                        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", false, false, false, 147), ["form_mode" => "view"]);
                        echo "
                           ";
                    }
                    // line 149
                    echo "                        ";
                }
                // line 150
                echo "                     ";
            } else {
                // line 151
                echo "                        <div class=\"read-only-content\">
                           ";
                // line 152
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($__internal_compile_31 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["content"] ?? null) : null));
                echo "
                        </div>
                     ";
            }
            // line 155
            echo "                     <div class=\"edit-content collapse\">
                        <div class=\"ajax-content\"></div>
                     </div>
                  </div>
               </span>

               ";
            // line 161
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "documents", [], "array", true, true, false, 161)) {
                // line 162
                echo "                  ";
                echo twig_include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" =>                 // line 163
($context["item"] ?? null), "entry" =>                 // line 164
$context["entry"]]);
                // line 165
                echo "
               ";
            }
            // line 167
            echo "            </div>
         </div>
      </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "
   <div class=\"timeline-item tasks-title d-none\">
      <h3>";
        // line 173
        echo twig_escape_filter($this->env, _n("Task", "Tasks", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
   </div>

   ";
        // line 176
        echo twig_include($this->env, $context, "components/itilobject/timeline/todo-list-summary.html.twig");
        echo "

   <div class=\"timeline-item validations-title d-none mt-4\">
      <h3>";
        // line 179
        echo twig_escape_filter($this->env, _n("Validation", "Validations", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
   </div>

   ";
        // line 182
        echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
        echo "
   ";
        // line 183
        echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
        echo "

</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".edit-timeline-item\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      var content_block = timeline_item.find(\".timeline-content\");
      var itemtype      = timeline_item.data('itemtype');
      var items_id      = timeline_item.data('items-id');
      var item_action   = timeline_item.data('item-action');

      content_block.find(\".read-only-content\").hide();
      content_block.find(\".edit-content\").show()
         .find(\".ajax-content\")
         .html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
         .load(\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
        echo "\", {
            'action'     : 'viewsubitem',
            'type'       : itemtype,
            'parenttype' : '";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 203), "html", null, true);
        echo "',
            '";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 204), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 204)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["id"] ?? null) : null), "html", null, true);
        echo ",
            'id'         : items_id,
            'item_action': item_action
         });

      timeline_item.find('.timeline-item-buttons').addClass('d-none');
      timeline_item.find('.close-edit-content').removeClass('d-none');

      \$(\"#itil-footer\").find(\".main-actions\").hide();
   });

   \$(document).on(\"click\", \".close-edit-content\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      timeline_item.find('.timeline-item-buttons').removeClass('d-none');
      timeline_item.find('.close-edit-content').addClass('d-none');

      timeline_item.find('.ajax-content').html('');
      timeline_item.find('.read-only-content').show();

      \$(\"#itil-footer .main-actions\").show();
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 204,  486 => 203,  480 => 200,  460 => 183,  456 => 182,  450 => 179,  444 => 176,  438 => 173,  434 => 171,  417 => 167,  413 => 165,  411 => 164,  410 => 163,  408 => 162,  406 => 161,  398 => 155,  392 => 152,  389 => 151,  386 => 150,  383 => 149,  377 => 147,  374 => 146,  371 => 145,  368 => 144,  365 => 143,  363 => 142,  358 => 140,  351 => 138,  347 => 136,  341 => 134,  338 => 133,  335 => 132,  333 => 130,  332 => 127,  330 => 125,  328 => 124,  324 => 122,  322 => 121,  321 => 120,  320 => 119,  315 => 118,  312 => 117,  309 => 116,  306 => 115,  303 => 114,  300 => 113,  298 => 112,  296 => 111,  292 => 110,  288 => 108,  280 => 106,  278 => 105,  271 => 104,  269 => 103,  265 => 102,  256 => 100,  250 => 99,  240 => 98,  237 => 97,  234 => 96,  231 => 95,  228 => 94,  225 => 93,  222 => 92,  219 => 91,  216 => 90,  213 => 89,  210 => 88,  207 => 87,  204 => 86,  202 => 85,  199 => 84,  196 => 83,  193 => 82,  190 => 81,  187 => 80,  184 => 79,  181 => 78,  178 => 77,  175 => 76,  172 => 75,  170 => 74,  167 => 73,  165 => 72,  162 => 71,  159 => 70,  156 => 69,  153 => 68,  150 => 67,  147 => 66,  144 => 65,  141 => 64,  138 => 63,  135 => 62,  132 => 61,  130 => 60,  127 => 59,  124 => 58,  121 => 57,  119 => 56,  116 => 55,  113 => 54,  110 => 53,  107 => 52,  104 => 50,  101 => 49,  98 => 48,  95 => 47,  92 => 46,  89 => 45,  86 => 44,  83 => 43,  80 => 42,  62 => 41,  60 => 40,  55 => 38,  51 => 37,  48 => 36,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\timeline.html.twig");
    }
}
