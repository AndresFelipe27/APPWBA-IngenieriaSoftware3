<?php

/* BufeteAplicacionBundle:Cliente:show.html.twig */
class __TwigTemplate_451c9a39c77fbae9a5ae2b9a5d8b2430527e3f93fd6ed7b4adbf2d8e9da0f29b extends Twig_Template
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

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        echo "     
        ";
        // line 4
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
      <style>
          .conten_proceso{
                margin-bottom: 10px;
                background-color: #e9eaed;
                -webkit-box-shadow: 0px 0px 3px 0px rgba(50, 50, 50, 0.75);
                -moz-box-shadow: 0px 0px 3px 0px rgba(50, 50, 50, 0.75);
                box-shadow: 0px 0px 3px 0px rgba(50, 50, 50, 0.75);
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                text-align: left;
                padding: 8px;
                font-size: 20px;
                width: 600px;
                margin: 0px auto;
          }
          
          .titulo_proceso{
              font-size: 25px;
              margin-bottom: 25px;
          }
          
          .conten_opciones{
              
                width: 600px;
                margin: 0px auto;
          }
          
          .conten_img {
              
              text-align: center;
              margin-bottom: 15px;
              
          }
      </style>    
";
    }

    // line 42
    public function block_page($context, array $blocks = array())
    {
        // line 43
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
        <h1 style=\"    font-weight: 800;
    font-size: 25px;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 600px;
    margin: 0px auto;\">Cliente </h1>
        

    <div class=\"conten_proceso\" >
 
        <div class=\"conten_img\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/user.png"), "html", null, true);
        echo "\"/></div> 
        <div> <h1 class=\"titulo_proceso\"> Informacion personal del Cliente</h1>  </div> 
        <div> <strong> Nombres:  </strong>     ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</div>
        <div> <strong> Apellidos:   </strong>        ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellido", array()), "html", null, true);
        echo "</div>
        <div> <strong> Correo:  </strong>        ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correo", array()), "html", null, true);
        echo "</div>
        <div> <strong> Celular:  </strong>       ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "celular", array()), "html", null, true);
        echo "   </div>
        <div>   <strong> Direccion:  </strong>     ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "</div>

    </div>          

        <div class=\"conten_opciones\">
        <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\"> Volver a la lista </a>
        <br>
        <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> editar</a>
        ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        </div>
    
    </div>
";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:Cliente:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 68,  133 => 67,  128 => 65,  120 => 60,  116 => 59,  112 => 58,  108 => 57,  104 => 56,  99 => 54,  86 => 43,  83 => 42,  42 => 4,  37 => 3,  11 => 1,);
    }
}
