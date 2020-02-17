<!DOCTYPE html>
<html>
	<title>Affordance app test</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style>
	body{
		background-color: #9999ff;
		font-family:  Arial, Helvetica, sans-serif;
	}
	
	#wrapper{
		margin-left: 2%;
		margin-right:2%;
		margin-top: 1%;
		margin-bottom: 1%;
		padding:0.5% 2% 2% 2%;
		background-color: #efefff;
		box-shadow: 5px 5px 10px #555588;
		border-radius: 25px;
	}
	
	#title{
		background-color: #8888dd;
		color : white;
		padding: 30px;
		border-radius: 25px;
		
	}
	
	#login{
		border : solid 5px #000077;
		padding : 15px;
		margin-top : 3px;
		background-color: #FFFFFF;
		border-radius: 25px;
	}
	input{
		border-radius: 10px;
		font-size: 120%;
		background-color: #eeeeef;
		padding: 5px;
		
	}
	
	button{
		border-radius: 10px;
		font-size: 120%;
		background-color: #eeeeef;
		padding: 5px 20px 5px 20px;
		
		margin-top: 20px
		
	}
	
	button:hover{
		box-shadow: 0 0 5px 3px #aaaaff;
	}
	
	label{
		font-size: 120%;
	}
	
	#instructions{
		background-color: #8888dd;
		color : white;
		padding: 10px;
		margin-top : 20px;
		border-radius: 25px;
		padding-left: 30px;
	}
	
	#warning{
		padding: 10px 20px 10px 20px;
		font-size: 120%;
		font-weight: bold;
		color: #aa0000;
		
	}
	</style>
	
	
	<body>
		<div id = "wrapper">
			<h1 id = "title">Affordance App</h1>
			<?php @session_start(); if (isset($_SESSION['message'])){
				echo $_SESSION['message'];
				$_SESSION['message'] = "";}
			?>
			<form method = "post" action="sqlConnect.php" id = "login">

			  <div class="container">
				<label for="uname"><b>Username</b></label><br>
				<input type="text" placeholder="Enter Username" name="uname" required>
				<br>				
				<br>
				<label for="psw"><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="psw" required>
				<br>

				<button type="submit"  >Login</button>
				<label>
				  <input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			  </div>
			</form>
			<div id = "instructions">
				<h3>Instructions</h3>
				<p>Click <b><a href = "Instructions.pdf" target="_blank">here</a></b> for the instructions.</p>
			</div>
		</div>
	</body>
</html>	
	