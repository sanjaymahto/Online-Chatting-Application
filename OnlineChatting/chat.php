<?php                                   //php code to insert the message into te database.
include("db.php");
if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$mssg=$_POST['Message'];
		$query="INSERT INTO chat (name,msg) values('$name','$mssg')";
		$run=$con->query($query);
		if($run)
		{
			$sam1=1;
		// $_POST['sam']=$sam1;
			header('location: index.php?$sam=1');
		}
		
	}
			
?>