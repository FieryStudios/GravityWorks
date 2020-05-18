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

/* themes/custom/gravityworks/templates/content/node--article--teaser.html.twig */
class __TwigTemplate_a313385592418d8bf568cb3e954fa436042f20a8a7f62dcdf321c7cc5841f3ab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["embed" => 75];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 73
        echo "

";
        // line 75
        $this->loadTemplate("themes/custom/gravityworks/templates/content/node--article--teaser.html.twig", "themes/custom/gravityworks/templates/content/node--article--teaser.html.twig", 75, "940889842")->display(twig_array_merge($context, ["card__extra_classes" => [0 => "grid__item"], "card__heading" =>         // line 77
($context["label"] ?? null), "card__body" => $this->getAttribute(        // line 78
($context["content"] ?? null), "body", []), "card__link__url" =>         // line 79
($context["url"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/custom/gravityworks/templates/content/node--article--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 79,  61 => 78,  60 => 77,  59 => 75,  55 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gravityworks/templates/content/node--article--teaser.html.twig", "/app/web/themes/custom/gravityworks/templates/content/node--article--teaser.html.twig");
    }
}


/* themes/custom/gravityworks/templates/content/node--article--teaser.html.twig */
class __TwigTemplate_a313385592418d8bf568cb3e954fa436042f20a8a7f62dcdf321c7cc5841f3ab___940889842 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'card__img' => [$this, 'block_card__img'],
            'card__info' => [$this, 'block_card__info'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 86];
        $filters = ["escape" => 82];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                ['escape'],
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
        // line 75
        return "@molecules/card/card.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@molecules/card/card.twig", "themes/custom/gravityworks/templates/content/node--article--teaser.html.twig", 75);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 81
    public function block_card__img($context, array $blocks = [])
    {
        // line 82
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
        echo "
  ";
    }

    // line 85
    public function block_card__info($context, array $blocks = [])
    {
        // line 86
        echo "    ";
        echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
        // line 87
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/gravityworks/templates/content/node--article--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 87,  159 => 86,  156 => 85,  149 => 82,  146 => 81,  136 => 75,  62 => 79,  61 => 78,  60 => 77,  59 => 75,  55 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gravityworks/templates/content/node--article--teaser.html.twig", "/app/web/themes/custom/gravityworks/templates/content/node--article--teaser.html.twig");
    }
}
