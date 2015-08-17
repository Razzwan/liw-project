<?php
use liw\core\Liw;

/**
 * @var $this object liw\core\base\View
 * @var $login string
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <link rel="SHORTCUT ICON" href="/img/ico/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/jquery-ui.structure.min.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/elements.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/site.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/article.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/dev.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/issue.css" />
    <title><?=$this->title?></title>
</head>
<body>

<div class = "left_menu_wrap"></div>
<nav id= "left_menu">
    <h1> <a href = "/" id="logo"><?=Liw::$config['site_name']?></a></h1>

    <?php if(!Liw::$user['login']): ?>
    <form action="/login" method="post">
        <input type="text" name="login" class="input" value="<?=isset($login) ? $login : '';?>"
               placeholder="<?=Liw::$lang['label']['login'];?>" />

        <input type="password" name="pass" class="input"
               placeholder="password" />

        <input type="submit" name="login_submit" class="button"
               id="sub_butt" value="<?= Liw::$lang['button']['enter'] ?>"/>
        <a href="/user/resset_pass" class="lost_pass"><?= Liw::$lang['button']['forgot_pass'] ?></a>
    </form>
    <ol id="l_m">
        <li><a href="/registration" class="button"><?= Liw::$lang['button']['registration'] ?></a></li>
    <?php elseif(Liw::$user['login']): ?>
    <ol id="l_m">
        <li><a href="/user" class="button"><?=$_SESSION['user']['login'];?></a></li>
        <li><a href="/articles" class="button"><?=Liw::$lang['button']['articles'];?></a></li>
        <li><a href="/issue" class="button"><?=Liw::$lang['button']['issue'];?></a></li>
        <li><a href="/logout" class="button"><?=Liw::$lang['button']['escape'];?></a></li>
    <?php endif; ?>
    </ol>
</nav>

<div id="main_wrapper">

    <div id="main">
        <?=$this->view;?>
    </div>

    <footer>
        <div class="logo_boot">&copy; MIRA 2015</div>
    </footer>

</div>

<div class="js-block">
    <script src="/js/jquery.js" type="text/javascript" ></script>
    <script src="/js/jquery-ui.min.js" type="text/javascript" ></script>
    <script src="/js/bootstrap.min.js" type="text/javascript" ></script>
    <script src="/js/js.js" type="text/javascript" ></script>
    <script src="/js/ajax.js" type="text/javascript" ></script>
</div>

<div id="tooltip"></div>

</body>
</html>