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

/* components/itilobject/timeline/form_task.html.twig */
class __TwigTemplate_9804d3fe7268d63d130d4b741af03594 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 32
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_task.html.twig", 33)->unwrap();
        // line 35
        $context["params"] = twig_array_merge(["parent" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
        // line 37
        $context["candedit"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 37);
        // line 38
        $context["can_read_kb"] = (Session::haveRight("knowbase", twig_constant("READ")) || Session::haveRight("knowbase", twig_constant("KnowbaseItem::READFAQ")));
        // line 39
        $context["can_update_kb"] = Session::haveRight("knowbase", twig_constant("UPDATE"));
        // line 40
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 40) || ((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null) == true));
        // line 41
        $context["rand"] = twig_random($this->env);
        // line 32
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_task.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 45
            echo "      <div class=\"read-only-content ";
            echo ((((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["state"] ?? null) : null) === constant("Planning::DONE"))) ? ("done") : (""));
            echo "\">
         <div class=\"text-content\" data-bs-html=\"true\" data-bs-custom-class=\"todo-list-tooltip\"
              title=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null)), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            ";
            // line 48
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 51
            echo "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 55
            if ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["users_id_tech"] ?? null) : null)) {
                // line 56
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 57
                $context["is_current_tech"] = ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["users_id_tech"] ?? null) : null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
                // line 58
                echo "                  ";
                $context["anonym_tech"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_tech"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
                // line 59
                echo "                  ";
                echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" => (($__internal_compile_6 =                 // line 60
($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["users_id_tech"] ?? null) : null), "enable_anonymization" =>                 // line 61
($context["anonym_tech"] ?? null)], false);
                // line 62
                echo "
               </span>
            ";
            }
            // line 65
            echo "
            ";
            // line 66
            if ((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["groups_id_tech"] ?? null) : null)) {
                // line 67
                echo "               <span class=\"badge bg-orange-lt\">
                  <i class=\"fas fa-users me-1\"></i>
                  ";
                // line 69
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", (($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["groups_id_tech"] ?? null) : null), ["enable_anonymization" => true]);
                echo "
               </span>
            ";
            }
            // line 72
            echo "
            ";
            // line 73
            if ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["taskcategories_id"] ?? null) : null)) {
                // line 74
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("TaskCategory", (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["taskcategories_id"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 78
            echo "
            ";
            // line 79
            if ((($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["actiontime"] ?? null) : null)) {
                // line 80
                echo "               <span class=\"actiontime badge bg-orange-lt\">
                  <i class=\"fas fa-stopwatch me-1\"></i>
                  ";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["actiontime"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 85
            echo "
            ";
            // line 86
            if ((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["begin"] ?? null) : null)) {
                // line 87
                echo "               <span class=\"planification badge bg-orange-lt\">
                  <i class=\"fas fa-calendar me-1\"></i>
                  ";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["begin"] ?? null) : null)), "html", null, true);
                echo "
                  &rArr;
                  ";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["end"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 94
            echo "
            ";
            // line 95
            if ((($__internal_compile_16 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["sourceitems_id"] ?? null) : null)) {
                // line 96
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 98
                ob_start(function () { return ''; });
                // line 99
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 100
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["sourceitems_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["merged_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 103
                echo "                  ";
                echo twig_sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 106
            echo "
            ";
            // line 107
            if ((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["sourceof_items_id"] ?? null) : null)) {
                // line 108
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 110
                ob_start(function () { return ''; });
                // line 111
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 112
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["sourceof_items_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["promoted_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 115
                echo "                  ";
                echo twig_sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 118
            echo "
            ";
            // line 119
            echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            echo "
         </div>
      </div>

      <script type=\"text/javascript\">
         function change_task_state(tasks_id, target) {
            \$.post('";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
            echo "',
               {'action':     'change_task_state',
                  'tasks_id':   tasks_id,
                  'parenttype': '";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 128), "html", null, true);
            echo "',
                  '";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 129), "html", null, true);
            echo "': ";
            echo twig_escape_filter($this->env, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 129)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null), "html", null, true);
            echo "
               })
               .done(function(response) {
                  \$(target).closest('.timeline-item').find('.state')
                     .removeClass('state_1 state_2')
                     .addClass('state_'+response.state)
                     .attr('title', response.label);

                  \$(target).closest('.timeline-item').find('.read-only-content')
                     .toggleClass('done');

                  var todo_tasks   = \$('.todo-list-state .state.state_1').length;
                  var done_tasks   = \$('.todo-list-state .state.state_2').length;
                  var total_tasks  = todo_tasks + done_tasks;
                  var percent_done = Math.floor(100 * done_tasks / total_tasks);

                  \$('.timeline-progress')
                     .css('width', percent_done + '%')
                     .attr('aria-valuenow', percent_done);
                  \$('.task-progress-label').html(percent_done + '%');
               });
         }
      </script>
   ";
        } else {
            // line 153
            echo "      <div class=\"itiltask\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 155), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 156), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 157), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null), "html", null, true);
            echo "\" />
            ";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            <div class=\"row\">
               <div class=\"col-12 col-md-9\">
                  ";
            // line 162
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 164
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 164)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "rand" =>             // line 172
($context["rand"] ?? null)]], 162, $context, $this->getSourceContext());
            // line 174
            echo "
               </div>
               <div class=\"col-12 col-md-3 order-first order-md-last\">
                  <div class=\"row\">

                     ";
            // line 179
            ob_start(function () { return ''; });
            // line 180
            echo "                        <i class=\"fas fa-reply fa-fw me-1\"
                           title=\"";
            // line 181
            echo twig_escape_filter($this->env, _n("Task template", "Task templates", Session::getPluralNumber()), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 183
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskTemplate", "tasktemplates_id", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 186
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 186)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["tasktemplates_id"] ?? null) : null),             // line 187
($context["task_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itiltasktemplate_update" .             // line 191
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 192
($context["item"] ?? null), "fields", [], "any", false, false, false, 192)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["entities_id"] ?? null) : null), "rand" =>             // line 193
($context["rand"] ?? null)]], 183, $context, $this->getSourceContext());
            // line 195
            echo "

                     ";
            // line 198
            echo "                     ";
            ob_start(function () { return ''; });
            // line 199
            echo "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, _n("Category", "Categories", 1), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_category_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 201
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskCategory", "taskcategories_id", (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 204
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 204)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["taskcategories_id"] ?? null) : null),             // line 205
($context["task_category_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 209
($context["item"] ?? null), "fields", [], "any", false, false, false, 209)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["entities_id"] ?? null) : null), "is_active" => 1, "rand" =>             // line 211
($context["rand"] ?? null)]], 201, $context, $this->getSourceContext());
            // line 213
            echo "

                     ";
            // line 216
            echo "                     ";
            ob_start(function () { return ''; });
            // line 217
            echo "                        <i class=\"fas fa-tasks fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Status"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_state_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 219
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["state", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 219)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["state"] ?? null) : null), [0 => _n("Information", "Information", 1), 1 => __("To do"), 2 => __("Done")],             // line 223
($context["task_state_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 226
($context["rand"] ?? null)]], 219, $context, $this->getSourceContext());
            // line 227
            echo "


                     ";
            // line 230
            ob_start(function () { return ''; });
            // line 231
            echo "                        <i class=\"ti ti-lock fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_private_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 233
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 235
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 235)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["is_private"] ?? null) : null),             // line 236
($context["task_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 240
($context["rand"] ?? null)]], 233, $context, $this->getSourceContext());
            // line 242
            echo "

                     ";
            // line 244
            if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                // line 245
                echo "                        ";
                ob_start(function () { return ''; });
                // line 246
                echo "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 247
                echo twig_escape_filter($this->env, twig_sprintf(__("Link to knowledge base entry #%id"), "TODO kb id"), "html", null, true);
                echo "\"></i>
                        ";
                $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 249
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id",                 // line 251
($context["kb_id_toload"] ?? null),                 // line 252
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 256
($context["rand"] ?? null)]], 249, $context, $this->getSourceContext());
                // line 258
                echo "
                     ";
            }
            // line 260
            echo "
                     ";
            // line 261
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 262
                echo "                        ";
                ob_start(function () { return ''; });
                // line 263
                echo "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                $context["task_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 266
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["_task_to_kb", 0,                 // line 269
($context["task_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 273
($context["rand"] ?? null)]], 266, $context, $this->getSourceContext());
                // line 275
                echo "
                     ";
            }
            // line 277
            echo "
                     ";
            // line 279
            echo "                     ";
            ob_start(function () { return ''; });
            // line 280
            echo "                        <i class=\"fas fa-stopwatch fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Duration"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_actiontime_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 282
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 282)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["actiontime"] ?? null) : null), ($context["task_actiontime_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 285
($context["rand"] ?? null), "min" => 0, "max" => (8 * twig_constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true]], 282, $context, $this->getSourceContext());
            // line 290
            echo "

                     ";
            // line 293
            echo "                     ";
            ob_start(function () { return ''; });
            // line 294
            echo "                        <i class=\"fas fa-user fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_user_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 296
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 299
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 299), "users_id_tech", [], "array", true, true, false, 299)) ? (_twig_default_filter((($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 299)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["users_id_tech"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))),             // line 300
($context["task_user_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 304
($context["item"] ?? null), "fields", [], "any", false, false, false, 304)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["entities_id"] ?? null) : null), "right" => "own_ticket", "rand" =>             // line 306
($context["rand"] ?? null)]], 296, $context, $this->getSourceContext());
            // line 308
            echo "

                     ";
            // line 311
            echo "                     ";
            ob_start(function () { return ''; });
            // line 312
            echo "                        <i class=\"fas fa-users fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_group_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 314
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 317
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 317)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["groups_id_tech"] ?? null) : null),             // line 318
($context["task_group_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,             // line 322
($context["item"] ?? null), "fields", [], "any", false, false, false, 322)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["entities_id"] ?? null) : null), "condition" => ["is_task" => 1], "rand" =>             // line 324
($context["rand"] ?? null)]], 314, $context, $this->getSourceContext());
            // line 326
            echo "

                     <script type=\"text/javascript\">
                        function showPlanUpdate";
            // line 329
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(e) {
                           \$('#plan";
            // line 330
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').hide();
                           \$('#viewplan";
            // line 331
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').load('";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/planning.php"), "html", null, true);
            echo "', {
                              action: \"add_event_classic_form\",
                              form: \"followups\", // Was followups for tasks before. Can't find where this is used.
                              entity: ";
            // line 334
            echo twig_escape_filter($this->env, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 334)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["entities_id"] ?? null) : null), "html", null, true);
            echo ",
                              rand_user: ";
            // line 335
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              rand_group: ";
            // line 336
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              itemtype: \"";
            // line 337
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "type", [], "any", false, false, false, 337), "html", null, true);
            echo "\",
                              items_id: ";
            // line 338
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 338), "id", [], "array", true, true, false, 338)) ? (_twig_default_filter((($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 338)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["id"] ?? null) : null),  -1)) : ( -1)), "html", null, true);
            echo "
                           });
                        }
                     </script>
                     <button id=\"plan";
            // line 342
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary d-block mb-2 text-truncate\" onclick=\"showPlanUpdate";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "()\" type=\"button\">
                        <i class=\"fas fa-calendar\"></i>
                        <span>";
            // line 344
            echo twig_escape_filter($this->env, __("Plan this task"), "html", null, true);
            echo "</span>
                     </button>
                     <div id=\"viewplan";
            // line 346
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
                  </div>
               </div>
            </div>

            ";
            // line 351
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            <div class=\"d-flex card-footer mx-n3 mb-n3\">
               ";
            // line 353
            if (((($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 353)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["id"] ?? null) : null) <= 0)) {
                // line 354
                echo "                  <div class=\"input-group\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 357
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                     </button>
                     <span class=\"input-group-text bg-yellow-lt py-0 pe-0\" id=\"pending-reasons-control-";
                // line 359
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\">
                        <span class=\"d-inline-flex align-items-center\" title=\"";
                // line 360
                echo twig_escape_filter($this->env, __("Set the status to pending"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                           <i class=\"fas fa-pause me-2\"></i>
                           <label class=\"form-check form-switch pt-2\">
                              <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                              <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                    id=\"enable-pending-reasons-";
                // line 366
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                                    role=\"button\"
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                // line 368
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\" />
                           </label>
                        </span>

                        <div class=\"collapse ps-2 py-1 flex-fill\" id=\"pending-reasons-setup-";
                // line 372
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\">
                           ";
                // line 373
                echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                echo "
                        </div>
                     </span>
                  </div>
               ";
            } else {
                // line 378
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 378)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 381
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 384
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 384)) {
                    // line 385
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 386
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 388
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 391
                echo "               ";
            }
            // line 392
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 394
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itiltasktemplate_update";
            // line 399
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 401
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/task.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  tasktemplates_id: value,
                  items_id: '";
            // line 405
            echo twig_escape_filter($this->env, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 405)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 406
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 406), "html", null, true);
            echo "'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content
               if (tasktinymce = tinymce.get(\"content_";
            // line 414
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                  tasktinymce.setContent(data.content);
               }
               // set category
               \$(\"#dropdown_requesttypes_id";
            // line 418
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", requesttypes_id);
               // set is_private
               \$(\"#is_private_";
            // line 420
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")
                  .prop(\"checked\", data.is_private == \"0\"
                     ? false
                     : true);
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  694 => 420,  689 => 418,  682 => 414,  671 => 406,  667 => 405,  660 => 401,  655 => 399,  647 => 394,  643 => 392,  640 => 391,  634 => 388,  629 => 386,  626 => 385,  624 => 384,  618 => 381,  611 => 378,  603 => 373,  599 => 372,  592 => 368,  587 => 366,  578 => 360,  574 => 359,  569 => 357,  564 => 354,  562 => 353,  557 => 351,  549 => 346,  544 => 344,  537 => 342,  530 => 338,  526 => 337,  522 => 336,  518 => 335,  514 => 334,  506 => 331,  502 => 330,  498 => 329,  493 => 326,  491 => 324,  490 => 322,  489 => 318,  488 => 317,  486 => 314,  480 => 312,  477 => 311,  473 => 308,  471 => 306,  470 => 304,  469 => 300,  468 => 299,  466 => 296,  460 => 294,  457 => 293,  453 => 290,  451 => 285,  449 => 282,  443 => 280,  440 => 279,  437 => 277,  433 => 275,  431 => 273,  430 => 269,  428 => 266,  421 => 263,  418 => 262,  416 => 261,  413 => 260,  409 => 258,  407 => 256,  406 => 252,  405 => 251,  403 => 249,  398 => 247,  395 => 246,  392 => 245,  390 => 244,  386 => 242,  384 => 240,  383 => 236,  382 => 235,  380 => 233,  374 => 231,  372 => 230,  367 => 227,  365 => 226,  364 => 223,  362 => 219,  356 => 217,  353 => 216,  349 => 213,  347 => 211,  346 => 209,  345 => 205,  344 => 204,  342 => 201,  336 => 199,  333 => 198,  329 => 195,  327 => 193,  326 => 192,  325 => 191,  324 => 187,  323 => 186,  321 => 183,  316 => 181,  313 => 180,  311 => 179,  304 => 174,  302 => 172,  301 => 164,  300 => 162,  293 => 158,  287 => 157,  283 => 156,  279 => 155,  275 => 153,  246 => 129,  242 => 128,  236 => 125,  227 => 119,  224 => 118,  217 => 115,  211 => 112,  208 => 111,  206 => 110,  202 => 108,  200 => 107,  197 => 106,  190 => 103,  184 => 100,  181 => 99,  179 => 98,  175 => 96,  173 => 95,  170 => 94,  164 => 91,  159 => 89,  155 => 87,  153 => 86,  150 => 85,  144 => 82,  140 => 80,  138 => 79,  135 => 78,  129 => 75,  126 => 74,  124 => 73,  121 => 72,  115 => 69,  111 => 67,  109 => 66,  106 => 65,  101 => 62,  99 => 61,  98 => 60,  96 => 59,  93 => 58,  91 => 57,  88 => 56,  86 => 55,  80 => 51,  78 => 48,  74 => 47,  68 => 45,  65 => 44,  61 => 43,  56 => 32,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 35,  42 => 33,  35 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_task.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\form_task.html.twig");
    }
}
