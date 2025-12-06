<?php
$host = 'localhost';
$dbname = 'StudentDB';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$semester = $_POST['semester'];

$sql = "INSERT INTO StudentInfo (FullName, Email, Phone, Department, Semester) 
        VALUES (:fullname, :email, :phone, :department, :semester)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':fullname' => $fullname,
    ':email' => $email,
    ':phone' => $phone,
    ':department' => $department,
    ':semester' => $semester
]);

echo "<h2 style='color: blue; text-align: center;'>Registration successful!</h2>";
?>