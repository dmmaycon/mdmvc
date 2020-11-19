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

/* layout-base.html */
class __TwigTemplate_c1b4c0eca7cb3f0c27c2e438c3a7767b1b4eeeeb006744e963193f61d463e487 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"Base do Framework MDMVC\">
    <meta name=\"author\" content=\"Maycon de Moraes\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap-grid.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap-reboot.min.css\">
    <link href=\"/assets/css/sticky-footer-navbar.css\" rel=\"stylesheet\">
    <title>MDMVC</title>
</head>
<body>
    <!-- toda a applicação fica dentro desta div -->
    ";
        // line 17
        $this->loadTemplate("navbar-base.html", "layout-base.html", 17)->display($context);
        // line 18
        echo "    
    <main role=\"main\" class=\"container\">
        ";
        // line 20
        echo ($context["main"] ?? null);
        echo "
    </main>

    ";
        // line 23
        $this->loadTemplate("footer-base.html", "layout-base.html", 23)->display($context);
        // line 24
        echo "    

    <script src=\"/assets/js/jquery-3.4.1.min.js\"></script>
    <script src=\"/assets/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layout-base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  67 => 23,  61 => 20,  57 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-base.html", "/home/dmmaycon/Projects/DevApp/mdmvc/Core/Template/layout-base.html");
    }
}
