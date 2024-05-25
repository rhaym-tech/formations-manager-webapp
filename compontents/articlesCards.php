<section class="articles-container">
  <div>
    <h1>Nos Formations:</h1>
    <p>Notre école offre des formations combinant théorie et pratique pour vous préparer aux besoins du marché du travail moderne. Nos programmes sont conçus pour être accessibles et alignés avec les exigences actuelles de l'industrie.</p>
  </div>
  <?php
    include("includes/formations-data.php");
    $i = 0;

    foreach($formations as $id => $formation) {
      echo '<article class="card">';
      echo    '<div class="card-header">';
      echo      '<img src="'. $formation["image"] .'" alt="'. $formation["titre"] .'" class="card-image" width="600">';
      echo    '</div>';
      echo    '<div class="card-body">';
      echo      '<h4>'. $formation["titre"] .'</h4>';
      echo      '<p>'. $formation["caption"] .'</p>';
      echo      '<a href="/pages/formation.php?id=' . $id .'"><button class="btn btn-'.$colors[$i].'">Visit</button><a/>';
      echo    '</div>';
      echo '</article>';
      $i++;
    }
  ?>
</section>