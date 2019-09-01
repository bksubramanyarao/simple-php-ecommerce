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
			<table class="table table-hover text-center">
				<thead>
					<tr>
						<td><b>ID</b></td>
						<td><b>Ship to</b></td>
						<td><b>Total</b></td>
						<td><b>Action</b></td>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($orders as $order): ?>
					<tr>
						<td><?= $order->orderid; ?></td>
						<td><?= $order->address1 . ' - ' . $order->city; ?></td>
						<?php
						$orderdetails = unserialize($order->order_details);

						$multiorders = [];
						if (count($orderdetails) > 1) {
							foreach ($orderdetails as $key => $value) {
								$multiorders[] = $value->price;
							}
						// $t = array_values($orderdetails);

						// debug($t);
						// for ($i = 0; $i < count($t); $i++) {
						// 	$multiorders[] = $t[$i]['price'];
						// }
						}
						foreach ($orderdetails as $key => $value) {
							if (count($orderdetails) <= 1) {
								echo '<td>' . $value->price . '</td>';
								echo '<td><a href="/admin/orders/' . $order->orderid . '" class="btn btn-info">View</a></td>';
							}
						}
						if (array_sum($multiorders)) {
							echo '<td>' . array_sum($multiorders) . '</td>';
							echo '<td><a href="/admin/orders/' . $order->orderid . '" class="btn btn-info">View</a></td>';
						}
						?>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
			<div class="h-25"></div>
		</div>
	</div>


	<?php include 'views/layouts/footer.php'; ?>

</body>
</html>