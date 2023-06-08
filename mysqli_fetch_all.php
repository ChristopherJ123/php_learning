<?php

include('database_store.php');

$query = "SELECT * FROM `products`";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['name'] . '<br>';
    }
}

mysqli_free_result($result);
mysqli_close($conn);
