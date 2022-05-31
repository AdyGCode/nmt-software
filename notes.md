## Create new project

This project development environment uses MariaDB, Redis, Minio and
Mailhog only.

```shell
curl -s "https://laravel.build/nmt-software?with=mariadb,redis,mailhog,minio" | bash
```

## Add Required packages

```shell
sail composer require laravel/breeze spatie/laravel-permission
sail composer require pion/laravel-chunk-upload
sail composer require spatie/laravel-permission
sail composer require spatie/laravel-tags

sail composer require enyo/dropzone
```

## Install Breeze files

```shell
sail artisan breeze:install
```

## Publish the required vendor files

```shell
sail artisan vendor:publish --tag=sanctum-config --tag=sanctum-migrations
sail artisan vendor:publish --tag=laravel-errors --tag=laravel-notifications 
sail artisan vendor:publish --tag=laravel-pagination --tag=laravel-mail 
sail artisan vendor:publish --tag=tags-migrations --tag=tags-config

sail artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
sail artisan vendor:publish --provider="Spatie\Tags\TagsServiceProvider"
sail artisan vendor:publish --provider="Pion\Laravel\ChunkUpload\Providers\ChunkUploadServiceProvider"

```

## Migrate and Seed (From scratch)

```shell
sail artisan migrate:fresh --step --seed
sail npm install && sail npm install && sail npm run watch
```

## Install NPM requirements for Tailwind

```shell
sail artisan migrate:fresh --step
sail npm install && sail npm install && sail npm run watch
```

## Link storage to public for files

```shell
 php artisan storage:link
 ```

## Create Models

Also create the stubs for the migrations, factories, controllers and
more.

```shell
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

## File Upload Controller

```shell
sail artisan make:controller UploaderController
```

# Links

- [Ady Gould's Diigo Account - very useful link source](https://www.diigo.com/user/ady_gould)
- [Laravel Chunked Upload - uploading HUGE files](https://webdock.io/en/docs/how-guides/laravel-guides/laravel-chunked-upload-uploading-huge-files)
- [...]()
- [...]()
- [...]()

