<?php

/* layout.html */
class __TwigTemplate_986b7efe686960331a1a9763cfe227ba47e6d767753cd50f1f586287130f879a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'jsEx' => array($this, 'block_jsEx'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("header.html", "layout.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("nav.html", "layout.html", 3)->display($context);
        // line 4
        echo "

";
        // line 6
        $this->displayBlock('container', $context, $blocks);
        // line 8
        echo "

";
        // line 10
        $this->loadTemplate("footer.html", "layout.html", 10)->display($context);
        // line 11
        echo "
<!-- jQuery -->
<script src=\"/assets/js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"/assets/js/bootstrap.min.js\"></script>
";
        // line 17
        $this->displayBlock('jsEx', $context, $blocks);
        // line 19
        echo "<!-- Script to Activate the Carousel -->
<script>
  \$('.carousel').carousel({
    interval: 5000 //changes the speed
  })
</script>

</body>

</html>
";
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
    }

    // line 17
    public function block_jsEx($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  64 => 6,  50 => 19,  48 => 17,  40 => 11,  38 => 10,  34 => 8,  32 => 6,  28 => 4,  26 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% include 'header.html' %}*/
/* */
/* {% include 'nav.html' %}*/
/* */
/* */
/* {% block container %}*/
/* {% endblock %}*/
/* */
/* */
/* {% include 'footer.html' %}*/
/* */
/* <!-- jQuery -->*/
/* <script src="/assets/js/jquery.js"></script>*/
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="/assets/js/bootstrap.min.js"></script>*/
/* {% block jsEx %}*/
/* {% endblock %}*/
/* <!-- Script to Activate the Carousel -->*/
/* <script>*/
/*   $('.carousel').carousel({*/
/*     interval: 5000 //changes the speed*/
/*   })*/
/* </script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
