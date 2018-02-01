<!DOCTYPE html>
<html>
    <head>
        <title>:: Edit Room ::</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
         <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/style.css"); ?>">
    </head>
    <body>
        
        
        
         <nav class="navbar navbar-inverse bg-inverse" align='right'>
  
  
                 
            <?php 

        
        
        echo "<font color=\"white\">Welcome Admin : </font> ";
            $admin = $this->session->userdata('sess_user');
         
        echo  "<font color=\"white\">$admin</font> ";
       
       
        ?>
            
  
</nav>
        <div class="col-sm-12" align='center'>
      <img src="<?php echo base_url("assets/img/logo.png"); ?>" width='450' height="200" >
        </div>
        <div class="col-sm-12" align='center'>
         <?php
        echo anchor('member/index','Room')." &nbsp; &nbsp;|&nbsp; &nbsp;";
       
        echo anchor('member/update','Edit Admin Information')." &nbsp; &nbsp;| &nbsp;&nbsp;";
           
        echo anchor('member/changepassword','Change Password')."&nbsp; &nbsp; |&nbsp; &nbsp; ";
           
        echo anchor('member/logout','Log out')."<br/>";
     
        echo "<br/><br/> ";
            ?></div>
        
        
        <div class="container" align ='center'>
            <h3>:: Edit Product ::</h3></div>
         <div class="container" > 
          <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
    <?php 
                  
         echo "<br/> ";
                   echo validation_errors(); 
        $row = $query->row_array();
               
                $roomtype=$row['roomtype'];
                $price=$row['price'];
                 $roomleft=$row['roomleft'];
                 $detail=$row['detail'];
        
        echo form_open('start/roomupdate2',"class='form-signin'");
        echo "Product Name : <br/>";
        echo form_input('roomtype',$roomtype,"class='form-control'")."<br/>";
        echo "Price : <br/>";
        echo form_input('price',$price,"class='form-control'")."<br/>";        
         echo "Room left : <br/>";
        echo form_input('roomleft',$roomleft,"class='form-control'")."<br/>";
         echo "Room detail : <br/>";
        echo form_input('detail',$detail,"class='form-control'")."<br/><br/>";
        
        
        
        
        echo form_submit('mysubmit','Submit',"class='btn btn-default'");
                  echo "&nbsp;&nbsp;";
        
        echo form_close();
                  ?></div>
                   <div class="col-sm-4"></div></div></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      
    <script src="<?php echo base_url("/assets/js/bootstrap.min.js"); ?>" crossorigin="anonymous"></script>
    </body>
</html>