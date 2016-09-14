<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//processing form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
    var_dump($comments);

    if(isset($name,$email,$comments)){

    		include('connection.php');

    		mysqli_query($dbc, "INSERT INTO users(name,email,comments) VALUES('$name','$email','$comments')");

    		$registered = mysqli_affected_rows($dbc);
    			echo $registered."row is affected,everything worked fine.";
                include('index.php');

    	}else{

    		echo "<h2 style ='color:red;'>ERROR: Plaese fill all values of the forms</h2>";

    	}
    }
?>
