<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b7d43a40824c52c1fee37adbb2eec784a27ddbf71a3ea15a83460398df480c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31bf3a45ae3faf5bbaff20ad8ffe805f7b47f42993f4aa5b139e9950dc13391c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31bf3a45ae3faf5bbaff20ad8ffe805f7b47f42993f4aa5b139e9950dc13391c->enter($__internal_31bf3a45ae3faf5bbaff20ad8ffe805f7b47f42993f4aa5b139e9950dc13391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_07140bc21a84e46b2fba898080f55166b57021176befc5d3f0fd55e2e63025f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07140bc21a84e46b2fba898080f55166b57021176befc5d3f0fd55e2e63025f6->enter($__internal_07140bc21a84e46b2fba898080f55166b57021176befc5d3f0fd55e2e63025f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31bf3a45ae3faf5bbaff20ad8ffe805f7b47f42993f4aa5b139e9950dc13391c->leave($__internal_31bf3a45ae3faf5bbaff20ad8ffe805f7b47f42993f4aa5b139e9950dc13391c_prof);

        
        $__internal_07140bc21a84e46b2fba898080f55166b57021176befc5d3f0fd55e2e63025f6->leave($__internal_07140bc21a84e46b2fba898080f55166b57021176befc5d3f0fd55e2e63025f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_944bb62f6940f2ac7c96dd721ccfe8c11752494cc6f6ca080b0c268edb6460d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944bb62f6940f2ac7c96dd721ccfe8c11752494cc6f6ca080b0c268edb6460d3->enter($__internal_944bb62f6940f2ac7c96dd721ccfe8c11752494cc6f6ca080b0c268edb6460d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1496b764c8a4b4bbcbd6568d54362b6b3e3cb1ab8da2946fd1469eb567b181bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1496b764c8a4b4bbcbd6568d54362b6b3e3cb1ab8da2946fd1469eb567b181bb->enter($__internal_1496b764c8a4b4bbcbd6568d54362b6b3e3cb1ab8da2946fd1469eb567b181bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1496b764c8a4b4bbcbd6568d54362b6b3e3cb1ab8da2946fd1469eb567b181bb->leave($__internal_1496b764c8a4b4bbcbd6568d54362b6b3e3cb1ab8da2946fd1469eb567b181bb_prof);

        
        $__internal_944bb62f6940f2ac7c96dd721ccfe8c11752494cc6f6ca080b0c268edb6460d3->leave($__internal_944bb62f6940f2ac7c96dd721ccfe8c11752494cc6f6ca080b0c268edb6460d3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_06eb705a1a6df9150edd412ad110408fa1848fc7fc6efa061880171af0af39f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06eb705a1a6df9150edd412ad110408fa1848fc7fc6efa061880171af0af39f4->enter($__internal_06eb705a1a6df9150edd412ad110408fa1848fc7fc6efa061880171af0af39f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed9d9537697de49baaf632eb893897a1c0e9b8293cfca0e758ffea414ce3e170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9d9537697de49baaf632eb893897a1c0e9b8293cfca0e758ffea414ce3e170->enter($__internal_ed9d9537697de49baaf632eb893897a1c0e9b8293cfca0e758ffea414ce3e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_ed9d9537697de49baaf632eb893897a1c0e9b8293cfca0e758ffea414ce3e170->leave($__internal_ed9d9537697de49baaf632eb893897a1c0e9b8293cfca0e758ffea414ce3e170_prof);

        
        $__internal_06eb705a1a6df9150edd412ad110408fa1848fc7fc6efa061880171af0af39f4->leave($__internal_06eb705a1a6df9150edd412ad110408fa1848fc7fc6efa061880171af0af39f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/jmill/test/test_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
