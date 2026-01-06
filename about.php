<!DOCTYPE html>
<html>
<head>
<title>About Me - Portfolio</title>
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

/* /* NAVBAR */
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

/* HERO/BANNER */
.about-hero {
    height: 350px;
    background: url('https://images.unsplash.com/photo-1603415526960-f8f16e7b6f2e?auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    position: relative;
    margin-top: 70px; /* navbar height */
}

.about-hero::after {
    content: "";
    position: absolute;
    left:0; top:0;
    width:100%; height:100%;
    background-color: rgba(0,0,0,0.5);
}

.about-hero h1 {
    position: relative;
    z-index: 1;
    font-size: 48px;
}

/* ABOUT CONTENT */
.about-content {
    max-width: 1000px;
    margin: 50px auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    justify-content: center;
    align-items: center;
}

.about-content img {
    width: 300px;
    border-radius: 10px;
}

.about-content p {
    max-width: 600px;
    font-size: 18px;
    line-height: 1.7;
    color: #333;
}

/* INFO BOXES */
.info-boxes {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 40px;
    flex-wrap: wrap;
}

.info-box {
    flex: 1;
    min-width: 250px;
    background: #f1f1f1;
    padding: 25px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.info-box:hover {
    transform: scale(1.05);
}

.info-box h3 {
    color: #4CAF50;
    margin-bottom: 15px;
}

.info-box p {
    color: #555;
    font-size: 16px;
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
    .about-content { flex-direction: column; text-align: center;}
    .about-content img { margin-bottom: 20px;}
    .about-hero h1 { font-size: 36px;}
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
<div class="about-hero">
    <h1>About Me</h1>
</div>

<!-- ABOUT CONTENT -->
<div class="about-content">
    <img src="https://images.unsplash.com/photo-1603415526960-f8f16e7b6f2e?auto=format&fit=crop&w=600&q=80" alt="Profile Picture">
    <p>Hello! I'm <strong>Shahid ALi</strong>, a passionate MERN stack developer. I specialize in building full-stack web applications using <strong>MongoDB, Express, React, and Node.js</strong>. My goal is to create interactive, responsive, and user-friendly applications that provide excellent user experiences. I love learning new technologies and continuously improving my skills to deliver high-quality projects.</p>
</div>

<!-- INFO BOXES -->
<div class="info-boxes">
    <div class="info-box">
        <h3>My Mission</h3>
        <p>To build secure, scalable, and efficient web applications.</p>
    </div>
    <div class="info-box">
        <h3>My Vision</h3>
        <p>To become a top-notch full-stack developer by building real-world projects.</p>
    </div>
    <div class="info-box">
        <h3>My Values</h3>
        <p>Quality, honesty, innovation, and continuous learning.</p>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    &copy; <?php echo date("Y"); ?>Shahid Ali  | MERN Stack Developer
</div>

</body>
</html>
