<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in test</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Quantity: </label>
        <input type="number" name="quantity"> <br>
        <input type="submit" value="Total">

    </form>
    <?php 
    $food = "kabej";
    $price = 20;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;
    echo"You have ordered: {$total} {$food}";
      ?>
</body>
</html>