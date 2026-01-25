<?php

require_once 'Page.php';

class AboutPage extends Page {
    public function __construct() {
        parent::__construct('About - Inkinsteadoftears');
        $this->content = '
        <section class="about">
            <div class="container">
                <h1>Why Inkinsteadoftears</h1>
                <div class="about-content">
                    <div class="about-text">
                        <p>Welcome to Inkinsteadoftears, a sanctuary for the unspoken words that weigh on our hearts. Here, writing becomes a gentle rebellion against the silence that pain often imposes.</p>
                        <p>Writing as therapy: In the quiet moments when tears feel too vulnerable, ink flows freely. This space is for heartbreak, healing, and confessions—where every story is valid, every emotion honored.</p>
                        <p>Join us in transforming pain into prose, sorrow into stories. Your words matter here.</p>
                    </div>
                    <div class="about-image">
                        <img src="images/avatar.jpg" alt="Aesthetic Image" style="width: 400px; height: 400px; border-radius: 50%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
            </div>
        </section>
        ';
    }
}

?>