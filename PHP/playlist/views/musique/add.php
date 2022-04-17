<div class="content blanc">
    <div class="container">
        <h2>Ajouter une playlist</h2>
        <form method="post" action="index.php?page=musiques&form=add">
            <div>
                <label for="nom" class="form-label">Titre :</label>
                <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="titre" required> 
            </div>
            <div>
                <label for="style" class="form-label">Auteur :</label>
                <input type="text" class="form-control" id="style" name="auteur" required>
            </div>
            <div>
                <label for="style" class="form-label">Annee :</label>
                <input type="date" class="form-control" id="style" name="annee" required>
            </div>
            <button type="submit" class="btn btn-primary envoyer" style="width:100%;">Ajouter</button>
        </form>
    </div>
</div>

