<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sql_minecraft";

function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    console_log("Could not connect to the database.");
}

if ($conn) {
    console_log("You are connected to the database.");
} else console_log("Could not connect to the database.");
