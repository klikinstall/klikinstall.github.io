
$( function() {
  /* Подключаем календарь выбора даты */
  $( '#datepicker' ).datepicker();

  /* Подключаем калькулятор */
  $('#calculator-form').on('submit', function(event) {
    event.preventDefault();
    $.ajax({
      url: 'calc.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(data) {
        $('#calculator-form .calculator__result-price').text(data);
      }
    });
  })
} );

let amountRange = document.querySelector('#amountrange');
let replenishmentRange = document.querySelector('#replenishmentrange');
let amount = document.querySelector('#amount');
let replenishment = document.querySelector('#replenishment');
let fill = document.querySelectorAll('.bar .fill');
function amountRangeFunc(e) {
  let stepWidth = (amountRange.max - amountRange.min)/100,
      trackWidth = amountRange.value / stepWidth;
  if(trackWidth > 100) {
    trackWidth = 100;
  }
  fill[0].style.width = trackWidth + "%";
}
function replenishmentRangeFunc() {
  let stepWidth = (replenishmentRange.max - replenishmentRange.min)/100,
      trackWidth = replenishmentRange.value / stepWidth;
  if(trackWidth > 100) {
    trackWidth = 100;
  }
  fill[1].style.width = trackWidth + "%";
}
amountRangeFunc();
replenishmentRangeFunc();

/* 1. Меняем значение поля с суммой при передвижении ползунка и наоборот
   2. Вычисляем ширину полосы бегунка */
amountRange.addEventListener('input', (e) => {
  amount.value = e.target.value;
  amountRangeFunc();
});
replenishmentRange.addEventListener('input', (e) => {
  replenishment.value = e.target.value;
  replenishmentRangeFunc();
});
amount.addEventListener('input', (e) => {
  amountRange.value = e.target.value;
  amountRangeFunc();
});
replenishment.addEventListener('input', (e) => {
  replenishmentRange.value = e.target.value;
  replenishmentRangeFunc();
});

/* Валидация полей формы */

let totalInputs = document.querySelectorAll('input[data-rule="total"]');
console.log(totalInputs);
for (input of totalInputs) {
  input.addEventListener('input', function() {
    let value = this.value;

    if(value > 3000000) {
      input.style.border = '1px solid red';
    } else if(value < 1000) {
      input.style.border = '1px solid red';
    } else {
      input.style.border = '1px solid #a8acad';
    }
  });
}
