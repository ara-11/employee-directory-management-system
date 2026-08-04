<?php

require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

$firstName = trim($_POST['first_name'] ?? '');
$lastName = trim($_POST['last_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$department = trim($_POST['department'] ?? '');
$position = trim($_POST['position'] ?? '');

if (!$id) {
    die('Invalid employee ID.');
}

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
    UPDATE employees
    SET
        first_name = ?,
        last_name = ?,
        email = ?,
        department = ?,
        position = ?
    WHERE id = ?
";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die('Prepare failed: ' . mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt,
    'sssssi',
    $firstName,
    $lastName,
    $email,
    $department,
    $position,
    $id
);

if (!mysqli_stmt_execute($stmt)) {
    die('Unable to update employee: ' . mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);

header('Location: index.php');
exit;