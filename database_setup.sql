-- Create database
CREATE DATABASE IF NOT EXISTS inkinsteadoftears;

USE inkinsteadoftears;

-- Table for writings
CREATE TABLE writings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    excerpt TEXT NOT NULL,
    category VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample writings
INSERT INTO writings (title, excerpt, category) VALUES
('The Echo of Goodbye', 'In the silence after your departure, the walls whispered your name. Each echo a reminder of the love that lingered...', 'heartbreak'),
('Rebuilding from Ashes', 'From the ruins of yesterday, new beginnings emerge. Healing is not linear, but a gentle unfolding...', 'healing'),
('Secrets in the Dark', 'I\'ve carried this burden for too long. Tonight, I set it free on these pages...', 'confessions'),
('Dear You, Unsent', 'If words could bridge the distance, I\'d write them all. But for now, they remain here...', 'letters'),
('Whispers of Rain', 'Drops fall softly,<br> Washing away the stains,<br> New growth beneath...', 'poems'),
('Shattered Glass Heart', 'One crack, then another. The pieces scatter, but in their reflection, I see strength...', 'heartbreak');

-- Table for submissions
CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pen_name VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL,
    story TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for messages
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for featured pieces
CREATE TABLE featured (
    id INT AUTO_INCREMENT PRIMARY KEY,
    quote TEXT NOT NULL,
    author VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample featured piece
INSERT INTO featured (quote, author) VALUES
('"Some days, I write so I don\'t cry.<br>Some nights, I cry because I wrote too much."', 'Anonymous');