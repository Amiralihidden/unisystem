<?php
session_start();
session_unset(); 
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <h1>مدیریت دانشجویان</h1>
                    </div>
                    <div class="col-md-8">
                            
                    </div>
                </div>

            </div>
        </header>
        <!--  -->
                <section class="container maincss">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <form action="chek.php" method="POST" >
                                 <h6>به صفحه ورود خوش امدید</h6>

                                <div class="form-group row">
                                        <input type="text" class="form-control" id="username" name="username"  >
                                        <input type="password" class="form-control" id="password" name="password" >
                                        <input type="submit" class="form-control" id="submit" name="submit" >
                                    
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </section>

</body>
</html>