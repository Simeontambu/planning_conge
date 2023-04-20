<?php
use App\Connexion;
$connexion = new Connexion();
$database = $connexion->getConnection();
/**
 * selection of data to fill our drop-down lists
 */
$selectduration = mysqli_query($database, "SELECT libelle FROM durer");
$selectmotif = mysqli_query($database, "SELECT libelle FROM motif");
$selectagent = mysqli_query($database, "SELECT nom FROM agent");
?>
<div class="container-center">
<div class="demande-conge">
<form action="" method="POST" >
<h1 class="ask-title">Demande de congé</h1>
<div class="container">
    <!-- <div class="form-group">
        <label id="inscrit" for="" class="">Code de congé</label>
        <input type="text" name="nom" class="">
    </div> -->
    <div class="form-group">
        <label id="" for="">Libellé duré</label>
        <select name="objet" id="" class="">
            <?php while ($data = mysqli_fetch_array($selectduration)) {?>
            <option value="<?php echo $data['libelle'] ?>"><?php echo $data['libelle'] ?></option>
            <?php
}
?>

        </select>
    </div>
    <div class="form-group">
        <label id="inscrit" for="">Libellé motif</label>
        <select name="objet" id="" class="">
            <?php while ($data = mysqli_fetch_array($selectmotif)) {?>
            <option value="<?php echo $data['libelle'] ?>"><?php echo $data['libelle'] ?></option>
            <?php
}
?>

        </select>
    </div>
    <div class="form-group">
        <label id="inscrit" for="">Nom agent</label>
        <select name="objet" id="" class="">
            <?php while ($data = mysqli_fetch_array($selectagent)) {?>
            <option value="<?php echo $data['nom'] ?>"><?php echo $data['nom'] ?></option>
            <?php
}
?>

        </select>
    </div>
    </div>
    <div class="operation">
    <button type="submit" class="" id="bg-dark">Soumettre</button>
    <button type="reset" class="btn" id="bg-dark">Netttoyer</button>
    </div>

</form>

<table>
    <thead>
        <tr>
            <th>Code congé</th>
            <th>Libellé duré</th>
            <th>Libellé motif</th>
            <th>Nom agent</th>
            <th>Modifier</th>
            <th>Supprimer</th>

        </tr>
    </thead>
    <tbody></tbody>
</table>
</div>
</div>
