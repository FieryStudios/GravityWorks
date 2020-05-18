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

/* @atoms/images/image/responsive-image.twig */
class __TwigTemplate_8fd82d180d888eeda7cf0c4be588e95a5da3394702f1b7959a1c627a05f0cbca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 10, "include" => 11];
        $filters = ["default" => 8];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default'],
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
        // line 7
        echo "
";
        // line 8
        $context["responsive_image_base_class"] = (((isset($context["responsive_image_base_class"]) || array_key_exists("responsive_image_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["responsive_image_base_class"] ?? null)), "image")) : ("image"));
        // line 9
        echo "
";
        // line 10
        if (($context["output_image_tag"] ?? null)) {
            // line 11
            echo "  ";
            $this->loadTemplate("@atoms/images/image/_image.twig", "@atoms/images/image/responsive-image.twig", 11)->display(twig_array_merge($context, ["image_base_class" =>             // line 12
($context["responsive_image_base_class"] ?? null), "image_modifiers" =>             // line 13
($context["responsive_image_modifiers"] ?? null), "image_blockname" =>             // line 14
($context["responsive_image_blockname"] ?? null), "image_srcset" => ((            // line 15
(isset($context["image_srcset"]) || array_key_exists("image_srcset", $context))) ? (_twig_default_filter(($context["image_srcset"] ?? null), $this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "srcset", []))) : ($this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "srcset", []))), "image_sizes" => ((            // line 16
(isset($context["image_sizes"]) || array_key_exists("image_sizes", $context))) ? (_twig_default_filter(($context["image_sizes"] ?? null), $this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "sizes", []))) : ($this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "sizes", []))), "image_src" => ((            // line 17
(isset($context["image_src"]) || array_key_exists("image_src", $context))) ? (_twig_default_filter(($context["image_src"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#uri", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#uri", [], "array"))), "image_alt" => ((            // line 18
(isset($context["image_alt"]) || array_key_exists("image_alt", $context))) ? (_twig_default_filter(($context["image_alt"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#alt", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#alt", [], "array"))), "image_title" => ((            // line 19
(isset($context["image_title"]) || array_key_exists("image_title", $context))) ? (_twig_default_filter(($context["image_title"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#title", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#title", [], "array")))]));
        } else {
            // line 22
            echo "  ";
            $this->loadTemplate("@atoms/images/image/_picture.twig", "@atoms/images/image/responsive-image.twig", 22)->display(twig_array_merge($context, ["picture_base_class" =>             // line 23
($context["responsive_image_base_class"] ?? null), "picture_modifiers" =>             // line 24
($context["responsive_image_modifiers"] ?? null), "picture_blockname" =>             // line 25
($context["responsive_image_blockname"] ?? null), "image_srcset" => ((            // line 26
(isset($context["image_srcset"]) || array_key_exists("image_srcset", $context))) ? (_twig_default_filter(($context["image_srcset"] ?? null), $this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "srcset", []))) : ($this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "srcset", []))), "image_sizes" => ((            // line 27
(isset($context["image_sizes"]) || array_key_exists("image_sizes", $context))) ? (_twig_default_filter(($context["image_sizes"] ?? null), $this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "sizes", []))) : ($this->getAttribute($this->getAttribute(($context["img_element"] ?? null), "#attributes", [], "array"), "sizes", []))), "image_src" => ((            // line 28
(isset($context["image_src"]) || array_key_exists("image_src", $context))) ? (_twig_default_filter(($context["image_src"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#uri", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#uri", [], "array"))), "image_alt" => ((            // line 29
(isset($context["image_alt"]) || array_key_exists("image_alt", $context))) ? (_twig_default_filter(($context["image_alt"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#alt", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#alt", [], "array"))), "image_title" => ((            // line 30
(isset($context["image_title"]) || array_key_exists("image_title", $context))) ? (_twig_default_filter(($context["image_title"] ?? null), $this->getAttribute(($context["img_element"] ?? null), "#title", [], "array"))) : ($this->getAttribute(($context["img_element"] ?? null), "#title", [], "array")))]));
        }
    }

    public function getTemplateName()
    {
        return "@atoms/images/image/responsive-image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  85 => 29,  84 => 28,  83 => 27,  82 => 26,  81 => 25,  80 => 24,  79 => 23,  77 => 22,  74 => 19,  73 => 18,  72 => 17,  71 => 16,  70 => 15,  69 => 14,  68 => 13,  67 => 12,  65 => 11,  63 => 10,  60 => 9,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/images/image/responsive-image.twig", "/app/web/themes/custom/gravityworks/components/01-atoms/images/image/responsive-image.twig");
    }
}
