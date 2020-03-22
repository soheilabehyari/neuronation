## Run the project
### Setup
- `docker-compose up -d`
- `docker run --rm --interactive --tty --volume $PWD/project:/app --volume $COMPOSER_HOME:/tmp composer install`
