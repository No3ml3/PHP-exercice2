<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>

<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(!isset($_POST['prenom']) || trim($_POST['prenom']) === '') 
      $errors[] = "Le prénom est obligatoire";
  if(!isset($_POST['nom']) || trim($_POST['nom']) === '') 
      $errors[] = "Le nom est obligatoire";
  if(!isset($_POST['user_email']) || trim($_POST['user_email']) === '' || filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) 
      $errors[] = "Un'E-mail correct est obligatoire";
  if(!isset($_POST['telephone']) || trim($_POST['telephone']) === '') 
      $errors[] = "Un numéro de téléphone est obligatoire";
  if(!isset($_POST['typeDeMort']) || trim($_POST['typeDeMort']) === '') 
      $errors[] = "Le formulaire est obligatoire";
  if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '') 
      $errors[] = "Un message est obligatoire";
}
?>

<?php 
  if(isset($_POST['nom'])) :
      if(empty($errors)) : ?>
        <div class="messageForUser">
            <p>Merci <?= $_POST['prenom'] ?> <?=$_POST['nom'] ?> de nous avoir contacté à propos de votre mort <?= $_POST['typeDeMort'] ?>.</p> 
            <br>
            <p>Un de nos conseillers vous contactera soit à l’adresse <?= $_POST['user_email'] ?>  ou par téléphone au <?= $_POST['telephone'] ?>  dans les plus brefs délais pour traiter votre demande : </p> 
            <br>
            <p><?=$_POST['user_message'] ?> </p> 
        </div>
<?php endif; ?>
<?php endif; ?>

<?php 
      if (count($errors) > 0) : ?>
        <div class="border border-danger rounded p-3 m-5 bg-danger">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
<?php endif; ?>

</div>

</body>
</html>



