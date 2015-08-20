<?php
use liw\core\Liw;

/**
 * @var $this object liw\core\base\View
 * @var $login string
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="The Liw Framework. Very lite but very strong.">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title><?=$this->title?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- my styles-->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/site.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/dev.css" />

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="logo"><?=$this->title?> - life is wonderful</span></a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php if (Liw::$user['login']): ?>
                <div class="navbar-form navbar-right">
                    <div class="form-group">
                        <a href="/user" class="logo"><?=$_SESSION['user']['login'];?></a>
                    </div>
                    <div class="form-group">
                        <a href="/logout" class="btn btn-success">Выход</a>
                    </div>

                </div>
            <?php elseif(!Liw::$user['login']): ?>
                <form action="/login" method="post" class="navbar-form navbar-right">
                    <div class="form-group">
                        <input name="login" id="login" type="text" placeholder="<?=Liw::$lang['label']['login'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input name="pass" id="pass" type="password" placeholder="<?=Liw::$lang['label']['pass'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Войти" class="btn btn-success">
                    </div>

                </form>
            <?php endif; ?>

        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="main_wrapper">

    <?=$this->view;?>

</div>

<footer>
    <p>&copy; Razzwan <span class="logo">LIW</span> 2015</p>
</footer>

<div id="tooltip"></div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.js" type="text/javascript" ></script>
<script src="/js/jquery-ui.min.js" type="text/javascript" ></script>
<script src="/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/ie10-viewport-bug-workaround.js"></script>
<script src="/js/dev.js" type="text/javascript" ></script>
<script src="/js/js.js" type="text/javascript" ></script>
</body>
</html>
