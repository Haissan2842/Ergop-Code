<footer>

<br><br><br>

<div class="container mt-4">
  <div class="row">
    <!-- Carte de Gauche -->
    <div class="col-md-6">
      <div class="card background_color_footer customcard color_white">
        <div class="card-body">
          <u><h2>Mentions Légales :</h2></u>
          <br>
          <br>
          <a href="<?php echo home_url() ?>/index.php/conditions_generales"><h4>Conditions Générales</h4></a>
          <br>
          <a href="<?php echo home_url() ?>/index.php/vie_privee"><h4>Vie Privée</h4></a>
          <br>
          <a href="<?php echo home_url() ?>/index.php/droit_de_retractation"><h4>Droit de Rétractation</h4></a>
          <br>
          <br>
          <p>
            Ergop SRL : <br>
            Mail :</u> ergopsrl@info.be <br>
            <u> BCE : </u> 0779618003 <br>
            <u> Siège social :</u> Avenue Brugmann n°499 <br>
            <u> TVA :</u> BE0779.618.001
          </p>
        </div>
      </div>
    </div>

    <!-- Carte de Droite -->
    <div class="col-md-6">
      <div class="card background_color_footer customcard">
        <div class="card-body">

          <!-- Row pour les sous-cartes -->
          <div class="row">
            <!-- Première carte imbriquée -->
            <div class="col-md-5">
              <div class="card mb-3 background_color_footer">
                <img src="<?php echo get_template_directory_uri() ?>/Images/Logo X.png" width="50%">
              </div>
            </div>

            <!-- Deuxième carte imbriquée -->
            <div class="col-md-5">
              <div class="card mb-3 background_color_footer">
                <img src="<?php echo get_template_directory_uri() ?>/Images/Logo instagram.png" width="50%">
              </div>
            </div>

            <!-- Troisième carte imbriquée -->
            <div class="col-md-5">
              <div class="card mb-3 background_color_footer">
                <img src="<?php echo get_template_directory_uri() ?>/Images/Logo Facebook.png" width="50%">
              </div>
            </div>

            <!-- Quatrième carte imbriquée -->
            <div class="col-md-5">
              <div class="card mb-3 background_color_footer">
                <img src="<?php echo get_template_directory_uri() ?>/Images/Logo linkedin.png" class="float-left" width="50%">
              </div>
            </div>
          </div>

          <br><br><br><br>
          <button class="btn btn-outline-light btn-block"><a href="<?php echo home_url() ?>/index.php/contact">Contactez-nous</a></button>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
-->
      <?php wp_footer(); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>