<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Приветствие</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="font-family: system-ui, sans-serif; margin: 2rem;">
  <h1>Здравствуйте, <?= htmlspecialchars($_SESSION['username'] ?? '', ENT_QUOTES, 'UTF-8') ?>!</h1>
  <p>Рады видеть вас снова. Мы запомнили ваше имя.</p>
  <p><a href="exit.php">Выйти и забыть имя</a></p>
</body>
</html>
