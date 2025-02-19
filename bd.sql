create table projets (
    id int not null auto_increment,
    nom varchar(255) not null,
    description varchar(255) not null,
    image varchar(100) not null,
    date_debut varchar(255) not null,
    date_fin varchar(255) not null,
    lien varchar(2550),
    primary key (id)
);

create table competences(
    id int not null auto_increment,
    nom varchar(255) not null,
    description varchar(225) not null,
    image varchar(100) not null,
    primary key (id)
);

create table langages(
    id int not null auto_increment,
    nom varchar(255) not null,
    description varchar(225) not null,
    image varchar(100) not null,
    primary key (id)
);

INSERT INTO projets (nom, description, image, date_debut, date_fin, lien) 
VALUES 
('Lecteur de Diaporama', 
'Ce projet consiste en la réalisation d\'une application de visualisation de diaporamas interactifs. Il permet de défiler des images avec des boutons de navigation (Précédent, Suivant) et propose également un mode diaporama automatique via des boutons spécifiques. Chaque image peut être associée à des informations textuelles, telles que le titre et le nombre d\'éléments affichés. Le projet a été développé avec une interface utilisateur intuitive, permettant une expérience utilisateur fluide, en utilisant le modèle MVP (Modèle Vue Présentation).',
'images/portfolioDeveloppement.png', 
'21-03-2024', 
'06-05-2024',
'https://github.com/astor5/LecteurDiaporama'),
('Application Web : TimeHarmony', 
'TimeHarmony est une application Web conçue pour faciliter la coordination des emplois du temps de plusieurs utilisateurs. Grâce à cette solution, il est possible de combiner plusieurs plannings afin d\'identifier rapidement des créneaux horaires disponibles pour tous. Le projet a été développé en utilisant les technologies suivantes : HTML, CSS, PHP, Twig et Bootstrap, en suivant une architecture MVC. L\'interface est intuitive et ergonomique, offrant une expérience utilisateur optimale pour la gestion et la visualisation des emplois du temps.',
'images/portfolioTH.png', 
'12-10-2024', 
'Aujourd\'hui',
'https://github.com/masson-rafael/TimeHarmony'),
('Création et configuration de réseaux', 
'Ce projet porte sur la création et la configuration de réseaux informatiques incluant la conception de sous-réseaux adaptés à différents besoins. Le réseau a été divisé en plusieurs sous-réseaux pour segmenter les départements (administratif, entrepôt, et serveur). Les fonctionnalités suivantes ont été implémentées : 
- Configuration de sous-réseaux avec une plage d\'adresses IP adaptée à chaque usage.
- Mise en place de règles de filtrage avec iptables pour restreindre l\'accès à certaines adresses IP.
- Configuration d\'un serveur DHCP pour l\'attribution dynamique des adresses IP aux machines.
L\'architecture réseau a été optimisée pour garantir la sécurité, la disponibilité et la performance.',
'images/portfolioReseau.png', 
'02-04-2024', 
'07-06-2024',
'Aucun'),
('Création d\'un programme statistique', 
'Ce projet consiste en la récupération et le traitement de données issues de fichiers CSV pour réaliser des analyses statistiques. Les fonctionnalités implémentées incluent : 
- Récupération et manipulation des données à partir d\'un fichier CSV en utilisant Python.
- Traitements statistiques avancés avec la bibliothèque Pandas (moyenne, médiane, écarts-types, etc.).
- Création de tableaux de données structurés pour faciliter la compréhension et l\'analyse des informations.
- Génération automatique de graphiques pour la visualisation des résultats obtenus (courbes, histogrammes, et diagrammes). 
Ce projet met en avant l\'utilisation de Python pour le traitement de données et la présentation visuelle des statistiques.',
'images/portfolioStats.png', 
'15-01-2024', 
'19-03-2024',
'https://github.com/ThibaultLatxague/S2.04'),
('Algorithmes de recherche de plus court chemin', 
'Ce projet a pour objectif la mise en place d\'algorithmes de recherche de plus court chemin sur une carte réelle de la ville de Bayonne. 
Les étapes et fonctionnalités clés incluent : 
- Scraping d\'un site web pour récupérer les rues et les points d\'intérêt de Bayonne.
- Modélisation du réseau routier sous forme de graphe, avec calcul des poids associés aux chemins (distances, temps de trajet).
- Implémentation des algorithmes de plus court chemin suivants en Python :
- Bellman-Ford
- Ballman-Ford-Kalaba
- Dijkstra
- Représentation graphique interactive sur une carte de Bayonne, incluant :
- Coloration dynamique des chemins optimaux trouvés par les algorithmes.
- Placement visuel des points de départ et d\'arrivée pour une meilleure compréhension.
Ce projet démontre une expertise en algorithmique, en traitement de graphes et en visualisation des données géospatiales.',
'images/portfolioOptimisation.png', 
'09-05-2024', 
'13-06-2024',
'https://github.com/masson-rafael/Graphes'),
('Rédaction d\'un cahier des charges fonctionnel (CDCF)', 
'Ce projet concerne la rédaction complète du Cahier des Charges Fonctionnel (CDCF) de l\'application Time Harmony. Ce document structuré permet de cadrer le développement de l\'application et d\'en anticiper les besoins fonctionnels, techniques et économiques. 
Les principaux éléments inclus dans le CDCF sont :
- Prévision des coûts : Estimation budgétaire pour le développement et la maintenance de l\'application.
- Planification : Organisation du projet avec une répartition détaillée sur plusieurs semestres.
- Technologies utilisées : Identification et justification des choix techniques tels que HTML, CSS, PHP, Twig, Bootstrap et l\'architecture MVC
- Diagrammes UML : Création des diagrammes suivants :
- Diagramme de cas d\'utilisation
- Diagramme de classes
- Diagramme de séquence
- Besoins fonctionnels et non fonctionnels : Définition précise des attentes pour l\'interface utilisateur, les fonctionnalités clés et la performance.

Ce projet met en avant des compétences en gestion de projet, en formalisation des besoins via des outils standards (UML) et en anticipation des contraintes techniques et budgétaires pour une application Web.',
'images/portfolioGP.jpg', 
'13-12-2023', 
'23-05-2024',
'https://drive.google.com/drive/folders/1W3dbXHptt8F_qkox4gqqxUqJAhevr0Yh?usp=sharing');

insert into competences (nom, description, image) values
('Développement', 'Développeur dans de nombreux langages de programmation qui me permet de m\'adapter à toute situation', 'images/dev.png'),
('Optimisation', 'Optimisation d\'applications pour une meilleure fluidité et une exécution plus rapide', 'images/optimisation.png'),
('Gestion de projets', 'Mise en place de rituels de Gestion de Projet notamment Agile pour mener un projet à bien', 'images/gp.png');

INSERT INTO langages (nom, description, image) VALUES
('Java', 'Langage orienté objet, populaire pour les applications web et mobiles. Appris lors de la création de Design Patterns.', 'images/java.png'),
('Python', 'Langage polyvalent et facile à apprendre, idéal pour le web et la data science notamment les statistiques ou la cryptographie.', 'images/python.png'),
('SQL', 'Langage pour manipuler et interroger des bases de données relationnelles.', 'images/sql.png'),
('HTML/CSS', 'Technologies de base pour structurer et styliser les pages web.', 'images/htmlcss.png'),
('JavaScript', 'Langage dynamique pour le développement web interactif.', 'images/js.png'),
('PHP', 'Langage côté serveur utilisé pour développer des applications web dynamiques.', 'images/php.png'),
('UML', 'Standard de modélisation pour concevoir et documenter les systèmes logiciels, notamment les diagrammes de classes et objets.', 'images/uml.png'),
('C++', 'Langage orienté objet performant, utilisé pour les systèmes et les jeux vidéo, utilisé pour la création de logiciels sous Qt.', 'images/cpp.png'),
('C#', 'Langage de Microsoft, idéal pour le développement d\'applications Windows et Unity, utilisé pour mon jeu Space Defenders.', 'images/csharp.png'),
('Lua', 'Langage léger et rapide, utilisé pour les scripts embarqués et les jeux vidéo, utilisé lors de la création d\'un mode du jeu Factorio.', 'images/lua.png'),
('Twig', 'Moteur de template PHP pour un rendu rapide et sécurisé des pages HTML.', 'images/twig.png'),
('Qt', 'Framework pour développer des interfaces graphiques et applications multi-plateformes. Utilisé pour créer un lecteur de diaporama.', 'images/qt.png'),
('C', 'Langage performant pour la programmation système et embarquée, processus, threads et sémaphores.', 'images/c.png'),
('Bash', 'Langage de script puissant pour l\'automatisation sous Linux/Unix.', 'images/bash.png'),
('Git', 'Outil de gestion de version décentralisé pour le suivi des modifications de code.', 'images/git.png'),
('PL/SQL', 'Extension de SQL pour les scripts complexes dans les bases Oracle.', 'images/plsql.png'),
('ADO/DAO', 'Outils pour l\'accès aux bases de données avec les technologies Microsoft.', 'images/adodao.png');