<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Лабораторная работа</title>
	</head>
	<body>
		<form method="POST" action="">
			<a>Введите числа</a><input type="number" name="numbers"><br/>
			<input type="submit" value="Отправить">
		</form>
		<?php
			$number=$_POST['numbers'];
			$string=$number.split(' ');
			$found=$string.filter(n=>n>0);
			echo $found.length);
		?>	
	</body>
</html>