<?php

/* core/modules/views_ui/templates/views-ui-container.html.twig */
class __TwigTemplate_1214126c5d8d0a79e9ae10d04f707ee0 extends Drupal\Core\Template\TwigTemplate
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
        echo ">";
        echo twig_render_var($this->getContextReference($context, "children"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 15,);
    }
}
