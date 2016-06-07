<?php

/* header.html */
class __TwigTemplate_684b65d859112b5e5c5c9453abee0c4da1b1ef1f22a571e6b9d28975a6a0bfbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cssExte' => array($this, 'block_cssExte'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Business Casual - Start Bootstrap Theme</title>

  <!-- Bootstrap Core CSS -->
  <link href=\"/assets/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Custom CSS -->
  <link href=\"/assets/css/business-casual.css\" rel=\"stylesheet\">
  ";
        // line 19
        $this->displayBlock('cssExte', $context, $blocks);
        // line 21
        echo "
  <!-- Fonts -->
  <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
  <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
  <![endif]-->

</head>

<body>
";
    }

    // line 19
    public function block_cssExte($context, array $blocks = array())
    {
        // line 20
        echo "  ";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  61 => 19,  42 => 21,  40 => 19,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <meta name="description" content="">*/
/*   <meta name="author" content="">*/
/* */
/*   <title>Business Casual - Start Bootstrap Theme</title>*/
/* */
/*   <!-- Bootstrap Core CSS -->*/
/*   <link href="/assets/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*   <!-- Custom CSS -->*/
/*   <link href="/assets/css/business-casual.css" rel="stylesheet">*/
/*   {% block cssExte %}*/
/*   {% endblock %}*/
/* */
/*   <!-- Fonts -->*/
/*   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">*/
/*   <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">*/
/* */
/*   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*   <!--[if lt IE 9]>*/
/*   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*   <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
