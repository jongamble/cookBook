// set variables for environment
var express = require('express');
var app = express();
var port = process.env.PORT || 3000;
var mongoose = require('mongoose');
var passport = require('passport');
var flash = require('connect-flash');
var path = require('path');
var session = require('express-session');


var bodyParser = require('body-parser')


var configDB = require('./config/database.js');

// configuration ===============================================================
mongoose.connect(configDB.url); // connect to our database
require('./config/passport')(passport); // pass passport for configuration

// views as directory for all template files
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');
app.use( bodyParser.json() );
// required for passport
app.use(session({ resave: true,
                  saveUninitialized: true,
                  secret: 'uwotm8' }));
app.use(passport.initialize());
app.use(passport.session()); // persistent login sessions
app.use(flash()); // use connect-flash for flash messages stored in session
app.use(express.static('public'));

// set routes
    app.get('/', function(req, res) {
      res.render('index');
    });


// route middleware to make sure a user is logged in
function isLoggedIn(req, res, next) {

	// if user is authenticated in the session, carry on 
	if (req.isAuthenticated())
		return next();

	// if they aren't redirect them to the home page
	console.log('Not Authenticated');
	res.redirect('/');
}

var isAdmin = function(req, res, next) {
	if (req.user && req.user.flagAdmin === true)
		return next();
	
	// if they aren't redirect them to the home page
	console.log('Not an Admin');
	res.redirect('/profile');
};

require('./app/recipe.js')(app, mongoose, isLoggedIn);
require('./app/profile.js')(app, mongoose, isLoggedIn);

app.listen(port);
console.log('server is running');