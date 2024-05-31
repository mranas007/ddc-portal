<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client - DevDotCode.portal</title>

    <link rel="stylesheet" href="../static/stylesheets/style.css">

</head>

<body>
    <div class="navbar">
        <div>
            <a href="dashboard.php">Dashboard</a>
            <a href="clients.php">Clients</a>
            <a class="active" href="add_client.php">Add Client</a>
            <a href="profile.php">Profile</a>
        </div>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="add-client-container">
        <div class="content">
            <h2>Add Client</h2>
            <form onsubmit="return validateForm()">
                <label for="clientName">Client Name:</label>
                <input type="text" id="clientName" name="clientName" />
                <span class="error-message" id="clientNameError"></span>

                <label for="contactPerson">Contact Person:</label>
                <input type="text" id="contactPerson" name="contactPerson" />
                <span class="error-message" id="contactPersonError"></span>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />
                <span class="error-message" id="emailError"></span>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" />
                <span class="error-message" id="phoneError"></span>

                <label for="assignedFriend">Assigned Friend:</label>
                <input type="text" id="assignedFriend" name="assignedFriend" />
                <span class="error-message" id="assignedFriendError"></span>

                <input type="submit" value="Add Client" />
            </form>
        </div>
    </div>

    <?php require 'partial/footer.php'; ?>


    <script>
        function validateForm() {
            const clientName = document.getElementById('clientName').value.trim();
            const contactPerson = document.getElementById('contactPerson').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const assignedFriend = document.getElementById('assignedFriend').value.trim();

            let isValid = true;

            if (clientName === '') {
                document.getElementById('clientNameError').innerText = 'Client Name is required';
                isValid = false;
            } else {
                document.getElementById('clientNameError').innerText = '';
            }

            if (contactPerson === '') {
                document.getElementById('contactPersonError').innerText = 'Contact Person is required';
                isValid = false;
            } else {
                document.getElementById('contactPersonError').innerText = '';
            }

            if (email === '') {
                document.getElementById('emailError').innerText = 'Email is required';
                isValid = false;
            } else {
                document.getElementById('emailError').innerText = '';
            }

            if (phone === '') {
                document.getElementById('phoneError').innerText = 'Phone is required';
                isValid = false;
            } else {
                document.getElementById('phoneError').innerText = '';
            }

            if (assignedFriend === '') {
                document.getElementById('assignedFriendError').innerText = 'Assigned Friend is required';
                isValid = false;
            } else {
                document.getElementById('assignedFriendError').innerText = '';
            }

            return isValid;
        }
    </script>
</body>

</html>