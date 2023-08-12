<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    text-align: center;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

    </style>
</head>
<body>
<?php
						include 'dataShow_cart_module.php';
						?>
<h1>Order Form</h1>

						<li class="list-group-item d-flex justify-content-between">
							<span>Total (Taka)</span>
							<strong><?php echo $total; ?></strong>
						</li>
   
    <form method="POST" action="process_order.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="product">Product:</label>
        <input type="text" name="product" id="product" required><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required><br>

        <input type="submit" value="Place Order">
    </form>
</body>
</html>
