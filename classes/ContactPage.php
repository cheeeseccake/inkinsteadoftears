<?php

require_once 'Page.php';
require_once __DIR__ . '/../db.php';

class ContactPage extends Page {
    public function __construct() {
        parent::__construct('Contact - Inkinsteadoftears');
        $this->content = '
        <section class="contact">
            <div class="container">
                <h1>Contact</h1>
                <p>Reach out to us. Your words matter.</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <a href="mailto:hello@inkinsteadoftears.com"><i class="fas fa-envelope"></i></a>
                    </div>
                    <div class="contact-item">
                        <a href="https://www.instagram.com/inkinsteadoftears" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="contact-item">
                        <a href="https://www.tiktok.com/@inkinsteadoftears" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <form id="contact-form" method="post" action="contact.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </section>
        ';
    }

    public function handlePost() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Save to database
            $db = new Database();
            $pdo = $db->getConnection();
            $stmt = $pdo->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
            $stmt->execute([$name, $email, $message]);

            echo '<script>alert("Thank you for your message. We will get back to you soon.");</script>';
        }
    }
}

?>