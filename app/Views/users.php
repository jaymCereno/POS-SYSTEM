<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

<h1>User Accounts</h1>

<nav>
    /Home</a> |
    /aboutAbout</a> |
    /customersCustomers</a> |
    /usersUsers</a>
</nav>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Role</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['username']; ?></td>
        <td><?= $user['fullname']; ?></td>
        <td><?= $user['role']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>