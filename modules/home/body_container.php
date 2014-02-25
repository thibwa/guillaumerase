<!-- Blog and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div id="fb-root"></div>

<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="blog-header" id="introduction">
    <h1 class="blog-title">Biographie</h1>

    <p class="lead blog-description">

    </p>
</div>

<div class="row">
    <div class="col-sm-12 blog-main">
        <div class="blog-post">
            <p>
            	Mon nom est Guillaume RASE, j'ai 
				<?php
                $curYear = date('Y');
                $date = '1991';
                echo $curYear - $date ?> ans, je possède un diplôme d'éducateur 
            	spécialisé, mais surtout mon rêve est de devenir COUREUR CYCLISTE PROFESSIONNEL.
            </p>
            <hr>

            <p>
                J'aborde la saison 2014 avec la rage de vaincre après une saison 2013 
                très noire marquée tout d'abord par des problèmes de genou en janvier et 
                ensuite par 3 chutes dont la dernière en juillet qui m'a valu une opération de la clavicule qui était cassée à quatre endroits avec l'os qui perçait la peau.
            </p>
            <blockquote>
                <p>
                    Cette saison se passera sous les couleurs du Pesant Club liègeois qui m'a accordé sa confiance et
                    j'ai bien l'intention d'en être digne.
                </p>
            </blockquote>

            <p>
                Je peux d'ailleurs toujours compter sur le soutien de mon
                entraîneur Charly BERARD, ancien professionnel rempli d'expériences,
                et de Geneviève DANIS mon mentor qui tous deux m'aident à réaliser mon rêve.
                Merci à tous les deux.
            </p>
            <p style="text-align: right;">
                <div style="float: right;" class="fb-share-button" data-href="http://www.guilaumerase.be/" data-type="button_count"></div>
            </p>
        </div>
    </div>
</div>

<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="blog-header" id="sponsoring">
<h1 class="blog-title">Sponsors</h1>
    <p class="lead blog-description">
        Je remercie également mes sponsors qui favorisent grandement ma progression dans ce sport si cher qu'est le vélo.
    </p>
</div>

<div class="row featurette">
    <div class="col-md-5">
        <a href="http://www.aromardennes.be" target="_blank">
            <img class="featurette-image img-rounded img-responsive"  src="images/sponsoring/aromardennes.jpg"
                 style="margin-top: 15px;">
        </a>
    </div>
    <div class="col-md-7">
        <h2 class="blog-post-title">
            Arômardennes
        </h2>

        <span class="text-muted" style="font-size: 25px;">
            Huiles essentielles
        </span>

        <p class="lead" style="margin-top: 10px;">
            Depuis 1999, Jean-Marc Rase a développé
            son activité sur le bien-être après avoir suivi différentes formations
            en herboristerie, aromathérapie, massage, etc. Située dans les Ardennes
            Belges, son activité principale est un travail de présentation à
            domicile sur l'utilisation des huiles essentielles et leurs bienfaits.
        </p>
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="blog-post-title">
            Mag Sport
        </h2>

        <span class="text-muted" style="font-size: 25px;">
            Le spécialiste en sport et imprimerie de maillot, le conseil en plus !
        </span>

        <p class="lead" style="margin-top: 10px;">
            Depuis 2013, un nouveau magasin de sport a ouvert ses portes à Libramont.
            Son nom : Mag Sport. Son crédo : répondre à la demande d'une clientèle exigeante,
            dont les clubs sportifs de la région, sans intermédiaires inutiles et en toute indépendance.
        </p>
    </div>
    <div class="col-md-5">
        <a href="http://www.magsport.be" target="_blank">
            <img class="featurette-image img-rounded img-responsive" src="images/sponsoring/magsport.jpg"
                 alt="Mag Sport sponsor" style="margin-top: 30px;">
        </a>
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
	<div class="col-md-2">
        <img class="featurette-image img-responsive" src="images/sponsoring/newgym.png"
             alt="New Gym sponsor">
    </div>
    <div class="col-md-10">
        <h2 class="blog-post-title">
            New Gym
        </h2>

        <span class="text-muted" style="font-size: 25px;">
            Centre de fitness, Body-building, Power Training
        </span>

        <p class="lead" style="margin-top: 10px;">
            Depuis de nombreuses années, Pascal Meis offre un service de fitness de haute qualité.
            De nombreux sportifs de haut niveau viennent s'entrainer chaque jour.
        </p>
    </div>
</div>
<!-- /END THE FEATURETTES -->
