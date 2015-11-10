<?php

/* BufeteAplicacionBundle:Noticia:show.html.twig */
class __TwigTemplate_d0ae956a468e31574d3c6d5a6f1ce8ae3329d5848932b532b81d0e38fc774116 extends Twig_Template
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
          .conten_img img{
              width: 80px;
          }
      </style>    
";
    }

    // line 44
    public function block_page($context, array $blocks = array())
    {
        // line 45
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
        <h1 style=\"    font-weight: 800;
    font-size: 25px;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 600px;
    margin: 0px auto;\">Noticia </h1>
        

    <div class=\"conten_proceso\" >
 
        <div class=\"conten_img\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/noticia.png"), "html", null, true);
        echo "\"/></div> 
        <div> <h1 class=\"titulo_proceso\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo", array()), "html", null, true);
        echo "</h1>  </div> 
        <div> <strong> Fecha:  </strong>     ";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha", array()), "Y-m-d"), "html", null, true);
        echo "</div>
        <div>       ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "noticia", array()), "html", null, true);
        echo "</div>
        <div>   <strong> Abogado:  </strong>     ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abogado", array()), "html", null, true);
        echo "</div>


    </div>          

        <div class=\"conten_opciones\">
        <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("noticia");
        echo "\"> Volver a la lista </a>
        <br>
        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> editar</a>
        ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        </div>
    
    </div>
";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:Noticia:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 69,  131 => 68,  126 => 66,  117 => 60,  113 => 59,  109 => 58,  105 => 57,  101 => 56,  88 => 45,  85 => 44,  42 => 4,  37 => 3,  11 => 1,);
    }
}
