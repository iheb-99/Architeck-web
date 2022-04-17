
<div class="content">
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light haut">
        <div class="col-md-5 p-lg-5 mx-auto my-5 filter-blanc">
        <h1 class="display-4 fw-normal">Page des musiques</h1>
        <p class="lead fw-normal">Sur cette page on peut voir nos différentes musiques, vous avez accès à la modification, surpression et ajout d'une musique.</p>
        <a class="btn btn-secondary btn-lg" href="index.php?page=musiques&form=add">Ajouter une musique</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <h2>Liste des musiques</h2>
    <div class="container">
        <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Style</th>
            <th scope="col">Année</th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <?php 
            $i = 1;
            while($row = $data->fetch()) {
            ?>
        <a href="index.php?page=playlists&id=<?= $row['id']; ?>">
            <tr>
                <th scope="row"><?= $i?></th>
                <td><?= $row['titre'];?></td>
                <td><?= $row['artiste'];?></td>
                <td><?= $row['annee'];?></td>
                <td><a href="index.php?page=musiques&action=update&id=<?= $row['id']; ?>"><i class="fas fa-tools"></i></a></td>
                <td><a href="index.php?page=musiques&action=delete&id=<?= $row['id']; ?>"><i class="fas fa-trash-alt red"></i></a></td>
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
            echo "<h4> Aucun résultats</h4>";
        }   
        ?>
    </div>
</div>