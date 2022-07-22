import express from "express";

const app = new express();


app.get('/', (req, res) => {
  res.send('YO');
})

app.listen('3030', () => {
  console.log('Running server');
})

