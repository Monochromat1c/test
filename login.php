<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $username = $_POST["username"];
    $password = $_POST["password"];

     $stmt =$link->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["username"] = $row["username"];

        header("Location: dashboard.php");
        exit();
    } else {
       echo "Invalid username or password.";
    }

     $stmt->close();
}

$link->close();
?>