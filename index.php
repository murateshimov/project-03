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
						<input type="text" name="murat" required="" onclick="checkPswd();">
					</td>
				</tr>

				<tr>
					<td>Password:</td>
					<td>
						<input type="password" name="pwd" required="" >
					</td>
				</tr>
			</table>
				
				<button type="reset" class="clear_button" value="clear">Clear</button>
				<form>
         <button type="submit" formaction="https://murat-cv.herokuapp.com/">Submit</button>
      </form>
				
			
			
		</form>
	</center>

</body>
</html>
