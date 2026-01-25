<?php

class Page {
    protected $title;
    protected $content;

    public function __construct($title, $content = '') {
        $this->title = $title;
        $this->content = $content;
    }

    public function renderHeader() {
        return '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($this->title) . '</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome-free-7.1.0-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav-container">
                <a href="index.php" class="logo">Inkinsteadoftears</a>
                <ul class="nav-links">
                    <li><a href="about.php">About</a></li>
                    <li><a href="writings.php">Writings</a></li>
                    <li><a href="featured.php">Featured</a></li>
                    <li><a href="submit.php">Submit</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
';
    }

    public function renderFooter() {
        return '
    <footer>
        <div class="footer-content">
            <p>Inkinsteadoftears ©</p>
            <div class="social-icons">
                <a href="mailto:hello@inkinsteadoftears.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.instagram.com/inkinsteadoftears" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@inkinsteadoftears" target="_blank"><i class="fab fa-tiktok"></i></a>
            </div>
            <p>"If I cannot cry, I will write."</p>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
';
    }

    public function renderContent() {
        return '<main>' . $this->content . '</main>';
    }

    public function render() {
        return $this->renderHeader() . $this->renderContent() . $this->renderFooter();
    }
}

?>