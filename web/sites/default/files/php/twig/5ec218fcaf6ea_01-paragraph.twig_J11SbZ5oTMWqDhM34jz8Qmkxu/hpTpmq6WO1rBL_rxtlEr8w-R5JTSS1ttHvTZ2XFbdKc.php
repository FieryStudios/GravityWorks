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

/* @atoms/text/text/01-paragraph.twig */
class __TwigTemplate_1d2e408c4da66757b9815c1f00b3266516eb8a370d6665d84c3c3eee8590621c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph_content' => [$this, 'block_paragraph_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 14, "block" => 17];
        $filters = ["default" => 14, "escape" => 16];
        $functions = ["bem" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
        // line 14
        $context["paragraph_base_class"] = (((isset($context["paragraph_base_class"]) || array_key_exists("paragraph_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["paragraph_base_class"] ?? null)), "paragraph")) : ("paragraph"));
        // line 15
        echo "
<p ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["paragraph_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["paragraph_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["paragraph_blockname"] ?? null))), "html", null, true);
        echo ">
  ";
        // line 17
        $this->displayBlock('paragraph_content', $context, $blocks);
        // line 20
        echo "</p>
";
    }

    // line 17
    public function block_paragraph_content($context, array $blocks = [])
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@atoms/text/text/01-paragraph.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  72 => 17,  67 => 20,  65 => 17,  61 => 16,  58 => 15,  56 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/text/text/01-paragraph.twig", "/app/web/themes/custom/gravityworks/components/01-atoms/text/text/01-paragraph.twig");
    }
}
