<?php

/* core/modules/views/templates/views-exposed-form.html.twig */
class __TwigTemplate_04b126370df5bd05ad8e3731bd18aa3b extends Drupal\Core\Template\TwigTemplate
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
        // line 14
        if ((!twig_test_empty((isset($context["q"]) ? $context["q"] : null)))) {
            // line 15
            echo "  ";
            // line 19
            echo twig_render_var($this->getContextReference($context, "q"));
            echo "
";
        }
        // line 21
        echo "<div class=\"views-exposed-form clearfix\">
  ";
        // line 22
        echo twig_render_var($this->getContextReference($context, "form"));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 19,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  131 => 83,  122 => 80,  113 => 76,  110 => 75,  102 => 72,  93 => 68,  84 => 64,  79 => 62,  76 => 61,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  41 => 46,  36 => 45,  30 => 43,  141 => 70,  134 => 84,  125 => 81,  120 => 64,  116 => 77,  111 => 62,  107 => 61,  104 => 73,  99 => 71,  90 => 67,  85 => 53,  81 => 63,  77 => 50,  74 => 49,  70 => 58,  66 => 45,  60 => 43,  57 => 42,  51 => 40,  49 => 39,  46 => 48,  43 => 47,  37 => 35,  31 => 22,  29 => 32,  26 => 31,  28 => 21,  24 => 41,  21 => 15,  19 => 14,);
    }
}
