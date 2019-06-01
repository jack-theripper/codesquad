
# How to run #

Dependencies:

  * Docker engine v1.13 or higher. [https://docs.docker.com/engine/installation](https://docs.docker.com/engine/installation)
  * Docker compose v1.12 or higher. [docs.docker.com/compose/install](https://docs.docker.com/compose/install/)
  * Directories: .phalcon/, cache/


Service|Hostname|Port number
------|---------|-----------
Webserver|[localhost:8080](://localhost:8080)|8080
MariaDB|**host:** `localhost (mariadb)`; **port:** `8083`|3306 (default)
php-fpm|php-fpm|9000

* Start containers in the background: `docker-compose up -d`
* Start containers on the foreground: `docker-compose up`
* Stop containers: `docker-compose stop`
* Kill containers: `docker-compose kill`
* View container logs: `docker-compose logs`
* Shell into the PHP container, `docker-compose exec php-fpm bash`

