<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - Software Agency</title>
    <link rel="stylesheet" href="../static/stylesheets/style.css">
    
</head>

<body>

    <div class="navbar">
        <div>
            <a href="dashboard.php">Dashboard</a>
            <a href="clients.php">Clients</a>
            <a href="add_client.php">Add Client</a>
            <a class="active" href="profile.php">Profile</a>
        </div>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="profile-container">
        <div class="content">
            <h2>Profile</h2>
            <div class="profile-details">
                <img src="https://www.shutterstock.com/image-photo/close-head-shot-confident-serious-260nw-1481322794.jpg" alt="Profile Picture">
                <div class="profile-info">
                    <h3>John Doe</h3>
                    <p>Email: john@example.com</p>
                    <p>Phone: +1 555-123-4567</p>
                    <p>Role: Developer</p>
                </div>
            </div>
            <div class="section">
                <h3>About Me</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur odio a ipsum tincidunt, at convallis est blandit. Suspendisse at ipsum vitae odio vehicula cursus. Sed vel arcu eget purus fermentum posuere. Proin eget tempor purus. Sed sed nulla sit amet velit efficitur consectetur. Aliquam erat volutpat. Nulla tincidunt tortor ac dolor lacinia, eget vestibulum urna ultricies. In pulvinar elit sed leo congue, vel vestibulum risus dictum.</p>
            </div>
            <div class="section">
                <h3>Contact Information</h3>
                <p>Address: 123 Software St, Tech City, TX 78901</p>
                <p>LinkedIn: <a href="https://www.linkedin.com/in/johndoe" target="_blank">John Doe</a></p>
                <p>GitHub: <a href="https://github.com/johndoe" target="_blank">johndoe</a></p>
            </div>
        </div>
    </div>

    <?php require 'partial/footer.php'; ?>

</body>

</html>