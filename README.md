# 📄 Attestation Request Platform

Une application web de gestion des demandes d'attestations, développée avec Laravel, Bootstrap, et MySQL, dans le cadre d’un projet de stage à la Direction Provinciale de Béni Mellal.

## 🚀 Fonctionnalités principales

- 👨‍🎓 **Étudiants** : soumettre une demande d’attestation via un formulaire en ligne.
- 👨‍💼 **Employés** : consulter, imprimer, et gérer les demandes.
- 👩‍💻 **Administrateurs** : gérer les comptes des employés.
- 📊 **Gain de temps** et automatisation de la procédure administrative.

## 🧰 Technologies utilisées

- **Laravel** (PHP Framework)
- **Bootstrap** (CSS framework)
- **MySQL** (SGBD)
- **HTML / CSS / JavaScript / jQuery**
- **XAMPP** (environnement local de développement)

## 📸 Aperçu

### 🎓 Côté Étudiant
- Formulaire de demande
- Message de confirmation
- Carte Google Map avec emplacement

### 🧑‍💼 Côté Employé
- Authentification
- Liste et recherche des demandes
- Impression d’attestations

### 👨‍🔧 Côté Admin
- Gestion des comptes des employés (CRUD)

## ⚙️ Installation locale

```bash
git clone https://github.com/VOTRE_UTILISATEUR/attestation-request-platform.git
cd attestation-request-platform

# Installer les dépendances backend
composer install

# Installer les dépendances frontend
npm install && npm run dev

# Copier le fichier .env et générer la clé
cp .env.example .env
php artisan key:generate

# Configurer la base de données dans .env, puis :
php artisan migrate

# Démarrer le serveur
php artisan serve
