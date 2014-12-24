<?php

/* ::base.html.twig */
class __TwigTemplate_3c53dc7bc6f51de270312d417b186b00f2f301d12f165cc6c6c0ba2788caacc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"//code.jquery.com/jquery-2.1.3.min.js\"></script>
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 23
        $this->displayBlock('navigation', $context, $blocks);
        // line 32
        echo "        <div>
            ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 34
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 39
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 41
        echo "        </div>

        ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 44
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 45
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        <div>
            ";
        // line 52
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 54
        echo "        </div>
                </div>

                <hgroup>
                    <h2>";
        // line 58
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 59
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 67
        $this->displayBlock('sidebar', $context, $blocks);
        // line 68
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "            </div>
        </section>

        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "BlogFarce";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        // line 24
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("BlogBundle_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("BlogBundle_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 52
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 53
        echo "            ";
    }

    // line 58
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">symblog</a>";
    }

    // line 59
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
    }

    // line 67
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        // line 72
        echo "                    BlogFarce
                ";
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 77,  249 => 72,  246 => 71,  241 => 67,  236 => 64,  228 => 59,  220 => 58,  216 => 53,  213 => 52,  205 => 28,  201 => 27,  197 => 26,  193 => 24,  190 => 23,  184 => 13,  180 => 11,  177 => 10,  171 => 6,  166 => 78,  164 => 77,  159 => 74,  157 => 71,  152 => 68,  150 => 67,  146 => 65,  144 => 64,  136 => 59,  132 => 58,  126 => 54,  124 => 52,  120 => 50,  114 => 49,  105 => 46,  100 => 45,  95 => 44,  91 => 43,  87 => 41,  79 => 39,  73 => 36,  69 => 35,  64 => 34,  62 => 33,  59 => 32,  57 => 23,  45 => 15,  43 => 10,  36 => 6,  29 => 1,);
    }
}
