<?php

/* ::index.html.twig */
class __TwigTemplate_3bb1b16307d044fed04c060b93a5dadc7478387f28989c65552a532cc93be60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'banner' => array($this, 'block_banner'),
            'page' => array($this, 'block_page'),
            'accesos' => array($this, 'block_accesos'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tEx Machina by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
";
        // line 7
        $this->displayBlock('html', $context, $blocks);
    }

    public function block_html($context, array $blocks = array())
    {
        // line 8
        echo "<html>
        ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "        
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 275
        echo "</html>
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "\t<head>
\t\t<title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"keywords\" content=\"\" />
\t\t<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
\t\t<!--[if lte IE 8]><script src=\"js/html5shiv.js\"></script><![endif]-->
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/skel.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/skel-panels.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/init.js"), "html", null, true);
        echo "\"></script>
\t\t
                ";
        // line 22
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 28
        echo "\t\t
\t\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"css/ie/v8.css\" /><![endif]-->
\t\t<!--[if lte IE 9]><link rel=\"stylesheet\" href=\"css/ie/v9.css\" /><![endif]-->
                
                  
                   
\t</head>
        ";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 22
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 23
        echo "
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/skel-noscript.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/style-desktop.css"), "html", null, true);
        echo "\" />
                ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "\t<body class=\"homepage\">
\t<!-- Header -->
            ";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "        
        
        ";
        // line 66
        $this->displayBlock('banner', $context, $blocks);
        // line 75
        echo "\t
        
        <!-- Main -->
                ";
        // line 78
        $this->displayBlock('page', $context, $blocks);
        // line 204
        echo "\t\t</div>
                                                                        
                                                                        
\t<!-- /Main -->
              
        ";
        // line 209
        $this->displayBlock('footer', $context, $blocks);
        // line 273
        echo "\t</body>
        ";
    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        // line 41
        echo "\t\t<div id=\"header\">
\t\t\t<div class=\"container\">
\t\t\t\t\t
\t\t\t\t<!-- Logo -->
\t\t\t\t\t<div id=\"logo\">
                                            <a href=\"#\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/lo.png"), "html", null, true);
        echo "\"/></a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Nav -->
\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\" ";
        // line 52
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "home"));
        echo " \">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 53
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "quien"));
        echo "\">Quienes Somos</a></li>
                                                        <li><a href=\" ";
        // line 54
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "noticias"));
        echo "\">Noticias</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 55
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "asesorias"));
        echo "\">Asesorias en Linea</a></li>
\t\t\t\t\t\t\t<li><a href=\" ";
        // line 56
        echo $this->env->getExtension('routing')->getPath("bufete_main_homepage", array("pagina" => "micaso"));
        echo "\">Mi caso</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>

\t\t\t</div>
\t\t</div>
\t<!-- Header -->
        ";
    }

    // line 66
    public function block_banner($context, array $blocks = array())
    {
        // line 67
        echo "            
\t<!-- Banner -->
\t\t<div id=\"banner\">
\t\t\t<div class=\"container\">
\t\t\t</div>
\t\t</div>
\t<!-- /Banner -->
        ";
    }

    // line 78
    public function block_page($context, array $blocks = array())
    {
        // line 79
        echo "\t\t<div id=\"page\">

                        ";
        // line 81
        $this->displayBlock('accesos', $context, $blocks);
        // line 129
        echo "                        
                        
                        ";
        // line 131
        $this->displayBlock('main', $context, $blocks);
        // line 202
        echo "
                        ";
    }

    // line 81
    public function block_accesos($context, array $blocks = array())
    {
        // line 82
        echo "\t\t\t<!-- Extra -->
\t\t\t<div id=\"marketing\" class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Feugiat Tempus</h2>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p class=\"subtitle\">In posuere eleifend odio. Quisque semper augue mattis maecenas ligula.</p>
\t\t\t\t\t\t\t<p><a href=\"#\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/pics13.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">More</a>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Maecenas lectus</h2>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p class=\"subtitle\">In posuere eleifend odio. Quisque semper augue mattis maecenas ligula.</p>
\t\t\t\t\t\t\t<p><a href=\"#\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/pics14.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">More</a>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Luctus lectus</h2>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p class=\"subtitle\">In posuere eleifend odio. Quisque semper augue mattis maecenas ligula.</p>
\t\t\t\t\t\t\t<p><a href=\"#\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/pics15.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">More</a>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Posuere eleifend</h2>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p class=\"subtitle\">In posuere eleifend odio. Quisque semper augue mattis maecenas ligula.</p>
\t\t\t\t\t\t\t<p><a href=\"#\"><img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/pics16.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">More</a>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /Extra -->
\t\t\t";
    }

    // line 131
    public function block_main($context, array $blocks = array())
    {
        // line 132
        echo "\t\t\t<!-- Main -->
\t\t\t<div id=\"main\" class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"6u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Integer gravida nibh quis urna</h2>
\t\t\t\t\t\t\t\t<span class=\"byline\">Augue praesent a lacus at urna congue rutrum</span>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p>This is <strong>Ex Machina</strong>, a responsive HTML5 site template freebie by <a href=\"http://templated.co\">TEMPLATED</a>. Released for free under the <a href=\"http://templated.co/license\">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href=\"http://templated.co\">our site</a> or follow us on <a href=\"http://twitter.com/templatedco\">Twitter</a>.</p>
\t\t\t\t\t\t\t<p>Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat. Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat.</p>
\t\t\t\t\t\t\t<p>Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat. Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">More Details</a>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section class=\"sidebar\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Feugiat Tempus</h2>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"style2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/pics07.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t<p>Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/pics08.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t<p>Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/pics09.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t<p>Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/pics10.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t<p>Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section class=\"sidebar\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Feugiat Tempus</h2>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"style1\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Maecenas luctus lectus at sapien</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiam rhoncus volutpat erat</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Donec dictum metus in sapien</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Nulla luctus eleifend purus</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Maecenas luctus lectus at sapien</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"sidebar\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Nulla luctus eleifend</h2>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<ul class=\"style1\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Maecenas luctus lectus at sapien</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Donec dictum metus in sapien</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Integer gravida nibh quis urna</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiam posuere augue sit amet nisl</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Mauris vulputate dolor sit amet nibh</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Main -->
                        ";
    }

    // line 209
    public function block_footer($context, array $blocks = array())
    {
        // line 210
        echo "\t<!-- Footer -->
\t\t<div id=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<h2>Maecenas lectus</h2>
\t\t\t\t\t\t\t<div class=\"balloon\">
\t\t\t\t\t\t\t\t<blockquote>&ldquo;&nbsp;&nbsp;Donec leo, vivamus ullamcorper fermentum nibh in augue pulvinar ullamcorper metus praesent a lacus at urna congue ullamcorper  rutrum.&nbsp;&nbsp;&rdquo;<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<strong>&ndash;&nbsp;&nbsp;John Smith</strong></blockquote>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ballon-bgbtm\">&nbsp;</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<h2>Donec dictum</h2>
\t\t\t\t\t\t\t<ul class=\"default\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h3>Mauris vulputate dolor sit amet</h3>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h3>Fusce ultrices fringilla metus</h3>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h3>Donec dictum metus in sapien</h3>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<h2>Nulla leifend</h2>
\t\t\t\t\t\t\t<p>Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat.</p>
\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">More Collections</a>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"3u\">
\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t<h2>Luctus eleifend</h2>
\t\t\t\t\t\t\t<p><strong>Aliquam erat volutpat. Pellentesque tristique ante ut risus. </strong></p>
\t\t\t\t\t\t\t<p>Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit.</p>
\t\t\t\t\t\t\t<p>Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">More Collections</a>
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<!-- /Footer -->
        

\t<!-- Copyright -->
\t\t<div id=\"copyright\" class=\"container\">
\t\t\tDesign: <a href=\"http://templated.co\">TEMPLATED</a> Images: <a href=\"http://unsplash.com\">Unsplash</a> (<a href=\"http://unsplash.com/cc0\">CC0</a>)
\t\t</div>

        ";
    }

    public function getTemplateName()
    {
        return "::index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  400 => 210,  397 => 209,  357 => 166,  350 => 162,  343 => 158,  336 => 154,  312 => 132,  309 => 131,  297 => 121,  284 => 111,  271 => 101,  258 => 91,  247 => 82,  244 => 81,  239 => 202,  237 => 131,  233 => 129,  231 => 81,  227 => 79,  224 => 78,  213 => 67,  210 => 66,  198 => 56,  194 => 55,  190 => 54,  186 => 53,  182 => 52,  173 => 46,  166 => 41,  163 => 40,  158 => 273,  156 => 209,  149 => 204,  147 => 78,  142 => 75,  140 => 66,  136 => 64,  134 => 40,  130 => 38,  127 => 37,  121 => 26,  117 => 25,  113 => 24,  110 => 23,  107 => 22,  101 => 11,  90 => 28,  88 => 22,  83 => 20,  79 => 19,  75 => 18,  65 => 11,  62 => 10,  59 => 9,  54 => 275,  52 => 37,  49 => 36,  47 => 9,  44 => 8,  38 => 7,  30 => 1,);
    }
}
