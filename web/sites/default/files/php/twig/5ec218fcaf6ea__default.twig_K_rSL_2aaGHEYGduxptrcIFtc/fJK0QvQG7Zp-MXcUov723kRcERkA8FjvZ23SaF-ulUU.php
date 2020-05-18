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

/* @templates/_default.twig */
class __TwigTemplate_afc706037534123ea40ab409f4bee0a7f6143a0da56680438f1bee981138e63f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'page_header' => [$this, 'block_page_header'],
            'page_system' => [$this, 'block_page_system'],
            'page_sidebar' => [$this, 'block_page_sidebar'],
            'page_content' => [$this, 'block_page_content'],
            'page_footer' => [$this, 'block_page_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 9, "block" => 15, "include" => 16];
        $filters = ["default" => 3, "merge" => 10, "escape" => 14];
        $functions = ["bem" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['default', 'merge', 'escape'],
                ['bem']
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
        $context["layout_modifiers"] = [];
        // line 2
        echo "
";
        // line 3
        $context["main_base_class"] = (((isset($context["main_base_class"]) || array_key_exists("main_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["main_base_class"] ?? null)), "main")) : ("main"));
        // line 4
        $context["main_modifiers"] = [];
        // line 5
        echo "
";
        // line 6
        $context["main_content_base_class"] = (((isset($context["main_content_base_class"]) || array_key_exists("main_content_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["main_content_base_class"] ?? null)), "main-content")) : ("main-content"));
        // line 7
        $context["main_content_modifiers"] = [];
        // line 8
        echo "
";
        // line 9
        if (($context["sidebar"] ?? null)) {
            // line 10
            echo "  ";
            $context["main_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["main_modifiers"] ?? null)), [0 => "with-sidebar"]);
            // line 11
            echo "  ";
            $context["main_content_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["main_content_modifiers"] ?? null)), [0 => "with-sidebar"]);
        }
        // line 13
        echo "
<div ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "layout-container", $this->sandbox->ensureToStringAllowed(($context["layout_modifiers"] ?? null))), "html", null, true);
        echo ">
  ";
        // line 15
        $this->displayBlock('page_header', $context, $blocks);
        // line 18
        echo "  ";
        $this->displayBlock('page_system', $context, $blocks);
        // line 20
        echo "  <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["main_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["main_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["main_blockname"] ?? null))), "html", null, true);
        echo ">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 22
        echo "    ";
        if (($context["sidebar"] ?? null)) {
            // line 23
            echo "      <aside class=\"main-sidebar\" role=\"complementary\">
        ";
            // line 24
            $this->displayBlock('page_sidebar', $context, $blocks);
            // line 25
            echo "      </aside>
    ";
        }
        // line 27
        echo "    <main role=\"main\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["main_content_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["main_content_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["main_content_blockname"] ?? null))), "html", null, true);
        echo ">
      ";
        // line 28
        $this->displayBlock('page_content', $context, $blocks);
        // line 29
        echo "    </main>
  </div>
  ";
        // line 31
        $this->displayBlock('page_footer', $context, $blocks);
        // line 34
        echo "</div>
";
    }

    // line 15
    public function block_page_header($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $this->loadTemplate("@organisms/site/site-header/site-header.twig", "@templates/_default.twig", 16)->display($context);
        // line 17
        echo "  ";
    }

    // line 18
    public function block_page_system($context, array $blocks = [])
    {
        // line 19
        echo "  ";
    }

    // line 24
    public function block_page_sidebar($context, array $blocks = [])
    {
    }

    // line 28
    public function block_page_content($context, array $blocks = [])
    {
    }

    // line 31
    public function block_page_footer($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        $this->loadTemplate("@organisms/site/site-footer/site-footer.twig", "@templates/_default.twig", 32)->display($context);
        // line 33
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@templates/_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 33,  165 => 32,  162 => 31,  157 => 28,  152 => 24,  148 => 19,  145 => 18,  141 => 17,  138 => 16,  135 => 15,  130 => 34,  128 => 31,  124 => 29,  122 => 28,  117 => 27,  113 => 25,  111 => 24,  108 => 23,  105 => 22,  100 => 20,  97 => 18,  95 => 15,  91 => 14,  88 => 13,  84 => 11,  81 => 10,  79 => 9,  76 => 8,  74 => 7,  72 => 6,  69 => 5,  67 => 4,  65 => 3,  62 => 2,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@templates/_default.twig", "/app/web/themes/custom/gravityworks/components/04-templates/_default.twig");
    }
}
