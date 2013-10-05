<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_21d4309e850d6ba459e5ca6326bf8a06 extends Drupal\Core\Template\TwigTemplate
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
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_render_var($this->getContextReference($context, "attributes"));
            echo ">
    ";
            // line 25
            echo twig_render_var($this->getContextReference($context, "content"));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 52,  44 => 51,  28 => 46,  42 => 19,  33 => 17,  29 => 16,  24 => 45,  21 => 24,  109 => 104,  101 => 100,  95 => 97,  92 => 96,  89 => 95,  83 => 92,  80 => 91,  77 => 90,  71 => 88,  69 => 87,  64 => 84,  58 => 82,  56 => 81,  51 => 78,  45 => 76,  43 => 75,  38 => 49,  32 => 72,  30 => 47,  26 => 25,  22 => 69,  19 => 23,);
    }
}
