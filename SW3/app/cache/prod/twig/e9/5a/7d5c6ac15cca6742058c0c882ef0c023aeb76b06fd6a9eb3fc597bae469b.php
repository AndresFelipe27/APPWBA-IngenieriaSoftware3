<?php

/* ::sidebarderecha.html.twig */
class __TwigTemplate_e95a7d5c6ac15cca6742058c0c882ef0c023aeb76b06fd6a9eb3fc597bae469b extends Twig_Template
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
            'page' => array($this, 'block_page'),
            'titulo' => array($this, 'block_titulo'),
            'subtitulo' => array($this, 'block_subtitulo'),
            'parrafos' => array($this, 'block_parrafos'),
            's1' => array($this, 'block_s1'),
            'lista1' => array($this, 'block_lista1'),
            's2' => array($this, 'block_s2'),
            'lista2' => array($this, 'block_lista2'),
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

    // line 3
    public function block_page($context, array $blocks = array())
    {
        // line 4
        echo "\t<!-- Main -->
\t\t<div id=\"page\">
\t\t\t\t
\t\t\t<!-- Main -->
\t\t\t<div id=\"main\" class=\"container\" style=\" margin-top: -10em;\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"9u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<header>
                                                            
\t\t\t\t\t\t\t";
        // line 14
        $this->displayBlock('titulo', $context, $blocks);
        // line 15
        echo "\t\t\t\t\t\t\t\t<span class=\"byline\"> ";
        $this->displayBlock('subtitulo', $context, $blocks);
        echo " </span>
\t\t\t\t\t\t\t</header>
                                                        ";
        // line 17
        $this->displayBlock('parrafos', $context, $blocks);
        // line 22
        echo "\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section class=\"sidebar\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t";
        // line 28
        $this->displayBlock('s1', $context, $blocks);
        // line 29
        echo "\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"style1\">
                                                                ";
        // line 31
        $this->displayBlock('lista1', $context, $blocks);
        // line 38
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"sidebar\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t";
        // line 42
        $this->displayBlock('s2', $context, $blocks);
        // line 43
        echo "\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"style1\">
                                                                ";
        // line 45
        $this->displayBlock('lista2', $context, $blocks);
        // line 48
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Main -->

\t\t</div>
        
\t<!-- /Main -->

        
        ";
    }

    // line 14
    public function block_titulo($context, array $blocks = array())
    {
        echo "\t<h2>Integer gravida nibh quis urna</h2> ";
    }

    // line 15
    public function block_subtitulo($context, array $blocks = array())
    {
        echo " Augue praesent a lacus at urna congue rutrum ";
    }

    // line 17
    public function block_parrafos($context, array $blocks = array())
    {
        // line 18
        echo "\t\t\t\t\t\t\t<p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo. Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc lectus vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl.</p>
\t\t\t\t\t\t\t<p>Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo. Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc lectus vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl.</p>
\t\t\t\t\t\t\t<p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit.</p>
                                                        ";
    }

    // line 28
    public function block_s1($context, array $blocks = array())
    {
        echo "<h2>Feugiat Tempus</h2> ";
    }

    // line 31
    public function block_lista1($context, array $blocks = array())
    {
        // line 32
        echo "\t\t\t\t\t\t\t\t<li><a href=\"#\">Maecenas luctus lectus at sapien</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiam rhoncus volutpat erat</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Donec dictum metus in sapien</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Nulla luctus eleifend purus</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Maecenas luctus lectus at sapien</a></li>
                                                                ";
    }

    // line 42
    public function block_s2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 45
    public function block_lista2($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t\t\t\t\t\t
                                                                ";
    }

    public function getTemplateName()
    {
        return "::sidebarderecha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 46,  161 => 45,  155 => 42,  146 => 32,  143 => 31,  137 => 28,  130 => 18,  127 => 17,  121 => 15,  115 => 14,  98 => 48,  96 => 45,  92 => 43,  90 => 42,  84 => 38,  82 => 31,  78 => 29,  76 => 28,  68 => 22,  66 => 17,  60 => 15,  58 => 14,  46 => 4,  43 => 3,  11 => 1,);
    }
}
