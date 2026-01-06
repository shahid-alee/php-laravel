<!DOCTYPE html>
<html>
<head>
<title>My Skills - Portfolio</title>
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
    background: url('https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
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

/* SKILLS SECTION */
.skills-section {
    max-width: 900px;
    margin: 50px auto;
    padding: 20px;
}

.skills-section h2 {
    text-align: center;
    color: #333;
    margin-bottom: 40px;
}

.skill {
    margin-bottom: 25px;
}

.skill h3 {
    margin-bottom: 8px;
    color: #555;
}

.skill-bar {
    width: 100%;
    background: #f1f1f1;
    border-radius: 10px;
    overflow: hidden;
    height: 25px;
}

.skill-bar-fill {
    height: 100%;
    width: 0;
    background: #4CAF50;
    text-align: right;
    line-height: 25px;
    color: white;
    padding-right: 10px;
    border-radius: 10px;
    transition: width 2s ease-in-out;
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
    <h1>My Skills</h1>
</div>

<!-- SKILLS SECTION -->
<div class="skills-section">
    <h2>What I Can Do</h2>

    <!-- Skill 1 -->
    <div class="skill">
        <h3>HTML & CSS</h3>
        <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 95%;">95%</div>
        </div>
    </div>

    <!-- Skill 2 -->
    <div class="skill">
        <h3>JavaScript</h3>
        <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 90%;">90%</div>
        </div>
    </div>

    <!-- Skill 2 -->
    <div class="skill">
        <h3>PHP</h3>
        <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 30%;">30%</div>
        </div>
    </div>

    <!-- Skill 2 -->
    <div class="skill">
        <h3>laravel</h3>
        <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 10%;">10%</div>
        </div>
    </div>

    <!-- Skill 3 -->
    <div class="skill">
        <h3>React.js</h3>
        <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 85%;">85%</div>
        </div>
    </div>

    <!-- Skill 4 -->
    <div class="skill">
        <h3>Node.js & Express</h3>
        <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 80%;">80%</div>
        </div>
    </div>

    <!-- Skill 5 -->
    <div class="skill">
        <h3>MongoDB</h3>
        <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 75%;">75%</div>
        </div>
    </div>

    <!-- Skill 6 -->
    <div class="skill">
        <h3>Git & GitHub</h3>
        <div class="skill-bar">
            <div class="skill-bar-fill" style="width: 85%;">85%</div>
        </div>
    </div>

</div>

<!-- FOOTER -->
<div class="footer">
    &copy; <?php echo date("Y"); ?> Shahid Ali MERN Stack Developer
</div>

<!-- ANIMATION SCRIPT -->
<script>
window.addEventListener('DOMContentLoaded', () => {
    const fills = document.querySelectorAll('.skill-bar-fill');
    fills.forEach(fill => {
        const width = fill.style.width;
        fill.style.width = '0';
        setTimeout(() => {
            fill.style.width = width;
        }, 200);
    });
});
</script>

</body>
</html>
