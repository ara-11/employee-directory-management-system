<?php

require_once 'config/database.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    die('Invalid employee ID.');
}

$sql = "DELETE FROM employees WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die('Prepare failed: ' . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, 'i', $id);

if (!mysqli_stmt_execute($stmt)) {
    die('Unable to delete employee: ' . mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);

header('Location: index.php');
exit;