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

/* @atoms/lists/_list-item.twig */
class __TwigTemplate_3b1cf24987d548b8f8eedb5338d95c5468c27e91f183af67389305b59133c668 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'list_item_content' => [$this, 'block_list_item_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 15, "block" => 18, "if" => 19];
        $filters = ["default" => 15, "escape" => 17];
        $functions = ["bem" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
        // line 15
        $context["li_base_class"] = (((isset($context["li_base_class"]) || array_key_exists("li_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["li_base_class"] ?? null)), "list-item")) : ("list-item"));
        // line 16
        echo "
<li ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["li_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["li_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["li_blockname"] ?? null))), "html", null, true);
        echo ">
  ";
        // line 18
        $this->displayBlock('list_item_content', $context, $blocks);
        // line 22
        echo "</li>
";
    }

    // line 18
    public function block_list_item_content($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        if (($context["list_item_label"] ?? null)) {
            echo "<strong>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_item_label"] ?? null)), "html", null, true);
            echo "</strong> ";
        }
        // line 20
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_item_content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@atoms/lists/_list-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  75 => 19,  72 => 18,  67 => 22,  65 => 18,  61 => 17,  58 => 16,  56 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/lists/_list-item.twig", "/app/web/themes/custom/gravityworks/components/01-atoms/lists/_list-item.twig");
    }
}
