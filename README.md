<h3>Sebelum menginstall pastikan di komputer anda sudah ada </h3>

- PHP Versi 8.2 ke atas
- Node JS versi terbaru
- Composer


<h3>Langkah langkah install</h3>

- Ubah file .env.example menjadi .env
- Jalankan perintah berikut

```
php artisan key:generate
php artisan migrate
composer install
npm install
npm run dev
php artisan serve
```
- Akses website di
<a href="[https://readme.com/](http://127.0.0.1:8000/)" target="_blank">http://127.0.0.1:8000/</a>
