start:
	php artisan serve --host 0.0.0.0

setup:
	npm install
	composer install
	cp -n .env.example .env || true
	php artisan key:gen --ansi
	make db-prepare

db-prepare:
	php artisan migrate --seed

db-refresh:
	php artisan migrate:refresh --seed

log:
	tail -f storage/logs/laravel.log

test:
	php artisan test

lint:
	composer phpcs

lint-fix:
	composer phpcbf

deploy:
	git push heroku

compose:
	docker-compose up

compose-test:
	docker-compose run web make test

compose-bash:
	docker-compose run web bash

compose-setup: compose-build
	docker-compose run web make setup

compose-build:
	docker-compose build

compose-db:
	docker-compose exec db psql -U postgres

compose-down:
	docker-compose down -v