<section class="articles-container">
  <h1>Nos Formations:</h1>
  <p>Description goes here</p>
  <?php
    include("includes/formations-data.php");
    $i = 0;

    foreach($formations as $id => $formation) {
      echo '<div class="card">';
      echo    '<div class="card-header">';
      echo      '<img src="'. $formation["image"] .'" alt="'. $formation["titre"] .'" class="card-image" width="600">';
      echo    '</div>';
      echo    '<div class="card-body">';
      echo      '<h4>'. $formation["titre"] .'</h4>';
      echo      '<p>'. $formation["caption"] .'</p>';
      echo      '<a href="/pages/formation.php?id=' . $id .'"><button class="btn btn-'.$colors[$i].'">Visit</button><a/>';
      echo    '</div>';
      echo '</div>';
      $i++;
    }
  ?>
</section>