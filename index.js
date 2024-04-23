const express = require("express");
const mysql = require("mysql");

const app = express();

const conn = mysql.createConnection({
  host: "mysql-container",
  user: "root",
  password: "root",
  database: "dockercourse",
});

conn.connect();

app.get("/products", function (req, res) {
  conn.query("SELECT * FROM products", function (error, results) {
    if (error) {
      throw error;
    }

    res.send(results.map((item) => ({ name: item.name, price: item.price })));
  });
});

app.listen(9001, "0.0.0.0", function () {
  console.log("Observando na porta 9001");
});
