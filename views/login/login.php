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
      <h1 class="p-5 text-center text-info">login</h1>
      <?php if (isset($login)): ?>
        <h4>successful</h4>
      <?php endif; ?>
        <form action="" method="post">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="skanda5@mailinator.com">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="aaaa">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="login" class="btn btn-secondary">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<pre>
<?php
debug($_SESSION);
?>
</pre>
  <?php include 'views/layouts/footer.php'; ?>

</body>
</html>
