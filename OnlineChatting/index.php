<?php
error_reporting(0);
include("db.php");
?>
<!doctype html>
<html>
<head>
<title>BitChat</title>
<!--Image-->
<link rel="shortcut/icon" href="bitchat"/>
<link  rel="stylesheet" href="style.css" media="all"/>
<script>
function ajax()
{
	var req = new XMLHttpRequest();
	req.onreadystatechange = function()
	{
		if(req.readyState== 4 && req.status == 200)
		{
			document.getElementById('chat1').innerHTML = req.responseText;
			
		}			}
		req.open('GET','chat1.php',true);
		req.send();
}
setInterval(function(){ajax()},1000);
</script>
</head>
<body onload="ajax();">
<div id="container">
     <div id="chat_box">
	 <div id="chat1"></div>
		</div>
		<form method="POST" action="chat.php">
		<input type="text"  name="name" placeholder="Name" required="true">
		<textarea name="Message" placeholder="Enter Your Message" required="true"></textarea>
		<input type="submit" name="submit" value="Send"/>
		<?php
		
		if($_REQUEST['$sam'])
		{
			
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />";
		
		}
		?>
		</form>
		</div>
</body>
</html>