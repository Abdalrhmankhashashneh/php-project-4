<?php 
session_start();

$op =true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="icon" href="../img/icon.png" type="image/icon type">
    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="../CSS/main.css" rel="stylesheet" media="all">
    
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="../index.php">Talanta</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn btn-primary" href="addproduct.php">Add product <span class="sr-only">(current)</span></a>
      </li>

      
    </ul>
  </div>
  
    
  </div>
</nav>



    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Add Product </h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype = "multipart/form-data" >
  <?php
  if(empty($_POST['proimg'])){
    $op =false;
}
if(empty($_POST['prodes'])){
    $op =false;
}
if(empty($_POST['proname'])){
    $op =false;
}
if(empty($_POST['proprice'])){
    $op =false;
}
  if(!$op){
      echo '
      <div class="alert alert-primary" role="alert">
      All fialed riquered
</div>
';
  }?>
                    <div class="form-row">
                            <div class="name">Product Name :</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="proname" placeholder="Name of the Product">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Product Price </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="proprice" placeholder="The Price of Product">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Product Image  : </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="file" name="proimg" placeholder="The image of Product ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Product Description :</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="prodes" placeholder=" Description about your Product "></textarea>
                                </div>
                            </div>
                        </div>
                        
                    
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Add Product</button>
                </div></form>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="../JS/global.js"></script>
    <footer class="" style="color: #cccccc;display: flex;min-height: 16vh;justify-content: center;align-items: center;background-color: black;">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Copyright © 2022 made by Abd-alrhman Khashashneh Araosh </p>
        <p>looking for our new project  <a href="https://github.com/Abdalrhmankhashashneh">Check this link </a> </p>
      </div>
    </footer>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $op =true;
    if(empty($_FILES['proimg'])){
        $op =false;
    }
    if(empty($_POST['prodes'])){
        $op =false;
    }
    if(empty($_POST['proname'])){
        $op =false;
    }
    if(empty($_POST['proprice'])){
        $op =false;
    }
    if($op){
        move_uploaded_file($_FILES['proimg']['tmp_name'] ,'proimg/'.$_FILES['proimg']['name'] );
        $product = array("proname"=>$_POST['proname'] ,"prodes"=>$_POST['prodes'] ,"proimg"=>$_FILES['proimg']['name'] ,"proprice"=>$_POST['proprice']  );
        if(!isset($_SESSION['products'])){
            $_SESSION['products'] = array();
        }
        array_push($_SESSION['products'] , $product);
       $_SESSION['lproduct'] = $product;
        for ($i=0; $i < count($_SESSION['products']) ; $i++) { 
            $p = $_SESSION['products'][$i];
            echo "
            <pre>";
            print_r($p);
            echo " 
            </pre>
            ";
        }
        echo '<script language="javascript" > location.href = "productviwe.php" </script>';
    }
    else
    {
        echo " please check to fill all fieled in the form ";
    }
}
?>
