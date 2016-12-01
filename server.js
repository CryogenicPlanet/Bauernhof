var port = process.env.PORT;
var express = require('express');
var app = express();
var server = app.listen(port);
var bodyParser = require('body-parser');
var jsonParser = bodyParser.json();
var requestify = require('requestify');
var http = require('http');


app.post('/Arduino_Requests',jsonParser,function(req, res) {
    console.log(req.body);
    var mositure =req.body.moisture;
    var lat = req.body.lat;
    res.send();
    res.end();});