<?php

/* BandInfo/info.html.twig */
class __TwigTemplate_a8f5a9f173055d082f885b262d107081ea02cb17534787dd2ddae69bb0ecef4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div>
    <div>
        Artist: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["artist"]) ? $context["artist"] : $this->getContext($context, "artist")), "html", null, true);
        echo "
        <p>&nbsp;</p>
    </div>
    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")), "html", null, true);
        echo "\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "BandInfo/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
