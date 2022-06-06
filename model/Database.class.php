<?php
class Database extends SQLite3 {
    // Stablish database connection
    public function __construct() {
        $this->open('db/cms.db');
        // If no tables, create the client table
        $sql =<<< EOF
            CREATE TABLE IF NOT EXISTS Client(
                ID INTEGER PRIMARY KEY,
                Name VARCHAR(255) NOT NULL,
                Email VARCHAR(255) NOT NULL,
                Phone VARCHAR(11) NOT NULL
            );
        EOF;
        $this->exec($sql);
    }
    
    // Add client
    public function addClient(Client $client) {
        $sql =<<< EOF
            INSERT INTO TABLE Client(Name, Email, Phone)
            VALUES ($client.getName, $client.getEmail, $client.getPhone);
        EOF;

        $this->exec($sql);
    }
    
    // Get client list
    public function getAllClients() {
        $sql =<<< EOF
            SELECT * FROM Client;
        EOF;
        return $this->query($sql); 
    }
}
