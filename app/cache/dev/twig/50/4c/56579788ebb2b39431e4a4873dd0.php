<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_504c56579788ebb2b39431e4a4873dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  114 => 30,  85 => 43,  61 => 23,  21 => 1,  36 => 6,  175 => 56,  170 => 51,  167 => 50,  157 => 43,  149 => 37,  83 => 47,  66 => 37,  56 => 32,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 36,  134 => 50,  132 => 27,  127 => 46,  123 => 30,  109 => 39,  93 => 33,  90 => 45,  54 => 23,  133 => 39,  124 => 24,  111 => 29,  80 => 26,  60 => 16,  52 => 12,  97 => 57,  95 => 47,  88 => 50,  78 => 25,  71 => 14,  25 => 4,  72 => 16,  64 => 24,  53 => 13,  34 => 5,  92 => 20,  86 => 28,  79 => 39,  19 => 2,  42 => 15,  40 => 7,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 46,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 10,  32 => 11,  24 => 11,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 9,  49 => 11,  43 => 8,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 26,  125 => 42,  121 => 23,  115 => 13,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 44,  75 => 37,  57 => 13,  50 => 10,  46 => 9,  44 => 8,  39 => 9,  33 => 5,  30 => 4,  27 => 5,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 27,  67 => 19,  62 => 36,  59 => 22,  55 => 12,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 5,  31 => 6,  28 => 3,);
    }
}
