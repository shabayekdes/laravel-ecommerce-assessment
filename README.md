# laravel-ecommerce-assessment


### Clone Repo

- Clone the repository from 

```bash
git clone https://github.com/shabayekdes/laravel-ecommerce-assessment.git
```

### Installation

- Go to folder of project and install composer

```bash
cd laravel-ecommerce-assessment
composer install
cp .env.example .env
```

- Set database connection in .env file

```
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

- Run migrations command and seed database with fake data

```bash
php artisan migrate --seed
```

- Run storage link artisan to see upload images

```bash
php artisan storage:link
```

- Run server with 

```bash
php artisan serve
```

- open your browser and click on http://127.0.0.1:8000/

- open login page 

```
email: test@example.com
password: 12345678
```

### Installation via Docker

> make sure you install docker on local machine first 

- run with laravel sail

```bash
./vendor/bin/sail up -d
./vendor/bin/sail composer install
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail artisan storage:link
```

- open your browser and click on http://127.0.0.1:8000/

