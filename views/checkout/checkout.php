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
      <div class="col-12">
        <h1 class="p-5 text-center text-info">checkout</h1>
        <form action="/checkout" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputname">Name</label>
              <input type="text" name="fullname" class="form-control" id="inputname" placeholder="Full name" value="<?php echo (isset($address)) ? $address['fullname'] : '' ; ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="inputmobile">Mobile</label>
              <input type="text" name="mobile" class="form-control" id="inputmobile" placeholder="Mobile" value="<?php echo (isset($address)) ? $address['mobile'] : '' ; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="address 1" value="<?php echo (isset($address)) ? $address['address1'] : '' ; ?>">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="address3" value="<?php echo (isset($address)) ? $address['address2'] : '' ; ?>">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputcountry">Country</label>
              <input type="text" name="country" class="form-control" id="inputcountry" placeholder="Country" value="<?php echo (isset($address)) ? $address['country'] : '' ; ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="State">State</label>
              <input type="text" name="state" class="form-control" id="State" placeholder="state" value="<?php echo (isset($address)) ? $address['state'] : '' ; ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" name="city" class="form-control" id="inputCity" placeholder="city" value="<?php echo (isset($address)) ? $address['city'] : '' ; ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="inputZip">Postcode</label>
              <input type="text" name="postcode" class="form-control" id="inputZip" placeholder="pincode" value="<?php echo (isset($address)) ? $address['postcode'] : '' ; ?>">
            </div>
          </div>
          <button type="submit" name="checkout" class="btn btn-primary">Place order</button>
        </form>
        <div class="h-25"></div>
      </div>
    </div>
  </div>


  <?php
//debug($_SESSION);
  ?>
  <?php include 'views/layouts/footer.php'; ?>

</body>
</html>
