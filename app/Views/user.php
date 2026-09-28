<!DOCTYPE html>
<html>

<head>
    <title>New User</title>
</head>

<body>

    <h1>New User</h1>

    <?php if (isset($validation)): ?>
        <div style="color:red;">
            <?= $validation->listErrors(); ?>
        </div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">

        <label>Username</label><br>
        <input type="text" name="username">
        <br><br>

        <label>Full Name</label><br>
        <input type="text" name="full_name">
        <br><br>

        <label>Role</label><br>
        <select name="role">
            <option value="">Select Role</option>
            <option value="Admin">Admin</option>
            <option value="Cashier">Cashier</option>
            <option value="Manager">Manager</option>
        </select>
        <br><br>

        <label>Avatar</label><br>
        <input type="file" name="avatar">
        <br><br>

        <button type="submit">
            Save User
        </button>

    </form>

    <p>
        <button onclick="window.location.href='<?= site_url('users'); ?>'">
            Back to Users
        </button>
    </p>

</body>

</html>