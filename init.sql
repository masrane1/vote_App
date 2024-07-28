-- Create the votes table
CREATE TABLE IF NOT EXISTS votes (
    id SERIAL PRIMARY KEY,
    choice VARCHAR(255) NOT NULL
);

