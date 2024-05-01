# Laravel Markdown
 Example project to showcase Markdown rendering using Laravel and the Spatie-Markdown package

#### Installation

Clone this repo and then run

```
composer install
```
```
npm install
```
If you are on Windows, install the following dependency
```
npm install @rollup/rollup-win32-x64-msvc
```
Compile your local assets
```
npm run build
```
Create a .env file
```
cp .env.example .env
```
Generate a new application key
```
php artisan key:generate
```
Create a new SQLite database file. It's not used, but Laravel won't run without it
```
php artisan migrage
```
if you are using Herd, you can acess the app at http://laravel-markdown.test (assuming you didn't choose a different folder name for the repo)

Otherwise, start a dev server
```
php artisan serve
```
You can access the app at http://localhost:8000

