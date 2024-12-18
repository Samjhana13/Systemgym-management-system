<?php
$conn = new mysqli('localhost', 'local', 'shridhi123', 'gym_shine');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_sql = "DELETE FROM membership_forms WHERE id = $id";
    $conn->query($delete_sql);
    header("Location: view-membership.php");
}

$sql = "SELECT * FROM membership_forms";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Memberships</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: orangered;
            text-align: center;
        }

        .membership-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .membership-table th, .membership-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .membership-table th {
            background-color: #f2f2f2;
        }

        .delete-btn {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .delete-btn:hover {
            background-color: darkred;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>View Memberships</h1>
        <table class="membership-table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Membership Type</th>
                <th>Package</th>
                <th>Message</th>
                <th>Date</th>
                <th>Action</th>
            </tr>

            <?php
           if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['membership_type'] . "</td>";
                echo "<td>" . (isset($row['packages']) ? $row['packages'] : 'N/A') . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "<td><a href='view-membership.php?delete=" . $row['id'] . "' class='delete-btn'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No memberships found.</td></tr>";
        }
        
            ?>

        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
