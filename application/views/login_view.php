<!DOCTYPE html>
<html>
    <head>
        <title>::St.Tropez | welcome:: </title>
       
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/style.css"); ?>">
  </head>
 
    <body>
        <nav class="navbar navbar-inverse bg-inverse" align='right'>
  
  <font color="white">
      <?php 
      echo validation_errors(); ?></font>
                 
            <?php 

        echo form_open('member/login2');
        
        echo "<i class='glyphicon glyphicon-user' style='color:white'></i>&nbsp; ";
        echo form_input('user','','placeholder="username"',  set_value('user'));
       echo "&nbsp;&nbsp;";
        echo "<i class='glyphicon glyphicon-lock' style='color:white'></i>&nbsp;  ";
        echo form_password('pass','','placeholder="password"');
        echo " &nbsp;&nbsp;   ";
            
        echo form_submit('mysubmit','Log in',"class='btn btn-primary'");
        
       
        echo form_close();
        ?>
            
  
</nav>
        <div class="col-sm-12" align='center'>
      <img src="<?php echo base_url("assets/img/logo.png"); ?>" width='450' height="200" >
        </div>
        <div class="col-sm-12" align='center'>
         <?php
        echo anchor('member/login','Home')." &nbsp; &nbsp;|&nbsp; &nbsp; ";
        echo anchor('start/view','Room')."&nbsp; &nbsp; |&nbsp; &nbsp; ";
        echo anchor('start/contact','Contact us');
       
     
        echo "<br/><br/> ";
            ?></div>

        <br>
        
        
        <div class="container-fluid">
        <div class="col-sm-2"></div>
            
            <div class="col-sm-6">
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="<?php echo base_url("assets/img/room1.jpg"); ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="<?php echo base_url("assets/img/bar2.jpg"); ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="<?php echo base_url("assets/img/room3.jpg"); ?>" alt="Third slide">
    </div>
  </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
            </div>
  <div class="col-sm-4">
 
        <h4>:: Welcome to St.Tropez hotel :: </h4>
       
      <hr width="100%">
      <br>
      <p>Enjoy stunning accommodations at our St. Tropez hotel, friendly service, and accessibility to all the top picks in dining, shopping, entertainment and more. When considering a boutique hotel getaway choose The St.tropez Hotel.</p>
      <button type="button" class="btn btn-primary">Book your room</button>
      
      
            </div></div>
            
      <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      
    <script src="<?php echo base_url("/assets/js/bootstrap.min.js"); ?>" crossorigin="anonymous"></script>
    </body>
</html>
