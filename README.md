# Laravel Project Template

This is a template for creating new Laravel projects. It includes a standard project structure and initial setup to help you get started quickly. We include here Spatie Laravel Permission and livewire as based authentication system. This project can be used to build amazing and functional API's or a fantastic CRM with FilamentPhp and livewire.

## Table of Contents
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Testing](#testing)
- [Deployment](#deployment)
- [Contributing](#contributing)
- [License](#license)

## Requirements

Before you begin, ensure you have met the following requirements:
- PHP >= 8.3
- Composer
- Laravel >= 11.x
- MySQL or any other database supported by Laravel
- Node.js and NPM/Yarn (for frontend assets)

## Installation

To install this project, follow these steps:

1. Clone the repository:
    ```sh
    git clone https://github.com/iserlatam/base-laravel-app-template.git
    cd base-laravel-app-template
    ```

2. Install PHP dependencies:
    ```sh
    composer install
    ```

3. Install Node.js dependencies (optionally if you need to bundle JavaScripts assets):
    ```sh
    npm install
    # OR
    yarn install
    ```

## Configuration

1. Copy the `.env.example` file to `.env`:
    ```sh
    cp .env.example .env
    ```

2. Generate the application key:
    ```sh
    php artisan key:generate
    ```

3. Configure your database settings in the `.env` file:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

## Usage

To run the application, use the following commands:

1. Run database migrations:
    ```sh
    php artisan migrate
    ```

2. Seed the database (if applicable):
    ```sh
    php artisan db:seed
    ```

3. Start the local development server:
    ```sh
    php artisan serve
    ```

4. Compile frontend assets:
    ```sh
    npm run dev
    # OR
    yarn dev
    ```

## Important features

Here's an overview of the project structure:
1. This template is perfect if you need to programming a project that requires a role based authentication and
dynamic views with livewire.

## Deployment
To deploy this project, follow these steps:

Ensure all dependencies are installed:

```sh
composer install --optimize-autoloader --no-dev
npm install --production
# OR
yarn install --production
```
Run database migrations and seeders:

```sh
php artisan migrate --force
php artisan db:seed --force
```

Compile production assets:

```sh
npm run production
# OR
yarn production
```
Set the appropriate permissions for storage and cache:

```sh
chown -R www-data:www-data storage
chown -R www-data:www-data bootstrap/cache
```
Contributing
Contributions are welcome! Please open an issue or submit a pull request.

## License
This project is licensed under the MIT License.

```Code
Feel free to customize this template to fit the specific needs of your projects. Let me know if you need any further assistance!
