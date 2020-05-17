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

/* @organisms/site/site-header/site-header.twig */
class __TwigTemplate_dd8d9cd1d13f57c0bd9f6c3242e9c0c1119ed6d2faa6ce58b37d0722dd1d686e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header__branding' => [$this, 'block_header__branding'],
            'header__menu' => [$this, 'block_header__menu'],
            'header__breadcrumbs' => [$this, 'block_header__breadcrumbs'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "block" => 10, "embed" => 11, "include" => 28];
        $filters = ["escape" => 6, "default" => 13];
        $functions = ["bem" => 6];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'embed', 'include'],
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
        // line 1
        $context["header__base_class"] = "header";
        // line 4
        $context["header__logo_src"] = ((($context["directory"] ?? null)) ? ((("/" . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/images/logo.png")) : ("images/logo.png"));
        // line 5
        echo "
<header ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
  <div ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "inner", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
    <div ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "primary", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
      <div ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "branding", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
        ";
        // line 10
        $this->displayBlock('header__branding', $context, $blocks);
        // line 25
        echo "      </div>
      <div ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "menu", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
        ";
        // line 27
        $this->displayBlock('header__menu', $context, $blocks);
        // line 30
        echo "      </div>
    </div>
    <div ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "secondary", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
      ";
        // line 33
        $this->displayBlock('header__breadcrumbs', $context, $blocks);
        // line 36
        echo "    </div>
  </div>
</header>
";
    }

    // line 10
    public function block_header__branding($context, array $blocks = [])
    {
        // line 11
        echo "          ";
        $this->loadTemplate("@organisms/site/site-header/site-header.twig", "@organisms/site/site-header/site-header.twig", 11, "183616355")->display(twig_array_merge($context, ["link_base_class" => "logo-link", "link_url" => ((        // line 13
(isset($context["logo_link__url"]) || array_key_exists("logo_link__url", $context))) ? (_twig_default_filter(($context["logo_link__url"] ?? null), "/")) : ("/"))]));
        // line 24
        echo "        ";
    }

    // line 27
    public function block_header__menu($context, array $blocks = [])
    {
        // line 28
        echo "          ";
        $this->loadTemplate("@molecules/menus/main-menu/main-menu.twig", "@organisms/site/site-header/site-header.twig", 28)->display($context);
        // line 29
        echo "        ";
    }

    // line 33
    public function block_header__breadcrumbs($context, array $blocks = [])
    {
        // line 34
        echo "        ";
        $this->loadTemplate("@molecules/menus/breadcrumbs/breadcrumbs.twig", "@organisms/site/site-header/site-header.twig", 34)->display($context);
        // line 35
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@organisms/site/site-header/site-header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 35,  133 => 34,  130 => 33,  126 => 29,  123 => 28,  120 => 27,  116 => 24,  114 => 13,  112 => 11,  109 => 10,  102 => 36,  100 => 33,  96 => 32,  92 => 30,  90 => 27,  86 => 26,  83 => 25,  81 => 10,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  62 => 5,  60 => 4,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/site/site-header/site-header.twig", "/app/web/themes/custom/gravityworks/components/03-organisms/site/site-header/site-header.twig");
    }
}


/* @organisms/site/site-header/site-header.twig */
class __TwigTemplate_dd8d9cd1d13f57c0bd9f6c3242e9c0c1119ed6d2faa6ce58b37d0722dd1d686e___183616355 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'link_content' => [$this, 'block_link_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 16];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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

    protected function doGetParent(array $context)
    {
        // line 11
        return "@atoms/links/link/link.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@atoms/links/link/link.twig", "@organisms/site/site-header/site-header.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_link_content($context, array $blocks = [])
    {
        // line 16
        echo "              ";
        $this->loadTemplate("@atoms/images/image/responsive-image.twig", "@organisms/site/site-header/site-header.twig", 16)->display(twig_array_merge($context, ["output_image_tag" => true, "image_src" =>         // line 18
($context["header__logo_src"] ?? null), "image_alt" => "Logo", "responsive_image_blockname" => "logo"]));
        // line 22
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@organisms/site/site-header/site-header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 22,  224 => 18,  222 => 16,  219 => 15,  209 => 11,  136 => 35,  133 => 34,  130 => 33,  126 => 29,  123 => 28,  120 => 27,  116 => 24,  114 => 13,  112 => 11,  109 => 10,  102 => 36,  100 => 33,  96 => 32,  92 => 30,  90 => 27,  86 => 26,  83 => 25,  81 => 10,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  62 => 5,  60 => 4,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/site/site-header/site-header.twig", "/app/web/themes/custom/gravityworks/components/03-organisms/site/site-header/site-header.twig");
    }
}
