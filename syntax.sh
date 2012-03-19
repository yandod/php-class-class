#!/bin/sh
find -type -f ./src | xargs -n1 php -l
