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

/* @molecules/menus/social/social-menu.twig */
class __TwigTemplate_308fff5bf0f95bf19091ae92dd94ce5a9cd1dd759e158c3f7752bc78dc845b5f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "embed" => 5];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
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
        // line 1
        echo "  ";
        // line 2
        echo "  ";
        $context["menu_class"] = "social-menu";
        // line 3
        echo "
  ";
        // line 5
        echo "  ";
        $this->loadTemplate("@molecules/menus/social/social-menu.twig", "@molecules/menus/social/social-menu.twig", 5, "1413381649")->display(twig_array_merge($context, ["ul_base_class" =>         // line 6
($context["menu_class"] ?? null), "ul_modifiers" =>         // line 7
($context["menu_modifiers"] ?? null), "ul_blockname" =>         // line 8
($context["menu_blockname"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@molecules/menus/social/social-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  66 => 7,  65 => 6,  63 => 5,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/menus/social/social-menu.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/menus/social/social-menu.twig");
    }
}


/* @molecules/menus/social/social-menu.twig */
class __TwigTemplate_308fff5bf0f95bf19091ae92dd94ce5a9cd1dd759e158c3f7752bc78dc845b5f___1413381649 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'list_content' => [$this, 'block_list_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 11, "embed" => 12];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'embed'],
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
        // line 5
        return "@atoms/lists/ul.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@atoms/lists/ul.twig", "@molecules/menus/social/social-menu.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_list_content($context, array $blocks = [])
    {
        // line 11
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_menu_items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "        ";
            $this->loadTemplate("@molecules/menus/social/social-menu.twig", "@molecules/menus/social/social-menu.twig", 12, "767339680")->display(twig_array_merge($context, ["li_base_class" => "item", "li_modifiers" =>             // line 14
($context["item_modifiers"] ?? null), "li_blockname" =>             // line 15
($context["menu_class"] ?? null)]));
            // line 34
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@molecules/menus/social/social-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 35,  176 => 34,  174 => 15,  173 => 14,  171 => 12,  153 => 11,  150 => 10,  140 => 5,  67 => 8,  66 => 7,  65 => 6,  63 => 5,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/menus/social/social-menu.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/menus/social/social-menu.twig");
    }
}


/* @molecules/menus/social/social-menu.twig */
class __TwigTemplate_308fff5bf0f95bf19091ae92dd94ce5a9cd1dd759e158c3f7752bc78dc845b5f___767339680 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'list_item_content' => [$this, 'block_list_item_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["embed" => 18];
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

    protected function doGetParent(array $context)
    {
        // line 12
        return "@atoms/lists/_list-item.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@atoms/lists/_list-item.twig", "@molecules/menus/social/social-menu.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_list_item_content($context, array $blocks = [])
    {
        // line 18
        echo "            ";
        $this->loadTemplate("@molecules/menus/social/social-menu.twig", "@molecules/menus/social/social-menu.twig", 18, "1957979518")->display(twig_array_merge($context, ["link_url" => $this->getAttribute(        // line 19
($context["item"] ?? null), "url", []), "link_base_class" => "link", "link_modifiers" =>         // line 21
($context["item_modifiers"] ?? null), "link_blockname" =>         // line 22
($context["menu_class"] ?? null)]));
        // line 32
        echo "          ";
    }

    public function getTemplateName()
    {
        return "@molecules/menus/social/social-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 32,  280 => 22,  279 => 21,  278 => 19,  276 => 18,  273 => 17,  263 => 12,  190 => 35,  176 => 34,  174 => 15,  173 => 14,  171 => 12,  153 => 11,  150 => 10,  140 => 5,  67 => 8,  66 => 7,  65 => 6,  63 => 5,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/menus/social/social-menu.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/menus/social/social-menu.twig");
    }
}


/* @molecules/menus/social/social-menu.twig */
class __TwigTemplate_308fff5bf0f95bf19091ae92dd94ce5a9cd1dd759e158c3f7752bc78dc845b5f___1957979518 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'link_content' => [$this, 'block_link_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 25];
        $filters = ["escape" => 29];
        $functions = ["bem" => 29];

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
        // line 18
        return "@atoms/links/link/link.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@atoms/links/link/link.twig", "@molecules/menus/social/social-menu.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_link_content($context, array $blocks = [])
    {
        // line 25
        echo "                ";
        $this->loadTemplate("@atoms/images/icons/_icon.twig", "@molecules/menus/social/social-menu.twig", 25)->display(twig_array_merge($context, ["icon_name" => $this->getAttribute(        // line 26
($context["item"] ?? null), "icon", []), "icon_blockname" =>         // line 27
($context["menu_class"] ?? null)]));
        // line 29
        echo "                <span ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "text", [], $this->sandbox->ensureToStringAllowed(($context["menu_class"] ?? null))), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "title", [])), "html", null, true);
        echo "</span>
              ";
    }

    public function getTemplateName()
    {
        return "@molecules/menus/social/social-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 29,  371 => 27,  370 => 26,  368 => 25,  365 => 24,  355 => 18,  282 => 32,  280 => 22,  279 => 21,  278 => 19,  276 => 18,  273 => 17,  263 => 12,  190 => 35,  176 => 34,  174 => 15,  173 => 14,  171 => 12,  153 => 11,  150 => 10,  140 => 5,  67 => 8,  66 => 7,  65 => 6,  63 => 5,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/menus/social/social-menu.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/menus/social/social-menu.twig");
    }
}
