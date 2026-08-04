<?php

require_once 'config/database.php';

$search = trim($_GET['search'] ?? '');
$department = trim($_GET['department'] ?? '');

/*
|--------------------------------------------------------------------------
| Get unique departments for the dropdown
|--------------------------------------------------------------------------
*/

$departmentSql = "
    SELECT DISTINCT department
    FROM employees
    WHERE department <> ''
    ORDER BY department ASC
";

$departmentResult = mysqli_query($conn, $departmentSql);

if (!$departmentResult) {
    die('Unable to load departments: ' . mysqli_error($conn));
}

/*
|--------------------------------------------------------------------------
| Build employee query
|--------------------------------------------------------------------------
*/

$sql = "SELECT * FROM employees";
$conditions = [];
$types = '';
$parameters = [];

if ($search !== '') {
    $conditions[] = "
        (
            first_name LIKE ?
            OR last_name LIKE ?
            OR email LIKE ?
            OR department LIKE ?
            OR position LIKE ?
        )
    ";

    $searchTerm = '%' . $search . '%';

    $types .= 'sssss';

    $parameters[] = $searchTerm;
    $parameters[] = $searchTerm;
    $parameters[] = $searchTerm;
    $parameters[] = $searchTerm;
    $parameters[] = $searchTerm;
}

if ($department !== '') {
    $conditions[] = "department = ?";

    $types .= 's';
    $parameters[] = $department;
}

if (!empty($conditions)) {
    $sql .= ' WHERE ' . implode(' AND ', $conditions);
}

$sql .= ' ORDER BY id DESC';

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die('Prepare failed: ' . mysqli_error($conn));
}

if (!empty($parameters)) {
    mysqli_stmt_bind_param($stmt, $types, ...$parameters);
}

if (!mysqli_stmt_execute($stmt)) {
    die('Query failed: ' . mysqli_stmt_error($stmt));
}

$result = mysqli_stmt_get_result($stmt);

?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="toolbar">

    <form action="index.php" method="GET" class="search-form">

        <div class="search-group">
            <label for="search">Search Employee</label>

            <input
                type="search"
                id="search"
                name="search"
                value="<?= htmlspecialchars($search) ?>"
                placeholder="Name, email, department, or position"
            >
        </div>

        <div class="search-group">
            <label for="department">Department</label>

            <select id="department" name="department">
                <option value="">All Departments</option>

                <?php while (
                    $departmentRow = mysqli_fetch_assoc($departmentResult)
                ): ?>

                    <?php
                    $departmentName = $departmentRow['department'];
                    ?>

                    <option
                        value="<?= htmlspecialchars($departmentName) ?>"
                        <?= $department === $departmentName
                            ? 'selected'
                            : '' ?>
                    >
                        <?= htmlspecialchars($departmentName) ?>
                    </option>

                <?php endwhile; ?>
            </select>
        </div>

        <div class="search-actions">
            <button type="submit" class="button button-primary">
                Apply
            </button>

            <?php if ($search !== '' || $department !== ''): ?>
                <a href="index.php" class="button button-secondary">
                    Clear
                </a>
            <?php endif; ?>
        </div>

    </form>

    <a href="add.php" class="button button-primary add-button">
        + Add Employee
    </a>

</div>
    <div class="table-container">
    <table class="employee-table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Employee Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Position</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            <?php if (mysqli_num_rows($result) > 0): ?>

                <?php while ($employee = mysqli_fetch_assoc($result)): ?>
                    

                    <tr>
                        <td>
                            <?= htmlspecialchars($employee['id']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars(
                                $employee['first_name'] . ' ' .
                                $employee['last_name']
                            ) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($employee['email']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($employee['department']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($employee['position']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($employee['created_at']) ?>
                        </td>

                        <td>
                            
                        
<div class="table-actions">

    <a
        href="edit.php?id=<?= urlencode($employee['id']) ?>"
        class="button button-edit"
    >
        Edit
    </a>

    <a
        href="delete.php?id=<?= urlencode($employee['id']) ?>"
        class="button button-delete"
        onclick="return confirm('Are you sure you want to delete this employee?');"
    >
        Delete
    </a>

</div>

                        </td>
                    </tr>

                <?php endwhile; ?>

            <?php else: ?>

                <tr>
    <td colspan="7">

        <?php if ($search !== '' || $department !== ''): ?>

            No employees matched the selected search or filter.

        <?php else: ?>

            No employee records found.

        <?php endif; ?>

    </td>
</tr>

            <?php endif; ?>

        </tbody>

    </table>
    </div>

<?php include 'includes/footer.php'; ?>