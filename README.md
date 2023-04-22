# Redirect Master RU

Редирект-Мастер – свой сокращатель ссылок для партнерского маркетинга.

Редирект-Мастер - это удобный сокращатель ссылок в виде скрипта PHP, который устанавливается на Ваш собственный домен и позволяет управлять всеми вашими ссылками в одном месте и видеть статистику переходов.

- :floppy_disk: Версия: 1.5 [Скачать](https://github.com/pekarskyi/RedirectMaster/releases)
- :earth_africa: Язык: русский
- :coffee: [Предистория](https://github.com/pekarskyi/RedirectMaster/wiki/%D0%9F%D1%80%D0%B5%D0%B4%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F)
- :scroll: [Описание, видео](https://inwebpress.com/redirekt-master-svoj-sokrashhatel-ssylok/)
- :question: [FAQ](https://github.com/pekarskyi/RedirectMaster/wiki)
- :interrobang: [Задать вопрос / сообщить о проблеме](https://github.com/pekarskyi/RedirectMaster/issues)
- :man_technologist: [О себе](https://github.com/pekarskyi)

## :thumbsup: Кому подойдет Редирект-Мастер?

- Для продажи своих инфо-курсов
- Для продажи своих цифровых товаров
- Для партнерского маркетинга (продажа чужих цифровых товаров)
- Для авторов контента
- Для владельцев каналов и групп в мессенджерах
- Для SMM-специалистов
- Для специалистов по рекламе
- Для разных специалистов предоставляющих различные услуги в Интернете

## :thumbsup: Возможности

1. Статистика переходов - скрипт учитывает каждый переход и показывает IP и дату.
2. Возможность менять цель - вы всегда можете изменить конечную цель перенаправления: куда направить посетителя при переходе по ссылке.
3. Короткий URL-адрес - вы можете использовать как созданные по умолчанию короткие ссылки, так и задавать собственный URL-адрес.
4. Все на вашем домене - скрипт устанавливается на Ваш собственный домен. Система полностью принадлежит Вам.
5. Категории - для каждой группы ссылок вы можете создать отдельную категорию.
6. Пользователи - вы можете предоставить доступ к управлению другому пользователю. Это удобно, если у вас есть помощник.

## :framed_picture: Screenshots

- [Главная](https://1drv.ms/i/s!AqqMd7ixtOxl8TLLQtbj4Fa6mSUJ?e=FnZaEW)
- [Создание ссылки](https://1drv.ms/i/s!AqqMd7ixtOxl8TRGx23KBFWIh7re?e=8tMKYX)
- [Статистика переходов по ссылке](https://1drv.ms/i/s!AqqMd7ixtOxl8Tg71SIVwOiX_Rut?e=FZoi0P)
- [Пользователи](https://1drv.ms/i/s!AqqMd7ixtOxl8TbGjug-z6Xh3joa?e=piWd6q)
- [Настройки](https://1drv.ms/i/s!AqqMd7ixtOxl8TVFJGdWQ2UpoODK?e=pl7qNO)
- [О системе](https://1drv.ms/i/s!AqqMd7ixtOxl8TdXK2JSlnm8bdwe?e=fVQx7N)
- [Авторизация](https://1drv.ms/i/s!AqqMd7ixtOxl8TFLLtKE0DIc1Fjt?e=NjkXGg)
- [Восстановление пароля](https://1drv.ms/i/s!AqqMd7ixtOxl8TPX787N8CM729Fk?e=534Sa1)

## :earth_africa: Languages

- [Украинский](https://github.com/pekarskyi/RedirectMaster-UA) (как отдельная версия)
- [Русский](https://github.com/pekarskyi/RedirectMaster) (как отдельная версия)

## :loudspeaker: Requirements

Скрипт неприхотлив к ресурсам хостинга и не создает нагрузку на сервер. Можно установить на домен, поддомен или в подпапку.

- PHP: 7.4+ (рекомендую 8.0+)
- Secure connection (HTTPS) - подключаем SSL-сертификат, чтобы сайт работал на защищенном протоколе.
- MySQL

## :white_check_mark: Install

1. Скачиваем скрипт. Распаковываем архив на компьютере.

2. Покупаем домен с коротким именем и хостинг (можно дешевый).

3. В корень нашего сайта загружаем папки и файлы скрипта.

4. На хостинге создаем Базу данных и импортируем дамп (файл db.sql). Примечание: после установки, этот файл на сайте можно удалить.

5. Открываем на сайте файл: /admin/MySQLlib/dbAccess.php и прописываем в нем данные подключения к Базе данных.

6. В файле /inc/config.php<br>
в строках 28 и 31 необходимо прописать свой домен и сайт.

7. Заходим в админку сайта по адресу:
```
https://mysite.com/admin/
Email: admin@mysite.com
Пароль: Qwerty123456
```

8. В админке, в разделе «Пользователи» для учетной записи админа меняем почту и пароль.

9. В разделе «Настройки» указываем url-адрес на который пользователь будет перенаправлен в случае, если он введет адрес домена.<br>
Вы можете указать любую свою партнерскую ссылку. Есть люди, которые интересуются, а что там на главной. Вот и отправляйте их на свои реферальные ссылки. Нечего им на главную переходить. Или создайте файл HTML и в нем разместите рекламные баннеры. Ссылку на это файл укажите в качестве редиректа.

## :ballot_box_with_check: Update

1. Сделайте резервную копию папки скрипта на сервере.
2. Сохраните отдельно следующие файлы: 

```
/admin/MySQLlib/dbAccess.php
/inc/config.php
```
3. Загрузите содержимое из папки с новой версией на сервер в папку скрипта - замените папки и файлы.

4. Загрузите на сервер свои файлы dbAccess.php и config.php.

5. Проверьте работу скрипта.

## :rocket: Roadmap

Последовательность появления новых изменений может быть иной, чем указано ниже.

- [X] Сделать скрипт доступным и бесплатным
- [X] Улучшение внешнего вида (шрифт, иконки, кнопки)
- [X] Проверка наличия новой версии
- [X] Исправление ошибок PHP
- [X] Поддержка PHP 7.4 и выше
- [X] Создание украиноязычной версии скрипта (как отдельный проект)*
- [ ] Создание англоязычной версии скрипта (как отдельный проект)*
- [ ] Пошаговый установщик

*Возможно, в будущем будет создана одна версия скрипта, но с разными локализациями.

## :date: Changelog

```txt
1.4 (2019) - основная версия, русский язык. Поддержка PHP 7.3.

1.5 (22-04-2023):

- Мелкие улучшения в дизайне (шрифт, иконки, кнопки)
- Поддержка PHP 7.0 - 8.1
- Исправление ошибок PHP
- Создание версии скрипта на украинском языке
- Проверка наличия новой версии (О системе)
- Проверка версии PHP и расширений (О системе)
```

## :hearts: Donate

Вы можете поддержать меня как разработчика и пожертвовать на развитие проекта.

- [Донателло в UAH](https://donatello.to/inwebpress)
- [Банка от Монобанка в UAH](https://send.monobank.ua/jar/A6cy9eBtcB)

[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/badges/StandWithUkraine.svg)](https://sitex.me/standwithukraine)