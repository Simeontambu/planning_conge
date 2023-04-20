<?php
use App\Connexion;
$connexion = new Connexion();
$database = $connexion->getConnection();
/**
 * selection of data to fill our drop-down lists
 */
$selectleave = mysqli_query($database, "SELECT code_conge FROM conge");
$selectagent = mysqli_query($database, "SELECT nom FROM agent");
?>
<div class="container-center">
<div class="demande-conge">
<form action="" method="POST" >
<h1 class="ask-title">Planning congé</h1>
<div class="container">
    <div class="form-group">
        <label id="inscrit" for="" class="">Numéro planning</label>
        <input type="text" name="nom" class="">
    </div>
    <div class="form-group">
        <label id="inscrit" for="" class="">Date de depart</label>
        <input type="date" name="nom" class="">
    </div>
    <div class="form-group">
        <label id="inscrit" for="" class="">Date de retour</label>
        <input type="date" name="nom" class="">
    </div>
    <div class="form-group">
        <label id="" for="">code conge</label>
        <select name="objet" id="" class="">
            <?php while ($data = mysqli_fetch_array($selectleave)) {?>
            <option value="<?php echo $data['code_conge'] ?>"><?php echo $data['code_conge'] ?></option>
            <?php }?>

        </select>
    </div>
    <div class="form-group">
        <label id="inscrit" for="">Nom agent</label>
        <select name="objet" id="" class="">
            <?php while ($data = mysqli_fetch_array($selectagent)) {?>
            <option value="<?php echo $data['nom'] ?>"><?php echo $data['nom'] ?></option>
            <?php }?>

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
            <th>Numéro planning</th>
            <th>Date de depart</th>
            <th>Date de retour</th>
            <th>Matricule agent</th>
            <th>Code conge</th>
            <th>Modifier</th>
            <th>Supprimer</th>

        </tr>
    </thead>
    <tbody></tbody>
</table>
</div>
</div>
