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

/* themes/custom/gravityworks/templates/layout/page.html.twig */
class __TwigTemplate_9d1171976ecbc32a17ab38d37b398650a587c8ccc2c77f71149668d6b8259901 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page_header' => [$this, 'block_page_header'],
            'page_system' => [$this, 'block_page_system'],
            'page_sidebar' => [$this, 'block_page_sidebar'],
            'page_content' => [$this, 'block_page_content'],
            'page_footer' => [$this, 'block_page_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 47, "set" => 48];
        $filters = ["render" => 47, "escape" => 54];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['render', 'escape'],
                []
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

    protected function doGetParent(array $context)
    {
        // line 51
        return "@templates/_default.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 47
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar", []))) {
            // line 48
            $context["sidebar"] = true;
        }
        // line 51
        $this->parent = $this->loadTemplate("@templates/_default.twig", "themes/custom/gravityworks/templates/layout/page.html.twig", 51);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 52
    public function block_page_header($context, array $blocks = [])
    {
        // line 53
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 54
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
    ";
        }
        // line 56
        echo "  ";
    }

    // line 58
    public function block_page_system($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
    ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
    ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 65
    public function block_page_sidebar($context, array $blocks = [])
    {
        // line 66
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
        echo "
  ";
    }

    // line 69
    public function block_page_content($context, array $blocks = [])
    {
        // line 70
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
  ";
    }

    // line 73
    public function block_page_footer($context, array $blocks = [])
    {
        // line 74
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 75
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    ";
        }
        // line 77
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/gravityworks/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 77,  138 => 75,  135 => 74,  132 => 73,  125 => 70,  122 => 69,  115 => 66,  112 => 65,  106 => 62,  102 => 61,  98 => 60,  93 => 59,  90 => 58,  86 => 56,  80 => 54,  77 => 53,  74 => 52,  69 => 51,  66 => 48,  64 => 47,  58 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gravityworks/templates/layout/page.html.twig", "/app/web/themes/custom/gravityworks/templates/layout/page.html.twig");
    }
}
