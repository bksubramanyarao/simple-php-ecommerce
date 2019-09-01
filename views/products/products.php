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
		<?php foreach ($products as $product) { ?>
            <div class="col-3">
                <div class="card m-2">
                    <img class="card-img-top" src="<?= $product->cake_img; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->name; ?> - &#8377;<?= $product->price; ?></h5>
                        <p class="card-text"><?= $product->description; ?></p>
                        <a href="products/<?= $product->slug; ?>" class="btn btn-primary" target="_blank">Open</a>
                    </div>
                </div>
            </div>
		<?php } ?>
    </div>
</div>

<pre>
<?php
//var_dump($products);
?>
</pre>
<?php include 'views/layouts/footer.php'; ?>
</body>
</html>
