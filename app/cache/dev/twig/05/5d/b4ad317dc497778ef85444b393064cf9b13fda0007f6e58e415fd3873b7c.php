<?php

/* :Comment:new.html.twig */
class __TwigTemplate_055db4ad317dc497778ef85444b393064cf9b13fda0007f6e58e415fd3873b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        
        var forms = [
            '[ name=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"]'
        ];
        
        \$( forms.join(',') ).submit( function(e) {
            e.preventDefault();
            
            postForm(\$(this), function(response) {
                
            });
        });
        function postForm( form, \$callback ) {
            var values = {};
            \$.each(form.serializeArray(), function(i, field) {
                values[field.name] = field.value;
            });
            
            .ajax({
                type        : form.attr('method'),
                url         : form.attr('action'),
                data        : values,
                success     : function(data) {
                    callback(data);
                }
            });
        }
    });
</script>
<form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_blog_create_comment", array("id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'row');
        echo "
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'row');
        echo "
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Post Comment\" />
    </p>
</form>";
    }

    public function getTemplateName()
    {
        return ":Comment:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  74 => 37,  70 => 36,  65 => 34,  61 => 33,  55 => 32,  25 => 5,  19 => 1,);
    }
}
