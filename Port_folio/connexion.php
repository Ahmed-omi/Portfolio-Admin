<?php

	session_start();

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Connection</title>

		<link rel="shortcut icon" href="assets/images/logo.png">

		<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/csss/style.css">

	</head>
	<body>


		<?php

			if(isset($_SESSION['pseudo'])){
				echo header("Location:espace-membre.php");
			} else {

				if(isset($_POST['valider'])){

					if(!isset($_POST['pseudo'],$_POST['mdp'])){
						echo "Un des champs n'est pas reconnu.";
					} else {

						$mysqli=mysqli_connect('localhost','root','narbonne12','pseudo');
						if(!$mysqli) {
							echo "Erreur connexion BDD";

						} else {

							$Pseudo=htmlentities($_POST['pseudo'],ENT_QUOTES,"UTF-8");
							$Mdp=md5($_POST['mdp']);
							$req=mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='$Pseudo' AND mdp='$Mdp'");

							if(mysqli_num_rows($req)!=1){
								echo "Pseudo ou mot de passe incorrect.";
							} else {

								$_SESSION['pseudo']=$Pseudo;
								echo header("Location: espace-membre.php");
								$TraitementFini=true;
							}
						}
					}
				}
				if(!isset($TraitementFini)){
		?>


		<div class="registration-form">
			<form method="post"	action="connexion.php">
				<div class="form-icon">
					<span><i class="icon icon-user"></i></span>
				</div>
				<div class="form-group">
					<input type="text" name="pseudo" class="form-control item" id="username" placeholder="Pseudo" required>
				</div>
				<div class="form-group">
					<input type="password" name="mdp" class="form-control item" id="password" placeholder="Password" required>
				</div>
				<div class="form-group">
					<button type="submit" name="valider" class="btn btn-block create-account">Connection</button>
					<button type="submit" class="btn btn-block create-account"><a href="mot-de-passe-oublie.php" class="text-muted text-white">Forgot Password?</a></button>
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
