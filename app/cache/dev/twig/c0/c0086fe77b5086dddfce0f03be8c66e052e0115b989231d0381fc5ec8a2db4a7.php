<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bde54871ba5e7ddf1ceb6b775c963b5e169aa1e609b86632dca43edfcb2f1640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94a26b50c8b2f20d38300259cc6b1f7b7338e9caac6553866b5e0ce2767860fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a26b50c8b2f20d38300259cc6b1f7b7338e9caac6553866b5e0ce2767860fd->enter($__internal_94a26b50c8b2f20d38300259cc6b1f7b7338e9caac6553866b5e0ce2767860fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a26b50c8b2f20d38300259cc6b1f7b7338e9caac6553866b5e0ce2767860fd->leave($__internal_94a26b50c8b2f20d38300259cc6b1f7b7338e9caac6553866b5e0ce2767860fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57acfe2eb4f450a89a43d638486bc6b9ef5582855cfbde24cd15cfbc2176c159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57acfe2eb4f450a89a43d638486bc6b9ef5582855cfbde24cd15cfbc2176c159->enter($__internal_57acfe2eb4f450a89a43d638486bc6b9ef5582855cfbde24cd15cfbc2176c159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_57acfe2eb4f450a89a43d638486bc6b9ef5582855cfbde24cd15cfbc2176c159->leave($__internal_57acfe2eb4f450a89a43d638486bc6b9ef5582855cfbde24cd15cfbc2176c159_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07fe580103dc039c2daf16aa2cb0a98eff7a34a9d33d6750fe64fe5699309fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fe580103dc039c2daf16aa2cb0a98eff7a34a9d33d6750fe64fe5699309fc3->enter($__internal_07fe580103dc039c2daf16aa2cb0a98eff7a34a9d33d6750fe64fe5699309fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_07fe580103dc039c2daf16aa2cb0a98eff7a34a9d33d6750fe64fe5699309fc3->leave($__internal_07fe580103dc039c2daf16aa2cb0a98eff7a34a9d33d6750fe64fe5699309fc3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b795ef102d6cbaaf4e4b515b5693cadb8bc17606857a5a59d80cea2d3d05a85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b795ef102d6cbaaf4e4b515b5693cadb8bc17606857a5a59d80cea2d3d05a85f->enter($__internal_b795ef102d6cbaaf4e4b515b5693cadb8bc17606857a5a59d80cea2d3d05a85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b795ef102d6cbaaf4e4b515b5693cadb8bc17606857a5a59d80cea2d3d05a85f->leave($__internal_b795ef102d6cbaaf4e4b515b5693cadb8bc17606857a5a59d80cea2d3d05a85f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Projets/Perso/OC-Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
