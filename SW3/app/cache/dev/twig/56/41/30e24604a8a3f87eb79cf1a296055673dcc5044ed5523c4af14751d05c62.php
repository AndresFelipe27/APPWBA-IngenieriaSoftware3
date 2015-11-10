<?php

/* BufeteAplicacionBundle:Noticia:index.html.twig */
class __TwigTemplate_564130e24604a8a3f87eb79cf1a296055673dcc5044ed5523c4af14751d05c62 extends Twig_Template
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
        // line 4
        echo "   
        
        ";
        // line 6
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

    // line 60
    public function block_page($context, array $blocks = array())
    {
        // line 61
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 550px;\">
        
        <div id=\"contenedor\">
        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 65
            echo "            
            
            <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> <div class= 'item_cliente' > <img style=\"width: 50px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/noticia.png"), "html", null, true);
            echo "\" /> <h2 style=\"display: inline-block; margin-left: 25px; margin-right: 40px;\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo " </h2> <h3>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "m/d/Y"), "html", null, true);
            echo " </h3> </div> </a>

                        
                
              
            
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </div>
        
        
        
  
  
        <ul>
        <li>

            <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("noticia_new");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/noticia.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Agregar Noticia</div> </div> </a>
            
        </li>
    </ul>
    </div>
                
    ";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:Noticia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 84,  135 => 75,  115 => 67,  111 => 65,  107 => 64,  102 => 61,  99 => 60,  44 => 6,  40 => 4,  37 => 3,  11 => 1,);
    }
}
