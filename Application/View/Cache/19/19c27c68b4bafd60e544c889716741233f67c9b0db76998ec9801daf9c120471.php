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

/* Usuario/form.html */
class __TwigTemplate_a6ad3187a72eca5cd806dfd988eccc6a82fc08397bea60795820435e9638cf41 extends Template
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
        echo "<h3>Modo: ";
        echo twig_escape_filter($this->env, ($context["op"] ?? null), "html", null, true);
        echo "</h3>
<form action=\"/Usuario/recebePost?op=";
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 9
        echo "    <div class=\"form-group\">
        <label for=\"nome\">Nome</label>
        <input type=\"text\" name=\"nome\" class=\"form-control\" id=\"nome\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "nome", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"login\">Login</label>
        <input type=\"text\" name=\"login\" class=\"form-control\" id=\"login\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "login", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Email</label>
        <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
        <label for=\"senha\">Senha</label>
        <input type=\"password\" name=\"senha\" class=\"form-control\" id=\"senha\">
    </div>
    
    <button type=\"submit\" class=\"btn btn-success\">Enviar</button>
</form>";
    }

    public function getTemplateName()
    {
        return "Usuario/form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  69 => 15,  62 => 11,  58 => 9,  52 => 6,  48 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Usuario/form.html", "/home/dmmaycon/Projects/DevApp/mdmvc/Application/View/Html/Usuario/form.html");
    }
}
