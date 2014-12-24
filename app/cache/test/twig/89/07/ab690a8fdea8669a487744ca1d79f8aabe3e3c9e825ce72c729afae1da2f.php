<?php

/* :Blog:show.html.twig */
class __TwigTemplate_8907ab690a8fdea8669a487744ca1d79f8aabe3e3c9e825ce72c729afae1da2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BlogFarce/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\">
    \$(document).ready(function() {
        function show_comments(container) {
            console.log('h1');
            \$.get('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_blog_show_comments", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))), "html", null, true);
        echo "',
                function(data, status) {
                    console.log('h2');
                    \$.each(data, function(index, value) {
                        console.log('h3');
                        \$(container).prepend(
                                '<div class=\"comment\" style=\"display: block;margin: 5px; margin-top: 10px; padding: 4px; border: 1px solid #DDDDDD; border-radius: 4px;box-shadow: 0 0 0 3px #EEEEEE\" ><p>' + value.comment + '</p>' +
                                '<p>By ' + value.user + '</p></div>'
                        );
                });
            }, \"json\");
        }
        
        function hide_comments(container) {
            \$('.comment').remove();
        }
        
        \$('#show_comments').on('click', function() {show_comments('#comment_box');\$('#show_comments').hide();\$('#hide_comments').show();});
        \$('#hide_comments').on('click', function() {hide_comments('#comment_box');\$('#hide_comments').hide();\$('#show_comments').show();});
    });
</script>
    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "imageFile", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "body", array()), "html", null, true);
        echo "
            </p>
        </div>
            <div>
                <a href=\"#\" id=\"show_comments\">Show Comments (";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["num_comments"]) ? $context["num_comments"] : $this->getContext($context, "num_comments")), "html", null, true);
        echo ")</a>
                <a href=\"#\" id=\"hide_comments\" style=\"display:none\" >Hide Comments (";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["num_comments"]) ? $context["num_comments"] : $this->getContext($context, "num_comments")), "html", null, true);
        echo ")</a>
                <div id=\"comment_box\">
                    <div>
                        <h3Add a comment</h3>
                        <div>
                            ";
        // line 49
        $this->env->loadTemplate("Comment/new.html.twig")->display(array_merge($context, array("blog" => (isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 50
        echo "                        </div>
                    </div>
                </div>
            </div>
    </article>
";
    }

    public function getTemplateName()
    {
        return ":Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  108 => 49,  100 => 44,  96 => 43,  89 => 39,  81 => 36,  76 => 34,  70 => 33,  44 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
