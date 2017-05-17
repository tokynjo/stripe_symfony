<?php

/* base.html.twig */
class __TwigTemplate_4bf22577cd0fc6fb38ae7da0612b7897680b07ed86e0761cc47bd63c5694be45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8de2c33ec8c35b7c71a9d43c2d2fd4a58b30ce951c33ede8a04e2b88c249c865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de2c33ec8c35b7c71a9d43c2d2fd4a58b30ce951c33ede8a04e2b88c249c865->enter($__internal_8de2c33ec8c35b7c71a9d43c2d2fd4a58b30ce951c33ede8a04e2b88c249c865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8de2c33ec8c35b7c71a9d43c2d2fd4a58b30ce951c33ede8a04e2b88c249c865->leave($__internal_8de2c33ec8c35b7c71a9d43c2d2fd4a58b30ce951c33ede8a04e2b88c249c865_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_acfb9c940b1bb14510b1a6e6326a7f9cf3ba14e9aa461a3add8444c59a7b1488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfb9c940b1bb14510b1a6e6326a7f9cf3ba14e9aa461a3add8444c59a7b1488->enter($__internal_acfb9c940b1bb14510b1a6e6326a7f9cf3ba14e9aa461a3add8444c59a7b1488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_acfb9c940b1bb14510b1a6e6326a7f9cf3ba14e9aa461a3add8444c59a7b1488->leave($__internal_acfb9c940b1bb14510b1a6e6326a7f9cf3ba14e9aa461a3add8444c59a7b1488_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c65868ad1ea524f7dc6d3d779408d54e573e85f4bda15dbfb79d50816f0a257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c65868ad1ea524f7dc6d3d779408d54e573e85f4bda15dbfb79d50816f0a257->enter($__internal_0c65868ad1ea524f7dc6d3d779408d54e573e85f4bda15dbfb79d50816f0a257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0c65868ad1ea524f7dc6d3d779408d54e573e85f4bda15dbfb79d50816f0a257->leave($__internal_0c65868ad1ea524f7dc6d3d779408d54e573e85f4bda15dbfb79d50816f0a257_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e980369f08219dbd8354c5a7dd629768d5170558f79ffba8c2eb84197a780203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e980369f08219dbd8354c5a7dd629768d5170558f79ffba8c2eb84197a780203->enter($__internal_e980369f08219dbd8354c5a7dd629768d5170558f79ffba8c2eb84197a780203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e980369f08219dbd8354c5a7dd629768d5170558f79ffba8c2eb84197a780203->leave($__internal_e980369f08219dbd8354c5a7dd629768d5170558f79ffba8c2eb84197a780203_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4acb3400f4c4373d89741c96fcb85a1e47f754be3b27b012d1e90cd68ace216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4acb3400f4c4373d89741c96fcb85a1e47f754be3b27b012d1e90cd68ace216->enter($__internal_b4acb3400f4c4373d89741c96fcb85a1e47f754be3b27b012d1e90cd68ace216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b4acb3400f4c4373d89741c96fcb85a1e47f754be3b27b012d1e90cd68ace216->leave($__internal_b4acb3400f4c4373d89741c96fcb85a1e47f754be3b27b012d1e90cd68ace216_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\symfony3.0\\app\\Resources\\views\\base.html.twig");
    }
}
