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

/* Main/Header.html */
class __TwigTemplate_b0f5a5c7de9baf83b40de28e702adb21f01023b323bc9a40458c19e76ea68658 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Main/Header.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Main/Header.html"));

        // line 1
        echo "<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
    <h5 class=\"my-0 mr-md-auto font-weight-normal\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">МАГАЗИНИЩЕ</font></font></h5>
    <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Главная</font></font></a>
        <a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Админка</font></font></a>
        <a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Корзина</font></font></a>
        <a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Вход</font></font></a>
    </nav>
    <a class=\"btn btn-outline-primary\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_user");
        echo "\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Регистрация</font></font></a>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Main/Header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
    <h5 class=\"my-0 mr-md-auto font-weight-normal\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">МАГАЗИНИЩЕ</font></font></h5>
    <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"{{ path('main')}}\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Главная</font></font></a>
        <a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Админка</font></font></a>
        <a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Корзина</font></font></a>
        <a class=\"p-2 text-dark\" href=\"#\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Вход</font></font></a>
    </nav>
    <a class=\"btn btn-outline-primary\" href=\"{{ path('create_user')}}\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Регистрация</font></font></a>
</div>", "Main/Header.html", "/var/www/shoper/templates/Main/Header.html");
    }
}
