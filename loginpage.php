<?php
	include('login.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: memberhome.php');
	}	
	
?>

<!doctype html>
<html>
<meta charset="utf-8">
<title>PHP LOGIN FORM WITH SESSION</title>
<style>
.input
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
}
input[type=submit]
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
	font-weight:bold;
	background:#999;
	border:2px solid black;
	color:#FFF;
}
.error
{
	color:red;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:16px;
}
</style>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script src="js/project.js" type="application/javascript"></script>
<div class="wrapper">
	<img id="logo" class ="medium" src="img/ProjectU2-XL-anim.gif" alt="Default placeholder image till user uploads one" align ="right">
	<img id="logo" class ="medium" src="img/ProjectU2-XL-anim.gif" alt="Default placeholder image till user uploads one" align ="left">
	<h1><a>PHP LOGIN FORM WITH SESSION</a></h1>
		<form method="post" action="">
			<a colspan="2" align="center" class="error"><?php echo $error;?></a>
				<ul class ="information" align="center">
					<li style="font-weight: bold"><label for="username">Username</label>
					<input name="username" type="text" class="input" size="25" placeholder="Enter your username here" required /></li>
					<li style="font-weight: bold"><label for="password">Password</label>
					<input name="password" type="password" class="input" size="25" placeholder="Enter your password here" required /></li>
				</ul>
					<input type="submit" class="linkButton" name="submit" value="Login!" />	
					<a href="homepage.html" class="linkButton">HomePage</a>
		</form>
</div> 
<div class="container1">
<footer id="dropzone">
	<p>ProjectsU&reg; is optimized for collaboration, testing, and training. The use of these projects is to simplify transferring information from one person 
	to another while broadening their horizens. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.
	Copyright by Sanchay and Tyler. All Rights Reserved.Powered by a chincilla on a wheel.&copy;</p>
</footer>
</div>
</html>