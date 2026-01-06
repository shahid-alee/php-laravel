<!DOCTYPE html>
<html>
<head>
<title>Contact Me - Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
    font-family: Arial, sans-serif;
    background: #bde6bbff;
    margin: 0;
    padding: 0;
}
/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* NAVBAR */
.navbar {
    display: flex;
    margin-top:-70px ;
    justify-content: space-between;
    align-items: center;
    padding: 15px 50px;
    background: #0D1117;
    color: white;
    position: fixed;
    width: 100%;
    z-index: 1000;
}

.navbar .logo {
    font-size: 24px;
    font-weight: bold;
    color: #4CAF50;
}

.navbar .nav-links a {
    color: white;
    text-decoration: none;
    margin-left: 25px;
    font-weight: bold;
    transition: 0.3s;
}

.navbar .nav-links a:hover {
    color: #4CAF50;
}

/* CONTACT HERO */
.contact-hero {
    height: 250px;
    background: url('https://images.unsplash.com/photo-1581091012184-36c6a4b2ff9d?auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    position: relative;
    margin-top: 70px;
}

.contact-hero::after {
    content: "";
    position: absolute;
    left:0; top:0;
    width:100%; height:100%;
    background-color: rgba(0,0,0,0.6);
}

.contact-hero h1 {
    position: relative;
    z-index: 1;
    font-size: 42px;
}

/* CONTACT FORM SECTION */
.contact-section {
    max-width: 1000px;
    margin: 50px auto;
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    justify-content: center;
    align-items: flex-start;
    padding: 20px;
}

.contact-form {
    flex: 1;
    min-width: 300px;
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.contact-form h2 {
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.contact-form label {
    display: block;
    font-weight: bold;
    margin-top: 15px;
    color: #555;
}

.contact-form input, 
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-top: 6px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 15px;
}

.contact-form textarea {
    resize: vertical;
    min-height: 120px;
}

.contact-form input:focus, 
.contact-form textarea:focus {
    border-color: #4CAF50;
    outline: none;
}

.contact-form button {
    width: 100%;
    padding: 14px;
    margin-top: 20px;
    background: #4CAF50;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.contact-form button:hover {
    background: #43a047;
}

/* CONTACT INFO BOXES */
.contact-info {
    flex: 1;
    min-width: 250px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-box {
    background: #f1f8f4;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 0 15px rgba(0,0,0,0.05);
}

.info-box h3 {
    color: #4CAF50;
    margin-bottom: 10px;
}

.info-box p {
    color: #555;
}

/* FOOTER */
.footer {
    background: #0D1117;
    color: white;
    text-align: center;
    padding: 20px;
    margin-top: 50px;
}

/* RESPONSIVE */
@media(max-width:768px){
    .contact-section { flex-direction: column; align-items: center; }
    .contact-hero h1 { font-size: 32px; }
    .navbar .nav-links a { margin-left: 15px; }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">MyPortfolio</div>
    <div class="nav-links"> 
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="skills.php">Skills</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact Us</a>
    </div>
</div>
<!-- HERO -->
<div class="contact-hero">
    <h1>Contact Me</h1>
</div>

<!-- CONTACT SECTION -->
<div class="contact-section">

    <!-- FORM -->
    <div class="contact-form">
        <h2>Get In Touch</h2>
        <form method="post">
            <label>Your Name</label>
            <input type="text" name="name" required>

            <label>Your Email</label>
            <input type="email" name="email" required>

            <label>Message</label>
            <textarea name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

    <!-- CONTACT INFO -->
    <div class="contact-info">
        <div class="info-box">
            <h3>📍 Location</h3>
            <p> Ik solutions 6 th road Rawalpindi, Pakistan</p>
        </div>
        <div class="info-box">
            <h3>📞 Phone</h3>
            <p>+92 3480182131</p>
        </div>
        <div class="info-box">
            <h3>✉ Email</h3>
            <p>info@iksolutions.com</p>
        </div>
    </div>

</div>

<!-- FOOTER -->
<div class="footer">
    &copy; <?php echo date("Y"); ?> Shahid Ali  | MERN Stack Developer
</div>

</body>
</html>
