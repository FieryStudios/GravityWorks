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

/* @molecules/tabs/_tab.twig */
class __TwigTemplate_9038e25c966299bb1cfcfb1868c673d751d6a0829a6f46d5a1b30093e448e5b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 18, "if" => 25];
        $filters = ["escape" => 28];
        $functions = ["link" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['link']
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
        // line 18
        $context["link_classes"] = [0 => ((        // line 19
($context["is_active"] ?? null)) ? ("is-active") : ("")), 1 => "tabs__link--local-tasks"];
        // line 23
        echo "
";
        // line 25
        if (($context["example"] ?? null)) {
            // line 26
            echo "<ul class=\"tabs__nav\">
";
        }
        // line 28
        echo "<li";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 30
        echo "  ";
        if (($context["attributes"] ?? null)) {
            // line 31
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["link"] ?? null), "#title", [], "array")), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["link"] ?? null), "#url", [], "array")), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
            echo "
  ";
        } else {
            // line 33
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_link"] ?? null)), "html", null, true);
            echo "\" class=\"tabs__link tabs__link--local-tasks";
            if ((($context["key"] ?? null) == 0)) {
                echo " is-active";
            }
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_text"] ?? null)), "html", null, true);
            echo "</a>
  ";
        }
        // line 35
        echo "</li>
";
        // line 36
        if (($context["example"] ?? null)) {
            // line 37
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@molecules/tabs/_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  96 => 36,  93 => 35,  81 => 33,  75 => 31,  72 => 30,  67 => 28,  63 => 26,  61 => 25,  58 => 23,  56 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/tabs/_tab.twig", "/app/web/themes/custom/gravityworks/components/02-molecules/tabs/_tab.twig");
    }
}
