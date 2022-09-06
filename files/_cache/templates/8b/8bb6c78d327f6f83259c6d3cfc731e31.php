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

/* components/search/controls.html.twig */
class __TwigTemplate_6415bc8ea112a7224b40eafc41fc55c7 extends Template
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
<div class=\"d-inline-flex search-controls\">
   ";
        // line 33
        if ((($context["showmassiveactions"] ?? null) && (($context["count"] ?? null) > 0))) {
            // line 34
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [0 => ($context["massiveactionparams"] ?? null)]);
            // line 35
            echo "   ";
        }
        // line 36
        echo "
   ";
        // line 37
        if ((($context["may_be_located"] ?? null) && ((($context["count"] ?? null) > 0) || ((($__internal_compile_0 = (($__internal_compile_1 = ($context["data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["search"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["as_map"] ?? null) : null) == 1)))) {
            // line 38
            echo "      <label class=\"form-check form-switch btn btn-sm btn-ghost-info me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 39
            echo twig_escape_filter($this->env, __("Show as map"), "html", null, true);
            echo "\">
         <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0\" role=\"button\"
                name=\"as_map\" value=\"1\" autocomplete=\"off\"
                onclick=\"toogle('as_map','','',''); document.forms['searchform";
            // line 42
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["itemtype"] ?? null)), "html", null, true);
            echo "'].submit();\"
                ";
            // line 43
            echo ((((($__internal_compile_2 = (($__internal_compile_3 = ($context["data"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["search"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["as_map"] ?? null) : null) == 1)) ? ("checked") : (""));
            echo " />
         <span class=\"form-check-label mb-1 mb-sm-0\">
            <i class=\"ti fa-lg ti-map-2\"></i>
         </span >
      </label>
   ";
        }
        // line 49
        echo "
   ";
        // line 50
        if (($context["may_be_browsed"] ?? null)) {
            // line 51
            echo "      <label class=\"form-check form-switch btn btn-sm btn-ghost-info me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 52
            echo twig_escape_filter($this->env, __("Toggle browse"), "html", null, true);
            echo "\">
         <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0\" role=\"button\"
                name=\"browse\" value=\"1\" autocomplete=\"off\"
                onclick=\"toogle('browse','','',''); document.forms['searchform";
            // line 55
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["itemtype"] ?? null)), "html", null, true);
            echo "'].submit();\"
                ";
            // line 56
            echo ((((($__internal_compile_4 = (($__internal_compile_5 = ($context["data"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["search"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["browse"] ?? null) : null) == 1)) ? ("checked") : (""));
            echo " />
         <span class=\"form-check-label mb-1 mb-sm-0\">
            <i class=\"ti fa-lg ti-subtask\"></i>
         </span>
      </label>
   ";
        }
        // line 62
        echo "
   ";
        // line 63
        if (($context["may_be_deleted"] ?? null)) {
            // line 64
            echo "      <label class=\"form-check form-switch btn btn-sm btn-ghost-danger me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 65
            echo twig_escape_filter($this->env, __("Show the trashbin"), "html", null, true);
            echo "\">
         <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0\" role=\"button\"
                name=\"is_deleted\" value=\"1\" autocomplete=\"off\"
                onclick=\"toogle('is_deleted','','',''); document.forms['searchform";
            // line 68
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["itemtype"] ?? null)), "html", null, true);
            echo "'].submit();\"
                ";
            // line 69
            echo ((((($__internal_compile_6 = (($__internal_compile_7 = ($context["data"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["search"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_deleted"] ?? null) : null) == 1)) ? ("checked") : (""));
            echo " />
         <span class=\"form-check-label mb-1 mb-sm-0\">
            <i class=\"ti fa-lg ti-trash\"></i>
         </span>
      </label>
   ";
        }
        // line 75
        echo "
   <label class=\"form-check form-switch btn btn-sm btn-ghost-secondary me-0 me-sm-1 px-1 mb-0 flex-column-reverse flex-sm-row\"
          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-bs-trigger=\"hover\"
          title=\"";
        // line 78
        echo twig_escape_filter($this->env, __("Toggle search filters"), "html", null, true);
        echo "\">
      <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0 fold-search\" role=\"button\"
             ";
        // line 80
        echo (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpifold_search")) ? ("") : ("checked"));
        echo " autocomplete=\"off\" />
      <span class=\"form-check-label mb-1 mb-sm-0\">
         <i class=\"ti fa-lg ti-search\"></i>
      </span>
   </label>

   <div class=\"d-inline-flex\" role=\"group\">

      ";
        // line 88
        if ((($context["can_config"] ?? null) && (($context["count"] ?? null) > 0))) {
            // line 89
            echo "      <button class=\"btn btn-sm btn-icon btn-ghost-secondary show_displaypreference_modal me-0 me-sm-1\"
             title=\"";
            // line 90
            echo twig_escape_filter($this->env, __("Select default items to show"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
         <i class=\"ti fa-lg ti-tool\"></i>
      </button>
      ";
        }
        // line 94
        echo "
      ";
        // line 95
        if ((($context["count"] ?? null) > 0)) {
            // line 96
            echo "         <button class=\"dropdown-toggle btn btn-sm btn-icon btn-ghost-secondary\" type=\"button\" id=\"dropdown-export\"
               data-bs-toggle=\"dropdown\" aria-expanded=\"false\" >
            <span class=\"py-1 px-2 my-n1 mx-n2\"data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            // line 98
            echo twig_escape_filter($this->env, _x("button", "Export"), "html", null, true);
            echo "\">
               <i id=\"export_dropdown_icon\" class=\"ti fa-lg ti-file-download\"></i>
            </span>
         </button>
      ";
            // line 102
            $context["exporthref"] = (((((($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/report.dynamic.php") . "?item_type=") . ($context["itemtype"] ?? null)) . "&start=") . ($context["start"] ?? null)) . "&") . ($context["posthref"] ?? null));
            // line 103
            echo "      <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown-export\">
         <li><a class=\"dropdown-item\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, ((($context["exporthref"] ?? null) . "&display_type=") . twig_constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
            echo "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 106
            echo twig_escape_filter($this->env, __("Current page in landscape PDF"), "html", null, true);
            echo "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, ((($context["exporthref"] ?? null) . "&display_type=") . twig_constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
            echo "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 110
            echo twig_escape_filter($this->env, __("Current page in portrait PDF"), "html", null, true);
            echo "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, ((($context["exporthref"] ?? null) . "&display_type=") . twig_constant("Search::SYLK_OUTPUT")), "html", null, true);
            echo "\">
            <i class=\"far fa-lg fa-file-excel\"></i>
            ";
            // line 114
            echo twig_escape_filter($this->env, __("Current page in SLK"), "html", null, true);
            echo "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 116
            echo twig_escape_filter($this->env, ((($context["exporthref"] ?? null) . "&display_type=") . twig_constant("Search::CSV_OUTPUT")), "html", null, true);
            echo "\">
            <i class=\"fas fa-lg fa-file-csv\"></i>
            ";
            // line 118
            echo twig_escape_filter($this->env, __("Current page in CSV"), "html", null, true);
            echo "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, ((($context["exporthref"] ?? null) . "&display_type=-") . twig_constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
            echo "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 122
            echo twig_escape_filter($this->env, __("All pages in landscape PDF"), "html", null, true);
            echo "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 124
            echo twig_escape_filter($this->env, ((($context["exporthref"] ?? null) . "&display_type=-") . twig_constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
            echo "\">
            <i class=\"far fa-lg fa-file-pdf\"></i>
            ";
            // line 126
            echo twig_escape_filter($this->env, __("All pages in portrait PDF"), "html", null, true);
            echo "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 128
            echo twig_escape_filter($this->env, ((($context["exporthref"] ?? null) . "&display_type=-") . twig_constant("Search::SYLK_OUTPUT")), "html", null, true);
            echo "\">
            <i class=\"far fa-lg fa-file-excel\"></i>
            ";
            // line 130
            echo twig_escape_filter($this->env, __("All pages in SLK"), "html", null, true);
            echo "
         </a></li>
         <li><a class=\"dropdown-item\" href=\"";
            // line 132
            echo twig_escape_filter($this->env, ((($context["exporthref"] ?? null) . "&display_type=-") . twig_constant("Search::CSV_OUTPUT")), "html", null, true);
            echo "\">
            <i class=\"fas fa-lg fa-file-csv\"></i>
            ";
            // line 134
            echo twig_escape_filter($this->env, __("All pages in CSV"), "html", null, true);
            echo "
         </a></li>
         ";
            // line 136
            if ((($context["itemtype"] ?? null) != "Stat")) {
                // line 137
                echo "         <li id=\"copy_names_to_clipboard\"><a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, ((($context["exporthref"] ?? null) . "&display_type=-") . twig_constant("Search::NAMES_OUTPUT")), "html", null, true);
                echo "\">
            <i class=\"far fa-lg fa-copy\"></i>
            ";
                // line 139
                echo twig_escape_filter($this->env, __("Copy names to clipboard"), "html", null, true);
                echo "
         </a></li>
         ";
            }
            // line 142
            echo "      </ul>
      ";
        }
        // line 144
        echo "   </div>
</div>

<script type=\"text/javascript\">
\$(document).ready(function() {
   \$('.show_displaypreference_modal').click(function(e) {
      e.preventDefault();

      var modal = '<div class=\"modal fade\" id=\"displayprefence_modal";
        // line 152
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" role=\"dialog\">';
      modal += '<div class=\"modal-dialog modal-lg\">';
      modal += '<div class=\"modal-content\">';
      modal += '<div class=\"modal-header\">';
      modal += '<h4 class=\"modal-title\">";
        // line 156
        echo twig_escape_filter($this->env, __("Select default items to show"), "html", null, true);
        echo "</h4>';
      modal += '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 157
        echo twig_escape_filter($this->env, __("Close modal"), "html", null, true);
        echo "\"></button>';
      modal += '</div>';
      modal += '<div class=\"modal-body\">';
      modal += '<div class=\"ratio ratio-4x3\">';
      modal += '<iframe src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/displaypreference.form.php?itemtype=" . ($context["itemtype"] ?? null))), "html", null, true);
        echo "\"></iframe>'
      modal += '</div>';
      modal += '</div>';
      modal += '</div>';
      modal += '</div>';

      // remove old modal
      \$('#displayprefence_modal";
        // line 168
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').remove();

      // create new one
      \$('body').append(modal);
      \$('#displayprefence_modal";
        // line 172
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').modal('show');
   });

   \$(\"body\").on('hide.bs.modal', '#displayprefence_modal";
        // line 175
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "', function() {
      location.reload();
   });

   \$('.fold-search').change(function(event) {
      var show_search = \$(this).is(\":checked\");

      // hide tooltips (issue maybe ?)
      \$('[data-toggle=\"tooltip\"]').tooltip('hide');

      event.preventDefault();
      \$.ajax({
         url: '";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/search.php"), "html", null, true);
        echo "',
         type: 'POST',
         datatype: 'json',
         data: {
            'action': 'fold_search',
            'show_search': (show_search ? 1 : 0),
         },
         success: function() {
            toggle_fold_search(show_search);

            // scroll to top to display the change
            if (show_search) {
               \$(\"html, body, .search-container\").animate({ scrollTop: 0 });
            }
         }
      });
   });

   // Callbacks for copy success/failure
   function copy_success() {
      glpi_toast_info(__('Results copied to clipboard'));
      \$('#export_dropdown_icon').removeClass('fa-circle-notch');
      \$('#export_dropdown_icon').removeClass('fa-spin');
      \$('#export_dropdown_icon').addClass('fa-file-download');
      \$('#export_dropdown_icon').parent().parent().addClass('dropdown-toggle');
   }
   function copy_error() {
      glpi_toast_error(__('Unexpected error'));
      \$('#export_dropdown_icon').removeClass('fa-circle-notch');
      \$('#export_dropdown_icon').removeClass('fa-spin');
      \$('#export_dropdown_icon').addClass('fa-file-download');
      \$('#export_dropdown_icon').parent().parent().addClass('dropdown-toggle');
   }

   \$('#copy_names_to_clipboard').click(function(e) {
      // Get target link
      var link = \$(this).find('a').prop('href');

      // Show loading indicator
      \$('#export_dropdown_icon').removeClass('fa-file-download');
      \$('#export_dropdown_icon').addClass('fa-circle-notch');
      \$('#export_dropdown_icon').addClass('fa-spin');
      \$('#export_dropdown_icon').parent().parent().removeClass('dropdown-toggle');

      // Prevent link from working
      e.preventDefault();

      // Get data using ajax
      \$.get(link, function (data) {
         navigator.clipboard.writeText(data).then(copy_success, copy_error);
      }).fail(copy_error);
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/search/controls.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 187,  333 => 175,  327 => 172,  320 => 168,  310 => 161,  303 => 157,  299 => 156,  292 => 152,  282 => 144,  278 => 142,  272 => 139,  266 => 137,  264 => 136,  259 => 134,  254 => 132,  249 => 130,  244 => 128,  239 => 126,  234 => 124,  229 => 122,  224 => 120,  219 => 118,  214 => 116,  209 => 114,  204 => 112,  199 => 110,  194 => 108,  189 => 106,  184 => 104,  181 => 103,  179 => 102,  172 => 98,  168 => 96,  166 => 95,  163 => 94,  156 => 90,  153 => 89,  151 => 88,  140 => 80,  135 => 78,  130 => 75,  121 => 69,  117 => 68,  111 => 65,  108 => 64,  106 => 63,  103 => 62,  94 => 56,  90 => 55,  84 => 52,  81 => 51,  79 => 50,  76 => 49,  67 => 43,  63 => 42,  57 => 39,  54 => 38,  52 => 37,  49 => 36,  46 => 35,  43 => 34,  41 => 33,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/controls.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\search\\controls.html.twig");
    }
}
