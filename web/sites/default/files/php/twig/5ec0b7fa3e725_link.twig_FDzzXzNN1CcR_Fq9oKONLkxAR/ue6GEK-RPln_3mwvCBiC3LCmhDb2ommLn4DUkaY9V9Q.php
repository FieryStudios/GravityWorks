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

/* @atoms/links/link/link.twig */
class __TwigTemplate_a43cd3b098caf73fb9a145cea6bb61f8b8f02d922063b64b888dff8db6ccd390 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'link_content' => [$this, 'block_link_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "for" => 20, "block" => 25];
        $filters = ["default" => 16, "escape" => 19];
        $functions = ["bem" => 19];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'block'],
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
        // line 16
        $context["link_base_class"] = (((isset($context["link_base_class"]) || array_key_exists("link_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["link_base_class"] ?? null)), "link")) : ("link"));
        // line 17
        echo "
<a
  ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["link_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["link_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["link_blockname"] ?? null))), "html", null, true);
        echo "
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["link_attributes"] ?? null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 21
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["attribute"]), "html", null, true);
            echo "=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"]), "html", null, true);
            echo "\"
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null)), "html", null, true);
        echo "\"
>
  ";
        // line 25
        $this->displayBlock('link_content', $context, $blocks);
        // line 28
        echo "</a>
";
    }

    // line 25
    public function block_link_content($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@atoms/links/link/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  94 => 25,  89 => 28,  87 => 25,  81 => 23,  70 => 21,  66 => 20,  62 => 19,  58 => 17,  56 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/links/link/link.twig", "/app/web/themes/custom/gravityworks/components/01-atoms/links/link/link.twig");
    }
}
