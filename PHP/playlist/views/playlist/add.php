<div class="content blanc">
    <div class="container">
        <h2>Ajouter une playlist</h2>
        <form method="post" action="index.php?page=playlists&form=add">
            <div>
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="nom" required> 
            </div>
            <div>
                <label for="style" class="form-label">Style :</label>
                <input type="text" class="form-control" id="style" name="style" required>
            </div>
            <button type="submit" class="btn btn-primary envoyer" style="width:100%;">Ajouter</button>
        </form>
    </div>
</div>

