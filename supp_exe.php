<?php
require_once 'connexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $req = $db->prepare('DELETE FROM exercice WHERE id = ?');
    $req->execute([$id]);
}

header('Location: index.php');
exit();
?>