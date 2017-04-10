<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dae027eb2981f265b54ea1a4e8e6d99771f230f3406bbec133f56678914f8dbc extends Twig_Template
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
        $__internal_416d016cddf7990736a1dea61284407f7a399cb22ac1ae53d635c7b2bdec9a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416d016cddf7990736a1dea61284407f7a399cb22ac1ae53d635c7b2bdec9a1b->enter($__internal_416d016cddf7990736a1dea61284407f7a399cb22ac1ae53d635c7b2bdec9a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aab498bccba7d8eeb6efbfd5c41b86a0a89575d5598a617b868c5e779ec426fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab498bccba7d8eeb6efbfd5c41b86a0a89575d5598a617b868c5e779ec426fd->enter($__internal_aab498bccba7d8eeb6efbfd5c41b86a0a89575d5598a617b868c5e779ec426fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_416d016cddf7990736a1dea61284407f7a399cb22ac1ae53d635c7b2bdec9a1b->leave($__internal_416d016cddf7990736a1dea61284407f7a399cb22ac1ae53d635c7b2bdec9a1b_prof);

        
        $__internal_aab498bccba7d8eeb6efbfd5c41b86a0a89575d5598a617b868c5e779ec426fd->leave($__internal_aab498bccba7d8eeb6efbfd5c41b86a0a89575d5598a617b868c5e779ec426fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f4d7ced55b442e5a9884b66e100b3e380255d2d7f867c3cb51c7b9deb9a36526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d7ced55b442e5a9884b66e100b3e380255d2d7f867c3cb51c7b9deb9a36526->enter($__internal_f4d7ced55b442e5a9884b66e100b3e380255d2d7f867c3cb51c7b9deb9a36526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba301784c4bd4c06dbfe956603aa84738abb11947e862686ff74f9c862f359a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba301784c4bd4c06dbfe956603aa84738abb11947e862686ff74f9c862f359a7->enter($__internal_ba301784c4bd4c06dbfe956603aa84738abb11947e862686ff74f9c862f359a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba301784c4bd4c06dbfe956603aa84738abb11947e862686ff74f9c862f359a7->leave($__internal_ba301784c4bd4c06dbfe956603aa84738abb11947e862686ff74f9c862f359a7_prof);

        
        $__internal_f4d7ced55b442e5a9884b66e100b3e380255d2d7f867c3cb51c7b9deb9a36526->leave($__internal_f4d7ced55b442e5a9884b66e100b3e380255d2d7f867c3cb51c7b9deb9a36526_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_293d87085707ee9ee627c3c45c89bd8152e83a2ff0a8152570401f4f6e215c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293d87085707ee9ee627c3c45c89bd8152e83a2ff0a8152570401f4f6e215c6e->enter($__internal_293d87085707ee9ee627c3c45c89bd8152e83a2ff0a8152570401f4f6e215c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_53590062200182de766169f3c6b91b940c97b56c22b8943a0f62ee88a5fa830e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53590062200182de766169f3c6b91b940c97b56c22b8943a0f62ee88a5fa830e->enter($__internal_53590062200182de766169f3c6b91b940c97b56c22b8943a0f62ee88a5fa830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_53590062200182de766169f3c6b91b940c97b56c22b8943a0f62ee88a5fa830e->leave($__internal_53590062200182de766169f3c6b91b940c97b56c22b8943a0f62ee88a5fa830e_prof);

        
        $__internal_293d87085707ee9ee627c3c45c89bd8152e83a2ff0a8152570401f4f6e215c6e->leave($__internal_293d87085707ee9ee627c3c45c89bd8152e83a2ff0a8152570401f4f6e215c6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a9a2340242440f3e9aab5e65d15b7bafb657946f763ab8ead95660977fe99ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9a2340242440f3e9aab5e65d15b7bafb657946f763ab8ead95660977fe99ab->enter($__internal_1a9a2340242440f3e9aab5e65d15b7bafb657946f763ab8ead95660977fe99ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b40621dcd8134986c4325c49acd594475336822e0e3685ad118f3e9cecce512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b40621dcd8134986c4325c49acd594475336822e0e3685ad118f3e9cecce512->enter($__internal_2b40621dcd8134986c4325c49acd594475336822e0e3685ad118f3e9cecce512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2b40621dcd8134986c4325c49acd594475336822e0e3685ad118f3e9cecce512->leave($__internal_2b40621dcd8134986c4325c49acd594475336822e0e3685ad118f3e9cecce512_prof);

        
        $__internal_1a9a2340242440f3e9aab5e65d15b7bafb657946f763ab8ead95660977fe99ab->leave($__internal_1a9a2340242440f3e9aab5e65d15b7bafb657946f763ab8ead95660977fe99ab_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/home/jmill/test/test_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
