<?php

/*
 * jQuery - бібліотека на JavaScript
 *
 * клієнт (html, css, js) <-> сервер (php application) <-> база даних (MySql)
 */

$oksana = [
    "name" => "Oksana",
    "email" => "mattiolka@gmail.com",
    "password" => "parol",
];

$misha = [
    "name" => "Misha",
    "email" => "xedelweiss@gmail.com",
    "password" => "12345",
];

// перевірка правильності запиту

if (!isset($_POST['email']) || empty($_POST['email'])) {
    die("Пошта обовз'язкова!");
}

if (!isset($_POST['password']) || empty($_POST['password'])) {
    die("Пароль обовз'язковий!");
}

// перевірка даних користувача

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == $oksana['email'] && $password == $oksana['password']) {
    die("Оксана, вітаю!");
}

if ($email == $misha['email'] && $password == $misha['password']) {
    die("З поверненням, Міша!");
}

die('Невірний пароль або пошта!');