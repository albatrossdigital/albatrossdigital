<?php

/* core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig */
class __TwigTemplate_62de86e8c3de2f766e18ba400c3381fb extends Drupal\Core\Template\TwigTemplate
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
        echo "<div";
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo ">
  ";
        // line 19
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 20
            echo "<span class=\"label\">";
            echo twig_render_var($this->getContextReference($context, "description"));
            echo "</span>";
        }
        // line 22
        echo "  ";
        if ((isset($context["settings_links"]) ? $context["settings_links"] : null)) {
            // line 23
            echo "    ";
            echo twig_render_var(twig_join_filter($this->getContextReference($context, "settings_links"), "<span class=\"label\">&nbsp;|&nbsp;</span>"));
            echo "
  ";
        }
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 25,  34 => 23,  31 => 22,  26 => 20,  24 => 19,  19 => 18,);
    }
}
