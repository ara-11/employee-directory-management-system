<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="form-card">

    <div class="form-heading">
        <p class="form-label">Employee Records</p>

        <h2>Add Employee</h2>

        <p>
            Enter the details of the new employee below.
        </p>
    </div>

    <form action="save.php" method="POST" class="employee-form">

        <div class="form-grid">

            <div class="field-group">
                <label for="first_name">First Name</label>

                <input
                    type="text"
                    id="first_name"
                    name="first_name"
                    required
                >
            </div>

            <div class="field-group">
                <label for="last_name">Last Name</label>

                <input
                    type="text"
                    id="last_name"
                    name="last_name"
                    required
                >
            </div>

            <div class="field-group form-field-full">
                <label for="email">Email Address</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="employee@example.com"
                    required
                >
            </div>

            <div class="field-group">
                <label for="department">Department</label>

                <input
                    type="text"
                    id="department"
                    name="department"
                    required
                >
            </div>

            <div class="field-group">
                <label for="position">Position</label>

                <input
                    type="text"
                    id="position"
                    name="position"
                    required
                >
            </div>

        </div>

        <div class="form-actions">
            <button type="submit" class="button button-primary">
                Save Employee
            </button>

            <a href="index.php" class="button button-secondary">
                Cancel
            </a>
        </div>

    </form>

</section>

<?php include 'includes/footer.php'; ?>