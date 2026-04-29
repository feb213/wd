<?php
$conn = new mysqli("127.0.0.1", "root", "", "student_db", 3306);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$roll = $_POST['roll'];
$dob = $_POST['dob'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
$email = $_POST['email'];
$branch = $_POST['branch'];
$division = $_POST['division'];
$year = $_POST['year'];

$sql = "INSERT INTO students (fname, lname, roll, dob, gender, email, branch, division, year)
VALUES ('$fname','$lname','$roll','$dob','$gender','$email','$branch','$division','$year')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>