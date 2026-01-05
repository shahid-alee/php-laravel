
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
    margin: 60px auto;
    background: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
    overflow-x: auto;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
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
    text-align: left;
}

td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    vertical-align: middle;
}

tr:hover {
    background: #f1f1f1;
}

.action {
    white-space: nowrap; /* buttons stay in row */
}

.action a {
    padding: 6px 12px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    font-size: 14px;
    margin-right: 5px;
}

.action a.edit {
    background: #2196F3;
}

.action a.delete {
    background: #f44336;
}

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

/* ------------------- RESPONSIVE ------------------- */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    table {
        width: 100%;
        min-width: 0;
    }
    th, td {
        padding: 8px;
        font-size: 14px;
    }
    td::before {
        display: none; /* hide before content, keep horizontal row layout */
    }
}
</style>
</head>

<body>

<div class="container">
<h1>Users List</h1>

<?php
$conn = new mysqli("localhost", "root", "", "first_project");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

/* 🔐 ENCRYPTION KEY & FUNCTION */
$key = "my_secret_key_123";

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
        $realPassword = decryptPassword($row['password']);

        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['userName']}</td>
            <td>{$row['email']}</td>
            <td>{$row['address']}</td>
            <td>{$realPassword}</td>
            <td class='action'>
                <a href='index.php?id={$row['id']}' class='edit'>Edit</a>
                <a href='users.php?delete={$row['id']}' class='delete'
                   onclick=\"return confirm('Are you sure?')\">Delete</a>
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
    margin: 60px auto;
    background: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
    overflow-x: auto;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
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
    text-align: left;
}

td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    vertical-align: middle;
}

tr:hover {
    background: #f1f1f1;
}

.action {
    white-space: nowrap; /* buttons stay in row */
}

.action a {
    padding: 6px 12px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    font-size: 14px;
    margin-right: 5px;
}

.action a.edit {
    background: #2196F3;
}

.action a.delete {
    background: #f44336;
}

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

/* ------------------- RESPONSIVE ------------------- */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    table {
        width: 100%;
        min-width: 0;
    }
    th, td {
        padding: 8px;
        font-size: 14px;
    }
    td::before {
        display: none; /* hide before content, keep horizontal row layout */
    }
}
</style>
</head>

<body>

<div class="container">
<h1>Users List</h1>

<?php
$conn = new mysqli("localhost", "root", "", "first_project");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

/* 🔐 ENCRYPTION KEY & FUNCTION */
$key = "my_secret_key_123";

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
        $realPassword = decryptPassword($row['password']);

        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['userName']}</td>
            <td>{$row['email']}</td>
            <td>{$row['address']}</td>
            <td>{$realPassword}</td>
            <td class='action'>
                <a href='index.php?id={$row['id']}' class='edit'>Edit</a>
                <a href='users.php?delete={$row['id']}' class='delete'
                   onclick=\"return confirm('Are you sure?')\">Delete</a>
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
>>>>>>> aa5036bddcbc7db2904e34051cd4154d738c86ae
