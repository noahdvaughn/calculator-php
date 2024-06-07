<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container" style="margin-top: 50px">

			<?php require_once "./calcController.php";?>

		    <!-- Calculator form -->
		    <form method="post">
		        <input name="number1" type="text" class="form-control inputField" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="times">Times</option>
		            <option value="divided by">Divided By</option>
		        </select>
		        <input name="number2" type="text" class="form-control inputField" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
		</div>
	</body>
</html>