## Setup

Install composer dependencies with `composer install`

### Migrate the Database
`php artisan migrate`

### Seeding the Database
`php artisan db:seed` **(Seeding is necessary)**

This will give you a default user with manager-level access with the following credentials:

email: `example@email.com`

password: `example123`

### How to Run

Run the project locally with `php artisan serve`

You should be able to access through port 8000 (`localhost:8000`)