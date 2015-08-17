<?php
use liw\core\Liw;
/**
 * @var $login string
 */
$this->title = 'MIRA - информация о пользователе';
?>

<div class="user_info">
    <h1>Time: <?=date("d.m.Y H:i:s", time());?></h1>
    <p class="test">
        <?=Liw::$lang['label']['login'];?>: <?=isset($_SESSION['user']['login'])?$_SESSION['user']['login']:'';?>
    </p>
    <p class="test">
        Имя: <?=isset($_SESSION['user']['name'])?$_SESSION['user']['name']:'';?>
    </p>
    <p class="test">
        Фамилия: <?=isset($_SESSION['user']['s_name'])?$_SESSION['user']['s_name']:'';?>
    </p>
    <p class="test">
        email: <?=isset($_SESSION['user']['email'])?$_SESSION['user']['email']:'';?>
    </p>
    <p class="test">
        Телефон: <?=isset($_SESSION['user']['tel'])?$_SESSION['user']['tel']:'';?>
    </p>
    <p class="test">
        Дата регистрации: <?=isset($_SESSION['user']['date_create'])?date("d.m.Y H:i:s",$_SESSION['user']['date_create']):'';?>
    </p>
    <p class="test">
        Дата последнего визита: <?=isset($_SESSION['user']['last_visit'])?date("d.m.Y H:i:s",$_SESSION['user']['last_visit']):'';?>
    </p>
</div>

