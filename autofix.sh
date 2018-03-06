#!/bin/sh
./vendor/bin/php-cs-fixer fix --config=./php_cs.dist -v --path-mode=intersection  ./tests
