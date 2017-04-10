<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f53598199cc3172408221a89a9eac1511d4f127300a5f528a0185e5de92d91d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1744ba41e5bad97f09c146253281547a0169bd13133f88966fbd67ed0bd9fbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1744ba41e5bad97f09c146253281547a0169bd13133f88966fbd67ed0bd9fbb1->enter($__internal_1744ba41e5bad97f09c146253281547a0169bd13133f88966fbd67ed0bd9fbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_78765996e7b1d996a67bd51bbb7388c3f9eeb5c41784967df4e54d69efe27d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78765996e7b1d996a67bd51bbb7388c3f9eeb5c41784967df4e54d69efe27d17->enter($__internal_78765996e7b1d996a67bd51bbb7388c3f9eeb5c41784967df4e54d69efe27d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1744ba41e5bad97f09c146253281547a0169bd13133f88966fbd67ed0bd9fbb1->leave($__internal_1744ba41e5bad97f09c146253281547a0169bd13133f88966fbd67ed0bd9fbb1_prof);

        
        $__internal_78765996e7b1d996a67bd51bbb7388c3f9eeb5c41784967df4e54d69efe27d17->leave($__internal_78765996e7b1d996a67bd51bbb7388c3f9eeb5c41784967df4e54d69efe27d17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a20180a3c6fc7fbd06c83805e4c90a14bb7f32246a45367c2f3dafa3e68a3460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20180a3c6fc7fbd06c83805e4c90a14bb7f32246a45367c2f3dafa3e68a3460->enter($__internal_a20180a3c6fc7fbd06c83805e4c90a14bb7f32246a45367c2f3dafa3e68a3460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_946a730c76b2b01025183c9694b841bb026932bbc99c8bd36f6bfbf152b5a5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946a730c76b2b01025183c9694b841bb026932bbc99c8bd36f6bfbf152b5a5f8->enter($__internal_946a730c76b2b01025183c9694b841bb026932bbc99c8bd36f6bfbf152b5a5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_946a730c76b2b01025183c9694b841bb026932bbc99c8bd36f6bfbf152b5a5f8->leave($__internal_946a730c76b2b01025183c9694b841bb026932bbc99c8bd36f6bfbf152b5a5f8_prof);

        
        $__internal_a20180a3c6fc7fbd06c83805e4c90a14bb7f32246a45367c2f3dafa3e68a3460->leave($__internal_a20180a3c6fc7fbd06c83805e4c90a14bb7f32246a45367c2f3dafa3e68a3460_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4a8ba348df53e86db82e254222e4cf77767ae5a371858f803a943432b059d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a8ba348df53e86db82e254222e4cf77767ae5a371858f803a943432b059d42->enter($__internal_f4a8ba348df53e86db82e254222e4cf77767ae5a371858f803a943432b059d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af3c575ac09124662a65fcf820ba5649bedce02d9780163e0b2c1e78cbd948b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3c575ac09124662a65fcf820ba5649bedce02d9780163e0b2c1e78cbd948b6->enter($__internal_af3c575ac09124662a65fcf820ba5649bedce02d9780163e0b2c1e78cbd948b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_af3c575ac09124662a65fcf820ba5649bedce02d9780163e0b2c1e78cbd948b6->leave($__internal_af3c575ac09124662a65fcf820ba5649bedce02d9780163e0b2c1e78cbd948b6_prof);

        
        $__internal_f4a8ba348df53e86db82e254222e4cf77767ae5a371858f803a943432b059d42->leave($__internal_f4a8ba348df53e86db82e254222e4cf77767ae5a371858f803a943432b059d42_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df542052ad05e2016e5608c4d181528c57abbdfa30c6acb66d0ae2a4f0b1a155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df542052ad05e2016e5608c4d181528c57abbdfa30c6acb66d0ae2a4f0b1a155->enter($__internal_df542052ad05e2016e5608c4d181528c57abbdfa30c6acb66d0ae2a4f0b1a155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_30046379c3dac1d45912adbaec75b8d37765177aac162300c565688cfe83e5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30046379c3dac1d45912adbaec75b8d37765177aac162300c565688cfe83e5bd->enter($__internal_30046379c3dac1d45912adbaec75b8d37765177aac162300c565688cfe83e5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_30046379c3dac1d45912adbaec75b8d37765177aac162300c565688cfe83e5bd->leave($__internal_30046379c3dac1d45912adbaec75b8d37765177aac162300c565688cfe83e5bd_prof);

        
        $__internal_df542052ad05e2016e5608c4d181528c57abbdfa30c6acb66d0ae2a4f0b1a155->leave($__internal_df542052ad05e2016e5608c4d181528c57abbdfa30c6acb66d0ae2a4f0b1a155_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/jmill/test/test_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
