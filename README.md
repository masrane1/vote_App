# Appli-Vote

Cette application permet aux utilisateurs de voter pour la monogamie ou la polygamie et de voir les résultats. Elle utilise Docker Compose pour orchestrer trois services : PHP pour l'application de vote, Node.js pour l'application de résultats, et PostgreSQL pour la base de données.

## Prérequis

- Docker
- Docker Compose

## Installation

1. Clonez le dépôt :

   ```sh
   git clone https://github.com/masrane1/vote-app.git
   cd appli-vote
   ```

2. Lancez Docker Compose :

   ```sh
   docker-compose up --build
   ```

3. Accédez à l'application via :

   - PHP (Vote) : [http://localhost:8080](http://localhost:8080)
   - Node.js (Résultats) : [http://localhost:3001/results](http://localhost:3001/results)
