install:
	composer install
	composer require wp-cli/php-cli-tools

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

lint-fix:
	composer run-script phpcbf -- --standard=PSR12 src bin

test:
	composer run-script phpunit tests
