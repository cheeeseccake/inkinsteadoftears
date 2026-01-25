<?php

require_once 'Page.php';
require_once __DIR__ . '/../db.php';

class FeaturedPage extends Page {
    public function __construct() {
        parent::__construct('Featured - Inkinsteadoftears');

        $db = new Database();
        $pdo = $db->getConnection();
        $stmt = $pdo->query("SELECT * FROM featured ORDER BY created_at DESC LIMIT 1");
        $featured = $stmt->fetch();

        $quote = $featured ? htmlspecialchars($featured['quote']) : '"Some days, I write so I don\'t cry.<br>Some nights, I cry because I wrote too much."';
        $author = $featured && $featured['author'] ? ' - ' . htmlspecialchars($featured['author']) : '';

        $this->content = '
        <section class="featured">
            <div class="container">
                <h1>Featured Piece</h1>
                <div class="featured-box">
                    <blockquote>
                        ' . $quote . $author . '
                    </blockquote>
                </div>
            </div>
        </section>
        ';
    }
}

?>