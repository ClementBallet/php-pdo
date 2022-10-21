# PHP Data Objects (PDO)

<blockquote style="background-color: darkslateblue"><br>Exploration de PDO pour la connexion vers une base de données et récupérer les données voulues<br></blockquote>

Comment installer le projet : 
1. Cloner le dépôt
2. Créer un virtual host pointant vers le dossier du projet ou lancer la commande `php -S localhost:8080` à sa racine
3. Créer une base de données `villes_france`
4. Lancer les scripts SQL `departement.sql` et `villes_france.sql` pour installer les tables dans la base de données créée précédemment
5. Se rendre sur l'adresse du virtual host ou localhost:8080 suivant ce que vous avez choisi pour le point 2
6. Naviguez dans le projet !

Plusieurs façons de faire :
- PDO basique
- PDO avec gestion des erreurs dans un try...catch
- PDO dans une fonction avec gestion des erreurs dans un try...catch 
- PDO dans une classe (à venir)