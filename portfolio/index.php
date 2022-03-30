<?php
require 'header.php';
require 'navbar.php';
?>

<div data-spy="scroll" data-target="#navbar-scroll1" data-offset="0">
    <section id="accueil" class="container-fluid">
        <div class="profile-picture pb-md-5">
            <img src="images/logo.png" alt="My picture" class="img-circle pb-md-5" data-sal-duration="500" data-sal="slide-down" data-sal-delay="300" data-sal-easing="ease">
        </div>
        <div class="heading d-none d-sm-block">
            <h3 class="pt-md-3 pt-sm-5" data-sal-duration="800" data-sal="slide-down" data-sal-delay="400" data-sal-easing="ease">
                Mike Walder</h3>
            <h1 class="pt-md-5 d-none d-sm-block" data-sal-duration="800" data-sal="slide-up" data-sal-delay="800" data-sal-easing="ease">
                Développeur Web et mobile</h1>
        </div>
        <nav class="navbar anim_navbar d-none d-sm-block pt-md-3">
            <ul class="navbar-nav mx-auto" data-sal-duration="800" data-sal="slide-up" data-sal-delay="1000" data-sal-easing="ease">
                <li class="nav-item">
                    <a class="nav-link nav_border h3" href="#about">A propos</a>
                </li>
                <li class="nav-item mt-md-3">
                    <a class="nav-link nav_border h3" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item mt-md-3">
                    <a class="nav-link nav_border h3" href="#contact">Contact</a>
                </li>
                <li class="nav-item mt-md-3">
                    <a class="nav-link nav_border h3" href="CV_2022.pdf" title="Télécharger mon CV" target="_blank"><i class="fas fa-lg fa-file-pdf"></i>CV</a>
                </li>
            </ul>
        </nav>
    </section>

    <section id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 border_style_left pr-md-5 pt-md-3 pb-md-4">
                    <h1 class="font-weight-bold pb-md-3" data-sal-duration="600" data-sal="slide-right" data-sal-delay="200" data-sal-easing="ease">
                        À propos</h1>
                    <div data-sal-duration="600" data-sal="slide-right" data-sal-delay="200" data-sal-easing="ease">

                        <p>Mike Walder, 33 ans, habite à Saint Priest.</p>
                        <p>Issu du secteur industriel, je suis actuellement en formation en Développement web et mobile dans la démarche d'une reconversion professionnelle.</p>
                        <p>Depuis plusieurs années, que ce soit pour des projets industriels ou dans le cadre de mes études, j'ai développé des algorithmes et utilisé des outils et technologies
                            informatique pour résoudre des problématiques précises.</p>
                        <p>J'ai notamment réalisé un site web météorologique en reprenant les bases du développement Web en Front et Back End pour répondre à l'objectif
                            de récupérer des données qui sont affichées en ligne et réactualisées.</p>
                        <p>Fort de cette expérience et de mon habitude de travailler en autodidacte, j'ai ensuite développé des projets web modestes tout en continuant de travailler dans l'industrie.</p>
                        <p class="pb-md-3">Je suis désormais à la recherche d'une opportunité en PHP / Symfony afin d'utiliser et développer mes compétences en développement Web dans le cadre
                            professionnel et le plus important, vous délivrer un travail soigné et des pistes d'améliorations pour les projets que vous me confierez.</p>
                    </div>
                </div>

                <div class="col-md-5 border_style_right pt-md-2">
                    <h2 class="font-weight-bold pt-md-3 pb-md-5" data-sal-duration="600" data-sal="slide-left" data-sal-delay="200" data-sal-easing="ease">
                        <i class="fas fa-user-graduate"></i> Formations
                    </h2>
                    <table class="table table-striped" data-sal-duration="600" data-sal="slide-left" data-sal-delay="200" data-sal-easing="ease">
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
            <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="card-deck col-md-10">

                    <div class="card col-md-3 article_project m-3 bg-secondary" style="height: 500px;">
                        <img class="card-img-top img-fluid rounded pt-3" src="images/music.jpg" alt="Card image cap" style="height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                    <div class="card col-md-3 article_project m-3 bg-secondary">
                        <div class="card-img-top rounded">
                            <div id="carouselProject1" class="carousel slide d-none d-md-block" data-ride="carousel" data-sal-duration="600" data-sal="fade" data-sal-delay="200" data-sal-easing="ease">
                                <div class="carousel-inner" style="height: 300px;">
                                    <div class="carousel-item active" data-interval="4000">
                                        <img src="images/burger.jpg" alt="Website" class="img-fluid" style="width: 100%; height: 300px;">
                                    </div>
                                    <div class="carousel-item" data-interval="4000">
                                        <img src="images/burger2.jpg" alt="Arduino Uno" class="img-fluid" style="width: 100%; height: 300px;">
                                    </div>
                                    <div class="carousel-item" data-interval="4000">
                                        <img src="images/burger3.jpg" alt="Station Davis Vantage Pro 2" class="img-fluid" style="width: 100%; height: 300px;">
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

                        <div class="card-body">
                            <h5 class="card-title text-center">Burger selection</h5>
                            <p class="card-text">Commande en ligne pour un fast food</p>
                            <p class="card-text">Partie user et admin du site</p>
                            <p class="card-text"><small class="text-muted">Bootstrap 4, sal.js, HTML, CSS</small></p>
                        </div>
                    </div>

                    <div class="card col-md-3 article_project m-3 bg-secondary">
                        <img class="card-img-top img-fluid rounded pt-3" src="..." alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title mx-auto">Card title</div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                    <div class="card col-md-3 article_project m-3 bg-secondary">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                </div>
                <!-- <div class="col-md-4 pb-3 article_project">
                    <div id="carouselProject1" class="carousel slide pt-md-3 pt-3 pr-md-3 d-none d-md-block" data-ride="carousel" data-sal-duration="600" data-sal="fade" data-sal-delay="200" data-sal-easing="ease">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="4000">
                                <img src="images/burger.jpg" alt="Website">
                            </div>
                            <div class="carousel-item" data-interval="4000">
                                <img src="images/burger2.jpg" alt="Arduino Uno">
                            </div>
                            <div class="carousel-item" data-interval="4000">
                                <img src="images/burger3.jpg" alt="Station Davis Vantage Pro 2">
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
                    <h4 class="pl-md-3 pt-5 pb-md-3 pr-md-3 font-weight-bold" data-sal-duration="600" data-sal="fade" data-sal-delay="200" data-sal-easing="ease">
                        Site de fast-food</h4>
                    <div data-sal-duration="600" data-sal="fade" data-sal-delay="200" data-sal-easing="ease">
                        <p class="pl-md-3 pt-3">Développé avec les langages HTML5/CSS3, PHP/SQL et le framework Bootstrap 4.</p>
                        <p class="pl-md-3 pt-1">Réalisé dans le cadre d'une formation en autodidacte.</p>
                    </div>
                </div> -->

                <!-- <div class="col-md-4 pb-3 article_project ">
                    <a href="" target="_blank"><img src="images/music.jpg" alt="Site burgers" class="img-fluid pt-md-3 pr-md-3 d-none d-md-block" data-sal-duration="600" data-sal="fade" data-sal-delay="200" data-sal-easing="ease">
                    </a>
                    <h4 class="pl-md-3 pt-5 pb-md-3 font-weight-bold" data-sal-duration="600" data-sal="fade" data-sal-delay="200" data-sal-easing="ease">
                        Plateforme de musiques en ligne</h4>
                    <div data-sal-duration="600" data-sal="fade" data-sal-delay="200" data-sal-easing="ease">
                        <p class="pl-md-3 pt-3">Développé avec HTML5/CSS3, jQuery, PHP/SQL et le framework Bootstrap 4.</p>
                        <p class="pl-md-3 pt-1">Réalisé dans le cadre de la formation chez Web Force 3.</p>
                    </div>
                </div> -->

            </div>

            <!-- <div class="row mb-5">
                <div class="col-md-1"></div>
                <div class="col-md-4 pb-3 article_project">

                    <div id="carouselExampleInterval" class="carousel slide pt-md-3 pr-md-3" data-ride="carousel" data-sal-duration="600" data-sal="fade" data-sal-delay="200" data-sal-easing="ease">
                        <div class="carousel-inner d-none d-md-block">
                            <div class="carousel-item active" data-interval="4000">
                                <img src="images/meteo_website.png" alt="Website">
                            </div>
                            <div class="carousel-item" data-interval="4000">
                                <img src="images/arduino-uno.jpg" class="" alt="Arduino Uno">
                            </div>
                            <div class="carousel-item" data-interval="4000">
                                <img src="images/vantage_pro_2.jpg" alt="Station Davis Vantage Pro 2">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <h4 class="pl-md-3 pt-5 pb-md-3 font-weight-bold">
                        Site Web météorologique (janvier - mai 2013)</h4>
                    <div data-sal-duration="600" data-sal="fade" data-sal-delay="200" data-sal-easing="ease">
                        <p class="pl-md-3 pt-3">Développé avec les langages HTML5/CSS3 et PHP5/SQL dans le cadre d'un projet de Master 1. </p>
                        <p class="pl-md-3 pt-1">Un microcontrôleur (Arduino) récupère des données d'une station météorologique, qui sont stockées
                            dans une base de données avant d'être consultables sur le site Web.</p>
                    </div>
                </div>
                <div class="col-md-2 pb-3"></div>
            </div> -->
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

<script>
    sal({
        threshold: 1,
        once: false,
    });
</script>