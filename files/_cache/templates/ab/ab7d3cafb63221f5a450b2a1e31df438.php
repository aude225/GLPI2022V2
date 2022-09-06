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

/* components/user/picture.html.twig */
class __TwigTemplate_3586e9e9cf92fa2c7bba7620b09e3c6c extends Template
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
        $context["enable_anonymization"] = (($context["enable_anonymization"]) ?? (false));
        // line 33
        $context["avatar_size"] = (($context["avatar_size"]) ?? ("avatar-md"));
        // line 34
        $context["anonymized"] = (($context["enable_anonymization"] ?? null) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
        // line 35
        $context["user"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null));
        // line 36
        $context["with_link"] = (($context["with_link"]) ?? (true));
        // line 37
        $context["user_thumbnail"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getThumbnailPicturePath", [0 => ($context["enable_anonymization"] ?? null)], "method", false, false, false, 37);
        // line 38
        if (((($context["user_thumbnail"] ?? null) == null) &&  !$this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("display_users_initials", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))) {
            // line 39
            echo "    ";
            $context["user_thumbnail"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getPicturePath", [0 => ($context["enable_anonymization"] ?? null)], "method", false, false, false, 39);
        }
        // line 41
        echo "
";
        // line 42
        if ((($context["with_link"] ?? null) &&  !($context["anonymized"] ?? null))) {
            // line 43
            echo "   <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getLinkURL", [], "method", false, false, false, 43), "html", null, true);
            echo "\" class=\"d-flex align-items-center\">
";
        }
        // line 45
        echo "
<span class=\"avatar ";
        // line 46
        echo twig_escape_filter($this->env, ($context["avatar_size"] ?? null), "html", null, true);
        echo " rounded\"
      style=\"";
        // line 47
        if ( !(null === ($context["user_thumbnail"] ?? null))) {
            echo "background-image: url(";
            echo twig_escape_filter($this->env, ($context["user_thumbnail"] ?? null), "html", null, true);
            echo "); ";
        }
        echo "background-color: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUserInitialsBgColor", [], "method", false, false, false, 47), "html", null, true);
        echo "\">
   ";
        // line 48
        if ((null === ($context["user_thumbnail"] ?? null))) {
            // line 49
            echo "         ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUserInitials", [0 => ($context["enable_anonymization"] ?? null)], "method", false, false, false, 49), "html", null, true);
            echo "
   ";
        }
        // line 51
        echo "</span>

";
        // line 53
        if ((($context["with_link"] ?? null) &&  !($context["anonymized"] ?? null))) {
            // line 54
            echo "   ";
            if (($context["display_login"] ?? null)) {
                // line 55
                echo "      <span class=\"ms-2\">";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), "html", null, true);
                echo "</span>
   ";
            }
            // line 57
            echo "
   </a>
";
        }
    }

    public function getTemplateName()
    {
        return "components/user/picture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 57,  103 => 55,  100 => 54,  98 => 53,  94 => 51,  88 => 49,  86 => 48,  76 => 47,  72 => 46,  69 => 45,  63 => 43,  61 => 42,  58 => 41,  54 => 39,  52 => 38,  50 => 37,  48 => 36,  46 => 35,  44 => 34,  42 => 33,  40 => 32,  37 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/picture.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\user\\picture.html.twig");
    }
}
