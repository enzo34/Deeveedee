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
    <div id="acteur">
      <h1>Acteur</h1>
                  <?php   foreach($acteur as $article): ?>
                                       <article>
                                     <p><?php echo "nom :"?><?php echo $article['nomA']; ?></p>
                                 <h1><?php echo "prénom :"?><?php echo $article['prenomA']; ?></h1>
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
