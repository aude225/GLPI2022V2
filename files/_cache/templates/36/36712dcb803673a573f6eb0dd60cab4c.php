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

/* components/pager.html.twig */
class __TwigTemplate_13d312b2e661902a832ba8d343e9df1c extends Template
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
        if ( !array_key_exists("additional_params", $context)) {
            // line 33
            echo "    ";
            $context["additional_params"] = "";
        } else {
            // line 35
            echo "    ";
            if (((twig_length_filter($this->env, ($context["additional_params"] ?? null)) > 0) &&  !(is_string($__internal_compile_0 = ($context["additional_params"] ?? null)) && is_string($__internal_compile_1 = "&") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))))) {
                // line 36
                echo "        ";
                $context["additional_params"] = ("&" . ($context["additional_params"] ?? null));
                // line 37
                echo "    ";
            }
        }
        // line 39
        echo "
";
        // line 40
        $context["href"] = ((($context["href"] ?? null) . "&start=%start%") . ($context["additional_params"] ?? null));
        // line 41
        if ((array_key_exists("is_tab", $context) && (($context["is_tab"] ?? null) == true))) {
            // line 42
            echo "   ";
            $context["href"] = (("javascript:reloadTab('start=%start%" . ($context["additional_params"] ?? null)) . "');");
        }
        // line 44
        if ( !array_key_exists("limit", $context)) {
            // line 45
            echo "    ";
            $context["limit"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit");
        }
        // line 47
        echo "
";
        // line 48
        $context["forward"] = (($context["start"] ?? null) + ($context["limit"] ?? null));
        // line 49
        $context["end"] = (($context["count"] ?? null) - ($context["limit"] ?? null));
        // line 50
        $context["current_start"] = (($context["start"] ?? null) + 1);
        // line 51
        $context["current_end"] = ((($context["current_start"] ?? null) + ($context["limit"] ?? null)) - 1);
        // line 52
        if ((($context["current_end"] ?? null) > ($context["count"] ?? null))) {
            // line 53
            echo "    ";
            $context["current_end"] = ($context["count"] ?? null);
        }
        // line 55
        echo "
";
        // line 56
        $context["back"] = (($context["start"] ?? null) - ($context["limit"] ?? null));
        // line 57
        if (((($context["current_start"] ?? null) - ($context["list_limit"] ?? null)) <= 0)) {
            // line 58
            echo "   ";
            $context["back"] = 0;
        }
        // line 60
        echo "
";
        // line 61
        $context["nb_pages"] = twig_round((($context["count"] ?? null) / ($context["limit"] ?? null)), 0, "ceil");
        // line 62
        $context["current_page"] = (twig_round(((($context["current_start"] ?? null) - 1) / ($context["limit"] ?? null)), 0, "ceil") + 1);
        // line 63
        echo "
";
        // line 65
        $context["adjacents"] = 2;
        // line 66
        $context["skip_adjacents"] = false;
        // line 67
        echo "
<div class=\"flex-grow-1 d-flex flex-wrap flex-md-nowrap  align-items-center justify-content-between mb-2 search-pager\">
    ";
        // line 69
        $context["limitdropdown"] = twig_include($this->env, $context, "components/dropdown/limit.html.twig", ["no_onchange" => true, "select_class" => "search-limit-dropdown"]);
        // line 73
        echo "    <span class=\"search-limit d-none d-md-block\">
        ";
        // line 74
        echo twig_sprintf(__("%s rows / page"), ($context["limitdropdown"] ?? null));
        echo "
    </span>
    <span class=\"search-limit d-block d-md-none\">
        ";
        // line 77
        echo ($context["limitdropdown"] ?? null);
        echo "
    </span>
    <p class=\"m-0 text-muted d-none d-md-block page-infos\">
        ";
        // line 80
        echo twig_escape_filter($this->env, twig_sprintf(__("Showing %s to %s of %s rows"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
        echo "
    </p>
    <p class=\"m-0 text-muted d-block d-md-none text-nowrap ms-2 page-infos\">
        ";
        // line 83
        echo twig_escape_filter($this->env, twig_sprintf(__("%s-%s/%s"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
        echo "
    </p>

    <ul class=\"pagination m-0 mt-sm-2 mt-md-0\">
        ";
        // line 87
        if ((($context["nb_pages"] ?? null) > 1)) {
            // line 88
            echo "            ";
            $context["is_first_page"] = (($context["start"] ?? null) == 0);
            // line 89
            echo "            ";
            $context["is_last_page"] = (($context["forward"] ?? null) >= ($context["count"] ?? null));
            // line 90
            echo "
            <li class=\"page-item ";
            // line 91
            if (($context["is_first_page"] ?? null)) {
                echo "disabled";
            }
            echo "\">
                <a class=\"page-link page-link-start\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_replace_filter(($context["href"] ?? null), ["%start%" => 0]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __("Start"), "html", null, true);
            echo "\" data-start=\"0\" ";
            if (($context["is_first_page"] ?? null)) {
                echo "aria-disabled=\"true\"";
            }
            echo ">
                    <i class=\"ti ti-chevrons-left\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 96
            if (($context["is_first_page"] ?? null)) {
                echo "disabled";
            }
            echo "\">
                <a class=\"page-link page-link-prev\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_replace_filter(($context["href"] ?? null), ["%start%" => ($context["back"] ?? null)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __("Previous"), "html", null, true);
            echo "\" data-start=\"";
            echo twig_escape_filter($this->env, ($context["back"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["is_first_page"] ?? null)) {
                echo "aria-disabled=\"true\"";
            }
            echo ">
                    <i class=\"ti ti-chevron-left\"></i>
                </a>
            </li>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nb_pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 102
                echo "                ";
                if ((((($context["current_page"] ?? null) - ($context["adjacents"] ?? null)) <= $context["page"]) && ((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) >= $context["page"]))) {
                    // line 103
                    echo "                    ";
                    $context["page_start"] = (($context["page"] - 1) * ($context["limit"] ?? null));
                    // line 104
                    echo "                    <li class=\"d-none d-sm-block page-item ";
                    if (($context["page"] == ($context["current_page"] ?? null))) {
                        echo "active selected";
                    }
                    echo "\">
                    <a class=\"page-link page-link-num\" href=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_replace_filter(($context["href"] ?? null), ["%start%" => ($context["page_start"] ?? null)]), "html", null, true);
                    echo "\" data-start=\"";
                    echo twig_escape_filter($this->env, ($context["page_start"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                    ";
                    // line 107
                    if (((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) == $context["page"])) {
                        // line 108
                        echo "                    ";
                        $context["skip_adjacents"] = false;
                        // line 109
                        echo "                    ";
                    }
                    // line 110
                    echo "                ";
                } elseif ((($context["skip_adjacents"] ?? null) == false)) {
                    // line 111
                    echo "                    ";
                    $context["skip_adjacents"] = true;
                    // line 112
                    echo "                    <li class=\"d-none d-sm-block page-item disabled\">
                    <a class=\"page-link\" href=\"#\" aria-disabled=\"true\">...</a>
                    </li>
                ";
                }
                // line 116
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "
            <li class=\"page-item ";
            // line 118
            if (($context["is_last_page"] ?? null)) {
                echo "disabled";
            }
            echo "\">
                <a class=\"page-link page-link-next\" href=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_replace_filter(($context["href"] ?? null), ["%start%" => ($context["forward"] ?? null)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __("Next"), "html", null, true);
            echo "\" data-start=\"";
            echo twig_escape_filter($this->env, ($context["forward"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["is_last_page"] ?? null)) {
                echo "aria-disabled=\"true\"";
            }
            echo ">
                    <i class=\"ti ti-chevron-right\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 123
            if (($context["is_last_page"] ?? null)) {
                echo "disabled";
            }
            echo "\">
                <a class=\"page-link page-link-last\" href=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_replace_filter(($context["href"] ?? null), ["%start%" => ($context["end"] ?? null)]), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __("End"), "html", null, true);
            echo "\" data-start=\"";
            echo twig_escape_filter($this->env, ($context["end"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["is_last_page"] ?? null)) {
                echo "aria-disabled=\"true\"";
            }
            echo ">
                    <i class=\"ti ti-chevrons-right\"></i>
                </a>
            </li>
        ";
        }
        // line 129
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 129,  282 => 124,  276 => 123,  261 => 119,  255 => 118,  252 => 117,  246 => 116,  240 => 112,  237 => 111,  234 => 110,  231 => 109,  228 => 108,  226 => 107,  217 => 105,  210 => 104,  207 => 103,  204 => 102,  200 => 101,  185 => 97,  179 => 96,  166 => 92,  160 => 91,  157 => 90,  154 => 89,  151 => 88,  149 => 87,  142 => 83,  136 => 80,  130 => 77,  124 => 74,  121 => 73,  119 => 69,  115 => 67,  113 => 66,  111 => 65,  108 => 63,  106 => 62,  104 => 61,  101 => 60,  97 => 58,  95 => 57,  93 => 56,  90 => 55,  86 => 53,  84 => 52,  82 => 51,  80 => 50,  78 => 49,  76 => 48,  73 => 47,  69 => 45,  67 => 44,  63 => 42,  61 => 41,  59 => 40,  56 => 39,  52 => 37,  49 => 36,  46 => 35,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/pager.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\pager.html.twig");
    }
}
