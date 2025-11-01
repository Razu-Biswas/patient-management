9️⃣ README.md
# Patient Management Portal

### Installation
1. Clone project


git clone <repo-url>
cd patient-management
composer install
cp .env.example .env
php artisan key:generate

2. Set DB in `.env`


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_database
DB_USERNAME=root
DB_PASSWORD=

1. Run migrations


php artisan migrate

4. Serve project


php artisan serve


Visit `http://127.0.0.1:8000/register` to register, login and manage patients.
