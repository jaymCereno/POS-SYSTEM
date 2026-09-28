<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>

<h1>Customer Accounts</h1>

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

<table border="1" cellpadding="10">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php foreach ($customers as $customer): ?>
    <tr>
        <td><?= $customer['full_name']; ?></td>
        <td><?= $customer['email']; ?></td>
        <td><?= $customer['phone']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>