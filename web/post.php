<?php
declare(strict_types=1);
session_start();

$name = trim($_POST['username'] ?? '');
if ($name !== '') {
    $_SESSION['username'] = $name;
}
header('Location: index.php', true, 302);
exit;
