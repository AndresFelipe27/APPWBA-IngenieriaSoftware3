<?php

/* BufeteAplicacionBundle:ProcesoJudicial:show.html.twig */
class __TwigTemplate_d912a7bb3d9d2670742182fee0fdf3b3dcc16ae35977016ffe7da94a88cae96b extends Twig_Template
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

    // line 3
    public function block_page($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"micaso\" class=\"fullsize\"  style=\"  background-color: #F0F0D8;height: 540px;\">
    <h1>ProcesoJudicial</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codigoconsulta</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "codigoConsulta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechain</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaIn", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechavencimiento</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaVencimiento", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prioridad</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prioridad", array()), "html", null, true);
        echo "</td>
            </tr>
            
            <tr>
                <th>Abogado a cargo</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "abogado", array()), "html", null, true);
        echo "</td>
            </tr>
            
            <tr>
                <th>Cliente </th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cliente", array()), "html", null, true);
        echo "</td>
            </tr>
            
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("procesojudicial");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("procesojudicial_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
    
    
    </div>
";
    }

    public function getTemplateName()
    {
        return "BufeteAplicacionBundle:ProcesoJudicial:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 62,  125 => 58,  117 => 53,  106 => 45,  98 => 40,  90 => 35,  83 => 31,  76 => 27,  69 => 23,  62 => 19,  55 => 15,  48 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}
