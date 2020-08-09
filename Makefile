build:
	docker-compose build --no-cache

test:
	docker run -it php-library vendor/bin/phpunit

analytics:
	docker run -it php-library vendor/bin/phpstan analyse src
	docker run -it php-library vendor/bin/phpstan analyse tests

coding-standards:
	docker run -it php-library vendor/bin/php-cs-fixer fix src

deployment:
	@echo "Deploying..."
	@echo "Done..."
		


