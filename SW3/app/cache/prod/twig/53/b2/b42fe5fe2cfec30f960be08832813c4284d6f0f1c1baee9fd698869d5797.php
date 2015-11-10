<?php

/* BufeteMainBundle:Default:index.html.twig */
class __TwigTemplate_53b2b42fe5fe2cfec30f960be08832813c4284d6f0f1c1baee9fd698869d5797 extends Twig_Template
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
        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "abogado", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "BufeteMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
