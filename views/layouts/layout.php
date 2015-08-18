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
          href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/bootstrap-theme.min.css" />
    <title><?=$this->title?></title>
</head>
<body>

<div class = "left_menu_wrap"></div>
<nav id= "left_menu">
    <ul>
        <li><a href = "/" id="logo">main</a></li>
        <li><a href="/test" class="button">test</a></li>
    </ul>    
</nav>

<div id="main_wrapper">

    <div id="main">
        <?=$this->view;?>
    </div>

    <footer>
        <div class="logo_boot">&copy; LIW 2015</div>
    </footer>

</div>

<div class="js-block">
    <script src="/js/jquery.js" type="text/javascript" ></script>
    <script src="/js/bootstrap.min.js" type="text/javascript" ></script>
</div>

<div id="tooltip"></div>

</body>
</html>
