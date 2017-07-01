<html lang="en">
	<head>
		<title>Test Page</title>
		<h1>Add Candidates</h1>
	</head>
	<body>
		<form method="POST" action = "add_users.php">
			<!-- text boxes -->
			<div id="text_boxes">
				<p><label for="FristName">First name:</label>
					<input type="text" name="firstname" /></p>
				<p><label for="LastName">Last name:</label>
					<input type="text" name="lastname" /></p>
			</div>
		
			<!-- select boxes for gender -->
			<div id="select_boxes">
				<p> Male: <input type="radio" name="gender" value="male" />
					Female: <input type="radio" name="gender" value="female" />
				<p/>
			</div>
		
			<!-- checkboxes for languages -->
			<div id="check_boxes_languages">
				<h4>Languages:</h4>
				<p>English<input type="checkbox" name="languages[]" value="English" />
					Spanish<input type="checkbox" name="languages[]" value="Spanish" />
					French<input type="checkbox" name="languages[]" value="French" />
					Korean<input type="checkbox" name="languages[]" value="Korean" />
				</p>
			</div>
		
			<!-- checkboxes for skills -->
			<div id="check_boxes_skills">
				<h4>Choose experise:</h4>
				<p>JavaScript<input type="checkbox" name="skills[]" value="JavaScript" />
					HTML&CSS<input type="checkbox" name="skills[]" value="HTML&CSS" />
					Python<input type="checkbox" name="skills[]" value="Python" />
					MySQL<input type="checkbox" name="skills[]" value="MySQL" />
				</p>
			</div>
		
			<!-- textarea for comments -->
			<div id="textarea_box">
				<p> Comments:<br><textarea cols="70" rows="5" name="comments"></textarea>
				</p>
			</div>
			<div>
				<input type="submit" name="submit" value="submit" />
			</div>
		</form>
	</body>
</html>