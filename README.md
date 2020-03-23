## Neuronation Coding Challenge  


### Setup

- run docker 
```
docker-compose up -d
```

- install project dependencies
```
docker run --rm --interactive --tty --volume $PWD/project:/app --volume $COMPOSER_HOME:/tmp composer install
```

- run migrations
```
docker-compose exec php ./artisan migrate
```

- seed database
```
docker-compose exec php ./artisan db:seed
```


## Tests
```
docker-compose exec php vendor/bin/phpunit
```

## Framework
Lumen (7.0.2) (Laravel Components ^7.0)


## Author
Soheila Behyari, soheila.behyari@gmail.com