
```shell
curl -s "https://laravel.build/nmt-software?with=mariadb,redis,mailhog,minio" | bash

sail composer require laravel/breeze spatie/laravel-permission
sail artisan breeze:install
sail artisan vendor:publish --tag=sanctum-config --tag=sanctum-migrations
sail artisan vendor:publish --tag=laravel-errors --tag=laravel-notifications 
sail artisan vendor:publish --tag=laravel-pagination --tag=laravel-mail 
sail artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
sail artisan migrate:fresh --step
sail npm install && sail npm install && sail npm run watch

sail artisan make:model Software -r -a
sail artisan make:model FileType -r -a

```

Create the table migrations

run new migrations
```shell
sail artisan migrate --step
```

create seeders

run seeders
```shell
sail artisan migrate:seed 
```
