<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_862e242a6b6018db8fd0bfc70c7243d736d033ca0e8afe87b6a50539d89922f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e154ccccb79f520c39489446cbad9e9b28e3e019adb2c54ec989963702268345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e154ccccb79f520c39489446cbad9e9b28e3e019adb2c54ec989963702268345->enter($__internal_e154ccccb79f520c39489446cbad9e9b28e3e019adb2c54ec989963702268345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e154ccccb79f520c39489446cbad9e9b28e3e019adb2c54ec989963702268345->leave($__internal_e154ccccb79f520c39489446cbad9e9b28e3e019adb2c54ec989963702268345_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20fddfb262e42771e300439c2768077416ed3b06880218ccf5fe6f79b43c2bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fddfb262e42771e300439c2768077416ed3b06880218ccf5fe6f79b43c2bc1->enter($__internal_20fddfb262e42771e300439c2768077416ed3b06880218ccf5fe6f79b43c2bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20fddfb262e42771e300439c2768077416ed3b06880218ccf5fe6f79b43c2bc1->leave($__internal_20fddfb262e42771e300439c2768077416ed3b06880218ccf5fe6f79b43c2bc1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6835cfb2ff089b97bcf0efe6f4ac5b964eaa8930392fd8ca219b7b7878df577f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6835cfb2ff089b97bcf0efe6f4ac5b964eaa8930392fd8ca219b7b7878df577f->enter($__internal_6835cfb2ff089b97bcf0efe6f4ac5b964eaa8930392fd8ca219b7b7878df577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6835cfb2ff089b97bcf0efe6f4ac5b964eaa8930392fd8ca219b7b7878df577f->leave($__internal_6835cfb2ff089b97bcf0efe6f4ac5b964eaa8930392fd8ca219b7b7878df577f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15efd7921e4c2ad795261fc82a0180c8574de58670417b8b73c9d526404f66cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15efd7921e4c2ad795261fc82a0180c8574de58670417b8b73c9d526404f66cb->enter($__internal_15efd7921e4c2ad795261fc82a0180c8574de58670417b8b73c9d526404f66cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_15efd7921e4c2ad795261fc82a0180c8574de58670417b8b73c9d526404f66cb->leave($__internal_15efd7921e4c2ad795261fc82a0180c8574de58670417b8b73c9d526404f66cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Projets/Perso/OC-Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
