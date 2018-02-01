<!DOCTYPE html>
<html>
    <head>
        <title>:: Register Page :: </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h3>:: Register Page  :: </h3>
    	<?php 
    		echo "$result <br/><br/>"; 

    		if($check=="yes") 
    			echo anchor('member/login', 'Login');
    		else 
    			echo anchor('member/register', 'Back to regsiter');

		?>
    </body>
</html>
