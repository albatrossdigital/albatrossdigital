<?php

/* core/modules/node/templates/node-edit-form.html.twig */
class __TwigTemplate_0a1cb35557e6409d81dc367a21b56d63 extends Drupal\Core\Template\TwigTemplate
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
        // line 18
        echo twig_render_var(twig_hide($this->getAttribute($this->getContextReference($context, "form"), "advanced")));
        // line 19
        echo twig_render_var(twig_hide($this->getAttribute($this->getContextReference($context, "form"), "actions")));
        // line 20
        echo "<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    ";
        // line 22
        echo twig_render_var($this->getContextReference($context, "form"));
        echo "
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    ";
        // line 25
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "form"), "advanced"));
        echo "
  </div>
  <div class=\"layout-region layout-region-node-footer\">
    ";
        // line 28
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "form"), "actions"));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 28,  33 => 25,  27 => 22,  23 => 20,  21 => 19,  19 => 18,);
    }
}
