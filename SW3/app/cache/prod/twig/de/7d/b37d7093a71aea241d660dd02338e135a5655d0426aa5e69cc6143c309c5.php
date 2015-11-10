<?php

/* BufeteAplicacionBundle:Abogado:index.html.twig */
class __TwigTemplate_de7db37d7093a71aea241d660dd02338e135a5655d0426aa5e69cc6143c309c5 extends Twig_Template
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

    // line 4
    public function block_page($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
 <style>
    
    .datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #8C8C8C; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #8A8A8A), color-stop(1, #3B3B3B) );background:-moz-linear-gradient( center top, #8A8A8A 5%, #3B3B3B 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8A8A8A', endColorstr='#3B3B3B');background-color:#8A8A8A; color:#FFFFFF; font-size: 14px; font-weight: bold; border-left: 1px solid #A3A3A3; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #000000; border-left: 1px solid #A8B3B5;font-size: 12px;font-weight: bold; }.datagrid table tbody .alt td { background: #EBEBEB; color: #000000; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #8C8C8C;background: #EBEBEB;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #F5F5F5;border: 1px solid #8C8C8C;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #8C8C8C), color-stop(1, #7D7D7D) );background:-moz-linear-gradient( center top, #8C8C8C 5%, #7D7D7D 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8C8C8C', endColorstr='#7D7D7D');background-color:#8C8C8C; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #7D7D7D; color: #F5F5F5; background: none; background-color:#8C8C8C;}div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important;} 
    .acciones {display: inline-block; margin-right: 10px;} 
    
</style>   
    
    <h1>Lista de Abogados</h1>

    
    <div class=\"datagrid\">
        <table>
            <thead>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Contrasena</th>
                <th>Actions</th>
                </tr>
            </thead>
    <tbody>
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abogado_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "celular", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "contrasena", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li class=\"acciones\">
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abogado_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Mostrar</a>
                    </li>
                    <li class=\"acciones\">
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abogado_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    
    </tbody>
</table></div>
    

        <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("abogado_new");
        echo "\">
                Agregar Nuevo Abogado
            </a>
        </li>
    </ul>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:Abogado:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  120 => 50,  108 => 44,  102 => 41,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  79 => 33,  73 => 32,  70 => 31,  66 => 30,  39 => 5,  36 => 4,  11 => 1,);
    }
}
