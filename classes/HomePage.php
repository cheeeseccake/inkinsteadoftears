<?php

require_once 'Page.php';

class HomePage extends Page {
    public function __construct() {
        parent::__construct('Inkinsteadoftears');
        $this->content = '
        <section class="hero">
            <div class="hero-content">
                <h1>Inkinsteadoftears</h1>
                <p>writing the things I could never say</p>
                <div class="hero-buttons">
                    <a href="writings.php" class="btn">Read the Words</a>
                    <a href="submit.php" class="btn">Submit a Story</a>
                </div>
            </div>
        </section>
        ';
    }
}

?>