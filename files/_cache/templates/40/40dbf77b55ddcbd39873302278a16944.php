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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_16cd2d47a2bc09fc84c310f92fcc9191 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css_block' => [$this, 'block_css_block'],
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
";
        // line 32
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("palette");
        // line 33
        if ( !array_key_exists("css_files", $context)) {
            // line 34
            echo "   ";
            $context["css_files"] = [0 => "public/lib/base.css", 1 => (("css/palettes/" . ($context["theme"] ?? null)) . ".scss")];
            // line 35
            echo "   ";
        }
        // line 37
        if ( !array_key_exists("js_files", $context)) {
            // line 38
            echo "   ";
            $context["js_files"] = [0 => "public/lib/base.js", 1 => "js/common.js"];
        }
        // line 40
        echo "
";
        // line 41
        echo twig_include($this->env, $context, "layout/parts/head.html.twig");
        echo "
";
        // line 42
        $this->displayBlock('css_block', $context, $blocks);
        // line 43
        echo "<body>
   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 46
        $context["style"] = null;
        // line 47
        echo "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 48
            echo "            ";
            $context["style"] = "max-width: 40rem";
            // line 49
            echo "         ";
        }
        // line 50
        echo "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 51
            echo "            ";
            $context["style"] = "max-width: 60rem";
            // line 52
            echo "         ";
        }
        // line 53
        echo "
         <div class=\"container-tight py-6\" ";
        // line 54
        if ( !(null === ($context["style"] ?? null))) {
            echo "style=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
              ";
        // line 55
        $this->displayBlock('content_block', $context, $blocks);
        // line 56
        echo "            
   

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 60
        $this->displayBlock('footer_block', $context, $blocks);
        // line 61
        echo "            </div>
         </div>
      </div>
   </div>

   ";
        // line 66
        $this->displayBlock('javascript_block', $context, $blocks);
        // line 67
        echo "</body>
</html>";
    }

    // line 42
    public function block_css_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 55
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 60
    public function block_footer_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 66
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout/page_card_notlogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 66,  141 => 60,  135 => 55,  129 => 42,  124 => 67,  122 => 66,  115 => 61,  113 => 60,  107 => 56,  105 => 55,  97 => 54,  94 => 53,  91 => 52,  88 => 51,  85 => 50,  82 => 49,  79 => 48,  76 => 47,  74 => 46,  69 => 43,  67 => 42,  63 => 41,  60 => 40,  56 => 38,  54 => 37,  51 => 35,  48 => 34,  46 => 33,  44 => 32,  41 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\layout\\page_card_notlogged.html.twig");
    }
}
