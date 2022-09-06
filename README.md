### install php unit or other dependencies via docker composer

    docker run --rm --interactive --tty \
    --volume $PWD:/app \
    composer <command>


### configure php storm with remote interpreter
#### 1. insert remote interpreter by using docker-compose
#### 2. set path to text framework -> autoload: /var/www/vendor/autoload.php
#### 3. set path to test framework -> phpunit.xml: <absolute-path>/skeleton-php-cli/phpunit.xml