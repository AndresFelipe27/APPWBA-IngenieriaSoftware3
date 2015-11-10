<?php

/* BufeteMainBundle:Default:micaso.html.twig */
class __TwigTemplate_2093cba7e2f0997fff9a9e54384ecb7f270ad37deb3ca9f73f3e5564851e85a1 extends Twig_Template
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
\t\t\t
                ";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "\t\t<div id=\"header\">
\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t<!-- Logo -->
\t\t\t\t\t<div id=\"logo\">
                                            <a href=\"#\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/lo.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 23
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "home"));
        echo " \">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 24
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "quien"));
        echo "\">Quienes Somos</a></li>
                                                        <li><a href=\" ";
        // line 25
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "noticias"));
        echo "\">Noticias</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 26
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "asesorias"));
        echo "\">Asesorias en Linea</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\" ";
        // line 27
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "micaso"));
        echo "\">Mi caso</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>

\t\t\t</div>
\t\t</div>
\t<!-- Header -->
        ";
    }

    // line 38
    public function block_banner($context, array $blocks = array())
    {
        // line 39
        echo "        ";
    }

    // line 43
    public function block_page($context, array $blocks = array())
    {
        // line 44
        echo "\t
        \t\t
\t\t\t\t
\t\t\t<!-- Main -->
\t\t\t<div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #92664C;height: 550px;\">
\t\t\t\t
                           <div class=\"login\">
                            <h1>Ingrese el codigo de su caso</h1>
                            <form method=\"post\" action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("vercaso");
        echo "\">
                                <div style=\"text-align: center\">
                                    <p><input type=\"password\" name=\"codigo\" value=\"\" placeholder=\"Codigo\"></p>
                                    <p class=\"submit\"><input type=\"submit\" name=\"commit\" value=\"Ingresar\"></p>
                                </div>
                            </form>
                          </div>
                            
\t\t\t</div>
\t\t\t<!-- Main -->

                        
\t<!-- /Main -->

\t
        
        ";
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "        ";
    }

    public function getTemplateName()
    {
        return "BufeteMainBundle:Default:micaso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 73,  143 => 72,  122 => 52,  112 => 44,  109 => 43,  105 => 39,  102 => 38,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  65 => 17,  58 => 12,  55 => 11,  48 => 6,  43 => 5,  40 => 4,  11 => 1,);
    }
}
