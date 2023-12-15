<?php get_header(); ?>

  <section id="sectionachat">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 sidebar">
                <div class="container mt-5 offset-md-3">
                    <h2>Adresse de Facturation</h2>
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
            
                    <h2>Différents Modes de Paiement</h2>
                    
                    <div class="mb-3">
                        <button class="btn btn-light btn-lg text-white" style="background-color: #71D177;" type="submit">Payer avec Bancontact</button>
                    </div>
                  
                    <div class="mb-3">
                      <button class="btn btn-primary btn-lg" type="submit">Payer avec Paypal</button>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-8 justify-content-end">
          <div class="vosachat">
              <h1>Vos Achats</h1>
              
              <div class="card" style="width: 18rem;">
                  <img src="votre_image.jpg" class="card-img-top" alt="Image">
                  <div class="card-body">
                      <h5 class="card-title text-right">Titre</h5>
                      <p class="card-text text-right">Description</p>
                  </div>
              </div>
              
              <div class="card" style="width: 18rem;">
                  <img src="votre_image.jpg" class="card-img-top" alt="Image">
                  <div class="card-body">
                      <h5 class="card-title text-right">Titre</h5>
                      <p class="card-text text-right">Description</p>
                  </div>
              </div>
          </div>
          </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 sidebar">
          <div class="pagearticle">
            <div class="recherche padding_search">
              <h1>recherche</h1>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Chaises</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Meubles</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Accessoires</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Bureautique</label>
              </div>
            </div>
          </div>        
        </div>
          <div class="col-md-8">
          <br><br>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="Images/articlemoment.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="Images/articlemoment.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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








    

  </section>

<?php get_footer(); ?>
