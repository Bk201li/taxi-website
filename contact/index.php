<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Taxi Llorens</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div id="header-logo">
            <p><span>T</span>axi</p>
        </div>
        <nav id="header-nav">
            <ul>
                <li><a href="../">Accueil</a></li>
                <li><a href="../services/">Services</a></li>
                <li><a href="../infos/">Infos</a></li>
                <li><a class="active" href="#">Contact</a></li>
            </ul>
        </nav>
        <div id="header-row">
            <div>
                <a href="tel:0766465472"><img src="../assets/images/phone.png" alt="Image téléphone"></a>
            </div>
            <div>
                <a href="tel:0766465472"><p>07 66 46 54 72</p></a>
            </div>
        </div>
        <!-- RESPONSIVE MENU -->
        <div class="menu-wrap">
            <input type="checkbox" class="toggler">
            <div class="hamburger"><div></div></div>
                <div class="menu">
                    <div>
                        <div>
                            <ul>
                                <li><a href="../">Accueil</a></li>
                                <li><a href="../services/">Services</a></li>
                                <li><a href="../infos/">Infos</a></li>
                                <li><a class="active" href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </header>
    <!-- CONTACT INFOS -->
    <section id="contactInfos">
        <div class="container">
            <div class="title">
                <h2><strong>Contact</strong> Info</h2>
            </div>
            <div id="contactInfos-maps-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2897.5895839738487!2d1.3464640153768423!3d43.42740097912968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aec93915f0ff5d%3A0xdae0cbb8d330742b!2sTAXIS%20LLORENS!5e0!3m2!1sfr!2sfr!4v1580636481008!5m2!1sfr!2sfr" width="1170" height="415" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div id="contactInfos-text">
                <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat. Lorem ipsum 
                    dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus 
                    porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla 
                    dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. 
                    Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer 
                    adipiscing elit. Mauris fermentum dictum magna.
                </p>
            </div>
            <div id="contactInfos-icon-container">
                <div id="contactInfos-icon-container-wrap">
                    <div class="contactInfos-icon-container-content">
                        <div class="contactInfos-icon-container-content-img">
                            <img src="../assets/images/home.png" alt="Image maison">
                        </div>
                        <div class="contactInfos-icon-container-content-text">
                            <p class="lead">4 Impasse de la Croix Rouge, 31600 Eaunes</p>
                        </div>
                    </div>
                    <div class="contactInfos-icon-container-content">
                        <div class="contactInfos-icon-container-content-img">
                            <img src="../assets/images/phone2.png" alt="Image téléphone">
                        </div>
                        <div class="contactInfos-icon-container-content-text">
                            <p class="lead">07 66 46 54 72<br>06 43 12 39 38</p>
                        </div>
                    </div>
                    <div class="contactInfos-icon-container-content">
                        <div class="contactInfos-icon-container-content-img">
                            <img src="../assets/images/mail.png" alt="Image enveloppe">
                        </div>
                        <div class="contactInfos-icon-container-content-text">
                            <p class="lead"><a data-action="mail" href="mailto:llorenstaxi@gmail.com">llorenstaxi@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEEDBACK -->
    <section id="feedback">
        <div class="container">
            <div class="title">
                <h2><strong>Vos retours</strong></h2>
            </div>
            <div id="contact-wrap">
                <form action="contact.php" method="post">
                    <input class="formulaire" type="text" name="nom"placeholder="Nom" required="">
                    <input class="formulaire" type="text" name="prenom" placeholder="Prénom" required="">
                    <input class="formulaire" type="email" name="mail" placeholder="Email" required="">
                    <input class="formulaire" type="text" name="phoneNumber" placeholder="Numéro de téléphone" required="">
                    <textarea class="formulaire" name="message" placeholder="Votre message" rows="15" required=""></textarea>
                    <button type="submit" name="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div id="footer-wrap">
                <div id="footer-logo">
                    <p><span>T</span>axi</p>
                </div>
                <div id="footer-socialMedias">
                    <a href="https://www.google.fr/maps/place/TAXIS+LLORENS/@43.427401,1.346464,17z/data=!3m1!4b1!4m5!3m4!1s0x12aec93915f0ff5d:0xdae0cbb8d330742b!8m2!3d43.427401!4d1.3486527" target="_blank">
                        <div id="footer-socialMedias-circle">
                            <i class="fab fa-google"></i>
                        </div>
                    </a>
                </div>
                <div id="footer-copyright">
                    <p>Taxi Llorens © 2020.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/e6c2645393.js" crossorigin="anonymous"></script>
</body>
</html>