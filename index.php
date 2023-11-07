<?php
require_once __DIR__ . '/models/media.php';
require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/db/db.php';


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
  <div class="container d-flex flex-wrap">
    <?php foreach ($products as $product) {?>
   
    <div class="card m-3 " style="width: 18rem;">
    <img src="img/<?php  echo $product->image->file_name ?>" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $product->title?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo implode(",", $product->type) ?></h6>
        <p class="card-text"><?php echo implode(",", $product->actors) ?></p>
        <p><?php echo $product->minutes?> minute</p>
      </div>
    </div>
    <?php } ?>
  </div>
</body>
</html>