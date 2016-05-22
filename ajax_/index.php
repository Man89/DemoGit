<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Ajax
        </title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>



    </head>
    <body>
    <nav class="navbar navbar-text " role="navigation">
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

    <?php
    function UserName($name){
        return preg_match('/^[\w\s]{6,20}$/',$name);
    }
    function Pwd($pass){
        return preg_match('/^[a-zA-Z0-9\@\%\^]{8,16}$/',$pass);
    }

    if(!empty($_POST)){
        $username= $_POST["Username"];
        $email =$_POST["email"];
        $Pwd=$_POST["pwd"];

        if(!UserName($username))
        {
            echo "<h3>Invalid username</h3>";
        }

        if(!Pwd($Pwd)){
            echo "<h3>Invalid Pass </h3>";
        }

    }

    ?>



    <div class="container-fluid">

    <form action="" role="form" method="post">
        <div class="form-group">
            <h3>Register Form </h3>
            <label for="Username">Username:</label>
            <input type="text" required min="6" maxlength="20" class="form-control" placeholder="Username min 6 character, max 20 character" id="Username" name="Username">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" required class="form-control" placeholder="Email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">PassWord:</label>
            <input type="password" required class="form-control" placeholder="PassWord min 8 character , max 20 character" id="pwd" name="pwd" min="8" maxlength="20">
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">City</label>
            <div class="col-sm-6">
                <select class="select2 form-control" name="select2" id="select2" ></select>
            </div>
        </div>

        <div class="card-action">
            <button class="btn btn-default" id="btn">Register</button>
        </div>
        

    </form>
    </div>



    <script type="text/javascript">
        $(document).ready( function() {
            var $select =$(".select2");
            $select.select2({
                placeholder:"Select a Location",
                //minimumResultsForSearch: 2,
                ajax: {
                    url: "city.php",
                    dataType: 'json',
                    type: "GET",
                    delay:250,
                    data:function(params){
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data) {
                        // parse the results into the format expected by Select2.
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data
                      //  params.page = params.page || 1;
                        return {
                            results: $.map(data, function(obj){
                                return {id:obj, text:obj}; //$.map() where each object has an id and a text property.
                            })

                        };
                    },
                    cache:true
                }
            });
        });
    </script>
    </body>
</html>
<?php
    if(isset($_POST)){
        echo "<pre class='text-left'>";
        var_dump($_POST);
        echo "</pre>";

    }

?>