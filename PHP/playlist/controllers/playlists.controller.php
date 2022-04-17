<?php
require_once("getobjet.php");

function afficherPlaylists() {

    $playlist = new Playlist();
    $data = $playlist->getPlaylists();
    $title = "Playlist - Les playlists";
    $file = "playlist/playlists.php";
    require_once("views/template.php");
}

function pageAddPlaylist() {
    $title = "Playlist - Ajouter une playlist";
    $file = "playlist/add.php";
    require_once("views/template.php");
}

function addPlaylist($nom, $style) {

    $playlist = new Playlist();
    $data = $playlist->addPlaylist($nom, $style);
    echo "<script>alert(\"La playlist a étais ajoutée\")</script>";
    afficherPlaylists();
}

function deletePlaylist($id) {
    $playlist = new Playlist();
    $data = $playlist->delPlaylist($id);
    echo "<script>alert(\"La playlist a étais suprimé\")</script>";
    afficherPlaylists();
}

function pageUpdatePlaylist($id) {
    $playlist = new Playlist();
    $data = $playlist->getPlaylist($id);
    $file = "playlist/update.php";
    $title = "Playlist - Modifications";
    require_once("views/template.php");
}

function updatePlaylist($id, $nom, $style) {
    $playlist = new Playlist();
    $data = $playlist->updatePlaylist($id, $nom, $style);
    echo "<script>alert(\"La playlist a étais modifié\")</script>";
    pageUpdatePlaylist($id);
}