
<?php get_header(); ?>


<body>
    <section id="section1">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri() ?>/Images/Section 1 Image.jpg" class="d-block w-100" alt="Image 1">
        <div class="carousel-caption d-md-none">
          <h5>Titre de la slide 1</h5>
          <p>Description de la slide 1.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1920x1080" class="d-block w-100" alt="Image 2">
        <div class="carousel-caption d-md-none">
          <h5>Titre de la slide 2</h5>
          <p>Description de la slide 2.</p>
        </div>
      </div>
      <!-- Ajouter d'autres slides ici -->
    </div>
  </div>
</section>

<section id="section2">
<br><br><br>
      <div class="container col-9 col-lg-7 text-center mt-5 ">
        <div class="card card_cestquoiergop card_up_gray">
            <br>
              <h2><u>C'est quoi Ergop ?</u></h2>
            <br>
              <div class="col-9 col-lg-10">
                <p class="pjustifylastlinecenter">Ergop est une start-up axée sur le bien-être, spécialisée dans la conception et la vente d'objets ergonomiques de haute qualité pour améliorer le confort quotidien. Notre catalogue comprend des chaises de bureau ergonomiques, des supports pour ordinateurs portables, et autres produits conçus en collaboration avec des experts en santé. En mettant l'accent sur l'innovation et la sensibilisation à l'importance de l'ergonomie, Ergop s'est rapidement imposée comme un acteur majeur sur le marché, offrant des solutions qui améliorent le bien-être de ses clients au travail et à la maison.</p>
              </div>
              <br>
        </div>
      </div>

      <br><br><br><br><br><br>
    </section>
    <section id="section3" class="sectionshadowreversed">

      <br><br><br><br>
      <div class="container mt-5">
        <h5 class="text-center mb-4">Catégories</h5><br>
      </div>

      <div class="container mt-4">
        <div class="row">
          <div class="col-6 col-lg-3 mb-4">
            <div class="card">
              <a href="<?php echo get_home_url() ?>/index.php/shop/"><img src="<?php echo get_template_directory_uri() ?>/Images/Catégorie-chaises.png" class="card-img-top customcard zop" alt="Image 1" style="box-shadow: -10px -10px rgba(209, 78, 0, 0.5)"></a>
            </div>
          </div>
      
          <div class="col-6 col-lg-3 mb-4">
            <div class="card">
            <a href="<?php echo get_home_url() ?>/index.php/shop/"><img src="<?php echo get_template_directory_uri() ?>/Images/Catégorie-bureautique.png" class="card-img-top customcard zop" alt="Image 2" style="box-shadow: -10px -10px rgba(62, 47, 28, 0.5)"></a>
            </div>
          </div>
      
          <div class="col-6 col-lg-3 mb-4">
            <div class="card">
            <a href="<?php echo get_home_url() ?>/index.php/shop/"><img src="<?php echo get_template_directory_uri() ?>/Images/Catégorie-meubles.png" class="card-img-top customcard zop" alt="Image 3" style="box-shadow: -10px -10px rgba(42, 37, 201, 0.5)"></a>
            </div>
          </div>
      
          <div class="col-6 col-lg-3 mb-4">
            <div class="card">
            <a href="<?php echo get_home_url() ?>/index.php/shop/"><img src="<?php echo get_template_directory_uri() ?>/Images/Catégorie-Accesoires.png" class="card-img-top customcard zop" alt="Image" 4 style="box-shadow: -10px -10px rgba(46, 127, 27, 0.5)"></a>
            </div>
          </div>
        </div>
      </div>
</div>
      <br><br><br><br><br><br><br><br><br>
    </section>
    <section id="section4" class="sectionshadow">

    <div class="container">
  <div class="row">

    <!-- Image Article du Mois -->
    <div class="col-md-6 mb-4">
      <div class="card">
        <img src="<?php echo get_template_directory_uri() ?>/Images/Article du mois.jpg" class="card-img-top" alt="Image">
      </div>
    </div>

    <!-- Texte Article du Mois -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body couleur_des_sections">
          <h1 class="card-title">Chaise de bureau Secret Lab</h1>
          <p class="card-text pjustifylastlineleft">La chaise gaming Secret Lab est le choix ultime pour les passionnés de jeux qui recherchent un mélange parfait de confort, de style et de fonctionnalité. Conçue avec une attention méticuleuse aux détails, cette chaise offre un soutien ergonomique exceptionnel grâce à son design ergonomique et ses multiples réglages. Son revêtement en cuir PU de haute qualité ajoute une touche de luxe tout en étant facile à entretenir. Dotée d'un mécanisme d'inclinaison, de coussins ajustables et d'accoudoirs personnalisables, la chaise gaming Secretlab s'adapte à chaque utilisateur, assurant une expérience de jeu immersive et confortable. Son design élégant et moderne en fait également un ajout esthétique à n'importe quel espace de jeu. Que vous soyez en train de jouer pendant des heures ou de travailler, la chaise gaming Secret Lab offre le support dont vous avez besoin pour rester concentré et à l'aise.</p>
          <a href="<?php echo get_home_url() ?>/index.php/product/chaise-de-bureau-gaming-secret-lab" class="btn btn-outline-dark btn-block">Je vais voir</a>
        </div>
      </div>
    </div>

  </div>
</div>

        <br><br><br><br><br><br><br>
    </section>
    <section id="section5">

      <div class="container mt-5">
        <!-- Titre -->
        <h5 class="text-center mb-4">Articles Populaires</h5><br>

        <div class="container mt-4">
  <div class="row">
    <!-- Première rangée de cartes -->
    <div class="col-6 col-lg-3 mb-4">
      <div class="card customcard hopshadow">
      <img src="<?php echo get_template_directory_uri() ?>/Images/Image 20.jpg" class="card-img-top" alt="Image 1">
      <div class="card-body">
          <p class="card-text pcenter">Bureau Assis Debout Électrique<br>67.98€</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-lg-3 mb-4">
      <div class="card customcard hopshadow">
        <img src="<?php echo get_template_directory_uri() ?>/Images/Image 17.jpg" class="card-img-top" alt="Image 2">
        <div class="card-body">
          <p class="card-text pcenter">Bureau informatique GRISO<br>67.98€</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3 mb-4">
      <div class="card customcard hopshadow">
        <img src="<?php echo get_template_directory_uri() ?>/Images/lunette-gaming-proxima-horus-x-blanche.png" class="card-img-top" alt="Image 3">
        <div class="card-body">
          <p class="card-text pcenter">Lunettes Esport ProXima<br>67.98€</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-lg-3 mb-4">
      <div class="card customcard hopshadow">
        <img src="<?php echo get_template_directory_uri() ?>/Images/chaiseeerg.jpg" class="card-img-top" alt="Image 4">
        <div class="card-body customcard">
          <p class="card-text pcenter">Chaise de Bureau Repose-Pieds<br>67.98€</p>
        </div>
      </div>
    </div>    
  </div>
  <div class="row">
    <!-- Deuxième rangée de cartes -->
    <div class="col-6 col-lg-3 mb-4">
      <div class="card customcard hopshadow">
        <img src="<?php echo get_template_directory_uri() ?>/Images/Image 25.png" class="card-img-top" alt="Image 5">
        <div class="card-body">
          <p class="card-text pcenter">Gym Ball Résistant<br>30€</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3 mb-4">
      <div class="card customcard hopshadow">
        <img src="<?php echo get_template_directory_uri() ?>/Images/Article populaire 1.png" class="card-img-top" alt="Image 6">
        <div class="card-body">
          <p class="card-text pcenter">Support Pour Ordinateurs<br>67.98€</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3 mb-4">
      <div class="card customcard hopshadow">
        <img src="<?php echo get_template_directory_uri() ?>/Images/Image 5.jpg" class="card-img-top" alt="Image 7">
        <div class="card-body">
          <p class="card-text pcenter">Secretlab MAGNUS Pro<br>1050.40€</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3 mb-4">
      <div class="card customcard hopshadow">
        <img src="<?php echo get_template_directory_uri() ?>/Images/Image 21.png" class="card-img-top" alt="Image 8">
        <div class="card-body">
          <p class="card-text pcenter">Repose-Poignet Réglable<br>29.99€</p>
        </div>
      </div>
    </div>
  </div>
</div>
    
<br><br><br><br>

    </section>

  <?php get_footer(); ?>
