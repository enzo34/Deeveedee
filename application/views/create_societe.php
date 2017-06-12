<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../web/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <h1>Societe</h1>
    <?php foreach($societe as $article):?>
    <p><?php echo "ville :"?><?php echo $article['nomS']; ?></p>
    <p><?php echo "ville :"?><?php echo $article['rueS']; ?></p>
  <?php endforeach;?>
  </body>
</html>
