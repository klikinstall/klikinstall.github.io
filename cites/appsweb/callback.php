<?php
$recepient = "apps-web@yandex.ru";
$sitename = "AppsWEB";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$email = trim($_POST["email"]);
$report = trim($_POST["message"]);
$message = "\nИмя: $name \nТелефон: $phone \nE-mail: $email \nСообщение: $report";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");


/*
if(!empty($_POST['message']) AND !empty($_POST['email'])){
    $headers = 'From: Вася Васин\r\n'.
                'Reply-to: klikinstall@rambler.ru\r\n'.
                'X-Mailer: PHP/'.phpversion();
    $theme = 'Новое сообщение';
    $letter = 'Данные сообщения:\r\n';
    $letter .= 'Текст сообщения: '.$_POST['message'].'\r\n';
    $letter .= 'E-mail: '.$_POST['message'].'\r\n';
    if (mail('klikinstall@rambler.ru',$theme,$letter,$headers)) {
        header('Location:/thankyou.php');
    } else {
        header('Location:/');
    };
} else {
    header('Location:/');
}
*/


/*
$recepient = "apps-web@yandex.ru";
$sitename = "Сообщение с сайта apps-web.ru";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$email = trim($_GET["email"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \nE-mail: $email";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");*/
?>

<!--
<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Заявка</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <div class="wrapper">
        <div class="back_to">
            <p>Спасибо за обращение! Мы с вами обязательно свяжемся!</p>
            <a href="index.html">Обратно на главную</a>
        </div>
    </div>
</body>
</html> -->