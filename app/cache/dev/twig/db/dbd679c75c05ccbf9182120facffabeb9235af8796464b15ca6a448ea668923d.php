<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_5461c157c2c12470e5a1b929fb43069829d9c6b04ab9bec507a7c87b0a1e2de5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_032def980983c7210c4d2b41d114cd393e940c7f1aad058218b322177a08e935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032def980983c7210c4d2b41d114cd393e940c7f1aad058218b322177a08e935->enter($__internal_032def980983c7210c4d2b41d114cd393e940c7f1aad058218b322177a08e935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
    <body>
        Hello World !
    </body>
</html>
";
        
        $__internal_032def980983c7210c4d2b41d114cd393e940c7f1aad058218b322177a08e935->leave($__internal_032def980983c7210c4d2b41d114cd393e940c7f1aad058218b322177a08e935_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        Hello World !
    </body>
</html>
", "OCPlatformBundle:Default:index.html.twig", "/var/www/html/Projets/Perso/OC-Symfony/src/OC/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
