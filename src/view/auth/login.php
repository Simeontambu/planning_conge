<?php
session_start();
use App\Connexion;
$connexion = new Connexion();
$database = $connexion->getConnection();

if (isset($_REQUEST['username'], $_REQUEST['pass'])) {

    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($database, $username);
    $_SESSION['username'] = $username;
    $password = stripslashes($_REQUEST['pass']);
    $password = mysqli_real_escape_string($database, $password);
    // $password = hash('sha256', $password);
    $query = "SELECT * FROM users WHERE username='$username'  and  pass='" . $password . "'";
    $res = mysqli_query($database, $query);
    $info = array();
    if (mysqli_num_rows($res) == 1) {
        $users = mysqli_fetch_assoc($res);

        // Check if the user is an administrator or a user
        if ($users['username'] == 'admin') {
            header('location: /home');

        } else {
            header('location: user/user');
            $info[1] = "pas ok.";
        }
    } else {
        $info[2] = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
}
$title = "login";
?>
<div class="login">
<h1>Se connecter</h1>
<?php if (!empty($info)): {}?>

						<?php foreach ($info as $infos): ?>
						<p class="alert alert-danger"><?=$infos;?></p>
						<?php endforeach;?>

<?php endif;?>

<form  action="" methode="post" name="login">
<div class="flex">
<input class="flex-input"type="text"   placeholder="Nom d'utilisateur" name="username">
<input class="flex-input" type="text"  placeholder="Mot de passe" name="pass">
<input class="submit"type="submit" value="Connexion " name="submit" id="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="/register">S'inscrire</a></p>
</div>
</form>
</div>
