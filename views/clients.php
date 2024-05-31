<!DOCTYPE html>
<html>

<head>

    <title>Clients - DevDotCode.portal</title>
    <link rel="stylesheet" href="../static/stylesheets/style.css">

</head>

<body>

    <nav class="navbar">
        <div>
            <a href="dashboard.php">Dashboard</a>
            <a class="active" href="clients.php">Clients</a>
            <a href="add_client.php">Add Client</a>
            <a href="profile.php">Profile</a>
        </div>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="client-container">
        <div class="content">

            <h2>Clients</h2>
            <div class="search-bar">
                <input type="text" id="search" placeholder="Search clients..." />
                <button onclick="searchClients()">Search</button>
                <!-- // search_clients.php -->
                <?php
                // require 'db.php';

                // $search = $_GET['search'] ?? '';

                // $stmt = $conn->prepare("SELECT * FROM clients WHERE client_name LIKE ? OR contact_person LIKE ? OR email LIKE ?");
                // $searchTerm = '%' . $search . '%';
                // $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
                // $stmt->execute();
                // $result = $stmt->get_result();
                // $clients = $result->fetch_all(MYSQLI_ASSOC);

                // echo json_encode($clients);
                ?>

            </div>

            <table>
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Contact Person</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Assigned Friend</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Client A</td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>+1 555-123-4567</td>
                        <td>Jane Smith</td>
                        <td>
                            <a href="view_client.html?id=1">View</a> |
                            <a href="edit_client.html?id=1">Edit</a> |
                            <a href="delete_client.php?id=1">Delete</a>
                        </td>
                    </tr>

                </tbody>
            </table>

            <div class="pagination">
                <button onclick="goToPage(1)">1</button>
                <button onclick="goToPage(2)">2</button>
                <button onclick="goToPage(3)">3</button>
                <!-- // fetch_clients.php -->
                <?php
                // require 'db.php';

                // $page = $_GET['page'] ?? 1;
                // $limit = 10;
                // $offset = ($page - 1) * $limit;

                // $stmt = $conn->prepare("SELECT * FROM clients LIMIT ? OFFSET ?");
                // $stmt->bind_param("ii", $limit, $offset);
                // $stmt->execute();
                // $result = $stmt->get_result();
                // $clients = $result->fetch_all(MYSQLI_ASSOC);

                // echo json_encode($clients);
                ?>

            </div>

        </div>
    </div>

    <?php include 'partial/footer.php'; ?>

    <script>
        function searchClients() {
            const search = document.getElementById('search').value;
            fetch(`search_clients.php?search=${search}`)
                .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector('tbody');
                    tbody.innerHTML = '';
                    data.forEach(client => {
                        const row = `
                    <tr>
                        <td>${client.client_name}</td>
                        <td>${client.contact_person}</td>
                        <td>${client.email}</td>
                        <td>${client.phone}</td>
                        <td>${client.assigned_friend}</td>
                        <td>
                            <a href="view_client.html?id=${client.id}">View</a> |
                            <a href="edit_client.html?id=${client.id}">Edit</a> |
                            <a href="delete_client.php?id=${client.id}">Delete</a>
                        </td>
                    </tr>
                `;
                        tbody.innerHTML += row;
                    });
                })
                .catch(error => console.error('Error fetching clients:', error));
        }

        function goToPage(pageNumber) {
            fetch(`fetch_clients.php?page=${pageNumber}`)
                .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector('tbody');
                    tbody.innerHTML = '';
                    data.forEach(client => {
                        const row = `
                    <tr>
                        <td>${client.client_name}</td>
                        <td>${client.contact_person}</td>
                        <td>${client.email}</td>
                        <td>${client.phone}</td>
                        <td>${client.assigned_friend}</td>
                        <td>
                            <a href="view_client.html?id=${client.id}">View</a> |
                            <a href="edit_client.html?id=${client.id}">Edit</a> |
                            <a href="delete_client.php?id=${client.id}">Delete</a>
                        </td>
                    </tr>`;

                        tbody.innerHTML += row;
                    });
                })
                .catch(error => console.error('Error fetching clients:', error));
        }


        function goToPage(pageNumber) {
            // Implement pagination functionality here
            alert('Pagination functionality to be implemented');
        }
    </script>

</body>

</html>