<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e26efcbe1c826448e0c1aaecbfa1b3e2d894c90c41fa359da6d9141e7f631d4 extends Twig_Template
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
        $__internal_773dfc52bd24cafb27f8a09066c6038da646b57ba347c1cd06d449c7334dae75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773dfc52bd24cafb27f8a09066c6038da646b57ba347c1cd06d449c7334dae75->enter($__internal_773dfc52bd24cafb27f8a09066c6038da646b57ba347c1cd06d449c7334dae75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a43ca8518ef147dd774c60e50005a4a4038981fb464162c553facfec1b831912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43ca8518ef147dd774c60e50005a4a4038981fb464162c553facfec1b831912->enter($__internal_a43ca8518ef147dd774c60e50005a4a4038981fb464162c553facfec1b831912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773dfc52bd24cafb27f8a09066c6038da646b57ba347c1cd06d449c7334dae75->leave($__internal_773dfc52bd24cafb27f8a09066c6038da646b57ba347c1cd06d449c7334dae75_prof);

        
        $__internal_a43ca8518ef147dd774c60e50005a4a4038981fb464162c553facfec1b831912->leave($__internal_a43ca8518ef147dd774c60e50005a4a4038981fb464162c553facfec1b831912_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ac8735950e5f0748ed8f685a303e15d0e825147aa5fea5412443a04bb638af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac8735950e5f0748ed8f685a303e15d0e825147aa5fea5412443a04bb638af0->enter($__internal_2ac8735950e5f0748ed8f685a303e15d0e825147aa5fea5412443a04bb638af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7ad6ad4756ec9b7a4039019cad803eb709d86d8afda3f240158b20e244be4eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad6ad4756ec9b7a4039019cad803eb709d86d8afda3f240158b20e244be4eb5->enter($__internal_7ad6ad4756ec9b7a4039019cad803eb709d86d8afda3f240158b20e244be4eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7ad6ad4756ec9b7a4039019cad803eb709d86d8afda3f240158b20e244be4eb5->leave($__internal_7ad6ad4756ec9b7a4039019cad803eb709d86d8afda3f240158b20e244be4eb5_prof);

        
        $__internal_2ac8735950e5f0748ed8f685a303e15d0e825147aa5fea5412443a04bb638af0->leave($__internal_2ac8735950e5f0748ed8f685a303e15d0e825147aa5fea5412443a04bb638af0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2340c369f6ad0d4e48143bffa7a7b2301ddf712cb9c73e62181147782b31ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2340c369f6ad0d4e48143bffa7a7b2301ddf712cb9c73e62181147782b31ea9->enter($__internal_b2340c369f6ad0d4e48143bffa7a7b2301ddf712cb9c73e62181147782b31ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54f1218fc014e05a420ce7bd92f5ed9a93efc02042172f7743704d337c6487cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f1218fc014e05a420ce7bd92f5ed9a93efc02042172f7743704d337c6487cb->enter($__internal_54f1218fc014e05a420ce7bd92f5ed9a93efc02042172f7743704d337c6487cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_54f1218fc014e05a420ce7bd92f5ed9a93efc02042172f7743704d337c6487cb->leave($__internal_54f1218fc014e05a420ce7bd92f5ed9a93efc02042172f7743704d337c6487cb_prof);

        
        $__internal_b2340c369f6ad0d4e48143bffa7a7b2301ddf712cb9c73e62181147782b31ea9->leave($__internal_b2340c369f6ad0d4e48143bffa7a7b2301ddf712cb9c73e62181147782b31ea9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b51dcbe969b1a8b2c5351cecf876fca487e0e4b9a713b60b3f016d93bdebfbbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51dcbe969b1a8b2c5351cecf876fca487e0e4b9a713b60b3f016d93bdebfbbd->enter($__internal_b51dcbe969b1a8b2c5351cecf876fca487e0e4b9a713b60b3f016d93bdebfbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11112603112b4eed663aad9530347d34e81ec4f323240ba0bedb8c381a447625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11112603112b4eed663aad9530347d34e81ec4f323240ba0bedb8c381a447625->enter($__internal_11112603112b4eed663aad9530347d34e81ec4f323240ba0bedb8c381a447625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_11112603112b4eed663aad9530347d34e81ec4f323240ba0bedb8c381a447625->leave($__internal_11112603112b4eed663aad9530347d34e81ec4f323240ba0bedb8c381a447625_prof);

        
        $__internal_b51dcbe969b1a8b2c5351cecf876fca487e0e4b9a713b60b3f016d93bdebfbbd->leave($__internal_b51dcbe969b1a8b2c5351cecf876fca487e0e4b9a713b60b3f016d93bdebfbbd_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/jmill/test/test_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
