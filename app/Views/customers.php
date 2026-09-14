<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>

<h1>Customer Accounts</h1>

<nav>
    /Home</a> |
    /aboutAbout</a> |
    /customersCustomers</a> |
    /usersUsers</a>
</nav>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php foreach ($customers as $customer): ?>
    <tr>
        <td><?= $customer['name']; ?></td>
        <td><?= $customer['email']; ?></td>
        <td><?= $customer['phone']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>