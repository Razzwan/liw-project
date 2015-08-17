<?php
use liw\core\Liw;
/**
 * Во всех видах доступны переменные класса View через конструкцию $this->variable
 * @var $login string
 * @var $error string - ошибка регистрации
 */
?>

<div class = "reg">
    <form action="/registration" method="post">
        <div id="tooltip"></div>
        <table>
            <caption><?=Liw::$lang['button']['registration']?>:</caption>
            <tr>
                <td><input
                        type="text"
                        id="login"
                        name = "login"
                        placeholder="<?=Liw::$lang['label']['login'];?>"
                        data-tooltip="<?=Liw::$lang['message']['hide_login']?>"
                        value="<?=$login?>"
                        class="input"
                        autofocus                        />
                </td>
            </tr>
            <tr>
                <td>
                    <input
                        type="password"
                        id="password"
                        name = "pass"
                        placeholder="password"
                        class="input"
                        data-tooltip="<?=Liw::$lang['message']['hide_pass']?>"/>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="reg" class="button" value="<?=Liw::$lang['button']['registration']?>" /></td>
            </tr>
        </table>
    </form>

    <div class="error_reg">
        <?=$error;?>
    </div>

</div>