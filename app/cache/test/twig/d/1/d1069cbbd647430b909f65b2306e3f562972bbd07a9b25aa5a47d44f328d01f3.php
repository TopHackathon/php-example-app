<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d1069cbbd647430b909f65b2306e3f562972bbd07a9b25aa5a47d44f328d01f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61fec91a6e18ded6da191cd94d4f90c51727088ae17094cd227f1dac26f730f5 = $this->env->getExtension("native_profiler");
        $__internal_61fec91a6e18ded6da191cd94d4f90c51727088ae17094cd227f1dac26f730f5->enter($__internal_61fec91a6e18ded6da191cd94d4f90c51727088ae17094cd227f1dac26f730f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61fec91a6e18ded6da191cd94d4f90c51727088ae17094cd227f1dac26f730f5->leave($__internal_61fec91a6e18ded6da191cd94d4f90c51727088ae17094cd227f1dac26f730f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bf4f556ec82004865085433dc98901bf41a5bcf85b9f2dc18fc804770541faf = $this->env->getExtension("native_profiler");
        $__internal_2bf4f556ec82004865085433dc98901bf41a5bcf85b9f2dc18fc804770541faf->enter($__internal_2bf4f556ec82004865085433dc98901bf41a5bcf85b9f2dc18fc804770541faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2bf4f556ec82004865085433dc98901bf41a5bcf85b9f2dc18fc804770541faf->leave($__internal_2bf4f556ec82004865085433dc98901bf41a5bcf85b9f2dc18fc804770541faf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4dd53c00d07cc67f2545b380d2fa6fe59b3c6818780ad9973ecb28bffec33d4 = $this->env->getExtension("native_profiler");
        $__internal_d4dd53c00d07cc67f2545b380d2fa6fe59b3c6818780ad9973ecb28bffec33d4->enter($__internal_d4dd53c00d07cc67f2545b380d2fa6fe59b3c6818780ad9973ecb28bffec33d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d4dd53c00d07cc67f2545b380d2fa6fe59b3c6818780ad9973ecb28bffec33d4->leave($__internal_d4dd53c00d07cc67f2545b380d2fa6fe59b3c6818780ad9973ecb28bffec33d4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a36949e23e82695677f766651bac22a109d6c4b9aaf1dd211cfb9114b6f7cc45 = $this->env->getExtension("native_profiler");
        $__internal_a36949e23e82695677f766651bac22a109d6c4b9aaf1dd211cfb9114b6f7cc45->enter($__internal_a36949e23e82695677f766651bac22a109d6c4b9aaf1dd211cfb9114b6f7cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a36949e23e82695677f766651bac22a109d6c4b9aaf1dd211cfb9114b6f7cc45->leave($__internal_a36949e23e82695677f766651bac22a109d6c4b9aaf1dd211cfb9114b6f7cc45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
