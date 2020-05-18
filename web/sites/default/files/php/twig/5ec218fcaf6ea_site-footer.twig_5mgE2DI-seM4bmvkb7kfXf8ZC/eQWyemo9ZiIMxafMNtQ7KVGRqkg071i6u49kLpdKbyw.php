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

/* @organisms/site/site-footer/site-footer.twig */
class __TwigTemplate_b70f17429ae9e15244219dc7f54ace6f7a27000bbab1e0f8ab93e6d337e1fcfa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'footer__social' => [$this, 'block_footer__social'],
            'footer__menu' => [$this, 'block_footer__menu'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "block" => 6, "include" => 7];
        $filters = ["escape" => 3];
        $functions = ["bem" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include'],
                ['escape'],
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
        $context["footer__base_class"] = "footer";
        // line 2
        echo "
<footer ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["footer__base_class"] ?? null))), "html", null, true);
        echo ">
  <dov ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "inner", [], $this->sandbox->ensureToStringAllowed(($context["footer__base_class"] ?? null))), "html", null, true);
        echo ">
    <div ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "social", [], $this->sandbox->ensureToStringAllowed(($context["footer__base_class"] ?? null))), "html", null, true);
        echo ">
      ";
        // line 6
        $this->displayBlock('footer__social', $context, $blocks);
        // line 9
        echo "    </div>
    <div ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "menu", [], $this->sandbox->ensureToStringAllowed(($context["footer__base_class"] ?? null))), "html", null, true);
        echo ">
      ";
        // line 11
        $this->displayBlock('footer__menu', $context, $blocks);
        // line 14
        echo "    </div>
  </div>
</footer>
";
    }

    // line 6
    public function block_footer__social($context, array $blocks = [])
    {
        // line 7
        echo "        ";
        $this->loadTemplate("@molecules/menus/social/social-menu.twig", "@organisms/site/site-footer/site-footer.twig", 7)->display($context);
        // line 8
        echo "      ";
    }

    // line 11
    public function block_footer__menu($context, array $blocks = [])
    {
        // line 12
        echo "        ";
        $this->loadTemplate("@molecules/menus/inline/inline-menu.twig", "@organisms/site/site-footer/site-footer.twig", 12)->display($context);
        // line 13
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@organisms/site/site-footer/site-footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 13,  105 => 12,  102 => 11,  98 => 8,  95 => 7,  92 => 6,  85 => 14,  83 => 11,  79 => 10,  76 => 9,  74 => 6,  70 => 5,  66 => 4,  62 => 3,  59 => 2,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/site/site-footer/site-footer.twig", "/app/web/themes/custom/gravityworks/components/03-organisms/site/site-footer/site-footer.twig");
    }
}
