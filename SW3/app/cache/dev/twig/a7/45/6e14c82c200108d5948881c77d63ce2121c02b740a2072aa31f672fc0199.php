<?php

/* BufeteAplicacionBundle::Default/admin.html.twig */
class __TwigTemplate_a7456e14c82c200108d5948881c77d63ce2121c02b740a2072aa31f672fc0199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BufeteMainBundle::Default/micaso.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BufeteMainBundle::Default/micaso.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 5
        echo "                     ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/micaso.css"), "html", null, true);
        echo "\" />
\t\t\t
                        <style>
                            
                            .opcion{
                                display: inline-block;
                                width: 115px;
                                height: 115px;
                                background-color: #e9eaed;
                                -webkit-box-shadow: 0px 0px 5px 0px rgba(50, 50, 50, 0.75);
                                -moz-box-shadow:    0px 0px 5px 0px rgba(50, 50, 50, 0.75);
                                box-shadow:         0px 0px 5px 0px rgba(50, 50, 50, 0.75);
                                -webkit-border-radius: 5px;
                                -moz-border-radius: 5px;
                                border-radius: 5px;
                                text-align: center;
                                padding: 10px;
                                margin-right: 25px;
                                margin-bottom: 35px;
               
                            } 
                            
                            .opcion img{
                                width: 80px
                            }
                            
                            
                            #contenedor{
                                    margin-left: 270px;
                                    margin-right: 200px;
                                    padding-top: 50px;
                                    padding: 0 auto;
                            }
                            
                            .label{
                                background-color: #92664C;
                                color: white;
                                width: 119px;
                                position: relative;
                                -moz-border-radius-bottomright: 5px;
                                -webkit-border-bottom-right-radius: 5px;
                                border-bottom-right-radius: 5px;
                                -moz-border-radius-bottomleft: 5px;
                                -webkit-border-bottom-left-radius: 5px;
                                border-bottom-left-radius: 5px;
                                right: 12px;
                            }
                            
                            .link{
                                
                            }
                        </style>   
                ";
    }

    // line 60
    public function block_header($context, array $blocks = array())
    {
        // line 61
        echo "\t\t<div id=\"header\">
\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t<!-- Logo -->
\t\t\t\t\t<div id=\"logo\">
                                            <a href=\"#\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/lo.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 72
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "home"));
        echo " \">William David Mesa Mejia</a></li>
\t\t\t\t\t\t\t
                                                        <li class=\"active\"><a href=\" ";
        // line 74
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "noticias"));
        echo "\">Salir</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>

\t\t\t</div>
\t\t</div>

        ";
    }

    // line 83
    public function block_page($context, array $blocks = array())
    {
        // line 84
        echo "            <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
\t\t
                    
                <div id=\"contenedor\">
                    
                    <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("procesojudicial");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/documento.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Ver Procesos</div> </div> </a>
                    <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("procesojudicial_new");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/masdocumento.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Agregar Proceso</div> </div> </a>
                    <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/cliente.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Ver Clientes</div> </div> </a>
                    <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("cliente_new");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/addcliente.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Agregar Cliente</div> </div> </a>
 
                    <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("noticia");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/noticia.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Noticias</div> </div> </a>
                    <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("noticia_new");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/addnoticia.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Redactar Noticia</div> </div> </a>
                    <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("actualizar");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/actualizar.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Actualizar Estado</div> </div> </a>
                    <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("procesojudicial");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/noti.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Notificar</div> </div> </a>
                    
                    <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("documento");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/doc.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Documentos</div> </div> </a>
                    <a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("procesojudicial");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/msg.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Responder MSG</div> </div> </a>
                    <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("procesojudicial");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/ajustes.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Ajustes</div> </div> </a>
                    <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("procesojudicial");
        echo "\" class=\"link\"> <div class=\"opcion\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/ayuda.png"), "html", null, true);
        echo "\"/> <div class=\"label\">Ayuda</div> </div> </a>
                    
                </div>  
                    
                            
            </div>
          ";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle::Default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 102,  212 => 101,  206 => 100,  200 => 99,  193 => 97,  187 => 96,  181 => 95,  175 => 94,  168 => 92,  162 => 91,  156 => 90,  150 => 89,  143 => 84,  140 => 83,  127 => 74,  122 => 72,  113 => 66,  106 => 61,  103 => 60,  46 => 6,  41 => 5,  38 => 4,  11 => 1,);
    }
}
