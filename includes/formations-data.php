<?php

// Tableau contenant les couleurs des buttons des formations
$colors = Array("blue", "red", "brown");

$sectionsNames = Array("Formation pour débutant", "Formation avancée", "Formation professionnelle");

// Tableau contenant les formations disponibles
$formations = Array(
    // Formation Béreautique
    "bereautique" => Array(
        "image" => "/assets/images/bereautique.png",
        "titre" => "Formation Béreautique",
        "caption" => "Maîtrisez les outils bureautiques comme Word, Excel et PowerPoint pour optimiser votre productivité.",
        "description" => "La formation bureautique est conçue pour ceux qui souhaitent acquérir des compétences essentielles en informatique de bureau, notamment dans l'utilisation de logiciels de traitement de texte, de tableurs et de présentations.",
        "sections" => Array(
            Array(
                "titre" => "Introduction à Microsoft Office (Word, Excel, PowerPoint)",
                "programme" => "Cette section s'adresse aux débutants absolus qui ont peu ou pas d'expérience avec les logiciels de bureautique. Elle couvre les bases de Microsoft Office, y compris Word pour la création de documents, Excel pour les calculs et PowerPoint pour les présentations.",
                "tarifs" => "12000DA pour 10 sessions de formation",
            ),
            Array(
                "titre" => "Approfondissement des fonctionnalités avancées de Microsoft Excel",
                "programme" => "Cette section approfondit les compétences des participants dans l'utilisation avancée d'Excel, en mettant l'accent sur les formules complexes, les graphiques et les tableaux croisés dynamiques. Elle vise à renforcer leur productivité dans un environnement de bureau.",
                "tarifs" => "25000DA pour 15 sessions de formation",
            ),
            Array(
                "titre" => "Utilisation avancée de Microsoft PowerPoint pour les présentations professionnelles",
                "programme" => "Cette section est destinée à ceux qui cherchent à perfectionner leurs compétences existantes en bureautique. Elle aborde des sujets avancés tels que la création de modèles dans Word, l'automatisation des tâches dans Excel et la conception de présentations dynamiques dans PowerPoint.",
                "tarifs" => "19000DA pour 12 sessions de formation",
            )
        )
    ), 

    // Formation CyberSecurity
    "cybersecurity" => Array(
        "image" => "/assets/images/cyber-security.jpeg",
        "titre" => "Formation CyberSecurity",
        "caption" => "Apprenez à protéger les systèmes informatiques et les réseaux contre les cybermenaces.",
        "description" => "La formation en cybersécurité vise à sensibiliser les participants aux menaces informatiques modernes et à leur apprendre à protéger efficacement les données et les réseaux contre les cyberattaques.",
        "sections" => Array(
            Array(
                "titre" => "Introduction à la sécurité informatique et gestion des mots de passe",
                "programme" => "Cette section offre une introduction complète à la sécurité informatique, couvrant des sujets tels que la gestion des mots de passe, la protection contre les logiciels malveillants et les bonnes pratiques de sécurité en ligne.",
                "tarifs" => "19000DA pour 8 sessions de formation",
            ),
            Array(
                "titre" => "Sécurité des réseaux et détection des menaces",
                "programme" => "Cette section approfondit les compétences des participants en matière de sécurité des réseaux, en abordant des concepts tels que la configuration des pare-feu, la détection des intrusions et la réponse aux incidents de sécurité.",
                "tarifs" => "35000DA pour 12 sessions de formation",
            ),
            Array(
                "titre" => "Gestion des incidents de sécurité et analyse forensique",
                "programme" => "Cette section se concentre sur des aspects avancés de la cybersécurité, tels que l'analyse forensique, la gestion des incidents de sécurité et la protection des données sensibles. Elle prépare les participants à faire face à des menaces complexes et en constante évolution.",
                "tarifs" => "50000DA pour 15 sessions de formation",
            )
        )
    ), 

    // Formation Réparation Des Téléphones
    "phonerepair" => Array(
        "image" => "/assets/images/repair.jpg",
        "titre" => "Formation Réparation Des Téléphones",
        "caption" => "Acquérez les compétences pour diagnostiquer et réparer les smartphones.",
        "description" => "La formation en réparation de téléphones forme les participants à diagnostiquer et à réparer efficacement les problèmes matériels et logiciels courants rencontrés dans les smartphones.",
        "sections" => Array(
            Array(
                "titre" => "Introduction aux principes de base de la réparation des téléphones",
                "programme" => "Cette section fournit une introduction pratique à la réparation des téléphones, en enseignant aux participants les compétences de base telles que le remplacement de l'écran, la réparation des boutons et la résolution des problèmes de batterie.",
                "tarifs" => "12000DA pour 6 sessions de formation",
            ),
            Array(
                "titre" => "Réparation avancée des smartphones et remplacement des composants",
                "programme" => "Cette section approfondit les connaissances des participants en matière de réparation de téléphones en abordant des sujets plus avancés tels que le remplacement des composants internes, la réparation des circuits imprimés et la résolution des problèmes de logiciels.",
                "tarifs" => "30000DA pour 10 sessions de formation",
            ),
            Array(
                "titre" => "Diagnostic approfondi des pannes matérielles et logicielles",
                "programme" => "Cette section vise à perfectionner les compétences des participants dans le diagnostic des pannes complexes, la réparation avancée des smartphones haut de gamme et la gestion des défis liés à la maintenance des téléphones modernes.",
                "tarifs" => "35000DA pour 12 sessions de formation",
            )
        )
    )
);
