<?php

require_once 'config/database.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    die('Invalid employee ID.');
}

$sql = "SELECT * FROM employees WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die('Prepare failed: ' . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$employee = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);

if (!$employee) {
    die('Employee not found.');
}

include 'includes/header.php';
include 'includes/navbar.php';

?>

<section class="form-card">

    <div class="form-heading">
        <p class="form-label">Employee Records</p>

        <h2>Edit Employee</h2>

        <p>
            Update the employee information below.
        </p>
    </div>

    <form action="update.php" method="POST" class="employee-form">

        <input
            type="hidden"
            name="id"
            value="<?= htmlspecialchars($employee['id']) ?>"
        >

        <div class="form-grid">

            <div class="field-group">
                <label for="first_name">First Name</label>

                <input
                    type="text"
                    id="first_name"
                    name="first_name"
                    value="<?= htmlspecialchars($employee['first_name']) ?>"
                    required
                >
            </div>

            <div class="field-group">
                <label for="last_name">Last Name</label>

                <input
                    type="text"
                    id="last_name"
                    name="last_name"
                    value="<?= htmlspecialchars($employee['last_name']) ?>"
                    required
                >
            </div>

            <div class="field-group form-field-full">
                <label for="email">Email Address</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?= htmlspecialchars($employee['email']) ?>"
                    required
                >
            </div>

            <div class="field-group">
                <label for="department">Department</label>

                <input
                    type="text"
                    id="department"
                    name="department"
                    value="<?= htmlspecialchars($employee['department']) ?>"
                    required
                >
            </div>

            <div class="field-group">
                <label for="position">Position</label>

                <input
                    type="text"
                    id="position"
                    name="position"
                    value="<?= htmlspecialchars($employee['position']) ?>"
                    required
                >
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="button button-primary">
                Update Employee
            </button>

            <a href="index.php" class="button button-secondary">
                Cancel
            </a>
        </div>

    </form>

</section>

<?php include 'includes/footer.php'; ?>