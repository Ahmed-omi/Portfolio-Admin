<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inscription</title>

		<link rel="shortcut icon" href="assets/images/logo.png">

		<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/csss/style.css">
	</head>
	<body>


		<?php

			if(isset($_POST['valider'])){

				if(!isset($_POST['nom'],$_POST['pseudo'],$_POST['mdp'],$_POST['mail'])){
					echo "Un des champs n'est pas reconnu.";
				} else {

					if(!preg_match("#^[a-z0-9]{1,15}$#",$_POST['nom'])){

						echo "Le nom est incorrect, doit contenir seulement des lettres minuscules et/ou des chiffres, d'une longueur minimum de 1 caractère et de 15 maximum.";

					} else {

						if(!preg_match("#^[a-z0-9]{1,15}$#",$_POST['pseudo'])){

							echo "Le pseudo est incorrect, doit contenir seulement des lettres minuscules et/ou des chiffres, d'une longueur minimum de 1 caractère et de 15 maximum.";

						} else {

							if(strlen($_POST['mdp'])<5 or strlen($_POST['mdp'])>15){
								echo "Le mot de passe doit être d'une longueur minimum de 5 caractères et de 15 maximum.";
							} else {

								if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i",$_POST['mail'])){

									echo "L'adresse mail est incorrecte.";

								} else {
									if(strlen($_POST['mail'])<7 or strlen($_POST['mail'])>50){
										echo "Le mail doit être d'une longueur minimum de 7 caractères et de 50 maximum.";
									} else {


										$mysqli=mysqli_connect('localhost','root','narbonne12','pseudo');
										if(!$mysqli) {
											echo "Erreur connexion BDD";


										} else {
											$Nom=htmlentities($_POST['nom'],ENT_QUOTES,"UTF-8");
											$Pseudo=htmlentities($_POST['pseudo'],ENT_QUOTES,"UTF-8");
											$Mdp=md5($_POST['mdp']);
											$Mail=htmlentities($_POST['mail'],ENT_QUOTES,"UTF-8");
											if(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE mail='$Mail'"))!=0){
												echo "This Email is already taken, please try another one thanks.";
											} else {

												if(mysqli_query($mysqli,"INSERT INTO membres SET nom='$Nom', pseudo='$Pseudo', mdp='$Mdp', mail='$Mail'")){
													echo header("Location: connexion.php");
													$TraitementFini=true;
												} else {
													echo "An error has occurred, please try again or contact us if the problem persists.";

												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
			if(!isset($TraitementFini)){
		?>


		<div class="registration-form">
			<form method="post"	action="inscription.php">
				<div class="form-icon">
					<span><i class="icon icon-user"></i></span>
				</div>
				<div class="form-group">
					<input type="text" name="nom" class="form-control item" id="name" placeholder="Name" required>
				</div>
				<div class="form-group">
					<input type="text" name="pseudo" class="form-control item" id="username" placeholder="Pseudo" required>
				</div>
				<div class="form-group">
					<input type="password" name="mdp" class="form-control item" id="password" placeholder="password" required>
				</div>
				<div class="form-group">
					<input type="email" name="mail" class="form-control item" id="email" placeholder="Email" required>
				</div>
				<div class="form-group">
					<button type="submit" name="valider" class="btn btn-block create-account">Create my account</button>
				</div>
				<div class="link text-center">already a member ? <a href="connexion.php">Connection</a></div>
			</form>
			</div>


		<?php

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
