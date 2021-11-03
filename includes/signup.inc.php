<?php
//checks if the submit button is clicked
    if (isset($_POST['submit'])) {
        //includes database connection
        include_once 'dbh.inc.php';
        //get data from the sign up form
        $first = $_POST["fname"];
        $last = $_POST["lname"];
        $email = $_POST["email"];
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

        //check if inputs are empty
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
            header("Location: ../index.php?signup=empty");
            exit();
        } else {
            if (!preg_match("/^[a-zA-z]*$/", $first) || !preg_match("/^[a-zA-z]*$/", $last)) {
                header("Location: ../index.php?signup=char");
                exit();
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../index.php?signup=email");
                    exit();
                } else {
                    header("Location: ../index.php?signup=success");
                    exit();
                }

            }
        }
    }
    else{
            header("Location: ../index.php");
            exit();
        }


    //print_r([$first, $last, $email, $uid, $pwd]);
    //die();

//    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
//    $stmt = mysqli_stmt_init($conn);
//    if (!mysqli_stmt_prepare( $stmt, $sql )) {
//        echo "SQL Error!";
//    } else {
//        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
//        mysqli_stmt_execute($stmt);
//    }
//}
////mysqli_query($conn, $sql);
//header("Location: ../dataInsert.php?signup=success");
//

