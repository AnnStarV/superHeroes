## Установка

* Перед тем как стянуть проект необходимо установить OpenServer (https://ospanel.io/)
* Стягиваем проект
* Устанавливаем composer

            composer install
            
* Потом переименовываем .env.example в .env и прописываем в нем настройки для базы данных(бд создавалась в PhpMyAdmin, экспортированная бд лежит в папке основного проекта. Называются heroes.sql и superheroes.sql)
*   
            
            php artisan key:generate
* 
            
            php artisan serve

                
