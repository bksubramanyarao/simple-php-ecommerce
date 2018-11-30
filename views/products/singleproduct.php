<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include 'views/layouts/head.php'; ?>

</head>
<body>

  <?php include 'views/layouts/nav.php'; ?>

  <div class="container pt-5">
    <div class="row">
      <div class="col-6"><img src="<?= $product['cake_img']; ?>"></div>
      <div class="col-6">
        <h1><?= $product['name']; ?> - &#8377;<?= $product['price']; ?></h1>
        <p><?= $product['description']; ?></p>
        <form action="/cart" method="POST" role="form">

          <input type="hidden" name="productid" value="<?= $product['id']; ?>">
          <div class="d-flex">
            <input type="number" name="productquantity" class="form-control" required min="1">
            <button type="submit" class="btn btn-primary">Add to cart</button>
          </div>

        </form>
      </div>
    </div>
  </div>


  <?php include 'views/layouts/footer.php'; ?>

</body>
</html>
