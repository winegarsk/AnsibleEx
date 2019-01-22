#!/bin/bash

#IMPORTANT: run each cmd separately, or build will not work

# Build and start Sql container 
docker build -t mysql ./sql	
docker run --name mysql_container --env="MYSQL_ROOT_PASSWORD=password" -d mysql

# Grab schema and create database
docker exec -it mysql_container bash -l 
cd /docker-entrypoint-initb.d
mysql -uroot -ppassword < ./schema.sql 


# Build and start Php container
docker build -t php ./php 
docker run --name php_container -d --link mysql_container:mysql -p 8080:80 php








