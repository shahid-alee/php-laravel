<?php
session_start();

/* LOGIN CHECK */
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

/* DATABASE CONNECTION */
$conn = new mysqli("localhost", "root", "", "first_project");
if ($conn->connect_error) {
    die("Database connection failed");
}

$user_id = $_SESSION['user_id'];

/* FETCH USER DATA */
$result = $conn->query("SELECT * FROM users WHERE id = $user_id");
$user = $result->fetch_assoc();

/* UPDATE PROFILE */
if (isset($_POST['update'])) {
    $name     = $_POST['name'];
    $username = $_POST['userName'];
    $email    = $_POST['email'];
    $address  = $_POST['address'];

    $conn->query("UPDATE users SET 
        name='$name',
        userName='$username',
        email='$email',
        address='$address'
        WHERE id=$user_id
    ");

    header("Location: index.php");
    exit;
}

/* LOGOUT */
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{
    background:#bde6bbff;
    font-family:Arial,sans-serif;
}
.profile-box{
    width:400px;
    max-width:90%;
    background:white;
    margin:100px auto;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 20px rgba(0,0,0,0.2);
}
.profile-box h2{
    text-align:center;
    margin-bottom:20px;
}
.profile-box label{
    font-weight:bold;
    margin-top:10px;
    display:block;
}
.profile-box input{
    width:100%;
    padding:10px;
    margin-top:5px;
    border-radius:5px;
    border:1px solid #ccc;
}
.profile-box button{
    width:100%;
    padding:12px;
    margin-top:15px;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}
.update-btn{
    background:#4CAF50;
    color:white;
}
.logout-btn{
    background:#e53935;
    color:white;
}
</style>
</head>

<body>

<div class="profile-box">
    <h2>My Profile</h2>

    <form method="POST">
        <label>Name</label>
        <input type="text" name="name" value="<?= $user['name'] ?>" required>

        <label>Username</label>
        <input type="text" name="userName" value="<?= $user['userName'] ?>" required>

        <label>Email</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" required>

        <label>Address</label>
        <input type="text" name="address" value="<?= $user['address'] ?>" required>

        <button type="submit" name="update" class="update-btn">Update</button>
        <button type="submit" name="logout" class="logout-btn">Log Out</button>
    </form>
</div>

</body>
</html>
