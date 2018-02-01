<!DOCTYPE html>
<html>
    <head>
        <title>:: St.Tropez | Room :: </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
    <!-- custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/style.css"); ?>">
    </head>
    <body>
        
        <nav class="navbar navbar-inverse bg-inverse" data-spy="affix" align='right'>
  
  
                 
            <?php 

        
        
        echo "<font color=\"white\">Welcome traveler  </font> ";
           
         
    
       
       
            ?></nav>
             <div class="col-sm-12" align='center'>
      <img src="<?php echo base_url("assets/img/logo.png"); ?>" width='450' height="200" >
        </div>
        <div class="col-sm-12" align='center'>
         <?php
        echo anchor('member/index','Home')." &nbsp; &nbsp;|&nbsp; &nbsp;";
       
        echo anchor('start/view','Room')." &nbsp; &nbsp;| &nbsp;&nbsp;";
           
        echo anchor('start/contact','Contact Us')."&nbsp; &nbsp; ";
            echo"<br/>";
            echo"<br/>";
            ?></div>
            <br>
      <div class="container" align ='center'>
            <h3>:: Contact us :: </h3></div>
        <div class="container" > 
          <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
    <?php 
                    echo "<br/> ";
        echo validation_errors(); 
        echo form_open('',"class='form-signin'");
         echo "Name : <br/>";
        echo form_input('',set_value(''),"class='form-control'")."<br/>";
        echo "Last name : <br/>";
        echo form_input('lastname',set_value('lastname'),"class='form-control'")."<br/>";
        
        echo "Email : <br/>";
        echo form_input('email',set_value('email'),"class='form-control'")."<br/><br/>";  
        echo "Comment : <br/>";
        echo form_textarea('',set_value(''),"class='form-control'")."<br/><br/>"; 
    
       
         echo "<br/>";
        echo form_submit('mysubmit','Submit',"class='btn btn-default'");
                   echo "&nbsp;&nbsp;";
        echo form_reset('myreset','Reset',"class='btn btn-default'");
       
        echo form_close();
                  ?></div>
                    <div class="col-sm-4"></div></div></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      
    <script src="<?php echo base_url("/assets/js/bootstrap.min.js"); ?>" crossorigin="anonymous"></script>
    </body>
</html>