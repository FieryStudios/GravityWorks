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

/* @molecules/card/card.twig */
class __TwigTemplate_5161406288ae57eabfbe48629ec6712cbb56ba845f78bfe572b6b11f8af4bd9c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'card__img' => [$this, 'block_card__img'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 44, "block" => 48, "if" => 61, "include" => 63];
        $filters = ["escape" => 46, "default" => 64];
        $functions = ["bem" => 46];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['escape', 'default'],
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
        // line 44
        $context["card__base_class"] = "card";
        // line 45
        echo "
<div ";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["card__base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["card__modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["card__blockname"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["card__extra_classes"] ?? null))), "html", null, true);
        echo ">
  ";
        // line 48
        echo "  ";
        $this->displayBlock('card__img', $context, $blocks);
        // line 58
        echo "  ";
        // line 59
        echo "  <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "content", $this->sandbox->ensureToStringAllowed(($context["card__content__modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["card__base_class"] ?? null))), "html", null, true);
        echo ">
    ";
        // line 61
        echo "    ";
        if (($context["card__heading"] ?? null)) {
            // line 62
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
      ";
            // line 63
            $this->loadTemplate("@atoms/text/headings/_heading.twig", "@molecules/card/card.twig", 63)->display(twig_array_merge($context, ["heading_base_class" => ((            // line 64
(isset($context["card__heading__base_class"]) || array_key_exists("card__heading__base_class", $context))) ? (_twig_default_filter(($context["card__heading__base_class"] ?? null), "heading")) : ("heading")), "heading_modifiers" =>             // line 65
($context["card__heading__modifiers"] ?? null), "heading_blockname" =>             // line 66
($context["card__base_class"] ?? null), "heading_level" => 2, "heading" =>             // line 68
($context["card__heading"] ?? null), "heading_url" => ((            // line 69
(isset($context["card__heading__link"]) || array_key_exists("card__heading__link", $context))) ? (_twig_default_filter(($context["card__heading__link"] ?? null), ($context["card__link__url"] ?? null))) : (($context["card__link__url"] ?? null))), "heading_link_base_class" => ((            // line 70
(isset($context["card__heading__link_base_class"]) || array_key_exists("card__heading__link_base_class", $context))) ? (_twig_default_filter(($context["card__heading__link_base_class"] ?? null), "heading-link")) : ("heading-link")), "heading_link_blockname" =>             // line 71
($context["card__base_class"] ?? null)]));
            // line 73
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
    ";
        }
        // line 75
        echo "    ";
        // line 76
        echo "    ";
        if (($context["card__subheading"] ?? null)) {
            // line 77
            echo "      ";
            $this->loadTemplate("@atoms/text/headings/_heading.twig", "@molecules/card/card.twig", 77)->display(twig_array_merge($context, ["heading_base_class" => ((            // line 78
(isset($context["card__subheading__base_class"]) || array_key_exists("card__subheading__base_class", $context))) ? (_twig_default_filter(($context["card__subheading__base_class"] ?? null), "subheading")) : ("subheading")), "heading_modifiers" =>             // line 79
($context["card__subheading__modifiers"] ?? null), "heading_blockname" =>             // line 80
($context["card__base_class"] ?? null), "heading_level" => 3, "heading" =>             // line 82
($context["card__subheading"] ?? null), "heading_url" =>             // line 83
($context["card__subheading__link"] ?? null)]));
            // line 85
            echo "    ";
        }
        // line 86
        echo "    ";
        // line 87
        echo "    ";
        if (($context["card__body"] ?? null)) {
            // line 88
            echo "      ";
            $this->loadTemplate("@atoms/text/text/01-paragraph.twig", "@molecules/card/card.twig", 88)->display(twig_array_merge($context, ["paragraph_base_class" => ((            // line 89
(isset($context["card__body__base_class"]) || array_key_exists("card__body__base_class", $context))) ? (_twig_default_filter(($context["card__body__base_class"] ?? null), "body")) : ("body")), "paragraph_modifiers" =>             // line 90
($context["card__body__modifiers"] ?? null), "paragraph_blockname" =>             // line 91
($context["card__base_class"] ?? null), "paragraph_content" =>             // line 92
($context["card__body"] ?? null)]));
            // line 94
            echo "    ";
        }
        // line 95
        echo "    ";
        // line 96
        echo "    ";
        if (($context["card__link__url"] ?? null)) {
            // line 97
            echo "      ";
            $this->loadTemplate("@atoms/links/link/link.twig", "@molecules/card/card.twig", 97)->display(twig_array_merge($context, ["link_base_class" => ((            // line 98
(isset($context["card__link__base_class"]) || array_key_exists("card__link__base_class", $context))) ? (_twig_default_filter(($context["card__link__base_class"] ?? null), "link")) : ("link")), "link_blockname" =>             // line 99
($context["card__base_class"] ?? null), "link_attributes" =>             // line 100
($context["card__link__attributes"] ?? null), "link_content" =>             // line 101
($context["card__link__text"] ?? null), "link_url" =>             // line 102
($context["card__link__url"] ?? null)]));
            // line 104
            echo "    ";
        }
        // line 105
        echo "    ";
        // line 106
        echo "    ";
        if (($context["card__button__url"] ?? null)) {
            // line 107
            echo "      ";
            $this->loadTemplate("@atoms/buttons/twig/button.twig", "@molecules/card/card.twig", 107)->display(twig_array_merge($context, ["button_base_class" => ((            // line 108
(isset($context["card__button__base_class"]) || array_key_exists("card__button__base_class", $context))) ? (_twig_default_filter(($context["card__button__base_class"] ?? null), "button")) : ("button")), "button_modifiers" =>             // line 109
($context["card__button__modifiers"] ?? null), "button_blockname" =>             // line 110
($context["card__base_class"] ?? null), "button_attributes" =>             // line 111
($context["card__button__attributes"] ?? null), "button_content" =>             // line 112
($context["card__button__content"] ?? null), "button_url" =>             // line 113
($context["card__button__url"] ?? null)]));
            // line 115
            echo "    ";
        }
        // line 116
        echo "  </div>
</div>
";
    }

    // line 48
    public function block_card__img($context, array $blocks = [])
    {
        // line 49
        echo "    ";
        if (($context["card__image__src"] ?? null)) {
            // line 50
            echo "      ";
            $this->loadTemplate("@atoms/images/image/responsive-image.twig", "@molecules/card/card.twig", 50)->display(twig_array_merge($context, ["image_blockname" =>             // line 51
($context["card__base_class"] ?? null), "output_image_tag" =>             // line 52
($context["card__image__output_image_tag"] ?? null), "image_src" =>             // line 53
($context["card__image__src"] ?? null), "image_alt" =>             // line 54
($context["card__image__alt"] ?? null)]));
            // line 56
            echo "    ";
        }
        // line 57
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@molecules/card/card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 57,  181 => 56,  179 => 54,  178 => 53,  177 => 52,  176 => 51,  174 => 50,  171 => 49,  168 => 48,  162 => 116,  159 => 115,  157 => 113,  156 => 112,  155 => 111,  154 => 110,  153 => 109,  152 => 108,  150 => 107,  147 => 106,  145 => 105,  142 => 104,  140 => 102,  139 => 101,  138 => 100,  137 => 99,  136 => 98,  134 => 97,  131 => 96,  129 => 95,  126 => 94,  124 => 92,  123 => 91,  122 => 90,  121 => 89,  119 => 88,  116 => 87,  114 => 86,  111 => 85,  109 => 83,  108 => 82,  107 => 80,  106 => 79,  105 => 78,  103 => 77,  100 => 76,  98 => 75,  92 => 73,  90 => 71,  89 => 70,  88 => 69,  87 => 68,  86 => 66,  85 => 65,  84 => 64,  83 => 63,  78 => 62,  75 => 61,  70 => 59,  68 => 58,  65 => 48,  61 => 46,  58 => 45,  56 => 44,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/card/card.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/card/card.twig");
    }
}
