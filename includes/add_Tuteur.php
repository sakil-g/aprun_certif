<?php 
include_once '../include/dbh.inc.php'; 
function EnregistrerTuteur($conn){
  $nom = htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $email = htmlentities($_POST['email']);
  $mdp = htmlentities($_POST['mdp']);

  $sql = "INSERT INTO promotion (nom,promotion) VALUES ('$nomFormation', '$promotion');";

  $resulat = [];

  if (mysqli_query($conn, $sql)) {
      header("Location: ../index.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}
  ?>`
