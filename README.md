# Dockerisation

Basé sur [Gist clandestine8](https://gist.github.com/clandestine8/48eb01d49a5ef919b0632aa07e41c860) et utilisation de [ce Dockerfile](https://cours.brosseau.ovh/tp/ops/deployer-laravel-docker.html)


# Développement

- Monter l'environnement de développement (Laravel + Vite)
```
sail up
```

```
sail npm run dev
```

- Créer la base de données `boisdelouest`:
```
sail mysql -u root -ppassword -e "CREATE DATABASE boisdelouest;"
```

- Faire les migrations
```
sail artisan migrate
```

- Seed la base de données
```
sail artisan db:seed
```

- Reset la base de données
```
sail artisan migrate:reset
```

- Accéder au [site](0.0.0.0:80) 
- Accéder au [PHPMyAdmin](0.0.0.0:8080) 

## Front

```
sail npm install
sail npm run dev
```

# Production

- Monter l'environnement de production:
```
sail up
sail mysql -u root -ppassword -e "CREATE DATABASE boisdelouest;"
sail artisan migrate
sail artisan db:seed
sail npm run dev
```

## Bobologie:

- `sail npm run dev`:
```
failed to load config from /var/www/html/vite.config.js
error during build:
Error: EACCES: permission denied, open '/var/www/html/vite.config.js.timestamp-1714377928668-bfc20cda0db95.mjs'
```

Résolution: `sudo chmod -R 777 src/`
