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

/* Tarefa/form.html */
class __TwigTemplate_e687348bf3a31b73c90a532c51ec0ea01675922565a3acf17239243ed309df09 extends Template
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
        echo "<h3>Todo List</h3>
<form action=\"/tarefa/recebePost?op=";
        // line 2
        echo twig_escape_filter($this->env, ($context["op"] ?? null), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 3
        if (0 !== twig_compare(($context["op"] ?? null), "inclui")) {
            // line 4
            echo "        <div class=\"form-group\">
            <label for=\"id\">ID</label>
            <input type=\"text\" name=\"id\" class=\"form-control\" id=\"id\" readonly value=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tarefa"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 9
        echo "    <div class=\"form-group\">
        <label for=\"nome\">Nome</label>
        <input type=\"text\" name=\"nome\" class=\"form-control\" id=\"nome\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tarefa"] ?? null), "nome", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"descricao\">Descrição</label>
        <textarea name=\"descricao\" id=\"descricao\" cols=\"30\" rows=\"5\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tarefa"] ?? null), "descricao", [], "any", false, false, false, 15), "html", null, true);
        echo "</textarea>
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Status</label>
        <input type=\"checkbox\" name=\"status\" ";
        // line 19
        echo ((twig_get_attribute($this->env, $this->source, ($context["tarefa"] ?? null), "status", [], "any", false, false, false, 19)) ? ("checked") : (""));
        echo ">
    </div>
    
    <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
</form>";
    }

    public function getTemplateName()
    {
        return "Tarefa/form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  67 => 15,  60 => 11,  56 => 9,  50 => 6,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tarefa/form.html", "/home/dmmaycon/Projects/DevApp/mdmvc/Application/View/Html/Tarefa/form.html");
    }
}
