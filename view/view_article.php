<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <input type="text" name="nom_article" placeholder="Nom de l'article">
            <input type="text" name="prix_article" placeholder="Prix de l'article">
            <input type="submit" name="submit">
        </form>

        <p><?php echo $message ?></p>
    </body>
</html>