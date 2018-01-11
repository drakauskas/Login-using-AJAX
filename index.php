<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Ajax style login </title>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  
  </head>
  <body>
<div style="width: 300px; padding:10% 25%;">
<fieldset id="formfieldset">
	<form action="./" method="post">
			<label for="name">Username </label> </ul> </br>
			<input type="text" size="30"  name="name" id="name"  /> <br/>
			<label for="name">Password</label> </br>
			<input type="password" size="30"  name="word" id="word"  /><br/>
			<input type="submit" id="login" name="login" value="Login" class="loginbutton" ></form><br/>
			<span id="errormessage" style="display: none; color: red;"> Wrong password </span>
         </form>
</fieldset>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		
		$("#login").click(function(e){	
			  e.preventDefault();
			  username=$("#name").val();
			  password=$("#word").val();
			  $.ajax({
			  		  
					   type: "POST",
					   url: "login.php",
					   dataType: 'json',
					   data: {name: username, pwd: password},
					   success: function(passwordgood){ 
					   if (passwordgood == "success")
					   {
					   		 window.location="dashboard.php";

					   }
					   else
					   {
					   		document.getElementById('errormessage').style.display = 'block';

					   		setTimeout(
					   			function()
					   			{ 
					   				document.getElementById('errormessage').style.display = 'none'; 
					   				document.getElementById('word').value = '';
					   				document.getElementById('name').value = '';
					   			}, 2000);
					   }
					}
				});
		});
	});
  </script>
  </body>
</html>
