<?php
require_once 'connexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $req = $db->prepare('SELECT * FROM exercice WHERE id = ?');
    $req->execute([$id]);
    $exe = $req->fetch();
}

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date = $_POST['date_creation'];

    $req = $db->prepare('UPDATE exercice SET titre = ?, auteur = ?, date_creation = ? WHERE id = ?');
    $req->execute([$titre, $auteur, $date, $id]);

    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier Exercice</title>
</head>
<body>

<fieldset>
    <legend>Modifier un exercice</legend>
    <form action="modif_exe.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $exe['id']; ?>">
        
        <label>Titre de l'exercice</label>
        <input type="text" name="titre" value="<?php echo $exe['titre']; ?>"><br><br>
        
        <label>Auteur de l'exercice</label>
        <input type="text" name="auteur" value="<?php echo $exe['auteur']; ?>"><br><br>
        
        <label>Date creation</label>
        <input type="date" name="date_creation" value="<?php echo $exe['date_creation']; ?>"><br><br>
        
        <input type="submit" name="modifier" value="Modifier">
    </form>
</fieldset>

</body>
</html>