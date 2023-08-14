<!DOCTYPE html>
<html lang="en">
<body>
  <?php
      if (!isset($marginBottom)) {
          $marginBottom = 90;
      }
  ?>
  <div class="jumbotron jumbotron-fluid <?php echo $headerPage; ?>" style="margin-bottom: <?php echo $marginBottom; ?>px;">
    <div class="container text-center py-5">
      <h1 class="text-white display-3 mt-lg-5"><?php echo $title; ?></h1>
      <div class="d-inline-flex align-items-center text-white">
        <p class="m-0"><a class="text-white" href="">Inicio</a></p>
        <i class="fa fa-circle px-3"></i>
        <p class="m-0"><?php echo $subtitle; ?></p>
      </div>
    </div>
  </div>
</body>
</html>