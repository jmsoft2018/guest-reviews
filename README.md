# guest-reviews
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

Пакет для использования отзывов гостей в Laravel-5. На странице выводится список отзывов и форма добавления нового сообщения. Каждый отзыв состоит из: имя автора, сообщение, дата отзыва. Человек заполняет форму (своё имя и сообщение), информация сохраняется в БД, и выводится в общем списке. Также, кроме добавления, можно удалить отзыв.

#### Установка

Через composer
``` bash
$ composer require jmsoft/guest-reviews
```
####Настройка

Публикация нужные файлы
``` bash
$ php artisan vendor:publish --provider="GuestReviews\GuestReviewsServiceProvider"
```

Создания таблицы в БД
``` bash
$ php artisan migrate
```

####Использование
Заходите по путам `path_to_your_site/guest-reviews`.
Пример: `http://exsample.com/guest-reviews`
