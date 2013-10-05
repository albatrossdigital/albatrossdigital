<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_43e266075d5f59eb94490f9b3a53ea55 extends Drupal\Core\Template\TwigTemplate
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
        // line 44
        echo "<div";
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo ">
  ";
        // line 45
        echo twig_render_var($this->getContextReference($context, "title_prefix"));
        echo "
  ";
        // line 46
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 47
            echo "    <h2";
            echo twig_render_var($this->getContextReference($context, "title_attributes"));
            echo ">";
            echo twig_render_var($this->getContextReference($context, "label"));
            echo "</h2>
  ";
        }
        // line 49
        echo "  ";
        echo twig_render_var($this->getContextReference($context, "title_suffix"));
        echo "

  <div";
        // line 51
        echo twig_render_var($this->getContextReference($context, "content_attributes"));
        echo ">
    ";
        // line 52
        echo twig_render_var($this->getContextReference($context, "content"));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 52,  44 => 51,  28 => 46,  42 => 19,  33 => 17,  29 => 16,  24 => 45,  21 => 13,  109 => 104,  101 => 100,  95 => 97,  92 => 96,  89 => 95,  83 => 92,  80 => 91,  77 => 90,  71 => 88,  69 => 87,  64 => 84,  58 => 82,  56 => 81,  51 => 78,  45 => 76,  43 => 75,  38 => 49,  32 => 72,  30 => 47,  26 => 70,  22 => 69,  19 => 44,);
    }
}
