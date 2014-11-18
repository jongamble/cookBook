// app/users.js

var User = require('./models/user');

module.exports = function(app, mongoose, passport) { 
	// set routes
	app.post('/createUser', function(req, res, next) {
		passport.authenticate('signup', function(err, user, info) {
		if (err) {
		  return next(err); // will generate a 500 error
		}
		// Generate a JSON response reflecting authentication status
		console.log(user);
		console.log(info);
		if (!user) {
		  return res.send({ success : false, message : 'authentication failed' });
		}
		return res.send({ success : true, message : 'authentication succeeded' });
		})(req, res, next);
	});


	app.post('/login', passport.authenticate('local-login', {

		successRedirect : '/profile', // redirect to the secure profile section
		failureRedirect : '/?failure=1' // redirect back to the signup page if there is an error
	}));

	app.get('/logout', function(req, res) {
		req.logout();
		res.redirect('/');
	});
}