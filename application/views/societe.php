<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="../../web/css/style.css"> -->
  <link href="../web/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
  </head>
  <header>Deeveadee ou la culture selon francis</header>
  <body>
    <div id="societe">
      <h1>Magasin de location</h1>
    <?php foreach($societes as $article): ?>
                      <article>
                    <p><?php echo "nom :"?><?php echo $article['nomS']; ?></p>
                <h1><?php echo "rue :"?><?php echo $article['rueS']; ?></h1>
                <p><?php echo "ville :"?><?php echo $article['villeS']; ?></p>
                <p><?php echo "numéro rue :"?><?php echo $article['num_rue']; ?></p>
                     <?php endforeach ?>
                   </div>
                   <div id="colonne">
                     <h1>Categorie</h1>
                     <a href=<?php echo site_url('acceuil')?>>Acceuil</a>
                     <a href=<?php echo site_url('LandingPage') ?>>Film</a>
                     <a href=<?php echo site_url('societe') ?>>Societe</a>
                    <a href=<?php echo site_url('acteur') ?>>Acteur</a>
                    <a href=<?php echo site_url('adming')?>>Admin gerant</a>
                      <a href=<?php echo site_url('news')?>>news</a>
                  </div>
  </body>
</html>
