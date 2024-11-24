<?php
    $db_sever = "localhost";
    $db_user = "root";
    $dp_password = "";
    $db_name = "app_data_db";
    $conn = "";

    try {
        $conn = mysqli_connect(
            $db_sever,
            $db_user,
            $db_password,
            $db_name
        );
    }
    catch(mysqli_sql_exception) {
        echo "Could not connect!";
    }

    if ($conn) {
        echo "You are connected!";
    }
?>