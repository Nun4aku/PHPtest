1. Установить PHP
2. Установить композер Windows https://getcomposer.org/download/
3. Выполнить команды: 
	php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
	php -r "if (hash_file('sha384', 'composer-setup.php') === 	'906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
	php composer-setup.php
	php -r "unlink('composer-setup.php');"
4. Установить Ларавел командой php composer.phar global require "laravel/installer
5. Запустить php artisan serve, Если ошибка про Вендер, то composer update --no-scripts, потом php artisan serve
6. npm run dev