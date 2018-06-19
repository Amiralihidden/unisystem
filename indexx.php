<?php
session_start();
include_once ('db.php');
$shomare=$_SESSION['shomare']; 
$semat=$_SESSION['semat']; 
if($semat=="1"){
    $q=$connection->prepare("SELECT * FROM nomarat");
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
 
}else{
    $q=$connection->prepare("SELECT * FROM nomarat WHERE  shomaredaneshjo=:shomaredaneshjo");
    $q->bindParam(':shomaredaneshjo',$shomare);
    $q->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
   
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
                            <nav id="nav">
                                    <ul class="nav justify-content-end">
                                        <li class="nav-item"><a class="nav-link" href="indexx.php">مشاهده نمره ها</a></li>
                                        <li class="nav-item"><a class="nav-link" href="moshakhasat.php">مشخصات کاربری </a></li>
                                        <li class="nav-item"><a class="nav-link" href="login.php"> رفتن به صفحه ورود</a></li>
                                    </ul>
                            </nav>
                    </div>
                </div>

            </div>
        </header>
        <!--  -->
        <section class="container maincss">
            <div class="row">
                <div class="col-md-8 rightel">
                    <div class="card">
                        <div class="card-header">
                                <h6 class="d-flex justify-content-center">نمرات دانشجو ها </h6>
                        </div>
                        <table class="table table-striped ">
                                <thead>
                                        <tr>
                                          <th scope="col">ویرایش</th>
                                          <th scope="col">نمره</th>
                                          <th scope="col">نام درس</th>
                                          <th scope="col">نام استاد</th>
                                          <th scope="col">نام دانشجو</th>       
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php

                                        if($semat=="1"){
                                        while( $w=$q->fetch()){?>
                                        <tr>
                                            <th scope="col"><a href="virayesh.php?a=<?php echo $w['id']; ?>&b=<?php echo $w['nomre']; ?>" >ویرایش</a></th>
                                            <th scope="col"><?php echo $w['nomre']; ?></th>
                                            <th scope="col"><?php echo $w['mozo']; ?></th>
                                            <th scope="col"><?php echo $w['ostad']; ?></th>
                                            <th scope="col"><?php echo $w['daneshjo']; ?></th></tr>   
                                            <?php
                                        }   
                                        
                                        }else{
                                            while( $w=$q->fetch()){?><tr> 
                                                <th scope="col"><small>برای شما غیر فعال است</small> </th>
                                                <th scope="col"><?php echo $w['nomre']; ?></th>
                                                <th scope="col"><?php echo $w['mozo']; ?></th>
                                                <th scope="col"><?php echo $w['ostad']; ?></th>
                                                <th scope="col"><?php echo $w['daneshjo']; ?></th>  </tr> 
                                                <?php
                                            }   
                                        }?>
                                         
                                              
                                      </tbody>
                                    </table>
                    </div>
                   
                </div>
                <div class="col-md-4 rightel">
                        <div class="col-md-8 rightel">
                                <div class="card">
                                    <div class="card-header">
                                            <h6 class="d-flex justify-content-center">نمرات دانشجو ها </h6>
                                    </div>
                                    <table class="table table-striped ">
                                                  <thead>
                                                    <tr>
                                                        <td class="d-flex justify-content-end"><a href="moshakhasat.php">نمایش اطلاعات شما</a></td>                                                    
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                     <td class="d-flex justify-content-end"><a href="indexx.php">نمایش نمره ها</a></td>                                                   
                                                    </tr>
                                                    <tr>
                                                            <td class="d-flex justify-content-end"><a href="login.php">خروج</a></td>                                                   
                                                    </tr>
                                                  </tbody>
                                                </table>
                                </div>
                </div>
            </div>
        </section>
</body>
</html>