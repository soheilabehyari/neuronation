## Coding Challenge  

Please clone the repo and follow instruction for project setup.

### Setup

- run docker 
```
docker-compose up -d
```

- install project dependencies
```
docker run --rm --interactive --tty --volume $PWD/project:/app --volume $COMPOSER_HOME:/tmp composer install
```

- check service online at:
```
http://localhost:8182/
```

- run migrations
```
docker-compose exec php ./artisan migrate
```

- seed database
```
docker-compose exec php ./artisan db:seed
```

- api routes
```
http://localhost:8182/api/v1/user/history/1
http://localhost:8182/api/v1/user/recent-trained/1
```



## Tests
```
docker-compose exec php vendor/bin/phpunit
```

## Framework
Lumen (7.0.2) (Laravel Components ^7.0)


## Author
Soheila Behyari, soheila.behyari@gmail.com