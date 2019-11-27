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

/* footer-base.html */
class __TwigTemplate_83121679b2e7c403eed7aec5db9b4154ee8c89204b2090000d6af335ec675f2b extends Template
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
        echo "<footer class=\"footer\">
    <div class=\"container\">
      <span class=\"text-muted\">MDMVC 2019 &copy; Maycon de Moraes</span>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "footer-base.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer-base.html", "C:\\repositorios\\mdmvc\\core\\template\\footer-base.html");
    }
}
