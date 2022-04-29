const express = require('express');

const app = express();

app.get('/', function (req, res) {
    res.render('top.ejs');
  });

app.listen(3000);

const express = require('express');
const mysql = require('mysql');

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '設定したパスワード',
  database: 'list_app'
});

connection.connect((err) => {
  if (err) {
    console.log('error connecting: ' + err.stack);
    return;
  }
  console.log('success');
});


app.get('/wind', (req, res) => {
  res.render('wind.html');
});

//美徳・法則たち一覧
app.get('/virtue-law', (req, res) => {
  res.render('virtue-law.html');
});

app.get('/top.html', (req, res) => {
  res.render('top.html');
});
