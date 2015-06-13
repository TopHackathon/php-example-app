<?php

/* default/index.html.twig */
class __TwigTemplate_8c35ce0cb738d68f1275fd44d25dd4743c21de59c42389199961c05d9c678b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf55271deb6611d8d9f7fffce77069dc1cb8d2efd77c2771b6cc8aef060592de = $this->env->getExtension("native_profiler");
        $__internal_bf55271deb6611d8d9f7fffce77069dc1cb8d2efd77c2771b6cc8aef060592de->enter($__internal_bf55271deb6611d8d9f7fffce77069dc1cb8d2efd77c2771b6cc8aef060592de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf55271deb6611d8d9f7fffce77069dc1cb8d2efd77c2771b6cc8aef060592de->leave($__internal_bf55271deb6611d8d9f7fffce77069dc1cb8d2efd77c2771b6cc8aef060592de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d096c0f92503f6023c8e2e475790d103c4f4dd487b9c583e09c80668f864d3a = $this->env->getExtension("native_profiler");
        $__internal_2d096c0f92503f6023c8e2e475790d103c4f4dd487b9c583e09c80668f864d3a->enter($__internal_2d096c0f92503f6023c8e2e475790d103c4f4dd487b9c583e09c80668f864d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_2d096c0f92503f6023c8e2e475790d103c4f4dd487b9c583e09c80668f864d3a->leave($__internal_2d096c0f92503f6023c8e2e475790d103c4f4dd487b9c583e09c80668f864d3a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
