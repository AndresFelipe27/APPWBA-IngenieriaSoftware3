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
            'style' => array($this, 'block_style'),
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
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        
        #contenedor{
            width: 100%;
        }
        
        .item{
            
            background-color: #e9eaed;
            
        }
        
        .cliente {
            
                width: 50px;
        }
        
        h3{
            
           
        }

        
    </style>
";
    }

    // line 30
    public function block_page($context, array $blocks = array())
    {
        // line 31
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
        
        <div id=\"contenedor\">
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "            
            
           <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> <div class=\"item\">
           
              <img style=\"width: 50px;\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/user.png"), "html", null, true);
            echo "\" />
            
                
              <h3 style=\"display: inline-block; margin-left: 25px; margin-right: 40px;\">
                ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo " </h3>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correo", array()), "html", null, true);
            echo "




                        


                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img style=\"width: 18px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/editar.png"), "html", null, true);
            echo "\" /></a>
                        
                
               </div>
             </a>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </div>
        
        
        
        
        <h1>Cliente list</h1>

    
    <table class=\"records_list\">
        <thead>
            <tr>
                <th class=\"a\">Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Direccion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 81
            echo "            <tr>
                <td><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "celular", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("cliente_new");
        echo "\">
                Create a new entry
            </a>
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
        return array (  211 => 105,  204 => 100,  192 => 94,  186 => 91,  179 => 87,  175 => 86,  171 => 85,  167 => 84,  163 => 83,  157 => 82,  154 => 81,  150 => 80,  127 => 59,  112 => 52,  101 => 44,  96 => 43,  89 => 39,  84 => 37,  80 => 35,  76 => 34,  71 => 31,  68 => 30,  40 => 4,  37 => 3,  11 => 1,);
    }
}
