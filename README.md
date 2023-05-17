# README
## TP Dev WEB
### Table des matières
- [README](#readme)
  - [TP Dev WEB](#tp-dev-web)
    - [Table des matières](#table-des-matières)
      - [Charger la base de données](#charger-la-base-de-données)
      - [Lancer PHP](#lancer-php)
      - [Ouvrir le site](#ouvrir-le-site)
      - [Potentiels problèmes](#potentiels-problèmes)
    - [Crédits](#crédits)

Bienvenue dans le README du TP Dev WEB, pour lancer le site, suivez les instructions ci-dessous dans l'ordre (on ne prend pas en compte les potentiels problèmes parmis les instructions).
***
#### Charger la base de données
Pour charger la base de données, il faut se déplacer dans le dossier `sql` et il faut se connecter à MySQL avec la commande `mysql -u root` puis taper le mot de passe de votre utilisateur MySQL. Il faut ensuite entrer les commandes suivantes :
```sql
source labellepou.sql;
source labellepoudata.sql;
```
***
#### Lancer PHP
Pour lancer PHP, veuillez vous déplacer dans le dossier "LaBellePou" et lancer la commande `php -S localhost:8080`.
***
#### Ouvrir le site
Pour ouvrir le site, veuillez ouvrir votre navigateur et taper dans la barre de recherche : http://localhost:8080/
***
#### Potentiels problèmes
- Si vous avez un problème avec la base de données avec comme `USER` = "root" et `PSWRD` = " ", veuillez changer les valeurs dans le fichier `php/bddDATA.php` des deux `define` comportant `USER` et `PSWRD` avec vos identifiants MySQL.
- La mise à jour des stocks dans la base de données pendant un achat ne fonctionne pas, il y a quand même les fonctions d'essais dans les fichiers `php/produit.php` et `php/majStock.php`.
- Le panier ne dépend pas non plus de la base de données, il est géré par des variables de session.
  
Le reste respecte les consignes du TP.
***
### Crédits
Auteurs : Valentin SERRES (<serresvale@cy-tech.fr>) et Ugo LATRY (<latryugo@cy-tech.fr>)
