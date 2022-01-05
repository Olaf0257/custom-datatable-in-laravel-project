Initializing project


## Setup Guide For Run Project
Step 1: Install project dependencies using composer.
```
composer install
```

Step 2: Copy .env.example file to .env file.
```
cp .env.example .env
```

Step 3: Configure database credentials in .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bago
DB_USERNAME=root
DB_PASSWORD=
```

Step 4: Run artisan migration command to migrate table.
```
php artisan migrate
```

Step 4: Run artisan seed command to seed table.
```
php artisan db:seed
```

Step 6: Run artisan serve command to start app server.
```
php artisan serve
```

Step 7: Generate encryption key using below command
```
php artisan key:generate
```

Step 8: Open browser and navigate http://127.0.0.1:8000

Auth info:
    user:  test@test.com, secret123
   admin:  admin@admin.com, admin123