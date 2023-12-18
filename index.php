<?php
//LE FICHIER CONTROLLER : LOGIQUE + TRAITEMENT DU CODE ET DES DONNEES

    //Import des ressources
    include("./model/model_article.php"); //-> import du model
    include("./utils/bdd.php");//-> import de la connexion à la BDD

    $message = '';
    $name ='';
    $prix ='';

    //Vérifie si le formulaire d'ajout d'article a été envoyé
    if(isset($_POST['submit'])){
        //SECURITE ETAPE 1 : vérifie les données, si elles sont vide ou non
        if(isset($_POST['nom_article']) && !empty($_POST['nom_article']) 
            && isset($_POST['prix_article']) && !empty($_POST['prix_article'])){

            //SECURITE ETAPE 2 : nettoyage
            $name = htmlentities(strip_tags(trim($_POST['nom_article'])));
            $prix = htmlentities(strip_tags(trim($_POST['prix_article'])));

            //SECURITE ETAPE 3 : vérifie le format des données
            //-> ici on a que des strings, donc pas besoin de vérification
            
            //J'APPELLE LA REQUETE POUR ENREGISTRER MON ARTICLE (fonction se trouvant dans le model)
            $message = addArticle($name,$prix,$bdd);

        }
        else {
            //J'affiche un message d'erreur si le formulaire n'est paz correctement rempli
                $message = 'Remplissez correctement le formulaire';
        }
    }
    //JE DIS A LA VUE CE QU'ELLE DOIT AFFICHER. Je transmets les infos grâce à $message et $showArticle
    include('./view/view_article.php');
?>