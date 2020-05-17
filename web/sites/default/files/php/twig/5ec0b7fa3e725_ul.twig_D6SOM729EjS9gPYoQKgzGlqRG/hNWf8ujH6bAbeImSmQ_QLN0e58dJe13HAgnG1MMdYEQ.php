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

/* @atoms/lists/ul.twig */
class __TwigTemplate_4a840ba4f9d010c56ec2b1097c3b39e3cf62500560a2aeb6f935d06f41046397 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'list_content' => [$this, 'block_list_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 11, "block" => 14, "for" => 15, "include" => 16];
        $filters = ["default" => 11, "escape" => 13];
        $functions = ["bem" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'include'],
                ['default', 'escape'],
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
        // line 11
        $context["ul_base_class"] = (((isset($context["ul_base_class"]) || array_key_exists("ul_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["ul_base_class"] ?? null)), "ul")) : ("ul"));
        // line 12
        echo "
<ul ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["ul_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["ul_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["ul_blockname"] ?? null))), "html", null, true);
        echo ">
  ";
        // line 14
        $this->displayBlock('list_content', $context, $blocks);
        // line 26
        echo "</ul>
";
    }

    // line 14
    public function block_list_content($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ul_items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ul_item"]) {
            // line 16
            echo "      ";
            $this->loadTemplate("@atoms/lists/_list-item.twig", "@atoms/lists/ul.twig", 16)->display(twig_array_merge($context, ["list_item_label" => $this->getAttribute(            // line 17
$context["ul_item"], "label", []), "list_item_content" => $this->getAttribute(            // line 18
$context["ul_item"], "content", []), "li_base_class" => $this->getAttribute(            // line 19
$context["ul_item"], "li_base_class", []), "li_base_class" => $this->getAttribute(            // line 20
$context["ul_item"], "li_base_class", []), "li_modifiers" => $this->getAttribute(            // line 21
$context["ul_item"], "li_modifiers", []), "li_blockname" => $this->getAttribute(            // line 22
$context["ul_item"], "li_blockname", [])]));
            // line 24
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ul_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@atoms/lists/ul.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  102 => 24,  100 => 22,  99 => 21,  98 => 20,  97 => 19,  96 => 18,  95 => 17,  93 => 16,  75 => 15,  72 => 14,  67 => 26,  65 => 14,  61 => 13,  58 => 12,  56 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/lists/ul.twig", "/app/web/themes/custom/gravityworks/components/01-atoms/lists/ul.twig");
    }
}
