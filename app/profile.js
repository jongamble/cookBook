// app/lights.js

var User = require('./models/user');

module.exports = function(app, mongoose, isLoggedIn) { 
	// set routes
	app.get('/profile', isLoggedIn, function(req, res) {
		res.render('profile', {
			user : req.user
		});
	});
}