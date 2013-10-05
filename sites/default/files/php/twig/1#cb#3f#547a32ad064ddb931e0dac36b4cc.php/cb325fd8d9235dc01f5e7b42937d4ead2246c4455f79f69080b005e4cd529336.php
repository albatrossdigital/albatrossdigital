<?php

/* core/modules/datetime/templates/datetime-form.html.twig */
class __TwigTemplate_cb3f547a32ad064ddb931e0dac36b4cc extends Drupal\Core\Template\TwigTemplate
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
        // line 15
        echo "<div";
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo ">
  ";
        // line 16
        echo twig_render_var($this->getContextReference($context, "content"));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/datetime/templates/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 16,  39 => 28,  33 => 25,  27 => 22,  23 => 20,  21 => 19,  19 => 15,);
    }
}
