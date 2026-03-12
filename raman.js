const express = require("express");
const mysql = require("mysql2");
const bodyParser = require("body-parser");
const cors = require("cors");

const app = express();

app.use(cors());
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "kigali_innovation_db"
});


db.connect((err) => {
    if (err) {
        console.log("Database connection ramadhan on the top");
    } else {
        console.log("Connected to database");
    }
});

app.post("/clients", (req, res) => {});

app.get("/clients", (req, res) => {});

app.get("/clients/:id", (req, res) => {});

app.put("/clients/:id", (req, res) => {});

app.delete("/clients/:id", (req, res) => {});

app.listen(3000, () => {
    console.log("Server running on port 3000");
});
