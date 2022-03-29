**[German](README.md)** [English](README-eng.md)
# Projekt TBZ Modul 133
Dieses Repo beinhaltet das Projekt für das [ICT Modul 133 Web-Applikation mit Session-Handling realisieren](https://www.modulbaukasten.ch/module/133)

Es erstellt mit docker compose zwei (bzw. drei) Docker Container auf welcher diese Webseite läuft mit MariaDB Datenbank.
Ab v0.5 mit kompletten Rewrite und nginx als Webserver anstatt Apache.

## Wichtige Hinweise
- Wenn mit einem seperaten reverse proxy verwendet (docker-compose_web-only.yml) muss das Netzwerk "traefik" auf das Netzwerk des Proxys angepasst werden.
- Beim integrierten Traefik proxy (docker-compose_traefik.yml) wird automatisch ein Netzwerk erstellt.
- Es gibt für die Entwicklungsumgebung auf Windows eine Variante ohne Traefik, diese besitzt kein Health monitoring, load balancing oder SSL/TLS (docker-compose_local-only.yml).
- Einige Datei & Ordner Berechtigungen müssen wahrscheinlich angepasst werden
- **Nicht vergessen LetsEncrypt Email in .env einzutragen. (Ausser local-only)**

## Webseite starten
1. Docker installieren [Beispiel Debian](https://docs.docker.com/engine/install/debian/) und Daemon starten
2. [Docker compose v2 installieren](https://docs.docker.com/compose/cli-command/#installing-compose-v2)
3. git installieren
4. Repo klonen
5. .env anpassen
6. Mit Befehl ```
   docker compose -p m133-project -f {Pfad zur gewünschten docker-compose*.yml} up -d ```
   **Achtung:** man muss sich im gleichen Ordner wie die docker compose Dateien befinden, ansonsten funktionieren die relativen Pfade nicht. Der Parameter -p setzt den Projektnamen, der sonst der Name des Ordners (Docker) wäre.

## Lokale Umgebung
- Einfach Docker Desktop installieren
  - In Einstellungen compose v2 aktivieren
- Schritte 3-6 in [Webseite starten](#webseite-starten) durchführen