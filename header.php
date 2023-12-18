<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="Images/ERGOP - logp page.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.typekit.net/qlz7wwr.css">
    <?php wp_head(); ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid container" >
          <a class="navbar-brand" href="<?php echo home_url() ?>"> <img src="<?php echo get_template_directory_uri() ?>/Images/ERGOP - logo pc.png"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link soulignement" href="<?php echo home_url() ?>/index.php/search/">Chaises</a>
              </li>
              <li class="nav-item soulignement">
                <a class="nav-link" href="<?php echo home_url() ?>/index.php/search/">Meubles</a>
              </li>
              <li class="nav-item soulignement">
                <a class="nav-link" href="<?php echo home_url() ?>/index.php/search/">Accessoires</a>
              </li>
              <li class="nav-item soulignement">
                <a class="nav-link" href="<?php echo home_url() ?>/index.php/search/">Bureautique</a>
              </li>
            </ul>
            <a href="<?php echo home_url() ?>/index.php/search/"><img src="<?php echo get_template_directory_uri() ?>/Images/Icone search.png" class="bump"></a>
            <h1>&nbsp;&nbsp;</h1>
            <a href="<?php echo home_url() ?>/index.php/compte_connection/"><img src="<?php echo get_template_directory_uri() ?>/Images/Icone compte.png" class="bump"></a>
            <h1>&nbsp;&nbsp;</h1>
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/Images/Icone panier.png" class="bump"></a>
          </div>
        </div>
      </nav>

</head>
<body>