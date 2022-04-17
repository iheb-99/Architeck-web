<?php

class Association extends Manager{

    /**
     * Select une association
     */
    public function getAssociation($id)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('SELECT * FROM association WHERE id_playlist = ?');
        $rq->execute(array($id));

        return $rq;
    }

    /**
     * Ajout d'une association
     */
    public function addAssociation($idPlaylist, $idMusique)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('INSERT INTO association(id_playlist, id_musique) VALUES(? ,?);');
        $rq->execute(array($idPlaylist, $idMusique));

        return $rq;
    }

    /**
     * Suprimer une association
     */
    public function delAssociation($idPlaylist, $idMusique)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('DELETE FROM association WHERE id_playlist=? AND id_musique= ?');
        $rq->execute(array($idPlaylist, $idMusique));

        return $rq;
    }

}