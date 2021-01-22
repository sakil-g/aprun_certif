<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>APRUN Carnet de bord</title>
</head>

    <body>

        <header>
            <nav class="navbar navbar-light">
                <div class="container logo">
                    <a class="navbar-brand" href="https://www.aprunformation.fr/" >
                    <img src="../ressources/img/logo.png" alt="logo" height="100" class="">
                    </a>
                </div>
            </nav>
        </header>

        <section class="container-fluid d-flex flex-column justify-content-center align-items-center" id="connexion">
            <h1 class="bienvenue text-center" style="width:20%">Bienvenue</h1>
            <div  id="formulaire_connexion">
                <form method="POST" action="../includes/login.php">

                    <div class="d-flex flex-column p-2 align-items-end login" style="border:2px solid black">
                        <input class="my-2 form-control" type="text" name="email" id="mail_utilisateur" placeholder="Adresse email">
                        <input class="my-2 form-control" type="password" name="mdp" id="mdp_utilisateur" placeholder="Mot de passe">
                        <input type="submit" class="btn btn-primary w-50" value="Se connecter" name="connexion">
                    </div>
                </form>
            </div>
        </section>
    </body>

</html>