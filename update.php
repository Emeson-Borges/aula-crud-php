<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ? ");
$stmt->bind_param("ssi", $name, $email, $id);
$stmt->execute();

header("Location: index.php");
?>