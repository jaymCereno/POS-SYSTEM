<!DOCTYPE html>
<html>
<head>
    <title>POS System</title>
</head>
<body>

<h1>Point of Sale System</h1>

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

<h2>Welcome</h2>
<p>This is the landing page of our POS System.</p>

</body>
</html>