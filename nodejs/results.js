const express = require('express');
const { Pool } = require('pg');
const app = express();
const port = 3001;
const pool = new Pool({
    user: 'user',
    host: 'postgres',
    database: 'votes',
    password: 'password',
    port: 5432,
});

app.get('/results', async (req, res) => {
    const result = await pool.query('SELECT choice, COUNT(*) as count FROM votes GROUP BY choice');
    res.json(result.rows);
});

app.listen(port, () => {
    console.log(`Results app listening at http://localhost:${port}`);
});
