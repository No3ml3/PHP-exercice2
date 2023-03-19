<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <form  action="thanks.php"  method="post">
    <div >
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="nom">
    </div>
    <div>
      <label  for="prenom">prénom :</label>
      <input  type="text"  id="prenom"  name="prenom">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
      <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="telephone">telephone :</label>
      <input  type="telephone"  id="telephone"  name="telephone">
    </div>
    <div>
      <label for="typeMort">Type de mort :</label>
        <select id="typeMort" name="typeDeMort">
        <option value="mort">Selectionné</option>
         <option value="rapide">Rapide</option>
         <option value="lente">Lente</option>
         <option value="doulereuse">Doulereuse</option>
         <option value="indolore">indolore</option>
       </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div> 
  </form>  

</body>
</html>

<?php
    include 'thanks.php';
?>
