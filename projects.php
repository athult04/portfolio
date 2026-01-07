<?php 
$page = 'projects'; 
include 'includes/header.php'; 
$projects_json = file_get_contents('data/projects.json');
$projects = json_decode($projects_json, true);
?>

<section id="projects">
    <div class="container">
        <h2 style="font-size: 2rem; margin-bottom: 2rem;"><span style="color:var(--accent-color); font-family: monospace; font-size: 1.5rem; margin-right: 10px;">02.</span>Some Things I've Built</h2>
        
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <div class="project-image">
                    <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                </div>
                <div class="project-info">
                    <div class="tags">
                        <?php foreach ($project['tags'] as $tag): ?>
                        <span class="tag"><?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <h3><?php echo $project['title']; ?></h3>
                    <p><?php echo $project['description']; ?></p>
                    <a href="<?php echo $project['link']; ?>" style="display: inline-block; margin-top: 1rem; color: var(--accent-color); font-size: 0.9rem;">View Project &rarr;</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
