<h1 align="center">You-Plan Aplication</h1>

## Tech

-   Laravel 10
-   Socialite Plugin
-   Livewire
-   Alpine JS
-   Bootstrap
-   Iconify

## Fitur

-   Login & Register
-   Login with GitHub / Google
-   Reset Password (dikirim ke email)
-   Todo List
-   Note (bisa dikunci)
-   Enkripsi Laravel menggunakan OpenSSL untuk menyediakan enkripsi AES-256 dan AES-128

## Cara Penggunaan

-   Clone Repository

```bash
git clone https://github.com/rasyarui/YouPlan-app.git
cd YouPlan-app/
```

-   Copy .env and Modify It

```bash
cp .env.example .env
```

-   Install Vendor Using Composer

```bash
composer install
```

-   Generate Key

```bash
php artisan key:generate
```

-   Run Migration & Seeders

```bash
php artisan migrate --seed
```

-   Install Node Modules Using PNPM or NPM

```bash
# using pnpm
pnpm install && pnpm build

# using npm
npm install && npm run build
```

-   Serve

```bash
php artisan serve
```

## Contoh Enkripsi


<img width="1437" alt="Tangkapan Layar 2024-08-10 pukul 03 39 39" src="https://github.com/user-attachments/assets/24c78312-4f81-403b-84ee-8d6ca9519e29">


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

<p align="center">Created with 💚 by <a href="https://rasya-design.vercel.app/" target="_blank">RASYA</a></p>
