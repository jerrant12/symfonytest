
okay, 

installing sympfony...

$ sudo curl -LsS http://symfony.com/installer -o /usr/local/bin/symfony
$ sudo chmod a+x /usr/local/bin/symfony

making a new project: 

$ symfony new my_project_name

running a project....

php bin/console server:run


installing composer....

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

mv composer.phar /usr/local/bin/composer

using Eloquent.....

http://www.edzynda.com/use-laravels-eloquent-orm-outside-of-laravel/
EXCEPT:
composer update 
and database.php needed to be included
and the require line was commented out.
Question? Where can I put this file so it can be referenced anywhere? 
