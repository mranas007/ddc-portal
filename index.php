<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - DevDotCode Portal</title>
    <link rel="stylesheet" href="static/stylesheets/style.css">

</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['invaliduser']) && $_GET['invaliduser'] === 'invaliduser') {
            echo '<div class="alert"><span class="alert-icon">&#9888;</span> Invalid Username.</div>';
        } elseif (isset($_GET['invalidpass']) && $_GET['invalidpass'] === 'invalidpass') {
            echo '<div class="alert"><span class="alert-icon">&#9888;</span> Invalid Password.</div>';
        }
    }
    ?>

    <div class="login-container">
        <div id="login-con">
            <h2>Login</h2>
            <form action="controllers/login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

</body>

</html>