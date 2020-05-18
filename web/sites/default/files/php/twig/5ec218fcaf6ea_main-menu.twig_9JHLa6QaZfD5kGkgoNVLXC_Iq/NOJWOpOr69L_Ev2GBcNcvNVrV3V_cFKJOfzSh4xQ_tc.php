<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @molecules/menus/main-menu/main-menu.twig */
class __TwigTemplate_a28a6243e4e68386231a9663b56671293a39859cdbd9c575a0bbca84df049b6b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 6];
        $filters = ["escape" => 1];
        $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gravityworks/main-menu"), "html", null, true);
        echo "

<nav >
  <a href=\"#\" id=\"toggle-expand\" class=\"toggle-expand\">
    <span class=\"toggle-expand__open\">
      ";
        // line 6
        $this->loadTemplate("@atoms/images/icons/_icon.twig", "@molecules/menus/main-menu/main-menu.twig", 6)->display(twig_array_merge($context, ["icon_base_class" => "icon", "icon_blockname" => "toggle-expand", "icon_name" => "menu"]));
        // line 11
        echo "      <span class=\"toggle-expand__text\">Main Menu</span>
    </span>
    <span class=\"toggle-expand__close\">
      <span class=\"toggle-expand__text\">Close</span>
    </span>
  </a>
  <div id=\"main-nav\" class=\"main-nav\">
    ";
        // line 18
        $this->loadTemplate("@molecules/menus/_menu.twig", "@molecules/menus/main-menu/main-menu.twig", 18)->display(twig_array_merge($context, ["menu_class" => "main-menu", "items" =>         // line 20
($context["menu_items"] ?? null)]));
        // line 22
        echo "</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "@molecules/menus/main-menu/main-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  75 => 20,  74 => 18,  65 => 11,  63 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/menus/main-menu/main-menu.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/menus/main-menu/main-menu.twig");
    }
}
