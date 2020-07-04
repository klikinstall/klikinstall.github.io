<?php
$data = $_POST;

$timestamp = strtotime($data['date']); // Преобразуем текстовое представление даты на английском языке в метку времени Unix

$summnlast = $data['amount']; // сумма на счете на конец прошлого месяца

$daysn = cal_days_in_month(CAL_GREGORIAN, date('n', $timestamp), date('Y', $timestamp)); // количество дней в данном месяце, на которые приходился вклад
$percent = 0.1; // процентная ставка банка - 10%
$summadd = $data['yesno'] == 'yes' ? $data['replenishment'] : 0; // сумма ежемесячного пополнения

$daysy = date('L', $timestamp) ? 366 : 365; // количество дней в году

$summn = $summnlast + ($summnlast + $summadd) * $daysn * ($percent / $daysy);

echo $summn;
