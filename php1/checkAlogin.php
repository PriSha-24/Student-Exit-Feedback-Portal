<?php
session_start();
ob_start();
require('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=feedback', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Preparing SQL statement
    $stmt = $pdo->prepare("SELECT * FROM `user` WHERE `email` = :email AND `password` = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    $stmt->execute();

    // Fetching the result
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $sessionemail = $row['email'];
        $_SESSION['login_user'] = $sessionemail;
        header("Location: ../adminpage.php");
        exit();
    } else {
        echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
