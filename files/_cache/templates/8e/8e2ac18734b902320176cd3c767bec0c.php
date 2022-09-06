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

/* components/itilobject/actors/main.html.twig */
class __TwigTemplate_5df545cd8b005c8f214a87709782ee88 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/actors/main.html.twig", 32)->unwrap();
        // line 33
        echo "
";
        // line 34
        if ( !array_key_exists("display_actortypes", $context)) {
            // line 35
            echo "   ";
            $context["display_actortypes"] = [0 => "requester", 1 => "observer", 2 => "assign"];
        }
        // line 37
        if ( !array_key_exists("display_labels", $context)) {
            // line 38
            echo "   ";
            $context["display_labels"] = true;
        }
        // line 40
        echo "
";
        // line 41
        $context["actor_options"] = twig_array_merge(($context["field_options"] ?? null), ["is_horizontal" => false, "add_field_class" => ((        // line 43
($context["is_expanded"] ?? null)) ? ("col-sm-4") : (""))]);
        // line 45
        $context["can_admin"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canAdminActors", [], "method", false, false, false, 45);
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 46)) {
            // line 47
            echo "   ";
            $context["can_admin"] = true;
        }
        // line 50
        echo "
";
        // line 52
        echo "
";
        // line 53
        if ((twig_in_filter("requester", ($context["display_actortypes"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_users_id_requester"], "method", false, false, false, 53) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_groups_id_requester"], "method", false, false, false, 53)))) {
            // line 54
            echo "   ";
            ob_start(function () { return ''; });
            // line 55
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>             // line 56
($context["item"] ?? null), "actortypeint" => twig_constant("CommonITILActor::REQUESTER"), "actortype" => "requester", "entities_id" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,             // line 59
($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["entities_id"] ?? null) : null), "itiltemplate" =>             // line 60
($context["itiltemplate"] ?? null), "params" =>             // line 61
($context["params"] ?? null), "canupdate" =>             // line 62
($context["canupdate"] ?? null), "disable_assign_to_me" => ((            // line 63
$context["disable_assign_to_me"]) ?? (false)), "main_rand" =>             // line 64
($context["main_rand"] ?? null)], false);
            // line 65
            echo "
   ";
            $context["requester_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            echo "   ";
            if (($context["display_labels"] ?? null)) {
                // line 68
                echo "      ";
                echo twig_call_macro($macros["fields"], "macro_field", ["requester",                 // line 70
($context["requester_field"] ?? null), _n("Requester", "Requesters", 1), twig_array_merge(                // line 72
($context["actor_options"] ?? null), ["required" => (twig_get_attribute($this->env, $this->source,                 // line 73
($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_users_id_requester"], "method", false, false, false, 73) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_groups_id_requester"], "method", false, false, false, 73))])], 68, $context, $this->getSourceContext());
                // line 75
                echo "
   ";
            } else {
                // line 77
                echo "      ";
                echo twig_escape_filter($this->env, ($context["requester_field"] ?? null), "html", null, true);
                echo "
   ";
            }
        }
        // line 80
        echo "
";
        // line 81
        if ((twig_in_filter("observer", ($context["display_actortypes"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_users_id_observer"], "method", false, false, false, 81) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_groups_id_observer"], "method", false, false, false, 81)))) {
            // line 82
            echo "   ";
            ob_start(function () { return ''; });
            // line 83
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>             // line 84
($context["item"] ?? null), "actortypeint" => twig_constant("CommonITILActor::OBSERVER"), "actortype" => "observer", "entities_id" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 87
($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["entities_id"] ?? null) : null), "itiltemplate" =>             // line 88
($context["itiltemplate"] ?? null), "params" =>             // line 89
($context["params"] ?? null), "canupdate" =>             // line 90
($context["canupdate"] ?? null), "disable_assign_to_me" => ((            // line 91
$context["disable_assign_to_me"]) ?? (false)), "main_rand" =>             // line 92
($context["main_rand"] ?? null)], false);
            // line 93
            echo "
   ";
            $context["observer_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 95
            echo "   ";
            if (($context["display_labels"] ?? null)) {
                // line 96
                echo "      ";
                echo twig_call_macro($macros["fields"], "macro_field", ["observer",                 // line 98
($context["observer_field"] ?? null), __("Observer"), twig_array_merge(                // line 100
($context["actor_options"] ?? null), ["required" => (twig_get_attribute($this->env, $this->source,                 // line 101
($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_users_id_observer"], "method", false, false, false, 101) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_groups_id_observer"], "method", false, false, false, 101))])], 96, $context, $this->getSourceContext());
                // line 103
                echo "
   ";
            } else {
                // line 105
                echo "      ";
                echo twig_escape_filter($this->env, ($context["observer_field"] ?? null), "html", null, true);
                echo "
   ";
            }
        }
        // line 108
        echo "
";
        // line 109
        if ((twig_in_filter("assign", ($context["display_actortypes"] ?? null)) && (( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_users_id_assign"], "method", false, false, false, 109) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_groups_id_assign"], "method", false, false, false, 109)) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_supplier_id_assign"], "method", false, false, false, 109)))) {
            // line 110
            echo "   ";
            ob_start(function () { return ''; });
            // line 111
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>             // line 112
($context["item"] ?? null), "actortypeint" => twig_constant("CommonITILActor::ASSIGN"), "actortype" => "assign", "users_right" => "own_ticket", "entities_id" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,             // line 116
($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["entities_id"] ?? null) : null), "itiltemplate" =>             // line 117
($context["itiltemplate"] ?? null), "params" =>             // line 118
($context["params"] ?? null), "canupdate" => (            // line 119
($context["canupdate"] ?? null) || ($context["canassign"] ?? null)), "disable_assign_to_me" => ((            // line 120
$context["disable_assign_to_me"]) ?? (false)), "main_rand" =>             // line 121
($context["main_rand"] ?? null)], false);
            // line 122
            echo "
   ";
            $context["assign_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            echo "   ";
            if (($context["display_labels"] ?? null)) {
                // line 125
                echo "      ";
                echo twig_call_macro($macros["fields"], "macro_field", ["assign",                 // line 127
($context["assign_field"] ?? null), __("Assigned to"), twig_array_merge(                // line 129
($context["actor_options"] ?? null), ["required" => ((twig_get_attribute($this->env, $this->source,                 // line 130
($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_users_id_assign"], "method", false, false, false, 130) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_groups_id_assign"], "method", false, false, false, 130)) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_supplier_id_assign"], "method", false, false, false, 130))])], 125, $context, $this->getSourceContext());
                // line 132
                echo "
   ";
            } else {
                // line 134
                echo "      ";
                echo twig_escape_filter($this->env, ($context["assign_field"] ?? null), "html", null, true);
                echo "
   ";
            }
        }
        // line 137
        echo "
<input type=\"hidden\" name=\"_actors\" id=\"_actors\" />

";
        // line 141
        echo "<div class=\"modal fade\" id=\"editActorNotifySettings\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h5 class=\"modal-title\">
            <i class=\"fas fa-envelope\"></i>
            &nbsp;";
        // line 147
        echo twig_escape_filter($this->env, __("Edit notification settings"), "html", null, true);
        echo "
         </h5>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 149
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
         <div class=\"mb-3\">
            <label class=\"form-label\" for=\"actorname\">";
        // line 153
        echo twig_escape_filter($this->env, __("Actor"), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" id=\"actorname\" name=\"actorname\" />
            <input type=\"hidden\" name=\"actortype\" value=\"\" />
            <input type=\"hidden\" name=\"actorindex\" value=\"\" />
         </div>
         <div class=\"mb-3\">
            <label for=\"alternative_email\" class=\"form-label\">";
        // line 159
        echo twig_escape_filter($this->env, __("Email address"), "html", null, true);
        echo "</label>
            <div class=\"form-check form-switch\">
               <input class=\"form-check-input\" type=\"checkbox\" id=\"use_notification\" name=\"use_notification\" />
               <label class=\"form-check-label\" for=\"use_notification\">";
        // line 162
        echo twig_escape_filter($this->env, __("Email followup"), "html", null, true);
        echo "</label>
            </div>
            <input type=\"email\" class=\"form-control\" id=\"alternative_email\" name=\"alternative_email\" />
         </div>
      </div>
      <div class=\"modal-footer\">
         <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"ti ti-x\"></i>
            <span>";
        // line 170
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "<span>
         </button>
         <button type=\"button\" class=\"btn btn-primary\" id=\"saveActorNotifySettings\">
            <i class=\"far fa-save\"></i>
            <span>";
        // line 174
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo "</span>
         </button>
      </div>
    </div>
  </div>
</div>

";
        // line 181
        $context["actortypes"] = ["requester" => twig_constant("CommonITILActor::REQUESTER"), "observer" => twig_constant("CommonITILActor::OBSERVER"), "assign" => twig_constant("CommonITILActor::ASSIGN")];
        // line 186
        echo "
<script type=\"text/javascript\">
   /* global bootstrap */
   var editActorNotifySettings_modal = null;
   \$(function () {
      editActorNotifySettings_modal = new bootstrap.Modal(document.getElementById('editActorNotifySettings'), {});
   });

   var actors = {
      ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actortypes"] ?? null));
        foreach ($context['_seq'] as $context["actortype"] => $context["actortypeint"]) {
            // line 196
            echo "         ";
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo ": [
            ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [0 => $context["actortypeint"], 1 => ($context["params"] ?? null)], "method", false, false, false, 197));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 198
                echo "            {
               itemtype: \"";
                // line 199
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["actor"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["itemtype"] ?? null) : null), "html", null, true);
                echo "\",
               items_id: \"";
                // line 200
                echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["actor"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["items_id"] ?? null) : null), "html", null, true);
                echo "\",
               ";
                // line 201
                if (twig_get_attribute($this->env, $this->source, $context["actor"], "use_notification", [], "array", true, true, false, 201)) {
                    // line 202
                    echo "                  use_notification: \"";
                    echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["actor"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["use_notification"] ?? null) : null), "html", null, true);
                    echo "\",
               ";
                }
                // line 204
                echo "               ";
                if (twig_get_attribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 204)) {
                    // line 205
                    echo "                  alternative_email: \"";
                    echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["actor"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["alternative_email"] ?? null) : null), "html", null, true);
                    echo "\",
               ";
                }
                // line 207
                echo "            },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "         ],
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actortype'], $context['actortypeint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "   };

   // edit email preference when .edit-notify-user button is activated
   function openNotifyModal(event) {
      event.stopPropagation();

      var element = \$(event.target).closest('.actor_entry');
      var itemtype  = element.data('itemtype');
      var items_id  = element.data('items-id');
      var actortype = element.data('actortype');
      var text      = element.data('text');

      var actorIndex = actors[actortype].findIndex(element => (element.itemtype == itemtype && element.items_id == items_id));
      var actor      = actors[actortype][actorIndex];

      var modal = \$('#editActorNotifySettings');
      modal.find(\"input[name=actortype]\").val(actortype);
      modal.find(\"input[name=actorindex]\").val(actorIndex);
      modal.find(\"input[name=actorname]\").removeAttr('readonly').val(text).attr('readonly', 'true');
      modal.find(\"input[name=use_notification]\").prop('checked', parseInt(actor.use_notification));
      modal.find(\"input[name=alternative_email]\").val(actor.alternative_email);

      editActorNotifySettings_modal.show();
   }

   // save edited actor when clicking on save button
   \$(document).on('click', '#saveActorNotifySettings', function(event) {
      saveNotificationSettings();
   });

   // prevent submit on enter key in modal (but save notification settings)
   \$(document).on('keyup keypress', '#editActorNotifySettings input', function(event) {
      var keyCode = event.keyCode || event.which;
      if (keyCode === 13) {
         event.preventDefault();
         saveNotificationSettings();
         return false;
      }
   });

   // save settings from modal (get modal data, and serialize them into input hidden)
   function saveNotificationSettings() {
      var modal = \$('#editActorNotifySettings');
      var actortype  = modal.find(\"input[name=actortype]\").val();
      var actorIndex = modal.find(\"input[name=actorindex]\").val();
      var use_notif  = (modal.find(\"input[name=use_notification]\").is(\":checked\") ? 1 : 0);
      var alt_email  = modal.find(\"input[name=alternative_email]\").val();

      var actor = actors[actortype][actorIndex];
      actor.use_notification = use_notif;
      actor.alternative_email = alt_email;

      // update notif setting icon for actor
      var fa_class = \"far\";
      if (use_notif) {
         fa_class = \"fas\";
      }

      var actor_entry = \$('.actor_entry[data-itemtype='+actor.itemtype+'][data-items-id='+actor.items_id+'][data-actortype='+actortype+']');

      // toggle notify icon
      actor_entry.find('.notify-icon')
         .removeClass('fas far')
         .addClass(fa_class);

      // toggle text for direct email
      if (actor.itemtype == \"User\" && parseInt(actor.items_id) == 0) {
         actor_entry.find('.actor_text').html(alt_email);
      }


      editActorNotifySettings_modal.hide();
      saveActorsToDom();
   }

   // save actors object to dom
   function saveActorsToDom() {
      \$('#_actors').val(JSON.stringify(actors));
   }
   saveActorsToDom();
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/actors/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 211,  329 => 209,  322 => 207,  316 => 205,  313 => 204,  307 => 202,  305 => 201,  301 => 200,  297 => 199,  294 => 198,  290 => 197,  285 => 196,  281 => 195,  270 => 186,  268 => 181,  258 => 174,  251 => 170,  240 => 162,  234 => 159,  225 => 153,  218 => 149,  213 => 147,  205 => 141,  200 => 137,  193 => 134,  189 => 132,  187 => 130,  186 => 129,  185 => 127,  183 => 125,  180 => 124,  176 => 122,  174 => 121,  173 => 120,  172 => 119,  171 => 118,  170 => 117,  169 => 116,  168 => 112,  166 => 111,  163 => 110,  161 => 109,  158 => 108,  151 => 105,  147 => 103,  145 => 101,  144 => 100,  143 => 98,  141 => 96,  138 => 95,  134 => 93,  132 => 92,  131 => 91,  130 => 90,  129 => 89,  128 => 88,  127 => 87,  126 => 84,  124 => 83,  121 => 82,  119 => 81,  116 => 80,  109 => 77,  105 => 75,  103 => 73,  102 => 72,  101 => 70,  99 => 68,  96 => 67,  92 => 65,  90 => 64,  89 => 63,  88 => 62,  87 => 61,  86 => 60,  85 => 59,  84 => 56,  82 => 55,  79 => 54,  77 => 53,  74 => 52,  71 => 50,  67 => 47,  65 => 46,  63 => 45,  61 => 43,  60 => 41,  57 => 40,  53 => 38,  51 => 37,  47 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/actors/main.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\actors\\main.html.twig");
    }
}
