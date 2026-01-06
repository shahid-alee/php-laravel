<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #bde6bbff;
    margin: 0;
    padding: 0;
}

.container {
    width: 450px;
    max-width: 95%;
    margin: 80px auto;
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

.error {
    color: red;
    text-align: center;
    margin-top: 10px;
}

.success {
    color: green;
    text-align: center;
    margin-top: 10px;
}

a {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #4CAF50;
    font-weight: bold;
    text-decoration: none;
}
</style>
</head>

<body>

<div class="container">
<h1>Login</h1>

<?php
session_start();

/* DB CONNECTION */
$conn = new mysqli("localhost", "root", "", "first_project");
if ($conn->connect_error) die("Connection failed");

/* SAME ENCRYPT FUNCTION */
$key = "my_sec";
function encryptPassword($password) {
    global $key;
    return openssl_encrypt($password, "AES-128-ECB", $key);
}

$error = "";

/* LOGIN LOGIC */
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = encryptPassword($_POST['password']);

    $result = $conn->query(
        "SELECT * FROM users WHERE email='$email' AND password='$password'"
    );

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Store session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>

<form method="POST">
    <label>Email</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <button type="submit" name="login">Login</button>
</form>

<?php if ($error != "") { ?>
    <div class="error"><?= $error ?></div>
<?php } ?>

<a href="register.php">Create New Account</a>
</div>

</body>
</html>
