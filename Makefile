#!make
MAKEFLAGS += --silent

include .env

remove: 
	echo "SHUT DOWN CONTAINERS..."
	sleep 5
	docker compose down
	echo "REMOVING VOLUMES..."
	sleep 5
	docker volume rm $(VOLUMES_PREFIX)_db_data $(VOLUMES_PREFIX)_wp_data

config:
	echo "CREATING DATABASE..."
	sleep 5
	docker compose up -d db wordpress
	echo "CONFIGURING DATABASE..."
	sleep 10
	#docker exec -i $(VOLUMES_PREFIX)-db sh -c 'exec mysql --user=$(ROOT_DB_USER) --password=$(ROOT_DB_PASSWORD) $(DB_NAME)' < ./create_database.sql
	docker exec -i wordpress-db sh -c 'exec mysql --user=root --password=root  wordpress' < ./create_database.sql

install:
	echo "INSTALLING PLUGINS AND THEMES..."
	sleep 5
	docker compose up wordpress-cli

init:
	echo "STARTING DEVELOPMENT MODE..."
	sleep 5
	docker compose down && docker compose up db wordpress
logs:
	docker compose logs -f db wordpress

.PHONY: remove
.PHONY: init