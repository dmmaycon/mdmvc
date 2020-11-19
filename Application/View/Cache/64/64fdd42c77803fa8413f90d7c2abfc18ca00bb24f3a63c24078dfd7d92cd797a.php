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
class __TwigTemplate_9e39e4fad2d3bcd9cbc1d3173356816c021428d2548140872e86558172fb05aa extends Template
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
          ";
        // line 12
        if (0 === twig_compare(($context["logado"] ?? null), true)) {
            // line 13
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/Usuario\">Usuários</a>
          </li>
          ";
        }
        // line 17
        echo "          <!-- <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
          </li> -->
        </ul>
        ";
        // line 21
        if (0 !== twig_compare(($context["logado"] ?? null), true)) {
            // line 22
            echo "        <form class=\"form-inline mt-2 mt-md-0\" action=\"/login/logar\" method=\"POST\">
          <input class=\"form-control mr-sm-2\" type=\"text\" name=\"usuario\" placeholder=\"Usuário\" aria-label=\"Usuário\">
          <input class=\"form-control mr-sm-2\" type=\"password\" name=\"senha\" placeholder=\"Password\" aria-label=\"Password\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Logar</button>
        </form>
        ";
        } else {
            // line 28
            echo "          <span class=\"navbar-brand\">Bem vindo, ";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["session"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["nome"] ?? null) : null), "html", null, true);
            echo "</span>
          <a class=\"btn btn-outline-success my-2 my-sm-0\" >Perfil</a>
          <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"/login/logof\">Sair</a>
        </form>
        ";
        }
        // line 33
        echo "      </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "navbar-base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  74 => 28,  66 => 22,  64 => 21,  58 => 17,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar-base.html", "/home/dmmaycon/Projects/DevApp/mdmvc/Core/Template/navbar-base.html");
    }
}
