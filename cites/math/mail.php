<?php

$recepient = "yakovlichev@yandex.ru";
$sitename = "Подготовка к ОГЭ по математике";

$date = date("c");
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$message = "Дата и время заявки: $date \nИмя клиента: $name \nТелефон клиента: $phone";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");