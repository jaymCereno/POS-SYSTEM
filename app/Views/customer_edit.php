<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

<h1>Edit Customer</h1>

<?php if (isset($validation)): ?>
    <div style="color:red;">
        <?= $validation->listErrors(); ?>
    </div>
<?php endif; ?>

<form method="post">

    <label>Full Name</label><br>
    <input
        type="text"
        name="full_name"
        value="<?= $customer['full_name']; ?>">
    <br><br>

    <label>Email</label><br>
    <input
        type="email"
        name="email"
        value="<?= $customer['email']; ?>">
    <br><br>

    <button type="submit">
        Update Customer
    </button>

</form>

<p>
    <button onclick="window.location.href='<?= site_url('customers'); ?>'">
        Back to Customers
    </button>
</p>

</body>
</html>