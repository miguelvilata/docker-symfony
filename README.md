# General

This is a project to create a symfony 4/5 project using a docker configuration environment.

# Installation
git clone git@github.com:miguelvilata/docker-symfony.git

# Move to the cloned project && build
cd docker-symfony
docker-compose -f docker/docker-compose.yml up -d --build

# Stop container
docker-compose -f docker/docker-compose.yml down

# To access containerized project go to
http://localhost:8080

# Create a symfony project
docker exec -it docker_docker-php-cli_1 bash

#Create a symfony web application
symfony new my_project_name --full

#Create a microservice, console or api application
symfony new my_project_name

#Create a project using lts version
symfony new my_project_name --version=lts

#Create a project using a symfony specific version
symfony new my_project_name --version=4.4

> **ProTip:** symfony check:requirements.

Todo: 
  - Enable debug by command params
  - Allow s