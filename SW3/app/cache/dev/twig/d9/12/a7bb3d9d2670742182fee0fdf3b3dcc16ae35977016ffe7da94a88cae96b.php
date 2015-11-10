<?php

/* BufeteAplicacionBundle:ProcesoJudicial:show.html.twig */
class __TwigTemplate_d912a7bb3d9d2670742182fee0fdf3b3dcc16ae35977016ffe7da94a88cae96b extends Twig_Template
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

    // line 45
    public function block_page($context, array $blocks = array())
    {
        // line 46
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
        <h1 style=\"    font-weight: 800;
    font-size: 25px;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 600px;
    margin: 0px auto;\">Proceso Judicial </h1>
        

    <div class=\"conten_proceso\" >
 
        <div class=\"conten_img\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/documento.png"), "html", null, true);
        echo "\"/></div> 
        <div> <h1 class=\"titulo_proceso\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "</h1>  </div> 
        <div> <strong> Estado:  </strong>     ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()), "html", null, true);
        echo "</div>
        <div> <strong> Prioridad:   </strong>        ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prioridad", array()), "html", null, true);
        echo "</div>
        <div> <strong> Codigo Consulta:  </strong>        ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codigoConsulta", array()), "html", null, true);
        echo "</div>
        <div> <strong> Codigo Unico:  </strong>       ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "   </div>
        
        <hr/>
        <div>   <strong> Fecha Inicio  </strong>      ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaIn", array()), "Y-m-d"), "html", null, true);
        echo "</div>
        <div>   <strong> Fecha de Vencimiento  </strong>     ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaVencimiento", array()), "Y-m-d"), "html", null, true);
        echo "</div>
        <hr/>
        <div>   <strong> Abogado:  </strong>     ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abogado", array()), "html", null, true);
        echo "</div>
        <div>   <strong> Cliente:   </strong>      ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "html", null, true);
        echo "</div>

    </div>          

        <div class=\"conten_opciones\">
        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("procesojudicial");
        echo "\"> Volver a la lista </a>
        <br>
        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("procesojudicial_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> editar</a>
        ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        </div>
    
    </div>
";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:ProcesoJudicial:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 77,  154 => 76,  149 => 74,  141 => 69,  137 => 68,  132 => 66,  128 => 65,  122 => 62,  118 => 61,  114 => 60,  110 => 59,  106 => 58,  102 => 57,  89 => 46,  86 => 45,  42 => 4,  37 => 3,  11 => 1,);
    }
}
