CREATE TABLE tempo_leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    phone VARCHAR(20),
    pickup VARCHAR(150),
    destination VARCHAR(150),
    start_date DATE,
    end_date DATE,
    passengers INT,
    page_url VARCHAR(255),
    ip_address VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
