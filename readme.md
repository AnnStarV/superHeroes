# Установка

Перед тем как стянуть проект необходимо:
* установить OpenServer (https://ospanel.io/)
* установить Laravel 5.7-7.x через OpenServer
    * в OpenServer/domains/ создать папку с проектом
    * в OpenServer зайти в терминал и выполнить ряд команд:
    * Узнаем установлен ли composer
    
            ```bash
            composer
            ```
            
         ![Alt-текст](https://bogdanowsky.ru/wp-content/uploads/2019/12/7.png "Орк")    
         
      * Если появилась такая картина, то composer в составе OpenServer работает.
        Я устанавливаю Laravel в папку c:\OSPanel\domains\app. Для этого я вхожу в нее перед установкой через командную строку.
        
                ```bash
                cd domains/app
                ```
                
      * Затем устанавливаем пакет Laravel, введя команду:
      
                ```bash
                composer create-project —prefer-dist laravel/laravel
                ```
                
      * По умолчанию корни Laravel находятся в папке public. Чтобы обеспечить это, нужно в корень проекта кинуть файл .htaccess с таким кодом:
      
                ```bash
                <IfModule mod_rewrite.c>
                  RewriteEngine On
                  RewriteRule ^(.*)$ public/$1 [L]
                </IfModule>
                ```
                
      * Запускаю проект через браузер, и вижу варнинги
      
     ![Alt-текст](https://bogdanowsky.ru/wp-content/uploads/2019/12/4.png "Орк")  
      
      Они означают, что Composer в проекте не установлен и папки vendor не существует, нужно его быстренько воткнуть.
                ```bash
                composer dump-autoload
                ```
## Installation

Use the package manager [pip](https://pip.pypa.io/en/stable/) to install foobar.

```bash
pip install foobar
```

## Usage

```python
import foobar

foobar.pluralize('word') # returns 'words'
foobar.pluralize('goose') # returns 'geese'
foobar.singularize('phenomena') # returns 'phenomenon'
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
