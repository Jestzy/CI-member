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
            <h3>:: All room type ::</h3></div>
       
        <div class="container">
            <?php
            echo anchor('start/roominsert', 'Add new product', "class='btn btn-default pull-right' ")."</br></br>";
            echo "<br/>";
        if ($query->num_rows() > 0)
        {
            echo "<table   border = '0' class='table ' >";
                    
            foreach ($query->result_array() as $row)
            {
                 $roomID=$row['roomID'];
                $roompic=$row['roompic'];
                $roomtype=$row['roomtype'];
                $price=$row['price'];
                 $roomleft=$row['roomleft'];
                 $detail=$row['detail'];

                $update=anchor('start/roomupdate/'.$roomID, 'Edit',"class='btn btn-default'");

                $attributs="onclick= \"return confirm('Are you sure you want to delete ?')\"  class='btn btn-default'";
                $delete=anchor('start/roomdelete/'.$roomID, 'Delete',$attributs);
                
                echo "<tr>";
                        echo "<td rowspan='7' align='center'>";
              
                        echo "<img src='http://localhost/ci_member/assets/img/$roompic' class='img-thumbnail' width='604' height='536'><br/>";
                
              
                        echo "</td>";
                       
                        echo "</tr>";
                
                echo "<tr>";
                echo "<td class='item-list-text-small'>";
                echo "Room type : ";
                echo "</td>";
                echo "<td >";
                        echo $roomtype;
                
                        echo "</td>";
                echo "</tr>";
                
                
                  echo "<tr>";
                        echo "<td >";
                        echo "Price : ";
                
                        echo "</td>";
                echo "<td >";
                        echo $price;
                
                        echo "</td>";
                
                        echo "</tr>";
                
                        echo "<tr>";
                        echo "<td  >";
                        echo "Room(s) Left : ";
                        echo "</td>";
                echo "<td >";
                        echo $roomleft;
                
                        echo "</td>";
                        echo "</tr>";
                echo "<tr>";
                        echo "<td  >";
                        echo "Detail : ";
                
                       
                        echo "</td>";
                echo "<td >";
                        echo nl2br($detail);
                
                        echo "</td>";
                
                        echo "</tr>";
                      
                      echo "<tr rowspan='2'>";
                        echo "<td >";
                        echo $update;
                        echo "</td>";
                        echo "<td >";
                        echo $delete;
                        echo "</td>";
                        echo "</tr>";
                      
                    
                   
               
                      
                echo "<tr >";
                        
                        echo "<td colspan='2'>";
                echo "</br>";
                echo "</br>";
                echo "</td>";
                 
                        echo "</tr>";
                     
            }
           
            echo "</table>";
        }
            ?></div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      
    <script src="<?php echo base_url("/assets/js/bootstrap.min.js"); ?>" crossorigin="anonymous"></script>
    </body>
</html>
