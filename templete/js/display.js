$(".button-collapse").sideNav();
$(".drop1").dropdown();
$(".drop2").dropdown();
// Initialize collapse button
$(".button-collapses").sideNav();
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();
$( document ).ready(function() {
    $('.modal').modal();
    $("#f-btn").click(
        function(){
            $.ajax({ //отправляем ajax-запрос
                type: "POST", //тип (POST, GET, PUT, etc)
                url: "/ajax.php", //УРЛ Вашего обработчика
                data: { idUser: idUser, idStudio: idPost } //сами данные, передается POST[xmlUrl] со значением из data-link нажатой кнопки
            })
                .done(function( res ) { //при успехе (200 статус)
                    $('#f-btn').removeClass('pink').addClass('f-btn'); //заменяем блок с id="result" полученной строкой от сервера.
                    $('#follow').html(res).addClass('f-color');
                    $('#c-follows').addClass('f-color')
                });
        }
    );
});

