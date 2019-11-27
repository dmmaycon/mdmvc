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
class __TwigTemplate_b04305010cc9a3fbf6c313c30a7c38a196f1d639041ba5aadfee2d045aa9455b extends Template
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
<p>Desenvolvido por <a href=\"https://github.com/mayconmoraes-dm\">Maycon de Moraes</p>

    ";
    }

    public function getTemplateName()
    {
        return "welcome.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome.html", "C:\\repositorios\\mdmvc\\application\\view\\html\\welcome.html");
    }
}
