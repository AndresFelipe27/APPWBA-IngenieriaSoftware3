<?php

/* BufeteMainBundle:Default:noticias.html.twig */
class __TwigTemplate_f634d1349bafd77739e7d18fbefdea2df366d8874c74d16a82b684a4295b3b8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::pantallacompleta.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::pantallacompleta.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<div id=\"header\">
\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t<!-- Logo -->
\t\t\t\t\t<div id=\"logo\">
                                            <a href=\"#\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/lo.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 15
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "home"));
        echo " \">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 16
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "quien"));
        echo "\">Quienes Somos</a></li>
                                                        <li  class=\"active\"><a href=\" ";
        // line 17
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "noticias"));
        echo "\">Noticias</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 18
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "asesorias"));
        echo "\">Asesorias en Linea</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 19
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "micaso"));
        echo "\">Mi caso</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>

\t\t\t</div>
\t\t</div>
\t<!-- Header -->
        ";
    }

    // line 29
    public function block_page($context, array $blocks = array())
    {
        // line 30
        echo "            
            
 
       <div id=\"page\">
\t\t\t\t
\t\t\t
            <div id=\"main\" class=\"container\"  style=\" margin-top: -9em;\">
                    <div class=\"row\">
\t\t\t<div class=\"12u\">
\t\t\t\t\t\t
                                            
                                            <section>
\t\t\t\t\t\t\t<header>
                                                            <h2>Noticias</h2>
                                                            <br><br>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t
                                                
                                                ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 49
            echo "                                                       <header>
                                                           <div class= 'item_noticia' > 
                                                            <strong><span class=\"byline\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
            echo "</span></strong>
                                                       </header>
            
                                                               <p>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "noticia", array()), "html", null, true);
            echo "</p>
                                                               <p>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fecha", array()), "m/d/Y"), "html", null, true);
            echo " </p> 
                                                               
                                               
                                                
                                                        </div>

                                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "       
\t\t\t\t\t\t</section>
                                
                          </div>         
                    </div>
            </div>

        </div>
";
    }

    public function getTemplateName()
    {
        return "BufeteMainBundle:Default:noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 61,  125 => 55,  121 => 54,  115 => 51,  111 => 49,  107 => 48,  87 => 30,  84 => 29,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  47 => 9,  40 => 4,  37 => 3,  11 => 1,);
    }
}
