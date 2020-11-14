start:
	php artisan serve --host 0.0.0.0

deploy:
	git push heroku master

db-prepare:
	php artisan migrate --seed

db-refresh:
	php artisan migrate:refresh --seed