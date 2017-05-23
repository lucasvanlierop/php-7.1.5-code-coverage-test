#!/usr/bin/env sh

mkdir -p build/artifacts/logs
mkdir -p build/artifacts/coverage

vendor/bin/phpunit \
    --stop-on-failure\
    --coverage-clover=build/artifacts/logs/clover.xml\
    --coverage-html=build/artifacts/coverage\
    --coverage-text
