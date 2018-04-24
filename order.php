<?php 
include('odredit.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		echo $id;
		$record = mysqli_query($db, "SELECT * FROM amritindia.order WHERE orderID=$id");
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$mail = $n['email'];
			$items = $n['items'];
			$price = (int)$n['price'];
			$date = $n['orderDate'];
			$status = $n['status'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order History</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
<?php 
	$results = mysqli_query($db, "SELECT * FROM amritindia.order"); 
?>
	

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mail</th>
      <th scope="col">Items</th>
		<th scope="col">Price</th>
		<th scope="col">Date</th>
		<th scope="col">Status</th>
		<th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
	<tbody>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['items']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['orderDate']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td>
				<a href="order.php?edit=<?php echo $row['orderID']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="odredit.php?del=<?php echo $row['orderID']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
		</tbody>
</table>
<form method="post" action="odredit.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="input-group">
		<label>Mail</label>
		<input type="text" name="mail" value="<?php echo $mail; ?>">
	</div>
	<div class="input-group">
		<label>Items</label>
		<input type="text" name="items" value="<?php echo $items; ?>">
	</div>
	<div class="input-group">
		<label>Price</label>
		<input type="text" name="price" value="<?php echo $price; ?>">
	</div>
	<div class="input-group">
		<label>Date</label>
		<input type="date" name="date" value="<?php echo $date; ?>">
	</div>
	<div class="input-group">
		<label>Status</label>
		<input type="text" name="status" value="<?php echo $status; ?>">
	</div>
	<div class="input-group">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
</form>
</body>
</html>