<?php get_header(); ?>

  <section id="sectionachat">
    <form>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 sidebar">
          <div class="container mt-5 offset-md-3">
            <h2>Adresse de facturation</h2>
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
            <br>
            <div class="mb-3">
              <button class="btn-rectangle btn btn-lg text-white" style="background-color: #71D177; width: 100%;" type="submit">Payer avec Bancontact</button>
            </div>
            <div class="mb-3">
              <button class="btn-rectangle btn btn-lg text-white" style="background-color: #4C66E8; width: 100%;" type="submit">Payer avec Paypal</button>
            </div>
          </div>
          <br><br>    
        </div>


<!-- allright

        <div class="col-md-8">
          <br><br>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
            </div>
            
            <div class="col">
              <div class="vosachat">
                  <h1 class="title">Vos Achats</h1>
                  <div class="barrevosachats"></div>
                    <div class="container">
                        <div class="card flex-row flex-wrap">
                          <div class="card-header border-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/Article du mois.jpg" alt="" width="5%">
                          </div>
                            <div class="card-block px-2">
                              <h4 class="card-title">Chaise Bureau</h4>
                              <div class="prix">
                                <p3>749.99€</p3>
                                <p2>649.99€</p2>
                              </div>
                            </div>
                        </div>
                          <div class="card flex-row flex-wrap">
                          <div class="card-header border-0">
                            <img src="//placehold.it/100" alt="">
                          </div>
                            <div class="card-block px-2">
                              <h4 class="card-title">Chaise Bureau</h4>
                              <div class="prix">
                                <p3>749.99€</p3>
                                <p2>649.99€</p2>
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

    <div class="col-md-8">
          <br><br>
          <div class="row row-cols-1 row-cols-md-3 g-4">
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
                  -->
  </section>

<?php get_footer(); ?>