<?php

class Musique extends Manager{

    /**
     * Select toutes les musiques
     */
    public function getMusiques()
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('SELECT * FROM musique ORDER BY id DESC');
        $rq->execute(array());

        return $rq;
    }

    /**
     * Select une musique
     */
    public function getMusique($id)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('SELECT * FROM musique WHERE id = ?');
        $rq->execute(array($id));

        return $rq;
    }

    /**
     * Ajout d'une musique
     */
    public function addMusique($titre, $artiste, $annee)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('INSERT INTO `musique` (`id`, `titre`, `artiste`, `annee`) VALUES (NULL, ?, ?, ?)');
        $rq->execute(array($titre, $artiste, $annee));

        return $rq;
    }

    /**
     * Suprimer une musique
     */
    public function delMusique($id)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('DELETE FROM musique WHERE id=?');
        $rq->execute(array($id));

        return $rq;
    }

    /**
     * Modification d'une musique
     */
    public function updateMusique($id, $titre, $artiste, $annee)
    {
        $db = $this->dbConnect();
        $rq = $db->prepare('UPDATE musique SET titre=?, artiste=?, annee=? WHERE id=?');
        $rq->execute(array($titre, $artiste, $annee, $id));

        return $rq;
    }
}