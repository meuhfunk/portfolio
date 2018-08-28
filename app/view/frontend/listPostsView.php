<?php $title = "Nicolas LEYMARIE - Développeur Web Bordeaux - Portfolio"; ?>
<?php $heading = "Nicolas LEYMARIE"; ?>
<?php $subHeading = "Développeur Web"; ?>

<?php ob_start(); ?>

<!-- background -->
<div class="background-index">
      <!-- présentation -->
      <Section class="presention">
        <div class="container container-marg  ">
          <div class="row justify-content-center"> <!--Start row-->

<!--slider-->
  <div id="diaporama">
      <button id="bouttonGauche"><span class="chevron left"></span></button>
      <!-- Bouton de navigation droite -->

      <!-- caroussel -->
      <div id="caroussel">
        <!--  image1 -->
        <figure class="item">
          <img src="public/img/nico.jpg">
        </figure>
        <!-- fin image 1 -->

        <!--  image2 -->
        <figure class="item">
          <img src="public/img/banner/dev-indep.png">
        </figure>
        <!-- fin image 2 -->

        <!--  image3 -->
        <figure class="item">
          <img src="public/img/nico.jpg">
        </figure>
        <!-- fin image 3 -->

        <!--  image4 -->
        <figure class="item">
          <img src="public/img/login/login.png">
        </figure>
        <!-- fin image 4 -->

        <!-- image5 -->
        <figure class="item">
          <img src="public/img/nico.jpg">
        </figure>
        <!-- fin image 5  -->
      </div>
      <!-- fin caroussel -->

      <button id="bouttonDroit"><span class="chevron right"></span></button>
      <!-- Bouton de navigation gauche -->
    </div>
    <!-- fin Diaporama -->
  </section>

<!--fin slider-->

            <div class= "col-sm-12 text-center mt-4">
              <h1 class="title-id">Nicolas LEYMARIE</h1>
              <p>Anciennement Biologiste en laboratoire de recherche, <br/>
                 j'ai  travaillé dans la Bio-Informatique et la Génétique des populations.<br/>
                Il y a beaucoup de similitudes entre le développement informatique et la biologie.</p>
                <p>Ces similitudes dans la facon de structurer le travail, de s'organiser, et la veille technologique en perpetuelle évolution qui s'ensuit, <br/>
                  m'a donné envie de me reconvertir dans le développement informatique.

                <p>De formation "Développeur intégrateur en réalisation d’applications web".<br/>
                Je recherche un poste de <strong>développeur Web.</strong></p>

                <p>Contactez moi <a href="index.php#contact" class="pres-loo">içi</a> et regardez <a href="index.php#portfolio" class="pres-loo">mes projets.</a><br/></p>

                <p class="retrouvez-moi">Retrouvez-moi sur :</p>
                <p class="text-center">
                  <a class="color-github" href="https://github.com/meuhfunk"><i class="fa fa-github fa-2x"></i></a>
                </p>
            </div>
          </div>
        </div>
      </Section>
      <!-- /présentation -->


      <!-- compétences -->
      <section class="competence ">
        <div class="container container-marg">
          <div class="row justify-content-center">
            <div class="col-sm-12 text-center">
              <h2 class="title-id"><i class="fa fa-cogs"></i><br/> Compétences</h2>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-sm-6 mt-4 text-center">
              <h3><i class="fa fa-code"></i> Langages & Framworks</h3>
              <p>Symfony, WordPress, PHP, MYSQL, MariaDb, JavaScript, Jquery, HTML, CSS, Bootstrap</p>
            </div>
            <div class="col-sm-6 mt-4 text-center">
              <h3><i class="fa fa-arrow-up"></i> Référencement & Responsive</h3>
              <p>Optimisations techniques SEO, Rédaction, Suivi et analyses statistiques. Sites responsives</p>
            </div>
            <div class="col-sm-6 mt-4 text-center">
              <h3><i class="fa fa-cogs"></i> Outils et environnements</h3>
              <p>ArchLinux & Windows, Git & Github, PhPmyadmin, Atom.</p>
            </div>
            <div class="col-sm-6 mt-4 text-center">
              <h3><i class="fa fa-star"></i> Management & Projets</h3>
              <p>Management d'équipe, <br/>
              Relation client,
              Travail en équipe.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- /compétences -->

      <!-- portfolio -->
      <!-- Main Content -->
      <section class="portfolio" id="portfolio">
        <div class="container ">
          <div class="container container-marg">
            <div class="row">
              <div class="col-sm-12 text-center">
                <h2 class="title-id"><i class="fa fa-rocket"></i><br/> MES PROJETS</h2>
              </div>
            </div>
          </div>

          <div class="row justify-content-center align-middle">
          <?php foreach ($posts as $post) { ?>
            <article class="post-preview col-md-5 card text-white bg-dark mb-3 marg-article">
              <a href="post&id=<?= $post->id()?>">
                <div class="post-thumb-content">
                  <img src="<?= PUBLICS ;?>img/<?= $post->post_thumbnail()?>" alt="<?= $post->post_thumbnail()?>" class="post-img">
                </div>
                <h3 class="post-title"><?= $post->title();?></h3>
                <p><?= $post->excerpt();?></p>
              </a>
              <p class="post-meta">Publié le : <?= $post->creation_date_fr();?></p>
            </article>
            <?php } ?>
          </div>

          <!-- Pager -->
          <div class="clearfix">
            <?php if($page < PostManager::$nbPage){?>
            <a class="btn btn-primary float-right col-xs-6 col-sm-5 col-lg-3 mb-2 px-2" href="listPosts&page=<?= $page + 1; ?>">Anciens billets &rarr;</a>
          <?php } ?>
            <?php if($page != 1){?>
              <a class="btn btn-primary float-left col-xs-6 col-sm-5 col-lg-3 mb-2 px-2" href="listPosts&page=<?= $page - 1; ?>">&larr; Nouveaux billets</a>
              <?php } ?>
          </div>
        </div>
      </section>
      <!-- /portfolio -->

      <!-- contact -->
      <section class="contact container-marg" id="contact">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 text-center mt-4">
              <h2 class="title-id align-middle"><i class="fa fa-comments"></i><br/> CONTACT</h2>
              <p class="mt-4"<br/>

            </div>
          </div>

          <div class="row text-center mt-4 justify-content-center">
            <div class="col-sm-6 col-sm-offset-3 card text-white bg-dark mb-3">
                <i class="fa fa-phone"></i>
                <a href="tel:0609583855"><strong>06.80.88.01.15</strong></a><br/>

                <i class="fa fa-envelope"></i>
                <a href="mailto:leymarien@gmail.com"><strong>leymarien@gmail.com</strong></a><br/>

                <i class="fa fa-download"></i>
                <a href="public/img/cv/C.V 2018 informatique.pdf" download="C.V 2018 informatique"><strong>Télécharger mon CV</strong></a><br/>

                <i class="fa fa-comments"></i>
                <a href="http://localhost/openclassrooms/contact/"><strong>Contact par formulaire</strong></a>
              </div>
          </div>
        </div>
      </section>
      <!-- /contact -->
</div>
<!-- /background -->

<?php $content = ob_get_clean(); ?>
<?php require_once 'template.php';
