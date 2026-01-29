# Bookshop

Application Symfony 8 avec Doctrine (PostgreSQL), servie via FrankenPHP dans Docker.

## Prérequis

- [Docker](https://docs.docker.com/get-docker/) et Docker Compose

## Démarrage

```bash
docker compose up -d --build
```

- **Application** : http://localhost:8080  
- **Health check** : http://localhost:8080/health  

## Commandes utiles

Exécuter des commandes dans le conteneur :

```bash
# Console Symfony
docker compose exec app php bin/console <commande>

# Composer
docker compose exec app composer <commande>

# Exemples
docker compose exec app php bin/console doctrine:database:create
docker compose exec app php bin/console doctrine:migrations:migrate
```

## Configuration

- Fichier d’environnement : `.env` (voir `.env.exemple` pour les variables).
- Base de données : PostgreSQL 16, configurée via `DATABASE_URL` dans `.env` (connexion au service `db` en interne).

## Arrêter les services

```bash
docker compose down
```
