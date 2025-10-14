<?php

<?php
declare(strict_types=1);
session_start();

$AUTHOR = 'Ваше Имя Фамилия';

$username = $_SESSION['username'] ?? '';


if (is_string($username) && trim($username) !== '') {
    
    include __DIR__ . '/views/hello.view.php';
} else {
    include __DIR__ . '/views/form.view.php';
}
