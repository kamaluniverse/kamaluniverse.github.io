<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Include your database connection or configuration file
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            margin-top: 0;
            color: #333;
        }
        .welcome-message {
            margin-bottom: 20px;
            font-size: 18px;
            color: #555;
        }
        a {
            padding: 10px;
            background-color: #5cb85c;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            cursor: pointer;
            display: inline-block;
            margin: 5px;
        }
        a:hover {
            background-color: #4cae4c;
        }
    </style>
    <script>
        function showCreateEventForm() {
            var createEventForm = document.getElementById("createEventForm");
            createEventForm.style.display = "block";
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Admin Page</h2>
        <div class="welcome-message">
            Welcome to the Admin Page, <?php echo $_SESSION['username']; ?>!
        </div>
        
        <a href="logout.php">Logout</a>

        <!-- Add event link -->
        <a href="#" onclick="showCreateEventForm()">Add Event</a>
        
        <!-- Include create event form -->
        <div id="createEventForm" style="display: none;">
            <?php include 'create_event.php'; ?>
        </div>
    </div>
</body>
</html>
