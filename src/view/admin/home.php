<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header('Location: /');
    exit();
}
?>
<nav class="home">
    <div class="nav-home">
        <h3 class="home-user">Bienvenue <?php echo $_SESSION['username']; ?>!</h3>

        <ul>
            <li><a href="/home/conge">Demande de congé</a></li>
            <li><a href="#">Planning congé</a></li>
            <li><a href="#">Agent</a></li>
            <li><a href="#">Imprimer</a></li>
            <li><a href="#">Ajout user</a></li>
            <li><a href="#">Traitement</a></li>
            <li><a href="/">Déconnexion</a></li>
        </ul>
    </div>


</nav>