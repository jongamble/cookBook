// app/lights.js

var User = require('./models/user');
var Recipe = require('./models/recipe');

module.exports = function(app, mongoose) { 
	// set routes
	app.get('/recipe', function(req, res) {
		Recipe.find().exec(function(err, items){
			res.render('recipe', {
				items:items //get recipe data and pass to template
			});
		});
	});


}