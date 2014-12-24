<?php

/* :Page:about.html.twig */
class __TwigTemplate_d30f6a54764b4ef9918b2a27a190f184729f7c213ba3deedecd6e46514848f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "About Us";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <header>
        <h1>Not much</h1>
    </header>
    
    <p>About Us</p>
";
    }

    public function getTemplateName()
    {
        return ":Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
