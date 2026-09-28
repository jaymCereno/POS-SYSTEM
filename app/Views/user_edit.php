<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

<?php if (isset($validation)): ?>
    <div style="color:red;">
        <?= $validation->listErrors(); ?>
    </div>
<?php endif; ?>

<form method="post" enctype="multipart/form-data">

    <label>Username</label><br>
    <input
        type="text"
        value="<?= $user['username']; ?>"
        disabled>
    <br><br>

    <label>Full Name</label><br>
    <input
        type="text"
        name="full_name"
        value="<?= $user['full_name']; ?>">
    <br><br>

    <label>Role</label><br>
    <select name="role">

        <option value="Admin"
            <?= $user['role'] == 'Admin' ? 'selected' : ''; ?>>
            Admin
        </option>

        <option value="Cashier"
            <?= $user['role'] == 'Cashier' ? 'selected' : ''; ?>>
            Cashier
        </option>

        <option value="Manager"
            <?= $user['role'] == 'Manager' ? 'selected' : ''; ?>>
            Manager
        </option>

    </select>

    <br><br>

    <label>New Avatar</label><br>
    <input type="file" name="avatar">

    <br><br>

    <button type="submit">
        Update User
    </button>

</form>

<p>
    <button onclick="window.location.href='<?= site_url('users'); ?>'">
        Back to Users
    </button>
</p>

</body>
</html>