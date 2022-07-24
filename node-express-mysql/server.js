import express from "express";
import con from './connection.js'

const app = new express();


app.get('/departamentos', (req, res) => {
  // executamos a query para o banco de dados
  con.query('SELECT * FROM DEPARTAMENTOS ORDER BY nome', (err, result) => {
    if (err) {
      res.send(err)
    }
    res.send(result);
  })
})

app.listen('3030', () => {
  console.log('Running server');
})

