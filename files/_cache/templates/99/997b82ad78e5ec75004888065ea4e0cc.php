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

/* install/step2.html.twig */
class __TwigTemplate_5b70e8d437872d3546efde62a0007a3a extends Template
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
<h3>";
        // line 32
        echo twig_escape_filter($this->env, __("Database connection setup"), "html", null, true);
        echo "</h3>

<form action=\"install.php\" method=\"post\" data-submit-once>

   <div class=\"mb-3\">
      <label for=\"db_host\" class=\"form-label\">";
        // line 37
        echo twig_escape_filter($this->env, __("SQL server (MariaDB or MySQL)"), "html", null, true);
        echo "</label>
      <input type=\"text\" class=\"form-control\" id=\"db_host\" name=\"db_host\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_user\" class=\"form-label\">";
        // line 42
        echo twig_escape_filter($this->env, __("SQL user"), "html", null, true);
        echo "</label>
      <input type=\"text\" class=\"form-control\" id=\"db_user\" name=\"db_user\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_pass\" class=\"form-label\">";
        // line 47
        echo twig_escape_filter($this->env, __("SQL password"), "html", null, true);
        echo "</label>
      <input type=\"password\" class=\"form-control\" id=\"db_pass\" name=\"db_pass\">
   </div>

   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 52
        echo twig_escape_filter($this->env, __("Continue"), "html", null, true);
        echo "
      <i class=\"fas fa-chevron-right ms-1\"></i>
   </button>

   <input type=\"hidden\" name=\"update\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["update"] ?? null), "html", null, true);
        echo "\">
   <input type=\"hidden\" name=\"install\" value=\"Etape_2\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "install/step2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 58,  79 => 56,  72 => 52,  64 => 47,  56 => 42,  48 => 37,  40 => 32,  37 => 31,);
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

<h3>{{ __('Database connection setup') }}</h3>

<form action=\"install.php\" method=\"post\" data-submit-once>

   <div class=\"mb-3\">
      <label for=\"db_host\" class=\"form-label\">{{ __('SQL server (MariaDB or MySQL)') }}</label>
      <input type=\"text\" class=\"form-control\" id=\"db_host\" name=\"db_host\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_user\" class=\"form-label\">{{ __('SQL user') }}</label>
      <input type=\"text\" class=\"form-control\" id=\"db_user\" name=\"db_user\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_pass\" class=\"form-label\">{{ __('SQL password') }}</label>
      <input type=\"password\" class=\"form-control\" id=\"db_pass\" name=\"db_pass\">
   </div>

   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      {{ __(\"Continue\") }}
      <i class=\"fas fa-chevron-right ms-1\"></i>
   </button>

   <input type=\"hidden\" name=\"update\" value=\"{{ update }}\">
   <input type=\"hidden\" name=\"install\" value=\"Etape_2\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\">
</form>
", "install/step2.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\install\\step2.html.twig");
    }
}
