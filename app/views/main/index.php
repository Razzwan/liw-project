<?php
use liw\core\Liw;
/**
 * $this - liw\core\base\View
 * @var $test
 */
?>
{% extends '@layouts/layout.php' %}
<div class="jumbotron">
    <h1>The <span class="logo">L</span>ife <span class="logo">I</span>s <span class="logo">W</span>onderful</h1>
    <h2 class="text-success">Framework</h2>
    <p class="text-muted">Жизнь начинается с любви</p>
    <p><a class="btn btn-primary btn-lg" href="/more" role="button">Узнать больше &raquo;</a></p>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Установи и пользуйся</h2>
            <p>Перейдите по ссылке ниже, чтоб установить на свой компьютер самый легкий, но от этого не менее мощный, фрэймворк <span class="logo">LIW</span>. </p>
            <p><a class="btn btn-default" href="/install" role="button">Установка из исходников &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Учавствуйте в разработке</h2>
            <p>
                <span class="logo">LIW</span> - это полностью бесплатный фрэймворк с открытым исходным кодом. Ты можешь
                учавсвтовать в процессе разработке, если у тебя есть желание.
            </p>
            <p><a class="btn btn-default" href="https://github.com/Razzwan/liw-project" role="button">Принять участие в разработке &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Вноси свои предложения</h2>
            <p>У тебя есть идеи по развитию фреймворка <span class="logo">LIW</span>, но нет достаточных знаний, чтоб принять участие в разработке?
                Не беда! Вноси свои предложения, перейдя ниже по ссылке. Наша команда реализует наиболее интересные идеи в ближайшее время. Будь в курсе!</p>
            <p><a class="btn btn-default" href="https://github.com/Razzwan/liw-project/issues" role="button">Внести предложения &raquo;</a></p>
        </div>
    </div>

    <hr>
</div> <!-- /container -->

