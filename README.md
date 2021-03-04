## About 

Частный проект, код взят из репозитория Redbastie

Добавлен функционал выгрузки, и изменено поведение make:crud Команды

Author Redbastie/Crudify
Changes Merlby


## Установка
composer require merlby/crudify

В терминале ввести <br>

`php artisan crudify:install`

Команда установит зависимости и выполнит vendor:publish

## Использование

Для создание CRUD для модели необходимо выполнить

`php artisan make:crud Modelname`

Команда создаст дефолтное представление

Для миграций лучше использовать команду auto 

Может принимать --fresh и --seed

`php artisan migrate:auto`