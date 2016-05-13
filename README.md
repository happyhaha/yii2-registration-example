Yii 2 Пример регистрации и аутентификации из [видео](https://www.youtube.com/playlist?list=PLa9lO_Eq-vZV7GQtlFyMQcHPTssEOP7Nq)
============================


Структура проекта
-------------------

      controllers/site/login        экшн логина
      controllers/site/signup       экшн регистрации
      models/User                   модель таблицы User(и модель также называется) 
      views/site/login              страница логина
      views/site/signup             страница регистрации
      config/db                     настройки подключения к базе данных. 



Установка
------------

1) Скачать проект
~~~
git clone https://github.com/happyhaha/yii2-registration-example.git
~~~

2) Установить composer пакеты
~~~
composer install 
~~~
или 
~~~
php composer.phar install 
~~~


Конфигурации
-------------

### База данных

Изменить настройки к БД в файле `config/db.php` на ваши:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=site',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
];
```
