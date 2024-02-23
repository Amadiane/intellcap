
<!DOCTYPE html>
<html>

<head>

    <title>connexion</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description"
        content="1ére Plateforme d'Information Pédagogique au Tchad spécialisée dans l’accompagnements et l’orientations des jeunes en quête d’opportunités d’étude mais aussi d’insertion professionnelle. Un accès simple et rapide à toute information sur l'éducation au tchad. Des informations claires du système éducatif tchadien. L'Objectif de ce plateforme est de promouvoir l'éducation du tchad. Nous vous donnons l'information en temps réel sur toute l'actualité éducative au tchad et à l'international.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- css bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />
    <!-- JavaScript sweetalert -->
    <link rel="stylesheet" href="sweetalert2.min.css">
    <style type="text/css">
 
    body {
        margin-left: 25%;
        margin-top: 10%;
    }
    .form-control {
            box-shadow: none !important;
            outline: none !important;
            border: 2px solid #cecece;
            height: 38px;
        }
    </style>
</head>

<body class="bg-gradient-white">

    <div class="container ">
        <div class="row">


        <div class="shadow  col-lg-7 px-5 py-4">
            <div class="form-group ">
                <form action="traitement.php" method="post" >
                    <h3 class="mb-3">
                        <span class="text-secondary text-center">Espace de Connexion</span>
                    </h3>
                    <div class="form-group">
                        <label for="username">
                            <i class="fas fa-user"></i>
                        </label>
                        <input class="form-control" type="text" name="username" placeholder="Nom utilisateur"
                            id="username" autocomplete="off" required>
                    </div>

                    <div>
                        <label for="password">
                            <i class="fas fa-lock"></i>
                        </label>
                        <input class="form-control" type="password" name="password" placeholder="Mot de passe"
                            id="password" autocomplete="off" required>

                            </div> <!--mt-2 margin top(laisser de la place)-->
                            <div class="form-group mt-2">
                        <button type="submit" name ="valider" class=" btn btn-secondary mt-2">connexion<i
                                class="fas fa-sign-in-alt" ></i></button>
                                <a href="inscription.php" class="nav-link px-2">S'inscrire</a>

                    </div>
                
                   
                </form>
            </div>
        </div>
        </div>
    </div>
     
    </body>
</html>