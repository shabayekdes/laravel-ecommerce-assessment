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
