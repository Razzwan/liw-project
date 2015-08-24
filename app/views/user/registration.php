<?php
use liw\core\Liw;
use liw\captcha\Captcha;
/**
 * Во всех видах доступны переменные класса View через конструкцию $this->variable
 * @var $login string
 * @var $error string - ошибка регистрации
 */
?>

<div class = "container">
    <div class="reg">
        <h2><?=Liw::$lang['button']['registration']?>:</h2>

        <form action="/registration" method="post">

            <div class="form-group">
                <input
                    type="text"
                    id="login"
                    name = "login"
                    placeholder="<?=Liw::$lang['label']['login'];?>"
                    data-tooltip="<?=Liw::$lang['message']['hide_login']?>"
                    value="<?=$login?>"
                    class="form-control input-center"
                    autofocus
                    >
            </div>

            <div class="form-group">
                <input
                    type="password"
                    id="pass"
                    name = "pass"
                    placeholder="<?=Liw::$lang['label']['pass'];?>"
                    class="form-control input-center"
                    data-tooltip="<?=Liw::$lang['message']['hide_pass']?>"
                    >
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"> Запомнить меня
                </label>
            </div>

            <div class="form-group">
                <label>Введите цветовой шифр: </label>
                <p><?=Captcha::init();?></p>
                <canvas id='canvas'>Обновите браузер</canvas>
                <input type="hidden" value="" id="captcha">
            </div>

            <div class="form-group">
                <input type="submit" value="Регистрация" class="btn btn-success">
            </div>

        </form>

        <div class="error_reg">
            <?=$error;?>
        </div>
    </div>

</div>