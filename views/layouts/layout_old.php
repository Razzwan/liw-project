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
          href="/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/site.css" />
    <link rel="stylesheet" type="text/css" media="screen"
          href="/css/dev.css" />
    <title><?=$this->title?></title>
</head>
<body>

<div id="top-menu">
    <h1><?=$this->title?></h1>

    <div class="btn-group" role="group" aria-label="...">
        <a href = "/" class="btn btn-default ">
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            main
        </a>
        <a href="/test" class="btn btn-default">
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            test
        </a>
        <a href="/reg" class="btn btn-default">
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            регистрация
        </a>
    </div>
</div>



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
    <script src="/js/jquery-ui.min.js" type="text/javascript" ></script>
    <script src="/js/bootstrap.min.js" type="text/javascript" ></script>
    <script src="/js/dev.js" type="text/javascript" ></script>
</div>

<div id="tooltip"></div>

</body>
</html>












