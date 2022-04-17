<div class="content">
    <div class="blanc">
        <div class="container">
            <h2>Ajouter une musique à la playlist</h2>
            <form method="post" action="index.php?page=playlists&action=association&id=<?= $_GET['id'] ?>">
                <label>Liste de toutes les musiques diponible :</label>
                <select class="form-select" name="idMusique">

                    <?php while ($row = $musiques->fetch()) {

                    ?>
                    <option value="<?= $row['id']?>"><?= $row['titre']?> de <?= $row['artiste']?> le <?= $row['annee']?></option>
                    <?php 
                    }
                    ?>

                </select>
                <button type="submit" class="btn btn-primary envoyer" style="width:100%;">Ajouter</button>
            </form>
        </div>
    </div>

            
    <h2>
        <?php while($row = $data->fetch()) { ?>
        <?= $row['nom']; ?> de style <?= $row['style']; ?> 
         <?php
        } 
        ?> : Musiques associé
    </h2>
    <div class="container">
        <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Style</th>
            <th scope="col">Année</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <?php 
            $i = 1;
 
            for ($j=0; $j < count($result); $j++) { 
                
            
            ?>
        <a href="index.php?page=playlists&id=<?= $row['id']; ?>">
            <tr>
                <th scope="row"><?= $i?></th>
                <td><?= $result[$j]['titre'];?></td>
                <td><?= $result[$j]['artiste'];?></td>
                <td><?= $result[$j]['annee'];?></td>
                <td><a href="index.php?page=playlists&action=association&id=<?= $_GET['id']?>&musique=<?= $result[$j]['id'];?>"><i class="fas fa-trash-alt red"></i></a></td>
            </tr>
        </a>

        <?php
            $i = $i +1;
            }
        ?>

        </tbody>
        </table>
        <?php 
        if ($i == 1) {
            echo "<h4> Aucunes musiques associées à cette playlist</h4>";
        }   
        ?>
    </div>
</div>