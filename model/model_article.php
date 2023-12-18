<?php
//LE FICHIER MODEL : COMMUNICATION AVEC LA BDD ET ENVOIE DES REQUETES

//Chaque Requête est sous forme de fonction pour les appeller quand je le souhaite

//ENREGISTREMENT D'UN ARTICLE
function addArticle($name,$prix,$bdd){
            try{
                //ETAPE 2 : Préparer la requête
                $req=$bdd->prepare('INSERT INTO article (nom_article, prix_article) VALUES(?,?)');

                //ETAPE 3 : Binding de Paramètre
                $req->bindParam(1,$name,PDO::PARAM_STR);
                $req->bindParam(2,$prix,PDO::PARAM_INT);

                //ETAPE 4 : Exécution de la requête
                $req->execute();

                //ETAPE 5 : J'envoie le message de confirmation au Controler
                return "L'article : $name a bien été ajouté à la BDD.";

            }catch(Exception $error){
                //J'envoie le message d'erreur au Controler
                return $error->getMessage();
            }
}
?>