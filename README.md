📦 Gestion Commerciale - Laravel 11
Une application web de gestion commerciale moderne pour la gestion des articles, clients et commandes. Ce projet a été conçu pour démontrer l'utilisation des relations Eloquent et une interface utilisateur propre.

🚀 Fonctionnalités
Gestion des Articles : CRUD complet (Ajout, Modification, Suppression, Affichage).

Interface Moderne : Design responsive avec Bootstrap 5 et icônes FontAwesome.

Validation Avancée : Sécurisation des données via les Form Requests (Prix > 0, Stock >= 0).

Pagination : Navigation fluide dans les listes de données.

Base de données : Système de Seeding et Factories pour générer des données de test réalistes.

🛠️ Stack Technique
Framework : Laravel 11

Langage : PHP 8.2+

Frontend : Bootstrap 5 / Blade Templating

Base de données : MySQL

💻 Installation
Cloner le projet :

Bash
git clone https://github.com/ton-username/nom-du-repo.git
cd nom-du-repo
Installer les dépendances :

Bash
composer install
Configurer l'environnement :

Bash
cp .env.example .env

# Configurez vos accès DB dans le fichier .env

php artisan key:generate
Migrations et Seeders :

Bash
php artisan migrate:fresh --seed
Lancer le serveur :

Bash
php artisan serve

ggggggggggggggggggggggggggvvvvvdddddddddddddddddddd
