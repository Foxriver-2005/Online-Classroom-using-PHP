<?php
session_start();

// Include database connection file
include("config/config.php");

$cName = "";
$sec = "";
$sub = "";
$date1 = "";
$code = "";
$classCode = "";
$username1 = "";
$user2 = "";

// Create class part
if (isset($_POST['createClass_button'])) {
    $cName = strip_tags($_POST['className']); //remove html tag
    $sec = strip_tags($_POST['section']); //remove html tag
    $sub = strip_tags($_POST['subject']); //remove html tag
    $date1 = date("Y-m-d");

    $code = strtolower($cName . "_" . $sec);
    $check_code_query = mysqli_query($con, "SELECT courseCode FROM createclass WHERE courseCode = '$code'");
    $i = 0;
    // if code exists add user number to code
    while (mysqli_num_rows($check_code_query) != 0) {
        $i++;
        $code = $code . "_" . $i;
        $check_code_query = mysqli_query($con, "SELECT courseCode FROM createclass WHERE courseCode = '$code'");
    }
    $username1 = $_SESSION['username'];

    if (($cName != "") && ($sec != "") && ($sub != "")) {
        $query = mysqli_query($con, "INSERT INTO createclass (username, className, section, subject, courseCode, date, num_posts, student_array) VALUES ('$username1', '$cName', '$sec','$sub', '$code', '$date1', 0, '')");
    }

    $_SESSION['className'] = "";
    $_SESSION['section'] = "";
    $_SESSION['subject'] = "";
    header("Location: index.php");
    exit();
}

// Join class part
if (isset($_POST['joinClass_button'])) {
    $classCode = strip_tags($_POST['code']); //remove html tag
    $classCode = str_replace(' ', '', $classCode); //remove spaces

    $userLoggedIn = $_SESSION['username'];

    $data_query = mysqli_query($con, "UPDATE createclass SET student_array=CONCAT(student_array,'$userLoggedIn ,') WHERE courseCode='$classCode'");

    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$userLoggedIn'");
    $fetchQ = mysqli_fetch_array($user_details_query);
    $userID = $fetchQ['id'];

    $query2 = mysqli_query($con, "SELECT * FROM createclass WHERE courseCode = '$classCode'");
    $fetchQ1 = mysqli_fetch_array($query2);
    $classID = $fetchQ1['id'];

    $query3 = mysqli_query($con, "INSERT INTO joinclass (user_id_fk, class_id_fk) VALUES ('$userID','$classID')");

    header("Location: index.php");
    exit();
}

// Cancel
if (isset($_POST['cancel_button'])) {
    header("Location: index.php");
    exit();
}
?>
