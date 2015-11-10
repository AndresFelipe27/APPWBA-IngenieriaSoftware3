<?php

/* BufeteAplicacionBundle:Abogado:edit.html.twig */
class __TwigTemplate_25f48fb227b4679b11dd4ce52e998f41cdb0fcc492942942a4b1688f26a7bcdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BufeteAplicacionBundle::Default/admin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BufeteAplicacionBundle::Default/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
    <h1>Abogado edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("abogado");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:Abogado:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  51 => 11,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
