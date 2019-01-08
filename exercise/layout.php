<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>Web</title> 
  </head>
  <body>
  <div class="container text-center">
      <div class="row">
        <?php
        $str = file_get_contents('../data/products.json');
        $json = json_decode($str, true);
        //echo '<pre>' . print_r($json, true) . '</pre>';
        // $name = $json['data'][0]['name'];
        // echo $name;
    
        foreach ($json['data'] as $field => $value) // products loop 
        {
          $name = $value['name'];
          $id =  $value['id'] ;
          $price =  $value['price'];
          $image =  $value['image'];
          $in_stock =  $value['in_stock'];
          if($in_stock =  $value['in_stock']){
            $in_stock = 'In stock ';
          }else{
            $in_stock = 'Out of stock';
          }
        ?> 

        <div class=" col margin-bot"> 
          <div class="card" style="width: 12rem;">
            <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $name; ?></h5>
              <p class="card-text">Price <?php echo $price; ?> Baht</p>
              <p class="card-text"><?php echo $in_stock; ?></p>
            </div>
            <?php if ($in_stock =  $value['in_stock']){
              echo '<button type="button" class="btn btn-success margin-center" style="width: 7rem;" >SELECT</button>';
            }else{
              echo '<button type="button" class="btn btn-warning margin-center" style="width: 7rem;" disabled >Out of stock</button>';
           } ?>
          </div>
        </div>
        <?php } ?>
        

        

          <div class=" col-12 margin-bot"> 
          <H3 class="text-muted">
              Please enter the coin before choosing the products.
          </h3>
          </div>
      </div>
        
      





  </div>
        
</body>
</html>