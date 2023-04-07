<?php


use App\Connexion;
use App\model\Create_user;

$connexion = new Connexion();
$database=$connexion->getConnection();
$users = new Create_user($database);
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['pass'])){
	// retrieve name user and delete \ add for form
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($database,$username); 
	// retrieve email and delete \ add for form
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($database, $email);
	// retrieve password and delete \ add for form
	$password = stripslashes($_REQUEST['pass']);
	$password = mysqli_real_escape_string($database, $password);
	$users->username = $username->username;
	$users->email = $email->email;
	$users->pass=$password->pass;
	
	
	// $query = "INSERT into `users` (id,username, email, pass)
	// 			VALUES (NULL,'$username', '$email', '".hash('sha256', $password)."')";
	// $res = mysqli_query($database, $query);

    if($users->createuser()){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}
?>

<h1>S'inscrire</h1>
<form action="" methode="post">
<input type="text" placeholder="Nom d'utilisateur" name="username" required>
<input type="email" placeholder="Adresse email" name="email" required>
<input type="text" placeholder="Mot de passe" name="pass" required>
<button>hfjhf</button>
<p class="box-register">Déjà inscrit? <a href="/">Connectez-vous ici</a></p>
</form>
