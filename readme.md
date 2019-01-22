# Module 1

The point of this project is to deploy a simple web app using docker that has a 
php-apache front end and a mysql back end. The web app will display data from a 
table called Movies in a database called media. 

## Files

### build.sh

This file contains the bash necessary to build the web app. Copy and paste commands into 
the terminal one by one to prevent error. 

### destroy.sh

This file contains the bash necessary to stop and remove containers, as well as images
pulled to build them. This file can be executed in full on bash using "./destroy.sh" while
in the Module1 directory.

## Directories

### adr

This directory contains the Architectural Design Records

### mysql

This directory contains the files necessary to build the Docker container for the mysql database.

### wordpress

This directory contains the files necessary to build the php-apache container for the 
php web server.
