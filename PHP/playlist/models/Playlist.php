<?php

class Playlist extends Manager{

    /**
     * Select toutes les playlists
     */
    public function getPlaylists()
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('SELECT * FROM playlist ORDER BY id DESC');
        $rq->execute(array());

        return $rq;
    }

    /**
     * Select une playlist
     */
    public function getPlaylist($id)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('SELECT * FROM playlist WHERE id = ?');
        $rq->execute(array($id));

        return $rq;
    }

    /**
     * Ajout d'une playlist
     */
    public function addPlaylist($nom, $style)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('INSERT INTO playlist(nom,style) VALUES(? ,?);');
        $rq->execute(array($nom, $style));

        return $rq;
    }

    /**
     * Suprimer une playlist
     */
    public function delPlaylist($id)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('DELETE FROM playlist WHERE id=?');
        $rq->execute(array($id));

        return $rq;
    }

    /**
     * Modification d'une playlist
     */
    public function updatePlaylist($id, $nom, $style)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('UPDATE playlist SET nom=?, style=? WHERE id=?');
        $rq->execute(array($nom, $style, $id));

        return $rq;
    }
}
