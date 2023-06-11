<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $type1 = filter_input(
        INPUT_POST,
        'type1',
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    $type2 = htmlentities($type1);
    $type3 = filter_input(
        INPUT_POST,
        'type1',
        FILTER_SANITIZE_NUMBER_INT
    );
    $type4 = filter_input(
        INPUT_POST,
        'type1',
        FILTER_SANITIZE_EMAIL
    );
    $type5 = filter_input(
        INPUT_POST,
        'type1',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
    $type6 = filter_input(
        INPUT_POST,
        'type1',
        FILTER_SANITIZE_ADD_SLASHES
    );
    $type7 = filter_input(
        INPUT_POST,
        'type1',
        FILTER_SANITIZE_ENCODED
    );
    $type8 = filter_input(
        INPUT_POST,
        'type1',
        FILTER_SANITIZE_NUMBER_FLOAT
    );

    if (isset($type1)) {
        echo "FILTER_SANITIZE_SPECIAL_CHARS = " . $type1 . "<br>";
        echo "htmlentities() = " . $type2 . "<br>";
        echo "FILTER_SANITIZE_NUMBER_INT = " . $type3 . "<br>";
        echo "FILTER_SANITIZE_EMAIL = " . $type4 . "<br>";
        echo "FILTER_SANITIZE_FULL_SPECIAL_CHARS = " . $type5 . "<br>";
        echo "FILTER_SANITIZE_ADD_SLASHES = " . $type6 . "<br>";
        echo "FILTER_SANITIZE_ENCODED = " . $type7 . "<br>";
        echo "FILTER_SANITIZE_NUMBER_FLOAT = " . $type8 . "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="filters.php" method="post">
        <input type="text" placeholder="" name="type1">
    </form>
</body>

</html>