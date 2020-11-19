<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Tarefa/lista.html */
class __TwigTemplate_572ae6eb61a7f37b9676ab052deb95215222d144998a2c5897da30574b897a15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<a href=\"/tarefa/form?op=inclui\" class=\"btn btn-success\">Cadastrar</a>
<table class=\"table table-striped\">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Status</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tarefas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tarefa"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarefa"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarefa"], "nome", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarefa"], "descricao", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo ((twig_get_attribute($this->env, $this->source, $context["tarefa"], "status", [], "any", false, false, false, 17)) ? ("Encerrado") : ("Aberto"));
            echo "</td>
            <td> <a href=\"/tarefa/form?op=altera&id=";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarefa"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"btn btn-primary\"> Alterar </a> </td>
            <td> <a href=\"/tarefa/recebePost?op=deleta&id=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarefa"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"btn btn-danger\"> Excluir </a> </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarefa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "Tarefa/lista.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tarefa/lista.html", "/home/dmmaycon/Projects/DevApp/mdmvc/Application/View/Html/Tarefa/lista.html");
    }
}
