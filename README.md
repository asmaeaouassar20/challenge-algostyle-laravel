# challenge-laravel-students-management

## Prérequis
- PHP 8.0+
- composer
- SQLite

## Installation 

### 1. Cloner le projet 
```
git clone <url-du-repo>
```

### 2. Installer les dépendances
```
composer install
```

### 3. Configurer l'environnement
#### Créer le fichier de configuration .env (indispensable à Laravel) à partir du modèle .env.example
```
copy .env.example .env
```

#### Générer une clé de chiffrement unique (APP_KEY) dans le .env  (pour la sécurité de la config)
```
php artisan key:generate
```

### 4. Créer la base de données SQLite dans le dossier database

### 5. Exécuter les migrations et seeders
```
php artisan migrate --seed
```

### 6.Lancer le serveur
```
php artisan serve
```


## Résoluton des erreurs courantes 

### Erreur : ``` vendor/autoload.php ``` introuvable
```
rmdir /s vendor
del composer.lock
composer install
```
### Erreur : ``` MissingAppKeyException ```
```
copy .env.example .env
php artisan key:generate
```

### Erreur : Base de données SQLite absente
```
php artisan migrate --seed
```

### Erreur : cache bloquant
```
php artisan config:clear
php artisan cache:clear
```

## aperçu
### Home Page
<img width="1915" height="511" alt="image" src="https://github.com/user-attachments/assets/d2ee17d8-81f4-4544-82eb-a7c5e7c58ee0" />

### index
<img width="1915" height="552" alt="image" src="https://github.com/user-attachments/assets/1743880c-4a06-4f01-b4b3-3779774769d9" />

### create
<img width="1918" height="857" alt="image" src="https://github.com/user-attachments/assets/ee2a92c2-0d0f-4b6d-be16-56b3ef3e6740" />

### edit
<img width="1915" height="880" alt="image" src="https://github.com/user-attachments/assets/35ef32f4-4889-4547-bb35-ffa3061ada2e" />




