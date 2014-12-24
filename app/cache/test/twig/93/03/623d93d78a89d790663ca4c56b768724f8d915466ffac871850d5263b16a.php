<?php

/* :Page:index.html.twig */
class __TwigTemplate_9303623d93d78a89d790663ca4c56b768724f8d915466ffac871850d5263b16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BlogFarce/layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogFarce/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 6
            echo "        <article class=\"blog\">
            <div>
                <p><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</a></p>
            </div>
            <div>
                <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "body", array()), "html", null, true);
            echo "</p>
            </div>
            <div><p>&nbsp;</p></div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 18
    public function block_sidebar($context, array $blocks = array())
    {
        // line 19
        echo "    New sidebar content
";
    }

    public function getTemplateName()
    {
        return ":Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  62 => 18,  49 => 11,  41 => 8,  37 => 6,  32 => 5,  29 => 4,);
    }
}
