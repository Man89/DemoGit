<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<style>
    #formgroup{
        margin: 50px auto;
        width: 400px;
        height: auto;
        background-color: #cccccc;
}
.khung
{
    widh:300px;
    padding: 2px;
}

    .khung input
    {
        width:300px;
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
    #khung input{
        width: 30px;
    }
</style>
<body>
    <form action="form_process.php" method="post">


    <div id="formgroup">
        <h2 align="center">Register</h2>
        <div class="khung">
            Name:</br>
            <input type="text" name="name" id="name" placeholder="First and last name" required autofocus>
        </div>

        <div class="khung">
            Email:</br>
            <input type="email" name="email" id="email" placeholder="example@domain.com" required >
        </div>

        <div class="khung">
            Create a username:</br>
            <input type="text" name="username" id="username" placeholder="username" required >
        </div>

        <div class="khung">
            Create a password:</br>
            <input type="password" name="pass" id="pass" required >
        </div>

        <div class="khung">
            Confirm your password:</br>
            <input type="password" name="repass" id="repass"  required >
        </div>

        <div class="khung">
            Birthday:</br>
            <input type="datetime" name="birthday" id="birthday" placeholder="mm/dd/yyyy" required >
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

        <div class="khung">
            Moblie phone:</br>
            <input type="number" placeholder="phone number" required name="phone" id="phone" >
        </div>

        <div class="khung">
            <input type="submit" name="submit" value="Sign me up">
        </div>

    </div>

    </form>

</body>

</html>


