<html>
	<head>
		<title>Links</title>
	</head>
	<body>
		<h1>File</h1>
		<form action="file.php">
			<label for="GET-name">Name:</label>
			<input id="GET-name" size="15" type="text" name="name">
			<input type="submit" value="Save">
			<textarea name="data">enter data here...</textarea>
			<input type="radio" name="radio" value="single-fin" checked="checked"/>
			Single fin
			<input type="radio" name="radio" value="twin-fin" />
			Twin fin
			<input type="radio" name="radio" value="tri-fin" />
			Tri-fin
			<input type="checkbox" checked="checked" name="ck1"/>Costa Rica
			<input type="checkbox"  name="ck2"/>Panama
			<input type="checkbox"  name="ck3"/>Nicaragua
		<select name="select" >
				<option value="val1">Bubble Gum</option>
			<option value="val2">Mrs Palmers</option>
			<option value="val2">Mr Zogs</option>
		</select>	
			<p>Upload your song in MP3 format:</p>
 <input type="file" name="user-song" /><br />
 <input type="submit" value="Upload" />
			
		</form>
	</body>
</html>