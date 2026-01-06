<!DOCTYPE html>
<html>
<head>
<title>Projects - Portfolio</title>
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

/* HERO SECTION */
.hero {
    height: 200px;
    background: url('https://images.unsplash.com/photo-1505682634904-d7c2c3c61b5f?auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    position: relative;
    margin-top: 70px;
}

.hero::after {
    content: "";
    position: absolute;
    left:0; top:0;
    width:100%; height:100%;
    background-color: rgba(0,0,0,0.6);
}

.hero h1 {
    position: relative;
    z-index: 1;
    font-size: 42px;
}

/* PROJECTS SECTION */
.projects-section {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
}

.projects-section h2 {
    text-align: center;
    color: #333;
    margin-bottom: 40px;
}

/* PROJECT CARDS */
.project-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
}

.project-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    width: 300px;
    overflow: hidden;
    transition: transform 0.3s;
}

.project-card:hover {
    transform: translateY(-10px);
}

.project-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.project-card-content {
    padding: 20px;
}

.project-card-content h3 {
    color: #4CAF50;
    margin-bottom: 10px;
}

.project-card-content p {
    color: #555;
    margin-bottom: 15px;
}

.project-card-content a {
    text-decoration: none;
    color: white;
    background: #4CAF50;
    padding: 8px 12px;
    border-radius: 6px;
    margin-right: 10px;
    font-weight: bold;
    transition: background 0.3s;
}

.project-card-content a:hover {
    background: #43a047;
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
    .navbar .nav-links a { margin-left: 15px; }
    .hero h1 { font-size: 32px; }
    .project-cards { flex-direction: column; align-items: center; }
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
<div class="hero">
    <h1>My Projects</h1>
</div>

<!-- PROJECTS SECTION -->
<div class="projects-section">
    <h2>Some of My Work</h2>

    <div class="project-cards">
        <!-- Project 1 -->
        <div class="project-card">
            <img src="https://images.unsplash.com/photo-1581091215360-53a3b40b23a7?auto=format&fit=crop&w=800&q=80" alt="Project 1">
            <div class="project-card-content">
                <h3>Portfolio Website</h3>
                <p>A modern responsive portfolio website built with HTML, CSS, and JavaScript to showcase my projects.</p>
                <a href="#">Live Demo</a>
                <a href="#">GitHub</a>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="project-card">
            <img src="https://images.unsplash.com/photo-1590608897129-79bc0d4c4f16?auto=format&fit=crop&w=800&q=80" alt="Project 2">
            <div class="project-card-content">
                <h3>MERN Blog App</h3>
                <p>A full-stack blog application using MongoDB, Express, React, and Node.js with authentication and CRUD features.</p>
                <a href="#">Live Demo</a>
                <a href="#">GitHub</a>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="project-card">
            <img src="https://images.unsplash.com/photo-1607082345840-22a25f1a6a6c?auto=format&fit=crop&w=800&q=80" alt="Project 3">
            <div class="project-card-content">
                <h3>Task Manager App</h3>
                <p>A task management app to organize daily tasks, built using React.js and Node.js backend with MongoDB.</p>
                <a href="#">Live Demo</a>
                <a href="#">GitHub</a>
            </div>
        </div>

        <!-- Project 4 -->
        <div class="project-card">
            <img src="https://images.unsplash.com/photo-1581090700227-1b0ec4d27b6c?auto=format&fit=crop&w=800&q=80" alt="Project 4">
            <div class="project-card-content">
                <h3>E-commerce App</h3>
                <p>A full-stack e-commerce website with cart, checkout, and payment integration using MERN stack.</p>
                <a href="#">Live Demo</a>
                <a href="#">GitHub</a>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    &copy; <?php echo date("Y"); ?> Shahid ALi | MERN Stack Developer
</div>

</body>
</html>
