## Установка

Перед тем как стянуть проект необходимо:
* установить OpenServer (https://ospanel.io/)
* установить Laravel 5.7-7.x через OpenServer
    * в OpenServer/domains/ создать папку с проектом
    * в OpenServer зайти в терминал и выполнить ряд команд:
    * Узнаем установлен ли composer
    
            
            composer
            
            
         ![Alt-текст](https://bogdanowsky.ru/wp-content/uploads/2019/12/7.png "Орк")    
         
      * Если появилась такая картина, то composer в составе OpenServer работает.
        Я устанавливаю Laravel в папку c:\OSPanel\domains\app. Для этого я вхожу в нее перед установкой через командную строку.
        
               
                cd domains/app
                
                
      * Затем устанавливаем пакет Laravel, введя команду:
      
                
                composer create-project —prefer-dist laravel/laravel
                
                
      * По умолчанию корни Laravel находятся в папке public. Чтобы обеспечить это, нужно в корень проекта кинуть файл .htaccess с таким кодом:
      
                
                <IfModule mod_rewrite.c>
                  RewriteEngine On
                  RewriteRule ^(.*)$ public/$1 [L]
                </IfModule>
               
                
      * Запускаю проект через браузер, и вижу варнинги
      
     ![Alt-текст](https://bogdanowsky.ru/wp-content/uploads/2019/12/4.png "Орк")  
      
     Они означают, что Composer в проекте не установлен и папки vendor не существует, нужно его быстренько воткнуть.
                
                composer dump-autoload
                
