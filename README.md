# Redirect Master

Редирект-Мастер – свой сокращатель ссылок для партнерского маркетинга

[![GitHub release (latest by date)](https://img.shields.io/github/v/release/pekarskyi/RedirectMaster?style=for-the-badge)](https://GitHub.com/pekarskyi/RedirectMaster/releases/)

Версия: 1.4<br>
Язык: русский

## Требования

- PHP: 7.3 (работает на 7.4, но возможны ошибки)
- Secure connection (HTTPS)
- MySQL

## Как установить скрипт?

1. Скачиваем скрипт. Распаковываем архив на компьютере.

2. Покупаем домен с коротким именем и хостинг.

3. Для сайта подключаем SSL, чтобы сайт работал на защищенном протоколе.

4. Версия PHP - 7.3

5. В корень нашего сайта загружаем папки и файлы скрипта.

6. На хостинге создаем Базу данных и импортируем дамп от автора скрипта (создаем таблицы).

7. Открываем на сайте файл: /admin/MySQLlib/dbAccess.php и прописываем в нем данные подключения к Базе данных.

8. Проверьте файл /inc/config.php<br>
В строках 28 и 31 необходимо прописать свой домен и сайт.

9. Заходим в админку сайта по адресу: https://ваш.сайт/admin/<br>
Email: admin@redirect-master.ru<br>
Пароль: Qwerty123456<br>

10. В админке, в разделе «Пользователи» для учетной записи админа меняем почту и пароль.

11. В разделе «Настройки» указываем url-адрес на который пользователь будет перенаправлен в случае, если он введет адрес домена.<br>
Вы можете указать любую свою партнерскую ссылку. Есть люди, которые интересуются, а что там на главной. Вот и отправляйте их на свои реферальные ссылки. Нечего им на главную переходить. Или создайте файл HTML и в нем разместите рекламные баннеры. Ссылку на это файл укажите в качестве редиректа.

[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/badges/StandWithUkraine.svg)](https://sitex.me/standwithukraine)