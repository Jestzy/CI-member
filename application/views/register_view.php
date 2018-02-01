<!DOCTYPE html>
<html>
    <head>
        <title>:: Registration  :: </title>
        <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" crossorigin="anonymous">
      
    <!-- custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/style.css"); ?>">
    </head>
    <body>
        <h3>:: Registration :: </h3>
    <?php 
        echo validation_errors(); 
        echo form_open('member/register2');
        echo "Username : <br/>";
        echo form_input('user',set_value('user'))."<br/>";
        echo "Password : <br/>";
        echo form_password('pass')."<br/>";
        echo "Confirm password : <br/>";
        echo form_password('passconf')."<br/>";
        echo "Name : <br/>";
        echo form_input('fname',set_value('fname'))."<br/>";
        echo "Lastname : <br/>";
        echo form_input('lname',set_value('lname'))."<br/>";        
        echo "Email: <br/>";
        echo form_input('email',set_value('email'))."<br/>";
        echo form_submit('mysubmit','Submit');
        echo form_reset('myreset','Reset');
        echo form_close();
        ?>
     <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      
    <script src="<?php echo base_url("/assets/js/bootstrap.min.js"); ?>" crossorigin="anonymous"></script>
    </body>
</html>
