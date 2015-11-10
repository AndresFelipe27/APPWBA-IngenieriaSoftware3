<?php

/* BufeteMainBundle:Default:quien.html.twig */
class __TwigTemplate_d810189ecf4beb3b4496f2bcd4945d3434cfcc6cdfdd679fbddd6bf40c42f8ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::sidebarderecha.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'titulo' => array($this, 'block_titulo'),
            'subtitulo' => array($this, 'block_subtitulo'),
            's1' => array($this, 'block_s1'),
            'lista1' => array($this, 'block_lista1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::sidebarderecha.html.twig";
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
\t\t\t\t\t\t\t<li class=\"active\"><a href=\" ";
        // line 16
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "quien"));
        echo "\">Quienes Somos</a></li>
                                                        <li><a href=\" ";
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

    // line 30
    public function block_titulo($context, array $blocks = array())
    {
        // line 31
        echo "    <h2>Grupo Juridico AC&O</h2>
";
    }

    // line 34
    public function block_subtitulo($context, array $blocks = array())
    {
        // line 35
        echo "    ALVAREZ, CARDONA & OCAMPO
";
    }

    // line 38
    public function block_s1($context, array $blocks = array())
    {
        // line 39
        echo "    <h2>Areas de Trabajo</h2>
";
    }

    // line 42
    public function block_lista1($context, array $blocks = array())
    {
        // line 43
        echo "    <li><a href=\"#\">Administración de Justicia</a></li>
    <li><a href=\"#\">Asesorías Jurídicas de Empresariales</a></li>
    <li><a href=\"#\">Derecho Administrativo y Administración Pública</a></li>
    <li><a href=\"#\">Derecho Ambiental</a></li>
    <li><a href=\"#\">Derecho de Familia</a></li>
    <li><a href=\"#\">Derecho Informático</a></li>
    <li><a href=\"#\">Derechos Humanos</a></li>
    <li><a href=\"#\">Derecho Penal</a></li>
    <li><a href=\"#\">Derecho Procesal Civil</a></li>
    <li><a href=\"#\">Elaboración de Normas Jurídicas</a></li>
    <li><a href=\"#\">Ministerio Público</a></li>
    <li><a href=\"#\">Derecho Constitucional</a></li>
    
";
    }

    public function getTemplateName()
    {
        return "BufeteMainBundle:Default:quien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  111 => 42,  106 => 39,  103 => 38,  98 => 35,  95 => 34,  90 => 31,  87 => 30,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  50 => 9,  43 => 4,  40 => 3,  11 => 1,);
    }
}
