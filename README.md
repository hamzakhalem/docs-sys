# Docs System (Laravel)

The start of a document-sharing app built with Laravel. Users sign up and log in, and posts can carry a title, description and an attached file.

## Features

- Sign up, log in, password reset and email verification with `laravel/ui` (Bootstrap)
- Home page for signed-in users
- **Posts:** model, migration and resource controller for posts with a title, description, attached file and likes, linked to the user who created them

## Built with

- PHP 8.1, Laravel 10
- laravel/ui (Bootstrap auth scaffolding)
- Vite
- MySQL (or any database Laravel supports)

## Run it locally

You need PHP 8.1+, Composer, Node.js and a database.

```bash
git clone https://github.com/hamzakhalem/docs-sys.git
cd docs-sys
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
```

Set `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` in `.env`, then:

```bash
php artisan migrate
php artisan serve
```

Open http://127.0.0.1:8000/register to create an account.

## Project structure

```
app/Http/Controllers/PostController.php   Posts resource controller
app/Models/Post.php                       Post model
database/migrations/                      Users, posts and auth tables
resources/views/auth/                     Login, register, password and verify pages
```
