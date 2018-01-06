
# Maths4U - Student Management System

## Used technologies
* Voyager for backend
* Laravel 5.5
* php 7.2
* Bootstrap 3 and 4
* Lava Charts

## Supportive documentations

Website & Documentation: https://laravelvoyager.com

Video Tutorial Here: https://laravelvoyager.com/academy/

Join our Slack chat: https://voyager-slack-invitation.herokuapp.com/

View the Voyager Cheat Sheet: https://voyager-cheatsheet.ulties.com/

Lava Charts: https://lavacharts.com/

<hr>

Laravel Admin & BREAD System (Browse, Read, Edit, Add, & Delete), supporting Laravel 5.4 and newer!

## Installation Steps

### 1. Add the DB Credentials & APP_URL

Next make sure to create a new database and add your database credentials to your .env file:

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

You will also want to update your website URL inside of the `APP_URL` variable inside the .env file:

```
APP_URL=http://localhost:8000
```

> Only if you are on Laravel 5.4 will you need to [Add the Service Provider.](https://voyager.readme.io/docs/adding-the-service-provider)

### 2. Install dependencies using composer

This can easily be done by running this command:

```bash
composer install
```

### 3. Run The Installer

Lastly, we can install Maths4U. 
The dummy data will include 4 accounts (if no users already exists) and 7 settings.

To install **Maths4U**


```bash
php artisan voyager:install
```


> Troubleshooting: **Specified key was too long error**. If you see this error message you have an outdated version of MySQL, use the following solution: https://laravel-news.com/laravel-5-4-key-too-long-error

And we're all good to go!

Start up a local development server with `php artisan serve` 

* Admin page - visit [http://localhost:8000/admin](http://localhost:8000/admin).
* Student page - visit [http://localhost:8000](http://localhost:8000).


## Users

Four type of users should have been created for you with the following login credentials:

>**email:** `admin@admin.com`   
>**password:** `######`


>**email:** `student@student.com`   
>**reg no:** `student`   
>**password:** `#####`

>**email:** `teacher@teacher.com`   
>**password:** `#####`

>**email:** `marker@marker.com`   
>**password:** `######`


NOTE: Please note that dummy users are **only** created if there are no current users in your database.

If you may wish to assign admin privileges to an existing user.

This can easily be done by running this command:

```bash
php artisan voyager:admin your@email.com
```


If You wish to create a new admin user you can pass the `--create` flag, like so:


```bash
php artisan voyager:admin your@email.com --create
```

And you will be prompted for the user's name and password.
