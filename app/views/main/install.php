<div class="container">
    <h2>Установка:</h2>

    <h3>1. при помощи <a href="https://getcomposer.org/">composer</a> (предпочтительно):</h3>

    <div class="bg-info indent50">
        <p>1. Установите composer: <a href="https://getcomposer.org/doc/00-intro.md">перейти для установки</a></p>

        <p>
            2. Перейдите при помощи терминала(linux/osx) или GitBash(windows) в папку
            доступную из веб (www, public...):<br>
            <code>cd /path/to/public/folder</code>
        </p>

        <p>
            3. Выполните в терминале(linux/osx) или GitBash(windows) команду:<br>

            <code>php composer.phar create-project liw/liw-project newProject</code><br>

            или, если composer добавлен в PATH:<br>

            <code>composer create-project liw/liw-project newProject</code>
        </p>

        <p>Composer установит проект в папку newProject.</p>
        <p>Можно работать.</p>
    </div>

    <h3>2. из архивов:</h3>

    <div class="bg-info indent50">
        <p>1. Скачайте <a href="https://github.com/Razzwan/liw-project/archive/master.zip">архив</a>.

        и распакуйте в рабочую директорию.</p>

        <p>2. Затем скачайте архивы <a href="https://github.com/Razzwan/core">core</a> и <a href="https://github.com/Razzwan/liw-installer">liw-installer</a>

        И распакуйте их в папку <span class="text-success">vendor/liw</span> вашего проетка.</p>

        Можно работать.
    </div>

        <h3>Обновление компонентов:</h3>
    <div class="bg-info indent50">
        <p>Выполните в терминале(linux/osx) или GitBash(windows) команду (нужен установленный composer):<br>

        <code>php composer.phar update</code></p>

        <p>Composer установит последние версии компонентов.</p>
    </div>

</div>