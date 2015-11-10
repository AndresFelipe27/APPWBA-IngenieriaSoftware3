<?php

/* BufeteAplicacionBundle:Cliente:index.html.twig */
class __TwigTemplate_68942d96344bddadb5aa1f4c3126e62ab9ff3c808474201aa05e64603bdc40b3 extends Twig_Template
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
        // line 5
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
            right: 60px;
            bottom: 15px;
        }
        
        .item_cliente h3{
            color: #92664C;
            position: relative;
            right: -20px;
            bottom: 12px;
        }
       
    </style>
";
    }

    // line 59
    public function block_page($context, array $blocks = array())
    {
        // line 60
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
        
        <div id=\"contenedor\">
        ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 64
            echo "            
            
            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> <div class= 'item_cliente' > <img style=\"width: 50px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/user.png"), "html", null, true);
            echo "\" /> <h2 style=\"display: inline-block; margin-left: 25px; margin-right: 40px;\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo " </h2> <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correo", array()), "html", null, true);
            echo " </h3> </div> </a>

                        
                
              
            
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>
        
        
        
  
  
        <ul>
        <li>

            <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("cliente_new");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/addcliente.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Agregar Cliente</div> </div> </a>
            
        </li>
    </ul>
    </div>
                
    ";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:Cliente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 83,  136 => 74,  115 => 66,  111 => 64,  107 => 63,  102 => 60,  99 => 59,  44 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }
}
