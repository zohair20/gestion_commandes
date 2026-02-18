# 📦 Gestion Commerciale - Laravel 11

Une application web de gestion commerciale moderne et performante, conçue pour centraliser la gestion des articles, des clients et des commandes. Ce projet met en avant l'utilisation avancée du moteur **Eloquent ORM** et une architecture logicielle propre (Clean Code).

---

## 🚀 Fonctionnalités implémentées

### 🔹 Gestion des Articles (Module Complet)
C'est le cœur actuel du projet. Il permet une gestion fluide du catalogue produit :
- **CRUD Complet** : Création, lecture, mise à jour et suppression d'articles.
- **Logique Métier** : 
    - Validation stricte des prix (doivent être supérieurs à 0).
    - Contrôle du stock (entier positif).
- **Interface Utilisateur (UX/UI)** :
    - Affichage sous forme de tableaux modernes.
    - Badges dynamiques pour l'état du stock.
    - Boutons d'action avec effets de survol (Hover).

### 🔹 Architecture & Sécurité
- **Route Model Binding** : Optimisation des requêtes SQL via l'injection directe des modèles dans les contrôleurs.
- **Validation Robuste** : Utilisation de `Request $request->validate()` pour garantir l'intégrité des données.
- **Pagination Native** : Gestion efficace de l'affichage pour les grandes bases de données.

---

## 🛠️ Stack Technique
- **Backend** : Laravel 11 & PHP 8.4
- **Frontend** : Blade Templating, Bootstrap 5, FontAwesome 6
- **Base de données** : MySQL

---

## 📸 Aperçu du Projet (Screenshots)

> **Astuce** : Pour ajouter vos propres captures d'écran, créez un dossier `screenshots` à la racine, déposez vos images dedans, et remplacez les liens ci-dessous.

| Liste des Articles | Détails de l'Article |
| :--- | :--- |
| ![Index Page](https://via.placeholder.com/400x250?text=Index+Page) | ![Show Page](https://via.placeholder.com/400x250?text=Show+Page) |

---

## 💻 Installation & Configuration

1. **Cloner le projet** :
   ```bash
   git clone [https://github.com/votre-username/gestion_commandes.git](https://github.com/votre-username/gestion_commandes.git)
   cd gestion_commandes


## 📸 Aperçu de l'application

| Liste des Articles | Détails de la Commande |
| :---: | :---: |
| <img src="https://github.com/user-attachments/assets/c9a9bf1b-7891-4207-9742-ce68a7c0898a" width="100%"> | <img src="https://github.com/user-attachments/assets/93830810-f22c-4bf0-bcab-74e3e039a260" width="100%"> |

| Détails de l'Article |
| :---: |
| <img src="https://github.com/user-attachments/assets/c949b714-9668-4cad-af60-76ea388eaf13" width="60%"> |
