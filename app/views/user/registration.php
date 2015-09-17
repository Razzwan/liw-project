<?php
use liw\core\Lang;
/**
 * Во всех видах доступны переменные класса View через конструкцию $this->variable
 * @var $login string
 * @var $error string - ошибка регистрации
 * @var $captcha string captcha img
 */
?>

<div class = "container">
    <div class="reg">
        <h2><?=Lang::$uage['button_registration'];?>:</h2>

        <form action="/registration" method="post">

            <div class="form-group">
                <input
                    type="text"
                    id="login"
                    name = "login"
                    placeholder="<?=Lang::$uage['login'];?>"
                    data-tooltip="<?=Lang::$uage['hide_login']?>"
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
                    placeholder="<?=Lang::$uage['pass'];?>"
                    class="form-control input-center"
                    data-tooltip="<?=Lang::$uage['hide_pass'];?>"
                    >
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"> Запомнить меня
                </label>
            </div>

            <div class="form-group">
                <div class="input-center">
                    <img src="<?= $captcha;?>" class="captcha captcha-img"/>
                    <input
                        type="text"
                        id="captcha"
                        name = "captcha"
                        class="form-control captcha captcha-text"
                        data-tooltip="Введите текст с картинки"
                        >
                </div>
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