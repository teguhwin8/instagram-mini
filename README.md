# Instagram Mini

### Demo
Link Demo => Menyusul ya

Proyek ini adalah praktek/latihan pribadi saya untuk mengimplementasikan `Laravel 8` menjadi sebuah web aplikasi `Instagram Mini` yang mempunyai fitur-fitur dasar mirip dengan `Instagram`

### Stack Yang Digunakan
- Laravel 8
- MySQL
- Laravel UI (Bootstrap with Auth)

### Fitur
- Autentikasi dengan verifikasi email
- Posting Feed
- Update Feed
- Hapus Feed
- Sistem Hashtag
- Update Profil
- Follow dan Unfollow
- Sistem pencarian dengan keyword dan hashtag
- Like
- Komentar

### Cara instal
- Clone project ini di server/local kalian masing-masing, lalu lakukan installasi composer package dengan syntax `composer install` di terminal.
- Salin contoh file *.env* : `cp .env.example .env`
- Edit database dan email di `.env` sesuai kebutuhan
- Buat key: `php artisan key:generate`
- Buat link storage : `php artisan storage:link`
- Lakukan installasi package npm (UI): `npm install && npm run dev`
- Jalankan server di local : `php artisan serve`
