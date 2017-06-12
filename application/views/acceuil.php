<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
       <link href="../web/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" type="text/css" href="../web/css/style.css"> -->
      <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <title>Bienvenue sur deeveadee</title>
    <div class="btn-group" role="group" aria-label="...">
      <a href="<?php echo site_url('acceuil'); ?>" class="btn btn-primary" role="button">Home
         <span class="glyphicon glyphicon-home" aria-hidden="true"></a>
      <a href="<?php echo site_url('LandingPage'); ?>" class="btn btn-primary" role="button">Film
          <span class="glyphicon glyphicon-film" aria-hidden="true"></a>
      <a href="<?php echo site_url('acteur'); ?>" class="btn btn-primary" role="button">Acteur
          <span class="glyphicon glyphicon-star" aria-hidden="true"></a>
      <a href="<?php echo site_url('societe'); ?>" class="btn btn-primary" role="button">societe
          <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></a>
    </button>

</div>
  </head>

  <body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Alien.jpg" alt="Chania">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>


      <div class="item">
        <img src="chicago.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>

      <div class="item">
        <img src="ny.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 25%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
  <div id="map"></div>
  <script>
    var map;
      function initMap() {
        var uluru = {lat: 48.536716, lng: -4.311649};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: uluru

        });

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">dvdstore_dvd</h1>'+
      '<div id="bodyContent">'+
      '<p><b>dvdstore_dvd</p>Cliquez pour plus de détaille.</p>'+
      '<p>ICI</p>' +'<a href=<?php echo site_url('societe') ?>>Societe</a>'+
      '.</p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    title: 'Uluru (Ayers Rock)'
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAimbCShe_rEsvbatnm4nfmaubcxsQ28eU&callback=initMap">
  </script>

    <h1>Un grand choix de film dans nos magasin de location comme
       <?php   foreach($societes as $article): ?>
    <?php echo $article['nomS'];?>  <?php endforeach ?> ou vous pourrez trouver des films telle que
    <?php foreach($films as $article): ?>
      <?php echo $article['titreD'];?>  <?php endforeach ?>  </h1>
  </head>
  <body>

      <div class="container-fluid" class="societe">
        <h1>Magasin de location</h1>
      <?php foreach($societes as $article): ?>
                        <article>
                      <p><?php echo "nom :"?><?php echo $article['nomS']; ?></p>
                  <h1><?php echo "rue :"?><?php echo $article['rueS']; ?></h1>
                  <p><?php echo "ville :"?><?php echo $article['villeS']; ?></p>
                  <p><?php echo "numéro rue :"?><?php echo $article['num_rue']; ?></p>
                       <?php endforeach ?>
                     </div>
                     <div class="container-fluid" id="filme">
                       <h1>Film</h1>
                     <?php foreach($films as $article): ?>
                                       <article>
                                     <p><?php echo "auteur :"?><?php echo $article['auteurD']; ?></p>
                                 <h1><?php echo "titre :"?><?php echo $article['titreD']; ?></h1>
                                 <p><?php echo "année :"?><?php echo $article['anneeD']; ?></p>

                                      <?php endforeach ?>
                                    </div>
  <div class="container-fluid" class="colonne">
      <h1>Categorie</h1>
      <a href=<?php echo site_url('dvdstore_dvd')?>>Dvdstore_dvd</a></br>
      <a href=<?php echo site_url('acceuil')?>>Acceuil</a></br>
      <a href=<?php echo site_url('LandingPage') ?>>Film</a></br>
      <a href=<?php echo site_url('societe') ?>>Societe</a></br>
     <a href=<?php echo site_url('acteur') ?>>Acteur</a></br>
   </div>
  </body>
</html>
