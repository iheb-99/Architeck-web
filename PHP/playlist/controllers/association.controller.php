<?php
require_once("getobjet.php");

function association($id) {

    $result = array();

    $playlist = new Playlist();
    $data = $playlist->getPlaylist($id);

    $association = new Association();
    $asso = $association->getAssociation($id);
    
    $musique = new Musique();
    while($row = $asso->fetch()) {
        $re = $musique->getMusique($row['id_musique']);
        while($rep = $re->fetch()) {
            array_push($result, array(
                "id" => $rep['id'],
                "titre" => $rep['titre'],
                "artiste" => $rep['artiste'],
                "annee" => $rep['annee'],
            ));
        }
    }

    $musiques = $musique->getMusiques();

    $title = "Playlist - Les associations";
    $file = "association/association.php";
    require_once("views/template.php");
}

function addAssociation($id, $idMusique) {
    $association = new Association();
    $asso = $association->addAssociation($id, $idMusique);
    association($id);
}

function delAssociation($id, $idMusique) {
    $association = new Association();
    $asso = $association->delAssociation($id, $idMusique);
    association($id);
}