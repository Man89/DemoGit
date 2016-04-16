<?php


if(!empty($_POST))
{
    echo"<pre>";
    var_dump($_POST);
    echo "</pre>";
    echo "<h2>Welcome ". $_POST["name"]. "Ban da dang ky thanh cong </h2>";
}

?>