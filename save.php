<?php

require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: add.php');
    exit;
}

$firstName = trim($_POST['first_name'] ?? '');
$lastName = trim($_POST['last_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$department = trim($_POST['department'] ?? '');
$position = trim($_POST['position'] ?? '');

if (
    $firstName === '' ||
    $lastName === '' ||
    $email === '' ||
    $department === '' ||
    $position === ''
) {
    die('All fields are required.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Please enter a valid email address.');
}

$sql = "
    INSERT INTO employees (
        first_name,
        last_name,
        email,
        department,
        position
    )
    VALUES (?, ?, ?, ?, ?)
";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die('Prepare failed: ' . mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt,
    'sssss',
    $firstName,
    $lastName,
    $email,
    $department,
    $position
);

if (!mysqli_stmt_execute($stmt)) {
    die('Unable to save employee: ' . mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);

header('Location: index.php');
exit;