<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include "components/php/includes/head.php";
    ?>
</head>

<body>
    <!-- HEADER -->
    <header>
        <?php
        include "components/php/includes/header.php";
        ?>
    </header>
    <!-- SLOGAN -->
    <section id="slogan">
        <div class="container">
            <div id="slogan-content">
                <div id="slogan-title">
                    <h1><span>T</span>axi</h1>
                </div>
                <div id="slogan-text">
                    <p>Ponctualité<br>Sécurité</p>
                </div>
            </div>
        </div>
    </section>
    <!-- CALL US -->
    <section id="call-us">
        <div class="container">
            <div id="call-us-row">
                <div>
                    <img src="assets/images/smartphone.png" alt="Image smartphone">
                </div>
                <div id="call-us-text">
                    <p class="lead1">
                        <strong>Contactez nous</strong> 24h/24h
                    </p>
                    <p class="lead2">07 66 46 54 72</p>
                </div>
            </div>
        </div>
    </section>
    <!-- SOCIAL PROOF -->
    <section id="social-proof">
        <div class="container">
            <div id="social-proof-container">
                <div class="social-proof-row" id="social-proof-first-row">
                    <div class="social-proof-content">
                        <div class="social-proof-content-img">
                            <img src="assets/images/compteur.png" alt="Image compteur">
                        </div>
                        <div class="social-proof-content-text">
                            <p>
                                <strong>Rapide &</strong><br>sécurisé
                            </p>
                        </div>
                    </div>
                    <div class="social-proof-content">
                        <div class="social-proof-content-img">
                            <img src="assets/images/like.png" alt="Image pouce en l'air">
                        </div>
                        <div class="social-proof-content-text">
                            <p>
                                <strong>Meilleurs</strong><br>prix
                            </p>
                        </div>
                    </div>
                </div>
                <div class="social-proof-row">
                    <div class="social-proof-content">
                        <div class="social-proof-content-img">
                            <img src="assets/images/taxiIcon.png" alt="Image taxi">
                        </div>
                        <div class="social-proof-content-text">
                            <p>
                                <strong>Voitures</strong><br>luxueuses
                            </p>
                        </div>
                    </div>
                    <div class="social-proof-content">
                        <div class="social-proof-content-img">
                            <img src="assets/images/valise.png" alt="Image valise">
                        </div>
                        <div class="social-proof-content-text">
                            <p>
                                <strong>Livraison</strong><br>colis
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div id="about-title">
                <h2><strong>A propos</strong> de l'entreprise</h2>
            </div>
            <div id="about-subtitle">
                <h4>LOREM IPSUM DOLOR SIT AMET CONSE CTETUR ADIPISICING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE
                    ET DOLORE MAGNA ALIQUA.
                    UT ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCITATION ULLAMCO.</h4>
            </div>
            <div id="about-row">
                <div class="about-text">
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nos- trud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint
                        occaecat</p>
                </div>
                <div class="about-text">
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nos- trud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint
                        occaecat</p>
                </div>
            </div>
            <button type="button" onclick="window.location.href='infos/'" id="read-more-button">Plus d'infos</button>
        </div>
    </section>
    <!-- MAP INFOS -->
    <section id="map-infos">
        <div class="container">
            <div class="map-title">
                <h2><strong>Map</strong> Info</h2>
            </div>
            <div id="map-infos-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2897.5895839738487!2d1.3464640153768423!3d43.42740097912968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aec93915f0ff5d%3A0xdae0cbb8d330742b!2sTAXIS%20LLORENS!5e0!3m2!1sfr!2sfr!4v1580636481008!5m2!1sfr!2sfr" width="1170" height="415" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div id="map-infos-icon-container">
                <div id="map-infos-icon-container-wrap">
                    <div class="map-infos-icon-container-content">
                        <div class="map-infos-icon-container-content-img">
                            <img src="../assets/images/home.png" alt="Image maison">
                        </div>
                        <div class="map-infos-icon-container-content-text">
                            <p class="map-infos-lead">4 Impasse de la Croix Rouge, 31600 Eaunes</p>
                        </div>
                    </div>
                    <div class="map-infos-icon-container-content">
                        <div class="map-infos-icon-container-content-img">
                            <img src="../assets/images/phone2.png" alt="Image téléphone">
                        </div>
                        <div class="map-infos-icon-container-content-text">
                            <p class="map-infos-lead">07 66 46 54 72<br>06 43 12 39 38</p>
                        </div>
                    </div>
                    <div class="map-infos-icon-container-content">
                        <div class="map-infos-icon-container-content-img">
                            <img src="../assets/images/mail.png" alt="Image enveloppe">
                        </div>
                        <div class="map-infos-icon-container-content-text">
                            <p class="map-infos-lead"><a data-action="mail" href="mailto:llorenstaxi@gmail.com">llorenstaxi@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEEDBACK -->
    <section id="feedback">
        <div class="container">
            <div class="feedback-title">
                <h2><strong>Vos retours</strong></h2>
            </div>
            <div id="feedback-contact-wrap">
                <form action="contact.php" method="post">
                    <input class="feedback-formulaire" type="text" name="nom" placeholder="Nom" required="">
                    <input class="feedback-formulaire" type="text" name="prenom" placeholder="Prénom" required="">
                    <input class="feedback-formulaire" type="email" name="mail" placeholder="Email" required="">
                    <input class="feedback-formulaire" type="text" name="phoneNumber" placeholder="Numéro de téléphone" required="">
                    <textarea class="feedback-formulaire" name="message" placeholder="Votre message" rows="15" required=""></textarea>
                    <button type="submit" name="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer>
        <?php
        include "components/php/includes/footer.php";
        ?>
    </footer>
    <script src="https://kit.fontawesome.com/e6c2645393.js" crossorigin="anonymous"></script>
</body>

</html>