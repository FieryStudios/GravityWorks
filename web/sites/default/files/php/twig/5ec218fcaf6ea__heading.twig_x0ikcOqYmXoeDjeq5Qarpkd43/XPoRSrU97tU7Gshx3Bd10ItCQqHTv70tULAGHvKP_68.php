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

/* @atoms/text/headings/_heading.twig */
class __TwigTemplate_5bebfd71b1fad57af3e80fd630a156b7998621a68e4ee0681a8fdd4a28ad8b18 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 19, "if" => 22, "include" => 23];
        $filters = ["default" => 19, "escape" => 21];
        $functions = ["bem" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default', 'escape'],
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
        // line 19
        $context["heading_base_class"] = (((isset($context["heading_base_class"]) || array_key_exists("heading_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["heading_base_class"] ?? null)), ("h" . $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null))))) : (("h" . $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null)))));
        // line 20
        echo "
<h";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["heading_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["heading_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["heading_blockname"] ?? null))), "html", null, true);
        echo ">
  ";
        // line 22
        if (($context["heading_url"] ?? null)) {
            // line 23
            echo "    ";
            $this->loadTemplate("@atoms/links/link/link.twig", "@atoms/text/headings/_heading.twig", 23)->display(twig_array_merge($context, ["link_content" =>             // line 24
($context["heading"] ?? null), "link_url" =>             // line 25
($context["heading_url"] ?? null), "link_attributes" =>             // line 26
($context["heading_link_attributes"] ?? null), "link_base_class" =>             // line 27
($context["heading_link_base_class"] ?? null), "link_modifiers" =>             // line 28
($context["heading_link_modifiers"] ?? null), "link_blockname" => ((            // line 29
(isset($context["heading_link_blockname"]) || array_key_exists("heading_link_blockname", $context))) ? (_twig_default_filter(($context["heading_link_blockname"] ?? null), ($context["heading_base_class"] ?? null))) : (($context["heading_base_class"] ?? null)))]));
            // line 31
            echo "  ";
        } else {
            // line 32
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 34
        echo "</h";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null)), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@atoms/text/headings/_heading.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 34,  80 => 32,  77 => 31,  75 => 29,  74 => 28,  73 => 27,  72 => 26,  71 => 25,  70 => 24,  68 => 23,  66 => 22,  60 => 21,  57 => 20,  55 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/text/headings/_heading.twig", "/app/web/themes/custom/gravityworks/components/01-atoms/text/headings/_heading.twig");
    }
}
