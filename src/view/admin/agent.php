<?php
use App\Connexion;

$connexion = new Connexion();
$database = $connexion->getConnection();
/**
 * selection of data to fill our drop-down lists
 */
$selectdirection = mysqli_query($database, "SELECT libelle FROM direction");
$selectgrade = mysqli_query($database, "SELECT libelle FROM grade");
$selectfunction = mysqli_query($database, "SELECT libelle FROM fonction");

if (isset($_REQUEST['name'], $_REQUEST['postname'], $_REQUEST['firstname'], $_REQUEST['adress'], $_REQUEST['number'], $_REQUEST['sex'])) {
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($database, $name);
    $postname = stripslashes($_REQUEST['postname']);
    $postname = mysqli_real_escape_string($database, $postname);
    $firstname = stripslashes($_REQUEST['firstname']);
    $firstname = mysqli_real_escape_string($database, $firstname);
    $adress = stripslashes($_REQUEST['adress']);
    $adress = mysqli_real_escape_string($database, $adress);
    $number = stripslashes($_REQUEST['number']);
    $number = mysqli_real_escape_string($database, $number);
    $sex = stripslashes($_REQUEST['sex']);
    $sex = mysqli_real_escape_string($database, $sex);
    $lib_grade = stripslashes($_REQUEST['lib_grade']);
    $lib_grade = mysqli_real_escape_string($database, $lib_grade);
    $lib_funct = stripslashes($_REQUEST['lib_funct']);
    $lib_funct = mysqli_real_escape_string($database, $lib_funct);
    $lib_direct = stripslashes($_REQUEST['lib_direct']);
    $lib_direct = mysqli_real_escape_string($database, $lib_direct);

/**
 * insert data
 */
    $query = "INSERT INTO `agent` (matricule_agent, code_grade, code_fonction, code_direction, nom, postnom, prenom, adresse, telephone, sexe) VALUES (null,'1', '1', '1','$name', '$postname', '$firstname', '$adress', '$number', '$sex')";

    $res = mysqli_query($database, $query);
    if ($res) {
        echo 'Vous êtes inscrit avec succès.';
    } else {
        echo 'non';
    }
} else {
    echo 'rien';
}

?>


<div class="container-center">
<div class="demande-conge">
<form action="" method="POST" >
<h1 class="ask-title">Agent</h1>
<div class="container">
    <div class="form-group">
        <label id="inscrit" for="" class="">Nom</label>
        <input type="text" name="name" class="">
    </div>
    <div class="form-group">
        <label id="inscrit" for="" class="">Postnom</label>
        <input type="text" name="postname" class="">
    </div>
    <div class="form-group">
        <label id="inscrit" for="" class="">Prénom</label>
        <input type="text" name="firstname" class="">
    </div>
    <div class="form-group">
        <label id="inscrit" for="" class="">Adresse</label>
        <input type="text" name="adress" class="">

    </div>
    <div class="form-group">
        <label id="inscrit" for="" class="">Tél</label>
        <input type="text" name="number" class="">
    </div>
    <div class="form-group">
        <label id="inscrit" for="" class="">Sexe              </label>
        <input type="text" name="sex" class="">
    </div>
    <div class="form-group">
        <label id="" for="" name="">Libellé grade</label>
        <select>
            <?php while ($data = mysqli_fetch_array($selectgrade)) {?>
            <option name="lib_grade"value="<?php echo $data['libelle'] ?>"><?php echo $data['libelle'] ?></option>
            <?php }?>
        </select>
    </div>
    <div class="form-group">
        <label id="inscrit" for="">Libellé fonction</label>
        <select>
            <?php while ($data = mysqli_fetch_array($selectfunction)) {?>
            <option name="lib_funct" value="<?php echo $data['libelle'] ?>"><?php echo $data['libelle'] ?></option>
            <?php }?>
        </select>
    </div>
    <div class="form-group">
        <label id="inscrit" for="">Libellé direction</label>
        <select>
            <?php
while ($data = mysqli_fetch_array($selectdirection)) {
    ?>
        <option name="lib_direct" value="<?php echo $data['libelle'] ?>"><?php echo $data['libelle'] ?></option>
        <?php
}
?>
        </select>
    </div>
    </div>
    <div class="operation">
    <button type="submit" class="btn" id="bg-dark">Soumettre</button>
    <button type="reset" class="btn" id="bg-dark">Netttoyer</button>
    </div>

</form>
</div>
<table>
    <thead>
        <tr>
            <th>Matricule agent</th>
            <th>Nom</th>
            <th>Postnom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Télephone</th>
            <th>Sexe</th>
            <th>Libellé grade</th>
            <th>Libellé fonction</th>
            <th>Libellé direction</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

</div>
