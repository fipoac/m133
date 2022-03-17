# Projekt TBZ Modul 133
Dieses Repo beinhaltet das Projekt für das [ICT Modul 133 Web-Applikation mit Session-Handling realisieren](https://www.modulbaukasten.ch/module/133)

Es erstellt mit docker compose zwei (bzw. drei) Docker Container auf welcher diese Webseite läuft mit MariaDB Datenbank. Diese Webseite kann mit leichter Modifikation auch ohne Traefik benutzt werden, dazu docker-compose.yml so anpassen:
- Traefik Netzwerk entfernen
- Labels entfernen
Ansonsten sollte das Netzwerk für die jeweilige Traefik Installation angepasst werden.

## Webseite starten
1. Docker installieren [Beispiel Debian](https://docs.docker.com/engine/install/debian/) und Daemon starten
2. [Docker compose v2 installieren](https://docs.docker.com/compose/cli-command/#installing-compose-v2)
3. git installieren
4. Repo klonen
5. .env anpassen

## Mit Traefik reverse proxy integriert
Um gleich den Traefik reverse proxy einzusetzen docker compose mit Parameter -f docker-compose-with-traefik.yml ergänzen. Dazu vorher noch Docker Netzwerk "traefik" erstellen: 
``` 
docker network create -d bridge traefik
```
**Nicht vergessen Email in .env einzutragen.**