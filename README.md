# Описание проекта

В проекте реализовано создание блога на PHP в связке с JS, HTML и CSS. Хранение данных осуществляется в
подключенной базе данных MySQL. Проект представляет собой блог с системой регистрации, авторизации, добавления статей и
комментариев, а также админ панелью. Основная задача проекта - отработка навыков проектирования современного PHP
приложения с использованием ООП.

## В процессе создания проекта работал:

+ Маршрутизация;
+ Пагинация;
+ Валидация;
+ Регистрация и авторизация;
+ Шаблонизация;
+ Файлы ресурсов (изображения);
+ Логирование;
+ Использование паттернов проектирования;
+ Миграции;
+ MVC-архитектура;
+ API;
+ AJAX-запросы;
+ GIT;

## Инсталяция проетка

### Получение

Склонируйте проект в вашу директорию с сервером:
```https://github.com/Leksizz/Historium-PHP-MVC-Blog.git```

### Запуск

Для запуска с использованием OpenServer, вам необходимо поместить проект в папку, доступную из веб-сервера и настроить
хост так, чтобы корневой папкой была public.

### Установка пакетов

Открыв из папки проекта консоль, выполните команду для установки необходимых пакетов:
```composer update```

### Конфигурация

За конфиурацию приложения отвечают файлы, находящиеся в папке ```config```.

+ ```app.php``` - конфигурация приложения
+ ```database.php``` - конфигурация базы данных
+ ```auth.php``` - конфигурация аутентификации пользователя
+ ```routes.php``` - маршруты приложения

### База данных

Создайте базу данных на сервере и заполните поля вашего окружения в файле ```phinx.php``` по примеру:

```
'adapter' => 'mysql',
'host' => 'localhost',
'name' => 'blog',
'user' => 'root',
'pass' => '',
'port' => '3306',
'charset' => 'utf8',
```

В открытой консоли директории проекта введите команду для генерации таблиц базы данных:
```php vendor/robmorgan/phinx/bin/phinx migrate```

### Файловая система

В папке ```storage``` создайте папку ```user``` и папку ```post``` для хранения изображений пользователей и статей
соответственно. Для доступа к файлам, находящимся в папке ```storage```, необходимо создать символическую ссылку на
папку ```public/storage```.

#### Windows

Выполните команду из папки public:
```mklink /D storage ..\storage```

## Обзор проекта

<details>
  <summary>Обзор текущего наполнения</summary>

- Основная страница ![Основная страница](/storage/readmes/main.gif)
- Регистрация и авторизация ![Регистрация и авторизация](/storage/readmes/auth.gif)
- Добавление статей ![Добавление статей](/storage/readmes/addPost.gif)
- Система комментариев ![Система комментариев](/storage/readmes/comments.gif)
- Пагинация ![Пагинация](/storage/readmes/pagination.gif)
- Админ-панель ![Админ-панель](/storage/readmes/admin.gif)

</details>