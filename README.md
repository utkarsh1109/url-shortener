# Laravel URL Shortener 🚀

A simple URL shortener built with Laravel. Users can submit a long URL and receive a shortened version that redirects to the original site. Great for practicing Laravel MVC, database usage, and routing.

---

## ⚙️ Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/laravel-url-shortener.git
cd laravel-url-shortener
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Set up Environment

```bash
cp .env.example .env
php artisan key:generate
```

Configure your `.env` file:

```env
DB_DATABASE=url_shortener
DB_USERNAME=root
DB_PASSWORD=
```

> Make sure your MySQL server is running in XAMPP and you've created a database named `url_shortener`.

### 4. Run Migrations

```bash
php artisan migrate
```

### 5. Serve the App

```bash
php artisan serve
```

Then visit: `http://127.0.0.1:8000`

---

## 📁 Project Structure

- `app/Models/ShortUrl.php` – Eloquent model for storing URLs  
- `app/Http/Controllers/ShortUrlController.php` – Business logic for URL shortening and redirection  
- `resources/views/shortener.blade.php` – Main view with form and display  
- `routes/web.php` – Route definitions  

---

## 🧰 Built With

- Laravel (PHP Framework)
- Blade (Templating Engine)
- MySQL (XAMPP)
- Composer
- Git & GitHub

---

## 📌 Future Enhancements

- User authentication (track user-specific URLs)
- Custom aliases (e.g., `/my-portfolio`)
- QR code generation for each short link
- Expiration dates for links
- Analytics dashboard (total clicks, referrers, etc.)
- RESTful API for shortening via external apps

---

