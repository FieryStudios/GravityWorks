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

/* @molecules/menus/_menu-item.twig */
class __TwigTemplate_8a5c58a44cfabb776e00f5d0f6ff4e9ca937705ab7bd2e8db2ba40e5bd3bb35a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 2, "for" => 16, "embed" => 20];
        $filters = ["merge" => 7, "default" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'embed'],
                ['merge', 'default'],
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
        if ( !($context["item_modifiers"] ?? null)) {
            // line 2
            echo "  ";
            $context["item_modifiers"] = [];
        }
        // line 5
        $context["original_item_modifiers"] = ($context["item_modifiers"] ?? null);
        // line 6
        if (($this->getAttribute(($context["item"] ?? null), "in_active_trail", []) == true)) {
            // line 7
            echo "  ";
            $context["item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_modifiers"] ?? null)), [0 => "active"]);
        }
        // line 9
        if ((($context["menu_level"] ?? null) > 0)) {
            // line 10
            echo "  ";
            $context["item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_modifiers"] ?? null)), [0 => "sub", 1 => ("sub-" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)))]);
        }
        // line 12
        if ($this->getAttribute(($context["item"] ?? null), "below", [])) {
            // line 13
            echo "  ";
            $context["item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_modifiers"] ?? null)), [0 => "with-sub"]);
        }
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "modifiers", []));
        foreach ($context['_seq'] as $context["_key"] => $context["modifier"]) {
            // line 17
            echo "  ";
            $context["item_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_modifiers"] ?? null)), [0 => $context["modifier"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modifier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
";
        // line 20
        $this->loadTemplate("@molecules/menus/_menu-item.twig", "@molecules/menus/_menu-item.twig", 20, "417372169")->display(twig_array_merge($context, ["list_item_label" =>         // line 21
($context["item_label"] ?? null), "li_base_class" => ((        // line 22
(isset($context["item_base_class"]) || array_key_exists("item_base_class", $context))) ? (_twig_default_filter(($context["item_base_class"] ?? null), (($context["menu_class"] ?? null) . "__item"))) : ((($context["menu_class"] ?? null) . "__item"))), "li_modifiers" =>         // line 23
($context["item_modifiers"] ?? null), "li_blockname" =>         // line 24
($context["item_blockname"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  98 => 23,  97 => 22,  96 => 21,  95 => 20,  92 => 19,  85 => 17,  81 => 16,  77 => 13,  75 => 12,  71 => 10,  69 => 9,  65 => 7,  63 => 6,  61 => 5,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/menus/_menu-item.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/menus/_menu-item.twig");
    }
}


/* @molecules/menus/_menu-item.twig */
class __TwigTemplate_8a5c58a44cfabb776e00f5d0f6ff4e9ca937705ab7bd2e8db2ba40e5bd3bb35a___417372169 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'list_item_content' => [$this, 'block_list_item_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 27, "if" => 33];
        $filters = ["default" => 30, "escape" => 35];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['default', 'escape'],
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
        // line 20
        return "@atoms/lists/_list-item.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@atoms/lists/_list-item.twig", "@molecules/menus/_menu-item.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_list_item_content($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        $this->loadTemplate("@atoms/links/link/link.twig", "@molecules/menus/_menu-item.twig", 27)->display(twig_array_merge($context, ["link_content" => $this->getAttribute(        // line 28
($context["item"] ?? null), "title", []), "link_url" => $this->getAttribute(        // line 29
($context["item"] ?? null), "url", []), "link_base_class" => ((        // line 30
(isset($context["item_base_class"]) || array_key_exists("item_base_class", $context))) ? (_twig_default_filter(($context["item_base_class"] ?? null), (($context["menu_class"] ?? null) . "__link"))) : ((($context["menu_class"] ?? null) . "__link"))), "link_modifiers" =>         // line 31
($context["item_modifiers"] ?? null)]));
        // line 33
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? null), "below", [])) {
            // line 34
            echo "      <span class=\"expand-sub\"></span>
      ";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["menus"] ?? null), "menu_links", [0 => $this->getAttribute(($context["item"] ?? null), "below", []), 1 => ($context["attributes"] ?? null), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["menu_class"] ?? null), 4 => ($context["menu_modifiers"] ?? null), 5 => ($context["menu_blockname"] ?? null), 6 => ($context["item_base_class"] ?? null), 7 => ($context["original_item_modifiers"] ?? null), 8 => ($context["item_blockname"] ?? null)], "method")), "html", null, true);
            echo "
    ";
        }
        // line 37
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 37,  198 => 35,  195 => 34,  192 => 33,  190 => 31,  189 => 30,  188 => 29,  187 => 28,  185 => 27,  182 => 26,  172 => 20,  99 => 24,  98 => 23,  97 => 22,  96 => 21,  95 => 20,  92 => 19,  85 => 17,  81 => 16,  77 => 13,  75 => 12,  71 => 10,  69 => 9,  65 => 7,  63 => 6,  61 => 5,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/menus/_menu-item.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/menus/_menu-item.twig");
    }
}
