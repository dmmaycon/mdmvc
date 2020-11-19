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

/* welcome.html */
class __TwigTemplate_b35df96cc16c2e4e9484fe33c38ce51ddd83034e0801b28fde5f3972746afdbf extends Template
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
        echo "
<h1 class=\"mt-5\">Controller Default - MDMVC</h1>
<p class=\"lead\">Este é um microframework para micro aplicações, PHP >= 7 </code>.</p>
<p>Desenvolvido por <a href=\"https://github.com/dmmaycon\">Maycon de Moraes</p>
<hr>
<h1>";
        // line 6
        echo twig_escape_filter($this->env, ($context["logado"] ?? null), "html", null, true);
        echo "</h1>

    ";
    }

    public function getTemplateName()
    {
        return "welcome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome.html", "/home/dmmaycon/Projects/DevApp/mdmvc/Application/View/Html/welcome.html");
    }
}
