<?php
// Assume this is the beginning of your PHP file
include 'config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <header>
                <h1>Admin Panel</h1>
                <label class="switch">
                    <input type="checkbox" id="modeSwitch">
                    <span class="slider round"></span>
                </label>
            </header>
            <nav>
                <ul>
                    <li><a href="#" onclick="loadPage('table2.php')">Projects</a></li>
                    <li><a href="#" onclick="loadPage('table1.php')">Courses</a></li>
                    <li><a href="#" onclick="loadPage('table.php')">Contact</a></li>
                    <li><form method="POST">
                    <button name="logout">Log Out</button>
                        </form></li>
                </ul>
            </nav>
        </aside>
        <main id="dashboard-content">
            
        </main>
    </div>
    <script src="script.js"></script>
    <script>
        function loadPage(page) {
            // Fetch and load the content of the selected page
            fetch(page)
                .then(response => response.text())
                .then(content => {
                    document.getElementById('dashboard-content').innerHTML = content;
                })
                .catch(error => console.error('Error loading page:', error));
        }
    </script>
</body>
</html>

<?php
// Assume this is the end of your PHP file
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}
?>
