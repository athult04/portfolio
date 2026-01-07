<?php $page = 'about'; include 'includes/header.php'; ?>

<section id="about">
    <div class="container">
        <h2 style="font-size: 2rem; margin-bottom: 2rem;"><span style="color:var(--accent-color); font-family: monospace; font-size: 1.5rem; margin-right: 10px;">01.</span>About Me</h2>
        
        <div class="about-grid">
            <div class="about-text">
                <p>Hello! My name is Alex and I enjoy creating things that live on the internet. My interest in web development started back in 2012 when I decided to try editing custom Tumblr themes — turns out hacking together HTML & CSS is pretty fun!</p>
                
                <p>Fast-forward to today, and I've had the privilege of working at an advertising agency, a start-up, a huge corporation, and a student-led design studio. My main focus these days is building accessible, inclusive products and digital experiences.</p>
                
                <p>Here are a few technologies I've been working with recently:</p>
                
                <ul class="skills-list">
                    <li>JavaScript (ES6+)</li>
                    <li>TypeScript</li>
                    <li>React</li>
                    <li>Eleventy</li>
                    <li>Node.js</li>
                    <li>WordPress</li>
                </ul>
            </div>
            
             <div class="about-img">
                <div style="position: relative; width: 100%; max-width: 300px; margin: 0 auto;">
                     <div style="background-color: var(--accent-color); border-radius: 4px; overflow: hidden; position: relative; z-index: 1;">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=600" alt="Profile" style="width: 100%; display: block; mix-blend-mode: multiply; filter: grayscale(100%) contrast(1);">
                     </div>
                     <div style="position: absolute; width: 100%; height: 100%; border: 2px solid var(--accent-color); top: 20px; left: 20px; z-index: 0; border-radius: 4px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
