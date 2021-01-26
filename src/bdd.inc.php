<?php
    //selectioner la base

    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=vacances','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

        //on récupère tout le contenu de la table
        $reponse = $bdd->query("SELECT * FROM `offre` WHERE 1");
        
        //On affiche chaque resultat

        while($donnee = $reponse->fetch()){
            echo'<figure>
                    <img src="'.$donnee['image'].'" alt="image">
                    <figcaption>
                        <h2>'.$donnee['titre'].'</h2>
                        <p>'.$donnee['contenu'].'</p>
                    </figcaption>
                </figure>';

        }
        $reponse->closeCursor(); //terminer le traitement
    }
    //partie finale
    catch(Exception $e){
        //en cas d'erreur précédemment, on affiche et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
?>