#!/bin/bash

docker stop mysql_container
docker rm mysql_container
docker stop php_container
docker rm php_container

docker rmi -f $(docker images -a -q)