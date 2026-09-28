<!DOCTYPE html>
<html>

<head>
    <title>User Accounts</title>
</head>

<body>

    <h1>User Accounts</h1>

    <nav>

        <button onclick="window.location.href='<?= site_url('/'); ?>'">
            Home
        </button>

        <button onclick="window.location.href='<?= site_url('about'); ?>'">
            About
        </button>

        <button onclick="window.location.href='<?= site_url('customers'); ?>'">
            Customers
        </button>

        <button onclick="window.location.href='<?= site_url('users'); ?>'">
            Users
        </button>

    </nav>

    <hr>

    <hr>

    <table border="1" cellpadding="10">
        <tr>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($users as $user): ?>

            <td>
                <?php if (!empty($user['avatar'])): ?>
                    <img src="<?= base_url('uploads/avatars/' . $user['avatar']); ?>" width="80">
                <?php endif; ?>
            </td>
            <tr>
                <td><?= $user['username']; ?></td>
                <td><?= $user['full_name']; ?></td>
                <td><?= $user['role']; ?></td>

                <td>
                    <button onclick="window.location.href='<?= site_url('users/edit/' . $user['id']); ?>'">
                        Edit
                    </button>
                </td>

            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>