<!DOCTYPE html>
<html>
<head>
<title>Users List</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #9fdd9dff;
    margin: 0;
    padding: 0;
}

.container {
    width: 95%;
    max-width: 1000px;
    margin: 50px auto;
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    min-width: 700px;
}

th {
    background: #4CAF50;
    color: white;
    padding: 12px;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.action {
    display: flex;
    gap: 8px;
}

.action a {
    padding: 6px 10px;
    border-radius: 5px;
    text-decoration: none;
    color: #fff;
    font-size: 14px;
    white-space: nowrap;
}

.edit { background: #2196F3; }
.delete { background: #f44336; }

.add-btn {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 15px;
    background: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
}

/* Responsive */
@media (max-width: 768px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }
    thead { display: none; }
    tr {
        margin-bottom: 15px;
        border-bottom: 2px solid #ddd;
    }
    td::before {
        content: attr(data-label);
        font-weight: bold;
        display: block;
        margin-bottom: 4px;
    }
}
</style>
</head>

<body>

<div class="container">
<h1>Users List</h1>

<?php
$conn = new mysqli("localhost", "root", "", "first_project");
if ($conn->connect_error) die("Connection failed");

/*  ENCRYPTION KEY */
$key = "my_secret_key_12";

/*  DECRYPT FUNCTION (ONLY ONCE) */
function decryptPassword($encrypted) {
    global $key;
    return openssl_decrypt($encrypted, "AES-128-ECB", $key);
}

/* DELETE USER */
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM users WHERE id=$id");
    header("Location: users.php");
    exit;
}

$result = $conn->query("SELECT * FROM users");

if ($result->num_rows > 0) {
    echo "<table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";

    while ($row = $result->fetch_assoc()) {
        $password = decryptPassword($row['password']);

        echo "<tr>
            <td data-label='ID'>{$row['id']}</td>
            <td data-label='Name'>{$row['name']}</td>
            <td data-label='User Name'>{$row['userName']}</td>
            <td data-label='Email'>{$row['email']}</td>
            <td data-label='Address'>{$row['address']}</td>
            <td data-label='Password'>{$password}</td>
            <td data-label='Action'>
                <div class='action'>
                    <a href='index.php?id={$row['id']}' class='edit'>Edit</a>
                    <a href='users.php?delete={$row['id']}' class='delete'
                       onclick=\"return confirm('Are you sure?')\">Delete</a>
                </div>
            </td>
        </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p style='text-align:center;'>No users found</p>";
}

$conn->close();
?>

<a href="index.php" class="add-btn">Add New User</a>
</div>

</body>
</html>
