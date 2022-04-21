### Click Me! (Backend)

This project was created with [Laravel 6](https://laravel.com/docs/6.x), a [Docker](https://docs.docker.com/get-started/) image
with `php:7.2-apache` and [PostgreSQL](https://www.postgresql.org/docs/current/index.html) latest image for DataBase.
Backend is ready for run Github Actions at push changes

### Project Requirements

This application presents a single button with label 'Click Me!', a counter and a table with click history.
These are centered in screen. When the user clicks the button, the counter increments as many times as clicked,
after a certain time in wich the user did not make any more clicks, the counter value it is sends to store and
the button blocks until the backend send a response, then the table updates.
The counter will increment until midnight today. Past midnight, if the user clicks the button, the counter will
be 0 again and increment from there on.

## How to run Click Me! project

**Note: You need get [Docker](https://docs.docker.com/get-started/) previously installed**

1. Once you get Docker installed and Click Me! project in local you have build Docker image by running `docker build .`
2. Now you can run `docker-compose build` to pull PostgreSQL image
3. Run `docker-compose run --rm app sh -c "composer install"` command to install packages
4. Optional: You can run tests by running `docker-compose run --rm app sh -c "./vendor/bin/phpunit"`
5. Run Migrations `docker-compose run --rm app sh -c "php artisan migrate"`
6. Run `docker-compose up` command to raise project


### You can see the Docker repo here: https://hub.docker.com/r/josemarialanza/click-me_backend_app
**Note: Instructions are in project repository Readme.**
