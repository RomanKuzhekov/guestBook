<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Гостевая книга</h1>
    <br>
</p>

<h4>Состоит из:</h4>
<p><b>Пользовательской части:</b> вывод отзывов, пагинация по 2 отзыва на страницу, форма приема отзывов работающая через AJAX.</p>
<p>
<b>Административной части:</b> авторизация, список отзывов с фильтрацией по всем полям, страница просмотра/редактирования/удаления отзыва, ограничение функционала по ролям. </p>

<h3>Установка</h3>

<p>Склонировать проект: git clone https://github.com/RomanKuzhekov/test-marketing.git</p>

<h5>Запустить в терминале:</h5>
<p>git checkout dev</p>
<p>composer install</p>
<p>php init</p>
<p>Создать базу данных и прописать настройки в файле common/config/main-local.php</p>

<h5>Запустить в терминале:</h5>
<p>php yii migrate</p>
<p>composer update nkovacs/yii2-datetimepicker</p>

<h5>Зарегистрировать пользователя в админке, выбрав нужную роль (/admin/?r=site/signup)</h5>

<p>Админка доступна по адресу: /admin/</p>

<h5>По желанию на сервере можно настроить хосты на папки:</h5>
<p>..\frontend\web</p>
<p>..\backend\web</p>

<hr>
<h3>Докер:</h3>
<p>В папке docker запустить docker-compose up -d --build</p>

<h4>Прописать в hosts</h4>
<p>127.0.0.1  localhost</p>
<p>127.0.0.1  localhost.back</p>
<p>127.0.0.1  pma</p>

<h4>Запустить докер:</h4>
<p>docker-compose up -d</p>

<h4>Остановить докер:</h4>
<p>docker-compose stop</p>

<h4>Доступны адреса в браузере:</h4>
<p>http://localhost/</p>
<p>http://localhost.back/</p>
<p>http://pma:81/</p>

<hr>
<p>Ссылка на гитхаб (ветка dev) - https://github.com/RomanKuzhekov/test-marketing.git</p>