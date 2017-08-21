$(".button-collapse").sideNav();
$(".drop1").dropdown();
$(".drop2").dropdown();
// Initialize collapse button
$(".button-collapses").sideNav();
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();
$(document).ready(function () {

    $('.modal').modal();
    //$('.modal2').modal();

    $("#f-btn").click(
        function () {
            $.ajax({ //отправляем ajax-запрос
                type: "POST", //тип (POST, GET, PUT, etc)
                url: "/ajax.php", //УРЛ Вашего обработчика
                data: {idUser: idUser, idStudio: idPost} //сами данные, передается POST[xmlUrl] со значением из data-link нажатой кнопки
            })
                .done(function (res) { //при успехе (200 статус)
                    $('#f-btn').removeClass('pink').addClass('f-btn'); //заменяем блок с id="result" полученной строкой от сервера.
                    $('#follow').html(res).addClass('f-color');
                    $('#c-follows').addClass('f-color')
                    //alert("Ответ сервера: " + res.statusText);
                });
        }
    );

    $("#filled-in-box").click(
        function () {
            $.ajax({ //отправляем ajax-запрос
                type: "POST", //тип (POST, GET, PUT, etc)
                url: "/sorts.php", //УРЛ Вашего обработчика
                data: {sort: 'hd'}, //сами данные, передается POST[xmlUrl] со значением из data-link нажатой кнопки

                xhr: function () {
                    var xhr = $.ajaxSettings.xhr(); // получаем объект XMLHttpRequest
                    xhr.upload.addEventListener('progress', function () { // добавляем обработчик события progress (onprogress)
                        $('.progress').removeClass('none');
                    }, false);
                    return xhr;
                },

                success: function () {
                    $('.progress').addClass('none');
                }

            })
                .done(function (res) { //при успехе (200 статус)
                    //$('.row1').addClass('none');
                    $('.chip').removeClass('none');
                    $('.showVideo').html(res);

                    //$('.progress').addClass('none');
                    //alert("Ответ сервера: " + res.statusText);
                });
        }
    );

    $("#hd").click(
        function () {
            $.ajax({ //отправляем ajax-запрос
                type: "POST", //тип (POST, GET, PUT, etc)
                url: "/sorts.php", //УРЛ Вашего обработчика
                data: {sort: 'hd1'}//сами данные, передается POST[xmlUrl] со значением из data-link нажатой кнопки
            })
                .done(function (res) { //при успехе (200 статус)
                    //$('.row1').addClass('none');
                    //$('.chip').removeClass('none');
                    $('.showVideo').html(res);
                   // $('.chip').addClass('none');
                    //$('#filled-in-box').removeClass('filled-in').addClass('filled');
                    //alert("Ответ сервера: " + res.statusText);

                    $('.chip').remove();

                });
        }
    );

    $("#long").click(
        function () {
            $.ajax({
                type: "POST",
                url: "/sorts.php", //УРЛ Вашего обработчика
                data: {sort: 'long'},

                xhr: function () {
                    var xhr = $.ajaxSettings.xhr(); // получаем объект XMLHttpRequest
                    xhr.upload.addEventListener('progress', function () { // добавляем обработчик события progress (onprogress)
                        $('.progress').removeClass('none');
                    }, false);
                    return xhr;
                }
            })
                .done(function (res) {
                    $('.showVideo').html(res);
                    $('.progress').addClass('none');
                });
        })

});


