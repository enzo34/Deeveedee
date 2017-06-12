<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="../../web/css/style.css"> -->
    <link rel="stylesheet" href="../../bootsrap">
    <title></title>
  </head>
  <header>Deeveadee ou la culture selon francis</header>
  <body>
    <div id="dvdstore_dvd">
      <h1>Film</h1>
    <?php foreach($films as $article): ?>
                      <article>
                    <p><?php echo "auteur :"?><?php echo $article['auteurD']; ?></p>
                <h1><?php echo "titre :"?><?php echo $article['titreD']; ?></h1>
                <p><?php echo "année :"?><?php echo $article['anneeD']; ?></p>

                     <?php endforeach ?>
                   </div>
                   <div id="colonne">
                     <h1>Categorie</h1>
                     <a href=<?php echo site_url('acceuil')?>>Acceuil</a>
                     <a href=<?php echo site_url('LandingPage') ?>>Film</a>
                     <a href=<?php echo site_url('societe') ?>>Societe</a>
                    <a href=<?php echo site_url('acteur') ?>>Acteur</a>
                  </div>
  </body>
</html>
