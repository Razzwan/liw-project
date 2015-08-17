$(document).ready(function($){
    /**
     * добавляет рамку активному элементу
     */
    $("input").focus(function(){
        $(this)
            .addClass("active");
    }).blur(function(){
        $(this)
            .removeClass("active");
    });
    $("textarea").focus(function(){
        $(this)
            .addClass("active");
    }).blur(function(){
        $(this)
            .removeClass("active");
    });

    /**
     * Функция добавляет визуальное подтверждение проверки рег выражением
     *
     * @param obj - объект, который тестируется на совпадение с регВ
     * @param regV - Регулярное выражение
     */
    var
        login = $("#login"),
        password = $("#password"),
        password2 = $("#password2"),
        fRegV = function(obj,regV){
            var str = $.trim(obj.val());
            if(str==''){
                obj
                    .removeClass("prov")
                    .removeClass("error_input");
            }else{
                if (str.search(regV)==-1){
                    obj
                        .removeClass("prov")
                        .addClass("error_input")
                        .val(str);
                } else {
                    obj
                        .removeClass("error_input")
                        .addClass("prov")
                        .val(str);
                }
            }
        },
        //любые русские или английские буквы, подчеркивание или дефиз
        regV_login = /^[a-zA-Z0-9_\-@\.\+]{2,}$/,
        //любые непробельные символы
        //regV_email = /^[\s\S]+[@]{1}[\s\S]+[\.]{1}[\s\S]+$/,
        //любые символы минимум 6 раз
        regV_pass = /^.{6,}$/
        //regV_reg_code = /^[0-9]{3}$/
    ;

    /**
     * Проверка влидации при уведении курсора
     */
    login.blur(function(){
        fRegV($(this),regV_login);
    });

    password.blur(function(){
        fRegV($(this),regV_pass);
    });

    password2.blur(function(){
        if($(this).val()==password.val() && $(this).val()!=''){
            $(this)
                .addClass("prov")
        } else {
            $(this)
                .addClass("error_input");
            if($(this).val()==password.val() && $(this).val()==''){
                $(this)
                    .removeClass("error_input")
                    .removeClass("prov");
            }
        }
    });

    /**
     * Всплывающие подсказки
     */
    $("[data-tooltip]").mousemove(function (eventObject) {

        $data_tooltip = $(this).attr("data-tooltip");

        $("#tooltip").text($data_tooltip)
            .css({
                "top" : eventObject.pageY + 15,
                "left" : eventObject.pageX -50
            })
            .show();

    }).mouseout(function () {

        $("#tooltip").hide()
            .text("")
            .css({
                "top" : 0,
                "left" : 0
            });
    });

    /**
     * Панель разработчика
     */
    $("#develop").draggable();

    $("#button_show_classes").mousemove(function (eventObject) {
        $("#show_classes") .show();
    }).mouseout(function () {
        $("#show_classes").hide();
    });
    $("#button_show_session").mousemove(function (eventObject) {
        $("#show_session") .show();
    }).mouseout(function () {
        $("#show_session").hide();
    });

    $("#button_show_get").mousemove(function (eventObject) {
        $("#show_get") .show();
    }).mouseout(function () {
        $("#show_get").hide();
    });

    $("#button_show_post").mousemove(function (eventObject) {
        $("#show_post") .show();
    }).mouseout(function () {
        $("#show_post").hide();
    });

    $("#button_show_requests").mousemove(function (eventObject) {
        $("#show_requests") .show();
    }).mouseout(function () {
        $("#show_requests").hide();
    });

    $("#close_table").click(function (eventObject) {
        $var = $("#develop").attr("toggle");
        if($var=="true"){
            $("#develop").hide().attr("toggle", "false");
            $("#develop_button").show();
        }
    });

    $("#develop_button").click(function (eventObject) {
        $var = $("#develop").attr("toggle");
        if($var=="false"){
            $("#develop").show().attr("toggle", "true");
            $("#develop_button").hide();
        }
    });

    /*$var = $("#develop").attr("toggle");
    if($var){
        $("#develop").show();
        $("#develop_button").hide();
    }else{
        $("#develop").hide();
        $("#develop_button").show();
    }*/



}); //конец  ready