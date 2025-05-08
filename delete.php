<<?php
include 'db.php';

$id = $_GET['id'];

// DELETE FROM users WHERE id = ?

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");

?>