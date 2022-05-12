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

## Information für die Lehrperson
Folgende Anforderungen waren gegeben:
1. Auf der Startseite sollen mindestens 10 Produkte mit Bild, Name und Preis in einer Übersicht angezeigt werden. Jedes Produkt soll einem Warenkorb beliebig oft hinzugefügt und temporär gespeichert werden können. Ein Filter und eine Sortierung sind optional.
2. Der Warenkorb soll alle enthaltenen Produkte anzeigen und eine Möglichkeit bieten, einzelne Produkte wieder zu entfernen. Über ein Bestellformular sollen Benutzer ihre Adressdaten eingeben und die Produkte im Warenkorb bestellen können.
3. Kunden sollen ein Benutzerkonto erstellen können und ihre Adressdaten für eine Bestellung speichern und bearbeiten können. Dafür muss sich ein Benutzer registrieren und anmelden können.
4. Auf einer Kontaktseite sollen Benutzer eine Nachricht an das Startup senden können. Zudem sollen sämtliche Kontaktdaten des Unternehmens und die verantwortliche Person ersichtlich sein.
5. Über eine Produktverwaltung sollen beliebig viele Produkte in einer Datenbank gespeichert werden können. Jedes Produkt soll über einen Namen, einen Preis und ein Bild verfügen. Bilder sollen als relative Links zur Datei gespeichert werden. Ein Passwortschutz ist optional.

### *Bearbeitete Anforderungen*
Aufgrund akuten Zeitmangels konnten diverse Anforderungen nicht durchgeführt werden. Der Fokus in diesem Produkt, wurde von mir persönlich, möglicherweise falsch, auf die erarbeitung von Grundwissen im gesamten Webentwicklungsbereich (ohne JS) gesetzt. Im Detail bedeutet dies, dass ich den gesamten Stack entwickeln wollte, von der Dockerumgebung über die Datenbankstruktur bis zur Dargestellten DOM. Somit fehlte die Zeit den Umfang der Arbeit vollständig zu erfüllen, in meiner persönlichen Meinung habe ich mit meiner Arbeit aber die gewünschte Tiefe, das geforderte Wissen erreicht und die Modulziele erreicht. \
Die grafische Darstellung wird hier einiges zu wünschen übrig lassen, ist aber für meine bevorzugte Arbeitsweise nur Kosmetik, mit der ich mich persönlich nur nebenbei beschäftigen wollte. Deshalb wurde auch auf Bootstrap 5 gesetzt.
* Anforderung 1. bzw. a) wurde bearbeitet, ohne optionale Filter
* Anforderung 2. bzw. b) wurde bearbeitet, allerdings wurde die Bestellfunktionalität weggelassen
* Anforderung 3. bzw. c) wurde bearbeitet, allerdings wurde die Postanschrift weggelassen (auch wegen des wegfallenden Bestellprozesses)
* Anforderung 4. bzw. d) wurde nicht bearbeitet. Eine leere Seite in der Seitenstruktur existiert.
* Anforderung 5. bzw. e) wurde bearbeitet, allerdings fehlt die Funktion Produkte im Webinterface einzutragen.