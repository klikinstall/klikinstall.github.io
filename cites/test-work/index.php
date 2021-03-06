<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>World Bank Publications</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="navbar-top">
        <div class="navbar__logo">
          <img src="img/logo.png" alt="World Bank Publications">
        </div>
        <div class="navbar__contacts">
          <p class="navbar__phone phone-1"><a href="#">8-800-100-5005</a></p>
          <p class="navbar__phone phone-2"><a href="">+7 (3452) 522-000</a></p>
        </div>
      </div>
      <nav class="navbar-block">
        <div class="navbar-burger">
          <span></span>
        </div>
        <ul class="navbar-menu">
          <li class="navbar-menu__item"><a href="#">Кредитные карты</a></li>
          <li class="navbar-menu__item active"><a href="#">Вклады</a></li>
          <li class="navbar-menu__item"><a href="#">Дебетовая карта</a></li>
          <li class="navbar-menu__item"><a href="#">Страхование</a></li>
          <li class="navbar-menu__item"><a href="#">Друзья</a></li>
          <li class="navbar-menu__item"><a href="#">Интернет-банк</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="contributions">
    <div class="container">
      <div class="contributions-wrapper">
        <div class="breadcrumbs">
          <span class="breadcrumbs-item"><a href="#">Главная</a></span>
          <span class="breadcrumbs-item"><a href="#">Вклады</a></span>
          <span class="breadcrumbs-item">Калькулятор</span>
        </div>
        <div class="calculator">
          <h2>Калькулятор</h2>
          <form action="#" class="calculator-form" id="calculator-form">
            <p class="calculator__title">Дата оформления вклада</p>
            <div class="calculator__field calculator__field-date">
              <input type="text" name="date" id="datepicker" placeholder="дд.мм.гггг">
            </div>
            <p class="calculator__title">Сумма вклада</p>
            <div class="calculator__field calculator__field-range">
              <input type="number" data-rule="total" name="amount" id="amount" value="10000">
              <div class="calculator__range-wrapper">
                <span class="bar"><span class="fill"></span></span>
                <input type="range" name="amountrange" id="amountrange" min="1000" max="3000000" value="10000" step="1">
              </div>
            </div>
            <p class="calculator__title">Срок вклада</p>
            <div class="calculator__field calculator__field-year">
              <select name="yearamount">
                <option value="1">1 год</option>
                <option value="2">2 года</option>
                <option value="3">3 года</option>
                <option value="4">4 года</option>
                <option value="5">5 лет</option>
              </select>
            </div>
            <p class="calculator__title">Пополнение вклада</p>
            <div class="calculator__field calculator__field-yesno">
              <input type="radio" name="yesno" value="no" checked>Нет
              <input type="radio" name="yesno" value="yes">Да
            </div>
            <p class="calculator__title">Сумма пополнения вклада</p>
            <div class="calculator__field calculator__field-range">
              <input type="number" data-rule="total" name="replenishment" id="replenishment" value="10000">
              <div class="calculator__range-wrapper">
                <span class="bar"><span class="fill"></span></span>
                <input type="range" name="replenishmentrange" id="replenishmentrange" min="1000" max="3000000" value="10000" step="500">
              </div>
            </div>
            <input type="submit" class="calculator__submit" value="Рассчитать">
            <div class="calculator__result"><span class="calculator__result-phrase">Результат:</span> <span class="calculator__result-price">0</span> руб</div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="container">
      <nav class="footer-block">
        <ul class="footer-menu">
          <li class="footer-menu__item"><a href="#">Кредитные карты</a></li>
          <li class="footer-menu__item"><a href="#">Вклады</a></li>
          <li class="footer-menu__item"><a href="#">Дебетовая карта</a></li>
          <li class="footer-menu__item"><a href="#">Страхование</a></li>
          <li class="footer-menu__item"><a href="#">Друзья</a></li>
          <li class="footer-menu__item"><a href="#">Интернет-банк</a></li>
        </ul>
      </nav>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
