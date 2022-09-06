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

/* pages/setup/setup_notifications.html.twig */
class __TwigTemplate_4b33ad507452590ec0a2ae028ad3b0df extends Template
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
        if ((($context["can_update_config"] ?? null) || ($context["has_active_mode"] ?? null))) {
            // line 33
            echo "   <div class=\"container\">
      <div class=\"row justify-content-evenly\">
      ";
            // line 35
            if (($context["can_update_config"] ?? null)) {
                // line 36
                echo "         <div class=\"card col-12 col-lg-5\">
            <form method=\"POST\" action=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/setup.notification.php"), "html", null, true);
                echo "\" data-submit-once>
               <div class=\"card-header\">
                  <h3>";
                // line 39
                echo twig_escape_filter($this->env, __("Notifications configuration"), "html", null, true);
                echo "</h3>
               </div>

               ";
                // line 42
                if ((($context["use_notifications"] ?? null) &&  !($context["has_active_mode"] ?? null))) {
                    // line 43
                    echo "                  <div class=\"alert alert-important alert-warning m-3\">
                     <i class=\"fa fa-exclamation-triangle me-2\"></i>
                     ";
                    // line 45
                    echo twig_escape_filter($this->env, __("You must enable at least one notification mode."), "html", null, true);
                    echo "
                  </div>
               ";
                }
                // line 48
                echo "
               <ul class=\"list-group list-group-flush\">
                  <li class=\"list-group-item\">
                     <div class=\"form-check form-switch\">
                        <input name=\"use_notifications\" type=\"hidden\" value=\"0\" />
                        <input name=\"use_notifications\" id=\"use_notifications\"
                              class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                              ";
                // line 55
                echo ((($context["use_notifications"] ?? null)) ? ("checked=\"checked\"") : (""));
                echo " />
                        <label class=\"form-check-label\" for=\"use_notifications\">
                           ";
                // line 57
                echo twig_escape_filter($this->env, __("Enable followup"), "html", null, true);
                echo "
                        </label>
                     </div>
                  </li>
                  ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
                foreach ($context['_seq'] as $context["mode_key"] => $context["mode"]) {
                    // line 62
                    echo "                     ";
                    $context["mode_disabled"] =  !($context["use_notifications"] ?? null);
                    // line 63
                    echo "                     <li class=\"list-group-item ";
                    echo ((($context["mode_disabled"] ?? null)) ? ("disabled") : (""));
                    echo "\">
                        <div class=\"form-check form-switch\">
                           <input name=\"notifications_";
                    // line 65
                    echo twig_escape_filter($this->env, $context["mode_key"], "html", null, true);
                    echo "\" type=\"hidden\" value=\"0\" />
                           <input name=\"notifications_";
                    // line 66
                    echo twig_escape_filter($this->env, $context["mode_key"], "html", null, true);
                    echo "\" id=\"notifications_";
                    echo twig_escape_filter($this->env, $context["mode_key"], "html", null, true);
                    echo "\"
                                 class=\"form-check-input\" type=\"checkbox\" value=\"1\"
                                 ";
                    // line 68
                    echo (((($__internal_compile_0 = $context["mode"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["is_active"] ?? null) : null)) ? ("checked=\"checked\"") : (""));
                    echo "
                                 ";
                    // line 69
                    echo ((($context["mode_disabled"] ?? null)) ? ("disabled") : (""));
                    echo " />
                           <label class=\"form-check-label\" for=\"notifications_";
                    // line 70
                    echo twig_escape_filter($this->env, $context["mode_key"], "html", null, true);
                    echo "\">
                              ";
                    // line 71
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["mode"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["label"] ?? null) : null), "html", null, true);
                    echo "
                           </label>
                        </div>
                     </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode_key'], $context['mode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "               </ul>

               <div class=\"card-footer\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 81
                echo twig_escape_filter($this->env, __("Save"), "html", null, true);
                echo "</span>
                  </button>
               </div>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 85
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
            </form>
         </div>
      ";
            }
            // line 89
            echo "
      ";
            // line 90
            if ((($context["use_notifications"] ?? null) && ($context["has_active_mode"] ?? null))) {
                // line 91
                echo "         <div class=\"card col-12 col-lg-5 mt-4 mt-lg-0\">
            <div class=\"card-header\">
               <h3>";
                // line 93
                echo twig_escape_filter($this->env, _n("Notification", "Notifications", Session::getPluralNumber()), "html", null, true);
                echo "</h3>
            </div>

            <div class=\"list-group list-group-flush\">
               ";
                // line 97
                if (Session::haveRight("config", twig_constant("READ"))) {
                    // line 98
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/notificationtemplate.php"), "html", null, true);
                    echo "\" class=\"list-group-item list-group-item-action\">
                     <i class=\"fa-fw ti ti-template\"></i>
                     <span>";
                    // line 100
                    echo twig_escape_filter($this->env, _n("Notification template", "Notification templates", Session::getPluralNumber()), "html", null, true);
                    echo "</span>
                  </a>
               ";
                }
                // line 103
                echo "
               ";
                // line 104
                if (Session::haveRight("notification", twig_constant("READ"))) {
                    // line 105
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/notification.php"), "html", null, true);
                    echo "\" class=\"list-group-item list-group-item-action\">
                     <i class=\"fa-fw ti ti-bell \"></i>
                     <span>";
                    // line 107
                    echo twig_escape_filter($this->env, _n("Notification", "Notifications", Session::getPluralNumber()), "html", null, true);
                    echo "</span>
                  </a>
               ";
                } else {
                    // line 110
                    echo "                  <div class=\"list-group-item\">
                     <div class=\"alert alert-important alert-warning m-3\">
                        <i class=\"fa-fw ti ti-alert-triangle me-2\"></i>
                        ";
                    // line 113
                    echo twig_escape_filter($this->env, __("Unable to configure notifications: please configure at least one followup type using the above configuration."), "html", null, true);
                    echo "
                     </div>
                  </div>
               ";
                }
                // line 117
                echo "
               ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                    // line 119
                    echo "                  ";
                    if ((($context["can_update_config"] ?? null) && (($__internal_compile_2 = $context["mode"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["is_active"] ?? null) : null))) {
                        // line 120
                        echo "                     <a href=\"";
                        echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["mode"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["setting_url"] ?? null) : null), "html", null, true);
                        echo "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fa-fw ";
                        // line 121
                        echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["mode"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["icon"] ?? null) : null), "html", null, true);
                        echo "\"></i>
                        <span>";
                        // line 122
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["mode"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["label_settings"] ?? null) : null), "html", null, true);
                        echo "</span>
                     </a>
                  ";
                    }
                    // line 125
                    echo "               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "            </div>

         </div
      ";
            }
            // line 130
            echo "      </div>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/setup/setup_notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 130,  253 => 126,  247 => 125,  241 => 122,  237 => 121,  232 => 120,  229 => 119,  225 => 118,  222 => 117,  215 => 113,  210 => 110,  204 => 107,  198 => 105,  196 => 104,  193 => 103,  187 => 100,  181 => 98,  179 => 97,  172 => 93,  168 => 91,  166 => 90,  163 => 89,  156 => 85,  149 => 81,  142 => 76,  131 => 71,  127 => 70,  123 => 69,  119 => 68,  112 => 66,  108 => 65,  102 => 63,  99 => 62,  95 => 61,  88 => 57,  83 => 55,  74 => 48,  68 => 45,  64 => 43,  62 => 42,  56 => 39,  51 => 37,  48 => 36,  46 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/setup_notifications.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\setup\\setup_notifications.html.twig");
    }
}
