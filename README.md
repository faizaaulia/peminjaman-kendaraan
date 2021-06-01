<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Project Setup
1. Clone this repository `https://github.com/faizaaulia/peminjaman-kendaraan.git` or download the zipped source code
2. Move (`cd`) into the project directory <br>
3. Install composer dependencies <br>
`composer install`
4. Set the .env file <br>
`cp .env.example .env`
5. Generate an app encryption key <br>
`php artisan key:generate`
6. Create an empty database for our application
7. Add database information in **.env** file <br>
Fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` options to match the credentials of the database you just created
8. Migrate the database <br>
`php artisan migrate`
9. Database seeding <br>
This will seed the database with dummy (admin user) data for login <br>
`php artisan db:seed`

#### Panduan Penggunaan Aplikasi
[Readme.pdf](https://github.com/faizaaulia/peminjaman-kendaraan/files/6574335/readme.pdf)