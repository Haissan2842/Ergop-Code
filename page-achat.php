<?php get_header(); ?>

<<<<<<< HEAD:page-achat.php
=======
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid container" >
          <a class="navbar-brand" href="index.html"> <img src="Images/ERGOP - logo pc.png"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link soulignement" href="search.html">Chaises</a>
              </li>
              <li class="nav-item soulignement">
                <a class="nav-link" href="search.html">Meubles</a>
              </li>
              <li class="nav-item soulignement">
                <a class="nav-link" href="search.html">Accessoires</a>
              </li>
              <li class="nav-item soulignement">
                <a class="nav-link" href="search.html">Bureautique</a>
              </li>
            </ul>
            <a href="search.html"><img src="Images/Icone search.png" class="bump"></a>
            <h1>&nbsp;&nbsp;</h1>
            <a href="compte.html"><img src="Images/Icone compte.png" class="bump"></a>
            <h1>&nbsp;&nbsp;</h1>
            <a href="#"><img src="Images/Icone panier.png" class="bump"></a>
          </div>
        </div>
      </nav>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Adresse de Facturation</title>

</head>
<body>
>>>>>>> 3c4a4fb2b4fa78554dad0a35ad6d960ceb10c049:achat.html
  <section id="sectionachat">
    <form>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 sidebar">
          <div class="container mt-5 offset-md-3">
            <h1>Adresse de facturation</h1>
            <br>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom">
              </div>
              <div class="col-md-6">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom">
              </div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="adresse" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="adresse">
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="codePostal" class="form-label">Code Postal</label>
                <input type="text" class="form-control" id="codePostal">
              </div>
              <div class="col-md-6">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville">
              </div>
            </div>
            <div class="mb-3">
              <label for="pays" class="form-label">Pays</label>
              <input type="text" class="form-control" id="pays">
            </div>
            <div class="mb-3">
              <label for="telephone" class="form-label">Téléphone</label>
              <input type="tel" class="form-control" id="telephone">
            </div>
            <br><br>
            <h2>Différents Modes de Paiement</h2>
            <div class="mb-3">
                <button class="btn-square btn btn-light btn-lg text-white" style="background-color: #71D177;" type="submit">Payer avec Bancontact</button>
            </div>
            <div class="mb-3">
              <button class="btn-square btn btn-primary btn-lg" type="submit">Payer avec Paypal</button>
            </div>
          </div>
          <br><br>    
        </div>
          <div class="col-md-8">
          <br><br>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
            </div>
            
            <div class="col">
              <div class="vosachat w-75">
                  <h1 class="title">Vos Achats</h1>
                  <div class="barrevosachats"></div>          
                  <div class="card-container">

                    <div class="card flex-row flex-wrap border-0">
                      <div class="card-header border-0">
                          <img src="Images/Article populaire 1.png" width="100%">
                      </div>
                      <div class="card-body px-2">
                          <h6 class="card-title text-right">Chaise Bureau</h6>
                          <p class="card-text text-right">
                              <div class="prix">
                                  <p3>749.99€</p3>
                                  <p2>649.99€</p2>
                              </div>
                          </p>
                      </div>
                  </div>
                      
                  </div>
                </div>
              </div>
            </div>
          
          </div>
         </div>
        </div>
      </div>
    </div>
    </form>

    
  </section>

<<<<<<< HEAD:page-achat.php
<?php get_footer(); ?>
=======

  <section id="sectiontest">

    
  </section>


    <footer>
      <div class="footergrid">
        <div class="Texte">
          <u><h2>Mentions Légales :</h2>
            <br>
            <br>
            <a href="conditions_generales.html"><h4>Conditions Générales</h4></a>
            <br>
            <a href="vie_privee.html"><h4>Vie Privée</h4></a>
            <br>
            <a href="droit_de_retractation.html"><h4>Droit de Rétractation</h4></a>
            <br>
            <br>
              <p>
                Ergop SRL : <br>
                Mail :</u> ergopsrl@info.be <br>
                <u> BCE : </u> 0779618003 <br>
                <u> Siège social :</u> Avenue Brugmann n°499 <br>
                <u> TVA :</u> BE0779.618.001
              </p> </div>
        <div class="Images">
          <div class="X-logo"> <img src="Images/Logo X.png" width="80%"> </div>
          <div class="Instagram-logo"> <img src="Images/Logo instagram.png" width="80%"> </div>
          <div class="linkedin-logo"> <img src="Images/logo linkedin.png" width="80%"> </div>
          <div class="facebook-logo"> <img src="Images/Logo Facebook.png" width="80%"> </div>
          <div class="Conactez-nous"> <a href="contact.html"><img src="Images/Contactez nous.png" width="80%"></a> </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
>>>>>>> 3c4a4fb2b4fa78554dad0a35ad6d960ceb10c049:achat.html
