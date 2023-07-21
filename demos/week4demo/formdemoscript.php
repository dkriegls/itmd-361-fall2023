<?php

//Make short Variable names
$text = $_REQUEST['text_field'];
$textarea = $_REQUEST['textarea_field'];
$password = $_REQUEST['password_field'];
$radio = $_REQUEST['radio_field'];
$checkbox = $_REQUEST['checkbox_field'];
$menu = $_REQUEST['menu_field'];
$hidden = $_REQUEST['hidden_field'];

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ITMD-361 Form Demo Processing Script</title>
	<style>
		.box {
			border: 1px solid #444;
			background-color: #ccc;
			margin: 20px 20px;
			padding: 5px 20px;
		}
	</style>
</head>

<body>

	<div style="text-align:center;">
		<h1>ITMD-361 Form Demo Processing Script</h1>
		<p>This page will display the results of the form that was submitted to it.</p>
		<hr>
	</div>

	<div class="box">
		<h2>This section contains the text entry fields:</h2>
		<p><strong>Text Field:</strong> <?php echo htmlentities($text) ?></p>
		<p><strong>Password Field:</strong> <?php echo htmlentities($password) ?></p>
	</div>

	<div class="box">
		<h2>This section contains the content of the textarea field:</h2>
		<p><?php echo nl2br(htmlentities($textarea)) ?></p>
	</div>

	<div class="box">
		<h2>This section contains the value of the radio button selected:</h2>
		<p><strong>Radio Button Selected:</strong> <?php echo htmlentities($radio) ?></p>
		</div>

	<div class="box">
		<h2>This section contains the selected checkbox field values:</h2>
		<?php
		if (is_array($checkbox)){
		foreach ($checkbox as $ckvalue) {
			echo ('<p>' . htmlentities($ckvalue) . '</p>');
		}
		} else {
			echo htmlentities($checkbox);
		}
		?>
	</div>

	<div class="box">
		<h2>This section contains the value of the menu field:</h2>
		<?php
		if (is_array($menu)){
		foreach ($menu as $mvalue) {
			echo ('<p><strong>Menu Option Selected:</strong> ' . htmlentities($mvalue) . '</p>');
		}
		} else {
			echo ('<p><strong>Menu Option Selected:</strong> ' . htmlentities($menu) . '</p>');
		}
		?>
	</div>

	<div class="box">
		<h2>This section contains the value of the hidden field:</h2>
		<p><strong>Hidden Field:</strong> <?php echo htmlentities($hidden) ?></p>
	</div>

</body>
</html>
