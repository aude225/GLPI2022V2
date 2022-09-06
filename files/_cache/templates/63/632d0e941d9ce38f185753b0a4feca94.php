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

/* install/step3.html.twig */
class __TwigTemplate_1d47aa669d4b6f2821eb9799fdca207f extends Template
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
        $macros["alerts"] = $this->macros["alerts"] = $this->loadTemplate("components/alerts_macros.html.twig", "install/step3.html.twig", 32)->unwrap();
        // line 33
        echo "
<h3>";
        // line 34
        echo twig_escape_filter($this->env, __("Test of the connection at the database"), "html", null, true);
        echo "</h3>

";
        // line 36
        if ((((twig_length_filter($this->env, ($context["host"] ?? null)) == 0) || (twig_length_filter($this->env, ($context["user"] ?? null)) == 0)) || twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "connect_error", [], "any", false, false, false, 36))) {
            // line 37
            echo "
   ";
            // line 38
            echo twig_call_macro($macros["alerts"], "macro_alert_danger", [__("Can't connect to the database"), twig_sprintf(__("The server answered: %s"), twig_get_attribute($this->env, $this->source,             // line 40
($context["link"] ?? null), "connect_error", [], "any", false, false, false, 40))], 38, $context, $this->getSourceContext());
            // line 41
            echo "

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         <i class=\"fas fa-chevron-left me-1 fa-2x alert-icon\"></i>
         ";
            // line 46
            echo twig_escape_filter($this->env, __("Back"), "html", null, true);
            echo "
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\">
   </form>
";
        } else {
            // line 53
            echo "   ";
            echo twig_call_macro($macros["alerts"], "macro_alert_success", [__("Database connection successful")], 53, $context, $this->getSourceContext());
            // line 55
            echo "

   ";
            // line 57
            if ( !twig_get_attribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 57)) {
                // line 58
                echo "      ";
                echo twig_call_macro($macros["alerts"], "macro_alert_danger", [__("Database engine is not supported."), twig_get_attribute($this->env, $this->source,                 // line 60
($context["engine_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 60)], 58, $context, $this->getSourceContext());
                // line 61
                echo "
   ";
            }
            // line 63
            echo "
   ";
            // line 64
            if ( !twig_get_attribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 64)) {
                // line 65
                echo "      ";
                echo twig_call_macro($macros["alerts"], "macro_alert_danger", [__("Database configuration is not supported."), twig_get_attribute($this->env, $this->source,                 // line 67
($context["config_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 67)], 65, $context, $this->getSourceContext());
                // line 68
                echo "
   ";
            }
            // line 70
            echo "
   ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 71) && twig_get_attribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 71))) {
                // line 72
                echo "      <div class=\"container mt-4\">
         <form action='install.php' method='post'>
            <div class=\"mb-3\">
               <h3>
                  ";
                // line 76
                echo twig_escape_filter($this->env, (((($context["update"] ?? null) == "no")) ? (__("Please select a database:")) : (__("Please select a database to update:"))), "html", null, true);
                echo "
               </h3>
               <div class=\"form-selectgroup form-selectgroup-boxes d-flex flex-column\">
                  ";
                // line 79
                if ((($context["update"] ?? null) == "no")) {
                    // line 80
                    echo "                     <label class=\"form-selectgroup-item flex-fill\">
                        <input type=\"radio\" name=\"databasename\" value=\"0\" class=\"form-selectgroup-input\" checked=\"checked\">
                        <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                           <div class=\"me-3\">
                              <span class=\"form-selectgroup-check\"></span>
                           </div>
                           <div>
                              <label for=\"new_db\" class=\"form-label\">
                                 ";
                    // line 88
                    echo twig_escape_filter($this->env, __("Create a new database or use an existing one:"), "html", null, true);
                    echo "
                              </label>
                              <input type=\"text\" name=\"newdatabasename\" id=\"new_db\" class=\"form-control\" autofocus>
                           </div>
                        </div>
                     </label>
                  ";
                }
                // line 95
                echo "
                  ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["databases"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 97
                    echo "                     <label class=\"form-selectgroup-item flex-fill\">
                        <input type=\"radio\" name=\"databasename\" value=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $context["database"], "html", null, true);
                    echo "\" class=\"form-selectgroup-input\">
                        <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                           <div class=\"me-3\">
                              <span class=\"form-selectgroup-check\"></span>
                           </div>
                           <div>
                              ";
                    // line 104
                    echo twig_escape_filter($this->env, $context["database"], "html", null, true);
                    echo "
                           </div>
                        </div>
                     </label>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "               </div>
            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
               ";
                // line 113
                echo twig_escape_filter($this->env, __("Continue"), "html", null, true);
                echo "
               <i class=\"fas fa-chevron-right ms-1\"></i>
            </button>

            ";
                // line 117
                if ((($context["update"] ?? null) == "no")) {
                    // line 118
                    echo "               <input type=\"hidden\" name=\"install\" value=\"Etape_3\">
            ";
                } else {
                    // line 120
                    echo "               <input type=\"hidden\" name=\"install\" value=\"update_1\">
            ";
                }
                // line 122
                echo "
            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 123
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\">
         </form>
      </div>
   ";
            }
        }
    }

    public function getTemplateName()
    {
        return "install/step3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 123,  200 => 122,  196 => 120,  192 => 118,  190 => 117,  183 => 113,  177 => 109,  166 => 104,  157 => 98,  154 => 97,  150 => 96,  147 => 95,  137 => 88,  127 => 80,  125 => 79,  119 => 76,  113 => 72,  111 => 71,  108 => 70,  104 => 68,  102 => 67,  100 => 65,  98 => 64,  95 => 63,  91 => 61,  89 => 60,  87 => 58,  85 => 57,  81 => 55,  78 => 53,  72 => 50,  65 => 46,  58 => 41,  56 => 40,  55 => 38,  52 => 37,  50 => 36,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 # GLPI - Gestionnaire Libre de Parc Informatique
 # Copyright (C) 2015-2022 Teclib' and contributors.
 #
 # http://glpi-project.org
 #
 # based on GLPI - Gestionnaire Libre de Parc Informatique
 # Copyright (C) 2003-2014 by the INDEPNET Development Team.
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # GLPI is free software; you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation; either version 2 of the License, or
 # (at your option) any later version.
 #
 # GLPI is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with GLPI. If not, see <http://www.gnu.org/licenses/>.
 # ---------------------------------------------------------------------
 #}

{% import 'components/alerts_macros.html.twig' as alerts %}

<h3>{{ __('Test of the connection at the database') }}</h3>

{% if host|length == 0 or user|length == 0 or link.connect_error %}

   {{ alerts.alert_danger(
      __(\"Can't connect to the database\"),
      __('The server answered: %s')|format(link.connect_error)
   ) }}

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         <i class=\"fas fa-chevron-left me-1 fa-2x alert-icon\"></i>
         {{ __(\"Back\") }}
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\">
   </form>
{% else %}
   {{ alerts.alert_success(
      __('Database connection successful'),
   ) }}

   {% if not engine_requirement.isValidated() %}
      {{ alerts.alert_danger(
         __('Database engine is not supported.'),
         engine_requirement.getValidationMessages()
      ) }}
   {% endif %}

   {% if not config_requirement.isValidated() %}
      {{ alerts.alert_danger(
         __('Database configuration is not supported.'),
         config_requirement.getValidationMessages()
      ) }}
   {% endif %}

   {% if engine_requirement.isValidated() and config_requirement.isValidated() %}
      <div class=\"container mt-4\">
         <form action='install.php' method='post'>
            <div class=\"mb-3\">
               <h3>
                  {{ update == \"no\" ? __('Please select a database:') : __('Please select a database to update:') }}
               </h3>
               <div class=\"form-selectgroup form-selectgroup-boxes d-flex flex-column\">
                  {% if update == \"no\" %}
                     <label class=\"form-selectgroup-item flex-fill\">
                        <input type=\"radio\" name=\"databasename\" value=\"0\" class=\"form-selectgroup-input\" checked=\"checked\">
                        <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                           <div class=\"me-3\">
                              <span class=\"form-selectgroup-check\"></span>
                           </div>
                           <div>
                              <label for=\"new_db\" class=\"form-label\">
                                 {{ __('Create a new database or use an existing one:') }}
                              </label>
                              <input type=\"text\" name=\"newdatabasename\" id=\"new_db\" class=\"form-control\" autofocus>
                           </div>
                        </div>
                     </label>
                  {% endif %}

                  {% for database in databases %}
                     <label class=\"form-selectgroup-item flex-fill\">
                        <input type=\"radio\" name=\"databasename\" value=\"{{ database }}\" class=\"form-selectgroup-input\">
                        <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                           <div class=\"me-3\">
                              <span class=\"form-selectgroup-check\"></span>
                           </div>
                           <div>
                              {{ database }}
                           </div>
                        </div>
                     </label>
                  {% endfor %}
               </div>
            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
               {{ __(\"Continue\") }}
               <i class=\"fas fa-chevron-right ms-1\"></i>
            </button>

            {% if update == \"no\" %}
               <input type=\"hidden\" name=\"install\" value=\"Etape_3\">
            {% else %}
               <input type=\"hidden\" name=\"install\" value=\"update_1\">
            {% endif %}

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\">
         </form>
      </div>
   {% endif %}
{% endif %}
", "install/step3.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\step3.html.twig");
    }
}
