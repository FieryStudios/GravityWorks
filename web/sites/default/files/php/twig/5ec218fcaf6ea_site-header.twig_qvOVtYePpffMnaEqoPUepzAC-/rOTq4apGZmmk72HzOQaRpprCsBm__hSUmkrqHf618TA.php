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
        $tags = ["set" => 1, "block" => 10, "embed" => 11, "include" => 30];
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
        $context["header__logo_src"] = ((($context["directory"] ?? null)) ? ((("/" . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))) . "/images/logo.jpg")) : ("images/logo.png"));
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
        // line 26
        echo "      </div>
    </div>
    <div ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "menu", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
      ";
        // line 29
        $this->displayBlock('header__menu', $context, $blocks);
        // line 32
        echo "    </div>
    <div ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "secondary", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo ">
      ";
        // line 34
        $this->displayBlock('header__breadcrumbs', $context, $blocks);
        // line 37
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
        $this->loadTemplate("@organisms/site/site-header/site-header.twig", "@organisms/site/site-header/site-header.twig", 11, "1387947764")->display(twig_array_merge($context, ["link_base_class" => "logo-link", "link_url" => ((        // line 13
(isset($context["logo_link__url"]) || array_key_exists("logo_link__url", $context))) ? (_twig_default_filter(($context["logo_link__url"] ?? null), "/")) : ("/"))]));
        // line 25
        echo "        ";
    }

    // line 29
    public function block_header__menu($context, array $blocks = [])
    {
        // line 30
        echo "        ";
        $this->loadTemplate("@molecules/menus/main-menu/main-menu.twig", "@organisms/site/site-header/site-header.twig", 30)->display($context);
        // line 31
        echo "      ";
    }

    // line 34
    public function block_header__breadcrumbs($context, array $blocks = [])
    {
        // line 35
        echo "        ";
        $this->loadTemplate("@molecules/menus/breadcrumbs/breadcrumbs.twig", "@organisms/site/site-header/site-header.twig", 35)->display($context);
        // line 36
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
        return array (  136 => 36,  133 => 35,  130 => 34,  126 => 31,  123 => 30,  120 => 29,  116 => 25,  114 => 13,  112 => 11,  109 => 10,  102 => 37,  100 => 34,  96 => 33,  93 => 32,  91 => 29,  87 => 28,  83 => 26,  81 => 10,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  62 => 5,  60 => 4,  58 => 1,);
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
class __TwigTemplate_dd8d9cd1d13f57c0bd9f6c3242e9c0c1119ed6d2faa6ce58b37d0722dd1d686e___1387947764 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'link_content' => [$this, 'block_link_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 16];
        $filters = ["escape" => 22];
        $functions = ["bem" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
        $this->loadTemplate("@atoms/images/image/responsive-image.twig", "@organisms/site/site-header/site-header.twig", 16)->display(twig_array_merge($context, ["output_image_tag" => true, "image_src" => "/web/sites/default/files/2020-05/apostles_boats_cropped.jpg", "image_alt" => "Several brightly-colored sea kayaks rest on the sandy shore of Lake Superior.", "responsive_image_blockname" => "logo"]));
        // line 22
        echo "              <span ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "sitename", [], $this->sandbox->ensureToStringAllowed(($context["header__base_class"] ?? null))), "html", null, true);
        echo " >Moving Water Kayak Coaching</span>
            ";
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
        return array (  225 => 22,  222 => 16,  219 => 15,  209 => 11,  136 => 36,  133 => 35,  130 => 34,  126 => 31,  123 => 30,  120 => 29,  116 => 25,  114 => 13,  112 => 11,  109 => 10,  102 => 37,  100 => 34,  96 => 33,  93 => 32,  91 => 29,  87 => 28,  83 => 26,  81 => 10,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  62 => 5,  60 => 4,  58 => 1,);
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
