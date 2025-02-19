<?php

function genererNavBar() {
    echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>';
}

function genererHeader() {
    echo '<header class="header">
        <div class="overlay">
            <h6 class="subtitle">Site Vitrine</h6>
            <h1 class="title">Thibault Latxague</h1>
            <div class="buttons text-center">
                <a href="#service" class="btn btn-primary rounded w-lg btn-lg my-1">Mes Compétences</a>
                <a href="#contact" class="btn btn-outline-light rounded w-lg btn-lg my-1">Me contacter</a>
            </div>
        </div>
    </header>';
}

function genererProfil() {
    echo '<section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-4">
                    <img src="images/photoSiteVitrine.png" alt="Photo de profil" class="w-100 img-thumbnail mb-3">
                </div>
                <div class="col-md-7 col-lg-8">
                    <h6 class="section-title mb-3">Thibault LATXAGUE</h6>
                    <p>Je suis étudiant en 2ème année au BUT Informatique à l\Université de Pau et des Pays de L\'adour (site d\'anglet)</p>
                    <p>Je suis actuellement à la recherche d\'un stage dans le domaine de l\'informatique du 7 avril au 13 juin 2025. <br>Si possible, je préfererai travailler dans le développement web ou logiciel.</p>
                    <div class="socials">
                        <a href="https://www.linkedin.com/in/thibault-latxague-7a6a102b3/"><i class="ti-linkedin"></i> </a>
                        <a href="https://github.com/ThibaultLatxague"><i class="ti-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>';
}

function genererContact() {
    echo '    <section id="contact">
        <div class="container">
            <div class="contact-card">
                <div class="infos">
                    <!-- SOUS TITRE - QUE METTRE ? -->
                    <!-- <h6 class="section-subtitle">Get Here</h6> -->
                    <h6 class="section-title mb-4">Me contacter</h6>
                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>Adresse</h5>
                            <p>30 rue de la Fabrique, Boucau, 64340</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>Numéro de téléphone</h5>
                            <p>(+33) 6 37 07 41 42</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Adresse mail</h5>
                            <p>thibault.latxague@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h6 class="section-title mb-4">Contact</h6>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Adresse mail" required>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" id="" cols="30" rows="7"
                                class="form-control form-control-lg" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>';
}

function genererFooter() {
    echo '    <section class="has-bg-img py-0">
        <div class="container">
            <div class="footer">
                <div class="footer-lists">
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">A PROPOS</h6>
                        </li>
                        <li class="list-body">
                            <a href="#" class="logo">
                                <img src="images/logo.png" alt="Logo Thibault Latxague">
                                <h6>Thibault Latxague</h6>
                            </a>
                            <p>Etudiant au BUT Informatique à Anglet</p>
                            <p class="mt-3">
                                Copyright
                                <script>document.write(new Date().getFullYear())</script> &copy; <a
                                    class="d-inline text-primary" href="http://www.devcrud.com">Thibault Latxague</a>
                            </p>
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">LIENS UTILES</h6>
                        </li>
                        <li class="list-body">
                            <div class="row">
                                <div class="col">
                                    <a href="#about">A Propos</a>
                                    <a href="#portfolio">Portfolio</a>
                                </div>
                                <div class="col">
                                    <a href="#home">Accueil</a>
                                    <a href="#contact">Contact</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">INFOS CONTACT</h6>
                        </li>
                        <li class="list-body">
                            <p>Intéressé par mon profil ? Contactez-moi !</p>
                            <p><i class="ti-location-pin"></i>30 rue de la Fabrique, Boucau, 64340</p>
                            <p><i class="ti-email"></i>thibault.latxague@gmail.com</p>
                            <div class="social-links">
                                <a href="https://www.linkedin.com/in/thibault-latxague-7a6a102b3/" class="link"><i class="ti-linkedin"></i></a>
                                <a href="https://github.com/ThibaultLatxague" class="link"><i class="ti-github"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>';
}

function genererCartePortfolio($image, $titre, $id) {
    echo '<div class="img-wrapper">
            <img src="'.$image.'" alt="">
            <div class="overlay">
                <div class="overlay-infos">
                    <h5>'.$titre.'</h5>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#fenetreModale'.$id.'">Details</button></button>
                </div>
            </div>
        </div>';
}