<?php
session_start();
include_once ('db.php');
if(isset($_POST['submity'])){
    $nomre=$_POST['nomre'];
    $a=$_GET['a'];
    $stmt=$connection->prepare("UPDATE nomarat SET nomre='$nomre' WHERE id='$a'");
    $stmt->execute();
    $_GET['b']=$nomre;
}
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
                            <form action="" method="POST" >
                               <h6> به صفحه ویرایش خوش آمدید</h6>
                               <h6>نمره قبلی <?php echo $_GET['b'];?></h6>

                                <div class="form-group row">
                                
                                        <input type="text" class="form-control" id="nomre" name="nomre" >
                                        <input type="submit" class="form-control" id="submit" name="submity" >
                                    
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </section>

</body>
</html>