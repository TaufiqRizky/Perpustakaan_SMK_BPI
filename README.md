## GETTING START

1. You must need SSH key for information : https://help.github.com/articles/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent/
2. Open GIT Bash and target to your htdocs
3. type this CommandLine :

```php
    git clone gogs@git.smooets.com:annur/cv.git
```
4. Install PostgreSQL and create database named "cv.db"

## How to Setup

1. You need to create file named ".env" file to setup database :

Type or copy this part and paste into your .env file :
```php
        APP_NAME=Laravel
        APP_ENV=local
        APP_KEY=base64:8u6f/8cQWIzcTL4ndpskhFHqb05oiu59bADR3s5gK6g=
        APP_DEBUG=true
        APP_LOG_LEVEL=debug
        APP_URL=http://localhost

        DB_CONNECTION=pgsql
        DB_HOST=localhost
        DB_PORT=5432
        DB_DATABASE=cv.db
        DB_USERNAME=postgres \\ your username on postgreSQL
        DB_PASSWORD=root \\ your password username on postgreSQL

        BROADCAST_DRIVER=log
        CACHE_DRIVER=file
        SESSION_DRIVER=file
        QUEUE_DRIVER=sync

        REDIS_HOST=127.0.0.1
        REDIS_PASSWORD=null
        REDIS_PORT=6379

        MAIL_DRIVER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=null
        MAIL_PASSWORD=null
        MAIL_ENCRYPTION=null

        PUSHER_APP_ID=
        PUSHER_APP_KEY=
        PUSHER_APP_SECRET=


```
  -NOTE : Dont Forget to edit your password postgreSQL

2. if you still cant connect into database, then you need to edit this file too :

File Directory : ../config/database.php

then edit this part just like this :

```php
    'default' => env('DB_CONNECTION', 'pgsql'),
```
```php
    'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
```
3. Open yout terminal and target to the project folder in htdocs
then type :

```php 
   composer Install
```

after Finished then type :

```php
  composer dump-autoload
```

4. Open your CommandLine/Terminal (CMD) then :
	   - Go to your folder project in WebServer Folder
     - then  type "php artisan migrate"
	   - then  type "php artisan db:seed"
	   - then 	type "php artisan serve" (dont close the terminal)
    NOTE = Recommended open CommandLine/Terminal more than one

5. Then, you need to open your browser and type
	- http://localhost:8000/login

6. Default Login 
```php
            email:  admin@smooets.com   , password : admin  <---- Admin
            email:  user@smooets.com    , password : user   <---- User
```    
    -NOTE : You can create new user or admin with Admin account

7. Then Try this Apps

8. To Logout, Click the Picture at the Top-Right your Screen then Click Logout.

Note : if you getting error when Migrating, check your database Setup again.

## Developer

Name            | Position
--------------- | -------------
Yusuf Handian   | Project Manager
An'nur Rifki    | Developer
Helma Ananda    | Developer

## For update

if you want to Alter table/Columns using Migration, Please follow instruction below :
1. You need install Composer Already.

2. open Terminal/Prompt and run this :

```php

    composer require doctrine/dbal

```

3.  then you can make alter table/columns
