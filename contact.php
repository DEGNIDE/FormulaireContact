<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <h1>Contactez-nous</h1>
       <p>Pour toute demande, remplissez le formulaire ci-dessous</p>
       <form action="" method="post">
       
       <input type="text" name="nom" placeholder="NOM" id="">
      
       <input type="email" name="email" placeholder="Email" required>
       
       <input type="text" name="text" placeholder="Sujet" required>
      
       <textarea name="message" placeholder="tapez votre message ici" id="" cols="30" rows="10" required></textarea>
       <input type="submit" value="Envoyer le message">
       </form>
       <?php
        
          // si le formulaire a été soumis

       if(isset($_POST['message']))
       {    $message ="Ce message vous été envoyé via la page contact de du site degnide.com
            Nom : " . $_POST['nom'] . "
            Email : " . $_POST['email'] . "
            Message : " .$_POST['message'];
           
       
           $retour = mail ("sathanase2000@yahoo.fr", $_POST['subjet'] ,$message ,"Reply-To:contact@degnide.com ");
          //forme genérale = mail($to, $sujet, $message, $header);
           
           if($retour)
           {
               echo "<p> L'email a bien été envoyé </p>";
           }
        }
           ?>   
 </body>
 </html>


    









