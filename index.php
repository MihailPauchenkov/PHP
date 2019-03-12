<!DOCTYPE html>
<html>
	<head><title>Функция isCorrect</title>
	</head>
	<body>
		<form action="iscorrect.php" method="post">
			Строка со скобками: <input type = "text" size="40" name = "str_brackets" placeholder="Введите строку содержащую скобки"> <br>
			<p style="font-size: 12px;">Например: if(x>0){(abc['asd']=abc['asd'])}</p> <br>
			<input type = "submit" name = "submit" value = "Проверить">
		</form>
	</body>
</html>