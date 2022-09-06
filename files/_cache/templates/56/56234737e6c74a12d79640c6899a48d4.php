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

/* components/search/table.html.twig */
class __TwigTemplate_37539bc6deef514d0a35ec548ea686f2 extends Template
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
        $context["searchform_id"] = ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 32)) ? (_twig_default_filter((($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["searchform_id"] ?? null) : null), ("search_" . ($context["rand"] ?? null)))) : (("search_" . ($context["rand"] ?? null))));
        // line 33
        echo "
<div class=\"table-responsive-md\">
   <table class=\"search-results table card-table table-hover ";
        // line 35
        echo (((($__internal_compile_1 = (($__internal_compile_2 = ($context["data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["search"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["is_deleted"] ?? null) : null)) ? ("table-danger deleted-results") : ("table-striped"));
        echo "\"
          id=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["searchform_id"] ?? null), "html", null, true);
        echo "\">
      <thead>
         <tr ";
        // line 38
        if ((($context["count"] ?? null) == 0)) {
            echo "style=\"display: none;\"";
        }
        echo ">
            ";
        // line 39
        if (($context["showmassiveactions"] ?? null)) {
            // line 40
            echo "            <th style=\"width: 30px;\">
               <div>
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"checkall_";
            // line 42
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        value=\"\" aria-label=\"";
            // line 43
            echo twig_escape_filter($this->env, __("Check all as"), "html", null, true);
            echo "\"
                        onclick=\"checkAsCheckboxes('checkall_";
            // line 44
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, ($context["searchform_id"] ?? null), "html", null, true);
            echo "');\" />
               </div>
            </th>
            ";
        }
        // line 48
        echo "
            ";
        // line 49
        $context["sorts"] = (($__internal_compile_3 = (($__internal_compile_4 = ($context["data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["search"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sort"] ?? null) : null);
        // line 50
        echo "
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_5 = (($__internal_compile_6 = ($context["data"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["data"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["cols"] ?? null) : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 52
            echo "               ";
            // line 53
            echo "               ";
            $context["linkto"] = "";
            // line 54
            echo "               ";
            $context["so_no_sort"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 54), "nosort", [], "array", true, true, false, 54) &&  !(null === (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 54)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["nosort"] ?? null) : null)))) ? ((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 54)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["nosort"] ?? null) : null)) : (false));
            // line 55
            echo "               ";
            $context["meta"] = (((twig_get_attribute($this->env, $this->source, $context["col"], "meta", [], "array", true, true, false, 55) &&  !(null === (($__internal_compile_9 = $context["col"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["meta"] ?? null) : null)))) ? ((($__internal_compile_10 = $context["col"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["meta"] ?? null) : null)) : (false));
            // line 56
            echo "               ";
            $context["sort_order"] = "nosort";
            // line 57
            echo "               ";
            $context["sort_num"] = "";
            // line 58
            echo "               ";
            $context["can_sort"] = (( !($context["meta"] ?? null) &&  !($context["no_sort"] ?? null)) &&  !($context["so_no_sort"] ?? null));
            // line 59
            echo "               ";
            if (($context["can_sort"] ?? null)) {
                // line 60
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["sorts"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["sort_opt"]) {
                    // line 61
                    echo "                     ";
                    if (($context["sort_opt"] == (($__internal_compile_11 = $context["col"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null))) {
                        // line 62
                        echo "                        ";
                        $context["sort_order"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 62), "order", [], "array", false, true, false, 62), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 62), [], "array", true, true, false, 62)) ? (_twig_default_filter((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 62), "order", [], "array", false, true, false, 62)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 62)] ?? null) : null), "ASC")) : ("ASC"));
                        // line 63
                        echo "                        ";
                        $context["sort_num"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 63);
                        // line 64
                        echo "                     ";
                    }
                    // line 65
                    echo "                  ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_opt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "               ";
            }
            // line 67
            echo "
               ";
            // line 68
            $context["col_name"] = (($__internal_compile_13 = $context["col"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["name"] ?? null) : null);
            // line 69
            echo "               ";
            // line 70
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, $context["col"], "groupname", [], "array", true, true, false, 70)) {
                // line 71
                echo "                  ";
                $context["groupname"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 71), "name", [], "array", true, true, false, 71) &&  !(null === (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 71)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["name"] ?? null) : null)))) ? ((($__internal_compile_15 = twig_get_attribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 71)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["name"] ?? null) : null)) : ((($__internal_compile_16 = $context["col"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["groupname"] ?? null) : null)));
                // line 72
                echo "                  ";
                $context["col_name"] = twig_sprintf(__("%1\$s - %2\$s"), ($context["groupname"] ?? null), (($__internal_compile_17 = $context["col"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["name"] ?? null) : null));
                // line 73
                echo "               ";
            }
            // line 74
            echo "
               ";
            // line 76
            echo "               ";
            if (( !($context["itemtype"] ?? null) == (($__internal_compile_18 = $context["col"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["itemtype"] ?? null) : null))) {
                // line 77
                echo "                  ";
                $context["col_name"] = twig_sprintf(__("%1\$s - %2\$s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_19 = $context["col"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["itemtype"] ?? null) : null)), ($context["col_name"] ?? null));
                // line 78
                echo "               ";
            }
            // line 79
            echo "
               <th data-searchopt-id=\"";
            // line 80
            echo twig_escape_filter($this->env, (($__internal_compile_20 = $context["col"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null), "html", null, true);
            echo "\" ";
            if ( !($context["can_sort"] ?? null)) {
                echo "data-nosort=\"true\"";
            }
            echo " data-sort-order=\"";
            echo twig_escape_filter($this->env, ($context["sort_order"] ?? null), "html", null, true);
            echo "\"
                  ";
            // line 81
            if ( !twig_test_empty(($context["sort_num"] ?? null))) {
                echo "data-sort-num=\"";
                echo twig_escape_filter($this->env, (($context["sort_num"] ?? null) - 1), "html", null, true);
                echo "\"";
            }
            echo ">
                  ";
            // line 82
            $context["sort_icon"] = (((($context["sort_order"] ?? null) == "ASC")) ? ("fas fa-sort-up") : ((((($context["sort_order"] ?? null) == "DESC")) ? ("fas fa-sort-down") : (""))));
            // line 83
            echo "                  ";
            echo twig_escape_filter($this->env, ($context["col_name"] ?? null), "html", null, true);
            echo "
                  ";
            // line 84
            if (($context["can_sort"] ?? null)) {
                // line 85
                echo "                     <span class=\"sort-indicator\"><i class=\"";
                echo twig_escape_filter($this->env, ($context["sort_icon"] ?? null), "html", null, true);
                echo "\"></i><span class=\"sort-num\">";
                (((twig_length_filter($this->env, ($context["sorts"] ?? null)) > 1)) ? (print (twig_escape_filter($this->env, ($context["sort_num"] ?? null), "html", null, true))) : (print ("")));
                echo "</span></span>
                  ";
            }
            // line 87
            echo "               </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
            ";
        // line 91
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 91)) {
            // line 92
            echo "               <th>
                  ";
            // line 93
            echo twig_escape_filter($this->env, __("Item type"), "html", null, true);
            echo "
               </th>
            ";
        }
        // line 96
        echo "         </tr>
      </thead>
      <tbody>
         ";
        // line 99
        if ((($context["count"] ?? null) == 0)) {
            // line 100
            echo "            <tr>
               <td colspan=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (($__internal_compile_21 = (($__internal_compile_22 = ($context["data"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["data"] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["cols"] ?? null) : null)), "html", null, true);
            echo "\">
                  <div class=\"alert alert-info mb-0 rounded-0 border-top-0 border-bottom-0 border-right-0\" role=\"alert\">
                     ";
            // line 103
            echo twig_escape_filter($this->env, __("No item found"), "html", null, true);
            echo "
                  </div>
               </td>
            </tr>
         ";
        } else {
            // line 108
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_23 = (($__internal_compile_24 = ($context["data"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["data"] ?? null) : null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["rows"] ?? null) : null));
            foreach ($context['_seq'] as $context["rowkey"] => $context["row"]) {
                // line 109
                echo "               <tr>
                  ";
                // line 110
                if (($context["showmassiveactions"] ?? null)) {
                    // line 111
                    echo "                  <td>
                     <div>
                        ";
                    // line 114
                    echo "                        ";
                    if (((($context["itemtype"] ?? null) == "Entity") &&  !Session::haveAccessToEntity((($__internal_compile_25 = $context["row"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null)))) {
                        // line 115
                        echo "                        ";
                    } elseif ((((($context["itemtype"] ?? null) == "User") &&  !Session::canViewAllEntities()) &&  !$this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasAccessToUserEntities((($__internal_compile_26 = $context["row"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["id"] ?? null) : null)))) {
                        // line 116
                        echo "                        ";
                    } elseif ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBTM") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 116)) &&  !Session::haveAccessToEntity((($__internal_compile_27 = $context["row"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["entities_id"] ?? null) : null)))) {
                        // line 117
                        echo "                        ";
                    } else {
                        // line 118
                        echo "                           ";
                        $context["checked"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["itemtype"] ?? null), [], "array", false, true, false, 118), (($__internal_compile_28 = $context["row"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["id"] ?? null) : null), [], "array", true, true, false, 118) &&  !(null === (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["itemtype"] ?? null), [], "array", false, true, false, 118)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[(($__internal_compile_30 = $context["row"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["id"] ?? null) : null)] ?? null) : null)))) ? ((($__internal_compile_31 = twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["itemtype"] ?? null), [], "array", false, true, false, 118)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[(($__internal_compile_32 = $context["row"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["id"] ?? null) : null)] ?? null) : null)) : (false));
                        // line 119
                        echo "                           <input class=\"form-check-input\" type=\"checkbox\" data-glpicore-ma-tags=\"common\"
                              value=\"1\" aria-label=\"\" ";
                        // line 120
                        if (($context["checked"] ?? null)) {
                            echo "checked=\"checked\"";
                        }
                        // line 121
                        echo "                              name=\"item[";
                        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["row"], "TYPE", [], "array", true, true, false, 121) &&  !(null === (($__internal_compile_33 = $context["row"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["TYPE"] ?? null) : null)))) ? ((($__internal_compile_34 = $context["row"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["TYPE"] ?? null) : null)) : (($context["itemtype"] ?? null))), "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, (($__internal_compile_35 = $context["row"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["id"] ?? null) : null), "html", null, true);
                        echo "]\" />
                        ";
                    }
                    // line 123
                    echo "                     </div>
                  </td>
                  ";
                }
                // line 126
                echo "
                  ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_36 = (($__internal_compile_37 = ($context["data"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["data"] ?? null) : null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["cols"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 128
                    echo "                     ";
                    $context["colkey"] = (((($__internal_compile_38 = $context["col"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["itemtype"] ?? null) : null) . "_") . (($__internal_compile_39 = $context["col"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["id"] ?? null) : null));
                    // line 129
                    echo "                     ";
                    // line 130
                    echo "                     ";
                    echo $this->extensions['Glpi\Application\View\Extension\SearchExtension']->showItem(0, (($__internal_compile_40 = (($__internal_compile_41 = $context["row"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[($context["colkey"] ?? null)] ?? null) : null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["displayname"] ?? null) : null), 0, 0, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Search::displayConfigItem", [0 => ($context["itemtype"] ?? null), 1 => (($__internal_compile_42 = $context["col"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["id"] ?? null) : null), 2 => $context["row"]]));
                    echo "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "
                  ";
                // line 134
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 134)) {
                    // line 135
                    echo "                     <td>
                        ";
                    // line 136
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_43 = $context["row"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["TYPE"] ?? null) : null)), "html", null, true);
                    echo "
                     </td>
                  ";
                }
                // line 139
                echo "               </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rowkey'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "         ";
        }
        // line 142
        echo "      </tbody>
   </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/search/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 142,  393 => 141,  386 => 139,  380 => 136,  377 => 135,  374 => 134,  371 => 132,  362 => 130,  360 => 129,  357 => 128,  353 => 127,  350 => 126,  345 => 123,  337 => 121,  333 => 120,  330 => 119,  327 => 118,  324 => 117,  321 => 116,  318 => 115,  315 => 114,  311 => 111,  309 => 110,  306 => 109,  301 => 108,  293 => 103,  288 => 101,  285 => 100,  283 => 99,  278 => 96,  272 => 93,  269 => 92,  266 => 91,  263 => 89,  248 => 87,  240 => 85,  238 => 84,  233 => 83,  231 => 82,  223 => 81,  213 => 80,  210 => 79,  207 => 78,  204 => 77,  201 => 76,  198 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  184 => 69,  182 => 68,  179 => 67,  176 => 66,  162 => 65,  159 => 64,  156 => 63,  153 => 62,  150 => 61,  132 => 60,  129 => 59,  126 => 58,  123 => 57,  120 => 56,  117 => 55,  114 => 54,  111 => 53,  109 => 52,  92 => 51,  89 => 50,  87 => 49,  84 => 48,  75 => 44,  71 => 43,  67 => 42,  63 => 40,  61 => 39,  55 => 38,  50 => 36,  46 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/search/table.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\search\\table.html.twig");
    }
}
