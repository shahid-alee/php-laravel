<!DOCTYPE html>
<html>
<head>
<title>My Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
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
    height: 100vh;
    background: url('https://images.unsplash.com/photo-1605902711622-cfb43c4436d6?auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    position: relative;
}

.hero::after {
    content: "";
    position: absolute;
    left:0; top:0;
    width:100%; height:100%;
    background-color: rgba(0,0,0,0.5);
}

.hero-content {
    position: relative;
    z-index: 1;
}

.hero h1 {
    font-size: 50px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 22px;
    margin-bottom: 30px;
}

.hero a {
    text-decoration: none;
    color: white;
    background: #4CAF50;
    padding: 12px 25px;
    border-radius: 5px;
    font-weight: bold;
    transition: 0.3s;
}

.hero a:hover {
    background: #43a047;
}

/* SECTIONS */
section {
    padding: 80px 50px;
}

section h2 {
    text-align: center;
    margin-bottom: 40px;
    color: #0D1117;
    font-size: 36px;
}

/* ABOUT SECTION */
.about {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 50px;
}

.about img {
    width: 300px;
    border-radius: 10px;
}

.about p {
    max-width: 600px;
    font-size: 18px;
    line-height: 1.6;
    color: #333;
}

/* SKILLS SECTION */
.skills {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.skill-box {
    background: #f1f1f1;
    padding: 20px;
    width: 200px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.skill-box:hover {
    transform: scale(1.05);
}

.skill-box h3 {
    margin-bottom: 15px;
    color: #4CAF50;
}

.skill-box p {
    color: #555;
}

/* PROJECTS SECTION */
.projects {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.project-box {
    width: 300px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.project-box img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.project-box:hover {
    transform: scale(1.05);
}

.project-box .content {
    padding: 15px;
}

.project-box .content h3 {
    color: #4CAF50;
    margin-bottom: 10px;
}

.project-box .content p {
    color: #555;
    font-size: 14px;
}

/* CONTACT SECTION */
.contact form {
    max-width: 600px;
    margin: auto;
    display: flex;
    flex-direction: column;
}

.contact input, .contact textarea {
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 16px;
}

.contact button {
    padding: 15px;
    background: #4CAF50;
    color: white;
    border: none;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
}

.contact button:hover {
    background: #43a047;
}

/* FOOTER */
.footer {
    background: #0D1117;
    color: white;
    text-align: center;
    padding: 20px;
}

/* RESPONSIVE */
@media(max-width: 768px){
    .about { flex-direction: column; text-align: center;}
    .hero h1 { font-size: 36px;}
    .hero p { font-size: 18px;}
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">MyPortfolio</div>
    <div class="nav-links">
        <a href="homepage.php">Home</a>
        <a href="about.php">About</a>
        <a href="skills.php">Skills</a>
        <a href="#projects">Projects</a>
        <a href="contact.php">Contact</a>
    </div>
</div>

<!-- HERO -->
<div class="hero" id="home">
    <div class="hero-content">
        <h1>Hi, I'm Shahid ALi</h1>
        <p>MERN Stack Developer | Web Developer | Full Stack Enthusiast</p>
        <a href="#contact">Hire Me</a>
    </div>
</div>

<!-- ABOUT -->
<section class="about" id="about">
    <h2>About Me</h2>
    <img src="https://images.unsplash.com/photo-1603415526960-f8f16e7b6f2e?auto=format&fit=crop&w=600&q=80" alt="Profile">
    <p>Hello! I'm a passionate MERN stack developer with experience building web applications using MongoDB, Express, React, and Node.js. I love creating interactive and responsive web apps that provide excellent user experience.</p>
</section>

<!-- SKILLS -->
<section class="skills" id="skills">
    <h2>My Skills</h2>
    <div class="skill-box">
        <h3>MongoDB</h3>
        <p>Database management & NoSQL expertise</p>
    </div>
    <div class="skill-box">
        <h3>Express.js</h3>
        <p>Backend server & API development</p>
    </div>
    <div class="skill-box">
        <h3>React.js</h3>
        <p>Frontend development & SPA creation</p>
    </div>
    <div class="skill-box">
        <h3>Node.js</h3>
        <p>Server-side JavaScript & REST APIs</p>
    </div>
    <div class="skill-box">
        <h3>JavaScript</h3>
        <p>Programming & ES6+ expertise</p>
    </div>
</section>

<!-- PROJECTS -->
<section class="projects" id="projects">
    <h2>Projects</h2>
    <div class="project-box">
        <img src="https://images.unsplash.com/photo-1581091215363-7f671f1423e3?auto=format&fit=crop&w=600&q=80" alt="Project1">
        <div class="content">
            <h3>Portfolio Website</h3>
            <p>Responsive portfolio website built using React and Node.js backend.</p>
        </div>
    </div>
    <div class="project-box">
        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80" alt="Project2">
        <div class="content">
            <h3>E-commerce App</h3>
            <p>Full-stack MERN e-commerce application with cart and payment integration.</p>
        </div>
    </div>
    <div class="project-box">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="Project3">
        <div class="content">
            <h3>Blog Platform</h3>
            <p>MERN stack blog platform with user authentication and CRUD operations.</p>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
    <h2>Contact Me</h2>
    <form method="POST" action="send_contact.php">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>

<!-- FOOTER -->
<div class="footer">
    &copy; 2026 Shahid Ali| MERN Stack Developer | Follow me on
    <a href="#" style="color:#4CAF50; text-decoration:none;">LinkedIn</a>, 
    <a href="#" style="color:#4CAF50; text-decoration:none;">GitHub</a>
</div>

</body>
</html>
