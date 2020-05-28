clean: stop
	docker-compose rm -f

start:
	docker-compose up --remove-orphans -d

stop:
	docker-compose stop
