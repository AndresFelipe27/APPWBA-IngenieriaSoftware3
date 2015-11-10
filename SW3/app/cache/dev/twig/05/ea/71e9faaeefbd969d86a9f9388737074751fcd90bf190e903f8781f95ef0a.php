<?php

/* BufeteMainBundle:Default:asesoria.html.twig */
class __TwigTemplate_05ea71e9faaeefbd969d86a9f9388737074751fcd90bf190e903f8781f95ef0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'banner' => array($this, 'block_banner'),
            'page' => array($this, 'block_page'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::index.html.twig";
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
                        
                        <style>
                            .form {
  position: absolute;
  top: 50%;
  left: 50%;
  background: #fff;
  width: 285px;
  margin: -140px 0 0 -182px;
  padding: 40px;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
}
.form h2 {
  margin: 0 0 20px;
  line-height: 1;
  color:#92664C;
  font-size: 18px;
  font-weight: 400;
}
.in, textarea {
  outline: none;
  display: block;
  width: 100% !important;
  margin: 0 0 20px !important;
  padding: 10px 15px !important ;
  border: 1px solid #ccc !important;
  color: #ccc;
  -webkit-box-sizing: border-box !important;
  -moz-box-sizing: border-box !important ;
  box-sizing: border-box !important;
  font-size: 14px !important;
  font-wieght: 400;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition: 0.2s linear;
  -moz-transition: 0.2s linear;
  -ms-transition: 0.2s linear;
  -o-transition: 0.2s linear;
  transition: 0.2s linear;
}
.in:focus , textarea:focus{
  color: #333;
  border: 1px solid #44c4e7;
}
.boton {
  cursor: pointer ;
  width: 85%!important;
 

}


                            
                            
                        </style>
                            
\t\t\t
                ";
    }

    // line 67
    public function block_header($context, array $blocks = array())
    {
        // line 68
        echo "\t\t<div id=\"header\">
\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t<!-- Logo -->
\t\t\t\t\t<div id=\"logo\">
                                            <a href=\"#\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/lo.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 79
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "home"));
        echo " \">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 80
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "quien"));
        echo "\">Quienes Somos</a></li>
                                                        <li><a href=\" ";
        // line 81
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "noticias"));
        echo "\">Noticias</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 82
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "asesorias"));
        echo "\">Asesorias en Linea</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\" ";
        // line 83
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "micaso"));
        echo "\">Mi caso</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>

\t\t\t</div>
\t\t</div>
\t<!-- Header -->
        ";
    }

    // line 94
    public function block_banner($context, array $blocks = array())
    {
        // line 95
        echo "        ";
    }

    // line 99
    public function block_page($context, array $blocks = array())
    {
        // line 100
        echo "\t
        \t\t
\t\t\t\t
\t\t\t<!-- Main -->
\t\t\t<div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #92664C;height: 550px;\">
\t\t\t\t
                          
                         <div class=\"form animated flipInX\">
                            <h2>Deja tu Pregunta</h2>
                            <form method=\"post\" action=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("vercaso");
        echo "\">
                              <input class=\"in\" placeholder=\"Nombre Completo\" type=\"text\" name=\"nombre\"/>
                              <input class=\"in\" placeholder=\"Correo\" type=\"text\" name=\"correo\"/>
                              <input class=\"in\" placeholder=\"Telefono\" type=\"text\" name=\"telefono\"/>
                              <textarea placeholder=\"Pregunta\" type=\"text\" name=\"pregunta\"></textarea>
                              <input class=\"boton\" type=\"submit\" name=\"enviar\" value=\"Enviar\"/>
                          </form>
                         </div>
                            
                            
                            
                            
\t\t\t</div>
\t\t\t<!-- Main -->

                        
\t<!-- /Main -->

\t
        
        ";
    }

    // line 133
    public function block_footer($context, array $blocks = array())
    {
        // line 134
        echo "        ";
    }

    public function getTemplateName()
    {
        return "BufeteMainBundle:Default:asesoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 134,  204 => 133,  179 => 109,  168 => 100,  165 => 99,  161 => 95,  158 => 94,  146 => 83,  142 => 82,  138 => 81,  134 => 80,  130 => 79,  121 => 73,  114 => 68,  111 => 67,  48 => 6,  43 => 5,  40 => 4,  11 => 1,);
    }
}
