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

/* layout/parts/page_header.html.twig */
class __TwigTemplate_e2fe678db6f19db10108416ec22b0aa6 extends Template
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
        $context["is_vertical"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "vertical");
        // line 33
        echo "
<body class=\"";
        // line 34
        echo ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu") && ($context["is_vertical"] ?? null))) ? ("navbar-collapsed") : (""));
        echo " ";
        echo ((($context["is_vertical"] ?? null)) ? ("vertical-layout") : ("horizontal-layout"));
        echo " ";
        echo ((($context["is_debug_active"] ?? null)) ? ("debug-active") : (""));
        echo "\">
   ";
        // line 35
        echo twig_include($this->env, $context, "layout/parts/impersonate_banner.html.twig");
        echo "
   ";
        // line 36
        echo twig_include($this->env, $context, "components/messages_after_redirect_toasts.html.twig");
        echo "

   <div class=\"page\">

      ";
        // line 40
        if (($context["is_vertical"] ?? null)) {
            // line 41
            echo "      <aside class=\"navbar navbar-vertical navbar-expand-lg sticky-top sidebar\">
         <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
               <span class=\"navbar-toggler-icon\"></span>
            </button>

            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "\" accesskey=\"1\" title=\"";
            echo twig_escape_filter($this->env, __("Home"), "html", null, true);
            echo "\"
               class=\"navbar-brand navbar-brand-autodark\">
               <span class=\"glpi-logo\"></span>
            </a>

            ";
            // line 52
            echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
            echo "

            <div class=\"d-lg-none\">
               ";
            // line 55
            echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
            echo "
            </div>

            <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
               ";
            // line 59
            echo twig_include($this->env, $context, "layout/parts/menu.html.twig");
            echo "

               <p class=\"text-start\">
                  <button class=\"btn btn-sm btn-ghost-secondary mb-2 reduce-menu d-none d-md-block\">
                     <span class=\"menu-label\">";
            // line 63
            echo twig_escape_filter($this->env, __("Collapse menu"), "html", null, true);
            echo "</span>
                  </button>
               </p>
            </div>
         </div>
      </aside>
      ";
        }
        // line 70
        echo "
      <header class=\"navbar d-print-none sticky-lg-top shadow-sm ";
        // line 71
        echo ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "vertical")) ? ("navbar-light navbar-expand-md") : ("navbar-dark navbar-expand-xl topbar"));
        echo "\">
         <div class=\"container-fluid flex-nowrap pe-0\">
            ";
        // line 73
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "vertical")) {
            // line 74
            echo "               ";
            echo twig_include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            echo "

               <div class=\"ms-md-auto d-none d-md-block flex-grow-1 flex-md-grow-0\">
                  ";
            // line 77
            echo twig_include($this->env, $context, "layout/parts/global_search_form.html.twig");
            echo "
               </div>
            ";
        } elseif (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "horizontal")) {
            // line 80
            echo "               <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
                  <span class=\"navbar-toggler-icon\"></span>
               </button>

               <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "\" accesskey=\"1\" title=\"";
            echo twig_escape_filter($this->env, __("Home"), "html", null, true);
            echo "\"
                  class=\"navbar-brand navbar-brand-autodark\">
                  <span class=\"glpi-logo\"></span>
               </a>

               <div class=\"d-lg-none\">
                  ";
            // line 90
            echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
            echo "
               </div>

               <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbar-menu\">
                  ";
            // line 94
            echo twig_include($this->env, $context, "layout/parts/menu.html.twig");
            echo "
                  <span class=\"ms-2 mt-2\">
                     ";
            // line 96
            echo twig_include($this->env, $context, "layout/parts/goto_button.html.twig");
            echo "
                  </span>
               </div>
            ";
        }
        // line 100
        echo "
            <div class=\"ms-md-4 d-none d-lg-block\">
               ";
        // line 102
        echo twig_include($this->env, $context, "layout/parts/user_header.html.twig");
        echo "
            </div>
         </div>
      </header>

      ";
        // line 107
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout") == "horizontal")) {
            // line 108
            echo "      <div class=\"navbar navbar-expand-md navbar-light secondary-bar sticky-md-top shadow-sm\">
         <div class=\"container-fluid justify-content-start\">
            ";
            // line 110
            echo twig_include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            echo "
            <div class=\"ms-md-auto d-none d-md-block flex-grow-1 flex-md-grow-0\">
               ";
            // line 112
            echo twig_include($this->env, $context, "layout/parts/global_search_form.html.twig");
            echo "
            </div>
         </div>
      </div>
      ";
        }
        // line 117
        echo "
      <div class=\"page-wrapper mb-0\">
         <div class=\"page-body container-fluid\">
            <main role=\"main\" id=\"page\" class=\"legacy\">
";
    }

    public function getTemplateName()
    {
        return "layout/parts/page_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 117,  196 => 112,  191 => 110,  187 => 108,  185 => 107,  177 => 102,  173 => 100,  166 => 96,  161 => 94,  154 => 90,  143 => 84,  137 => 80,  131 => 77,  124 => 74,  122 => 73,  117 => 71,  114 => 70,  104 => 63,  97 => 59,  90 => 55,  84 => 52,  74 => 47,  66 => 41,  64 => 40,  57 => 36,  53 => 35,  45 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/page_header.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\parts\\page_header.html.twig");
    }
}
