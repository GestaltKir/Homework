<?php
session_start();
print_r($_SESSION['results']);
$_SESSION['result2'] = $_POST['result2'];
?>
<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>5+5=</label>
    <input type="text" name="result2">
    <button type="submit">Отправить</button>
    <a href="task3.php">Следующий вопрос</a>
</form>
</body>
</html>