[German](README.md) **[English](README-eng.md)**
# Project TBZ Module 133
This repo contains the project for the [ICT Module 133 Realize web application with session handling (in German)](https://www.modulbaukasten.ch/module/133)

It creates with docker compose two (or three) Docker containers on which this website runs with MariaDB database.
From v0.5 with complete rewrite and nginx as webserver instead of Apache.

## Important notes
- If used with a dedicated reverse proxy (docker-compose_web-only.yml) the network "traefik" must be adjusted to the network of the proxy.
- With the integrated Traefik proxy (docker-compose_traefik.yml), a network is automatically created.
- There is a variant without Traefik for a development environment on Windows which has no health monitoring, load balancing or SSL/TLS (docker-compose_local-only.yml).
- Some file & folder permissions probably need to be adjusted
- **Don't forget to add LetsEncrypt email to .env (Except local-only)**

## Start website
1. install Docker [example Debian](https://docs.docker.com/engine/install/debian/) and start daemon
2. install [Docker compose v2](https://docs.docker.com/compose/cli-command/#installing-compose-v2)
3. install git
4. clone repo
5. customize .env
6. with command ```
   docker compose -p m133-project -f {path to desired docker-compose*.yml} up -d ```
   **Caution:** you have to be in the same folder as the docker compose files, otherwise the relative paths will not work. The -p parameter sets the project name, which would otherwise be the name of the directory (Docker).

## Local environment
- Simply install Docker Desktop
  - Enable compose v2 in settings
- Perform steps 3-6 in [Start website](#start-website)