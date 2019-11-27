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

/* navbar-base.html */
class __TwigTemplate_f5101f3312c70356178de0dc25edd538f5589a4bd69909911a662daa6a7b3df2 extends Template
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
        echo "<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
      <a class=\"navbar-brand\" href=\"#\">MDMVC</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Links</a>
          </li>
          <!-- <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
          </li> -->
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Usuário\" aria-label=\"Usuário\">
          <input class=\"form-control mr-sm-2\" type=\"password\" placeholder=\"Password\" aria-label=\"Password\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Logar</button>
        </form>
      </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "navbar-base.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar-base.html", "C:\\repositorios\\mdmvc\\core\\template\\navbar-base.html");
    }
}
