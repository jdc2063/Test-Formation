# Test-Formation

# Installation

## Prérequis

Vous n'aurez besoin d'aucun prérequis.

## Commandes

Une fois que vous aurez cloné le projet git, entrez dans le projet puis voici ce que vous devrez faire.

- cd test-tech/
- php composer.phar install
- cp .env.example .env
- php artisan key:generate

Ainsi, vous aurez installé des dossiers importants pour le bon fonctionnement du projet.

Vous devrez ensuite modifier le fichier .env afin de rentrer les informations de votre base de données qui se situe de la ligne 10 à 15.

Et enfin
- php artisan storage:link
- php artisan migrate:fresh --seed
- php artisan serv

## Information des URL

Vous trouverez dans le fichier URL.pdf un récapitulatif des url, de leur objectif et éventuellement des valeurs attendus.
## Information des pages

### Création des attestations

Page principale du projet, vous pourrez créer vos attestations ici. Choisissez votre nom afin de générer votre attestation avec la convention que vous êtes en train de suivre. Vous ne pourrez pas modifier votre convention mais vous pouvez modifier votre attestation. Appuyez sur le bouton "ajouter" afin d'enregistrer votre attestation.

### Création des conventions

Afin de tester complêtement le projet, voici une page permettant d'ajouter une convention.

### Création d'étudiant

Afin de tester completement le projet, voici une page permettant d'ajouter un étudiant