const express = require('express');
const mongoose = require('mongoose');
const app = express();
const ejs = require('ejs');

app.set('view engine', 'ejs');

mongoose.connect('mongodb+srv://wonghongshie63:9APWj7mjyzXSzR4M@main.ekujoy5.mongodb.net/?retryWrites=true&w=majority&appName=main');

app.get('/', (req, res) => {
    res.send('working')
    console.log('working')
})

app.listen(4000, function() {
    console.log('server is running');
})