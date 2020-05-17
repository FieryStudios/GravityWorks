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

/* @atoms/images/icons/_icon.twig */
class __TwigTemplate_56b5ef4114f60fc2bfc4ef88a4b2765740c5f43de8d4f69c00721a301cb1e6b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 25];
        $filters = ["default" => 13, "escape" => 21];
        $functions = ["attach_library" => 21, "bem" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'escape'],
                ['attach_library', 'bem']
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
        // line 13
        $context["icon_base_class"] = (((isset($context["icon_base_class"]) || array_key_exists("icon_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon_base_class"] ?? null)), "icon")) : ("icon"));
        // line 16
        $context["icon_url"] = ((($context["directory"] ?? null)) ? ((("/" . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/dist/")) : (""));
        // line 17
        echo "
";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gravityworks/sprite"), "html", null, true);
        echo "

<svg ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["icon_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["icon_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["icon_blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["icon_extra_class"] ?? null))), "html", null, true);
        echo "

  ";
        // line 25
        if (($context["icon_decorative"] ?? null)) {
            // line 26
            echo "    aria-hidden=\"true\" role=\"img\"
  ";
        } elseif (        // line 27
($context["icon_role"] ?? null)) {
            // line 28
            echo "    role=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_role"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        if (($context["icon_title"] ?? null)) {
            // line 32
            echo "    aria-labelledby=\"title-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 34
        echo "
  ";
        // line 35
        if (($context["icon_desc"] ?? null)) {
            // line 36
            echo "    aria-describedby=\"desc-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\"
  ";
        }
        // line 38
        echo ">
  ";
        // line 39
        if (($context["icon_title"] ?? null)) {
            // line 40
            echo "    <title id=\"title-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_title"] ?? null)), "html", null, true);
            echo "</title>
  ";
        }
        // line 42
        echo "  ";
        if (($context["icon_desc"] ?? null)) {
            // line 43
            echo "    <desc id=\"desc-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_desc"] ?? null)), "html", null, true);
            echo "</desc>
  ";
        }
        // line 45
        echo "  <use xlink:href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_url"] ?? null)), "html", null, true);
        echo "icons.svg#";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_name"] ?? null)), "html", null, true);
        echo "\"></use>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@atoms/images/icons/_icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  123 => 43,  120 => 42,  112 => 40,  110 => 39,  107 => 38,  101 => 36,  99 => 35,  96 => 34,  90 => 32,  88 => 31,  85 => 30,  79 => 28,  77 => 27,  74 => 26,  72 => 25,  67 => 23,  62 => 21,  59 => 17,  57 => 16,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/images/icons/_icon.twig", "/app/web/themes/custom/gravityworks/components/01-atoms/images/icons/_icon.twig");
    }
}
