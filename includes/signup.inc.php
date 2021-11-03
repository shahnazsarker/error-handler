<?php

include_once 'dbh.inc.php';
if (isset($conn)) {
    $first = mysqli_real_escape_string($conn , $_POST["fname"]);
    $last = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $uid = mysqli_real_escape_string($conn, $_POST["uid"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

    //print_r([$first, $last, $email, $uid, $pwd]);
    //die();

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare( $stmt, $sql )) {
        echo "SQL Error!";
    } else {
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
        mysqli_stmt_execute($stmt);
    }
}
//mysqli_query($conn, $sql);
header("Location: ../dataInsert.php?signup=success");
?>
