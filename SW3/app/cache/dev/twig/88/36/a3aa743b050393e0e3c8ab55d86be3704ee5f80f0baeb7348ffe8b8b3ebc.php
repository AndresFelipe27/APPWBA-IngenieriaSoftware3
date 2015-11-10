<?php

/* BufeteAplicacionBundle:ProcesoJudicial:index.html.twig */
class __TwigTemplate_8836a3aa743b050393e0e3c8ab55d86be3704ee5f80f0baeb7348ffe8b8b3ebc extends Twig_Template
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

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 7
        echo "   
        
        ";
        // line 9
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
      <style>   
        
        .item_cliente {
            margin-bottom: 10px;
            background-color: #e9eaed;
            -webkit-box-shadow: 0px 0px 3px 0px rgba(50, 50, 50, 0.75);
            -moz-box-shadow:    0px 0px 3px 0px rgba(50, 50, 50, 0.75);
            box-shadow:         0px 0px 3px 0px rgba(50, 50, 50, 0.75);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            text-align: left;
            padding: 8px;
            font-size: 20px;

        }
        
        .opcion{
            position: relative;
            left: 650px;
        }
        
        
        .item_cliente img{
            
                position: relative;
                right: 100px;
        }
       
        a{
            
           text-decoration: none; 
        }
        
        .item_cliente h2{
            color: black;
            position: relative;
            right: 75px;
            bottom: 32px;
        }
        
        .item_cliente h3{
            color: #92664C;
            position: relative;
            font-size: medium;   
            top: -20px;
        }
        
        .item_cliente h4{
            
                font-size: medium;
                position: relative;
                top: -20px;
        }
        #abogado{
            top: 0px;
        }
        #estado{
            
        }
       
    </style>
";
    }

    // line 76
    public function block_page($context, array $blocks = array())
    {
        // line 77
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 100%;\">
        
        
        <div id=\"contenedor\">
        ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 82
            echo "            
            
            <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("procesojudicial_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> <div class= 'item_cliente' > <img style=\"width: 50px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/documento.png"), "html", null, true);
            echo "\" /> <h2 style=\"display: inline-block; margin-left: 25px; margin-right: 40px;\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo "</h2> <h3 id=\"estado\"> Estado:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo " </h3> <h4> Descripcion: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo " </h4> <h3 id=\"abogado\">Abogado a Cargo: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "abogado", array()), "html", null, true);
            echo "</h3> </div> </a>

            
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        
        

      
        </div>
        
        
        
  
  
        <ul>
        <li>

            <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("procesojudicial_new");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/addcliente.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Agregar Proceso</div> </div> </a>
            
        </li>
    </ul>
    </div>
                
    ";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:ProcesoJudicial:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 102,  150 => 89,  129 => 84,  125 => 82,  121 => 81,  115 => 77,  112 => 76,  44 => 9,  40 => 7,  37 => 6,  11 => 1,);
    }
}
