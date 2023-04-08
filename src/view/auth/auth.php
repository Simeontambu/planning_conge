<?php

use App\Connexion;

$connexion = new Connexion();
$database = $connexion->getConnection();

/**
 * Input field verification and data recovery
 * Remove the backslashes added by the form
 */
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['pass'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($database, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($database, $email);

    $password = stripslashes($_REQUEST['pass']);
    $password = mysqli_real_escape_string($database, $password);

    /**
     * query to check if the user exists
     */

    $select = "SELECT * FROM users WHERE username = '" . $username . "'";
    $res = mysqli_query($database, $select);
    $info = array();
    if (mysqli_num_rows($res)) {

        $info[0] = 'Ce nom d\'utilisateur existe.';
    } else {
        /**
         * insert data
         */
        $query = "INSERT into `users` (id,username, email, pass)
                VALUES (NULL,'$username', '$email', '" . hash('sha256', $password) . "')";
        $res = mysqli_query($database, $query);
        if ($res) {
            $info[1] = 'Vous êtes inscrit avec succès.';
        }
    }
}

?>

<h1>S'inscrire</h1>
<?php if (!empty($info)): {}?>
				<div class="alert alert-danger">
				<?php foreach ($info as $infos): ?>
				<h3><?=$infos;?></h3>
				<?php endforeach;?>
</div>
<?php endif;?>
<form action="" methode="POST">
<input type="text" placeholder="Nom d'utilisateur" name="username" required>
<input type="email" placeholder="Adresse email" name="email" required>
<input type="text" placeholder="Mot de passe" name="pass"required>
<input type="submit" name="submit" value="S'inscrire" class="box-button" />
<p class="box-register">Déjà inscrit? <a href="/">Connectez-vous ici</a></p>

</form>
