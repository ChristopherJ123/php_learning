<?php

include('database.php');
session_start();

$friend = $_GET['u'];
$user_id = "";
$friend_id = "";

$query =
    "
    SELECT user_id, username
    FROM users WHERE username = '{$_SESSION['username_s']}'
    UNION ALL
    SELECT user_id, username
    FROM users WHERE username = '{$friend}';
    ";
$result = mysqli_query($conn, $query);

try {
    if (mysqli_num_rows($result) > 1) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['user_id'];

        $row = mysqli_fetch_assoc($result);
        $friend_id = $row['user_id'];

        if ($user_id == $friend_id) {
            echo "You cannot befriend yourself lol";
            return;
        }

        $query = "SELECT user_id, friend_id, status_id FROM friends WHERE user_id = {$user_id} AND friend_id = {$friend_id}";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['status_id'] == 1) {
                    echo "<div class='error'>You are already friends with this user!</div>";
                } else if ($row['status_id'] == 2) {
                    echo "<div class='success'>Success!</div>";
                    $query = "UPDATE friends SET status_id = 0 WHERE user_id = {$user_id} AND friend_id = {$friend_id}";
                    mysqli_query($conn, $query);
                } else {
                    echo "<div class='error'>You have already made a friend request with this user!</div>";
                }
            }
        } else {
            $query = "INSERT INTO friends (user_id, friend_id, status_id) VALUES ({$user_id}, {$friend_id}, 0)";
            mysqli_query($conn, $query);
            echo "<div class='success'>Success!</div>";
        }
    } else {
        echo 'Username does not exist!';
    }
} catch (mysqli_sql_exception) {
    echo "Error!";
}
