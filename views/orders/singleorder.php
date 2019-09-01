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

<div class="container-fluid">
    <div class="row mx-2 mt-4 p-3 bg-light">
        <div class="col-12">
            <h2 class="text-center">Order #<?= $order->id; ?> details</h2>
        </div>
    </div>
    <div class="row mx-2 px-5 bg-light">
        <div class="col-6">
            <p class="pt-3"><b>Product details</b></p>
            <div class="row justify-content-around">
				<?php foreach (unserialize($order->order_details) as $value): ?>
                    <div class="card col-5 p-2 mb-3">
                        <img class="card-img-top" src="<?= $value->cake_img; ?>">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?= $home_url; ?>/products/<?= $value->slug; ?>"><?= $value->name; ?></a>
                            </h5>
                            <p class="card-text">&#8377;<?= $value->price; ?></p>
                            <p class="card-text">Quantity <?= $value->productquantity; ?></p>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
        <div class="col-6">
            <p class="pt-3"><b>Billing details</b></p>
            <address>
                <b>Address:</b><br/>
				<?= $order->fullname; ?><br/>
				<?= $order->address1; ?><br/>
				<?= $order->address2 . ' - ' . $order->city . ' - ' . $order->postcode; ?><br/>
				<?= $order->state . ' - ' . $order->country; ?><br/>
                <br/>
                <b>Email address:</b><br/>
				<?= $order->email; ?><br/>
                <br/>
                <b>Mobile:</b><br/>
				<?= $order->mobile; ?><br/>
            </address>
        </div>
    </div>
</div>
<div class="h-50"></div>


<?php include 'views/layouts/footer.php'; ?>

</body>
</html>