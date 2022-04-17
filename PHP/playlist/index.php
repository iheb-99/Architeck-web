<?php


if(!isset($_GET['page'])) {
	
	require_once("controllers/default.controller.php");
	/**
	 * Ici j'affiche la page par défaut
	 */
	acceuil();

} else {

	/**
	 * TOUTES LES ACTIONS POUR LES PLAYLISTS
	 */
	if ($_GET['page'] == "playlists") {
		/**
		 * Toutes les actions pour les playlist
		 */
		require_once("controllers/playlists.controller.php");
		if (isset($_GET['form'])) {
			if ($_GET['form'] == "add" ) {
				
				/**
				 * Si un formulaire est soumis je lance l'ajout de la playlist puis le formulaire sinon j'affiche le formulaire
				 */
				if (isset($_POST['nom']) && isset($_POST['style'])) {
					addPlaylist($_POST['nom'], $_POST['style']);
					echo "bite";
				} else {
					pageAddPlaylist();
				}

			} else if ($_GET['form'] == "Modifier") {
				/**
				 * Modifier
				 */
			}
		} else if(isset($_GET['action']) && isset($_GET['id'])) {
			if ($_GET['action'] == "delete") {
				deletePlaylist($_GET['id']);
			} elseif ($_GET['action'] == "update") {
				if(isset($_POST['nom']) && isset($_POST['style'])) {
					updatePlaylist($_GET['id'], $_POST['nom'], $_POST['style']);
				} else {
					pageUpdatePlaylist($_GET['id']);
				}	

			} elseif($_GET['action'] == "association") {
				require_once("controllers/association.controller.php");
				if (isset($_POST['idMusique'])) {
					addAssociation($_GET['id'], $_POST['idMusique']);
				} else if(isset($_GET['musique'])) {
					delAssociation($_GET['id'], $_GET['musique']);
				}
				else {
					association($_GET['id']);
				}
			}
			else {
				afficherPlaylists();
			}
		} 
		
		else {
			/**
			 * Afficher les playlist
			 */
			afficherPlaylists();
		}
	} else if($_GET['page'] == "musiques"){
		require_once("controllers/musiques.controller.php");
		if (isset($_GET['form'])) {
			if (isset($_POST['auteur']) && isset($_POST['annee']) && isset($_POST['titre'])) {
				addMusique($_POST['titre'], $_POST['auteur'], $_POST['annee']);
			} else {
				pageAddMusique();
			}
		} else if(isset($_GET['action']) && isset($_GET['id'])) {
			if ($_GET['action'] == "delete") {
				deleteMusique($_GET['id']);
			} else if ($_GET['action'] == "update") {
				if (isset($_POST['auteur']) && isset($_POST['titre']) && isset($_POST['annee'])) {
					updateMusique($_GET['id'], $_POST['titre'], $_POST['auteur'], $_POST['annee']);
				} else {
					pageUpdateMusique($_GET['id']);
				}
			} else {
				afficherMusiques();
			}
		}
		else {
			afficherMusiques();
		}
	}

}	