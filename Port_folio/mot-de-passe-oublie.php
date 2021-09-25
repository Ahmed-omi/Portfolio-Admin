<?php

$SQL['host']="localhost";
$SQL['user']="root";
$SQL['pass']="narbonne12";
$SQL['base']="recup_mdp";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recovery</title>

        <link rel="shortcut icon" href="assets/images/logo.png">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/csss/style.css">
    </head>
    <body>


        <?php
        if(isset($_GET['code'],$_GET['mail'])){

            $Code=htmlentities($_GET['code'],ENT_QUOTES,"UTF-8");
            $Mail=htmlentities($_GET['mail'],ENT_QUOTES,"UTF-8");
            $mysqli=mysqli_connect($SQL['host'],$SQL['user'],$SQL['pass'],$SQL['base']);
            if(!$mysqli) {
                echo "Erreur connexion BDD";


                echo "<br>Erreur retournée: ".mysqli_connect_error();

            } else {
                $req=mysqli_query($mysqli,"SELECT * FROM recup_mdp WHERE code='$Code' AND mail='$Mail'");
                if(mysqli_num_rows($req)==1){

                    $NouveauPass=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"),0,5);

                    mysqli_query($mysqli,"UPDATE users SET pass='".md5($NouveauPass)."' WHERE mail='$Mail'");

                    mail($Mail,"Votre nouveau mot de passe","Le nouveau mot de passe pour votre compte est: $NouveauPass (Il est vivement conseille de le modifier depuis votre espace membre)");

                    mysqli_query($mysqli,"DELETE FROM recup_mdp WHERE code='$Code' AND mail='$Mail'");
                    echo "Votre nouveau pass temporaire vient d'être envoyé par mail.";
                } else {
                    echo "Lien incorrect.";
                }
            }
        } else {

            if(isset($_POST['valider'])){

                if(empty($_POST['mail'])){
                    echo "Le champs mail n'est pas renseigné.";
                } else {

                    $mysqli=mysqli_connect($SQL['host'],$SQL['user'],$SQL['pass'],$SQL['base']);
                    if(!$mysqli) {
                        echo "Erreur connexion BDD";


                    } else {

                        $Mail=htmlentities($_POST['mail'],ENT_QUOTES,"UTF-8");
                        $req=mysqli_query($mysqli,"SELECT * FROM users WHERE mail='$Mail'");
                        if(mysqli_num_rows($req)!=1){

                        } else {

                            $Code=md5(rand(1,99999999));
                            mysqli_query($mysqli,"INSERT INTO recup_mdp SET code='$Code', mail='$Mail'");
                            $Lien=$_SERVER['HTTP_HOST']."/mot-de-passe-oublie.php?code=$Code&mail=$Mail";
                            mail($Mail,"Recover password", "To receive a new password click on the following link: $Lien");
                        }
                        echo "<p>You will receive an email with a link to receive a new password.<a href='connexion.php'> Return to the login page</a></p>";
                        $TraitementFini=true;
                    }
                }
            }
            if(!isset($TraitementFini)){
                ?>


        <div class="registration-form">
            <form method="post"	action="mot-de-passe-oublie.php">
                <div class="form-icon">
                    <span><i class="icon icon-user"></i></span>
                </div>
                <div class="pass text-center" ><h2>Forgot Password?</h2>
                    <p>Please enter the email address associated with your account.</p>
                </div>
                <div class="form-group">
                    <input type="text" name="mail" class="form-control item" id="username" placeholder="Adresse email" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="valider" class="btn btn-block create-account">Reset my password</button>
                </div>
            </form>
        </div>


        <?php

            }
            }

        ?>


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="assets/js/script.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    </body>
</html>
