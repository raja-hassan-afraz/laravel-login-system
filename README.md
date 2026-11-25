# Laravel Login System

A small user authentication app built with Laravel 9 and MySQL.

## Features

- Register with name, username and password
- Log in and log out
- Change password
- Passwords stored as hashes, with CSRF protection from Laravel

## Requirements

- PHP 8.0 or later
- Composer
- MySQL

## Setup

1. Install dependencies:
   ```bash
   composer install
   ```
2. Create a MySQL database named `laravel_login`.
3. Copy the environment file and set your database details:
   ```bash
   cp .env.example .env
   ```
4. Generate the app key:
   ```bash
   php artisan key:generate
   ```
5. Create the tables:
   ```bash
   php artisan migrate
   ```
   Or import `database/schema.sql`, which has the user table only and no data.
6. Start the app:
   ```bash
   php artisan serve
   ```

## Routes

| URL | Purpose |
| --- | --- |
| `/` | Home |
| `/news` | News page |
| `/register` | Create an account |
| `/login` | Log in |
| `/password` | Change password |
| `/logout` | Log out |

## Project layout

| Folder | Contents |
| --- | --- |
| `app/Http/Controllers/UserController.php` | Register, login, password and logout logic |
| `resources/views` | Blade templates |
| `routes/web.php` | Web routes |
| `database/migrations` | User table migration |
| `docs/crud-examples` | Separate CRUD practice snippets, not used by the app |

## Credits

The original README of this project pointed to [herdikayan/laravel-login](https://github.com/herdikayan/laravel-login) as its source repository. Check that repository's terms before making this one public or reusing the code.
