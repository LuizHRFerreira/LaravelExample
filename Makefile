USER=nginx

up:
	docker-compose up 

down:
	docker-compose down

sh:
	docker-compose exec php bash
