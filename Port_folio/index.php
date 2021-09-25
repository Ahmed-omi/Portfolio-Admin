<?php
require 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title> PortFolio</title>
	<link rel="stylesheet" href="csss/style.css">
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://db.onlinewebfonts.com/c/f9cd8ac3dd15e9281e4b71e520965608?family=Amienne" rel="stylesheet" type="text/css"/>
</head>


<body>

	<div class="parallax">
	 	<div class="page-tittle">Welcome to My PortFolio </div>

	</div>

 	<div class="menu" id="sticky">
		<div class="font-weight-bold">
		<nav class=" nav navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand" href="index.html"><img src="" alt="" class="logo" width="auto" height="80em"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbarContent" class="collapse navbar-collapse justify-content-center">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#html">HTML</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#css">Css</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#javascript">Javascript</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#bootstrap">Bootstrap</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#php">PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#symfony">Symfony</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#cms">CMS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="connexion.php">Admin</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="deconnexion.php">LogOut</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	</div>

      <!--Home Page Begins-->


			<div class="container">
				<a id="btnHtml" href="#html">
				<div class="categories">
					<img src="img/html.jpg" class="item-image1" />
					<div class="image-title"> Html </div>
				</div>

			</a>
			<a id="btnCss" href="#css">
				<div class="categories">
					<img src="img/css.jpg" class="item-image1" />
					<div class="image-title"> Css </div>
				</div>
			</a>

      <a id="btnJavascript" href="#javascript">
          <div class="categories">
              <img src="img/js.png" class="item-image1" />
              <div class="image-title"> Javascript </div>
          </div>
      </a>

			<a id="btnBootstrap1" href="#bootstrap">
				<div class="categories">
					<img src="img/bs.png" class="item-image1" />
					<div class="image-title"> Bootstrap </div>
				</div>
			</a>

      <a id="btnPhp" href="#php">
          <div class="categories">
              <img src="img/php.png" class="item-image1" />
              <div class="image-title"> Php </div>
          </div>
      </a>

			<a id="btnSymfony" href="#symfony">
				<div class="categories">
					<img src="img/sym.png" class="item-image1" />
					<div class="image-title"> Symfony </div>
				</div>
			</a>

      <a id="btnCms" href="#cms">
        <div class="categories">
          <img src="img/cms.jpg" class="item-image1" />
          <div class="image-title">
               Cms </div>
        </div>
      </a>


			<a id="btnpush" href="#push">
				<div class="categories">
					<img src="img/click.jpg" class="item-image1" />
					<div class="image-title">
               Push </div>
				</div>
			</a>

		</div>

				<!--Home Page Ends-->


				<!--veg HTML here-->
				<div class="deals-container" id="html">
					<div class="parallax">
						<div class="title"> HTML </div>
					</div>

                 <div class="row cards p-4 m-0">
                <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="img/html.jpg" alt="">
                    <div class="card-body">
                        <h5>Introduction</h5>

                        <p class="card-text"> Langage de description de documents hypertextuels, composé de balises, utilisé par les pages web..</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-target="#info" class="btn btn-info">Lire la suite</button>
                                <div class="modal" id="info">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <img class="card-img-top" src="img/html.jpg" alt="">
                                            <p> Langage normalisé de marquage et de structuration des documents hypermédias sur le web. HTML est une DTD (définition de type de document) de SGML.</p>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


						<?php
						$sql = "SELECT * FROM `projects` WHERE category = 'HTML'";

						include "clients.php";

							foreach($clients as $key => $value){
								?>
								<div class="col-md-3 ">
									 <div class="card mb-4 shadow-sm">
											 <img class="card-img-top" src="Port_folio/<?= $clients[$key]['images'] ?>" alt="">
											 <div class="card-body">
													 <h5><?= $clients[$key]['name'] ?></h5>
													 <p class="card-text"><?= $clients[$key]['short_desc'] ?></p>
													 <div class="d-flex justify-content-between align-items-center">
															 <div class="btn-group">
																 	 <button type="button" data-toggle="modal" data-target="#info1" class="btn btn-info">Lire la suite</button>
																	   <div class="modal" id="info1">
																			 <div class="modal-dialog">
																					 <div class="modal-content">
																							 <img class="card-img-top" src="" alt="">
																							 <p><?= $clients[$key]['long_desc'] ?>.</p>
																							 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																					 </div>
																			 </div>
																	 </div>

															 </div>
													 </div>
											 </div>
									 </div>
							 </div>
						 <?php };?>
					 </div>
				 </div>

             <!--HTML ends here-->

             <!--CSS Begins here-->
				<div class="deals-container" id="css">
					<div class="parallax">
						<div class="title"> CSS </div>
                 </div>
                 <div class="row cards p-4 m-0">
                <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="img/css.jpg" alt="">
                    <div class="card-body">
                        <h5>Introduction</h5>
                        <p class="card-text">Les feuilles de styles (en anglais "Cascading Style Sheets", abrégé CSS) sont un langage qui permet de gérer la présentation d'une page Web..</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-target="#info2" class="btn btn-info">Lire la suite</button>
                                <div class="modal" id="info2">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <img class="card-img-top" src="img/css.jpg" alt="">
                                  <p> Les styles permettent de définir des règles appliquées à un ou plusieurs documents HTML. Ces règles portent sur le positionnement des éléments, l'alignement, les polices de caractères, les couleurs, les marges et espacements, les bordures, les images de fond, etc.</p>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


						<?php
						$sql = "SELECT * FROM `projects` WHERE category = 'CSS'";

						include "clients.php";

							foreach($clients as $key => $value){
								?>
								<div class="col-md-3">
									 <div class="card mb-4 shadow-sm">
											 <img class="card-img-top" src="Port_folio/<?= $clients[$key]['images'] ?>" alt="">
											 <div class="card-body">
													 <h5><?= $clients[$key]['name'] ?></h5>
													 <p class="card-text"><?= $clients[$key]['short_desc'] ?></p>
													 <div class="d-flex justify-content-between align-items-center">
															 <div class="btn-group">
																	 <button type="button" data-toggle="modal" data-target="#info3" class="btn btn-info">Lire la suite</button>
																	 <div class="modal" id="info3">
																			 <div class="modal-dialog">
																					 <div class="modal-content">
																							 <img class="card-img-top" src="" alt="">
																							 <p><?= $clients[$key]['long_desc'] ?>.</p>
																							 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																					 </div>
																			 </div>
																	 </div>

															 </div>
													 </div>
											 </div>
									 </div>
							 </div>


						 <?php };?>
					 </div>
				</div>


             <!--CSS ends here-->


             <!--JavaScript ends here-->

             <div class="deals-container" id="javascript">
                    <div class="parallax">
                        <div class="title"> JavaScript </div>
                 </div>

             <div class="row cards p-4 m-0">
                <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="img/js.png" alt="">
                    <div class="card-body">
                        <h5>Introduction</h5>
                        <p class="card-text">Le JavaScript est un langage informatique utilisé sur les pages web. Ce langage à la particularité de s'activer sur le poste client, en d'autres mots c'est votre ordinateur qui va recevoir le code et qui devra l'exécuter.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-target="#info4" class="btn btn-info">Lire la suite</button>
                                <div class="modal" id="info4">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <img class="card-img-top" src="img/js.png" alt="">
                                          <p> La particularité du JavaScript consiste à créer des petits scripts sur une page HTML dans le but d'ajouter une petite animation ou un effet particulier sur la page. Cela permet en général d'améliorer l'ergonomie ou l'interface utilisateur, mais certains scripts sont peu utile et servent surtout à ajouter un effet esthétique à la page. L'intérêt du JavaScript est d'exécuté un code sans avoir à recharger une nouvelle fois la page.</p>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


						<?php
						$sql = "SELECT * FROM `projects` WHERE category = 'JavaScript'";

						include "clients.php";

							foreach($clients as $key => $value){
								?>
								<div class="col-md-3">
									 <div class="card mb-4 shadow-sm">
											 <img class="card-img-top" src="Port_folio/<?= $clients[$key]['images'] ?>" alt="">
											 <div class="card-body">
													 <h5><?= $clients[$key]['name'] ?></h5>
													 <p class="card-text"><?= $clients[$key]['short_desc'] ?></p>
													 <div class="d-flex justify-content-between align-items-center">
															 <div class="btn-group">
																	 <button type="button" data-toggle="modal" data-target="#info5" class="btn btn-info">Lire la suite</button>
																	 <div class="modal" id="info5">
																			 <div class="modal-dialog">
																					 <div class="modal-content">
																							 <img class="card-img-top" src="" alt="">
																							 <p><?= $clients[$key]['long_desc'] ?>.</p>
																							 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																					 </div>
																			 </div>
																	 </div>

															 </div>
													 </div>
											 </div>
									 </div>
							 </div>

					      <?php };?>
						  </div>
					</div>
              <!--Bootstrap Begins here-->
				<div class="deals-container" id="bootstrap">
					<div class="parallax">
						<div class="title"> BootStrap </div>
                 </div>
                 <div class="row cards p-4 m-0">
                <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="img/bs.png" alt="">
                    <div class="card-body">
                        <h5>Introduction</h5>
                        <p class="card-text">Bootstrap est une infrastructure de développement frontale, gratuite et open source pour la création de sites et d'applications Web. L'infrastructure Bootstrap repose sur HTML, CSS et JavaScript (JS) pour faciliter le développement de sites et d'applications responsif et tout-mobile..</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-target="#info6" class="btn btn-info">Lire la suite</button>
                                <div class="modal" id="info6">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <img class="card-img-top" src="img/bs.png" alt="">
                                            <p>La conception réactive permet à une page ou une application Web de détecter la taille et l'orientation de l'écran du visiteur pour adapter automatiquement l'affichage ; l'approche tout-mobile repose sur le principe que les employés utilisent principalement des smartphones, des tablettes et des applications mobiles spécialisées pour exécuter leurs tâches, et prend donc en compte les besoins de ces technologies dans la conception.</p>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

						<?php
						$sql = "SELECT * FROM `projects` WHERE category = 'BootStrap'";

						include "clients.php";

							foreach($clients as $key => $value){
								?>
								<div class="col-md-3">
									 <div class="card mb-4 shadow-sm">
											 <img class="card-img-top" src="Port_folio/<?= $clients[$key]['images'] ?>" alt="">
											 <div class="card-body">
													 <h5><?= $clients[$key]['name'] ?></h5>
													 <p class="card-text"><?= $clients[$key]['short_desc'] ?></p>
													 <div class="d-flex justify-content-between align-items-center">
															 <div class="btn-group">
																	 <button type="button" data-toggle="modal" data-target="#info7" class="btn btn-info">Lire la suite</button>
																	 <div class="modal" id="info7">
																			 <div class="modal-dialog">
																					 <div class="modal-content">
																							 <img class="card-img-top" src="" alt="">
																							 <p><?= $clients[$key]['long_desc'] ?>.</p>
																							 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																					 </div>
																			 </div>
																	 </div>

															 </div>
													 </div>
											 </div>
									 </div>
							 </div>

					      <?php };?>
					 	 </div>
					 </div>


             <!--BootStrap ends here-->

             <!--PHP Begins here-->
                <div class="deals-container" id="php">
                    <div class="parallax">
                        <div class="title"> PHP </div>
                 </div>

                 <div class="row cards p-4 m-0">
                <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="img/php.png" alt="">
                    <div class="card-body">
                        <h5>Introduction</h5>
                        <p class="card-text">Le langage informatique est une sorte de code écrit grâce à des lettres, des chiffres et des symboles qui permet de créer tout ce que l’on trouve sur l’ordinateur. Il s’agit alors de configurer tout le code informatique d'un site.C'est une langue très connue.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-target="#info8" class="btn btn-info">Lire la suite</button>
                                <div class="modal" id="info8">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <img class="card-img-top" src="img/php.png" alt="">
                                            <p>PHP signifie « Hypertext Preprocessor ». Ce langage de programmation est en open source, cela signifie que ce langage est libre d’utilisation. Tout le monde peut apprendre à s’en servir et tout le monde peut l’utiliser. Il est notamment utilisé dans la création de page internet. Pour cela, le langage PHP utilise alors le serveur bien connu de tous : le HTTP. Ce dernier introduit la plupart des adresses de nos pages web.</p>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


						<?php
						$sql = "SELECT * FROM `projects` WHERE category = 'PHP'";

						include "clients.php";

							foreach($clients as $key => $value){
								?>
								<div class="col-md-3">
									 <div class="card mb-4 shadow-sm">
											 <img class="card-img-top" src="Port_folio/<?= $clients[$key]['images'] ?>" alt="">
											 <div class="card-body">
													 <h5><?= $clients[$key]['name'] ?></h5>
													 <p class="card-text"><?= $clients[$key]['short_desc'] ?></p>
													 <div class="d-flex justify-content-between align-items-center">
															 <div class="btn-group">
																	 <button type="button" data-toggle="modal" data-target="#info9" class="btn btn-info">Lire la suite</button>
																	 <div class="modal" id="info9">
																			 <div class="modal-dialog">
																					 <div class="modal-content">
																							 <img class="card-img-top" src="" alt="">
																							 <p><?= $clients[$key]['long_desc'] ?>.</p>
																							 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																					 </div>
																			 </div>
																	 </div>

															 </div>
													 </div>
											 </div>
									 </div>
							 </div>

						 <?php };?>
						 </div>
						</div>
              <!--PHP Ends here-->

              <!--Symfony Begins here-->
				<div class="deals-container" id="symfony">
					<div class="parallax">
						<div class="title"> Symfony </div>
                 </div>

                <div class="row cards p-4 m-0">
                <div class="col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="img/sym.png" alt="">
                    <div class="card-body">
                        <h5>Introduction</h5>
                        <p class="card-text">Symfony est un framework qui représente un ensemble de composants (aussi appelés librairies) PHP autonomes qui peuvent être utilisés dans des projets web privé ou open source.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-target="#info10" class="btn btn-info">Lire la suite</button>
                                <div class="modal" id="info10">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <img class="card-img-top" src="img/sym.png" alt="">
                                            <p>Symfony est un système fragmenté et chaque composant peut être utilisé individuellement et intégré dans un site internet. Comme les librairies sont compatibles avec de nombreux CMS, il devient très rapide et facile de les intégrer.

                                               Ainsi vous pouvez utiliser des composants Symfony seul ou avec des CMS opensources comme Drupal, Grav et d’autres encore comme Magento. L’avantage d’utiliser le Framework PHP pour votre projet web est la rapidité de création, mais aussi la maintenance. Le support et la communauté vous permettent de trouver des solutions efficaces aux problèmes qui pourraient se poser dans le développement. Terminé les tâches répétitives ! Vous pouvez utiliser ces ressources en toute simplicité. </p>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

						<?php
						$sql = "SELECT * FROM `projects` WHERE category = 'Symfony'";

						include "clients.php";

							foreach($clients as $key => $value){
								?>
								<div class="col-md-3">
									 <div class="card mb-4 shadow-sm">
											 <img class="card-img-top" src="Port_folio/<?= $clients[$key]['images'] ?>" alt="">
											 <div class="card-body">
													 <h5><?= $clients[$key]['name'] ?></h5>
													 <p class="card-text"><?= $clients[$key]['short_desc'] ?></p>
													 <div class="d-flex justify-content-between align-items-center">
															 <div class="btn-group">
																	 <button type="button" data-toggle="modal" data-target="#info11" class="btn btn-info">Lire la suite</button>
																	 <div class="modal" id="info11">
																			 <div class="modal-dialog">
																					 <div class="modal-content">
																							 <img class="card-img-top" src="" alt="">
																							 <p><?= $clients[$key]['long_desc'] ?>.</p>
																							 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																					 </div>
																			 </div>
																	 </div>

															 </div>
													 </div>
											 </div>
									 </div>
							 </div>

					  <?php };?>
						</div>
					</div>

             <!--Symfony ends here-->


        <!--Cms starts here-->

        <div class="deals-container" id="cms">
               <div class="parallax">
                   <div class="title"> CMS </div>
								 </div>


        <div class="row cards p-4 m-0">
           <div class="col-md-3">
           <div class="card mb-4 shadow-sm">
               <img class="card-img-top" src="img/cms.jpg" alt="">
               <div class="card-body">
                   <h5>Introduction</h5>
                   <p class="card-text">Un système de gestion de contenu est indispensable pour construire et enrichir un site internet. Il en existe de très différents, selon la taille ou la complexité du site et le choix n'est pas anodin.</p>
                   <div class="d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                           <button type="button" data-toggle="modal" data-target="#info12" class="btn btn-info">Lire la suite</button>
                           <div class="modal" id="info12">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <img class="card-img-top" src="img/cms.jpg" alt="">
                                       <p>Système de gestion de contenu : qu'est-ce que c'est ?

                                          Le système de gestion de contenu (SGC) ou Content Management System (CMS) en anglais regroupe une catégorie de logiciels qui permettent de concevoir, gérer et mettre à jour des sites Web ou des application mobile de manière dynamique.  </p>
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   </div>
                               </div>

                       </div>
                   </div>
               </div>
          </div>
				</div>
			</div>



			 <?php
			 $sql = "SELECT * FROM `projects` WHERE category = 'CMS'";

			 include "clients.php";

				 foreach($clients as $key => $value){
					 ?>
					 <div class="col-md-3">
							<div class="card mb-4 shadow-sm">
									<img class="card-img-top" src="Port_folio/<?= $clients[$key]['images'] ?>" alt="">
									<div class="card-body">
											<h5><?= $clients[$key]['name'] ?></h5>
											<p class="card-text"><?= $clients[$key]['short_desc'] ?></p>
											<div class="d-flex justify-content-between align-items-center">
													<div class="btn-group">
															<button type="button" data-toggle="modal" data-target="#info13" class="btn btn-info">Lire la suite</button>
															<div class="modal" id="info13">
																	<div class="modal-dialog">
																			<div class="modal-content">
																					<img class="card-img-top" src="" alt="">
																					<p><?= $clients[$key]['long_desc'] ?>.</p>
																					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																			</div>
																	</div>
															</div>

													</div>
											</div>
									</div>
							</div>
					</div>

				<?php };?>
	    	</div>
			</div>


   <!--CMS ends here-->


             <!--Footer starts here-->

             	<div class="footer m-0">
             		<div class="quick-links">
             			<div>Locations</div>
             			<ul>
             				<li><a href="" class="a-links"> Adresse </a></li>
             				<li><a href="" class="a-links"> Plans </a></li>
             				<li><a href="" class="a-links"> Bureau </a></li>

                           </ul>
                       </div>
                       <div class="quick-links">
             			<div>Contact</div>
             			<ul>
             				<li><a href="" class="a-links"> Email </a></li>
             				<li><a href="" class="a-links"> Telephone </a></li>
             				<li><a href="" class="a-links"> Message </a></li>

                           </ul>
                       </div>
                       <div class="quick-links">
             			<div>Links</div>
             			<ul>
             				<li><a href="" class="a-links"> Instagram </a></li>
             				<li><a href="" class="a-links"> Twitter  </a></li>
             				<li><a href="" class="a-links"> LinkedIn </a></li>

                           </ul>
                       </div>
                   </div>
                   <div class="copyrights">
                        <i class="far fa-copyright fa-1x"></i> 2021 By Ahmed Omer
                   </div>



             <!--Footer Ends here-->

<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
