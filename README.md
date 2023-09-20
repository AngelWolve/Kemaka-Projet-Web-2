# Projet Synthèse

## Kemaka

### Kevin Levesque-Aubut
### Masomeh Mofidipour
### Katie Sabourin

---

# 1. Analyse des besoins

## 1.1 Demande globale :

Le festival Otaku ‘Asian Quest’, axé sur la culture asiatique, les mangas et les animes, nous a demandé de créer un site Web avec une zone d’administration pour gérer les activités, actualités, forfaits, réservations et utilisateurs pour le festival tout en assurant une expérience utilisateur fluide.

## 1.2 Demandes spécifiques des clients :

- Création de l’image de marque du festival, le logo, la palette de couleurs et la typographie.
- Création d’un site Web avec au moins une page adaptative pour les appareils mobiles.
- Il est impératif que le site Web ne repose pas sur un CMS préconçu comme WordPress.
- Le site Web doit bénéficier d’un bon référencement pour attirer un public plus large.
- Intégration de "Google Analytics" pour suivre les statistiques du nombre de pages vues.
- Intégration d’une carte virtuelle de l’emplacement géographique.
- Les listes suivantes peuvent être modifiables par un administrateur: utilisateurs, activités, actualités, forfaits et réservations.
- La liste des réservations peut être aussi modifiée par un employé du festival.
- Création d'une liste de forfaits, en spécifiant les détails tel que le nom du forfait, la description et le prix.
- Possibilité de réserver un forfait avec une date d’arrivée et une date de départ.
- Création d’une page d’administration pour les employés permettant de visualiser l’ensemble des réservations des clients avec la possibilité d’annuler une réservation depuis cette liste.
- Création d'une liste d’activités liées à la culture asiatique et Otaku, présenté de manière visuellement attrayante.

## 1.3 Demandes additionnelles :

- Les clients doivent être connectés pour réserver un forfait.
- Les réservations doivent être sauvegarder dans le compte du client avec la possibilité d’annulation avant la date d'arrivée.
- Respecter la date limite du 13 octobre pour la mise en ligne du site.
- Il faut fournir un document didacticiel pour la zone d’administration, incluant les accès pour se connecter.

## 1.4 Public cible :

Le festival Otaku rassemble les passionnés de la culture pop japonaise, incluant les fans de mangas, d'animes, de jeux vidéo, ainsi que les adeptes du cosplay et les collectionneurs de produits dérivés. C'est un événement qui attire aussi bien les fervents connaisseurs que les curieux désireux de découvrir cet univers riche et captivant.

---

# 2. Présentation du concept

## 2.1 Nom du festival fictif

Le nom du festival est "Asian Quest".

## 2.2 Thème

Le festival mettra en lumière la culture asiatique à travers les mangas et les animes, mettant ainsi de l'avant la passion pour ces formes d'art populaire. Au programme, des expositions avec des sessions de dédicaces, des projections de films et de séries, des kiosques proposant des produits dérivés, des concours de cosplay et bien d'autres activités.

## 2.3 Inspiration

Pour l'inspiration visuelle du site Web, nous puiserons dans l'univers coloré et créatif des mangas et des animes. Voici quelques éléments d'inspiration que nous envisageons d'intégrer au design du site Web:

- Des illustrations de personnages emblématiques.
- Des motifs japonais traditionnels comme des vagues et des fleurs de cerisier.
- Des couleurs dynamiques pour refléter l'énergie de la culture Otaku.

### 2.3.1 Image d'inspiration:
![Inspiration 1](https://github.com/AngelWolve/Kemaka-Projet-Web-2/blob/main/public/images/inspiration1.png)

Cette première image a inspirée la typographie du logo ainsi que les personnages colorés à travers le site Web.

![Inspiration 2](https://github.com/AngelWolve/Kemaka-Projet-Web-2/blob/main/public/images/inspiration2.png)

Cette deuxième image a inspiré l'ajout d'une section de commentaire/message sur la page "Nous joindre".

## 2.4 Identité visuelle

### 2.4.1 Le logo
![Logo](https://github.com/AngelWolve/Kemaka-Projet-Web-2/blob/main/public/images/asian-quest-logo.png)

Le logo d'Asian Quest présente le nom du festival, entouré d'un motif elliptique et aux couleurs vives. Le nom "Asian Quest" est écrit avec une police dynamique, mêlant passé et présent dans une ambiance festive.

### 2.4.2 La palette de couleurs

La palette de couleurs du site Web sera basée sur les couleurs traditionnelles japonaises tout en incorporant des nuances modernes et vibrantes. Voici quelques-unes des couleurs que nous envisageons :

- Rose pâle: rappelle les fleurs de cerisier emblématiques du Japon, symbolisant la beauté éphémère.
- Lilas foncé: évoque la douceur de la culture asiatique, ajoutant une touche de charme et d'innocence.
- Violet foncé: apporte une touche de passion et d'énergie à notre festival.
- Bleu: représente la profondeur de la culture japonaise, évoquant les océans et la sérénité.

### 2.4.3 Les typographies

Nous utiliserons des typographies modernes et lisibles pour garantir une expérience utilisateur optimale. Deux typographies principales seront utilisées pour le site Web:

- La police "Montserrat" sera utilisée pour les textes parce qu'elle assure une bonne lisibilité et une facilité de mise à l'échelle.
- La police "Catseye" sera utilisée pour les titres parce qu'elle est plus stylisée et qu'elle a du caractère et du charme.

---

# 3. Choix des technologies

## 3.1 Choix des technologies de développement :

Nous opterons pour des technologies appropriées pour la conception du site, incluant HTML, SCSS, ainsi que des frameworks web contemporains comme Laravel et VueJS.

### 3.1.1 Forces

#### HTML:

- Le langage de base du Web et un choix universel pour la création de pages Web.
- Relativement simple.
- Extensibilité à l’aide de technologies complémentaires telles que CSS et JavaScript.

#### CSS:

- Permet de séparer la structure HTML du style visuel.
- Réutilisation du style sur plusieurs pages.
- Permet de créer des animations et des transitions.

#### Laravel:

- Permet une meilleure organisation et maintenabilité des projets.
- Favorise le travail d’équipe.
- Offre des systèmes de routage, migration et d'authentification.
- Support de la communauté.

#### VueJS:

- Permet de créer des composants réutilisables qui simplifient la gestion de projets.
- Facile à apprendre.

### 3.1.2 Faiblesses

#### HTML:

- Statique par nature.
- Mise en forme limitée.

#### CSS:

- Dépendance à JavaScript.
- Maintenance difficile.

#### Laravel:

- Courbe d’apprentissage élevé.

#### VueJS:

- Flexibilité limitée.
- Difficulté dans la recherche de solutions à des problèmes en raison de la taille de la communauté.

## 3.2 Choix et organisation des technologies de planification:

Nous utiliserons le logiciel ClickUp pour la planification et la gestion du projet.

### 3.2.1 Forces

- Flexibilité et polyvalence.
- Permet de prioriser et attribuer les tâches.
- Permet d’avoir une vue du projet de plusieurs façons.

### 3.2.2 Faiblesses

- La courbe d’apprentissage de l’interface utilisateur.
- L’expérience utilisateur est complexe.

##  3.3 Choix et organisation des technologies de gestion

Nous utiliserons GitHub pour la gestion de dépôt et la collaboration entre les membres de l’équipe, et Git comme système de contrôle de version.

### 3.3.1 Forces

GitHub:

- Collaboration en équipe de manière cohérente.
- Suivi des problèmes.
- Communauté active.

Git:

- Rapide, gratuit et "open source".
- Permet de visiter les anciennes versions.
- Permet de comparer les versions d’un projet.
- Permet de partager et combiner des changements.

### 3.3.2 Faiblesses

GitHub:

- Dépendance à une plateforme.
- Défis de gestion pour les grands projets.

Git:

- Interface en ligne de commande et n'est pas idéale pour la gestion des fichiers binaires.

---

# 4. Présentation de la planification du travail synthèse

## 4.1 Lien vers le logiciel de gestion de projet choisi

[ClickUp](https://app.clickup.com/9014035918/v/l/8cmehee-34)

## 4.2 Portrait global

Nous avons adopté une approche méthodique pour la planification de notre projet en le divisant en six phases distinctes. Chaque début de semaine, notre équipe se réunit pour procéder à une évaluation minutieuse de notre progression. Ce processus nous permet d'identifier les points forts et les domaines qui nécessitent une attention particulière. En fonction de ces discussions, nous ajustons notre planification de manière à rester en phase avec l'avancement du projet.

### 4.2.1 Catégories

- Semaine 1
- Semaine 2
- Semaine 3
- Semaine 4
- Semaine 5
- Semaine 6

### 4.2.2 Sous-catégories

- Planification
- Design
- Frontend
- Backend

## 4.3 Apport au travail synthèse de chaque membre de l’équipe (qui fait quoi et quand ?)

Kevin a assumé la direction du projet, supervisant pratiquement toutes les facettes, que ce soit pour la maquette, le développement "frontend" ou "backend". Il a également contribué de manière significative à l'optimisation d'une grande partie du travail, et ce, tout au long du projet.

Masomeh a pris en charge la planification du projet ainsi que la conception de la base de données, en plus d'avoir contribué de manière substantielle tant au "frontend" qu'au "backend". Son implication majeure s'est située au cœur du projet.

Katie a assumé le côté artistique du projet toute en donnant un bon coup de main du coté "frontend" ainsi que "backend", sa charge de travail s'est située au début du projet ainsi qu'à la fin de celui-ci.

## 4.4 Rétroaction globale sur le travail d’équipe (motivation, charge de travail, organisation, problèmes, etc.)

Notre expérience de collaboration sur ce projet Web a été exceptionnelle. L'équipe a démontré un haut niveau de motivation et d'engagement, ce qui a grandement contribué à la réussite du projet. Chacun a su gérer sa charge de travail de manière efficace, en tenant compte des compétences individuelles et des préférences de chacun. L'organisation a été l'un de nos points forts, nous avons su planifier et exécuter les différentes phases du projet avec une fluidité remarquable. Malgré le défi de créer quelque chose de visuellement attrayant, nous avons réussi à maintenir une interface simple et accessible, particulièrement adaptée aux débutants. Les éventuels problèmes ont été abordés avec une approche collaborative et résolus de manière efficace. Dans l'ensemble, le travail d'équipe a été exemplaire, et le projet a abouti à un résultat dont nous sommes tous fiers.
