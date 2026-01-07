<?php $page = 'contact'; include 'includes/header.php'; ?>

<section id="contact">
    <div class="container" style="text-align: center; max-width: 600px;">
        <h2 style="font-size: 2rem; margin-bottom: 1rem;"><span style="color:var(--accent-color); font-family: monospace; font-size: 1.5rem; margin-right: 10px;">03.</span>Get In Touch</h2>
        <p style="color: #8892b0; margin-bottom: 3rem;">Although I'm not currently looking for any new opportunities, my inbox is always open. Whether you have a question or just want to say hi, I'll try my best to get back to you!</p>
        
        <form class="contact-form" action="#" method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <button type="submit" class="btn" style="background: transparent; cursor: pointer; font-size: 1rem;">Say Hello</button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
