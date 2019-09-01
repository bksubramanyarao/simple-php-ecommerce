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
		<?php if (isset($_SESSION['cart'])): ?>
            <form accept="/cart" method="post">
                <table class="table table-hover text-center">
                    <thead>
                    <tr>
                        <th>IMAGE</th>
                        <th>PRODUCT</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php foreach ($_SESSION['cart'] as $key => $value): ?>
                        <tr>
                            <td width="200"><img src="<?= $value->cake_img; ?>" width="180"></td>
                            <td width="600"><h3><?= $value->name; ?></h3></td>
                            <td>
                                <input type="number" name="updateproduct[<?= $value->id; ?>][quantity]"
                                       class="form-control" value="<?= $value->productquantity; ?>">
                            </td>
                            <td><h3>&#8377;<?= $value->price; ?></h3></td>
                        </tr>
					<?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td><a href="/checkout" class="btn btn-success btn-block mt-5">CHECK OUT</a></td>
                        <td colspan="2">
                            <button type="submit" name="updatecart" class="btn btn-primary mt-5 px-5">UPDATE</button>
                        </td>
                        <td><h3 class="mt-5"><?php
								if (isset($_SESSION['totalprice'])) {
									echo '&#8377;' . array_sum($_SESSION['totalprice']);
								} ?></h3></td>
                    </tr>
                    </tfoot>
                </table>
            </form>
		<?php else: ?>
            <h2 class="display-2 m-auto p-5 text-info">CART IS EMPTY</h2>
		<?php endif; ?>
    </div>
</div>

<?php
//debug($_SESSION);
?>

<?php include 'views/layouts/footer.php'; ?>

</body>
</html>
