<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Creative Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <a href="index.php">Portfolio<span style="color:var(--accent-color)">.</span></a>
                </div>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php" class="<?php echo ($page == 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo ($page == 'about') ? 'active' : ''; ?>">About</a></li>
                    <li><a href="projects.php" class="<?php echo ($page == 'projects') ? 'active' : ''; ?>">Projects</a></li>
                    <li><a href="contact.php" class="<?php echo ($page == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                    <li><a href="assets/resume.pdf" class="btn" target="_blank">Resume</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
