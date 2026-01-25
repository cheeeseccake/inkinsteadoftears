<?php

require_once 'Page.php';
require_once __DIR__ . '/../db.php';

class SubmitPage extends Page {
    public function __construct() {
        parent::__construct('Submit a Story - Inkinsteadoftears');
        $this->content = '
        <section class="submit">
            <div class="container">
                <h1>Submit a Story</h1>
                <p>All words here are safe. All pain is valid.</p>
                <form id="submit-form" method="post" action="submit.php">
                    <div class="form-group">
                        <label for="pen-name">Pen Name</label>
                        <input type="text" id="pen-name" name="pen-name" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category" name="category" required>
                            <option value="">Select a category</option>
                            <option value="heartbreak">Heartbreak</option>
                            <option value="healing">Healing</option>
                            <option value="confessions">Confessions</option>
                            <option value="letters">Letters Never Sent</option>
                            <option value="poems">Soft Poems</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="story">Your Story</label>
                        <textarea id="story" name="story" rows="10" required></textarea>
                    </div>
                    <button type="submit" class="btn" style="display: block; margin: 0 auto;">Submit</button>
                </form>
            </div>
        </section>
        ';
    }

    public function handlePost() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            file_put_contents('debug.log', 'POST received at ' . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
            echo '<script>alert("POST received");</script>';
            $penName = htmlspecialchars($_POST['pen-name']);
            $title = htmlspecialchars($_POST['title']);
            $category = htmlspecialchars($_POST['category']);
            $story = htmlspecialchars($_POST['story']);

            try {
                // Save to database
                $db = new Database();
                $pdo = $db->getConnection();
                $stmt = $pdo->prepare("INSERT INTO submissions (pen_name, title, category, story) VALUES (?, ?, ?, ?)");
                $stmt->execute([$penName, $title, $category, $story]);

                echo '<script>alert("Thank you for submitting your story. It has been saved.");</script>';
            } catch (Exception $e) {
                echo '<script>alert("Error saving submission: ' . $e->getMessage() . '");</script>';
            }
        }
    }
}

?>