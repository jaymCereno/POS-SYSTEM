<!DOCTYPE html>
<html>
<head>
    <title>About</title>
</head>
<body>

<h1>About the POS System</h1>

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

<p>
This Point-of-Sale system is built using CodeIgniter 4.
It demonstrates routing, controllers, views, and static array data.
</p>

</body>
</html>