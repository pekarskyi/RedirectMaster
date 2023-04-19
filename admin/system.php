<?php
define('ROOT', dirname(__DIR__));
include 'configProject.php';
include 'views/header' . $phpExt;
include 'sidebar' . $phpExt;
?>

<h4>О системе</h4>

<p class="text-secondary">Версия: 1.4</p>
<p class="text-secondary">Разработчик: <a href="https://smartller.com/" target="_blank">Smartller Team</a>.<br>Права на перепродажу и поддержку принадлежат inwebpress.ru (Николай Пекарский)</p>
<p class="text-secondary"><a href="https://inwebpress.ru/redirekt-master-svoj-sokrashhatel-ssylok/" target="_blank">Описание скрипта</a></p>
<p class="text-secondary"><a href="https://www.youtube.com/watch?v=Yv0A3xxO-rI" target="_blank">Как установить и настроить Редирект-Мастер</a></p>

<?php include 'views/footer' . $phpExt; ?>