# RedLab-Laravel-test

### Requirements

- PHP >= 7.3.0
- Extensions: mbstring, curl, pdo, xml, zip
- Composer
- Node.js & npm
- mySQL

### Setup

For Docker setup edit `docker-compose.yml`

*FROM*

```
    db:
        volumes:
            - "/home/${USER}/projects/DB/mysql:/var/lib/mysql"
```

*ON*

```
    db:
        volumes:
            - "/your/path/to/DBdir:/var/lib/mysql"
```

```sh
$ make compose-setup
```

### Run

```sh
$ make compose # http://localhost:8000
```

### Migrate

```sh
$ make compose-migrate
    or
$ make compose-refresh
```

### Down

```sh
$ make compose-down
```
