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

/* components/itilobject/linked_tickets.html.twig */
class __TwigTemplate_3946729b464c9c1e7e3f2d8edcdc715e extends Template
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
<input type=\"hidden\" name=\"_link[tickets_id_1]\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\" />

";
        // line 34
        $context["linked_tickets"] = twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [0 => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 34)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null)], "method", false, false, false, 34);
        // line 35
        if (twig_length_filter($this->env, ($context["linked_tickets"] ?? null))) {
            // line 36
            echo "<div class=\"card\">
   <div class=\"list-group list-group-flush list-group-hoverable\">
      ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["linked_tickets"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["linked"]) {
                // line 39
                echo "      ";
                $context["new_ticket"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("Ticket", (($__internal_compile_2 = $context["linked"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["tickets_id"] ?? null) : null));
                // line 40
                echo "      <div class=\"list-group-item\">
         <div class=\"row\">
            <div class=\"col-auto\">
               ";
                // line 43
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket_Ticket::getLinkName", [0 => (($__internal_compile_3 =                 // line 44
$context["linked"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["link"] ?? null) : null), 1 => twig_get_attribute($this->env, $this->source,                 // line 45
$context["linked"], "tickets_id_1", [], "array", true, true, false, 45), 2 => true]);
                // line 47
                echo "
            </div>
            <div class=\"col text-truncate\">
               <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($__internal_compile_4 = $context["linked"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["tickets_id"] ?? null) : null)), "html", null, true);
                echo "\" class=\"col-9 overflow-hidden text-nowrap\">
                  ";
                // line 51
                echo twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "getStatusIcon", [0 => (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null)], "method", false, false, false, 51);
                echo "
                  <span title=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null)), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\">
                     ";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["name"] ?? null) : null)), "html", null, true);
                echo "
                  </span>
                  (";
                // line 55
                echo twig_escape_filter($this->env, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["new_ticket"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
                echo ")
               </a>
            </div>

            ";
                // line 59
                if (($context["canupdate"] ?? null)) {
                    // line 60
                    echo "               <div class=\"col-auto\">
                  <button type=\"submit\"
                          form=\"linked_tickets_";
                    // line 62
                    echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
                    echo "\"
                          name=\"id\"
                          value=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"
                          class=\"btn btn-sm btn-ghost-danger\"
                          title=\"";
                    // line 66
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "\"
                          data-bs-toggle=\"tooltip\">
                     <i class=\"fas fa-unlink\"></i>
                  </button>
               </div>
            ";
                }
                // line 72
                echo "         </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['linked'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "   </div>
</div>
";
        }
        // line 78
        echo "
";
        // line 79
        if ((($context["canupdate"] ?? null) &&  !(($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["template_preview"] ?? null) : null))) {
            // line 80
            echo "   <div class=\"mt-2\">
      <button class=\"btn btn-sm btn-ghost-secondary\" type=\"button\"
               data-bs-toggle=\"collapse\" data-bs-target=\"#link_ticket_dropdowns\"
               aria-expanded=\"false\" aria-controls=\"link_ticket_dropdowns\">
         <i class=\"fas fa-plus\"></i>
         <span>";
            // line 85
            echo twig_escape_filter($this->env, __("Add"), "html", null, true);
            echo "</span>
      </button>

      <span class=\"collapse ";
            // line 88
            echo (((twig_length_filter($this->env, (($__internal_compile_10 = (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_link"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["tickets_id_2"] ?? null) : null)) > 0)) ? ("show") : (""));
            echo "\" id=\"link_ticket_dropdowns\">
         ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "dropdownLinks", [0 => "_link[link]", 1 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 91
($context["params"] ?? null), "_link", [], "array", false, true, false, 91), "link", [], "array", true, true, false, 91) &&  !(null === (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 91)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["link"] ?? null) : null)))) ? ((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 91)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["link"] ?? null) : null)) : (""))], "method", false, false, false, 89), "html", null, true);
            // line 92
            echo "

         ";
            // line 94
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown", [0 => ["name" => "_link[tickets_id_2]", "used" => [0 => (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 96
($context["item"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null)], "displaywith" => [0 => "id"], "display" => false, "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 99
($context["params"] ?? null), "_link", [], "array", false, true, false, 99), "tickets_id_2", [], "array", true, true, false, 99) &&  !(null === (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 99)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["tickets_id_2"] ?? null) : null)))) ? ((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 99)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["tickets_id_2"] ?? null) : null)) : (""))]], "method", false, false, false, 94);
            // line 100
            echo "
      </span>
   </div>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/linked_tickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 100,  167 => 99,  166 => 96,  165 => 94,  161 => 92,  159 => 91,  158 => 89,  154 => 88,  148 => 85,  141 => 80,  139 => 79,  136 => 78,  131 => 75,  123 => 72,  114 => 66,  109 => 64,  104 => 62,  100 => 60,  98 => 59,  91 => 55,  86 => 53,  82 => 52,  78 => 51,  74 => 50,  69 => 47,  67 => 45,  66 => 44,  65 => 43,  60 => 40,  57 => 39,  53 => 38,  49 => 36,  47 => 35,  45 => 34,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/linked_tickets.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\linked_tickets.html.twig");
    }
}
