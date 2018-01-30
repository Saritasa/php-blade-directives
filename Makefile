all: install cs

install:
	composer install

cs:
	php vendor/bin/phpcs

csfix:
	php vendor/bin/phpcbf
