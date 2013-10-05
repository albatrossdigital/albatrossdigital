<?php

/* core/modules/system/templates/breadcrumb.html.twig */
class __TwigTemplate_8820d4fd5291bd2626c5761b3cfadf69 extends Drupal\Core\Template\TwigTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <nav class=\"breadcrumb\" role=\"navigation\">
    <h2 class=\"visually-hidden\">";
            // line 14
            echo twig_render_var(t("You are here"));
            echo "</h2>
    <ol>
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "      <li>";
                echo twig_render_var($this->getContextReference($context, "item"));
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 19
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  33 => 17,  29 => 16,  24 => 14,  21 => 13,  109 => 104,  101 => 100,  95 => 97,  92 => 96,  89 => 95,  83 => 92,  80 => 91,  77 => 90,  71 => 88,  69 => 87,  64 => 84,  58 => 82,  56 => 81,  51 => 78,  45 => 76,  43 => 75,  38 => 74,  32 => 72,  30 => 71,  26 => 70,  22 => 69,  19 => 12,);
    }
}
