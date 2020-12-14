Для размещения сайта на Laravel на Timeweb
 https://timeweb.com/ru/help/display/DOC/Laravel
 
 1. ln -s ~/имя_директории/public ~/имя_директории/public_html
 2. Редактировать параметры БД ( cat .env )
 3. Проверить версию composer 
                    composer -v
                    where composer.phar
 4. Установить пакеты 
                    composer install
 5. Создать БД по заранее заполненным параметрам в .env командой
                    php artisan migrate
