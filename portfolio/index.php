<?php
require 'header.php';
require 'navbar.php';
?>

<div data-spy="scroll" data-target="#navbar-scroll1" data-offset="0">
    <section id="accueil" class="container-fluid">
        <div class="profile-picture pb-md-3">
            <img src="images/logo.png" alt="My picture" class="img-circle" data-sal-duration="500" data-sal="slide-down" data-sal-delay="300" data-sal-easing="ease">
        </div>
        <div class="heading mt-3">
            <h3 class="pt-3" data-sal-duration="800" data-sal="slide-down" data-sal-delay="400" data-sal-easing="ease">
                Mike Walder</h3>
            <h1 class="pt-md-3 d-none d-sm-block" data-sal-duration="800" data-sal="slide-up" data-sal-delay="800" data-sal-easing="ease">
                Développeur Web et mobile</h1>
        </div>
        <nav class="navbar anim_navbar d-none d-sm-block pt-md-3">
            <ul class="navbar-nav mx-auto" data-sal-duration="800" data-sal="slide-up" data-sal-delay="1000" data-sal-easing="ease">
                <li class="nav-item">
                    <a class="nav-link nav_border h4" href="#about">À propos</a>
                </li>
                <li class="nav-item mt-md-3">
                    <a class="nav-link nav_border h4" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item mt-md-3">
                    <a class="nav-link nav_border h4" href="#contact">Contact</a>
                </li>
                <li class="nav-item mt-md-3">
                    <a class="nav-link nav_border h4" href="CV_2022.pdf" title="Télécharger mon CV" target="_blank"><i class="fas fa-lg fa-file-pdf"></i>CV</a>
                </li>
            </ul>
        </nav>

    </section>

    <section id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 border_style_left pr-md-5 pt-md-2 pb-md-4">
                    <h1 class="font-weight-bold pb-md-3 text-dark" data-sal-duration="600" data-sal="slide-right" data-sal-delay="200" data-sal-easing="ease">
                        À propos
                    </h1>

                    <p>Je me présente, Mike Walder, 33 ans, diplômé d'un <em>master Mécatronique et énergie</em> à l'Université de Strasbourg.</p>
                    <p>Issu du secteur industriel, j'ai amorcé en 2020 une formation en développement web et mobile dans le cadre d'une reconversion professionnelle.</p>
                    <p>Depuis plusieurs années, que ce soit pour des projets industriels ou dans le cadre de mes études, j'ai développé des algorithmes et utilisé des outils et technologies
                        informatique pour résoudre des problématiques précises.</p>
                    <p>J'ai notamment réalisé un site web météorologique en reprenant les bases du développement Web en Front et Back End pour répondre à l'objectif
                        de récupérer des données qui sont affichées en ligne et réactualisées.</p>
                    <p>Fort de cette expérience et de mon habitude de travailler en autodidacte, j'ai ensuite développé des projets web modestes tout en continuant de travailler dans l'industrie.</p>
                    <p class="pb-md-3">Je suis désormais à la recherche d'une opportunité en PHP / Symfony afin d'utiliser et développer mes compétences en développement Web dans le cadre
                        professionnel et le plus important, vous délivrer un travail soigné et des pistes d'améliorations pour les projets que vous me confierez.</p>
                    <p>Voici ce que je vous propose : mettre la technologie et mes compétences au service de votre projet, dans le but d'atteindre vos objectifs personnels en communiquant de façon fluide et efficace.</p>
                </div>

                <div class="col-md-5 border_style_right pt-md-2">
                    <h2 class="font-weight-bold pt-md-3 pb-md-5" data-sal-duration="600" data-sal="slide-left" data-sal-delay="200" data-sal-easing="ease">
                        <i class="fas fa-user-graduate"></i> Formations
                    </h2>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td><i>2020</i></td>
                                <td class="pl-md-5 pr-md-5"></td>
                                <td class="pr-md-3"><span class="font-weight-bold">Web Force 3</span> (Strasbourg 67100)<br>
                                    Formation accélérée en développement Web et mobile d'une durée de 4 mois.</td>
                            </tr>
                            <tr>
                                <td><i>2014</i></td>
                                <td></td>
                                <td class="pr-md-3"><span class="font-weight-bold">Openclassrooms</span> (site Web)<br>
                                    Obtention des certifications HTML5/CSS3 et PHP/MySQL.</td>
                            </tr>
                            <tr>
                                <td><i>2012 - 2014</i></td>
                                <td></td>
                                <td class="pr-md-3"><span class="font-weight-bold">I.P.S.T.</span> (Strasbourg 67100)<br>
                                    Master Mécatronique et énergie</td>
                            </tr>
                            <tr>
                                <td><i>2009 - 2012</i></td>
                                <td></td>
                                <td class="pr-md-3"><span class="font-weight-bold">Université de Strasbourg</span> (67100)<br>
                                    Licence Physique et Ingénierie - Option Ingénierie</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 pb-md-3">
                    <h2 class="font-weight-bold pt-md-5 pb-md-3 pl-md-1" data-sal-duration="600" data-sal="slide-up" data-sal-delay="200" data-sal-easing="ease">
                        Personnalité</h2>
                    <div class="row">
                        <div class="pl-3 col-md-3 border-right" data-sal-duration="600" data-sal="slide-up" data-sal-delay="200" data-sal-easing="ease">
                            <div class="font-weight-bold pl-md-2 quality"><i class="fas fa-brain"></i>Astucieux</div>
                            <div class="pl-md-2 text_quality">Je sais faire preuve d'ingéniosité pour offrir des solutions technologiques
                                dans chaque étape d'un projet.</div>
                        </div>
                        <div class="pl-3 col-md-3 border-right" data-sal-duration="600" data-sal="slide-up" data-sal-delay="200" data-sal-easing="ease">
                            <div class="font-weight-bold pl-md-2 quality"><i class="fas fa-glasses"></i>Curieux</div>
                            <div class="pl-md-2 text_quality">Autodidacte, j'ai suivi plusieurs MOOC (Udemy, OpenClassrooms, ...).<br>
                                J'ai l'habitude de me débrouiller, m'adapter face à des problèmes et surtout chercher des informations en les vérifiant.</div>
                        </div>
                        <div class="pl-3 col-md-3 border-right" data-sal-duration="600" data-sal="slide-up" data-sal-delay="200" data-sal-easing="ease">
                            <div class="font-weight-bold pl-md-2 quality"><i class="fas fa-running"></i>Motivé</div>
                            <div class="pl-md-2 text_quality">Chaque projet informatique est un challenge stimulant qui me permet à ma fois d'améliorer mes compétences tout en
                                répondant à une demande et un cahier des charges précis.</div>
                        </div>
                        <div class="pl-3 col-md-3" data-sal-duration="600" data-sal="slide-up" data-sal-delay="200" data-sal-easing="ease">
                            <div class="font-weight-bold pl-md-3 quality" data-sal-duration="600" data-sal="slide-down" data-sal-delay="200" data-sal-easing="ease">
                                <i class="fas fa-hands-helping"></i>Volontaire et aidant
                            </div>
                            <div class="pl-md-3 text_quality">Souvent je suis force de proposition pour donner des pistes d'amélioration futures. C'est aussi une gratification
                                de donner des astuces et des conseils à un collègue et travailler ainsi dans un esprit de symbiose.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container-fluid">
            <div class="heading_portfolio">
                <h1 class="pb-md-5 disp" data-sal-duration="600" data-sal="slide-down" data-sal-delay="200" data-sal-easing="ease">
                    Réalisations et projets</h1>
            </div>
            <div class="row h-100">
                <div class="d-none d-md-block col-md-1"></div>
                <div class="col-12 col-md-10">
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-3 mt-4">
                            <div class="card bg-light" style="height: 420px;">
                                <div class="card-img-top rounded">
                                    <div id="carouselProject1" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner border-bottom" style="height: 320px;">
                                            <div class="carousel-item active" data-interval="4000">
                                                <img src="images/todolist1.JPG" alt="Affichage général" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                            <div class="carousel-item" data-interval="4000">
                                                <img src="images/todolist2.JPG" alt="Modification d'une tâche" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselProject1" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselProject1" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body text-dark pt-0 mb-0" style="height: 100px;">
                                    <div class="text-center font-weight-bold h4 p-0 m-0">To Do List</div>
                                    <p class="card-text text-white h6"><small>Bootstrap 4, animate CSS, HTML, PHP, SQL</small></p>
                                    <div class="row text-center">
                                        <a class="card-github-link pt-2 col-6" href="https://github.com/MikeWalder/ToDoList-PHP" title="Repo Github" target="_blank">
                                            <i class="fab fa-github fa-2x"></i>
                                        </a>
                                        <a class="card-github-link pt-2 col-6" href="" title="Lien externe" target="_blank">
                                            <i class="fas fa-external-link-alt fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3 mt-4">
                            <div class="card bg-light" style="height: 420px;">
                                <div class="card-img-top rounded">
                                    <div id="carouselProject2" class="carousel slide text-center" data-ride="carousel">
                                        <div class="carousel-inner border-bottom" style="height: 320px;">
                                            <div class="carousel-item active" data-interval="4000">
                                                <img src="images/VueJsCardShopping.PNG" alt="Page principale" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                            <div class="carousel-item" data-interval="4000">
                                                <img src="images/vue_shop_panier.JPG" alt="Panier" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                            <div class="carousel-item" data-interval="4000">
                                                <img src="images/vue_shop_favorites.JPG" alt="Favoris" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselProject2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselProject2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body text-dark pt-0 mb-0" style="height: 100px;">
                                    <div class="text-center font-weight-bold h4 p-0 m-0">FeedAstic</div>
                                    <!-- <p class="card-text">Commande en ligne pour un fast food<br>
                                    Partie user et admin du site</p> -->
                                    <p class="card-text text-white h6"><small>Vue JS, JavaScript, Bootstrap 5</small></p>
                                    <div class="row text-center">
                                        <a class="card-github-link pt-2 col-6" href="https://github.com/MikeWalder/shop-components-vue" title="Repo Github" target="_blank">
                                            <i class="fab fa-github fa-2x"></i>
                                        </a>
                                        <a class="card-github-link pt-2 col-6" href="" title="Lien externe" target="_blank">
                                            <i class="fas fa-external-link-alt fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3 mt-4">
                            <div class="card bg-light" style="height: 420px;">
                                <div class="card-img-top rounded">
                                    <div id="carouselProject3" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner border-bottom" style="height: 320px;">
                                            <div class="carousel-item active" data-interval="4000">
                                                <img src="images/gallery_selection.JPG" alt="Website" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                            <div class="carousel-item" data-interval="4000">
                                                <img src="images/gallery_modification.JPG" alt="Modification d'image" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                            <div class="carousel-item" data-interval="4000">
                                                <img src="images/gallery_dashboard.JPG" alt="Galerie d'images" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselProject3" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselProject3" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body text-dark pt-0 mb-0">
                                    <div class="text-center font-weight-bold h4 p-0 m-0">Image Gallery</div>
                                    <!-- <p class="card-text">Ajouter, modifier, supprimer, trier images<br>
                                    Dashboard (graphes + calendrier)</p> -->
                                    <p class="card-text text-white h6"><small>Bootstrap 4, animate CSS, HTML, CSS, PHP, SQL</small></p>
                                    <div class="row text-center">
                                        <a class="card-github-link pt-2 col-6" href="https://github.com/MikeWalder/Images-Galery-PHP" title="Repo Github" target="_blank">
                                            <i class="fab fa-github fa-2x"></i>
                                        </a>
                                        <a class="card-github-link pt-2 col-6" href="" title="Lien externe" target="_blank">
                                            <i class="fas fa-external-link-alt fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3 mt-4">
                            <div class="card bg-light" style="height: 420px;">
                                <div class="card-img-top rounded">
                                    <div id="carouselProject4" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner border-bottom" style="height: 320px;">
                                            <div class="carousel-item active" data-interval="4000">
                                                <img src="images/API_ygo_1.PNG" alt="Website" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                            <div class="carousel-item" data-interval="4000">
                                                <img src="images/API_ygo_2.PNG" alt="Arduino Uno" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                            <div class="carousel-item" data-interval="4000">
                                                <img src="images/API_ygo_3.PNG" alt="Station Davis Vantage Pro 2" class="img-fluid" style="width: 100%; height: 320px;">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselProject4" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselProject4" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body text-dark pt-0 mb-0 texter">
                                    <div class="text-center font-weight-bold h4 p-0 m-0">API Yu-Gi-Oh</div>
                                    <!-- <p class="card-text">Banque de données de cartes<br>
                                    Tri et détail de chaque carte (appels d'API)</p> -->
                                    <p class="card-text text-white h6"><small>Bootstrap 5, Javascript, HTML, CSS</small></p>
                                    <div class="row text-center">
                                        <a class="card-github-link pt-2 col-6" href="https://github.com/MikeWalder/YGO-database-JS-API" title="Repo Github" target="_blank">
                                            <i class="fab fa-github fa-2x"></i>
                                        </a>
                                        <a class="card-github-link pt-2 col-6" href="" title="Lien externe" target="_blank">
                                            <i class="fas fa-external-link-alt fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 pr-md-4 pb-lg-2">
                    <div class="header">
                        <h2 class="" data-sal-duration="600" data-sal="slide-down" data-sal-delay="200" data-sal-easing="ease">
                            <i class="fas fa-address-card"></i>Me contacter
                        </h2>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3 border_style_left"></div>
                <div class="col-md-3 border_style_right"></div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center pt-md-2" data-sal-duration="600" data-sal="slide-down" data-sal-delay="200" data-sal-easing="ease">
                    <button class="btn btn_style btn-lg text-center mt-3 mb-3"><a href="mailto:mike_walder@hotmail.fr" style="color: #fff">Via votre messagerie</a></button>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
</div>
</section>
</div>


<script src="dist/sal.js"></script>
<script src="js/script.js"></script>

<script>
    sal({
        threshold: 1,
        once: false,
    });
</script>