## Run the project

### Setup
- `docker-compose up -d`
- `docker run --rm --interactive --tty --volume $PWD/project:/app --volume $COMPOSER_HOME:/tmp composer install`
- `docker-compose exec php ./artisan migrate`
- `docker-compose exec php ./artisan db:seed`


## Tests

- `docker-compose exec php vendor/bin/phpunit`