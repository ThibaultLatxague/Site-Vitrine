<!DOCTYPE html>
<html lang="fr">

<?php
require_once 'fonctions.php';
require_once 'bd.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Site Vitrine Thibault Latxague</title>

    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/creative-studio.css">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page de navigation -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand ml-auto" href="#home">
                <img src="images/logo.png" alt="Logo Thibault Latxague">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>
            <!-- Génération de la barre de navigation -->
            <?= genererNavBar() ?>
        </div>
    </nav>
    <!-- Fin de page de nav -->

    <!-- Génération du header -->
    <?= genererHeader() ?>
    <!-- Fin header -->

    <!-- Debut 3 box de compétences -->
    <?php
    // Connexion à la base de données
    $conn = connectionBD();
    // Requête SQL pour récupérer les compétences
    $sql = "SELECT * FROM competences";
    $result = $conn->query($sql); ?>
    <!-- Compétences principales -->
    <div class="box text-center">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="box-item">
                <img src="<?=$row['image']?>" alt="<?=$row['nom']?>" class="img-fluid mb-3" style="max-height: 200px; max-width: 200px;">
                <h6 class="box-title"><?=htmlspecialchars($row['nom'])?></h6>
                <p><?=htmlspecialchars($row['description'])?></p>
            </div>
        <?php endwhile; ?>
    </div>
    <!-- Fin 3 box de compétences -->

    <!-- Section de mon profil -->
    <?= genererProfil() ?>
    <!-- Fin de la section profil -->

    <!-- Section Mes Compétences -->
    <section id="service">
        <div class="container">
            <!-- <h6 class="section-subtitle text-center">FF</h6> -->
            <h5 class="section-title text-center mb-6">Mes compétences</h5>
            <div class="row">
            <?php
            // Connexion à la base de données
            $conn = connectionBD();

            // Requête SQL pour récupérer les langages
            $sql = "SELECT * FROM langages";
            $result = $conn->query($sql);

            // Vérifie si des résultats existent
            if ($result->num_rows > 0) {
                // Parcours des résultats
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-sm-4 col-md-3">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <!-- Image -->
                                <img src="<?=$row['image']?>" alt="<?=$row['nom']?>" class="img-fluid mb-3" style="max-height: 50px; max-width: 50px;">
                                <!-- Nom -->
                                <h6 class="card-title"><?=$row['nom']?></h6>
                                <!-- Description -->
                                <p class="card-text"><?=$row['description']?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>Aucun langage trouvé.</p>";
            }
            // Fermeture de la connexion
            $conn->close();
            ?>
        </div>
        </div>

        <!-- CV -->
        <div class="text-center mt-5">
            <!-- Lien vers le CV avec une image -->
            <a href="images/CV_Thibault_Latxague.png" target="_blank">
                <img src="images/CV_Thibault_Latxague.png" alt="Voir le CV" class="img-fluid" style="max-width: 600px;">
            </a>
            <!-- Bouton pour télécharger le CV -->
            <div class="mt-3">
                <a href="images/CV_Thibault_Latxague.pdf" download class="btn btn-primary">Télécharger le CV</a>
            </div>
        </div>

    </section>
    <!-- Fin de la section mes compétences -->

    <!-- Portfolio Section -->
    <section id="portfolio">
        <div class="container text-center">
            <h6 class="section-subtitle">Mes différents projets</h6>
            <h6 class="section-title mb-5">Mon Portfolio</h6>
            <div class="row">
            <?php
            // Connexion à la base de données
            $conn = connectionBD();
            
            // Requête SQL pour récupérer les projets
            $sql = "SELECT * FROM projets";
            $result = $conn->query($sql);

            // Vérifie si des projets existent dans la base
            if ($result->num_rows > 0) {
                $colCount = 0; // Compteur pour gérer les colonnes
                
                // Parcours des résultats
                while ($row = $result->fetch_assoc()) {
                    // Début d'une nouvelle colonne toutes les 2 cartes
                    if ($colCount % 2 == 0) {
                        if ($colCount > 0) echo '</div>'; // Ferme la colonne précédente
                        echo '<div class="col-sm-4">';
                    }
                    
                    // Génération d'une carte avec les données du projet
                    genererCartePortfolio($row['image'], $row['nom'], $row['id']);
                    
                    // Ajout de la modale correspondante
                    ?>
                    <!-- Section fenetres modales -->
                    <div class="modal fade fenetre" id="fenetreModale<?=$row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg"> <!-- Utilisation d'une modale large -->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?=$row['nom'] ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center"> <!-- Centrer le contenu -->
                                        <img src="<?=$row['image'] ?>" alt="Alt image" class="img-fluid mb-3" style="max-height: 300px;"> <!-- Image responsive -->
                                    </div>
                                    <p><strong>Description:</strong> <?=$row['description'] ?></p>
                                    <p><strong>Date de début:</strong> <?=$row['date_debut'] ?></p>
                                    <p><strong>Date de fin:</strong> <?=$row['date_fin'] ?></p>
                                    <p><strong>Lien d'accès:</strong>
                                    <?php if ($row['lien'] == "Aucun") {
                                        echo "<p>Aucun lien disponible.</p>";
                                    } else {
                                        echo '<p><a href="'.$row['lien'].'">'.$row['nom'].'</a></p>'; } ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin de section des fenetres modales -->
                    <?php
                    
                    $colCount++;
                }
                
                // Ferme la dernière colonne
                if ($colCount > 0) echo '</div>';
            } else {
                echo "<p>Aucun projet trouvé.</p>";
            }

            // Fermeture de la connexion
            $conn->close();
            ?>
        </div>
        </div>
    </section>
    <!-- End of portfolio section -->

    <!-- Contact Section -->
    <?= genererContact() ?>
    <!-- Contact Section -->

    <!-- Section footer -->
    <?= genererFooter() ?>
    <!-- Section footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <!-- Bootstrap JS (with Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Creative Studio js -->
    <script src="assets/js/creative-studio.js"></script>

</body>

</html>