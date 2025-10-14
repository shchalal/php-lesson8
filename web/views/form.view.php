<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Демо сессии на PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: system-ui, sans-serif; margin: 2rem; }
    form { display: grid; gap: .75rem; max-width: 420px; }
    input[type="text"] { padding: .5rem; border: 1px solid #ccc; border-radius: .5rem; }
    button { padding: .6rem 1rem; border: 0; border-radius: .5rem; cursor: pointer; }
  </style>
</head>
<body>
  <h1>Простое приложение на PHP</h1>
  <p>Автор: <strong><?= htmlspecialchars($AUTHOR, ENT_QUOTES, 'UTF-8') ?></strong></p>

  <form action="post.php" method="post" autocomplete="off">
    <label for="username">Введите ваше имя:</label>
    <input id="username" name="username" type="text" required placeholder="Например, Мария">
    <button type="submit">Сохранить и поздороваться</button>
  </form>
</body>
</html>
