# QUICKTICK

QuickTick adalah platform pemesanan travel yang dirancang untuk memudahkan Anda dalam merencanakan perjalanan Anda. Dengan aplikasi ini, Anda dapat dengan cepat dan mudah memesan tiket perjalanan dimanapun Anda berada.

## Fitur

-   Pemesanan Tiket Mudah: Pesan tiket perjalanan dengan beberapa kali klik.
-   Penjadwalan Perjalanan: Buat jadwal perjalanan yang sesuai dengan kebutuhan Anda.

## Jalankan Secara Lokal

-   Pastikan sudah terinstall php 8.2+ untuk menjalankan laravel 10

**Clone**

```shell
git clone https://github.com/khmalz/QuickTick-App.git
```

**Go to Directory**

```shell
cd QuickTick-App
```

**Install Dependencies**

```shell
composer install
```

```shell
npm install
```

**Config Environment**

```shell
cp .env.example .env
```

**Generate Key**

```shell
php artisan key:generate
```

**Setting Database Config in Env**

```
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

**Migrate Database**

```shell
php artisan migrate --seed
```

**Link Storage**

```shell
php artisan storage:link
```

**Run Local Server**

```shell
php artisan serve
```

## Environment Variables

Untuk memastikan gambar yang terupload akan muncul, Anda perlu mengkonfigurasi pada file .env. Sesuaikan dengan url dan host yang dijalankan di browser anda saat menjalankan project ini.

contoh: `APP_URL=http://127.0.0.1:8000`

```
APP_URL
```

## Developer

-   [@khmalz](https://github.com/khmalz)
