<?php include_once '../includes/dbh.inc.php'; //accéder a la base de donnée
 $id = $_GET['id'];
 $sql = "SELECT * FROM utilisateur WHERE id_user = $id;" ; //selectionner la base de donnée UTILISATEUR
 $result = $conn->query($sql); 
    $result=$result->fetch_assoc();
    ?>

<form class="container-fluid " method="POST" enctype="multipart/form-data" action="../includes/modificateur_formateur.php">
<input type="text" hidden value="<?php echo $result['id_user']?>" name = 'id'>
<label class="" for="nom">Nom</label>
                <input class=" form-control " type="text" name="nom" id="nom" required value="<?php echo $result['nom'] ?>">

                <label class="mb-2" for="prenom">Prenom</label>
                <input class=" form-control" type="text" name="prenom" id="prenom" required value="<?php echo $result['prenom'] ?>">

                <label class="mb-2" for="email">Adresse email</label>
                <input class=" form-control " type="mail" name="email" id="email" required value="<?php echo $result['email'] ?>">

                <select class="form-control" name="statut_tuteur" id="statut_tuteur">
                    <option value= '1'>Oui</option>
                    <option value= '0'>Non</option>
                </select>

                <button type="submit" name="submit_parametre" class="btn btn-warning text-uppercase text-white font-weight-bold btn AjoutEnchere mb-5" style="width:200px; height:20px;">Enregistrer modification</button>
</form>

