<?php session_start(); 
$_SESSION['pass']='nada';
$S = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyH1AYThgG1X9uB8RLb_Vi4UKxDLdAbYKL4A&usqp=CAU";
?> 
<!doctype html>
<html lang="en">
  <head>
    <title> Talanta Store </title>
    <link rel="icon" href="img/icon.png" type="image/icon type">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- here my css -->
    <link rel="stylesheet" href="CSS/main.css">

  </head>
  <body>
  <div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">Talanta</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn btn-primary" href="pages/addproduct.php">Add product <span class="sr-only">(current)</span></a>
      </li>

      
    </ul>
  </div>
  
    
  </div>
</nav>
 

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class=" tit jumbotron-heading">Welcome to Talanta Store</h1>
          <p class="lead "> This store is a simple store that the main cause for it to add product and display them her in this page </p>
          <p>
            <a href="pages/addproduct.php" class="btn btn-light my-2 " style="color: #007BFF;">Add product now from here</a>
          </p>
        </div>
      </section>

      <div class="album py-5 ">
        <div class="container">
          <h1 class="tit"> Here the added product </h1>
          <div class="row">
           <?php
           if(isset($_SESSION['products'])){
            for ($i=0; $i < count($_SESSION['products']) ; $i++) { 
              $p = $_SESSION['products'][$i];
           echo '
           <div class="col-md-4">
           <div class="card mb-4 box-shadow">
             <img class="card-img-top" src="pages/proimg/'.$p['proimg'] .' " width= " 500px" height= " 300px" alt="Card image cap">
             <div class="card-body">
               <h2 class="card-text">'.$p['proname'].'</h2>
               <p class="card-text">'.$p['prodes'].'</p>
               <div class="d-flex justify-content-between align-items-center">
                 <div class="btn-group">
                   <button type="button" class="btn btn-success">View</button>
                   
                 </div>
                 <p class="text-muted">'.$p['proprice'].' JD</p>
               </div>
             </div>
           </div>
         </div>
           ' ;}
            }
            else{
              echo '<h1> No Product is added <br></h1> 
              <a class="nav-link btn btn-primary" style=" margin-left: 15px;" href="pages/addproduct.php">Add product <span class="sr-only">(current)</span></a>';
            }
           ?> 
           
                <form action="pages/delete.php" method="post" >
          
                <div class="btn-group">
                   <button type="submit" class="btn btn-success">Delete product</button>   
                </div>
                </form>
      
          </div>
        </div>
      </div>

    </main>

    <footer class="" style="color: #cccccc;display: flex;min-height: 16vh;justify-content: center;align-items: center;background-color: black;">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Copyright © 2022 made by Abd-alrhman Khashashneh Araosh  </p>
        <p>looking for our new project  <a href="https://github.com/Abdalrhmankhashashneh">Check this link </a> </p>
      </div>
    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>