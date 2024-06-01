<?php
$servername = "localhost";
$username = "root";
$password = "Njmborahae11!";
$dbname = "db_contact";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO CONTACT (name, email, subject, message)
        VALUES ('$name', '$email', '$subject', '$message')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data sudah tersimpan');</script>";
            
            echo "<script>window.location='index.html';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
}
// Close Connection
$conn->close();
?>
