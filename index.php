
<?php get_header(); ?>


<body>
    <section id="section1">
        <img src="<?php echo get_template_directory_uri() ?>/Images/Section 1 Image.jpg" class="imagedebut">
    </section>
    <section id="section2">
      <br><br><br><br><br><br>
      <div class="containercestquoiergop" style="border: black solid 2px;">
         <h2>C'est quoi Ergop ?</h2>
         <hr>
           <p>Ergop est une start-up axée sur le bien-être, spécialisée dans la conception et la vente d'objets ergonomiques de haute qualité pour améliorer le confort quotidien. Notre catalogue comprend des chaises de bureau ergonomiques, des supports pour ordinateurs portables, et autres produits conçus en collaboration avec des experts en santé. En mettant l'accent sur l'innovation et la sensibilisation à l'importance de l'ergonomie, Ergop s'est rapidement imposée comme un acteur majeur sur le marché, offrant des solutions qui améliorent le bien-être de ses clients au travail et à la maison.</p>
      </div>
      <br><br><br><br><br><br>
    </section>
    <section id="section3">

      <br><br><br><br>
      <div class="container mt-5">
        <h5 class="text-center mb-4">Catégories</h5><br>
      </div>


      <div class="container mt-4">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri() ?>/Images/Catégorie-chaises.png" class="card-img-top customcard" alt="Image 1" style="box-shadow: -10px -10px rgba(209, 78, 0, 0.5)">
            </div>
          </div>
      
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri() ?>/Images/Catégorie-bureautique.png" class="card-img-top customcard" alt="Image 2" style="box-shadow: -10px -10px rgba(62, 47, 28, 0.5)">
            </div>
          </div>
      
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri() ?>/Images/Catégorie-meubles.png" class="card-img-top customcard" alt="Image 3" style="box-shadow: -10px -10px rgba(42, 37, 201, 0.5)">
            </div>
          </div>
      
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card">
              <img src="<?php echo get_template_directory_uri() ?>/Images/Catégorie-Accesoires.png" class="card-img-top customcard" alt="Image" 4 style="box-shadow: -10px -10px rgba(46, 127, 27, 0.5)">
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br>
    </section>
    <section id="section4">
<!--
        <div class="row">
      
          <div class="col-md-6">
            <div class="card">
              <img src="Images/Article du mois.jpg" class="card-img-top" alt="Image de la carte de gauche">
            </div>
          </div>
      
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">Chaise de Bureau Gaming Secret Lab</h1>
                <p class="card-text">La chaise gaming Secret Lab est le choix ultime pour les passionnés de jeux qui recherchent un mélange parfait de confort, de style et de fonctionnalité. Conçue avec une attention méticuleuse aux détails, cette chaise offre un soutien ergonomique exceptionnel grâce à son design ergonomique et ses multiples réglages. Son revêtement en cuir PU de haute qualité ajoute une touche de luxe tout en étant facile à entretenir. Dotée d'un mécanisme d'inclinaison, de coussins ajustables et d'accoudoirs personnalisables, la chaise gaming Secretlab s'adapte à chaque utilisateur, assurant une expérience de jeu immersive et confortable. Son design élégant et moderne en fait également un ajout esthétique à n'importe quel espace de jeu. Que vous soyez en train de jouer pendant des heures ou de travailler, la chaise gaming Secret Lab offre le support dont vous avez besoin pour rester concentré et à l'aise.</p>
                <a href="#" class="btn btn-primary btn-block">Bouton</a>
              </div>
            </div>
          </div>
  -->

      <div class="articledumoi">
          <div class="image-article">
            <img src="<?php echo get_template_directory_uri(); ?>/Images/Article du mois.jpg" width="90%">
          </div>
          <div class="nom-article">
            <h1>Chaise de Bureau Gaming Secret Lab</h1>
            <div class="prix">
              <h2>749.99€</h2>
              <h1>649.99€</h1>
            </div>
          </div>
          <div class="description">
            <p>La chaise gaming Secret Lab est le choix ultime pour les passionnés de jeux qui recherchent un mélange parfait de confort, de style et de fonctionnalité. Conçue avec une attention méticuleuse aux détails, cette chaise offre un soutien ergonomique exceptionnel grâce à son design ergonomique et ses multiples réglages. Son revêtement en cuir PU de haute qualité ajoute une touche de luxe tout en étant facile à entretenir. Dotée d'un mécanisme d'inclinaison, de coussins ajustables et d'accoudoirs personnalisables, la chaise gaming Secretlab s'adapte à chaque utilisateur, assurant une expérience de jeu immersive et confortable. Son design élégant et moderne en fait également un ajout esthétique à n'importe quel espace de jeu. Que vous soyez en train de jouer pendant des heures ou de travailler, la chaise gaming Secret Lab offre le support dont vous avez besoin pour rester concentré et à l'aise.
            </p>
          </div>
            <div class="lien">
              <a href="<?php echo get_template_directory_uri() ?>/article.php">
                <div class="rectangle-noir">
                  <h2>Je vais voir <img src="<?php echo get_template_directory_uri() ?>/Images/entrer.png" width="10%"></h2>
              </div>
            </a>
          </div>
      </div>


        <br><br><br><br><br><br><br>
    </section>
    <section id="section5">

      <div class="container mt-5">
        <!-- Titre -->
        <h5 class="text-center mb-4">Articles Populaires</h5><br>

    
        <!-- Première rangée de cartes -->
        <div class="row justify-content-center">
          <!-- Carte 1 -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri() ?>/Images/articlemoment.png" class="card-img-top customcard" alt="Image de la carte 1">
              <div class="card-body text-center">
                <p class="card-text">Chaise de bureau Secret Lab <br> 349,99€</p>
              </div>
            </div>
          </div>
    
          <!-- Carte 2 -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri() ?>/Images/articlemoment.png" class="card-img-top customcard" alt="Image de la carte 2">
              <div class="card-body text-center">
                <p class="card-text">Chaise de bureau Secret Lab <br> 349,99€</p>
              </div>
            </div>
          </div>
    
          <!-- Carte 3 -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri() ?>/Images/articlemoment.png" class="card-img-top customcard" alt="Image de la carte 3">
              <div class="card-body text-center">
                <p class="card-text">Chaise de bureau Secret Lab <br> 349,99€</p>
              </div>
            </div>
          </div>
    
          <!-- Carte 4 -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri() ?>/Images/articlemoment.png" class="card-img-top customcard" alt="Image de la carte 4">
              <div class="card-body text-center">
                <p class="card-text">Chaise de bureau Secret Lab <br> 349,99€</p>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Deuxième rangée de cartes -->
        <div class="row justify-content-center">
          <!-- Carte 5 -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri() ?>/Images/articlemoment.png" class="card-img-top customcard" alt="Image de la carte 5">
              <div class="card-body text-center">
                <p class="card-text">Chaise de bureau Secret Lab <br> 349,99€</p>
              </div>
            </div>
          </div>
    
          <!-- Carte 6 -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri() ?>/Images/articlemoment.png" class="card-img-top customcard" alt="Image de la carte 6">
              <div class="card-body text-center">
                <p class="card-text">Chaise de bureau Secret Lab <br> 349,99€</p>
              </div>
            </div>
          </div>
    
          <!-- Carte 7 -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card border-0">
              <img src="<?php echo get_template_directory_uri() ?>/Images/articlemoment.png" class="card-img-top customcard" alt="Image de la carte 7">
              <div class="card-body text-center">
                <p class="card-text">Chaise de bureau Secret Lab <br> 349,99€</p>
              </div>
            </div>
          </div>
    
          <!-- Carte 8 -->
          <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card border-0"> 
              <img src="<?php echo get_template_directory_uri() ?>/Images/articlemoment.png" class="card-img-top customcard" alt="Image de la carte 8">
              <div class="card-body text-center">
                <p class="card-text ">Chaise de bureau Secret Lab <br> 349,99€</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
<br><br><br><br>

    </section>

  <?php get_footer(); ?>
