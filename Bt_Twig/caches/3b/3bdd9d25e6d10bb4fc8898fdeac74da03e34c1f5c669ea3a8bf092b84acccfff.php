<?php

/* blog.html */
class __TwigTemplate_c47239be3c5cab21e18bf8d210ea6ec76a49bd3466b69a056409c7c543ab8181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "blog.html", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Company
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class=\"col-lg-12 text-center\">
                    <img class=\"img-responsive img-border img-full\" src=\"/assets/img/slide-1.jpg\" alt=\"\">
                    <h2>Post Title
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href=\"#\" class=\"btn btn-default btn-lg\">Read More</a>
                    <hr>
                </div>
                <div class=\"col-lg-12 text-center\">
                    <img class=\"img-responsive img-border img-full\" src=\"/assets/img/slide-2.jpg\" alt=\"\">
                    <h2>Post Title
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href=\"#\" class=\"btn btn-default btn-lg\">Read More</a>
                    <hr>
                </div>
                <div class=\"col-lg-12 text-center\">
                    <img class=\"img-responsive img-border img-full\" src=\"/assets/img/slide-3.jpg\" alt=\"\">
                    <h2>Post Title
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <a href=\"#\" class=\"btn btn-default btn-lg\">Read More</a>
                    <hr>
                </div>
                <div class=\"col-lg-12 text-center\">
                    <ul class=\"pager\">
                        <li class=\"previous\"><a href=\"#\">&larr; Older</a>
                        </li>
                        <li class=\"next\"><a href=\"#\">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

";
    }

    public function getTemplateName()
    {
        return "blog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html' %}*/
/* */
/* {% block container %}*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="box">*/
/*                 <div class="col-lg-12">*/
/*                     <hr>*/
/*                     <h2 class="intro-text text-center">Company*/
/*                         <strong>blog</strong>*/
/*                     </h2>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <img class="img-responsive img-border img-full" src="/assets/img/slide-1.jpg" alt="">*/
/*                     <h2>Post Title*/
/*                         <br>*/
/*                         <small>October 13, 2013</small>*/
/*                     </h2>*/
/*                     <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>*/
/*                     <a href="#" class="btn btn-default btn-lg">Read More</a>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <img class="img-responsive img-border img-full" src="/assets/img/slide-2.jpg" alt="">*/
/*                     <h2>Post Title*/
/*                         <br>*/
/*                         <small>October 13, 2013</small>*/
/*                     </h2>*/
/*                     <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>*/
/*                     <a href="#" class="btn btn-default btn-lg">Read More</a>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <img class="img-responsive img-border img-full" src="/assets/img/slide-3.jpg" alt="">*/
/*                     <h2>Post Title*/
/*                         <br>*/
/*                         <small>October 13, 2013</small>*/
/*                     </h2>*/
/*                     <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>*/
/*                     <a href="#" class="btn btn-default btn-lg">Read More</a>*/
/*                     <hr>*/
/*                 </div>*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <ul class="pager">*/
/*                         <li class="previous"><a href="#">&larr; Older</a>*/
/*                         </li>*/
/*                         <li class="next"><a href="#">Newer &rarr;</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/* {% endblock %}*/
