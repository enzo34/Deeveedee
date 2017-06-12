<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../web/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Adming</title>
  </head>
  <body>
    <form accept-charset="utf-8"  method="post" action="create_societe">
    <h5>Nom</h5>
    <input type="text" name="nomS" value="<?php echo set_value('nomS'); ?>" size="50" />

<h5>Rue</h5>
<input type="text" name="rueS" value="<?php echo set_value('rueS'); ?>" size="50" />
<h5>Ville</h5>
<input type="values" name="villeS" value="<?php echo set_value('villeS'); ?>" size="50" />
<h5>Directeur</h5>
<input type="values" name="directeurS" value="<?php echo set_value('directeurS'); ?>" size="50" />
<h5>Numero rue</h5>
<input type="text" name="num_rue" value="<?php echo set_value('num_rue'); ?>" size="50" />
<h5>Employe</h5>
<input type="values" name="employe" value="<?php echo set_value('employe'); ?>" size="50" />
<div><input type="submit" value="Submit" /></div>

</form>
<form accept-charset="utf-8"  method="post" action="edit_societe">
<h5>Nom</h5>
<input type="text" name="nomS" value="<?php echo set_value('nomS'); ?>" size="50" />

<h5>Rue</h5>
<input type="text" name="rueS" value="<?php echo set_value('rueS'); ?>" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>
    <?php foreach($societe as $article):?>
    <p><?php echo "ville :"?><?php echo $article['villeS']; ?></p>
  <?php endforeach;?>
  <a href=<?php echo site_url('adming')?>>Admin gerant</a>
    <a href=<?php echo site_url('news')?>>news</a>
  </body>
</html>
