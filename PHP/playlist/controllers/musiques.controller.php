<?php
require_once("getobjet.php");

function afficherMusiques() {

    $musique = new Musique();
    $data = $musique->getMusiques();
    $title = "Playlist - Les musiques";
    $file = "musique/musiques.php";

    require_once("views/template.php");
}

function pageAddMusique() {

    $title = "Playlist - Ajouter une musique";
    $file = "musique/add.php";

    require_once("views/template.php");
}

function addMusique($titre, $auteur, $annee) {
    $musique = new Musique();
    $data = $musique->addMusique($titre, $auteur, $annee);
    
    echo "<script>alert(\"La musique a étais ajouté\")</script>";

    afficherMusiques();
}

function deleteMusique($id) {
    $musique = new Musique();
    $data = $musique->delMusique($id);

    echo "<script>alert(\"La musique a étais suprimé\")</script>";
    afficherMusiques();
}

function pageUpdateMusique($id) {
    $musique = new Musique();
    $data = $musique->getMusique($id);
    $title = "Playlist - Modifier une musique";
    $file = "musique/update.php";
    require_once("views/template.php");

}

function updateMusique($id, $titre, $artiste, $annee) {
    $musique = new Musique();
    $data = $musique->updateMusique($id, $titre, $artiste, $annee);
    echo "<script>alert(\"La musique a étais modifié\")</script>";
    pageUpdateMusique($id);
}