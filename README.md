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

### Project Flow

At first you'll be greeted by the login screen. Access the project by entering the credentials mentioned above. After that you'll be sent to the homepage, in which you can:

- Add Hotels and Users accessing the `Admin` tab on the navbar.


- Access the hotel page by clicking on its name on the homepage. You can also delete and edit the hotel in there.


- Add/edit/delete Rooms through the hotel page.


- Make/cancel reservations on the hotel page.

The reservation logs will be available in on `storage/logs/laravel.log`