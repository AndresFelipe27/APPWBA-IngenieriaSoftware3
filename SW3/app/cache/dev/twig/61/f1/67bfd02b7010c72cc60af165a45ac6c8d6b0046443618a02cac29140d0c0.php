<?php

/* BufeteAplicacionBundle:Documento:edit.html.twig */
class __TwigTemplate_61f167bfd02b7010c72cc60af165a45ac6c8d6b0046443618a02cac29140d0c0 extends Twig_Template
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
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
    <h1>Documento edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("documento");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:Documento:edit.html.twig";
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
