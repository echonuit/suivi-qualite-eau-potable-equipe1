# Fiche Brief Projet

### Nom du projet 
Suivi Qualité Eau Potable \- “Aqualité” 

### Clients commanditaire & besoins clients 
Le client est Samuel Busson et l’intermédiaire est Sébastien Nedjar. Il faut concevoir une application web permettant de consulter de façon rapide des données relatives à la qualité de l’eau potable en France.

### Contexte du projet   
Un site du gouvernement existe déjà, permettant de rechercher des données par communes. Mais il n’offre pas la possibilité de consulter les données sur une longue période (plusieurs années) facilement. L’opportunité ici est d’offrir à l’utilisateur une présentation explicite des données sur une période choisie.

### Objectifs du projet
L'application remplit quatre fonctions :

1. **Trouver son eau** : choisir une commune par son nom, puis le réseau qui dessert son quartier.  
2. **Voir ce qui est mesuré** : afficher la liste de tous les paramètres analysés sur ce réseau, regroupés par famille, avec le nombre de mesures et la date de la dernière.  
3. **Suivre dans le temps** : pour les paramètres choisis et la période choisie, afficher un graphique et un tableau des valeurs, avec la limite et la référence de qualité.  
4. **Comprendre** : pour un pesticide, indiquer s'il est encore autorisé et sur quelles cultures, par un lien vers le catalogue officiel E-Phy.

### Utilisateurs cibles & besoins utilisateurs

- **Persona A** : Habitant, qui souhaite simplement savoir si l’eau de sa commune respecte les limites de consommation et pouvoir le partager à ses proches  
- **Persona B**: Élu / journaliste / association, qui souhaite examiner les tendances afin de les comparer et de les partager avec ses métadonnées (contexte, source, date, unité…)  
- **Persona C**: Chercheur / bureau d’études, souhaite pouvoir obtenir des séries de données claires et précises sur la qualité de l’eau et souhaite pouvoir les exporter dans un fichier .csv .

**Besoin 1**: Consulter les données \- utilisateurs A, B et  C   
**Besoin 2**: Exporter les données \- utilisateur C  
**Besoin 3**: Partager un lien permanent \- utilisateurs A et B  
**Besoin 4**: Accéder au contexte des données \- utilisateurs B et C

### Contraintes identifiées
Les limites connues du projet dans différents ambitos sont les suivants:

* **Contraintes temporelles:** le projet dispose d’un limit de temps plus ou moins serré, d’une durée de travail dédié effective d'au peu près 10 semaines, et une date de rendu pour le rapport intermédiaire en Décembre 18, 2026, comptant jusqu'à vendredi 15 janvier 2027 pour une livraison d’une première release.  
  * Le temps disponible impose de faire une priorisation réelle sur les fonctionnalités à intégrer dans les livrables, assurant les fonctionnalités “socles" (ou MUST), reportant les secondaires ou extensions (SHOULD et COULD) une fois ces premières finalisées et validées.  
* **Contraintes techniques:** le projet devra être développé en PHP sans framework, respectant les bonnes pratiques de sécurité informatique, qualité de code, version de projet et architecture MVC comme minimum.  
  * Les données, les ressources et la documentation sont disponibles, pourtant l'apprentissage de l’utilisation d’une API pour récupérer les données clés du  du projet sera essentielle, ainsi comme l’ultérieur formatage des données, pour rendre son stockage, manipulation et récupération plus accessible et pratique.  
  * Les données et mesures manipulées et/ou affichées devront rester cohérents avec leurs sources officielles.   
* **Contraintes fonctionnelles:** le développement des fonctions socle devra être assuré, développé et validé dans son intégrité avant de pouvoir avancer ou s'engager dans les fonctionnalités de extension.  
* **Contraintes organisationnelles:** le projet sera développé pour un équipe assez compacte de seulement trois personnes, donc une répartition des tâches et un coordination claire de l'équipe pour les événements à faire reste essentiel pour lever le projet à son reussite en respectant les autres contraintes.


  
### Premiers éléments de faisabilité  
Le projet semble réalisable compte tenu des ressources disponibles, des conditions et des technologies prévues, ainsi que des compétences du groupe.

Nous disposons déjà d’un certain niveau d’aisance dans la gestion des bases de données et dans l’utilisation du langage PostgreSQL. De plus, les ressources, la documentation et les bases de données nécessaires sont déjà disponibles. Cependant, l’utilisation de l’API pourrait représenter une difficulté.

L’utilisation de PHP sans framework est compatible avec les objectifs du projet, qui vise à rendre l’accès aux informations relatives à la qualité de l’eau plus accessible et pratique grâce à leur présentation sur ce site web.

L’utilisation d’une bibliothèque JavaScript (Chart.js, Apache ECharts ou Observable Plot) est envisagée et devra être évaluée depuis le début afin de déterminer la meilleure façon de l'utiliser pour nous permettre de représenter les données et les graphiques de manière adéquate.

Des compétences en gestion de bases de données, en manipulation et en formatage des données, en requêtage et en visualisation des données seront nécessaires. Des compétences en conception et en développement d’interfaces web, dans le respect des bonnes pratiques d’accessibilité et de sécurité, devront également être mobilisées.

Le niveau de complexité est estimé comme moyen, compte tenu des compétences et des ressources techniques et humaines disponibles, ainsi que des difficultés anticipées. L’une des principales complexités réside dans l’exploitation fiable des données, la correspondance entre les communes et les réseaux de distribution, la gestion des valeurs manquantes ou des valeurs exprimées sous la forme « inférieure à », dont le traitement peut être délicat, ainsi que l’identification des seuils pertinents. Il faudra également veiller à présenter les données de manière claire et compréhensible, tout en prenant en compte les différents cas particuliers susceptibles d’être rencontrés.

En conclusion, le projet semble réalisable dans le délai prévu, à condition de répartir efficacement le travail entre les trois membres de l’équipe, de se familiariser avec les nouveaux outils, notamment l’API permettant d’accéder aux données, et de privilégier les fonctionnalités essentielles avant d’envisager les options complémentaires.
