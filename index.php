<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<center>
		<h3>Login Here</h3>
		<form action = "login.php" method = "post">
			<table>

				<tr>  
					<td>Login:</td>
					<td>
						<input type="text" name="login" required="" id = "login">
					</td>
				</tr>

				<tr>
					<td>Password:</td>
					<td>
						<input type="password" name="password" required="" id = "pwd">
					</td>
				</tr>
			</table>
				
				<button type="reset" class="clear_button" value="clear">Clear</button>
				<form>
         <button type="submit" formaction="https://murat-cv.herokuapp.com/" id = "submit_button">Submit</button>
      </form>
				
			
			
		</form>
	</center>
	<script>
		document.forms[0].onsubmit = function (e){
		let login = document.getElementById('login').value;
		let password = document.getElementById('pwd').value;
			
		if (login === "murat" && password === "1234")
			alert ("welcome");
		else{
			alert("Invalid Password or login");
		}
		};
	<script/>


</body>
</html>
