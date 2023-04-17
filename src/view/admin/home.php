<?php
// Initialize the session
session_start();
// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION["username"])) {
    header('Location: /');
    exit();
}
?>
<nav class="home">
    <div class="nav-home">
        <h3 class="home-user">Bienvenue <?php echo $_SESSION['username']; ?>!</h3>

        <ul>
            <li><a href="" class="leave">Demande de congé</a></li>
            <li><a href="" class="planning">Planning congé</a></li>
            <li><a href="" class="agent">Agent</a></li>
            <li><a href="#" >Imprimer</a></li>
            <li><a href="#" class="adduser">Ajout user</a></li>
            <li><a href="#">Traitement</a></li>
            <li><a href="/">Déconnexion</a></li>
        </ul>
    </div>


</nav>