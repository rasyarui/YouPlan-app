<h1 align="center">Plan Aplication</h1>

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
-   Todo List
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


<img width="1178" alt="contoh enkripsi" src="https://github.com/user-attachments/assets/152eae05-82b3-4a38-835a-903d6c58f49d">

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

<p align="center">Created with 💚 by <a href="https://rasya-design.vercel.app/" target="_blank">RASYA</a></p>
