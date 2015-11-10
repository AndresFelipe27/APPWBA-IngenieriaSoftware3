<?php

/* BufeteAplicacionBundle:Cliente:new.html.twig */
class __TwigTemplate_11408213121a83c2d9e10f59efc60d71c06848feb8642117938fd180a4398826 extends Twig_Template
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
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8; height: 550px;\">
        <h1 class=\"titulo\">Creacion de Cliente</h1>

        <div class=\"contenedor_formulario\">
            
            ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\"> Ver la lista de Clientes</a>

        </div>        
    </div>
";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:Cliente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
