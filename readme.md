# Mailbox Api

## instlation 

composer install --no-dev

copy .env.testing to .env 

change APP_ENV=local to anything  else or remove --no-dev when installing composer

change the DB_DATABASE to the real fullyqulfied path of the database 

so it will be something like 

/var/www/html/mailbox/database/mailbox.db


## runing test 


### phpspec

vendor/bin/phpspec run


### codeception

vendor/bin/codecept run api 


## seed databse 

from command line 

php artisan mailbox:seed