<?php
require_once 'connexion.php';

if (isset($_POST['ajouter'])) {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date = $_POST['date_creation'];

    $req = $db->prepare('INSERT INTO exercice(titre, auteur, date_creation) VALUES(?, ?, ?)');
    $req->execute([$titre, $auteur, $date]);
    
    header('Location: index.php');
    exit();
}

$req = $db->query('SELECT * FROM exercice');
$exercices = $req->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercices</title>
</head>
<body>

<fieldset>
    <legend>Ajouter un exercice</legend>
    <form action="index.php" method="POST">
        <label>Titre de l'exercice</label>
        <input type="text" name="titre" required><br><br>
        
        <label>Auteur de l'exercice</label>
        <input type="text" name="auteur" required><br><br>
        
        <label>Date creation</label>
        <input type="date" name="date_creation" required><br><br>
        
        <input type="submit" name="ajouter" value="Envoyer">
    </form>
</fieldset>

<br>

<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>titre</th>
        <th>auteur</th>
        <th>date_creation</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php foreach ($exercices as $exe) { ?>
        <tr>
            <td><?php echo $exe['id']; ?></td>
            <td><?php echo $exe['titre']; ?></td>
            <td><?php echo $exe['auteur']; ?></td>
            <td><?php echo $exe['date_creation']; ?></td>
            <td><a href="modif_exe.php?id=<?php echo $exe['id']; ?>">Modifier</a></td>
            <td><a href="supp_exe.php?id=<?php echo $exe['id']; ?>">Supprimer</a></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>