# WebTech-2

Getting started
When first starting with your Laravel project there are a few steps that you have to do before you can start development.

    Run composer install

    Run npm install

    Run cp .env.example .env

    Run php artisan dusk:chrome-driver

    Run php artisan key:generate


These next steps are only relevant if you have Docker installed (RECOMMENDED!)

    In the .env uncomment line 24-28 and change DB_CONNECTION from sqlite to mysql

    Set a password in the DB_PASSWORD field
    Run docker-compose up -d

    Run php artisan migrate

If you are not using Docker we recommend either hooking yout IDE up to the SQLite database (`database/database.sqlite`) or getting a separate tool for it 

All done! You are now ready to start the assignment
Bonus
If you are using PHPStorm we highly recommend also installing the Laravel Idea plugin which adds advanced Laravel specific intellisense along with other tools/assists for Laravel development

Development
When developing you just simply run php artisan serve which will start your Laravel app.
If you are using docker you also need to run docker-compose up -d, we have provided you with an PHPMyAdmin instance for easy database management. It can be accessed on http://127.0.0.1:8036/

Testing
If you want to run the tests locally you can run php artisan dusk.
This will excecute the automated browser tests which are also run when comitting to GitLab.
Note: you have to have the server running (e.g. php artisan serve) for Dusk test to function