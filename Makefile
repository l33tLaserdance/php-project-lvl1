install:
	composer install

setup: install
	composer run-script --working-dir=vendor/felixbecker/language-server parse-stubs

console:
	psysh -config psysh.php

lint:
	composer run-script phpcs -- --standard=PSR12 src tests

lint-fix:
	composer run-script phpcbf -- --standard=PSR12 src bin

test:
	composer run-script phpunit tests