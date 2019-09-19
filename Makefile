install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

path:
	echo PATH=$PATH:~/.composer/vendor/smood/brain-games/bin
	export $PATH

lint-fix:
	composer run-script phpcbf -- --standard=PSR12 src bin

test:
	composer run-script phpunit tests
