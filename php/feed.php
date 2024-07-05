<?php
ob_start();
require 'config.php';

$year = $_POST['year'];
$date = $_POST['date'];
$branch = $_POST['branch'];
$faculty = $_POST['faculty'];
$ques1 = $_POST['ques1'];
$ques2i = $_POST['ques-2i'];
$ques2ii = $_POST['ques-2ii'];
$ques2iii = $_POST['ques-2iii'];
$ques2iv = $_POST['ques-2iv'];
$ques2v = $_POST['ques-2v'];
$ques3 = $_POST['ques3'];
$ques4 = $_POST['ques4'];
$remarks = $_POST['remarks'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=feedback', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO feedback (year, date, branch, faculty, ques1, ques2i, ques2ii, ques2iii, ques2iv, ques2v, ques3, ques4, remarks) 
            VALUES (:year, :date, :branch, :faculty, :ques1, :ques2i, :ques2ii, :ques2iii, :ques2iv, :ques2v, :ques3, :ques4, :remarks)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':branch', $branch);
    $stmt->bindParam(':faculty', $faculty);
    $stmt->bindParam(':ques1', $ques1);
    $stmt->bindParam(':ques2i', $ques2i);
    $stmt->bindParam(':ques2ii', $ques2ii);
    $stmt->bindParam(':ques2iii', $ques2iii);
    $stmt->bindParam(':ques2iv', $ques2iv);
    $stmt->bindParam(':ques2v', $ques2v);
    $stmt->bindParam(':ques3', $ques3);
    $stmt->bindParam(':ques4', $ques4);
    $stmt->bindParam(':remarks', $remarks);

    $stmt->execute();

    echo '<script>alert("Thank you for your feedback."); location.replace(document.referrer);</script>';
} catch (PDOException $e) {
    echo '<script>alert("Please fill all the fields."); location.replace(document.referrer);</script>' . $e->getMessage();
}
?>
