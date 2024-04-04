<?php session_start();

const API_KEY = '6915464334:AAE9LVBdXuRjC5xd6h8hGysOJ5yLGga9HMI';
// admin akkounti id raqamini ushbu bot orqali bilishingiz mumkin @infomiruz_idbot
$admin = "1078608772";
$system_pass = "123";
$logging = true; //false
$work_folder = str_replace("app.php", "", "https://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']);

$langs = [
    "uz" => [
        "text" => "Iltimos, Tilni tanlang !", 
        "btn_text" => "O'zbekcha 🇺🇿",
    ],
    "ru" => [
        "text" => "Пожалуйста, выберите язык !", 
        "btn_text" => "Русский 🇷🇺",
    ],
    "en" => [
        "text" => "Please, select a language !", 
        "btn_text" => "English 🇱🇷",
    ],
    "fr" => [
        "text" => "FRench Please, select a language !", 
        "btn_text" => "French",
    ]
];