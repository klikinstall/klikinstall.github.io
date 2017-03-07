var link = document.querySelector(".feedback_btn");
var popup = document.querySelector(".hidden");
var modal = document.querySelector(".modal_content");
var close = document.querySelector(".modal_content_close");
var login = popup.querySelector("[name=name]");
var form = popup.querySelector("form");
var password = popup.querySelector("[name=email]");
var storage = localStorage.getItem("login");
//Появление всплывающего окна при нажатии кнопки "Форма обратной связи"
link.addEventListener("click", function(event){
    event.preventDefault();
    window.scrollTo(0,200);
    popup.classList.add("not_hidden");
    login.focus();
    if (storage) {
        login.value = storage;
        password.focus();
    } else {
        login.focus();
    }
});
//Закрытие всплывающего окна при нажатии на крестик и на esc
close.addEventListener("click", function(event){
    event.preventDefault();
    popup.classList.remove("not_hidden");
    modal.classList.remove("modal_error");
});
window.addEventListener("keydown", function(event){
    if (event.keyCode === 27 && popup.classList.contains("not_hidden")) {
        popup.classList.remove("not_hidden");
    }
});
//Проверка наличия данных в полях формы обратной связи
form.addEventListener("submit", function(event){
    event.preventDefault();
    if (!login.value || !password.value) {
        console.log("Введите логин или пароль");
        modal.classList.add("modal_error");
    } else {
        localStorage.setItem("login",login.value);
    }
});
//Стилизация маркера карты
var pointer = new YMaps.Style();
pointer.iconStyle = new YMaps.IconStyle();
pointer.iconStyle.href = "/img/pointer_icon.png";
pointer.iconStyle.size = new YMaps.Point(218, 142);
var placemark = new YMaps.Placemark(point, {style: pointer});
map.addOverlay(placemark);
