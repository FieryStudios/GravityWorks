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

/* @molecules/menus/_menu.twig */
class __TwigTemplate_dcae91c3257fa996f71574b627fc5c050b9e23c5bb6e581c0cb3524de46de1fe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 59, "macro" => 27, "if" => 29, "set" => 32, "embed" => 41];
        $filters = ["default" => 32, "merge" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'embed'],
                ['default', 'merge'],
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
        // line 21
        echo "
";
        // line 26
        echo "
";
        // line 58
        echo "
";
        // line 59
        $context["menus"] = $this;
        // line 60
        echo "
";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_class"] ?? null), ($context["menu_modifiers"] ?? null), ($context["menu_blockname"] ?? null), ($context["item_base_class"] ?? null), ($context["item_modifiers"] ?? null), ($context["item_blockname"] ?? null)));
        echo "
";
    }

    // line 27
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_class__ = null, $__menu_modifiers__ = null, $__menu_blockname__ = null, $__item_base_class__ = null, $__item_modifiers__ = null, $__item_blockname__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_class" => $__menu_class__,
            "menu_modifiers" => $__menu_modifiers__,
            "menu_blockname" => $__menu_blockname__,
            "item_base_class" => $__item_base_class__,
            "item_modifiers" => $__item_modifiers__,
            "item_blockname" => $__item_blockname__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 28
            echo "  ";
            $context["menus"] = $this;
            // line 29
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 30
                echo "
    ";
                // line 32
                echo "    ";
                $context["menu_class"] = (((isset($context["menu_class"]) || array_key_exists("menu_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["menu_class"] ?? null)), "menu")) : ("menu"));
                // line 33
                echo "    ";
                if ( !($context["menu_modifiers"] ?? null)) {
                    // line 34
                    echo "      ";
                    $context["menu_modifiers"] = [];
                    // line 35
                    echo "    ";
                }
                // line 36
                echo "    ";
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 37
                    echo "      ";
                    $context["menu_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menu_modifiers"] ?? null)), [0 => "sub", 1 => ("sub-" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null)))]);
                    // line 38
                    echo "    ";
                }
                // line 39
                echo "
    ";
                // line 41
                echo "    ";
                $this->loadTemplate("@molecules/menus/_menu.twig", "@molecules/menus/_menu.twig", 41, "1474809675")->display(twig_array_merge($context, ["ul_base_class" =>                 // line 42
($context["menu_class"] ?? null), "ul_modifiers" =>                 // line 43
($context["menu_modifiers"] ?? null), "ul_blockname" =>                 // line 44
($context["menu_blockname"] ?? null)]));
                // line 56
                echo "  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  132 => 44,  131 => 43,  130 => 42,  128 => 41,  125 => 39,  122 => 38,  119 => 37,  116 => 36,  113 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 30,  98 => 29,  95 => 28,  75 => 27,  69 => 61,  66 => 60,  64 => 59,  61 => 58,  58 => 26,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/menus/_menu.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/menus/_menu.twig");
    }
}


/* @molecules/menus/_menu.twig */
class __TwigTemplate_dcae91c3257fa996f71574b627fc5c050b9e23c5bb6e581c0cb3524de46de1fe___1474809675 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'list_content' => [$this, 'block_list_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 47, "include" => 48];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'include'],
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
        // line 41
        return "@atoms/lists/ul.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@atoms/lists/ul.twig", "@molecules/menus/_menu.twig", 41);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_list_content($context, array $blocks = [])
    {
        // line 47
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            // line 48
            echo "          ";
            $this->loadTemplate("@molecules/menus/_menu-item.twig", "@molecules/menus/_menu.twig", 48)->display(twig_array_merge($context, ["li_base_class" =>             // line 49
($context["item_base_class"] ?? null), "li_modifiers" =>             // line 50
($context["item_modifiers"] ?? null), "li_blockname" =>             // line 51
($context["item_blockname"] ?? null)]));
            // line 53
            echo "        ";
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
        // line 54
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@molecules/menus/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 54,  256 => 53,  254 => 51,  253 => 50,  252 => 49,  250 => 48,  232 => 47,  229 => 46,  219 => 41,  134 => 56,  132 => 44,  131 => 43,  130 => 42,  128 => 41,  125 => 39,  122 => 38,  119 => 37,  116 => 36,  113 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 30,  98 => 29,  95 => 28,  75 => 27,  69 => 61,  66 => 60,  64 => 59,  61 => 58,  58 => 26,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/menus/_menu.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/menus/_menu.twig");
    }
}
