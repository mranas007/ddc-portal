<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: ../index.php");
//     exit;
// }
// $name = $_SESSION['name'];
// $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../static/stylesheets/style.css">
    <title>Dashboard - DevDotCode.portal</title>

</head>

<body>

    <nav class="navbar">
        <div>
            <a class="active" href="dashboard.php">Dashboard</a>
            <a href="clients.php">Clients</a>
            <a href="add_client.php">Add Client</a>
            <a href="profile.php">Profile</a>
        </div>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="dashboard-container">

        <div class="sidebar">
            <h3>Profile</h3>
            <p><strong>Name:</strong> <?php //echo $name; ?></p>
            <p><strong>Username:</strong> <?php //echo $username; ?></p>
        </div>

        <div class="content">
            <h2>Dashboard</h2>
            <div class="stats">
                <h3>Client Statistics</h3>
                <div>Total Clients: [Total Clients]</div>
                <div>Clients Added This Month: [Clients This Month]</div>
                <div>Clients Assigned to You: [Your Clients]</div>
            </div>

            <div class="activities">
                <h3>Recent Activities</h3>
                <div>Client ABC added by [User] on [Date]</div>
                <div>Client XYZ updated by [User] on [Date]</div>
                <div>Meeting scheduled with Client DEF by [User] on [Date]</div>
                <!-- More activities -->
            </div>

            <div class="quick-links">
                <h3>Quick Links</h3>
                <div><a href="add_client.html">Add New Client</a></div>
                <div><a href="clients.html">View All Clients</a></div>
                <div><a href="profile.html">Edit Profile</a></div>
                <!-- More links -->
            </div>

        </div>
    </div>

    <!-- ============================== Footer ======================== -->
    <?php require 'partial/footer.php'; ?>

</body>

</html>