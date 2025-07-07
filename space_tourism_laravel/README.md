Bienvenue sur mon projet Space Tourism !

Pour pouvoir installer ce projet sur votre machine, vous aurez besoin de:

-   PHP 8.1 minimum
-   Composer
-   Node.js
-   Npm
-   SQLite

Voici les commandes qui permetteront d'installer le projet et dépendances:

-   composer install
-   npm install && npm run dev
-   cp .env.exemple .env (si le fichier .env n'est pas fourni)
-   php artisan key:generate
-   Verifier dans .env que la base de donnée est configurée comme suit:
    DB_CONNECTION=sqlite
    DB_DATABASE=./database/database.sqlite
-   Créer le fichier SQLite si abscent:
    touch database/database.sqlite
-   php artisan migrate:fresh --seed
-   php artisan storage:link
-   php artisan serve

Des routes API sont intégrées pour pouvoir tester/récuperer la donnée:
URLs:

-   http://127.0.0.1:8000/api/technologies
-   http://127.0.0.1:8000/api/crews
-   http://127.0.0.1:8000/api/destinations
