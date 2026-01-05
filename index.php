<!DOCTYPE html>
<html>
<head>
<title>User Details</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #9fdd9dff;
    margin: 0;
    padding: 0;
}

.container {
    width: 600px;
    max-width: 95%;
    margin: 60px auto;
    background: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 0px 35px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    margin-top: 20px;
    font-weight: bold;
    display: block;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 6px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
}

input:focus {
    border-color: #4CAF50;
    outline: none;
}

button {
    width: 100%;
    padding: 12px;
    background: #4CAF50;
    color: white;
    border: none;
    border-radius: 6px;
    margin-top: 20px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background: #43a047;
}

a {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #4CAF50;
    font-weight: bold;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Responsive */
@media (max-width: 480px) {
    .container {
        width: 90%;
        padding: 15px;
        margin: 30px auto;
    }
}
</style>
</head>

<body>

<div class="container">
<h1>User Details</h1>

<?php
$conn = new mysqli("localhost", "root", "", "first_project");
if ($conn->connect_error) die("Connection failed");

/* CREATE TABLE */
$conn->query("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    userName VARCHAR(100),
    email VARCHAR(100),
    address VARCHAR(200),
    password VARCHAR(255)
)");

/*  ENCRYPT FUNCTION (ONLY ONCE) */
$key = "my_secret_key_123";
function encryptPassword($password) {
    global $key;
    return openssl_encrypt($password, "AES-128-ECB", $key);
}

/* DEFAULT VALUES */
$id = $name = $userName = $email = $address = "";

/* FETCH FOR EDIT */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $res = $conn->query("SELECT * FROM users WHERE id=$id");
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $name = $row['name'];
        $userName = $row['userName'];
        $email = $row['email'];
        $address = $row['address'];
    }
}

/* INSERT */
if (isset($_POST['submit'])) {
    $password = encryptPassword($_POST['password']);

    $conn->query("INSERT INTO users (name, userName, email, address, password)
    VALUES (
        '{$_POST['name']}',
        '{$_POST['userName']}',
        '{$_POST['email']}',
        '{$_POST['address']}',
        '$password'
    )");

    header("Location: homepage.php");
    exit;
}

/* UPDATE */
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    if (!empty($_POST['password'])) {
        $password = encryptPassword($_POST['password']);
        $conn->query("UPDATE users SET
            name='{$_POST['name']}',
            userName='{$_POST['userName']}',
            email='{$_POST['email']}',
            address='{$_POST['address']}',
            password='$password'
            WHERE id=$id");
    } else {
        $conn->query("UPDATE users SET
            name='{$_POST['name']}',
            userName='{$_POST['userName']}',
            email='{$_POST['email']}',
            address='{$_POST['address']}'
            WHERE id=$id");
    }

    header("Location: homepage.php");
    exit;
}
?>

<form method="POST">
<input type="hidden" name="id" value="<?= $id ?>">

<label>Name</label>
<input type="text" name="name" value="<?= $name ?>" required>

<label>User Name</label>
<input type="text" name="userName" value="<?= $userName ?>" required>

<label>Email</label>
<input type="email" name="email" value="<?= $email ?>" required>

<label>Address</label>
<input type="text" name="address" value="<?= $address ?>" required>

<label>Password <?= ($id) ? "(leave blank to keep same)" : "" ?></label>
<input type="password" name="password" <?= ($id=="") ? "required" : "" ?>>

<?php if ($id=="") { ?>
    <button type="submit" name="submit">Submit</button>
<?php } else { ?>
    <button type="submit" name="update">Update</button>
<?php } ?>
</form>

<a href="users.php">View Users</a>
</div>

</body>
</html>
