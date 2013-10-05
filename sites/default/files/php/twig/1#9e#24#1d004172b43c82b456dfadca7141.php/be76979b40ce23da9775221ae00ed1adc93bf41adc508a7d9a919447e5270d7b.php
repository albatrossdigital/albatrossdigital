<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_9e241d004172b43c82b456dfadca7141 extends Drupal\Core\Template\TwigTemplate
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_render_var($this->getContextReference($context, "html_attributes"));
        echo ">
  <head>
    ";
        // line 32
        echo twig_render_var($this->getContextReference($context, "head"));
        echo "
    <title>";
        // line 33
        echo twig_render_var($this->getContextReference($context, "head_title"));
        echo "</title>
    ";
        // line 34
        echo twig_render_var($this->getContextReference($context, "styles"));
        echo "
    ";
        // line 35
        echo twig_render_var($this->getContextReference($context, "scripts"));
        echo "
  </head>
  <body";
        // line 37
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo ">
    <div id=\"skip-link\">
      <a href=\"#main-content\" class=\"visually-hidden focusable\">
        ";
        // line 40
        echo twig_render_var(t("Skip to main content"));
        echo "
      </a>
    </div>
    ";
        // line 43
        echo twig_render_var($this->getContextReference($context, "page_top"));
        echo "
    ";
        // line 44
        echo twig_render_var($this->getContextReference($context, "page"));
        echo "
    ";
        // line 45
        echo twig_render_var($this->getContextReference($context, "page_bottom"));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 44,  50 => 40,  39 => 35,  35 => 34,  31 => 33,  27 => 32,  48 => 52,  44 => 37,  28 => 46,  42 => 19,  33 => 17,  29 => 16,  24 => 45,  21 => 24,  109 => 104,  101 => 100,  95 => 97,  92 => 96,  89 => 95,  83 => 92,  80 => 91,  77 => 90,  71 => 88,  69 => 87,  64 => 45,  58 => 82,  56 => 43,  51 => 78,  45 => 76,  43 => 75,  38 => 49,  32 => 72,  30 => 47,  26 => 25,  22 => 30,  19 => 29,);
    }
}
