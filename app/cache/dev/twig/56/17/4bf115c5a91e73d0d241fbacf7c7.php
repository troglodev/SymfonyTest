<?php

/* ::base.html.twig */
class __TwigTemplate_56174bf115c5a91e73d0d241fbacf7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
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
        echo " - symblog</title>
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
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">

";
        // line 23
        $this->displayBlock('navigation', $context, $blocks);
        // line 32
        echo "                </div>


                <hgroup>
                    <h2>";
        // line 36
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 37
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>

            </header>

            <section class=\"main-col\">
                ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "                </section>
                <aside class=\"sidebar\">
                ";
        // line 46
        $this->displayBlock('sidebar', $context, $blocks);
        // line 47
        echo "                    </aside>

                    <div id=\"footer\">
                ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "                        </div>
                    </section>

        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "                </body>
            </html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
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
        echo "                    <nav>
                        <ul class=\"navigation\">
                            <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about"), "html", null, true);
        echo "\">About</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </nav>
";
    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">symblog</a>";
    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">creando un blog en Symfony2</a>";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    // line 46
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "                            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 56
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
        return array (  175 => 56,  170 => 51,  167 => 50,  162 => 46,  157 => 43,  149 => 37,  141 => 36,  132 => 27,  128 => 26,  124 => 24,  121 => 23,  115 => 13,  111 => 11,  108 => 10,  102 => 6,  97 => 57,  95 => 56,  90 => 53,  88 => 50,  83 => 47,  81 => 46,  77 => 44,  75 => 43,  66 => 37,  62 => 36,  56 => 32,  54 => 23,  42 => 15,  40 => 10,  33 => 6,  26 => 1,);
    }
}
