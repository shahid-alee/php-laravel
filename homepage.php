<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

/* NAVBAR */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background: #4CAF50;
}

.logo {
    color: white;
    font-size: 22px;
    font-weight: bold;
}

.nav-links a {
    color: white;
    text-decoration: none;
    margin-left: 20px;
    font-weight: bold;
}

.nav-links a:hover {
    text-decoration: underline;
}

/* SLIDER */
.slider {
    width: 100%;
    height: 400px;
    overflow: hidden;
    position: relative;
}

.slides {
    display: flex;
    width: 300%;
    height: 100%;
    animation: slide 30s infinite;
}

.slides img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

/* SLIDER ANIMATION */
@keyframes slide {
    0%   { margin-left: 0%; }
    33%  { margin-left: -100%; }
    66%  { margin-left: -200%; }
    100% { margin-left: 0%; }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .slider, .slides img {
        height: 250px;
    }

    .nav-links a {
        margin-left: 10px;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">MyWebsite</div>
    <div class="nav-links">
        <a href="homepage.php">Home</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
    </div>
</div>

<!-- IMAGE SLIDER -->
<div class="slider">
    <div class="slides">
        <img src="images/k2 peak.jpg">
        <img src="images/marsur.jpg">
        <img src="images/upper.webp">
    </div>
</div>

</body>
</html>
