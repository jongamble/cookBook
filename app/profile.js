// app/lights.js

var User = require('./models/user');

module.exports = function(app, mongoose) { 
	// set routes
	app.get('/profile', function(req, res) {
		res.render('profile', {
			user : req.user
		});
	});
}