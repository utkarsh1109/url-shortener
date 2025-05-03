# Laravel URL Shortener 🚀

A simple but extensible **URL shortening service** built with Laravel. Users can paste a long URL and receive a shortened version (e.g., `/abc123`) that redirects to the original link.

---

## ✨ Features

- 🔗 Shorten any valid URL
- 🎯 Redirect users from short link to original
- 📈 Track number of times each link was clicked
- 🛡️ URL validation
- 💾 MySQL database integration
- ✅ Built using Laravel MVC architecture

---

## 📷 Demo

Coming soon... *(or add a screenshot/gif of the app in use here)*

---

## 🧰 Tech Stack

- **Laravel** (PHP Framework)
- **Blade** (Templating)
- **MySQL** (via XAMPP)
- **Composer** (Dependency Manager)
- **Git + GitHub** (Version Control)

---

## ⚙️ Getting Started

### 1. Clone the Repository 

git clone https://github.com/yourusername/laravel-url-shortener.git
cd laravel-url-shortener

### 2. Install Dependencies

composer install

### 3. Set up Environment

cp .env.example .env
php artisan key:generate

Configuring .env file:

DB_DATABASE=url_shortener
DB_USERNAME=root
DB_PASSWORD=
Make sure your MySQL server is running in XAMPP and you've created a database named url_shortener.

### 4. Run Migrations

php artisan migrate


### 5. Serve the App

php artisan serve


## 📁 Project Structure
app/Models/ShortUrl.php – Eloquent model for storing URLs

app/Http/Controllers/ShortUrlController.php – Business logic for URL shortening and redirection

resources/views/shortener.blade.php – Main view with form and display

routes/web.php – Route definitions

```bash

