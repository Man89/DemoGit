<?php

/* nav.html */
class __TwigTemplate_5572eb6a07a69909f777a61492afc77c4a4ed821e40270c862635cc0a061910f extends Twig_Template
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
        echo "
<div class=\"brand\">Business Casual</div>
<div class=\"address-bar\">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

<!-- Navigation -->
<nav class=\"navbar navbar-default\" role=\"navigation\">
  <div class=\"container\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
      <a class=\"navbar-brand\" href=\"index.html\">Business Casual</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li>
          <a href=\"/\">Home</a>
        </li>
        <li>
          <a href=\"/?a=about\">About</a>
        </li>
        <li>
          <a href=\"/?a=blog\">Blog</a>
        </li>
        <li>
          <a href=\"/?a=contact\">Contact</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "nav.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* <div class="brand">Business Casual</div>*/
/* <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>*/
/* */
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-default" role="navigation">*/
/*   <div class="container">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->*/
/*       <a class="navbar-brand" href="index.html">Business Casual</a>*/
/*     </div>*/
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*         <li>*/
/*           <a href="/">Home</a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="/?a=about">About</a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="/?a=blog">Blog</a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="/?a=contact">Contact</a>*/
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*     <!-- /.navbar-collapse -->*/
/*   </div>*/
/*   <!-- /.container -->*/
/* </nav>*/
