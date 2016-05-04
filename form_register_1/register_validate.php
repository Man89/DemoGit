<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validate form with Regular expression</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets_register/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_register/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets_register/css/form-elements.css">
    <link rel="stylesheet" href="assets_register/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets_register/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="assets_register/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="assets_register/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="assets_register/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets_register/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Validate form with Regular expression</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
							<span class="li-text">
								Put some text or
							</span>
                    <a href="#"><strong>links</strong></a>
							<span class="li-text">
								here, or some icons: 
							</span> 
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-envelope"></i></a> 
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Top content -->
<div class="top-content">
<?php
//username : a-z, A-Z, 0-9, ký tự _, không được bắt đầu bằng chữ số, giới hạn 8-12 ký tự
// NEU KHONG CO \D thi gioi han se la {8,12} nhung do co \D nen chi la {8,12}, nhung khi nhap ky tu vao thi van
//pass: a-z, A-Z, 0-9, ký tự @, %, ^, giới hạn 8-16 ký tự

function User($input){
    return preg_match('/^\D[a-zA-Z0-9\_]{7,11}$/',$input);
}
function pwd($input){
    return preg_match('/^[a-zA-Z0-9\@\%\^]{8,16}$/',$input);
}
if(!empty($_POST)){
    $username= $_POST['form-username'];
    $pass = $_POST['form-password'];

    if(!User($username)){
        echo "<h3>Invalid username</h3>";
    }
    else if(!pwd($pass)){
        echo "<h3> Invalid pass </h3>";
    }
    else
        echo "<h3> Success </h3>";
}

?>
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 book">
                    <img src="assets_register/img/ebook.png" alt="">
                </div>
                <div class="col-sm-5 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Become member</h3>

                            <p>Fill in the form below to get instant access:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="registration-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">User name</label>
                                <input type="text" name="form-username" placeholder="User name..."
                                       class="form-username form-control" id="form-username" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="form-password" placeholder="Password..."
                                       class="form-password form-control" id="form-password" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-email">Email</label>
                                <input type="email" name="form-email" placeholder="Email..."
                                       class="form-email form-control" id="form-email" required>
                            </div>
                            <button type="submit" class="btn">Sign me up!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script src="assets_register/js/jquery-1.11.1.min.js"></script>
<script src="assets_register/bootstrap/js/bootstrap.min.js"></script>
<script src="assets_register/js/jquery.backstretch.min.js"></script>
<script src="assets_register/js/retina-1.1.0.min.js"></script>
<script src="assets_register/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="assets_register/js/placeholder.js"></script>
<![endif]-->

</body>

</html>