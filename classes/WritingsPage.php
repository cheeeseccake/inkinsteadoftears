<?php

require_once 'Page.php';
require_once __DIR__ . '/../db.php';

class WritingsPage extends Page {
    public function __construct() {
        parent::__construct('Writings - Inkinsteadoftears');

        $db = new Database();
        $pdo = $db->getConnection();
        $stmt = $pdo->query("SELECT * FROM writings ORDER BY created_at DESC");
        $writings = $stmt->fetchAll();

        $cards = '';
        foreach ($writings as $writing) {
            $cards .= '
            <div class="writing-card" data-category="' . htmlspecialchars($writing['category']) . '">
                <h3>' . htmlspecialchars($writing['title']) . '</h3>
                <p>' . htmlspecialchars($writing['excerpt']) . '</p>
                <a href="#" class="read-more">Read more</a>
            </div>
            ';
        }

        $this->content = '
        <section class="writings">
            <div class="container">
                <h1>Writings</h1>
                <div class="categories">
                    <button class="category-btn active" data-category="all">All</button>
                    <button class="category-btn" data-category="heartbreak">Heartbreak</button>
                    <button class="category-btn" data-category="healing">Healing</button>
                    <button class="category-btn" data-category="confessions">Confessions</button>
                    <button class="category-btn" data-category="letters">Letters Never Sent</button>
                    <button class="category-btn" data-category="poems">Soft Poems</button>
                </div>
                <div class="writings-grid">
                    ' . $cards . '
                </div>
            </div>
        </section>
        ';
    }
}

?>