<?php
require_once __DIR__ . '/movie.php';
require_once __DIR__ . '/db.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>Movie</title>
</head>
<body>
  <div class="container d-flex ">
    <?php foreach ($movies as $movie) {?>
   
  
    <div class="card m-3 " style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $movie->title?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo implode(",", $movie->type) ?></h6>
        <p class="card-text"><?php echo implode(",", $movie->actors) ?></p>
        <p><?php echo $movie->minutes?> minute</p>
      </div>
    </div>
    <?php } ?>
  </div>
</body>
</html>