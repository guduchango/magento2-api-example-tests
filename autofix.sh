#!/bin/sh
vendor/bin/php-cs-fixer fix --config=.php_cs.xml -v --path-mode=intersection \
    ./app ./tests
git status