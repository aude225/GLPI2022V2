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

/* components/alerts_macros.html.twig */
class __TwigTemplate_2d7a72233765801cc0a373f5d1ce38bf extends Template
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
        // line 60
        echo "
";
        // line 70
        echo "
";
        // line 80
        echo "
";
        // line 90
        echo "
";
    }

    // line 32
    public function macro_alert($__alert_type__ = "", $__title__ = "", $__messages__ = [], $__icon__ = "", $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "alert_type" => $__alert_type__,
            "title" => $__title__,
            "messages" => $__messages__,
            "icon" => $__icon__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 33
            echo "   <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["alert_type"] ?? null), "html", null, true);
            echo " ";
            echo ((($context["important"] ?? null)) ? ("alert-important") : (""));
            echo "\" role=\"alert\">
      <div class=\"d-flex\">
         <div>
            <i class=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo " fa-2x alert-icon\"></i>
         </div>
         <div>
            ";
            // line 39
            if (twig_length_filter($this->env, ($context["title"] ?? null))) {
                // line 40
                echo "               <h4 class=\"alert-title\">
                  ";
                // line 41
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "
               </h4>
            ";
            }
            // line 44
            echo "            ";
            if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 0)) {
                // line 45
                echo "               <div class=\"text-muted\">
                  ";
                // line 46
                if (twig_test_iterable(($context["messages"] ?? null))) {
                    // line 47
                    echo "                     ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 48
                        echo "                        ";
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                        ";
                        // line 49
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 49)) {
                            echo "<br />";
                        }
                        // line 50
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                  ";
                } else {
                    // line 52
                    echo "                     ";
                    echo twig_escape_filter($this->env, ($context["messages"] ?? null), "html", null, true);
                    echo "
                  ";
                }
                // line 54
                echo "               </div>
            ";
            }
            // line 56
            echo "         </div>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 61
    public function macro_alert_success($__title__ = "", $__messages__ = [], $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "messages" => $__messages__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 62
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_alert", ["success",             // line 64
($context["title"] ?? null),             // line 65
($context["messages"] ?? null), "fas fa-check",             // line 67
($context["important"] ?? null)], 62, $context, $this->getSourceContext());
            // line 68
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_alert_info($__title__ = "", $__messages__ = [], $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "messages" => $__messages__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 72
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_alert", ["info",             // line 74
($context["title"] ?? null),             // line 75
($context["messages"] ?? null), "fas fa-info-circle",             // line 77
($context["important"] ?? null)], 72, $context, $this->getSourceContext());
            // line 78
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 81
    public function macro_alert_warning($__title__ = "", $__messages__ = [], $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "messages" => $__messages__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 82
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_alert", ["warning",             // line 84
($context["title"] ?? null),             // line 85
($context["messages"] ?? null), "fas fa-exclamation-triangle",             // line 87
($context["important"] ?? null)], 82, $context, $this->getSourceContext());
            // line 88
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 91
    public function macro_alert_danger($__title__ = "", $__messages__ = [], $__important__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "messages" => $__messages__,
            "important" => $__important__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 92
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_alert", ["danger",             // line 94
($context["title"] ?? null),             // line 95
($context["messages"] ?? null), "fas fa-exclamation-circle",             // line 97
($context["important"] ?? null)], 92, $context, $this->getSourceContext());
            // line 98
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/alerts_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 98,  284 => 97,  283 => 95,  282 => 94,  280 => 92,  265 => 91,  255 => 88,  253 => 87,  252 => 85,  251 => 84,  249 => 82,  234 => 81,  224 => 78,  222 => 77,  221 => 75,  220 => 74,  218 => 72,  203 => 71,  193 => 68,  191 => 67,  190 => 65,  189 => 64,  187 => 62,  172 => 61,  160 => 56,  156 => 54,  150 => 52,  147 => 51,  133 => 50,  129 => 49,  124 => 48,  106 => 47,  104 => 46,  101 => 45,  98 => 44,  92 => 41,  89 => 40,  87 => 39,  81 => 36,  72 => 33,  55 => 32,  50 => 90,  47 => 80,  44 => 70,  41 => 60,  38 => 31,);
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

{% macro alert(alert_type = \"\", title = \"\", messages = [], icon = \"\", important = false) %}
   <div class=\"alert alert-{{ alert_type }} {{ important ? \"alert-important\" : \"\" }}\" role=\"alert\">
      <div class=\"d-flex\">
         <div>
            <i class=\"{{ icon }} fa-2x alert-icon\"></i>
         </div>
         <div>
            {% if title|length %}
               <h4 class=\"alert-title\">
                  {{ title }}
               </h4>
            {% endif %}
            {% if messages|length > 0 %}
               <div class=\"text-muted\">
                  {% if messages is iterable %}
                     {% for message in messages %}
                        {{ message }}
                        {% if loop.last %}<br />{% endif %}
                     {% endfor %}
                  {% else %}
                     {{ messages }}
                  {% endif %}
               </div>
            {% endif %}
         </div>
      </div>
   </div>
{% endmacro %}

{% macro alert_success(title = \"\", messages = [], important = false) %}
   {{ _self.alert(
      'success',
      title,
      messages,
      \"fas fa-check\",
      important
   ) }}
{% endmacro %}

{% macro alert_info(title = \"\", messages = [], important = false) %}
   {{ _self.alert(
      'info',
      title,
      messages,
      \"fas fa-info-circle\",
      important
   ) }}
{% endmacro %}

{% macro alert_warning(title = \"\", messages = [], important = false) %}
   {{ _self.alert(
      'warning',
      title,
      messages,
      \"fas fa-exclamation-triangle\",
      important
   ) }}
{% endmacro %}

{% macro alert_danger(title = \"\", messages = [], important = false) %}
   {{ _self.alert(
      'danger',
      title,
      messages,
      \"fas fa-exclamation-circle\",
      important
   ) }}
{% endmacro %}
", "components/alerts_macros.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\alerts_macros.html.twig");
    }
}
