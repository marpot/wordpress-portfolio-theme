up:
	docker compose up -d

down:
	docker compose down

restart:
	docker compose down && docker compose up -d

ps:
	docker ps

logs:
	docker compose logs -f

wp-shell:
	docker exec -it wp_app bash

db-shell:
	docker exec -it wp_db bash

clean:
	docker compose down -v
