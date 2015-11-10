<?php

/* BufeteAplicacionBundle:ProcesoJudicial:new.html.twig */
class __TwigTemplate_4dbc26f677c40b471998537a2606a016bda6c1d0c365639d285134341d0a8191 extends Twig_Template
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
            'stylesheet' => array($this, 'block_stylesheet'),
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

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 3
        echo "
        ";
        // line 4
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
        
        <style>
            
        
            
        </style>
";
    }

    // line 12
    public function block_page($context, array $blocks = array())
    {
        // line 13
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 100%;\">
        <h1 class=\"titulo\">Creacion de ProcesoJudicial</h1>

        <div class=\"contenedor_formulario\">
            
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("procesojudicial");
        echo "\"> Ver la lista </a>

        </div>        
    </div>
";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:ProcesoJudicial:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  65 => 18,  58 => 13,  55 => 12,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
