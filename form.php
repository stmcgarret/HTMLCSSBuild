<html>
	<head>
		<title>Forms</title>
	</head>
	<body>
		<form action="form.php" method="get">
			<fieldset>
				<legend>
					Your Details:
				</legend>
				<label> Name:
					<input type="text" name="name" size="30" maxlength="100">
				</label>
				<br />
				<label> Email:
					<input type="email" name="email" size="30" maxlength="100">
				</label>
				<br />
			</fieldset>
			<br />
			<fieldset>
				<legend>
					Your Review:
				</legend>
				<p>
					<label for="hear-about"> How did you hear about us? </label>
					<select name="referrer" id="hear-about">
						<option value="google">Google</option>
						<option value="friend">Friend</option>
						<option value="advert">Advert</option>
						<option value="other">Other</option>
					</select>
				</p>
				<p>
					Would you visit again?
					<br />
					<label>
						<input type="radio" name="rating" value="yes" />
						Yes </label>
					<label>
						<input type="radio" name="rating" value="no" />
						No </label>
					<label>
						<input type="radio" name="rating" value="maybe" />
						Maybe </label>
				</p>
				<p>
					<label for="comments"> Comments: </label>
					<br />
					<textarea rows="4" cols="40" id="comments">
     </textarea>
				</p>
				<label>
					<input type="checkbox" name="subscribe" checked="checked" />
					Sign me up for email updates </label>
				<br />
				<input type="submit" value="Submit review" />
			</fieldset>
		</form>

		<h1>Table Example Below</h1>

		<table>
			<thead>
				<tr>
					<th></th>
					<th scope="col">Home starter hosting</th>
					<th scope="col">Premium business hosting</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Disk space</th>
					<td>250mb</td>
					<td>1gb</td>
				</tr>
				<tr>
					<th scope="row">Bandwidth</th>
					<td>5gb per month</td>
					<td>50gb per month</td>
				</tr>
				<!-- more rows like the two above here -->
			</tbody>
			<tfoot>
				<tr>
					<td></td>
					<td colspan="2">Sign up now and save 10%!</td>
				</tr>
			</tfoot>
		</table>

		<h1>Links Example</h1>
		<h1 id="top">Film Folk</h1>
		<h2>Festival Diary</h2>
		<p>
			Here are some of the film festivals we
			will be attending this year.
			<br />
			Please <a href="mailto:filmfolk@example.org"> contact us</a> if you would like more
			information.
		</p>
		<h3>January</h3>
		<p>
			<a href="http://www.sundance.org"> Sundance Film Festival</a>
			<br />
			Park City, Utah, USA
			<br />
			20 - 30 January 2011
		</p>
		<h3>February</h3>
		<p>
			<a href="http://www.tropfest.com"> Tropfest</a>
			<br />
			Sydney, Australia
			<br />
			20 February 2011
		</p>
		<!-- additional content -->
		<p>
			<a href="about.html">About Film Folk</a>
		</p>
		<p>
			<a href="#top">Top of page</a>
		</p>

		<h1>List Example</h1>
		<h1>Scrambled Eggs</h1>
		<p>
			Eggs are one of my favourite foods. Here is a
			recipe for deliciously rich scrambled eggs.
		</p>
		<h2>Ingredients</h2>
		<ul>
			<li>
				2 eggs
			</li>
			<li>
				1tbs butter
			</li>
			<li>
				2tbs cream
			</li>
		</ul>
		<h2>Method</h2>
		<ol>
			<li>
				Melt butter in a frying pan over a medium
				heat
			</li>
			<li>
				Gently mix the eggs and cream in a bowl
			</li>
			<li>
				Once butter has melted add cream and eggs
			</li>
			<li>
				Using a spatula fold the eggs from the edge of
				the pan to the center every 20 seconds (as if
				you are making an omelette)
			</li>
			<li>
				When the eggs are still moist remove from the
				heat (it will continue to cook on the plate
				until served)
			</li>
		</ol>
	</body>
</html>