<?php

/* base.html.twig */
class __TwigTemplate_c33c931b2aa299e883e5a998a627a87b8fca6ee6e598f8c66fb25a4220c21390 extends Twig_Template
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
        $__internal_4be68a978ce43e1300c5d1e6f4f83133c1bc753630591769f09adffe373640bf = $this->env->getExtension("native_profiler");
        $__internal_4be68a978ce43e1300c5d1e6f4f83133c1bc753630591769f09adffe373640bf->enter($__internal_4be68a978ce43e1300c5d1e6f4f83133c1bc753630591769f09adffe373640bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_4be68a978ce43e1300c5d1e6f4f83133c1bc753630591769f09adffe373640bf->leave($__internal_4be68a978ce43e1300c5d1e6f4f83133c1bc753630591769f09adffe373640bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_219d68de87b993f8b8906fd4031dd4ff40eda476b38898d7d94528bea4bd8153 = $this->env->getExtension("native_profiler");
        $__internal_219d68de87b993f8b8906fd4031dd4ff40eda476b38898d7d94528bea4bd8153->enter($__internal_219d68de87b993f8b8906fd4031dd4ff40eda476b38898d7d94528bea4bd8153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_219d68de87b993f8b8906fd4031dd4ff40eda476b38898d7d94528bea4bd8153->leave($__internal_219d68de87b993f8b8906fd4031dd4ff40eda476b38898d7d94528bea4bd8153_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa60f2f375bce17c3f7bc5d367e705374baa19bc6bbd47a699284b07c8d9cb1e = $this->env->getExtension("native_profiler");
        $__internal_fa60f2f375bce17c3f7bc5d367e705374baa19bc6bbd47a699284b07c8d9cb1e->enter($__internal_fa60f2f375bce17c3f7bc5d367e705374baa19bc6bbd47a699284b07c8d9cb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa60f2f375bce17c3f7bc5d367e705374baa19bc6bbd47a699284b07c8d9cb1e->leave($__internal_fa60f2f375bce17c3f7bc5d367e705374baa19bc6bbd47a699284b07c8d9cb1e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9bb792938abdd7525634fce76581a6622fda368095dd5dee103db13bb962bb4 = $this->env->getExtension("native_profiler");
        $__internal_c9bb792938abdd7525634fce76581a6622fda368095dd5dee103db13bb962bb4->enter($__internal_c9bb792938abdd7525634fce76581a6622fda368095dd5dee103db13bb962bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9bb792938abdd7525634fce76581a6622fda368095dd5dee103db13bb962bb4->leave($__internal_c9bb792938abdd7525634fce76581a6622fda368095dd5dee103db13bb962bb4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dfa4630ddfe152459507107dc3deca829ca4bd2c6216568100dd3ae706575bec = $this->env->getExtension("native_profiler");
        $__internal_dfa4630ddfe152459507107dc3deca829ca4bd2c6216568100dd3ae706575bec->enter($__internal_dfa4630ddfe152459507107dc3deca829ca4bd2c6216568100dd3ae706575bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dfa4630ddfe152459507107dc3deca829ca4bd2c6216568100dd3ae706575bec->leave($__internal_dfa4630ddfe152459507107dc3deca829ca4bd2c6216568100dd3ae706575bec_prof);

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
}
