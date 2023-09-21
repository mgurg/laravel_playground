## How to run


```bash

cp .env.example .env

cd ./src/app
cp .env.example .env
php artisan key:generate
cd ..
```

```bash
docker compose up
```

Test endpoint:
```
GET http://localhost:8080/api/health
```

## Tests (local)

Set folder `src` as *Sources Root* in InteliJ (Right Mouse Click -> Mark Directory As)

### Local
```
cd ./src
./vendor/bin/phpunit
```

### Remote (Docker)
IDE Settings:

  - `Settings -> Languages & Frameworks -> PHP`

![CLI_Interepreter_from_docker.png](docs/img/CLI_Interepreter_from_docker.png)
![PHP_CLI_interpreter.png](docs/img/PHP_CLI_interpreter.png)


  - `Settings -> Languages & Frameworks -> PHP`

![PHPUnit_by_remote.png](docs/img/PHPUnit_by_remote.png)


![Tests_run_configuration.png](docs/img/Tests_run_configuration.png)