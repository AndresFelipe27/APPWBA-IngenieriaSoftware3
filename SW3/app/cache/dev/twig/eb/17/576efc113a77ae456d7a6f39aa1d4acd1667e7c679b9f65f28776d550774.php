<?php

/* BufeteAplicacionBundle:Default:actualizar.html.twig */
class __TwigTemplate_eb17576efc113a77ae456d7a6f39aa1d4acd1667e7c679b9f65f28776d550774 extends Twig_Template
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
        echo "     
        ";
        // line 3
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
        
        .myButton {
            -moz-box-shadow:inset 0px 1px 0px 0px #a6827e;
            -webkit-box-shadow:inset 0px 1px 0px 0px #a6827e;
            box-shadow:inset 0px 1px 0px 0px #a6827e;
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7d5d3b), color-stop(1, #634b30));
            background:-moz-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
            background:-webkit-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
            background:-o-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
            background:-ms-linear-gradient(top, #7d5d3b 5%, #634b30 100%);
            background:linear-gradient(to bottom, #7d5d3b 5%, #634b30 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d5d3b', endColorstr='#634b30',GradientType=0);
            background-color:#7d5d3b;
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            border-radius:3px;
            border:1px solid #54381e;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-size:13px;
            padding:0px 24px;
            text-decoration:none;
            text-shadow:0px 1px 0px #4d3534;
        }
        
        .myButton:active {
                position:relative;
                top:1px;
        }

        
        .conten_estado{
            
            position: relative;
            top: -50px;
            left: 280px;
            display: inline-block;
        }
    </style>
";
    }

    // line 108
    public function block_page($context, array $blocks = array())
    {
        // line 109
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 100%;\">
        
        
        <div id=\"contenedor\" style=\" \">
        ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 114
            echo "            
            
            <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("procesojudicial_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> <div class= 'item_cliente' style=\"\" > <img style=\"width: 50px;\" src=\"";
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
            
            <div class=\"conten_estado\">
                
                <form method=\"post\" action=\"";
            // line 120
            echo $this->env->getExtension('routing')->getPath("actualizar_estado");
            echo "\">
                              <input style=\"width: 290px;\" type=\"text\" name=\"estado\" value=\"\" placeholder=\"Estado\">
                              <input class=\"myButton\" type=\"submit\" name=\"enviar\" value=\"Actualizar Estado\">
                              <input  type=\"hidden\" name=\"id\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">
                </form>
            
            
            </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        
        

      
        </div>
        
        
        
  
  
        <ul>
        <li>

            <a href=\"";
        // line 143
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
        return "BufeteAplicacionBundle:Default:actualizar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 143,  201 => 130,  188 => 123,  182 => 120,  165 => 116,  161 => 114,  157 => 113,  151 => 109,  148 => 108,  42 => 3,  37 => 2,  11 => 1,);
    }
}
