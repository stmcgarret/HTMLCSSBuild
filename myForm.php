<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="myform.css" media="all">
		<title>New Web Project</title>
	</head>
	<body>
		<form action="myForm.php" method="get" id="myForm">
			<p>
				This is my form
			</p>
			<div>
				<table>
					<tr>
						<td> 
						<label for="userid" class="title">Userid</label>
						<input id="userid" type="text" placeholder="Ender id..." name="userid" maxlength="10">
						</td>
					</tr>
					<tr>
						<td> 
						<label for="password" class="title">Password</label>
						<input id="password" type="password" placeholder="Enter password..." name="password" maxlength="10">
						</td>
					</tr>
				</table>
			</div>
			<p class="comments"></p>
			<textarea id="txtarea1" name="txtarea1"></textarea>
			<p>
				Choose board type
				<select id="fin" name="finbox">
					<option value="Trifin">Tri-fin</option>
					<option value="Twofin">Two-fin</option>
					<option value="Singlefin">Single fin</option>
				</select>
			</p>
			<input id="brand" type="radio" name="brand" value="Channel Island"/>
			Channel Island
			<input id="brand" type="radio" name="brand" value="Lost"/>
			Lost
			<input id="brand" type="radio" name="brand" value="HIC"/>
			HIC
			<input id="brand" type="radio" name="brand" value="Bear"/>
			Bear
			<p>
				<input type="checkbox" name="Free wax" id="brand"/>
				Free wax
			</p>
			<p>
				Subscribe to our email list
			</p>
			<input type="text" id="email" name="email"/>
			<input type="submit" id="submit" name="submit" value="Submit"/>

		</form>
	</body>
</html>

