# Project STACK

## Spatie Laravel Permission

The `spatie/laravel-permission` package is used to manage roles and permissions in this project.

### Installation

To install this package, run:
```sh
composer require spatie/laravel-permission
```

### Configuration
1. Publish the configuration file:

```sh
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

2. Run the migrations:

```sh
php artisan migrate
```

3. Add the Spatie\Permission\Traits\HasRoles trait to your User model:

```PHP
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    // ...
}
```
## Packages Used
