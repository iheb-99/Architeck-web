<?php 
while($row = $data->fetch()) {


?>
<div class="content blanc">
    <div class="container">
        <h2>Ajouter une playlist</h2>
        <form method="post" action="index.php?page=playlists&action=update&id=<?= $row['id'];?>">
            <div>
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="nom" required value="<?= $row['nom']?>"> 
            </div>
            <div>
                <label for="style" class="form-label">Style :</label>
                <input type="text" class="form-control" id="style" name="style" required value="<?= $row['style']?>">
            </div>
            <button type="submit" class="btn btn-primary envoyer" style="width:100%;">Modifier</button>
        </form>
    </div>
</div>

<?php 

}

?>