<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1.0,initial-scale=1.0,minimum-scale=1.0">
    <title>Austria</title>
      <link rel="stylesheet" href="stylesheets/stylesheet.css">
      <link rel="stylesheet" href="stylesheets/map.css">
    <script src="javascripts/modernizr.js"></script>
  </head>
<?php
  include_once('mapfunctions.php');

  $mapData = json_decode(file_get_contents('mapdata.json'));
  $highestPartyIds = getHighestPercentagePartyId($mapData);
?>
  <body>

  <div class="wrapper">
    <?php printMap($highestPartyIds); ?>

    <div class="text">
      <p class="wahlwetter-header">Wahlwetter</p>
      <?php printList($mapData); ?>
    </div>
  </div>

  </body>
</html>
