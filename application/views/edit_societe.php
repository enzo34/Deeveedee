<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../web/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <?php foreach($societes as $article):?>
    <p><?php echo "nom :"?><?php echo $article['nomS']; ?></p>
    <p><?php echo "rue :"?><?php echo $article['rueS']; ?></p>
  <?php endforeach;?>
    <h1>Societe</h1>

  </body>
</html>
