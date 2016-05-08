<?php

function clean_input($input){
    $input = trim($input);
    $input = stripcslashes($input); // \
    $input = htmlspecialchars($input);
    return $input ;
}
function Name($name){
    return preg_match('/^[a-zA-Z0-9\s]{6,20}$/',$name);
}

function UserName($username){
    return preg_match('/^[a-zA-Z0-9\_\.]{6,20}$/',$username);
}
function PW($pass){
    return preg_match('/^[a-zA-Z0-9\_\@\-]{6,20}$/',$pass);
}
function number($number)
{
    return preg_match('/^[0-9]{9,10}$/', $number);
}
if(!empty($_POST)){
    $name=clean_input($_POST["name"]);
    $email=$_POST["email"];
    $username=clean_input($_POST["username"]);
    $pass = clean_input($_POST["pass"]);
    $repass = clean_input($_POST["repass"]);
    $birthday=$_POST["birthday"];
    $phone = clean_input($_POST["phone"]);
    $flag=true;


    if(!Name($name)){
        echo "<h3> Invalid Name </h3>";
        $flag= false;
    }
    if(!UserName($username)){
        echo "<h3> Invalid UserName </h3>";
        $flag= false;
    }
    if(!PW($pass)){
        echo "<h3> Invalid Pass </h3>";
        $flag= false;
    }
    if(!PW($repass)){
        echo "<h3> Invalid RePass </h3>";
        $flag= false;
    }
    if($pass != $repass)
    {
        echo "<h3> Confirm PASS & REPASS</h3>";
        $flag= false;
    }
    if(!number($phone)){
        echo "<h3> Invalid Phone </h3>";
        $flag= false;
    }

    if($flag == true)
    {
        echo "<pre>" ;
        var_dump($_POST);
        echo "</pre>";
        echo "<h2>Welcome " . $_POST["name"] . " Ban da dang ky thanh cong </h2>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register adfadf</title>
    <style>
        #formgroup{
            width: 400px;
            margin:100px auto 0;
            box-sizing: border-box;
            box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
            padding-bottom: 40px;
            border-radius: 3px;
        }
        #formgroup h2{
            box-sizing:border-box;
            padding:20px;
            background: #1abc9c;

        }
        .khung
        {
            width:300px;
            padding: 2px;
        }

        .khung input
        {
            width:200px;
            margin-bottom: 2px;
            margin-top: 2px;
            margin-left: 30px;
            padding: 8px;
        }
        .khung select
        {
            width:300px;
            padding: 8px;
            margin-left: 30px;

        }

    </style>
</head>


<body>
    <form action="" method="post">


    <div id="formgroup">
        <h2 align="center">Register</h2>
        <div class="khung">
            Name:</br>
            <input type="text" name="name" id="name" placeholder="First and last name 6 -20 character" required autofocus value="<?php if(isset($name))echo $name?>">
        </div>

        <div class="khung">
            Email:</br>
            <input type="email" name="email" id="email" placeholder="example@domain.com" required value="<?php if(isset($email)) echo $email ?>">
        </div>

        <div class="khung">
            Create a username:</br>
            <input type="text" name="username" id="username" placeholder="username 6 -20 character" required value="<?php if(isset($username))echo $username?>">
        </div>

        <div class="khung">
            Create a password:</br>
            <input type="password" name="pass" id="pass" required value="<?php if(isset($pass)) echo $pass ?>" >
        </div>

        <div class="khung">
            Confirm your password:</br>
            <input type="password" name="repass" id="repass"  required value="<?php if(isset($repass)) echo $repass ?>">
        </div>

        <div class="khung">
            Birthday:</br>
            <input type="datetime" name="birthday" id="birthday" placeholder="mm/dd/yyyy" required value="<?php  if(isset($birthday)) echo $birthday ?>">
        </div>

        <div class="khung">
            </br>
            <select name="select" id="select" required>
                <option value="" >Select gender...</option>
                <option value="boy">Boy</option>
                <option value="girl">Girl</option>
            </select>
        </div>

        <div id="khung">
            Account type:</br>
            <input type="radio" name="account" value="free" checked > Free
            <input type="radio" name="account" value="vip1"  > vip1
            <input type="radio" name="account" value="vip2"  > vip2
            <input type="radio" name="account" value="vip3"  > vip3
        </div>

        <div class="khung1">
            Moblie phone:</br>
            <div style="float: left;" >
                <input type="text"  readonly value="(+84)">
            </div>
            <div style="width:100px; float: left" >
                <input type="number" placeholder="phone number, 9 - 10 n " required name="phone" id="phone" value="<?php echo $phone?>">
            </div>
        </div>

        <div style="width: 300px;
        padding: 10px;
        text-align: center;
        margin-top: 40px">
            <input type="submit" value="Sign me up !">
        </div>


    </div>

    </form>

</body>

</html>


