
<?php
include 'dataConnexion.php';
?>
<!DOCTYPE html>

<head>

  <title>Inscription</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="description" content="1ére Plateforme d'Information Pédagogique au Tchad spécialisée dans l’accompagnements et l’orientations des jeunes en quête d’opportunités d’étude mais aussi d’insertion professionnelle. Un accès simple et rapide à toute information sur l'éducation au tchad. Des informations claires du système éducatif tchadien. L'Objectif de ce plateforme est de promouvoir l'éducation du tchad. Nous vous donnons l'information en temps réel sur toute l'actualité éducative au tchad et à l'international.">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="theme-color" content="#ffffff">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- css bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- css fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- css datatables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />
  <!-- JavaScript sweetalert -->
  <link rel="stylesheet" href="sweetalert2.min.css">

  

  <!--  CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style type="text/css">
    /*    body {
        margin-left: 10%;
        margin-top: 5%;
    } */
    .form-control {
      box-shadow: none !important;
      outline: none !important;
      border: 2px solid #cecece;
      height: 38px;
    }
  </style>
</head>

<body class="bg-transparent text-dark">

  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8 mt-5">

    
          <div class="shadow p-4">
            <form class="needs-validation" action="ins_traitement.php" method="post">
              <h3 class="mb-3">
                <span class="text-secondary text-center">S'inscrire en tant que candidat</span>
              </h3>

              <div class="row">
               

                <div class="col-md-6 mb-3">
                  <label for="nom">
                    <i class="fas fa-user"></i>
                  </label>
                  <input class="form-control" type="text" name="nom" placeholder="Votre nom"  id="nom" autocomplete="off" required>
                  <div class="valid-feedback">Valide</div>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="prenom">
                    <i class="fas fa-user"></i>
                  </label>
                  <input class="form-control" type="text" name="prenom" placeholder="Votre prenom"  id="prenom" autocomplete="off" required>
                  <div class="valid-feedback">Valide</div>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="email">
                  <i class="fas fa-envelope"> </i>
                  </label>
                  <input class="form-control" type="email" name="email" placeholder="Votre email"  id="email" autocomplete="off">
                  <div class="valid-feedback">Valide</div>
                </div>

                <div class="col-lg-6 col-md-6 mb-3">
                  <label for="password">
                  <i class="fas fa-lock"></i>
                  </label>
                  <input class="form-control" type="password" name="password" placeholder="Votre mot de passe"  id="password" autocomplete="off" required>
                  <div class="valid-feedback">Valide</div>

                </div>

                
                <div class="col-md-6 mb-3">
                    <i class="bi bi-book-half"></i>
                    <select class="form-select mt-2" name="procedure" aria-label="Default select example">
                        <option selected>Choisir un type de procedure</option>
                        <option value="1">Stage </option>
                        <option value="2">WorkShop</option>
                        
                      </select>
                    <div class="valid-feedback">Valide</div>
                  </div>

                <div class="col-md-6 mb-3">
                    <i class="bi bi-book-half"></i>
                    <select class="form-select mt-2" name="domaine" aria-label="Default select example">
                        <option selected>Choisir un domaine de stage</option>
                        <option value="1">Intelligence Artificielle</option>
                        <option value="2">Robotique</option>
                        <option value="3">Developppement Mobile</option>
                        <option value="3">Developppement Web</option>
                        <option value="3">Applications Desktop</option>
                      </select>
                    <div class="valid-feedback">Valide</div>
                  </div>

                <div class="col-lg-6 col-md-6 mb-3">
                  <label for="contact">
                  <i class="fas fa-phone"></i>
                   
                  </label>
                  <input class="form-control" type="text" name="contact" placeholder="Votre contact"  id="contact" autocomplete="off" required>
                  <div class="valid-feedback">Valide</div>
                </div>

                <div class="col-lg-6 col-md-6 mb-3">
                  <label for="adresse">
                    <i class="bi bi-bank2"></i>
                  </label>
                  <input class="form-control" type="text" name="adresse" placeholder="Votre adresse"  id="adresse" autocomplete="off" required>
                  <div class="valid-feedback">Valide</div>
                </div>


                <div class="col-lg-6 col-md-6 mb-3 mt-3">
                  <button type="submit" name="inc" class=" btn btn-secondary mt-3">S'inscrire <i class="fas fa-sign-in-alt"></i></button>
                </div>
              </div>
       
            </form>
          </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>


</body>

</html>