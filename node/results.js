const express = require('express');
const { Pool } = require('pg');
const app = express();
const port = 3001;

const pool = new Pool({
    user: 'postgres',
    host: 'postgres',
    database: 'votes',
    password: 'root',
    port: 5432,
});

// Route pour la racine
app.get('/', (req, res) => {
    res.send('Bienvenue sur l\'API de VOTE. Aller sur /results pour voir les comptes de vote.');
});

// Route pour obtenir les résultats
app.get('/results', async (req, res) => {
    try {
        const result = await pool.query('SELECT choice, COUNT(*) as count FROM votes GROUP BY choice');
        res.json(result.rows);
    } catch (err) {
        console.error('Error executing query', err);
        res.status(500).send('Internal Server Error');
    }
});

app.listen(port, () => {
    console.log(`Results app listening at http://localhost:${port}`);
});
