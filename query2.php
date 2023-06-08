<?php

include('database_store.php');

$query = "SELECT * FROM `products` WHERE product_id = 10";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // While ada row selanjutnya ...
    while ($row = mysqli_fetch_assoc($result)) {
        echo "{$row['product_id']} {$row['name']} {$row['quantity_in_stock']} {$row['unit_price']}<br>";
    }
}
