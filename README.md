# Прочти меня

Мини фрэймворк для обучения. Присоединяйся! ;)

## Установка: 

### 1. при помощи composer (предпочтительно):
1. Установите [composer](https://getcomposer.org/doc/00-intro.md)

2. Перейдите при помощи терминала(linux/osx) или GitBash(windows) в папку доступную из веб (www, public...):
*** cd /path/to/public/folder

3. Выполните в терминале(linux/osx) или GitBash(windows) команду:
*** php composer.phar create-project liw/liw-project newProject

или, если composer добавлен в PATH:
*** composer create-project liw/liw-project newProject 

Composer установит проект в папку newProject.
Можно работать.

### 2. из архивов:
1. Скачайте архив.

2. Распакуйте в рабочую директорию.

3. Затем скачайте архивы [core](https://github.com/Razzwan/core) и [liw-installer](https://github.com/Razzwan/liw-installer)

4. И распакуйте их в папку ***vendor/liw*** вашего проетка.
 
Можно работать.


## Обновление компонентов: ##
Выполните в терминале(linux/osx) или GitBash(windows) команду (нужен установленный composer):
##### php composer.phar update #####

Composer установит последние версии компонентов.
